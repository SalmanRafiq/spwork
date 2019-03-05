<?php 

add_action('admin_menu', 'plugin_identifier_setup_menu'); 
function plugin_identifier_setup_menu(){
    add_menu_page(
        'Plugin Identifier', 
        'Plugin Identifier',
         'manage_options',
         plugin_dir_path(__FILE__) . '/index.php',
           null
        );
         
}
