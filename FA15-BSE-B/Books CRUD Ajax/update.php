
<?php
session_start();
include "./Models/DBWrapper.php";
$db = new DBWrapper();

$title = $_REQUEST['title'];
$year = $_REQUEST['year'];
$publisher = $_REQUEST['publisher'];
$id=$_REQUEST['id'];
$query = "update books set title='$title',
year='$year',publisher='$publisher' where id=$id";
//die($query);
$result = $db->query($query);
$_SESSION['message'] = "Record Updated";
header("Location: index.php");
?>
