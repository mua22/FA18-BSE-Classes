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

    <h1>Edit New Product</h1>

    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?=$book['id']?>">
        Title: <input type="text" name="title" value="<?php echo $book['title']?>"><br>
        Year: <input type="text" name="year" value="<?php echo $book['year']?>"><br>
        Publisher: <input type="text" name="publisher" value="<?php echo $book['publisher']?>"><br>
        <input type="submit" value="Update   Book" class="btn btn-primary">
    </form>
<?php include "./partials/pagebottom.php"; ?>