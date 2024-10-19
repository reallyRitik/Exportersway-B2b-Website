<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exportersway- World fastest growing B2B network</title>
          <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="fastest growing b2b exporters network" name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">

</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @extends('admin.navmanu')
        <!-- LOGO -->



        <!-- Sidebar -left -->


        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->
                @extends('admin.topbar')
                <!-- end Topbar -->

                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xxl-8">
                            <!-- start page title -->
                            <div class="page-title-box">
                                <!-- <div class="page-title-right">
                                        <div class="app-search">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" placeholder="Search...">
                                                    <span class="mdi mdi-magnify search-icon"></span>
                                                    <button class="input-group-text btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class='uil uil-sort-amount-down'></i>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <a class="dropdown-item" href="#">Due Date</a>
                                                        <a class="dropdown-item" href="#">Added Date</a>
                                                        <a class="dropdown-item" href="#">Assignee</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div> -->

                            </div>
                            <!-- end page title -->

                            <!-- tasks panel -->
                            <div class="mt-2">


                                <div class="collapse show" id="todayTasks">
                                    <div class="card mb-0">
                                        <div class="card-body">
                                            <!-- Responsive form design I created. Feel free to visit my website at jacoblisic.com -->


                                            <form>

                                                <div class="large-group">
                                                    <div class="small-group">
                                                        <label for="firstname">First Name</label>
                                                        <input id="firstname" type="text" name="firstname" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="lastname">Last Name</label>
                                                        <input for="lastname" type="text" name="lastname" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="UserName">UserName</label>
                                                        <input for="UserName" type="text" name="name" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="Group">Group</label>
                                                        <select name="role_id">
                                                            <option value="">-- Select Group -- </option>
                                                            <option value="1">Admin</option>
                                                            <option value="2">Customer</option>
                                                        </select>
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="email">Email</label>
                                                        <input id="email" type="email" name="email" />
                                                    </div>

                                                    <div class="small-group">
                                                        <label for="phonenumber">Phone Number</label>
                                                        <input id="phonenumber" type="tel" name="phonenumber" />
                                                    </div>


                                                    <div class="small-group">
                                                        <label for="password"> Password</label>
                                                        <input id="password" type="text" name="password" />
                                                    </div>
                                                    <div class="small-group">
                                                        <label for="password">Confirm Password</label>
                                                        <input id="Cpassword" type="text" name="Cpassword" />
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
                                                select {
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
                                <script>document.write(new Date().getFullYear())</script> © Exportersway - Exportersway.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
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



        <div class="rightbar-overlay"></div>
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