<?php
include_once 'contactController.php';

class ContactView{
    public function FillTableRowsWithContact(){
        // dergojme kerkesen ne controller
        $controller = new ContactController();
        $data = $controller->GetContact();
        return $data;
    }
}
?>