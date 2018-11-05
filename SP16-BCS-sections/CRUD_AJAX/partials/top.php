<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start() ;?>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./crud.css">
</head>
<body>
<div class="container">
    <ul id="menu">
        <li><a href="/index.php" class="main-link">Home</a></li>
        <li><a href="/index.php" class="main-link">Products</a></li>
        <li><a href="/add.php" class="main-link">Add New Product</a></li>

    </ul>
    <?php if(isset($_SESSION["flash"])){
        echo $_SESSION["flash"];
        unset($_SESSION["flash"]);
    }?>
    <hr>

