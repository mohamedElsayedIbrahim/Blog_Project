<?php

require_once('../../funcations/helpers.php');
session_start();

if (isset($_POST['submit'])) {
    $title = clean_data($_POST['title']);

    $error = [];

    if (isEmpty($title)) {
        array_push($error,"title can't be empty");
    }elseif(isMin($title,3)){
        array_push($error,"title filed can't be less than 3 chars");
    }

    if (count($error) == 0) {

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

        $query = "INSERT INTO categories (`title`) VALUES ('$title')";

        //Check Query Errors

        if (mysqli_query($connection,$query)) {
            $_SESSION['success'] = "success operation";
        } else {
            $_SESSION['errors'] = 'falid ' . mysqli_error($connection);
        }
        header("location:../../panel/category/index.php");


    } else {
        $_SESSION['errors'] = $error;
        header("location:../../panel/category/index.php");
    }

} else
{
    header("location:../../panel/category/index.php");

}