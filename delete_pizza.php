<?php
    require_once('database/database.php');
    $id = $_GET['id'];
    $isDeleted = deletePizza($id);
    if($isDeleted){
        header ("Location: http://localhost/nimout-mang_php-project/?page=menu");
    }

    
