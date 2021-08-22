
    <div class="p-3 container mt-3">
    <div class="d-flex justify-content-between">
        <div class="d-flex justify-content-end p-2">
            <a href="create_pizza_html.php" class="btn btn-primary">Add +</a>
        </div>
        <form class="form-inline" method="post">
            <input class="form-control border border-danger  mr-sm-2" type="search" placeholder="Search" aria-label="Search"  name="search">
            <button class="btn btn-outline-danger my-2 my-sm-0" type="submit"  > Search</button>
        </form>
    </div>
    <div class="row mt-3">
        <?php 
            require_once('database/database.php');
           
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //..........Search......................
                $pizzas = searchByName($_POST);
            }else{
                $pizzas = getAllPizza();
                
            }
            foreach($pizzas as $pizza):
        ?>
        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mt-3">
                <div class="card mb-3 ">
                        <img class="card-image" src="images/<?=$pizza['image'] ?> " alt="" style="width:100%; height:230px;">
                        <div class="card-body">
                            <h5 class="card-title">Name : <?= $pizza['name']?> </h5>
                            <p class="card-text">Price : <?= $pizza['price']?> </p>
                            <p class="card-text">Date: <?= $pizza['date']?></p>
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


