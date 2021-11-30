<?php 

    $dsn  = 'mysql:host=localhost;dbname=project-hrn_db';
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
