<div class="my-3">
        <div class="alert alert-danger <?php echo isset($_SESSION['errors']) ? '':'d-none'?>">
            <ul>
                <?php
                if (isset($_SESSION['errors'])) {
                    foreach ($_SESSION['errors'] as $value) {
                        echo "<li>$value</li>";
                    }
    
                    unset($_SESSION['errors']);
                }
                
                ?>
            </ul>
        </div>

        <div class="alert alert-success <?php echo isset($_SESSION['success']) ? '':'d-none'?>">
            <p>
            <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
            ?>
            </p>
                
        </div>
    </div>