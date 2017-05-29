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
                            <h2>VIEW COMPLAINT</h2>
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
                                   
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Order No</th>
                                                <th>Invoice No</th>
                                                <th>Material</th>
                                                <th>Ream/Reel No</th>
                                                <th>Quantity Received (Kg)</th>
                                                <th>Quantity Demaged (Kg)</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td><a href="">SO10020</a></td>
                                                <td><a href="">INV10020</a></td>
                                                <td>Primaveera-800x12.5x7.5</td>
                                                <td>BATCH10025</td>
                                                <td>500</td>
                                                <td>50</td>
                                               
                                            </tr>
                                            <tr>
                                                <td><a href="">SO10021</a></td>
                                                <td><a href="">INV10021</a></td>
                                                <td>Skytone-900x12.5x7.5</td>
                                                <td>BATCH10012</td>
                                                <td>300</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td><a href="">SO10022</a></td>
                                                <td><a href="">INV10022</a></td>
                                                <td>Primaveera-950x12.5x7.5</td>
                                                <td>BATCH10015</td>
                                                <td>250</td>
                                                <td>20</td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> <!-- end row -->


                      
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