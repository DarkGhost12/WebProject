<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Welcome to BioShare</title>
        <?php echo css('main');
              include 'application/views/assets/header/header.php';
        ?>
		<script>
			$(document).ready(function(){
				
			});
		</script>
	</head>
	<body>
        <div class='container'>
            <div id="body">
                <?php if(isset($message)){
                        echo "<p>$message</p>";
                      }
                      if(isset($products)){
						foreach($products as $product){
							echo "<div class='col-md-4'>";
							echo $product->ProductDenom."<br/>";
							echo $product->ProductDescription."<br/>";
							echo $product->ProductQuantity."<br/>";
							echo $product->ProductQuality."<br/>";
                            echo "<a class=\"btn btn-default\" href=\"".base_url()."ProductManagement/show_order_product?id=".$product->ProductID."\">Order</a>";
							echo "</div>";
						}
                       }
                ?>
            </div>
        </div>
    </body>
</html>
