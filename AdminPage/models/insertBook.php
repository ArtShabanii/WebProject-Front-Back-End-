<?php
include_once 'bookController.php';
if (isset($_POST['AddButton'])) {
    $Title = $_POST['Title'];
    $Author = $_POST['Author'];
    $Photo = $_FILES['image'];
    $ReadBook = $_POST['ReadBook'];
    $CategoryID = $_POST['CategoryID'];
        $view = new InsertView();
        $view->insertBook($Title, $Author, $Photo, $ReadBook, $CategoryID);
        header("Location: ../books.php");
}

class InsertView
{
    public function insertBook($Title, $Author, $Photo, $ReadBook, $CategoryID)
    {
        // dergojme kerkesen ne controller
        $controller = new BookController();
        $response = $controller->InsertBook($Title, $Author, $Photo, $ReadBook, $CategoryID);
    }
}
?>
