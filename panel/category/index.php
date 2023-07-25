<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../../css/bootstrap.min.css">

</head>

<body>
  <?php
  require_once('../../Layouts/nav.php');
  ?>

  <div class="container">
    <div class="mb-3">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Add New category
      </button>
    </div>

    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>title</th>
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
          <form action="#" method="post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">title</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="ex:sport">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <button type="button" class="btn btn-primary">save data</button>
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