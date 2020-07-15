<?php
include_once '../AdminPage/models/DbConn.php';
$id = $_GET['id'];
echo $id;

        $sql = "SELECT ReadBook FROM Book WHERE Book_ID=$id";
        
        $obj = new DBConnection();
        $connection = $obj->getConnection();
        $statement = $connection->prepare($sql);
        try{
            $statement->execute();
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            foreach($row as $roww){
                $pdffile = $roww['ReadBook'];
                header("Location: $pdffile");
            }
            
        }catch(PDOException $e){
            echo 'FAILED';
        }
?>