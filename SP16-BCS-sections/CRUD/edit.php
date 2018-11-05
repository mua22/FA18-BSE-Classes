
<?php include "./partials/top.php";
include "./models/DBConnection.php";
$db = new DBConnection();
$id = $_REQUEST['id'];
$result = $db->query("select * from books where id=$id");
$row = $result->fetch_assoc();
//die(print_r($row));
?>

<form action="./update.php?id=<?php echo $id;?>" method="post">
    Title: <input name="title" value="<?php echo $row['title']?>"/>
    <?php if(isset($_SESSION["errors"]["title"])){
        echo $_SESSION["errors"]["title"];
        unset($_SESSION["errors"]["title"]);
    }?>
    <br /> <br />
    Year: <input name="year" value="<?php echo $row['year']?>"/> <br /> <br />
    Publisher: <input name="publisher" value="<?php echo $row['publisher']?>"/> <br /> <br />

    <input type="submit" value="Update"> </input>
</form>

<?php include "./partials/bottom.php"?>
