@extends('customer.navmanu')
@section('maincontent')

<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row row-cols-1 row-cols-lg-2 row-cls-xl-3">
            @if (auth()->check())
                <div class="col">
                    <a href="{{ url('/profile') }}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Company:- @if(auth()->user()->customer && auth()->user()->customer->company_name)
    {{ auth()->user()->customer->company_name }}
@endif</p>
                                        <p class="my-1">Mobile:- {{ auth()->user()->mobile }}</p>
                                        <p class="my-1">Email:- {{ auth()->user()->email }}</p>

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endif
                <div class="col">
                    <a>
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Rank:- <b style="color:lime">
   @php
    $rank = auth()->user()->customer ? auth()->user()->customer->rank : null;
    if ($rank == 1) {
        echo "Elite";
    } elseif ($rank == 2) {
        echo "PRO";
    } elseif ($rank == 3) {
        echo "Growing";
    } elseif ($rank == 4) {
        echo "Tetra";
    } elseif ($rank == 6) {
        echo "Elite Plus";
    } else {
        echo "We Pass";
    }
@endphp

</b> </p>
                                        <p class="mb-0">Joining Date</p>
                                        @auth
                @if(auth()->user()->customer)
                                        <h6 class="my-1">{{ \Carbon\Carbon::parse(auth()->user()->customer->created_at)->isoFormat('Do MMM YYYY') }}</h6>
                                        @endif
            @endauth

                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-group'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
            
                <div class="col">
                    <a href="{{url('/viewlead')}}">
                        <div class="card radius-10">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <p class="mb-0">Uses Total Lead</p>
                                        @auth
                @if(auth()->user()->customer)
                                        <h4 class="my-1">{{auth()->user()->customer->points}}</h4>
  @endif
            @endauth
                                    </div>
                                    <div class="widgets-icons ms-auto"><i class='bx bxs-wallet'></i>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </a>
                </div>
               
                
            </div>

            <!--end row-->
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>


        </div>

</body>

</html>
@endsection