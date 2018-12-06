<?php
session_start();
if(!isset($_SESSION['user_id']))
    return header("Location: login.php");
?>

