<?php

require_once('../../funcations/database.php');

$connection = init_connection('blog');

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
   $data = [];
   while ($row = mysqli_fetch_assoc($result)) {
      array_push($data, $row);
   }

   echo json_encode(['data' => $data]);

   // var_dump($data);
} else {
   echo json_encode(['data' => 0]);

   // echo json_encode('0 result');
}
