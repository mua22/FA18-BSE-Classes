    <?php
    $id = $_REQUEST['id'];
    include "DBConnectivity.php";
    $db = new DBConnectivity();
    $result = $db->query("select * from products where id = $id");
    $product = $result->fetch_assoc();
    ?>
    <h1><?= $product['name']?></h1>
<p><?=  $product['description'] ?></p>
    <hr>


    <a href="./index.php" class="btn">Back to Index</a>
