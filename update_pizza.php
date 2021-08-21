<?php
    require_once('partial/header.php'); ?>

<div class="container p-4">
        <?php
            require_once('database/database.php');
            $id = $_GET['id'];
            $pizzas = getOnePizza($id);
            foreach($pizzas as $pizza):
        ?>
        <form action="update_pizza_model.php" method="post" enctype ="multipart/form-data">
            <input type="hidden" value="<?= $pizza['pizzaid']?>" name="pizzaid">
            <div class="form-group">
                <input type="text" class="form-control" value="<?= $pizza['name']?>" name="name">
            </div>
            <div class="form-group">
                <input type="number" class="form-control" value="<?= $pizza['price']?>"  name="price">
            </div>
            <div class="form-group">
                <input type="file" class="form-control" value="<?=$pizza['image'] ?>" placeholder="Image" name="image">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </div>
        </form>
        <?php endforeach; ?>
    </div>
<?php require_once('partial/footer.php'); ?>
