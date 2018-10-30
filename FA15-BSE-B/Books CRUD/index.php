<?php include "./partials/pagetop.php";?>

<?php
    include "./Models/DBWrapper.php";
    $db = new DBWrapper();

    $result = $db->query("select * from books limit 10");


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
            <tr>
                <td><?= $book['id'];?></td>
                <td><a href="./show.php"><?= $book['title'];?></a></td>
                <td><?= $book['year'];?></td>
                <td>
                    <a href="./edit.php" class="btn btn-xs btn-info">Edit</a>
                    <a href="./delete.php" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr>
        <?php }?>

    </table>
<?php include "./partials/pagebottom.php"; ?>