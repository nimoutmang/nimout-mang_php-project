<?php
    function database(){
        return new mysqli ('localhost', 'root', '', 'pizzashop_db');
    }

    function getAllPizza(){
        return database()->query("SELECT * FROM pizza ORDER BY date DESC ");
    }
    
    function getOnePizza($id){
        return database()->query("SELECT * FROM pizza WHERE pizzaid = $id ");
    }

    function deletePizza($id){
        return database()->query("DELETE FROM pizza WHERE $id = pizzaid ");
    }

    function createPizza($value){
        $name = $value['name'];
        $price = $value['price'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $direct = "images/";
        move_uploaded_file($tmp_name,$direct.$fileName);
        // echo ("INSERT INTO pizza(name, price) values ('$name', '$price')");die();
        return database()->query("INSERT INTO pizza(name, price, image) values ('$name', '$price', '$fileName')");
    }


    function updatePizza($value){
        $name = $value['name'];
        $price = $value['price'];
        $id = $value['pizzaid'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $filetype = $_FILES['image']['type'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $direct = "images/";
        return database()->query("UPDATE pizza set name = '$name', price = '$price', image='$fileName'  WHERE pizzaid = $id");

    } 

    