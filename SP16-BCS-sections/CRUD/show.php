
<?php include "./partials/top.php";
include "./models/DBConnection.php";
$db = new DBConnection();
$id = $_REQUEST['id'];
$result = $db->query("select * from books where id=$id");
$row = $result->fetch_assoc();

?>
<h2><?= $row['title']?></h2>
<p><b>Year:</b> <?= $row['year']?></p>
<p><b>Author: </b> <?= $row['publisher']?></p>



<?php include "./partials/bottom.php"?>
