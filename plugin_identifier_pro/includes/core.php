<?php








function mm_get_plugins($plugins)
{      
    $args = array(
            'path' => ABSPATH. 'wp-content/plugins/',
            'preserve_zip' => false
    );   
                mm_plugin_download($plugins['path'], $args['path'].$plugins['name'].'.zip');
                mm_plugin_unpack($args, $args['path'].$plugins['name'].'.zip');
                mm_plugin_activate($plugins['install']);
}






//download plugin
function mm_plugin_download($url, $path) 
{
               
        $ch = curl_init($url);    
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_URL, $url);    
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        curl_setopt($ch, CURLOPT_TIMEOUT, 15);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);      
        $data = curl_exec($ch);                   
        curl_close($ch);

        
    if(file_put_contents($path, $data )){                  
         return true;
    }          

    else{      
        return false;
    }
         
}

//unzip plugin
function mm_plugin_unpack($args, $target)
{
    if($zip = zip_open($target))
    {
            while($entry = zip_read($zip))
            {
                    $is_file = substr(zip_entry_name($entry), -1) == '/' ? false : true;
                    $file_path = $args['path'].zip_entry_name($entry);
                    if($is_file)
                    {
                            if(zip_entry_open($zip,$entry,"r")) 
                            {
                                    $fstream = zip_entry_read($entry, zip_entry_filesize($entry));
                                    file_put_contents($file_path, $fstream );
                                    chmod($file_path, 0777);
                                    //echo "save: ".$file_path."<br />";
                            }
                            zip_entry_close($entry);
                    }
                    else
                    {
                            if(zip_entry_name($entry))
                            {
                                
                                    
                                    mkdir($file_path);
                                    chmod($file_path, 0777);
                                    //echo "create: ".$file_path."<br />";
                            }
                    }
            }
            zip_close($zip);
             
    }
    if($args['preserve_zip'] === false)
    {                  

          unlink($target);            
          
    }
}

//activate Plugin
function mm_plugin_activate($installer){


        
    $current = get_option('active_plugins');
    $plugin = plugin_basename(trim($installer));        
    if(!in_array($plugin, $current))
    {               
            $current[] = $plugin;
            sort($current);
            do_action('activate_plugin', trim($plugin));
            update_option('active_plugins', $current);
            do_action('activate_'.trim($plugin));
            do_action('activated_plugin', trim($plugin));
            return true;
    }
    else
            return false;
}   


function delete_directory($dirname) {
        if (is_dir($dirname))
          $dir_handle = opendir($dirname);
    if (!$dir_handle)
         return false;
    while($file = readdir($dir_handle)) {
          if ($file != "." && $file != "..") {
               if (!is_dir($dirname."/".$file))
                    unlink($dirname."/".$file);
               else
                    delete_directory($dirname.'/'.$file);
          }
    }
    closedir($dir_handle);
    rmdir($dirname);
    return true;
    }



    
function mm_plugin_deactivate($installer){    

        $plugin = plugin_basename(trim($installer));        
        deactivate_plugins($plugin);    
        $target = ABSPATH. 'wp-content/plugins/plugin_identifier';
        delete_directory($target);
    }   