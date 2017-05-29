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
                                                <div class="col-sm-12 col-xs-12 col-md-12 " style="text-align: center;">
                                                    <div class="form-group">
                                                        <button class="btn btn-primary" id="paper">Papers</button>
                                                        <!--<button class="btn btn-primary" id="forms">Forms</button>-->
                                                        <button class="btn btn-primary" id="glue">Glue</button>
                                                    </div>
                                                </div>
                                                
                                                    <form action="#" id="paper-form" data-parsley-validate novalidate>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="product_type">Product Type: </label> 
                                                                <select class="form-control" name="product">
                                                                    <option>Coated </option>
                                                                    <option>Uncoated </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="product_name">Product Name: </label> 
                                                                <select class="form-control" name="product">
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
                                                             <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                            <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                        </div>
                                                        </div>
                                                    </form>
                                             
                                            
                                                    <!--<form action="#" id="forms-form" data-parsley-validate novalidate>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                            <label for="part_1">Part 1: </label> 
                                                            <input type="text" class="form-control" name="part_1">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="part_2">Part 2: </label> 
                                                                <input type="text" class="form-control" name="part_2">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="no_copy">No of Copies : </label> 
                                                                <select class="form-control" name="copies">
                                                                    <option>Single</option>
                                                                    <option>Double</option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="colour">Colour : </label> 
                                                                <select class="form-control" name="copies">
                                                                    <option>Single Colour</option>
                                                                    <option>Multi Colour</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="no_sheet">No of Sheets: </label> 
                                                                <input type="text" class="form-control" name="sheets_count">
                                                            </div>
                                                        </div>
                                                       
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="delivery_type">Delivery Type: </label> 
                                                                 <select class="form-control" name="delivery_type">
                                                                    <option>Self - Pickup</option>
                                                                    <option>Delivery</option>
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="unit_type">Delivery Address: </label> 
                                                                 <select class="form-control" name="delivery_address" id="delivery_address">
                                                                    <option value="godown_a">Godown A</option>
                                                                    <option value="godown_b">Godown B</option>
                                                                    <option value="godown_c">Godown C</option>
                                                                    <option value="godown_d">Godown D</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6" id="self-address-form">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3" id="address" disabled>Godown A, Solisar & Company, 1/102-Anderson Street, Parrys, Chennai - 600002</textarea>    
                                                            </div>
                                                        </div>
                                                     
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="compay_name">Company Name: </label> 
                                                                <select class="form-control" name="compay_name">
                                                                    <option>Arumugam Mills</option>
                                                                    <option>Star Mills</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center;">
                                                            <div class="form-group text-right m-b-0">
                                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                                                                <button type="reset" class="btn btn-secondary waves-effect m-l-5">Cancel</button>
                                                            </div>
                                                        </div>
                                                    </form>-->
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