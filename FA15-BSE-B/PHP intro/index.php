<html>
    <head>
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body>
        <div class="container">
            <h1>Books </h1>

            <a href="" class="btn btn-primary">Add New Book</a>
            <hr>
            <ul class="pagination">
                <li class="page-item"><a href="" class="page-link">1</a></li>
                <li class="page-item"><a href="" class="page-link">2</a></li>
                <li class="page-item"><a href="" class="page-link">3</a></li>
                <li class="page-item"><a href="" class="page-link">4</a></li>
                <li class="page-item"><a href="" class="page-link">5</a></li>
                <li class="page-item"><a href="" class="page-link">6</a></li>
                <li class="page-item"><a href="" class="page-link">7</a></li>
                <li class="page-item"><a href="" class="page-link">8</a></li>
                <li class="page-item"><a href="" class="page-link">9</a></li>
                <li class="page-item"><a href="" class="page-link">10</a></li>
            </ul>
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Actions</th>
                </tr>
                <?php
                include "./FA18DBAccess.php";
                $crashcourse = new FA18DBAccess();
                $result =  $crashcourse->query("select * from books limit 10");
                while($book=$result->fetch_assoc()){
                ?>
                <tr>
                    <td><?= $book['id']?></td>
                    <td><?= $book['title']?></td>
                    <td><?= $book['year']?></td>
                    <td>
                        <a href="" class="btn btn-xs btn-warning">Edit</a> &nbsp;
                        <a href="" class="btn btn-danger btn-xs">Delete</a>

                    </td>
                </tr>

                <?php }?>
            </table>

        </div>
    </body>
</html>