<?php 

function replace_plugin() {
    // modify these variables with your new/old plugin values
    $plugin_slug = 'wordpress-seo/wp-seo-main.php';
    $plugin_zip = 'https://downloads.wordpress.org/plugin/wordpress-seo.9.6.zip';
    $old_plugin_slug = 'reset-wp/reset-wp.php';
     
    echo 'If things are not done in a minute <a href="plugins.php">click here to return to Plugins page</a><br><br>';
    echo 'Starting ...<br><br>';
     
    echo 'Check if new plugin is already installed - ';
    if ( is_plugin_installed( $plugin_slug ) ) {
      echo 'it\'s installed! Making sure it\'s the latest version.';
      upgrade_plugin( $plugin_slug );
      $installed = true;
    } else {
      echo 'it\'s not installed. Installing.';
      $installed = install_plugin( $plugin_zip );
    }
     
    if ( !is_wp_error( $installed ) && $installed ) {
      echo 'Activating new plugin.';
      $activate = activate_plugin( $plugin_slug );
       
      if ( is_null($activate) ) {
        echo '<br>Deactivating old plugin.<br>';
        deactivate_plugins( array( $old_plugin_slug ) );
         
        echo '<br>Done! Everything went smooth.';
      }
    } else {
      echo 'Could not install the new plugin.';
    }
  }
     
  function is_plugin_installed( $slug ) {
    if ( ! function_exists( 'get_plugins' ) ) {
      require_once ABSPATH . 'wp-admin/includes/plugin.php';
    }
    $all_plugins = get_plugins();
     
    if ( !empty( $all_plugins[$slug] ) ) {
      return true;
    } else {
      return false;
    }
  }
   
  function install_plugin( $plugin_zip ) {
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    wp_cache_flush();
     
    $upgrader = new Plugin_Upgrader();
    $installed = $upgrader->install( $plugin_zip );
   
    return $installed;
  }
   
  function upgrade_plugin( $plugin_slug ) {
    include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
    wp_cache_flush();
     
    $upgrader = new Plugin_Upgrader();
    $upgraded = $upgrader->upgrade( $plugin_slug );
   
    return $upgraded;
  }
















?>