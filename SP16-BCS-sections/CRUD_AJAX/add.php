
<?php include "./partials/top.php"; ?>

<form action="./store.php" method="post">
    Title: <input name="title"/>
    <?php if(isset($_SESSION["errors"]["title"])){
        echo $_SESSION["errors"]["title"];
        unset($_SESSION["errors"]["title"]);
    }?>
    <br /> <br />
    Year: <input name="year"/> <br /> <br />
    Publisher: <input name="publisher"/> <br /> <br />

    <input type="submit"> </input>
</form>

<?php include "./partials/bottom.php"?>
