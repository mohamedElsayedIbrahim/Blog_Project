<?php
require_once('../funcations/helpers.php');

if (isset($_POST['submit'])) {

    session_start();

    //clean the data
    
    $email = clean_data($_POST['email']);
    $password = clean_data($_POST['password']);

    //validate data

    if (empty($email)) {
        $email_error = "email must not be empty";
    } elseif(filter_var($email,FILTER_VALIDATE_EMAIL) == false){
        $email_error = "email must to be a valid email";
    }

    if (empty($password)) {
        $password_error = "password must not be empty";
    } elseif(strlen($password) < 8){
        $password_error = "password must not be less than 8 chars";
    }

    // check errors status

    if (isset($email_error) || isset($password_error)) {
       $_SESSION['email_error'] = $email_error;
       $_SESSION['password_error'] = $password_error;
        header("location:../login.php");
    } else{
        $_SESSION['login_status'] = True;
        
        header("location:../panel.php");
    }

} else {
    header("location:../login.php");
}