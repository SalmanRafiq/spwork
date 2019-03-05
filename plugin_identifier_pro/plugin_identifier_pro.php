<?php

/**
 * Plugin Identifier Pro.
 * Take this as a base plugin and modify as per your need.
 *
 * @package Plugin Identifier
 * @author Muhammad Salman Rafiq
 * @license GPL-2.0+
 * @link https://www.skypotential.co.uk/
 * @copyright 2019 Skypotential, LLC. All rights reserved.
 *
 *            @wordpress-plugin
 *            Plugin Name: Plugin Identifier Pro
 *            Plugin URI: https://www.skypotential.co.uk/
 *            Description: In this plugin you can identify which plugins are required for your wordpress website.
 *            Version: 3.0
 *            Author: Muhammad Salman Rafiq
 *            Author URI: https://www.skypotential.co.uk/
 *            Text Domain: plugin_identifier_pro
 *            Contributors: Muhammad Salman Rafiq
 *            License: GPL-2.0+
 *            License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


error_reporting(E_ALL);
ini_set('display_errors','on');
ini_set('error_reporting', E_ALL );


$pluginsToRemove = array(           
    'remove_free' => 'plugin_identifier/plugin_identifier.php',
    'remove_pro' => 'plugin_identifier_pro/plugin_identifier_pro.php'
);


//All plugin scripts css,js,bootstrap ect...
include_once( plugin_dir_path( __FILE__ ) . '/includes/enqeue_scripts.php');

//menu scripts
include_once( plugin_dir_path( __FILE__ ) . '/menus.php');

include_once( plugin_dir_path( __FILE__ ) . '/includes/core.php');

require_once( ABSPATH . 'wp-admin/includes/plugin.php' );






function Uninstalled_free_version($pluginsToRemove){

    if (in_array($pluginsToRemove['remove_free'], apply_filters('active_plugins', get_option('active_plugins')))){                
        mm_plugin_deactivate($pluginsToRemove['remove_free']);
    }
    else{
        
    }   
}
Uninstalled_free_version($pluginsToRemove);





 


