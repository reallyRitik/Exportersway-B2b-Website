<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exportersway- World fastest Growing B2B Network</title>
     <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="fastest growing b2b exporters network" name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->
     

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style">
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style">

</head>

<body class="loading"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @extends('admin.navmanu')
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

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box">
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                        <li class="breadcrumb-item active">Form Elements</li>
                                    </ol>
                                </div>
                                <h4 class="page-title">Add Category</h4>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="input-types-preview">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <form action="{{ route('edit',['id' => $cat->id]) }}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        @method('PUT')
                                                        <!-- <form action="submitaddcategory" method="POST"> -->
                                                        <div class="mb-3">
                                                            <label for="simpleinput" class="form-label">{{ $cat->name }}</label>
                                                            <input type="text" id="simpleinput" class="form-control"
                                                                name="name">
                                                        </div>
                                                        <button type="submit"
                                                            style="background: #8c8cd7; border-radius: 5px;"><span
                                                                style="    color: white;
    font-size: 20px;">Submit</span></button>
                                                    </form>
                                                </div> <!-- end col -->


                                            </div> <!-- end col -->
                                        </div>
                                        <!-- end row-->
                                    </div> <!-- end preview-->

                                </div><!-- end preview code-->
                            </div> <!-- end tab-content-->
                        </div> <!-- end card-body -->
                    </div> <!-- end card -->
                </div><!-- end col -->
            </div><!-- end row -->


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

</body>

</html>