<?php

if (isset($_POST['submit'])) {

    session_start();

    //cean the data

    $email = trim(htmlspecialchars($_POST['email']));
    $password = trim(htmlspecialchars($_POST['password']));

    //validate data

    if (empty($email)) {
        $email_error = "email must not be empty";
    } elseif(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
        $email_error = "email must not be a valid email";
    }

    if (empty($password)) {
        $password_error = "password must not be empty";
    } elseif(strlen($password) > false){
        $password_error = "password must not be less than 8 chars";
    }

    if (isset($email_error) || isset($password_error)) {
       $_SESSION['email_error'] = $email_error;
       $_SESSION['email_error'] = $email_error;
        header("location:../login.php");

    } else{
        header("location:../panel.php");
    }

} else {
    header("location:../login.php");
}