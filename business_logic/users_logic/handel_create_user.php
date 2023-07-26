<?php
require_once('../../funcations/helpers.php');
session_start();
if (isset($_POST['submit'])) {

    $username = clean_data($_POST['usernameInput']);
    $email = clean_data($_POST['emailInput']);
    $password = clean_data($_POST['passwordInput']);

    $error = [];
    //chaeck the validate of username input
    if (isEmpty($username)) {
        array_push($error,"username can't be empty");
    }elseif(isMin($username,3)){
        array_push($error,"username filed can't be less than 3 chars");
    }

    if (isEmpty($email)) {
        array_push($error,"email can't be empty");
    }elseif(validEmail($email)){
        array_push($error,"email is not valid");
    }

    if (isEmpty($password)) {
        array_push($error,"password can't be empty");
    }elseif(isMin($password,9)){
        array_push($error,"password filed can't be less than 3 chars");
    }


    if (count($error) == 0) {
        # code connecting with db


        //Database configration

        $serever = 'localhost';
        $dbname = 'blog';
        $dbuser ='root';
        $dbpassword= '';

        //make connection

        $connection = mysqli_connect($serever,$dbuser,$dbpassword,$dbname);

        if (!$connection) {
            $_SESSION['errors'] = 'error'.mysqli_connect_error();
            die();
        }
        //Database Query
        $password = md5(sha1($password));

        $sqlQuery = "INSERT INTO USERS (`email`,`username`,`password`)VALUES('$email','$username','$password')";

        //Check Query Errors

        if (mysqli_query($connection,$sqlQuery)) {
            $_SESSION['success'] = "success operation";
        } else {
            $_SESSION['errors'] = 'falid ' . mysqli_error($connection);
        }
        header("location:../../panel/users/index.php");

    }
    else
    {
        
        

    }

} else {
    header("location:../../panel/users/index.php");
}