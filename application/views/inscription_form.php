<head>
    <?php echo css('main');
          include 'application/views/assets/header/header.php';
    ?>
</head>
<body>
    <div id="container">
        <h1>Inscription form</h1>
        <form action="<?php echo base_url(); ?>UserManagement/register" method="POST">
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="text" class="form-control" name="email" id="email" required/>
            </div>
            <div class="form-group">
                <label for="email2">Retype Email:</label>
                <input type="text" class="form-control" id="email2" name="email2"/>
            </div>
            <div class="form-group">
                <label for="username">Username :</label>
                <input type="text" class="form-control"d="username" name="username"/>
            </div>
            <div class="form-group">
                <label for="email">Lastname :</label>
                <input type="text" class="form-control" id="lastname" name="lastname"/>
            </div>
            <div class="form-group">
                <label for="email">Firstname :</label> 
                <input type="text" class="form-control" id="firstname" name="firstname"/>
            </div>
            <div class="form-group">
                <label for="email">Address :</label>
                <input type="text" class="form-control" id="address" name="address"/>
            </div>
            <div class="form-group">
                <label for="email">ZIP code :</label>
                <input type="text" class="form-control" id="zip" name="zip"/>
            </div>
            <div class="form-group">
                <label for="email">City :</label>
                <input type="text" class="form-control" id="city" name="city"/>
            </div>
            <div class="form-group">
                <label for="email">Phone :</label>
                <input type="text" class="form-control" id="phone" name="phone"/>
            </div>
            <div class="form-group">
                <label for="email">Password :</label>
                <input type="password" class="form-control" id="pwd" name="pwd"/>
            </div>
            <div class="form-group">
                <label for="email">Retype Password :</label>
                <input type="password" class="form-control" id="pwd2" name="pwd2"/>
            </div>
            <div class="form-group">
                <label for="email">VAT Number :</label>
                <input type="text" class="form-control" id="vat" name="vat"/>
            </div>
            <input type="submit" value"Save" />
        </form>
   </div>
</body>













