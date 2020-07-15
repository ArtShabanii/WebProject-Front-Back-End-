<?php
include_once '../models/userMapper.php';
include_once '../models/userModel.php';
include_once '../models/DbConn.php';
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
            $firstName;
            $username;
            $email;
            $roleID;
            foreach($row as $roww){
                $firstName =  $roww['Name'];
                $username =  $roww['Username'];
                $email = $roww['Email'];
                $roleID = $roww['RoleID'];
            }

            $arrayTest[0] = $firstName;
            $arrayTest[1] = $username;
            $arrayTest[2] = $email;
            $arrayTest[3] = $roleID;
            return $arrayTest;
        }catch(PDOException $e){
            echo 'FAILED';
        }

    }

}
?>