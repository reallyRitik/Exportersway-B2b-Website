<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Exportersway- World fastest growing B2B network</title>
          <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
    <meta content="Coderthemes" name="author">
    <!-- App favicon -->

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />


</head>

<body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <!-- Begin page -->
    <div class="wrapper">
        <!-- ========== Left Sidebar Start ========== -->
        @extends('admin.navmanu')
        <style>
            table {
                width: 100%
            }
        </style>
        <div class="content-page">
            <div class="content">
                <!-- Topbar Start -->

                @extends('admin.topbar')
                <!-- end Topbar -->


                <!-- Start Content-->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                                            <div class="header">
                                                <form action="{{ route('searchmail') }}" method="GET">
                                                <div class="header__middle">
                                                    <span class="material-icons"> search </span>
                                                    <input type="text" placeholder="Search mail"  name="email" value="{{ request('email') }}" />
                                                    <span class="material-icons"> arrow_drop_down </span>
                                                </div>
                                                </form>

                                                <div class="header__right">
                                                    <span class="material-icons"> apps </span>
                                                    <span class="material-icons"> notifications </span>
                                                    <span class="material-icons"> account_circle </span>
                                                </div>
                                            </div>
                                            <!-- Header Ends -->

                                            <!-- Main Body Starts -->
                                            <div class="main__body">
                                                <!-- Sidebar Starts -->
                                                

                                                <!-- Email List Starts -->
                                                <div class="emailList">
                                                    <!-- Settings Starts -->
                                                  
                                                    <!-- Email List rows starts -->
                                                    <div class="emailList__list">
                                                        <!-- Email Row Starts -->
                                                        @foreach($allmail as $mail)
                                                        <div class="emailRow" id="{{$mail->id}}">
                                                            <div class="emailRow__options">
                                                                <input type="checkbox" name="" id="" />
                                                                <span class="material-icons"> star_border </span>
                                                                <span class="material-icons"> label_important </span>
                                                            </div>

                                                            <a href="{{ route('showmail', ['id' => $mail->id]) }}"> <h3 class="emailRow__title" id="{{$mail->id}}">{{$mail->clientemail}}</h3></a>
                                                            <div class="emailRow__message">
                                                                <h4>
                                                                    Inquiry  From Exportersway
                                                                    <span class="emailRow__description"> - {{$mail->massage}} </span>
                                                                </h4>
                                                            </div>

                                                            <p class="emailRow__time">{{ \Carbon\Carbon::parse($mail->created_at)->format('d F') }}</p>
                                                        </div>
                                                        @endforeach
                                                        <!-- Email Row Ends -->

                                                    </div>
                                                    <!-- Email List rows Ends -->
                                                     
                                                <!-- Email List Ends -->
                                              
                                            </div>
                                            <!-- Main Body Ends -->
                                           
</body>

</html>
<style>
    /* Header */
    

    .header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid whitesmoke;
    }

   

    .header__middle {
        display: flex;
        flex: 0.7;
        align-items: center;
        background-color: whitesmoke;
        padding: 10px;
        border-radius: 5px;
    }

    .material-icons {
        color: gray;
    }

    .header__middle input {
        border: none;
        width: 100%;
        padding: 10px;
        outline: none;
        font-size: medium;
        background-color: transparent;
    }

    .header__right {
        display: flex;
        padding-right: 20px;
    }

    .header__right span {
        padding: 10px;
        cursor: pointer;
    }


    /* main body */
    .main__body {
        display: flex;
        height: 100vh;
    }

    body {
        height: 100vh;
        overflow-y: hidden;
    }

    /* email list */
    .emailList {
        flex: 1;
        overflow: scroll;
    }

    .emailList__settings {
        position: sticky;
        top: 0;
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid whitesmoke;
        background-color: white;
        z-index: 999;
        padding: 8px;
    }

    .emailList__settings .material-icons {
        margin: 5px;
        cursor: pointer;
    }

    .section {
        display: flex;
        align-items: center;
        border-bottom-width: 2px;
        padding: 15px;
        min-width: 200px;
        cursor: pointer;
        color: grey;
        border-width: 0;
    }

    


    .section:hover {
        background-color: whitesmoke;
        border-width: 3px;
    }

    .section h4 {
        font-size: 14px;
        margin-left: 15px;
    }

    .emailRow__options {
        display: flex;
        align-items: center;
    }

    .emailRow__options .material-icons,
    input {
        margin: 5px;
    }

    .emailRow {
        display: flex;
        align-items: center;
        height: 50px;
        border-bottom: 1px solid whitesmoke;
        cursor: pointer;
        z-index: 999;
    }

    .emailRow:hover {
        border-top: 1px solid whitesmoke;
        box-shadow: 0 4px 4px -2px rgba(0, 0, 0, 0.24);
    }

    .emailRow__message {
        display: flex;
        flex: 0.8;
        align-items: center;
        font-size: 13px;
    }

    .emailRow__message h4 {
        width: 400px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        padding-left: 5px;
        padding-right: 5px;
    }

    .emailRow__title {
        font-size: 12px;
        flex: 0.3;
    }

    .emailRow__time {
        padding-right: 15px;
        font-size: 10px;
        font-weight: bold;
    }

    .emailRow__description {
        font-weight: 400;
        color: gray;
    }
</style>



</div> <!-- end card-body-->
</div> <!-- end card -->
</div> <!-- end .collapse-->
</div> <!-- end .   -->


</div>
<!-- end row-->

</div> <!-- container -->

</div> <!-- content -->

<!-- Footer Start -->

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