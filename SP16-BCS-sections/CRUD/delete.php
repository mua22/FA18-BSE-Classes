
<?php
session_start();
include "./models/DBConnection.php";
$db = new DBConnection();
$id = $_REQUEST['id'];
$result = $db->query("delete from books where id=$id");
$_SESSION["flash"] = "Record Deleted with id $id";
header("Location: index.php");
?>
