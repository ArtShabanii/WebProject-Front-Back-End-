<?php
include_once '../controller/contactController.php';
session_start();

if (isset($_POST['SendBtn'])) {
    
    $Message = $_POST['Message'];
    if($Message == ""){
        echo "<script language='javascript'>";
        echo 'alert("Message can not be empty!");';
        echo 'window.location.assign("../index.html");';
        echo "</script>";
    }else if(strlen($Message) >= 1000){
        echo "<script language='javascript'>";
        echo 'alert("Message can not be longer than 1000 characters!");';
        echo 'window.location.assign("../index.html");';
        echo "</script>";
    }else{
        $view = new InsertContactView();
        $view->insertIntoContact($_SESSION['userID'], $Message);
        header("Location: ../index.html");
    }
}

class InsertContactView
{
    public function insertIntoContact($UserID, $Message)
    {
        // dergojme kerkesen ne controller
        $controller = new ContactController();
        $response = $controller->InsertContact($UserID, $Message);
    }
}
?>
