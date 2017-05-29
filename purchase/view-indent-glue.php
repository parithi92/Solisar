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
                            <h2>PURCHASE INDENT GLUE</h2>
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
                                            <th>Unit Type</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Primavera</td>
                                            <td>510</td>
                                            <td>Boxes</td>
                                            <td>50</td>
                                            
                                        </tr>
                                            
                                    </tbody>
                                </table>  
                                </div>
                            </div>
                        </div> <!-- end row -->
                        <div class="col-sm-12">
                            <div class="card-box table-responsive">
                                   
                               <table id="tech-companies-1" class="table table-striped table-bordered">
                                    <thead>
                                        
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Purchase Type</th>
                                            <td>Mill-Self-VAT</td>
                                        </tr>
                                        <tr>
                                            <th>Delivery Type</th>
                                            <td>Delivery</td>
                                        </tr>
                                        <tr>
                                            <th>Company</th>
                                            <td>Dawood Mills</td>
                                        </tr> 
                                        <tr>
                                            <th>Delivery Address</th>
                                            <td>Godown A, Solisar & Company, Papers 1/102-Anderson Street, Parrys, Chennai- 600002</td>
                                        </tr>
                                        
                                        <tr>
                                            <th>Status</th>
                                            <td>Approved</td>
                                        </tr> 
                                        <tr>
                                            <th>Remarks</th>
                                            <td>Purchase glue from this vendor</td>
                                        </tr> 
                                    </tbody>
                                </table>  
                            </div>
                            <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center;">
                                <div class="form-group text-right m-b-0">
                                    <a href="purchase-indent-status.php"><button class="btn btn-primary waves-effect waves-light">Back</button></a>
                                    
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