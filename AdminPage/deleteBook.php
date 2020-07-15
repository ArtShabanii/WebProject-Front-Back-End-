<?php
include_once './models/DbConn.php';
$id = $_GET['id'];
echo $id;

        $sql = "DELETE FROM Book WHERE Book_ID=$id";
        
        $obj = new DBConnection();
        $connection = $obj->getConnection();
        $statement = $connection->prepare($sql);
        try{
            $statement->execute();
            header("Location: books.php");

        }catch(PDOException $e){
            echo 'FAILED';
        }
?>