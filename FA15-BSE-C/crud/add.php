<?php include "./partials/top.php";?>
<h1>Add new Product</h1>

    <form class="" action="./store.php" method="post">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name">
                <?php
                if(isset($_REQUEST['error']))
                    echo "You did a mistake in form filling";
                ?>
            </div>
        </div>

        <div class="form-group">
            <label for="description" class="col-sm-2 control-label">Description</label>
            <div class="col-sm-10">
                <input type="text" name="description" class="form-control" id="description" placeholder="Description">
            </div>
        </div>

        <input type="submit">
    </form>
<?php include "./partials/bottom.php";?>