<?php
include_once '../controller/bookController.php';

class BookView{
    public function FillTableRowsWithBooks(){
        // dergojme kerkesen ne controller
        $controller = new BookController();
        $data = $controller->GetBooks();
        return $data;
    }
}
?>