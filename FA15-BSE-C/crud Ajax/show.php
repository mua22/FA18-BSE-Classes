
    <?php
    $id = $_REQUEST['id'];
    include "DBConnectivity.php";
    $db = new DBConnectivity();
    $result = $db->query("select * from products where id = $id");
    $product = $result->fetch_assoc();
    ?>

<p><?=  $product['description'] ?></p>
