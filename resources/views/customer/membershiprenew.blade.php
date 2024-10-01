<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
        <title>Exportersway-Global B2B Marketplace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Exportersway-Global B2B Marketplace" name="description">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">
    <link rel="stylesheet" type="text/css" id="light-style" href="{{ asset('assets/css/feedback.css')}}">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @extends('customer.navmanu')
        <!-- LOGO -->



        <!-- Sidebar -left -->


        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @extends('customer.topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xxl-8">
                            <!-- start page title -->

                            <!-- end page title -->

                            <!-- tasks panel -->
                            <div style="    margin-top: 44px;">
                                
                                <h4 style="color:black">
                                    Dear sir,
                                    <br>
                                    <br>
                                    <b>Your Membership has been expried, Kindly renew to View leads and enquries.  </b>
                                </h4>
                                <!--<h6>Thanks </h6>-->
                                <br>
                                <br>
                                <a href="{{'adverties'}}" style="background: azure;
    padding: 10px 10px 10px 10px;
    border-radius: 20px;
    color: black;"
  >Upgrade Membership</a>
                            </div> <!-- end .mt-2-->


                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
             <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                            <p>Copyright &copy; 2021-<?php echo date ('Y'); ?>, All Right Reserved <a href="https://webcrowdsolutions.com/" target="_blank"> Webcrowd Solutions PVT LTD.</a></p>
                            </div>
                           
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- quill js -->
        <script src="assets/js/vendor/quill.min.js"></script>
        <!-- Init js-->
        <script src="assets/js/pages/demo.tasks.js"></script>

</body>

</html>