<?php session_start(); ?>
<?php

include "./models/DBConnection.php";
$db = new DBConnection();
$title = $_REQUEST['title'];
$year = $_REQUEST['year'];
$publisher = $_REQUEST['publisher'];
$id = $_REQUEST['id'];

if(empty($title))
{
    $_SESSION["errors"]["title"] = "You must enter Title";
    header("Location: add.php");

}else {
    $query = "update books set 
year='$year', title='$title',
publisher='$publisher' where id=$id" ;


die($query);
    $result = $db->query($query);
    $_SESSION["flash"] = "Record Added";
    header("Location: index.php");

}
?>
