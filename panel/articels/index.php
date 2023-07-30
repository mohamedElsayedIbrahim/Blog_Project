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
  <title>Articles</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>

<body>
<?php
  require_once('../../Layouts/nav.php');
  require_once('../../Layouts/breedcrumb.php');
  ?>

  <div class="container">
  <?php
      init_bread('articles');
    ?>
    <div class="my-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New Article
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
          <th>category</th>
          <th>handel</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>1</td>
          <td>articale title one</td>
          <td>business</td>
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
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form enctype="multipart/form-data" action="../../business_logic/article_logic/handel_article_create.php" method="post">

            <div class="form-group mb-3">
              <label for="exampleFormControlInput1">Article Title</label>
              <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <div class="form-group mb-3">
              <label for="exampleFormControlTextarea1">Article contnet</label>
              <textarea class="form-control" name="content" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="form-group mb-3">
              <label for="exampleFormControlFile1">Article image</label>
              <input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
            </div>


            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" name="submit" class="btn btn-primary">save data</button>
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