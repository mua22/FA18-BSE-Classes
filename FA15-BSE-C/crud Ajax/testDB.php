<?php
/**
 * Created by PhpStorm.
 * User: Usman
 * Date: 10/9/2018
 * Time: 10:50 AM
 */

include "./DBConnectivity.php";
$db = new DBConnectivity();

$result =  $db->query("select * from products");