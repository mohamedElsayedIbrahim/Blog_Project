<?php

require_once('../../funcations/helpers.php');
session_start();

if (isset($_POST['submit'])) {

    
    


    $title = clean_data($_POST['title']);
    $content = clean_data($_POST['content']);

    $error = [];

    if (isEmpty($title)) {
        array_push($error,"title can't be empty");
    }elseif(isMin($title,3)){
        array_push($error,"title filed can't be less than 3 chars");
    }

    if (isEmpty($content)) {
        array_push($error,"conetnt can't be empty");
    }

    if (count($error) == 0) {

        


    } else {
        $_SESSION['errors'] = $error;
        header("location:../../panel/articels/index.php");
    }

} else
{
    header("location:../../panel/articels/index.php");

}