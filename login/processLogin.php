<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Akram
 * Date: 06/12/2018
 * Time: 1:41 PM
 */
session_start();
$name = $_REQUEST['name'];
$pass = $_REQUEST['pass'];

if($name=='admin' && $pass=='admin'){
    $_SESSION['user_id'] = 'admin';
    header('Location: index.php');
}