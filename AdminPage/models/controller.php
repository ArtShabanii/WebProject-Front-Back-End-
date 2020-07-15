<?php
include_once 'userMapper.php';
include_once 'userModel.php';
include_once 'DbConn.php';
class UserController{

    public function InsertUser($Name, $Username, $Email, $Password, $RoleID){
        //therrasim funksionet qe bejne kalkulimin e kerkeses
        //insert studenti ndatabase
        $Useri = new Useri($Name, $Username, $Email, $Password, $RoleID);
        $userMapper = new UserMapper($Useri);
        $userMapper->Insert($Name, $Username, $Email, $Password, $RoleID);
        
        //insert kursin studenti


    }

    public function GetUsers(){
        $sql = "SELECT * FROM Useri";

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