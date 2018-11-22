<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/11/2018
 * Time: 11:01 AM
 */
session_start();
$name = $_REQUEST['name'];
if(empty($name))
{
    return header("Location: add.php?error=occured");
}
$description = $_REQUEST['description'];

$query = "insert into products (name,description) values('$name','$description') ";

include "DBConnectivity.php";
$db = new DBConnectivity();
$result = $db->query($query);
$_SESSION["message"] = "Record Added";
header('Location: index.php');