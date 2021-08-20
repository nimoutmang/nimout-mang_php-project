
    <?php
        require_once('partial/header.php'); ?>
        <div class="container p-3 mt-3 my-5 ">
            <form action="create_pizza_model.php" method="post" enctype ="multipart/form-data">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" placeholder="Price" name="price">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" placeholder="Image" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Create</button>
            </div>
            </form>
        </div>
    <?php require_once('partial/footer.php'); ?>