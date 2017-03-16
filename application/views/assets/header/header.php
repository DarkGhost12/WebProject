<html>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
        crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
        <div id="container">
            <div class="header">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url();?>">BioShare</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">

                            </ul>
                            <form class="navbar-form navbar-left" action="ProductManagement/get_product_by_name" method="POST">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Search" name="search">
                                </div>
                                <button type="submit" class="btn btn-default">Submit</button>
                            </form>
                            <ul class="nav navbar-nav navbar-right">
                                <?php if(!isset($_SESSION['login'])){ ?>
                                <li><a class="btn btn-default" href="<?php echo base_url(); ?>UserManagement/show_register">Inscription</a></li>
                                <li><a class="btn btn-info" data-toggle="modal" data-target="#lf">login</a></li>
                                <?php } else { ?>
                                <li><a class="btn btn-default" href="<?php echo base_url();?>ProductManagement/show_add_product">Add a product</a></li>
                                <li><a class="btn btn-info" href="<?php echo base_url();?>UserManagement/disconnect">Disconnect</a></li>
                                <?php }?>
                                <li><a href="<?php echo base_url();?>CartManagement/show_cart"<button class="btn btn-default btn-lg"><span class="glyphicon glyphicon-shopping-cart "></span></button></a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="modal fade" role="dialog" id="lf">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Login</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo base_url(); ?>UserManagement/login" method="POST">
                                    <label for="login">Login</label>
                                    <input type="text" class="form-control" name="login" id="login" />
                                    <label for="pwd">Password</label>
                                    <input type="password" class="form-control" name="password" id="password" />
                                    <button type="submit" class="btn btn-default">Login</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                </div>
            </div>
</html>
