<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<a href="home.php">Home</a>
<?php

    session_start();
    if(isset($_SESSION['user_id'])) {
        ?>
        <a href="logout.php">Logout</a>
<?php
    }else {
        ?>
        <a href="login.php">Login</a>
<?php
    }
?>
</body>
</html>