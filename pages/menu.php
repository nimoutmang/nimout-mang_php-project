
    <div class="p-3 container mt-3">
    <div class="d-flex justify-content-end p-2">
        <a href="create_pizza_html.php" class="btn btn-primary">Add +</a>
    </div>
    <div class="row mt-3">
        <?php 
            require_once('database/database.php');
            $pizzas = getAllPizza();
            foreach($pizzas as $pizza):

        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                <div class="card mb-3 ">
                        <img class="card-image" src="images/<?=$pizza['image'] ?> " alt="" style="width:100%; height:230px;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Name : <?= $pizza['name']?> </h5>
                        <p class="card-text">Price : <?= $pizza['price']?> </p>
                    
                    </div>
                    <div class="action d-flex justify-content-end">
                        <a href="update_pizza.php?id=<?= $pizza['pizzaid'] ?>" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil" ></i></a>
                        <a href="delete_pizza.php?id=<?= $pizza['pizzaid'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" ></i></a>
                    </div>
                </div> 	
        </div>
        <?php endforeach; ?>
    </div>
</div>


