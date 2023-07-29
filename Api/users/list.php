<?php
require('../../funcations/database.php');

$connection = init_connection('blog');

if ($connection != false) {
 $query = "SELECT * FROm users";
 $result = mysqli_query($connection,$query);
 
$data=[];

 if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result))
    {
        array_push($data,$row);
    }

    echo json_encode($data);
 }else{
    die('0 results');
 } 
}