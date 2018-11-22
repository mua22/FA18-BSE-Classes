<?php include "./partials/pagetop.php";?>

<?php
    include "./Models/DBWrapper.php";
    $db = new DBWrapper();

    $result = $db->query("select * from books order by id  desc limit 10");


?>

    <h1>Show All Books</h1>
        <ul class="pagination">
            <li class="page-item"><a href="" class="page-link">1</a></li>
            <li class="page-item"><a href="" class="page-link">2</a></li>
            <li class="page-item"><a href="" class="page-link">3</a></li>
            <li class="page-item"><a href="" class="page-link">4</a></li>
        </ul>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
        <?php while($book = $result->fetch_assoc()){?>
            <tr id="tr-<?php echo $book['id'];?>">
                <td><?= $book['id'];?></td>
                <td><a class="btnShow" href="./show.php?id=<?php echo $book['id'];?>" data-id="<?php echo $book['id'];?>"><?= $book['title'];?></a>
                    <br>
                    <div id="result-<?php echo $book['id'];?>"></div>
                </td>
                <td><?= $book['year'];?></td>
                <td>
                    <a href="./edit.php?id=<?php echo $book['id'];?>" class="btn btn-xs btn-info">Edit</a>
                    <a data-id="<?php echo $book['id'];?>" href="./delete.php?id=<?php echo $book['id'];?>" class="btn btn-xs btn-danger btnDelete">Delete</a>
                </td>
            </tr>
        <?php }?>

    </table>
<?php include "./partials/pagebottom.php"; ?>