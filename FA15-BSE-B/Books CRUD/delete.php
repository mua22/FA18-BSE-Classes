
<?php
session_start();
$id = $_REQUEST['id'];
include "./Models/DBWrapper.php";
$db = new DBWrapper();
$query = "delete from books where id=$id";
//die($query);
$result = $db->query($query);
$_SESSION["message"] = "Record Deleted";
header("Location: index.php");
?>
