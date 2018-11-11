<?php
session_start();
$id = $_REQUEST['id'];
include "DBConnectivity.php";
$db = new DBConnectivity();
$result = $db->query("delete from products where id = $id");
    $_SESSION["message"] = "Record Deleted with ID: $id";
header("Location: index.php");
?>