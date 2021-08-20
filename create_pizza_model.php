<?php
    require_once('database/database.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $isCreated = createPizza($_POST);
            if($isCreated){
                header ('Location: http://localhost/nimout-mang_php-project/?page=menu');
            }
        }
    
