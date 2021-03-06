<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <?php include 'include-header.php' ?>
    </head>


    <body class="fixed-left">

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
                            <h2>PURCHASE ENQUIRY GLUE</h2>
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



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">

                        
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                   
                               <table id="tech-companies-1" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Brand</th>
                                            <th>Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Primavera</td>
                                            <td>510</td>
                                            
                                        </tr>
                                            
                                    </tbody>
                                </table>  
                                </div>
                            </div>
                        </div> <!-- end row -->
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="row">
                                    <form action="#" id="paper-form" data-parsley-validate novalidate>
                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="unit_type">Unit Type: </label> 
                                                                <select class="form-control" id="glue_unit" name="unit_type">
                                                                    <option value="Boxes">Boxes</option>
                                                                    <option value="Kg">Kg</option>
                                                               </select>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-4 col-xs-4 col-md-4">
                                                            <div class="form-group">
                                                                <label for="quantity">Quantity: </label> 
                                                                <input type="text" class="form-control" id="qty_glue" name="quantity">    
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-2 col-xs-2 col-md-2">
                                                            <div class="form-group">
                                                                <label for="convert_qty">Convert To: </label> 
                                                                <div id="convert_qty"></div>
                                                            </div>
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
                                                                 <select class="form-control" name="delivery_address" id="delivery_address_glue">
                                                                    <option value="Self">Self</option>
                                                                    <option value="Arumugam">Arumugam Papers</option>
                                                                    <option value="Star">Star Papers</option>
                                                                    <option value="other">Other Company</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6 col-xs-6 col-md-6" id="self-address-glue">
                                                            <div class="form-group">
                                                                <textarea class="form-control" rows="3" id="address" disabled>Dawood Papers 1/102-Anderson Street, Parrys, Chennai - 600002</textarea>    
                                                            </div>
                                                        </div>
                                                        <div id="other_delivery_glue">
                                                            <div class="col-sm-6 col-xs-6 col-md-6">
                                                                <label for="deliver_comp">Delivery Company Name: </label>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control" name="deliver_comp_name">    
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6 col-xs-6 col-md-6">
                                                                <label for="deliver_comp">Delivery Company Address: </label>
                                                                <div class="form-group">
                                                                    <textarea class="form-control" name="delivery_comp_address" rows="3" id="company_address"></textarea>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="col-sm-6 col-xs-6 col-md-6">
                                                            <div class="form-group">
                                                                <label for="delivery_date">Delivery Date: </label> 
                                                                <input type="text" class="form-control" name="delivery_date" id="datepicker-autoclose2" placeholder="dd/mm/yyyy">
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
                      
                        <!-- end row -->

                    </div> <!-- container -->

                </div> <!-- content -->

            </div>
            <!-- End content-page -->


            
            <footer class="footer text-right">
                2016 © Solisar
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