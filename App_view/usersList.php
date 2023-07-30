<?php

function usersTable()
{
    $connection = init_connection('blog');

    $query = "SELECT * FROM users";

    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
        $data = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($data, $row);
        }

        return $data;
    } else {
        return '0 result';
    }
}
