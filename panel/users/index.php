<?php

session_start();

if (!isset($_SESSION['login_status'])) {
    header("location:./login.php");
}


?>


<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panel | users</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>

<body>
  <?php
  require_once('../../Layouts/nav.php');
  ?>

  <div class="container">
  <div class="my-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New User
      </button>
    </div>


    <?php
  require_once('../../Layouts/error.php');
  ?>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>title</th>
          <th>Role</th>
          <th>handel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>userone</td>
          <td>admin</td>
          <td><a href="#" class="btn btn-danger">Delete</a> <button class="btn btn-warning">Edit</button></td>
        </tr>
      </tbody>
    </table>
  </div>



  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Add new user</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="../../business_logic/users_logic/handel_create_user.php" method="post">

            <div class="mb-3">
              <label for="usernameInput" class="form-label">username</label>
              <input type="text" class="form-control" name="usernameInput" id="usernameInput" placeholder="ex:sport">
            </div>

            <div class="mb-3">
              <label for="emailInput" class="form-label">email</label>
              <input type="email" class="form-control" name="emailInput" id="emailInput" placeholder="ex:sport">
            </div>

            <div class="mb-3">
              <label for="passwordInput" class="form-label">password</label>
              <input type="password" class="form-control" name="passwordInput" id="passwordInput" placeholder="ex:sport">
            </div>

            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary" name="submit">save data</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>

  <?php
  require_once('../../Layouts/footer.php');
  ?>

  <script src="../../js/bootstrap.bundle.js"></script>

</body>

</html>