<?php
session_start();

if (!isset($_SESSION['login_status'])) {
    header("location:./login.php");
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

<?php
require_once('./Layouts/nav.php');
?>

<div class="container">
<div class="row">
    <div class="col-md-3">
    <div class="bg-seconary p-3">
    <h3>
        <a href="./panel/category/index.php" class="text-dark">category</a>
    </h3>
    </div>
    </div>

    <div class="col-md-3">
    <div class="bg-seconary p-3">
    <h3>
        <a href="./panel/articels/index.php" class="text-dark">articles</a>
    </h3>
    </div>
    </div>

    <div class="col-md-3">
    <div class="bg-seconary p-3">
    <h3>
        <a href="./panel/users/index.php" class="text-dark">users</a>
    </h3>
    </div>
    </div>

</div>
</div>


<?php
require_once('./Layouts/footer.php');
?>
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>