<?php 

    $dsn  = 'mysql:host=localhost;dbname=project-hrn';
    $user = 'root';
    $pass = '';

    
    try{
        $con = new PDO($dsn,$user,$pass);
        echo 'You Are Connected';
        global $con; 
    }
    catch(PDOException $e) {
        echo 'Faild To Connect ' . $e->getMessage();
    }