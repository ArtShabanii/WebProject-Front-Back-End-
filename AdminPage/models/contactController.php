<?php
include_once 'bookMapper.php';
include_once 'bookModel.php';
include_once 'DbConn.php';
class ContactController{
    public function GetContact(){
        $sql = "SELECT Contact_ID, Name, Message FROM Contact c, Useri u WHERE u.User_ID=c.UserID";

        $obj = new DBConnection();
        $connection = $obj->getConnection();
        
        $statement = $connection->prepare($sql);

        try{
            $statement->execute();
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }catch(PDOException $e){
            echo 'FAILED';
        }

    }
}
?>