<head>
    <?php echo css('main');
          include 'application/views/assets/header/header.php';
    ?>
</head>
<body>
    <div id="container">
       <?php
         echo "<div class='row'>";
         foreach($productsList as $product){
             echo "<div class='col-lg-3'>";
             echo "<div class='row'>".$ProductDenom."</div>";
             echo "<div class='row'>".$ProductQuantity."</div>";
             echo "<div class='row'>".$ProductDescription."</div>";
             echo "<div class='row'><img src='".$ProductImage."' alt='".$ProductDenom."/></div>";
             echo "</div>";
         }
         echo "</div>";
     ?>
   </div>
</body>













