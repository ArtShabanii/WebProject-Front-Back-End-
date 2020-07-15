<?php

include_once 'DBConn.php';
include_once 'contactModel.php';

class ContactMapper{
    private $contact;
    private $connection;
    public function __construct(\Contact $contact){
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->contact = $contact;
    }

    public function InsertIntoContact(){
        $sql = "INSERT INTO Contact (UserID, Message) VALUES (:UserID, :Message)";

        $userID = $this->contact->getUserID();
        $message = $this->contact->getMessage();
        echo $userID."test";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":UserID", $userID);
        $statement->bindParam(":Message", $message);

        try{
            $statement->execute();
        }catch(PDOException $e){
            echo 'FAILED';
        }
    }
}
?>