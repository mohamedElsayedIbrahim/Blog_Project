<?php



function init_connection($dbname,$dbuser ='root',$dbpassword = '',$serever = 'localhost'){

    $connection = mysqli_connect($serever,$dbuser,$dbpassword,$dbname);

    if (!$connection) {
        $_SESSION['errors'] = 'error'.mysqli_connect_error();
        die();
    }

    return $connection;
}