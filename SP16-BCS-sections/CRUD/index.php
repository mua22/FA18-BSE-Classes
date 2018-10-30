<?php include "./partials/top.php"?>
        <div class="books">

            <?php
                include "./models/DBConnection.php";

                $db = new DBConnection();

                $result = $db->query("select * from books limit 5");

                while($row = $result->fetch_assoc()){
                    ?>
                    <div class="book">
                        <h2><a href="./show.php?id=<?= $row['id']?>"><?= $row['title']?></a></h2>
                        <p><?= $row['year']?></p>
                        <a href="./delete.php?id=<?= $row['id']?>" class="btn btn-danger">Delete</a>
                    </div>
            <?php
                }
            ?>

        </div>

<?php include "./partials/bottom.php"?>
