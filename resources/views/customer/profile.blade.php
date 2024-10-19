@extends('customer.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Your Product</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <hr>
        <div class="row">
            <div class="col-xxl-8">
                <!-- start page title -->


                <!-- end page title -->

                <!-- tasks panel -->
                <div class="mt-2">
                    <div class="collapse show" id="todayTasks">
                        <div class="card mb-0">
                            <div class="card-body">

                                <form method="post" action="{{url('editprofile')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="large-group">
                                        <div class="small-group">

                                            <label for="inputName1" class="form-label">Company Name</label>
                                            <input id="simpleinput" class="form-control" type="text" name="company_name" value="{{$profile->company_name?? '' }}">

                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Website URL</label>
                                            <input id="simpleinput" class="form-control" type="text" name="website" value="{{$profile->website?? '' }}">
                                        </div>
                                        <div class="small-group">

                                            <br>
                                            <label for="inputName1" class="form-label">Company Logo</label>
                                            <input id="simpleinput" class="form-control" type="file" name="companylogo">
                                        </div>

                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">About Company</label>
                                            <textarea class="form-control" type="text" name="companydetails">{{$profile->companydetails?? '' }}</textarea>
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Contact Person Name</label>
                                            <input id="simpleinput" class="form-control" type="text" name="contact_name" value="{{$profile->contact_name?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your Designation</label>
                                            <input id="simpleinput" class="form-control" type="text" name="apeda" value="{{$profile->apeda}}" >
                                        </div>
                                        <div class="small-group">

                                            <label for="inputName1" class="form-label">Your Mobile Number</label>
                                            <input id="simpleinput" class="form-control" type="text" name="mobile" value="{{$profile->mobile?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your Alternative Number</label>
                                            <input id="simpleinput" class="form-control" type="text" name="alt_mobile" value="{{$profile->alt_mobile?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Emails</label>
                                            <input id="simpleinput" class="form-control" type="text" name="email" value="{{$profile->email?? '' }}">
                                        </div>

                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your City</label>
                                            <input id="simpleinput" class="form-control" type="text" name="city" value="{{$profile->city?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your State</label>
                                            <input id="simpleinput" class="form-control" type="text" name="state" value="{{$profile->state?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your Country</label>
                                            <input id="simpleinput" class="form-control" type="text" name="country" value="{{$profile->country?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your Company Address</label>
                                            <input id="simpleinput" class="form-control" type="text" name="address" value="{{$profile->address?? '' }}">
                                        </div>
                                        <div class="small-group">

                                            <label for="inputName1" class="form-label">Zip Code</label>
                                            <input id="simpleinput" class="form-control" type="text" name="zip" value="{{$profile->zip?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Annual Turnover</label>
                                            <input id="simpleinput" class="form-control" type="text" name="turnover" value="{{$profile->turnover?? '' }}">
                                        </div>
                                        <div class="small-group">

                                            <label for="inputName1" class="form-label">No. of employees</label>
                                            <input id="simpleinput" class="form-control" type="text" name="total_employee" value="{{$profile->total_employee?? '' }}">
                                        </div>

                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Your Business Type</label>
                                            <input id="simpleinput" class="form-control" type="text" name="business_type" value="{{$profile->business_type?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">GST</label>
                                            <input id="simpleinput" class="form-control" type="text" name="gst" value="{{$profile->gst?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Import Export Code</label>
                                            <input id="simpleinput" class="form-control" type="text" name="ie_code" value="{{$profile->ie_code?? '' }}">
                                        </div>
                                      
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Established Year</label>
                                            <input id="simpleinput" class="form-control" type="text" name="eyear" value="{{$profile->eyear?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Nearest Port</label>
                                            <input id="simpleinput" class="form-control" type="text" name="Port" value="{{$profile->Port?? '' }}">
                                        </div>
                                        <div class="small-group">
                                            <label for="inputName1" class="form-label">Overseas Office</label>
                                            <input id="simpleinput" class="form-control" type="text" name="oOffice" value="{{$profile->oOffice?? '' }}">
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
        </body>

</html>
@endsection