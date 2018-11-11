<?php include "./partials/pagetop.php";?>



<?php
    $id = $_REQUEST['id'];
include "./Models/DBWrapper.php";
$db = new DBWrapper();
$query = "select * from books where id=$id";
//die($query);
$result = $db->query($query);
$book = $result->fetch_assoc();

?>

<h1><?= $book['title']?></h1>
<p><?= $book['year']?></p>
<p><?= $book['publisher']?></p>

<?php include "./partials/pagebottom.php"; ?>