<?php
$id = $_REQUEST['id'];
include "DBConnectivity.php";
$db = new DBConnectivity();
$result = $db->query("delete from products where id = $id");
header("Location: index.php");
?>