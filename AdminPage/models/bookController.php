<?php
include_once 'bookMapper.php';
include_once 'bookModel.php';
include_once 'DbConn.php';
class BookController{

     public function InsertBook($Title, $Author, $Photo, $ReadBook, $CategoryID){
         //therrasim funksionet qe bejne kalkulimin e kerkeses
         //insert studenti ndatabase
         $Photo = self::uploadImg($Photo);
         $Book = new Book($Title, $Author, $Photo, $ReadBook, $CategoryID);
         $bookMapper = new BookMapper($Book);
         $bookMapper->Insert($Title, $Author, $Photo, $ReadBook, $CategoryID);
        
         //insert kursin studenti
     }

    public function GetBooks(){
        $sql = "SELECT * FROM Book";

        $obj = new DBConnection();
        $connection = $obj->getConnection();
        
        $statement = $connection->prepare($sql);

        try{
            $statement->execute();
            $row = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $row;
        }catch(PDOException $e){
            echo 'FAILED';
        }

    }

    public function uploadImg($Image){

        try {
            $target_dir = '../../Images/';
            if (!file_exists($target_dir)) {
                mkdir($target_dir, 0777, true);
            }
            $imgname = self::GenerateImgName() . '.png';
            if ($Image["size"] > 500000) {
                echo "Sorry, your file is too large.";
            }
    
            $target_file = $target_dir . basename($imgname);
            if (move_uploaded_file($Image["tmp_name"], $target_file)) {
                return "Images/" . $imgname;
            } else {
    
                echo 'not work';
            }
        }
        catch (Exception $ex)
        {
            echo $ex->getMessage();
        }
    
        }
    
        public function GenerateImgName() {
    
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < 10; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        }

}
?>