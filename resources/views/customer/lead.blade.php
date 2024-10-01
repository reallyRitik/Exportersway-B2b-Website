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
                        <li class="breadcrumb-item active" aria-current="page">Lead List</li>
                    </ol>
                </nav>
            </div>

        </div>
        <!--end breadcrumb-->

        <hr>
        <div class="row ">

<div class="col-12 col-md-12 col-lg-12 leadcard">
    
    <div class="row">
        <form action="{{route('searchviewlead')}}" method="GET" class="col-12 col-md-6 col-lg-6">
            <div class="searchinput">
                <input type="search" placeholder="Search Lead" name="title" value="{{ request('title') }}">
                <button type="submit">Search</button>
            </div>
        </form>
        <div class="col-12 col-md-6 col-lg-6">
         

            <h4>Your Total Point: <span id="total-points" data-points="{{ auth()->user()->customer->points }}" style="color: #ede60c;">{{ auth()->user()->customer->points }}</span></h4>
          
        </div>
    </div>
    @foreach($lead as $leaddata)
    <div class="lead-list">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td style="font-family: 'unicons';">
                        <span class="comp-name">
                            <spna>Company Name:- </spna>
                            {{$leaddata->company_name}}
                        </span>
                        <div class="details" style="font-family: 'unicons'; color:#000;">
                            <h4>country:-
                                <span>{{$leaddata->country}}</span>
                            </h4>
                            <h4>Product:-
                                <span>{{$leaddata->title}}</span>
                            </h4>

                            <!--<h4>contact Name:- -->
                            <!--    <span>{{$leaddata->name}}</span>-->
                            <!--</h4>-->

                            <a style="background-color: #d98c8c;
border-radius:3px;
border:1px solid #660022;
padding: 6px 25px 6px 6px;
font-weight: bold;
color: #fff;">Quantity - {{$leaddata->qty}}</a>
                            <a style="background-color: #9999ff;
border-radius:3px;
border:1px solid #4400cc;
padding: 6px 25px 6px 6px;
font-weight: bold;
color: #fff;
margin-left: 20px;">Unit -{{$leaddata->unit}}</a>
                            <p style="margin-top: 15px; color: #fdfdfd; "><b>Product deatils :- </b><span style="word-break: break-all;" class="productdetails">{{$leaddata->message}}</span></p>


                            @if (auth()->check() && auth()->user()->customer && auth()->user()->customer->rank)
                            @if (auth()->user()->customer->rank == 5)
                            <a href="#" style="display: flex; justify-content: center; align-items: center; background-color: #ff9999;
height: 40px;
width: 170px;
font-weight: 600;
color: #fdfdfd;
font-size: 18px;
cursor: pointer;" class="view-contact-btn" onclick="showUpgradeAlert()">View contact</a>
                            @else
                            <a href="#" style="display: flex; justify-content: center; align-items: center; background-color: #ff9999;
height: 40px;
width: 170px;
font-weight: 600;
color: #fdfdfd;
font-size: 18px;
cursor: pointer;" class="view-contact-btn" data-id="{{$leaddata->id}}" onclick="toggleContact('{{$leaddata->id}}')">View contact</a>

                            @endif
                            @endif
                            @if(auth()->check() && auth()->user()->id!=4209)
                            <p id="contactText{{$leaddata->id}}" style="display: none;color:white;">Name: {{$leaddata->name}}
                                <br>
                                Email:{{$leaddata->email}}
                                <br>

                                Company Name: {{$leaddata->company_name}}
                                <br>
                                Number: {{$leaddata->mobile}}

                            </p>
                            @else
                            <p id="contactText{{$leaddata->id}}" style="display: none; color:green">
                                <b>Lead Details Successfully Sent On Register Mail. Please Check.</b>
                            </p>
                            @endif


                        </div>
                        <script>
                            function showUpgradeAlert() {
                                alert("Upgrade your membership to view the contact details.");
                            }
                        </script>


                    </td>
                    <td align="right" style="vertical-align: top;">
                        <span class="lead-date">Posted :- &nbsp;{{$leaddata->created_at->format('d-m-y')}}</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    @endforeach


</div>
<div id="pagination-links">
                        {{ $lead->onEachSide(1)->links() }}
                    </div>


</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
                    function toggleContact(leadId) {
                        swal({
                            title: "Confirmation",
                            text: "Are you sure you want to spend One Point?",
                            icon: "warning",
                            buttons: ["No", "Yes"],
                            dangerMode: true,
                        }).then(function(confirm) {
                            if (confirm) {
                                // User clicked "Yes"
                                showUpgradeAlert(); // Execute the upgrade alert function
                                var contactText = document.getElementById('contactText' + leadId);
                                if (contactText.style.display === 'none') {
                                    contactText.style.display = 'block';
                                } else {
                                    contactText.style.display = 'none';
                                }
                            }
                        });
                    }

                    function showUpgradeAlert() {
                        var totalPointsSpan = document.getElementById('total-points');
                        var points = parseInt(totalPointsSpan.dataset.points);

                        // Check if the user has points
                        if (points > 0) {
                            // Make an Ajax request to decrement points
                            $.ajax({
                                url: "{{ route('decrement.points') }}",
                                type: "POST",
                                data: {
                                    _token: "{{ csrf_token() }}",
                                },
                                success: function(response) {
                                    // Update the displayed points
                                    totalPointsSpan.innerText = response.points;
                                    totalPointsSpan.dataset.points = response.points;
                                },
                                error: function() {
                                    alert('Failed to decrement points.');
                                }
                            });
                        } else {
                            // Use a JavaScript confirmation dialog
                            var confirmUpgrade = confirm('Your points are zero. Would you like to upgrade your package?');

                            if (confirmUpgrade) {
                                // Redirect to the view customer route when confirmed
                                window.location.href = "{{ url('adverties') }}";
                            } else {
                                // Show an option to upgrade the package
                                alert('To upgrade your package, please visit the upgrade page.');
                            }
                        }
                    }
                </script>
                 <style>
        .lead-date {
            text-align: right;
            color: #fffdb5;
            margin-top: 10px;
            font-weight: bolder;
            font-size: 12px;
        }

        .lead-city {
            color: #2a7bb6;
            font-weight: bold;
            margin: 10px 0px 10px 0px;
        }

        .fa-home:before {
            content: "\f015";
        }

        .comp-name {
            font-size: 18px;
            color: #fffdb5;
            font-weight: bolder;
        }

        .lead-list {
            background-color: rgb(255 255 255 / 20%);;
            padding: 8px;
            margin-top: 20px;
            box-shadow: rgba(0, 0, 0, 0.07) 0px 1px 1px, rgba(0, 0, 0, 0.07) 0px 2px 2px, rgba(0, 0, 0, 0.07) 0px 4px 4px, rgba(0, 0, 0, 0.07) 0px 8px 8px, rgba(0, 0, 0, 0.07) 0px 16px 16px;
            border-top: 1px solid silver;
        }

        .leadcard {
            border-radius: 1px solid red;
            text-align: left;
            height: 500px;
            overflow-y: scroll;
            overflow-x: hidden;
        }

        .searchinput button {
            border-radius: 4px;
            background: azure;
            color: #b17676;
            font-weight: 900;
        }

        .searchinput input {
            height: 31px;
            border-radius: 3px;
        }

        .searchinput {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .innerheading {
            background-color: #fff;
            width: 80%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 150px;
            box-shadow: 0 40px 80px #f1dada;
            border-radius: 14px;
        }
    </style>


        </body>

</html>
@endsection