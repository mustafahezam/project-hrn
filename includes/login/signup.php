<?php 
    include '../../connect.php';

    $fname    = $_POST['fname'];
    $lname    = $_POST['lname'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $confpass = $_POST['confpass'];

    //echo $fname . '<br>' . $lname . '<br>' . $email . '<br>' . $password .'<br>' . $confpass;
    $stmt = $con->prepare("insert into users 
            (fname,lname,email,password) 
            values 
            (?,?,?,?) ");
    $stmt->execute([$fname,$lname,$email,$password]);        