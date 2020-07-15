<?php
include_once '../controller/userController.php';
if (isset($_POST['SignUpButton'])) {
    $Name = $_POST['FName'];
    $Username = $_POST['Username'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $RoleID = 2;
    if($Name == "" || $Username == "" || $Email == "" || $Password == ""){
        echo "<script language='javascript'>";
        echo 'alert("Please fill all fields!");';
        echo 'window.location.assign("../loginForm.html");';
        echo "</script>";
    }else if(!(preg_match("/^([a-zA-Z' ]+)$/", $Name))){
        echo "<script language='javascript'>";
        echo 'alert("Name has only Letters!");';
        echo 'window.location.assign("../loginForm.html");';
        echo "</script>";
    }else if(!(preg_match('/^[a-z0-9_]/', $Username))){
        echo "<script language='javascript'>";
        echo 'alert("Username is not valid! Please try again...");';
        echo 'window.location.assign("../loginForm.html");';
        echo "</script>";
    }else if(!(preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/', $Password))){
        echo "<script language='javascript'>";
        echo 'alert("Password is not valid, must have one Capital letter, a number and 8 characters! Please try again...");';
        echo 'window.location.assign("../loginForm.html");';
        echo "</script>";
    }else{
        $view = new InsertView();
        $view->insertUser($Name, $Username, $Email, $Password, $RoleID);
        echo "<script language='javascript'>";
        echo 'alert("Your account has been created successfully!");';
        echo 'window.location.assign("../loginForm.html");';
        echo "</script>";
    }
}

class InsertView
{
    public function insertUser($Name, $Username, $Email, $Password, $RoleID)
    {
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $response = $controller->InsertUser($Name, $Username, $Email, $Password, $RoleID);
    }
}
?>
