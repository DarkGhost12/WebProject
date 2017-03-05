<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to BioShare</title>
        <?php echo css('main');
              include '/u03/html/ieps/assets/header/header.php';
        ?>
            <div class='container'>
                <div id="body">
                    <p>INDEX PAGE</p>
                    <?php if(isset($message)){
                              echo "<p>$message</p>";
                          }
                    ?>
                </div>

                <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ? 'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
            </div>
        </div>
    </body>
</html>
