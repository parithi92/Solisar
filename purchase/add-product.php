<?php

session_start();
require_once 'class.user.php';
require_once 'class.product.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
    $user_home->redirect('index.php');
}

$product = new Product();

if(isset($_POST['paper-btn']))
{
    $product_type = trim($_POST['product_type']);
    $product_name = trim($_POST['product_name']);
    $gsm = trim($_POST['gsm']);
    $brand= trim($_POST['brand']);
    $unit_type= trim($_POST['unit_type']);
    $size1= trim($_POST['size_1']);
    $size2= trim($_POST['size_2']);
    
    if($product->addProduct($product_type, $product_name, $gsm, $brand, $unit_type, $size1, $size2))
    {
        $product_status= "Success";
    } else {
        $product_status= "Failure";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <?php include 'include-header.php' ?>
    </head>


    <body class="fixed-left" >

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.php" class="logo">
                        <i class="zmdi zmdi-group-work icon-c-logo"></i>
                        <span>Solisar</span></a>
                </div>

                <nav class="navbar navbar-custom">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="zmdi zmdi-menu"></i>
                            </button>
                        </li>
                        <li class="nav-item">
                            <h2>ADD PRODUCT</h2>
                        </li>
                        
                    </ul>

                    <ul class="nav navbar-nav pull-right">
                        <?php include 'top-menu.php' ?>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <?php include 'left-menu.php' ?>
                        <div class="clearfix"></div>
                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>

            </div>
            <!-- Left Sidebar End -->

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-sm-12 col-xs-12 col-md-12">
                                            <div class="p-20">
                                                <!--<h4 class="header-title m-t-0 m-b-30">Product Details</h4>-->
                                                <?php if(@$product_status=="Success"){ ?>
                                                    <div class="alert alert-success alert-dismissable fade in">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Success!</strong> Product inserted
                                                    </div>
                                                    <?php }else if(@$product_status!=""){ ?>
                                                    <div class="alert alert-danger alert-dismissable fade in">
                                                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                        <strong>Failure!</strong> Product not inserted
                                                    </div>
                                                    <?php } ?>
                                                <div class="col-sm-12 col-xs-12 col-md-12 " style="text-align: center;">
                                                    
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" id="paper">Papers</button>
                                                        <!--<button class="btn btn-primary" id="forms">Forms</button>-->
                                                        <button class="btn btn-primary" id="glue">Glue</button>
                                                    </div>
                                                </div>
                                                
                                                    <form action="add-product.php" id="paper-form" data-parsley-validate novalidate method="POST">
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="product_type">Product Type: </label> 
                                                                <select class="form-control" name="product_type">
                                                                    <option>Coated </option>
                                                                    <option>Uncoated </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="product_name">Product Name: </label> 
                                                                <select class="form-control" name="product_name">
                                                                    <option>Paper </option>
                                                                    <option>Board </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="product_gsm">GSM: </label> 
                                                                <select class="form-control" name="gsm">
                                                                    <option>800</option>
                                                                    <option>850</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="brand">Brand: </label> 
                                                                <select class="form-control" name="brand">
                                                                    <option>Primavera</option>
                                                                    <option>Skytone</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="unit_type">Unit Type: </label> 
                                                                <select class="form-control" id="unit_type" name="unit_type">
                                                                    <option value="Sheet">Sheet</option>
                                                                    <option value="Reel">Reel</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="size_1">Size 1: </label> 
                                                                <input type="text" class="form-control" name="size_1">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-xs-6 col-md-6" id="size_2">
                                                            <div class="form-group">
                                                                <label for="size_2">Size 2: </label> 
                                                                <input type="text" class="form-control" name="size_2">
                                                                 
                                                            </div>
                                                        </div>
                                                        
                                                        
                                                        
                                                        <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center;">
                                                        <div class="form-group text-right m-b-0">
                                                             <button class="btn btn-primary waves-effect waves-light" type="submit" name="paper-btn">Submit</button>
                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </form>
                                             
                                            
                                                    
                                                    <form action="#" id="glue-form" data-parsley-validate novalidate>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="brand_name">Brand: </label> 
                                                                    <select class="form-control" name="brand_name">
                                                                        <option>Skytone</option>
                                                                        <option>Primaveera</option>
                                                                    </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="type">Type: </label> 
                                                                <select class="form-control" name="type">
                                                                    <option>510</option>
                                                                    <option>2000</option>
                                                                    <option>2013</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center;">
                                                            <div class="form-group text-right m-b-0">
                                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                                </div>
                                            </div>
                                      
                                        </div>
                                </div>
                            </div>
                        </div> <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- End content-page -->

            <footer class="footer text-right">
                2017 © Solisar
            </footer>


        </div>
        <!-- END wrapper -->


        <script>
            var resizefunc = [];
        </script>

        <?php include 'include-footer.php' ?>

        <script src="script.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable').DataTable();

                $("#paper-").hide();

                //Buttons examples
                var table = $('#datatable-buttons').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'colvis']
                });

                table.buttons().container()
                        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');


            } );

        </script>

    </body>
</html>