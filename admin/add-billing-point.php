<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <?php include 'include-header.php' ?>

    </head>


    <body class="fixed-left" ng-app="myApp" ng-controller="myCtrl">

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
                            <h2>ADD BILLING POINT</h2>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <div class="row">
                                        <form action="#" data-parsley-validate novalidate>
                                        
                                            <div class="col-sm-12 col-xs-12 col-md-12">
                                                <div class="p-20">
                                                    <h4 class="header-title m-t-0 m-b-30">Billing Details</h4>
                                                    
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="consignee_name">Billing Details For: </label> 
                                                            <select class="form-control" name="godown_type">
                                                                <option>Invoice</option>
                                                                <option>Delivery Challan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="name">Company Name: </label> 
                                                            <input type="text" name="customer_name" class="form-control">
                                                        </div>
                                                    </div>
                                                    
                                                   
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="delivery_address">Company Address: </label> 
                                                            <textarea type="text" class="form-control" name="delivery_address">
                                                             </textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="delivery_address">Admin Address: </label> 
                                                            <textarea type="text" class="form-control" name="delivery_address">
                                                             </textarea>
                                                        </div>
                                                    </div>
                                                  
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="tin">Phone Number: </label> 
                                                            <input type="text" name="tin_no" class="form-control">
                                                        </div>
                                                    </div>  
                                                     
                                                  
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="contact_no">Fax Number: </label> 
                                                            <input type="text" name="contact_no" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Email: </label> 
                                                            <input type="text" name="email_id" class="form-control">
                                                        </div>
                                                    </div> 
                                                   
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">Area Code: </label> 
                                                            <input type="text" name="email_id" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">TIN No: </label> 
                                                            <input type="text" name="email_id" class="form-control">
                                                        </div>
                                                    </div>  
                                                     <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="email">CST No: </label> 
                                                            <input type="text" name="email_id" class="form-control">
                                                        </div>
                                                    </div>   
                                                    <div class="col-sm-6 col-xs-6 col-md-6">
                                                        <div class="form-group">
                                                            <label for="delivery_address">Terms and Conditions: </label> 
                                                            <textarea type="text" class="form-control" name="delivery_address">
                                                             </textarea>
                                                        </div>
                                                    </div>                                   
                                                    <div class="col-sm-12 col-xs-12 col-md-12" style="text-align: center;">
                                                    <div class="form-group text-right m-b-0">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-secondary waves-effect m-l-5">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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