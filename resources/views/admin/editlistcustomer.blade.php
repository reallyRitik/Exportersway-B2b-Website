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
                    @if(session('successl3'))
                    <div id="session-message" class="session-message">
                        {{ session('successl3') }}
                    </div>
                    @endif
                    <style>
                        .session-message {
                            height: 50px;
                            margin-top: 10px;
                            display: flex;
                            justify-content: center;
                            align-items: center;
                            font-size: 18px;
                            width: 100%;
                            border-radius: 8px;
                            border: 2px solid #5F9EA0;
                            border-bottom: 4px solid #5F9EA0;
                            padding: 10px;
                            background-color: #5F9EA0;
                            border: 1px solid #5F9EA0;
                            transition: opacity 3s ease-in-out;
                        }

                        .session-message.fade-out {
                            opacity: 0;
                            transition: opacity 2s ease-in-out;
                        }
                    </style>
                    <script>
                        setTimeout(function() {
                            $('#session-message').addClass('fade-out');
                        }, 4000);

                        setTimeout(function() {
                            $('#session-message').remove();
                        }, 8000);
                    </script>
                    <div class="card">
                        <div class="card-body">
                        <form action="{{ url('updatecustomer', ['id' => $listcust->id]) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
                                <!-- Repeater Content -->
                                <div class="item-content">
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">UserName</label>
                                        <input class="form-control"  type="text" name="email" value="{{$listcust->email}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Company Name</label>
                                        <input class="form-control"  type="text" name="company_name"  value="{{$listcust->company_name}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="inputName1" class="form-label">Mobile No.</label>
                                        <input class="form-control"type="text" name="mobile" value= "{{$listcust->mobile}}"  >
                                    </div>

                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Contact Name</label>
                                        <input class="form-control" id="country" type="text" name="contact_name" value= "{{$listcust->contact_name}}" >
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Country</label>
                                        <input class="form-control"  id="country" type="text" name="country" value= "{{$listcust->country}}">
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Address</label>
                                        <input class="form-control" id="country" type="text" name="address" value= "{{$listcust->address}}"  >
                                    </div>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Membership</label>
                                        <input class="form-control" id="country" type="text" name="membership_expiry" value= "{{$listcust->membership_expiry}}">
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