<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <?php
            if (isset($_SESSION['login_status'])) {
               echo' <a class="nav-link active" aria-current="page" href="./logout.php">Logout</a>';
            } else {
                echo' <a class="nav-link active" aria-current="page" href="./login.php">Login</a>';
            }
            ?>
          
        </li>
      </ul>
    </div>
  </div>
</nav>