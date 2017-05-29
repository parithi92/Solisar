<?php

session_start();
require_once 'class.user.php';
$user_home = new USER();

if(!$user_home->is_logged_in())
{
    $user_home->redirect('index.php');
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
                            <h2>PURCHASE DASHBOARD</h2>
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
                           <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-layers pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                                    <span class="label label-success"> </span> <span class="text-muted"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-paypal pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Pending Payment</h6>
                                    <h2 class="m-b-20">Rs <span data-plugin="counterup">46,782</span></h2>
                                    <span class="label label-danger"> 15 </span> <span class="text-muted">Pending Payment</span>
                                </div>
                            </div>

                           <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-chart pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Pending Orders</h6>
                                    <h2 class="m-b-20"><span data-plugin="counterup">20</span></h2>
                                    <span class="label label-pink">  </span> <span class="text-muted"></span>
                                </div>
                            </div>

                            <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                                <div class="card-box tilebox-one">
                                    <i class="icon-rocket pull-xs-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase m-b-20">Pending Statutory</h6>
                                    <h2 class="m-b-20" data-plugin="counterup">5</h2>
                                    <span class="label label-warning">  </span> <span class="text-muted"></span>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

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

    </body>
</html>