<?php
include_once 'DbConn.php';
include_once 'userModel.php';
class UserMapper
{
    private $user;
    private $connection;
    public function __construct(\Useri $user)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->user = $user;
    }

    public function Insert(){
        $sql = "INSERT INTO Useri (Name,Username, Email, Password, RoleID) VALUES (:Name, :Username, :Email, :Password, :RoleID)";

        $FName = $this->user->getName();
        $Username = $this->user->getUsername();
        $Email = $this->user->getEmail();
        $Password = $this->user->getPassword();
        $RoleID = $this->user->getRoleID();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":Name", $FName);
        $statement->bindParam(":Username", $Username);
        $statement->bindParam(":Email", $Email);
        $statement->bindParam(":Password", $Password);
        $statement->bindParam(":RoleID", $RoleID);

        try{
            $statement->execute();
        }catch(PDOException $e){
            echo 'FAILED';
        }
    }
    

}