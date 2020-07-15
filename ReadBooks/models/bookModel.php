<?php
class Book{

    private $book_ID;
    private $title;
    private $author;
    private $photo;
    private $readTheBook;
    private $categoryID;

    public function __construct($title, $author, $photo, $readTheBook, $categoryID){
        $this->title = $title;
        $this->author = $author;
        $this->photo = $photo;
        $this->readTheBook = $readTheBook;
        $this->categoryID = $categoryID;
    }

    public function getTitle(){
        return $this->title;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function getPhoto(){
        return $this->photo;
    }

    public function getReadTheBook(){
        return $this->readTheBook;
    }

    public function getCategoryID(){
        return $this->categoryID;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function setPhoto($photo){
        $this->photo = $photo;
    }

    public function setReadTheBook($readTheBook){
        $this->readTheBook = $readTheBook;
    }

    public function setCategoryID($categoryID){
        $this->categoryID = $categoryID;
    }
}

?>
