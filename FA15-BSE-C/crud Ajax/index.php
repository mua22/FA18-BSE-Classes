<?php include "./partials/top.php";?>
<a href="/add.php" class="btn btn-primary">Add New Product</a>
<h1>List All Products</h1>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Title</th>

        <th>Actions</th>
    </tr>
    <?php
    include "./DBConnectivity.php";
    $db = new DBConnectivity();
    $result =  $db->query("select * from products order by id desc limit 10 ");
    while($row = $result->fetch_assoc()){
        ?>
    <tr>
        <td><?= $row['id']?></td>
        <td><a class="btnShow" href="./show.php?id=<?=$row['id']?>"><?= $row['name']?></a></td>


        <td>
            <a href="edit.php?id=<?=$row['id']?>" class="btn btn-sm btn-info">Edit</a> &nbsp;
            <a href="/delete.php?id=<?= $row['id']?>" class="btn btn-sm btn-danger btnDel">Delete</a>
        </td>
    </tr>
    <?php }?>
</table>
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


<?php include "./partials/bottom.php";?>