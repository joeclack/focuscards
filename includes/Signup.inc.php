<?php

if(isset($_POST["submit"])) {

    // grab data 
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_check = $_POST["password_check"];

    //instantiate signup class

    include "../classes/dbh.classes.php";
    include "../classes/Signup.classes.php";
    include "../classes/Signup-contr.classes.php";
    $signup = new SignupContr($username, $email, $password, $password_check);

    //running error handlers
    $signup->signupUser();

    //going back to front page
     
    header('location: ../pages/Home.php?error=none');

}

