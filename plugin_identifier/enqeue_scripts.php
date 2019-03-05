<?php

//load css , scripts , bootstrap
function pi_enqeue_scripts(){       

//CSS Enqeue
    //bootstrap  4
    wp_register_style('prefix_bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style('prefix_bootstrap_css');

    //bootstrap 3
    wp_register_style('pi_bootstrap_css', plugins_url('plugin_identifier/styles/bootstrap.min.css'));
    wp_enqueue_style('pi_bootstrap_css');

    //JQuery
     wp_register_script('prefix_jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js');
     wp_enqueue_script('prefix_jQuery');

    //Bootstrap JS
     wp_register_script('prefix_bootstrap_js', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js');
     wp_enqueue_script('prefix_bootstrap_js');
 
     
         
    
    
    //fontawesome
    wp_register_style('pi_fontawesome_css', 'https://use.fontawesome.com/releases/v5.7.2/css/all.css');
    wp_enqueue_style('pi_fontawesome_css');
 
    //Plugin Identifier custom css
    wp_register_style('plugin_identifier_css',  plugins_url( 'plugin_identifier/styles/main.css' ));
    wp_enqueue_style('plugin_identifier_css');

    // custom css
    wp_register_style( 'plugin_identifier_css', plugins_url( 'plugin_identifier/styles/plugin.css' ) );
    wp_enqueue_style( 'plugin_identifier_css' );

}
add_action( 'admin_enqueue_scripts', 'pi_enqeue_scripts' );
