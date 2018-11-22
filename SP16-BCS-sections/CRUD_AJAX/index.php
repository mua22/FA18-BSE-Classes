<?php include "./partials/top.php"?>
<script src="jquery.js"></script>
<script src="ajaxCRUD.js">


</script>
        <div class="books">

            <?php
                include "./models/DBConnection.php";

                $db = new DBConnection();

                $result = $db->query("select * from books order by id desc limit 5");

                while($row = $result->fetch_assoc()){
                    ?>
                    <div class="book" id="book-<?php echo $row["id"]?>">
                        <h2><a class="ajaxShow" data-id="<?php echo $row["id"]?>" href="./show.php?id=<?= $row['id']?>"><?= $row['title']?></a></h2>
                        <div id="authorDetails-<?php echo $row["id"]?>"></div>
                        <p><?= $row['year']?></p>

                        <a href="./delete.php?id=<?= $row['id']?>" data-id="<?php echo $row["id"]?>" class="btn btn-danger btnDelete">Delete</a>
                        <a href="./edit.php?id=<?= $row['id']?>" class="btn btn-primary">Edit</a>
                    </div>
            <?php
                }
            ?>

        </div>

<?php include "./partials/bottom.php"?>
