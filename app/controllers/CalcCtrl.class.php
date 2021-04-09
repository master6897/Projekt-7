<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\utils\CalcResult;

class CalcCtrl{
   private $form;
   private $result;
   
   public function __construct() {
       $this->form = new CalcForm();
       $this->result = new CalcResult();
   }
   
   public function getParams(){
        $this->form->credits = isset($_REQUEST['credits'])? $_REQUEST['credits']: null;
        $this->form->years = isset($_REQUEST['years'])? $_REQUEST['years']: null;
        $this->form->percentage = isset($_REQUEST['percent'])?$_REQUEST['percent']: null ;
   }
   
   public function validate(){
       if(!(isset($this->form->credits) && isset($this->form->years) && isset($this->form->percentage))){
        return false;
    }
    if($this->form->credits == ""){
        getMessages()->addError("Nie podano wartości kredytu");
    }
    if($this->form->years == ""){
        getMessages()->addError("Nie podano na ile lat");
    }
    if($this->form->percentage == ""){
        getMessages()->addError("Nie podano na jakim oprocentowaniu");
    }

    //walidacja danych
    if(empty(getMessages()->isError())){
        if(! is_numeric($this->form->credits)){
            getMessages()->addError("Kredyt musi być liczbą!");
        }
        if(! is_numeric($this->form->years)){
            getMessages()->addError("Lata musza być liczbą!");
        }
        if(! is_numeric($this->form->percentage)){
            getMessages()->addError("Oprocentowanie musi być liczbą!");
        }
    }
    
    return !getMessages()->isError();
   }
   
   public function action_calcCompute(){
       $this->getParams();
       
       if($this->validate()){
       
        $this->form->credits = floatval($this->form->credits);
        $this->form->years = intval($this->form->years);
        $this->form->percentage = floatval($this->form->percentage);

        $this->result->cost = $this->form->credits + ($this->form->credits*($this->form->percentage/100));
        $this->result->rata = $this->result->cost/(($this->form->years)*12);
       }
       $this->generateView();
   }
   
   public function action_calcShow(){
       $this->generateView();
   }
   
   public function generateView(){

     getSmarty()->assign('page_title','Kalkulator');
     getSmarty()->assign('page_person','Marcin Puc');
     getSmarty()->assign('page_localization','Jastrzębie-Zdrój');
     getSmarty()->assign('page_email','pucmarcin@gmail.com');
     getSmarty()->assign('page_phone','666-666-666');

     getSmarty()->assign('rata',$this->result->rata);
     getSmarty()->assign('cost',$this->result->cost);
     getSmarty()->assign('credits',$this->form->credits);
     getSmarty()->assign('years',$this->form->years);
     getSmarty()->assign('percentage',$this->form->percentage);

     getSmarty()->display('calc.tpl');
   }
}

