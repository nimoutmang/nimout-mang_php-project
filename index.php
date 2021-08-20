<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');


    if(isset($_GET['page'])){
        if($_GET['page'] == "home"){
            include_once('pages/home.php');
        }elseif($_GET['page'] == "menu"){
            include_once('pages/menu.php');
        }elseif($_GET['page'] == 'about'){
            include_once('pages/about.php');
        }else{
            include_once('pages/contact.php');
        }
    }else{
        include_once('pages/home.php');
    }
    
    include_once('partial/footer.php');