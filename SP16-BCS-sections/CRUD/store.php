<?php session_start(); ?>
<?php

include "./models/DBConnection.php";
$db = new DBConnection();
$title = $_REQUEST['title'];
$year = $_REQUEST['year'];
$publisher = $_REQUEST['publisher'];

if(empty($title))
{
    $_SESSION["errors"]["title"] = "You must enter Title";
    header("Location: add.php");

}else {
    $query = "insert into books 
(title,year,publisher) 
values('$title','$year','$publisher')";

//die($query);
    $result = $db->query($query);
    $_SESSION["flash"] = "Record Added";
    header("Location: index.php");

}
?>
