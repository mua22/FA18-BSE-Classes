
<?php

include "./models/DBConnection.php";
$db = new DBConnection();
$id = $_REQUEST['id'];
$result = $db->query("delete from books where id=$id");
?>
