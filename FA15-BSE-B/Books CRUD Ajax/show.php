

<?php
    $id = $_REQUEST['id'];
include "./Models/DBWrapper.php";
$db = new DBWrapper();
$query = "select * from books where id=$id";
//die($query);
$result = $db->query($query);
$book = $result->fetch_assoc();

?>


<p><b>Publisher: </b><?= $book['publisher']?></p>
