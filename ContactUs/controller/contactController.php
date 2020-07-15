<?php
include_once '../models/contactMapper.php';
include_once '../models/contactModel.php';
class ContactController{
    public function InsertContact($UserID, $Message){
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert studenti ndatabase
        $Contact = new Contact($UserID, $Message);
        $contactMapper = new contactMapper($Contact);
        $contactMapper->InsertIntoContact($UserID, $Message);
        
        //insert kursin studenti


    }

    public function GetUsers(){
        //return array;
    }
}
?>