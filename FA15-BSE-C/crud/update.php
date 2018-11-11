<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/11/2018
 * Time: 11:01 AM
 */
session_start();
$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$id = $_REQUEST['id'];

$query = "update products set name='$name', description='$description' where id=$id";
//die($query);
include "DBConnectivity.php";
$db = new DBConnectivity();
$result = $db->query($query);
$_SESSION["message"] = "Record Updated";
header("Location: show.php?id=$id");