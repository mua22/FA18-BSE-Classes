<?php include "./partials/pagetop.php";?>

    <h1>Add New Product</h1>
    <form action="store.php">
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
        </div>

        <div class="form-group">
            <label for="year" class="col-sm-2 control-label">Year</label>
            <div class="col-sm-10">
                <input type="text" name="year" class="form-control" id="year" placeholder="Year">
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Publisher</label>
            <div class="col-sm-10">
                <input type="text" name="publisher" class="form-control" id="publisher" placeholder="Publisher">
            </div>
        </div>


        <input type="submit" value="Add New Book" class="btn btn-primary">
    </form>
<?php include "./partials/pagebottom.php"; ?>