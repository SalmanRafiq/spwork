<?php 

add_action('admin_menu', 'plugin_identifier_pro_setup_menu'); 
function plugin_identifier_pro_setup_menu(){
    add_menu_page(
        'Plugin Identifier Pro', 
        'Plugin Identifier Pro',
         'manage_options',
         plugin_dir_path(__FILE__) . '/index.php',
           null
        );
         
}
