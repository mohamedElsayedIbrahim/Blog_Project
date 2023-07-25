<?php
session_start();
if(isset($_SESSION['login_status']))
{
    header("location:./panel.php");
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
   <div class="w-75 m-auto py-5">
    <div class="text-center">
        <img width="200" src="./img/PHP_logo.png" alt="php logo">
    </div>
    <h1 class="my-3">Login to system....</h1>
    <div>
        <?php

            if (isset($_SESSION['email_error'])) {
                echo "<h6 class='text-danger'>{$_SESSION['email_error']}</h6>";
                unset($_SESSION['email_error']);
            }
            if (isset($_SESSION['password_error'])) {
                echo "<h6 class='text-danger'>{$_SESSION['password_error']}</h6>";
                unset($_SESSION['password_error']);
            }
        ?>
    </div>

    <form action="./business_logic/handel_login.php" method="POST">
        <div class="mb-3">
            <label for="userEmail">Email</label>
            <input type="text" name="email" class="form-control" id="userEmail">
        </div>
        <div class="mb-3">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="mb-3 text-center">
            <button class="btn btn-danger" name="submit" type="submit">Login system</button>
        </div>
    </form>

   </div>

    <script src="./js/bootstrap.bundle.js"></script>
</body>
</html>