<?php
include '../models/userMapper.php';
session_start();
if (isset($_POST['SignInButton'])) {
        $Username = $_POST['username'];
        $Password = $_POST['password'];

        $logincl = new LoginValid();
        $arrayInfo = $logincl->loginlogin($Username, $Password);
        //$login = new UserMapper();
        // $arrayInfo = $login->Login($Username, $Password);
        
         

}

class LoginValid{
    public function loginlogin($Username, $Password){
        $mapper = new UserMapper();
        $arrayInfo = $mapper->Login($Username, $Password);
        if($arrayInfo[0]==$Username && $arrayInfo[1]==$Password && $arrayInfo[2] != 1){
            header("Location: ../../HomePage/homePage.html");   
        }else if($arrayInfo[0]==$Username && $arrayInfo[1]==$Password && $arrayInfo[2] == 1){
            header("Location: ../../AdminPage/index.php");
        }else{
            header("Location: ../loginForm.html");
            echo '<script language="javascript">';
            echo 'alert("Username/Password is wrong! Plese try again...")';
            echo '</script>';
            
            
            
        }
    }
}