<?php
function init_bread($current_page)
{
    echo '<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="../../panel.php">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">'.$current_page.'</li>
    </ol>
  </nav>';
}
?>