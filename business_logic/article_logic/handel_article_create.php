<?php

require_once('../../funcations/helpers.php');
require_once('../../funcations/database.php');
session_start();

if (isset($_POST['submit'])) {

    $image_name = $_FILES['image']['name'];
    $image_size = $_FILES['image']['size'];
    $image_temp = $_FILES['image']['tmp_name'];
    
    




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

    if (!validate_file_size($image_size)) {
        array_push($error,"image must be less than 1 MB");

    }

    if (count($error) == 0) {

        $name = uniqid().'-'.$image_name;

        move_uploaded_file($image_temp,'../../uploads/'.$name);

        $connection = init_connection('blog');

        $query = "INSERT INTO articels (`title`,`content`,`image`) VALUES('$title','$content','$name')";

        if(mysqli_query($connection,$query))
        {
            $_SESSION['success'] = "success operation";
        }else{
            $_SESSION['errors'] = 'falid ' . mysqli_error($connection);
        }
        header("location:../../panel/articels/index.php");


    } else {
        $_SESSION['errors'] = $error;
        header("location:../../panel/articels/index.php");
    }

} else
{
    header("location:../../panel/articels/index.php");

}