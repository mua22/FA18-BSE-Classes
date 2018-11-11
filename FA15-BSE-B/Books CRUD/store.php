
<?php
session_start();
include "./Models/DBWrapper.php";
$db = new DBWrapper();

if(empty($_REQUEST['title'])){
    $_SESSION['message'] = "Enter title";
    header("Location: add.php");
}else {
    $title = $_REQUEST['title'];
    $year = $_REQUEST['year'];
    $publisher = $_REQUEST['publisher'];

    $query = "insert into books (title,year,publisher) 
VALUES ('$title','$year','$publisher')";
//die($query);
    $result = $db->query($query);
    $_SESSION['message'] = "Record Added";
    header("Location: index.php");
}
?>
