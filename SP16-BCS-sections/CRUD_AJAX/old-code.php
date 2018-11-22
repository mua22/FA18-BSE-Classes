<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="./bootstrap.css">
    <link rel="stylesheet" href="./crud.css">
</head>
<body>
<div class="container">
    <ul id="menu">
        <li><a href="" class="main-link">Home</a></li>
        <li><a href="" class="main-link">Products</a></li>
        <li><a href="" class="main-link">Add New Product</a></li>

    </ul>

    <hr>
        <div class="books">

            <?php
                $db = new mysqli('localhost:3306','root','','crashcourse');
                if($db->connect_errno)
                    die($db->connect_error);

                $result = $db->query("select * from books limit 5");
                if(!$result){
                    die($db->error);
                }
                while($row = $result->fetch_assoc()){
                    ?>
                    <div class="product">
                        <h4><?= $row['title']?></h4>
                    </div>

                    <hr />
            <?php
                }

                $db->close();
            ?>

        </div>

    <hr>
    Footer Area
</div>
</body>
</html>