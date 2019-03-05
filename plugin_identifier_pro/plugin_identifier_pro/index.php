<!DOCTYPE html>
<html lang="en">
  <head>
    <title>
    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <?php
include_once(plugin_dir_path(__FILE__) . '/includes/data.php');
      $swap_row_bg = "";
?>

  <!-- Modal Loading  -->
  <div id="m_loader" class="modal fade" role="dialog">
						  <div class="modal-dialog">

						    <!-- Modal content-->
						    <div class="modal-content">
						      <div class="modal-header">
						        <button type="button" class="close" data-dismiss="modal">&times;</button>
						        <h4 class="modal-title">Modal Header</h4>
						      </div>
						      <div class="modal-body">
						        <p>Some text in the modal.</p>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						      </div>
						    </div>

						  </div>
						</div>


  <!-- Modal Ending -- >



    <!-- main container -->
    <div class="container-fluid">
      <div class="row">
        <div class="main_container">
          <!-- main header -->
          <section class="main_header m-t-30">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="left_content">
                    <div class="brand_logo">
                      <a href="#">Business Resource Premimum
                      </a>
                    </div>
                    <div class="links">
                      <ul>
                        <li><a href="#">FAQ  </a>
                        </li>
                        <li><a href="#">Ask a Question  </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="right_content">
                    <a class="btn btn-lg upgrade_btn" href="#">Upgrade Now!
                    </a>
                  </div>	
                </div>
              </div>
            </div>				
          </section>
          <section class="banner m-t-15">
            <div class="container">
              <div class="row">
                <div class="col-md-12 col-xs-12">
                  <div class="banner_img">
                    <!-- <img src="./images/banner.png"> -->
                    <div class="inner_content">
                      <p>primium use only
                      </p>
                      <h3>Business Resource
                      </h3>
                      <h3>Premium Plugin
                      </h3>
                      <a class="btn btn-lg download_btn m_t_custom" href="#">Download
                      </a>
                    </div>
                  </div>	
                </div>
              </div>
            </div>				
          </section>
          <section class="plugin_content m-t-30">
            <div class="container">
              <div class="row">
                <div class="col-md-7 col-xs-12">
                  <div class="">
                    <div class="bg_yellow">
                      <div class="col-md-8 col-xs-6">
                        <h4 class="text-center plugin_heading">Plugin Details
                        </h4>
                      </div>
                      <div class="col-md-4 col-xs-6">
                        <h4 class="text-center plugin_heading">Business Resource Free
                        </h4>
                      </div>
                    </div>
                    <div class="bg_blue">
                      <div class="col-md-3 col-xs-3">
                        <h5 class="text-center plugin_heading">Name
                        </h5>
                      </div>
                      <div class="col-md-5 col-xs-3">
                        <h5 class="text-center plugin_heading">business website essentials
                        </h5>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h5 class="text-center plugin_heading">installed
                        </h5>
                      </div>
                      <div class="col-md-2 col-xs-3">
                        <h5 class="text-center plugin_heading">status
                        </h5>
                      </div>
                    </div>
                  
                  <!-- start php foreach loop  -->
                  <div class="table_wrapper bg_light_gray m-t-15">
                              


                


                  <?php







foreach ($listOfPlugins as $item) {

            if($item['no'] % 2 == 0 ){
                  $swap_row_bg  = "bg_light_gray";
            }
            else{
                  $swap_row_bg  = "bg_light_blue";
            }


    ?>      

<div class="table_wrapper    <?php echo $swap_row_bg?>" >
                        <div class="">
                          <div class="col-md-3 col-xs-3">
                            <div class="row">
                              <div class="table_logo">
                                <div class="table_wrapper">
                                  <div class="height_100_per">
                                    <img src="<?php echo plugin_dir_url(__FILE__) .  $item['plugin_icon']; ?>"  />
                                    <p class="icon_title"><?php echo $item['name']; ?>
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-5 col-xs-3">
                            <p class="para plugin_desc">
                            <?php echo $item['Desc']; ?>
                            
                            </p>
                          </div>
                          <div class="">	
                            <div class="col-md-2 col-xs-3 p-x-y-0">
                              <div class="table_wrapper">
                                <div class="height_100_per">
                                  <div class="text-center tick_icon">


                                  <?php
                                        if (in_array($item['install'], apply_filters('active_plugins', get_option('active_plugins')))) {                                    
                                  ?>    
                                    <i  id="<?php echo $item['no']; ?>"   class=""  disabled><i class="fas fa-check"></i></i>

                                  <?php
                                } else {
                                    ?> 
                                    <span  id="<?php echo $item['no'] . '_ajax_loader'; ?>" class="d-none">
                                        <img src="<?php echo plugin_dir_url(__FILE__) . 'images/ajax-loader.gif'; ?>">
                                    </span>
                                          <i id="<?php echo $item['no']; ?>" class="cross_icon plugin_iu"  
                                          data-toggle="tooltip" data-placement="top" title="Click Download Now" enabled>
                                          <i class="fas fa-times"></i>
                                          </i>
                                    <?php
                                    } ?>

                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!-- <div class="height_100_per"> -->
                          <div class="col-md-2 col-xs-3 p-x-y-0">
                            <div class="table_wrapper">
                              <div class="height_100_per">



                              

                                <?php
                                  if (!in_array($item['install'], apply_filters('active_plugins', get_option('active_plugins')))) {                                        
                                ?>    
                                    <p class="text-center  status_not_active nowrap_text">                                    
                                    </p>
                                        <a href="javascript:void(0)" id="<?php echo $item['no']; ?>" class="cross_icon-cursor"  
                                          data-toggle="tooltip" data-placement="top" title="Install Now"
                                          onclick="mm_get_plugins(this.id,this); " enabled>Download Now</a>                                            


                                <?php
                                    } else {
                                ?>     

                                    <p class="text-center status_active">Activated                                    
                                    </p>


                                <?php
                                    } ?>

                                


                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                        </div>
                      </div>
<?php } ?>








                   
                  </div>




                


                  <!-- End php foreach loop  -->





















                  </div>
                </div>
                <div class="col-md-5 col-xs-12">
                  <div class="about_plugin_container">
                    <h4 class="heading">Business Resource Primimum
                    </h4>
                    <p class="dark_para">Hampden-Sydney College in Virgin, looked up one of the more obscure Latin words
                    </p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <a class="btn btn-lg download_btn" href="#">Download
                    </a>
                  </div>	
                </div>
              </div>
            </div>				
          </section>
        </div>
      </div>
    </div>
    <!-- end main container -->

    <?php
add_action('admin_footer', 'install_plugin'); // Write our JS below here
function install_plugin()
{
    ?>
	<script type="text/javascript">
                                                              
            function mm_get_plugins(id,obj){

            var my_ajaxurl = '<?php
            echo admin_url('../wp-content/plugins/plugin_identifier_pro/includes/ajax.php', 'relative'); ?>';

                        
                        
                        // $('#m_loader').modal('show');

                  $('#'+ id + '_ajax_loader').toggleClass('d-none');
                  $('#'+id).toggleClass('d-none');                                    
                  

                var action = "";
                  //alert(obj.innerText +" "+ id);                  
                  if( obj.innerText == "Install Now" ){
                        action = "Install Now";
                  }
                  else{
                        action ="Uninstall";
                  }
                        var data = {
			'action': action,
			'plugin': id
		};
		// since 2.8 ajaxurl is always defined in the admin header and points to admin-ajax.php
		jQuery.post(my_ajaxurl, data, function(response) {   
                  //alert(response);  
                  $('#'+ id + '_ajax_loader').toggleClass('d-none'); 
                  // $('#m_loader').modal('hide');
                  window.location.reload(true);
                  

		      }).done(function() {
                  
                  }).fail(function(xhr, status, error) {
                  // alert(error);
                  // alert(xhr);
                  // alert(status);
                  });




            }






	</script> <?php
}

?>



















  </body>  
</html>
