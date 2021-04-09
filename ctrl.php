<?php
require_once 'init.php';
/*
switch($action){
    default: 
        include 'check.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->generateView();
        break;
    case 'login' :
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->login();
        break;
    case 'logout' :
        $ctrl = new app\controllers\LoginCtrl();
        $ctrl->logout();
        break;
    case 'calcCompute' :
        include 'check.php';
        $ctrl = new app\controllers\CalcCtrl();
        $ctrl->calc();
        break;
    case 'action1':
        //
        break;
    case 'action2':
        //
        break;
}
getConf()->login_action = 'login';
switch ($action) {
	default :
		\core\control('app\\controllers', 'CalcCtrl',		'generateView', ['user','admin']);
	case 'login': 
		\core\control('app\\controllers', 'LoginCtrl',	'login');
	case 'calcCompute' : 
		//zamiast pierwszego parametru można podać null lub '' wtedy zostanie przyjęta domyślna przestrzeń nazw dla kontrolerów
		\core\control(null, 'CalcCtrl',	'calc',		['user','admin']);
	case 'logout' : 
		\core\control(null, 'LoginCtrl',	'logout',		['user','admin']);
}*/

getRouter()->setDefaultRoute('calcShow');
getRouter()->setLoginRoute('login');

getRouter()->addRoute('calcShow', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('calcCompute', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user','admin']);

getRouter()->go();