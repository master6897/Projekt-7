<?php
$config->server_name = 'localhost';
$config->server_url = 'http://'.$config->server_name;
$config->app_root = '/Projekt-7';

$config->action_root = $config->app_root.'/ctrl.php?action=';
$config->action_url = $config->server_url.$config->action_root;
$config->app_url = $config->server_url.$config->app_root;
$config->root_path = dirname(__FILE__);
//& jest wskaźnikiem na zmienną
/*function out(&$param){
    if(isset($param)){
        echo $param;
    }
}*/
?>