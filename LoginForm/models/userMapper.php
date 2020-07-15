<?php
include_once 'DbConn.php';
include_once 'userModel.php';
session_start();
class UserMapper
{
    private $user;
    private $connection;
    public function __construct(\Useri $user = null)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->user = $user;
    }

    public function Insert(){
        $sql = "INSERT INTO Useri (Name,Username, Email, Password, RoleID) VALUES (:Name,:Username, :Email, :Password, :RoleID)";

        $Name = $this->user->getName();
        $Username = $this->user->getUsername();
        $Email = $this->user->getEmail();
        $Password = $this->user->getPassword();
        $RoleID = $this->user->getRoleID();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":Name", $Name);
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
    

    public function Login($Username, $Password){
        
        $sql = "SELECT * FROM Useri WHERE Username = :username AND Password = :password";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":username", $Username);
        $statement->bindParam(":password", $Password);

        $statement->execute();
        $row = $statement->fetchAll(PDO::FETCH_ASSOC);
        $passwordtest;
        $usernametest;
        $roleIDtest;
        $userIDtest;
        foreach($row as $roww){
            $usernametest =  $roww['Username'];
            $passwordtest =  $roww['Password'];
            $roleIDtest = $roww['RoleID'];
            $userIDtest = $roww['User_ID'];
            $_SESSION['userID'] = $roww['User_ID'];
        }

        $arrayTest[0] = $usernametest;
        $arrayTest[1] = $passwordtest;
        $arrayTest[2] = $roleIDtest;
        $arrayTest[3] = $userIDtest;
        return $arrayTest;
    }
}
?>
