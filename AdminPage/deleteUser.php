<?php
include_once './models/DbConn.php';
$id = $_GET['id'];
echo $id;

        $sql = "DELETE FROM Useri WHERE User_ID=$id";
        
        $obj = new DBConnection();
        $connection = $obj->getConnection();
        $statement = $connection->prepare($sql);
        try{
            $statement->execute();
            header("Location: users.php");

        }catch(PDOException $e){
            echo 'FAILED';
        }
?>