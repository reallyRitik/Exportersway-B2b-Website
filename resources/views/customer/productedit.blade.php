
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
        <title>Exportersway-Global B2B Marketplace</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Exportersway-Global B2B Marketplace" name="description">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">

    <link rel="shortcut icon" href="{{ asset('assets/css/form.css')}}">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @extends('customer.navmanu')

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
                            <div class="mt-2">


                                <div class="collapse show" id="todayTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <h3>Company Details
                                            </h3>
                                            <form>

                                                <div class="large-group">
                                                    <div class="small-group">
                                                        <label for="companyname">Company Name</label>
                                                        <input id="companyname" type="text" name="companyname" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="website">Website URL</label>
                                                        <input for="website" type="text" name="website" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="logo">Company Logo</label>
                                                        <input for="logo" type="text" name="logo" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="about"> About</label>

                                                        <textarea id="about" type="text" name="about"></textarea>
                                                    </div>


                                                    <button style="background-color: #7070ec;
    color: white;
    width: 112px;
    margin-left: 42%;
    margin-top: 3%;
    border-radius: 10%;" id="submit" class="btn" type="submit" name="submit"> Submit
                                                    </button>
                                                </div>
                                            </form>
                                            <style>
                                                @media screen and (min-width: 700px) {
                                                    .large-group {
                                                        display: flex;
                                                        flex-wrap: wrap;
                                                        justify-content: space-between;
                                                    }

                                                    .small-group {
                                                        width: 45%;
                                                    }

                                                    .btn {
                                                        background-color: #7070ec;
                                                        color: white;
                                                        width: 112px;
                                                        margin-left: 42%;
                                                        margin-top: 3%;
                                                        border-radius: 10%;
                                                    }
                                                }

                                                label {
                                                    display: block;
                                                    margin-bottom: 5px;
                                                }

                                                input,
                                                select,
                                                textarea {
                                                    padding: 10px 16px;
                                                    width: 100%;
                                                    outline: 0;
                                                    margin-bottom: 20px;
                                                    border-radius: 20px;
                                                    border: 0;
                                                    background-color: #ededed;
                                                    font-size: 14px;
                                                    -webkit-appearance: none;
                                                    -moz-appearance: none;
                                                    appearance: none;
                                                }
                                            </style>


                                        </div> <!-- end card-body-->
                                    </div> <!-- end card -->
                                </div> <!-- end .collapse-->
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


     

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- quill js -->
        <script src="assets/js/vendor/quill.min.js"></script>
        <!-- Init js-->
        <script src="assets/js/pages/demo.tasks.js"></script>

</body>

</html>