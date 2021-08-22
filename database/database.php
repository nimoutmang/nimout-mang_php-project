<?php
    function database(){
        return new mysqli ('localhost', 'root', '', 'pizzashop_db');
    }
    //..................getAll..........................

    function getAllPizza(){
        return database()->query("SELECT * FROM pizza ORDER BY date DESC ");
    }
    //..................getOne..........................

    function getOnePizza($id){
        return database()->query("SELECT * FROM pizza WHERE pizzaid = $id ");
    }
    //..................delete..........................

    function deletePizza($id){
        return database()->query("DELETE FROM pizza WHERE $id = pizzaid ");
    }
    //.................create...........................

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

    //..................update...............................

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

    //................Search.........................................
    function searchByName($name){
        
        $title = $name['search'];
        return database()->query("SELECT * FROM pizza WHERE name LIKE '%$title%' ");
    }
    
    