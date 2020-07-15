<?php 
// include database connection 
include_once "../LoginForm/models/DbConn.php"; 

$obj = new DBConnection();
$connection = $obj->getConnection();

// select the image 
$query = "SELECT * FROM Books WHERE Category_ID = ?"; 
$stmt = $connection->prepare( $query );
 
// bind the id of the image you want to select
$stmt->bindParam(1, $_GET['Category_ID']);
$stmt->execute();
 
// to verify if a record is found
$num = $stmt->rowCount();
 
if( $num ){
    // if found
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    // specify header with content type,
    // you can do header("Content-type: image/jpg"); for jpg,
    // header("Content-type: image/gif"); for gif, etc.
    header("Content-type: image/png");
    
    //display the image data
    print $row['Photo'];
    exit;
}else{
    //if no image found with the given id,
    //load/query your default image here
}
?>