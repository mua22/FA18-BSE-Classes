<?php
/**
 * Created by PhpStorm.
 * User: Ahmad Akram
 * Date: 06/12/2018
 * Time: 1:44 PM
 */
session_start();
unset($_SESSION['user_id']);
header("Location: index.php");