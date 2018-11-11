<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start();?>
    <meta charset="UTF-8">
    <title>Books</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./booksstyles.css">
</head>
<body>

<div class="container">
    <ul class="menu">
        <li><a href="/index.php">Books</a></li>
        <li><a href="/add.php">Add New Book</a></li>
        <li><a href="/add.php">Delete a Product</a></li>
    </ul>
    <hr>
<?php
    if(isset($_SESSION['message'])){
?>
    <div class="alert alert-info">
    	<?php echo $_SESSION['message'];
    	    unset($_SESSION['message']);
    	?>
    </div>

    <?php }?>