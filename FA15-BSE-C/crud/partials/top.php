<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products CRUD</title>
    <link rel="stylesheet" href="../bootstrap.css">
</head>
<body>
Show Menus here
<hr>

<?php session_start();?>
<?php
if(isset($_SESSION['message'])){
    echo $_SESSION["message"]."<br />";
    unset($_SESSION["message"]);
}

?>
