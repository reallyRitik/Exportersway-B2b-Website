@extends('customer.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">

            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Edit Lead Data</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Add</li>
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
                            <form method="post"  action="{{url('submitconnectdetails')}}" enctype="multipart/form-data">
                            @csrf
                                <!-- Repeater Content -->
                                <div class="item-content">
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Contact Person Name</label>
                                        <input class="form-control" id="title" name="contact_name" value="{{ optional(auth()->user())->name }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Designation</label>
                                        <input class="form-control" type="text" name="business_type">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Mobile No.</label>
                                        <input class="form-control" type="text" name="mobile" value="{{ optional(auth()->user())->mobile }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Alternative Number</label>
                                        <input class="form-control" type="text" name="alt_mobile">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Email</label>
                                        <input class="form-control" type="text" name="email" value="{{ optional(auth()->user())->email }}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">City</label>
                                        <input class="form-control" id="company_name" type="text" name="city">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">State</label>
                                        <input class="form-control" id="city" name="state">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Country</label>
                                        <input class="form-control" id="city" name="country">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Company Address</label>
                                        <input class="form-control" id="qty" name="address">
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Zip Code</label>
                                        <input class="form-control" id="country" type="text" name="zip">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Annual Turnover</label>
                                        <input class="form-control" id="country" type="text" name="turnover">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">No. of employees</label>
                                        <input class="form-control" id="country" type="text" name="total_employee">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Your Business Type</label>
                                        <input class="form-control" id="country" type="text" name="business_type">
                                    </div>
                                </div>
                                <!-- Repeater Remove Btn -->
                                <div class="repeater-remove-btn">
                                    <button class="btn btn-light remove-btn px-4">
                                        Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Repeater End -->

</body>

</html>
@endsection