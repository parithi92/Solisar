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
                            <h2>PURCHASE INDENT STATUS</h2>
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

                        
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                   
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Purchase Indent No</th>
                                                <th>Date</th>
                                                <th>Raised By</th>
                                                <th>Status</th>
                                                <th>Company Name</th> 
                                            </tr>
                                        </thead>


                                        <tbody>
                                            <tr>
                                                <td><a href="view-indent-paper.php">PI1015</a></td>
                                                <td>12/04/2017</td>
                                                <td>ganesh@solisar.in</td>
                                                <td>Approved</td>
                                                <td>Arumugam Mills</td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-indent-forms.php">PI1023</a></td>
                                                <td>08/03/2017</td>
                                                <td>vignesh@solisar.in</td>
                                                <td>Approved</td>
                                                <td>Star Mills</td>
                                            </tr>
                                            <tr>
                                                <td><a href="view-indent-glue.php">PI1002</a></td>
                                                <td>14/02/2017</td>
                                                <td>ilam@solisar.in</td>
                                                <td>Approved</td>
                                                <td>Dawood Mills</td>
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
                2017 © Solisar
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