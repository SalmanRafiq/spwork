<?php


require_once("../../../wp-load.php");

include_once(plugin_dir_path(__FILE__) . '/core.php');

$listOfPlugins = array(
    array(
        'no' => 0,
        'name' => 'Updraft Plus',
        'path' => 'https://downloads.wordpress.org/plugin/updraftplus.latest-stable.zip',
        'install' => 'updraftplus/updraftplus.php'
    ),
    array(
        'no' => 1,
        'name' => 'Wordpress Seo',
        'path' => 'https://downloads.wordpress.org/plugin/wordpress-seo.latest-stable.zip',
        'install' => 'wordpress-seo/wp-seo.php'
    ),
    array(
        'no' => 2,
        'name' => 'Wordfence',
        'path' => 'https://downloads.wordpress.org/plugin/wordfence.latest-stable.zip',
        'install' => 'wordfence/wordfence.php'
    ),
    array(
        'no' => 3,
        'name' => 'Google Analytics',
        'path' => 'https://downloads.wordpress.org/plugin/google-analytics-dashboard-for-wp.latest-stable.zip',
        'install' => 'google-analytics-dashboard-for-wp/gadwp.php'
    ),
    array(
        'no' => 4,
        'name' => 'WP Optimize',
        'path' => 'https://downloads.wordpress.org/plugin/wp-optimize.latest-stable.zip',
        'install' => 'wp-optimize/wp-optimize.php'
    )
);

$aResult = array();

if (!isset($_POST['action'])) {
    $aResult['error'] = 'No function name!';
    return false;
}

if (!isset($_POST['plugin'])) {
    $aResult['error'] = 'No  Plugin to Install!';
    return false;
}

if (!isset($aResult['error'])) {
    mm_get_plugins($listOfPlugins[$_POST['plugin']]);
}
