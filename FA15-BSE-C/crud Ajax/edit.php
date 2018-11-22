<?php include "./partials/top.php";?>

<?php
$id = $_REQUEST['id'];
include "DBConnectivity.php";
$db = new DBConnectivity();
$result = $db->query("select * from products where id = $id");
$product = $result->fetch_assoc();
?>
    <form class="" action="update.php" method="post">
        Name: <input type="text" name="name" value="<?php echo $product['name']?>"> <br>

        Description: <input type="text" name="description" value="<?php echo $product['description']?>">
        <br>
        <input type="submit" value="update">
        <input type="hidden" name="id" value="<?php echo $product['id']?>">
    </form>

    <a href="./index.php" class="btn">Back to Index</a>
<?php include "./partials/bottom.php";?>