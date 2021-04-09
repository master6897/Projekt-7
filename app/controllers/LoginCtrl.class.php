<?php

namespace app\controllers;

use app\forms\LoginForm;
use app\transfer\User;

class LoginCtrl{
   private $form;
   
   public function __construct() {
       $this->form = new LoginForm();
   }
   
   public function getParams(){
        $this->form->login = isset($_REQUEST['login'])? $_REQUEST['login']: null;
        $this->form->password = isset($_REQUEST['password'])? $_REQUEST['password']: null;
   }
   
   public function validate(){
       if(!(isset($this->form->login) && isset($this->form->password))){
        return false;
    }
    if($this->form->login == ""){
        getMessages()->addError("Nie podano loginu");
    }
    if($this->form->password == ""){
        getMessages()->addError("Nie podano hasła");
    }

    //walidacja danych
    if(!getMessages()->isError()){
        if($this->form->login == "admin" && $this->form->password == "admin"){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            $user = new User($this->form->login, 'admin');
            $_SESSION['user'] = serialize($user);
            \core\addRole($user->role);
        }
        else if($this->form->login == "user" && $this->form->password == "user"){
            if(session_status() == PHP_SESSION_NONE){
                session_start();
            }
            $user = new User($this->form->login, 'user');
            $_SESSION['user'] = serialize($user);
            \core\addRole($user->role);
        }
        else{
            getMessages()->addError("Niepoprawny login lub hasło!");
        }
    }
    
    return !getMessages()->isError();
   }
   
   public function action_login(){
       $this->getParams();
       
       if($this->validate()){
           header("Location: ".getConf()->app_url."/");
       }else{
           $this->generateView();
       }
   }
   
   public function action_logout(){
       if(session_status() == PHP_SESSION_NONE){
           session_start();
       }
        session_destroy();
        $this->generateView();
   }
   
   public function generateView(){

     getSmarty()->assign('page_title','Strona logowania');
     getSmarty()->assign('page_person','Marcin Puc');
     getSmarty()->assign('page_localization','Jastrzębie-Zdrój');
     getSmarty()->assign('page_email','pucmarcin@gmail.com');
     getSmarty()->assign('page_phone','666-666-666');

     getSmarty()->assign('form',$this->form);

     getSmarty()->display('LoginView.tpl');
   }
}


