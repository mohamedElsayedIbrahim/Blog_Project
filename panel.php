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

<h1>Hello from panel</h1>


<?php
require_once('./Layouts/footer.php');
?>
<script src="./js/bootstrap.bundle.js"></script>
</body>
</html>