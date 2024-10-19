@extends('admin.navmanu')
@section('maincontent')

<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col">
                    <a href="{{ url('/allUsers') }}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Users</p>
                                        <h4 class="my-1">{{ \App\Models\User::count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{ url('/listpaidcustomers') }}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Paid Members</p>
                                        <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '!=', 5)->count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-12">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Product</p>
                                    <h4 class="my-1">{{ \App\Models\Product::count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-binoculars'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <a href="{{ url('/lead') }}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total Leads</p>
                                        <h4 class="my-1">{{ \App\Models\Leadlist::count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('/viewcategory')}}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total L1 Categories</p>
                                        <h4 class="my-1">{{ \App\Models\Addcategory::count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('/viewsubcategory')}}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total L2 Categories</p>
                                        <h4 class="my-1">{{ \App\Models\Subcategory::count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('/viewsubnestedcategory')}}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Total L3 Categories</p>
                                        <h4 class="my-1">{{ \App\Models\Subcategorynested::count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href="{{url('/listtetracustomers')}}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Tetra Users Membership</p>
                                        <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 4)->count() }}</h4>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col">
                <a href="{{url('/listgrowingcustomers')}}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Growing Users Membership</p>
                                    <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 3)->count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
                <div class="col">
                <a href="{{url('/listprocustomers')}}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Pro Users Membership</p>
                                    <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 2)->count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
                <div class="col">
                <a href="{{url('/listelitecustomers')}}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Elite Users Membership</p>
                                    <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 1)->count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
                <div class="col">
                <a href="{{url('/listelitepluscustomers')}}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Elite Plus Users Membership</p>
                                    <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 6)->count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
                <div class="col">
                <a href="{{url('/listfreecustomers')}}">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Free Users Membership</p>
                                    <h4 class="my-1">{{ \App\Models\Listcustomer::where('rank', '=', 5)->count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </a>
                </div>
                <div class="col">
                    <div class="card radius-10">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div>
                                    <p class="mb-0">Total Enquiry To Clients</p>
                                    <h4 class="my-1">{{ \App\Models\Mail::count() }}</h4>

                                </div>
                                <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!--end row-->


        </div>

</body>

</html>
@endsection