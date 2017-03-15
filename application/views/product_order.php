<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php echo css('main');
          include 'application/views/assets/header/header.php';
    ?>
</head>
<body>
    <div id="container">
         <div id='body'>
             <div class='col-md-4'><?php echo $name; ?><br/>
             <?php echo $desc; ?><br/>
             <?php echo $qty; ?><br/>
             <?php echo $quality; ?></div>
         </div>
    </div>
    Order form <br/>
    <form action="<?php echo base_url(); ?>CartManagement/add_to_cart">
        <input type="hidden" name="id" value="<?php echo $id; ?>"/>
        <input type="hidden" name="name" value="<?php echo $name; ?>"/>
        Quantity asked : <input type="number" name="qty" value="0" size="3  "/><br/>
        <input type="submit"/>
    </form>
</body>













