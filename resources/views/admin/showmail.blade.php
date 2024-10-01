@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
    
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Inquiry from</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Exportersway</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->

            <!-- Repeater Html Start -->
            <div id="repeater">


                <!-- Repeater Items -->
                <div class="items" data-group="test">
                    <div class="card">
                        <div class="card-body">
                        <div class="mailshow">

<br>
<h5>Clint Mail : &nbsp;<b>{{ $data->clientemail }}</b></h5>
<br>
<div class="headermail">
<p>{!! $data->massage !!}</p>
<h6>Email:&nbsp;{{$data->enquiryemail}} </h6>
<h6>Mobile:&nbsp;{{$data->number}}</h6>
</div>
</div>
                        </div>
                    </div>
                </div>




            </div>
            <!-- Repeater End -->

</body>

</html>
@endsection