<?php
include_once 'DbConn.php';
include_once 'bookModel.php';
class BookMapper
{
    private $book;
    private $connection;
    public function __construct(\Book $book)
    {
        $obj = new DBConnection();
        $this->connection = $obj->getConnection();
        $this->book = $book;
    }

    public function Insert(){
        $sql = "INSERT INTO Book (Title, Author, Photo, ReadBook, Category_ID) VALUES (:Title, :Author, :Photo, :ReadBook, :CategoryID)";

        $Title = $this->book->getTitle();
        $Author = $this->book->getAuthor();
        $Photo = $this->book->getPhoto();
        $ReadBook = $this->book->getReadBook();
        $CategoryID = $this->book->getCategoryID();

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":Title", $Title);
        $statement->bindParam(":Author", $Author);
        $statement->bindParam(":Photo", $Photo);
        $statement->bindParam(":ReadBook", $ReadBook);
        $statement->bindParam(":CategoryID", $CategoryID);

        try{
            $statement->execute();
        }catch(PDOException $e){
            echo 'Failed Connection with Database (SQL SERVER).';
        }
    }
    

}