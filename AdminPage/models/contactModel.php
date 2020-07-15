<?php
class Contact{

    private $contact_ID;
    private $userID;
    private $message;

    public function __construct($userID, $message){
        $this->userID = $userID;
        $this->message = $message;
    }

    public function getUserID(){
        return $this->userID;
    }

    public function getMessage(){
        return $this->message;
    }

    public function setUserID($userID){
        $this->userID = $userID;
    }

    public function setMessage($message){
        $this->message = $message;
    }
}

?>
