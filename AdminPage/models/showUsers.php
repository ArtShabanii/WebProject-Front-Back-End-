<?php
include_once 'controller.php';

class UserView{
    public function FillTableRowsWithStudents(){
        // dergojme kerkesen ne controller
        $controller = new UserController();
        $data = $controller->GetUsers();
        return $data;
    }
}
?>