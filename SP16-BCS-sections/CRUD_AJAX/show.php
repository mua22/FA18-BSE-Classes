
<?php
include "./models/DBConnection.php";
$db = new DBConnection();
$id = $_REQUEST['id'];
$result = $db->query("select * from books where id=$id");
$row = $result->fetch_assoc();

?>

<p><b>Author: </b> <?= $row['publisher']?></p>
