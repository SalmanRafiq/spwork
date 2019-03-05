<?php


require_once("../../../../wp-load.php");

include_once(plugin_dir_path(__FILE__) . '/data.php');
include_once(plugin_dir_path(__FILE__) . '/core.php');




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
