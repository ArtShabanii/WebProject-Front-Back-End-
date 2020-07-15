<?php
include_once '../models/bookMapper.php';
include_once '../models/bookModel.php';
include_once 'DbConn.php';
class BookController{

    public function GetBooks(){
        $sql = "SELECT * FROM Book";

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