<head>
    <?php echo css('main');
          include 'application/views/assets/header/header.php';
    ?>
</head>
<body>
    <div id="container">
        <h1>Product add form</h1>
        <form action="<?php echo base_url(); ?>ProductManagement/add_product" method="POST">
            <div class="form-group">
                <label for="ProductName">Product name</label>
                <select name="ProductName">
                    <?php 
                        foreach($productsName as $product){
                            echo "<option value='".$product."'>$product</option>";    
                        }
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="ProductDesc">Product description</label>
                <input type="text" class="form-control" name="ProductDesc" id="ProductDesc" required/>
            </div>
            <div class="form-group">
                <label for="ProductQty">Product quantity
                </label>
                <input type="number" class="form-control" name="ProductQty" id="ProductQty" required/>
            </div>
            <div class="form-group">
                <label for="ProductQuality">Product quality (description)</label>
                <input type="text" class="form-control" name="ProductQuality" id="ProductQuality" required/>
            </div>
            <input type="submit" value="Add" />
        </form>
   </div>
</body>
