@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
         <title>{{ $data->meta_title ?? $data->company_name }}</title>
    <meta name="keywords" content="{{$data->keyword}}" />
        <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
        <meta name="description" content="{{$data->meta_des}}">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="Daily days">
        <meta name="author" content="Exporters Way">
        <link rel="canonical" href="https://www.exportersway.com/"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('companylogo/exportersway-logo.png')}}">
         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
       
        <meta property="og:image" content="{{ asset('companylogo/exportersway-logo.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.exportersway.com/">

        <meta property="twitter:image" content="https://www.exportersway.com//img/VerifyBuyers.jpg">

        <meta name="geo.region" content="IN-DL" />
        <meta name="geo.placename" content="Delhi" />
        <meta name="geo.position" content="28.694715;77.154261" />
        <meta name="ICBM" content="28.694715, 77.154261" />


    <link rel="stylesheet" href="{{ asset('assets/css/catlog.css')}}">
</head>
<body>
    <div class="row" style="margin-bottom: 0px;background-color: #fff;padding: 20px; width:100%">
   
        <div class="col-12 col-md-6">
            
            <div class="comp_logo">
                <a href="">
                @if($data->companylogo)
  <img src="{{ asset('assets/images/companylogo/' . $data->companylogo) }}" alt="Company Logo">

@else
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr7pWJwuQujsDYq5udFDJP35gCaFEGd0hc_6owv_cXEQ&s">
@endif
                    
                </a>
            </div>
            <div class="comp_heaing">
                <a>
                    <h1 class="comp_heading" style="width:100%;">{{$data->company_name}}</h1>
                </a>
                 <div class="flag-container2">
                @if($data->rank == 1)
                    <img src="{{asset('assets/images/small/Eliteteg.png')}}" style="width: 55%;">
                    @elseif($data->rank==2)
                    <img src="{{asset('assets/images/small/Proteg.png')}}" style="width: 55%;">
                    @elseif($data->rank==3)
                    <img src="{{asset('assets/images/small/Growingteg.png')}}" style="width: 55%;">
                    @elseif($data->rank==4)
                    <img src="{{asset('assets/images/small/Tetramembership.png')}}" style="width: 55%;">
                    @elseif($data->rank==6)
                    <img src="{{asset('assets/images/small/eliteplusteg.png')}}" style="width: 55%;">
                   
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6 col-12 search_box">
            <form mathod="">
                <select class="form-control inpu input-sm search_select">
                    <option>In Company</option>
                    <option>In Exportersway</option>
                </select>
                <input class="form-control input input-sm search_input" placeholder="Search Products">
                <button class="btn btn-red btn-search">Search</button>
            </form>
        </div>
    </div>
    <!-- start nav section -->

    <div class="row" style="width: 100%;">
        <nav class="navbar navbar-inverse affix-top" data-offset-top="197">
            <div class="container-fluid">
                <ul class="nav1 nav navbar-nav" style="    display: block;
">
                    <li>
                        <a href="#" class="active">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('viewproduct', ['id' => $data->id]) }}" class="active">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('viewabout', ['id' => $data->id]) }}" class="active" style="font-size: 13px;">About US</a>
                    </li>
                    <li>
                        <a href="{{ route('viewcontact', ['id' => $data->id]) }}" class="active" style="font-size: 11px;">Contact US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <!-- end nav section -->
    <div class="container-fluid">
        <div class="row bg-container mb-20" style="background: url(https://img2.tradewheel.com/comp-banner/7.png.webp) no-repeat center center; width:100%;">
            <div class="container">
                <div class="row" style="margin-top: 40px; width:100%;">
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="https://img2.tradewheel.com/template1/images/icons/location.png">
                            </div>
                            <div class="specification-text">
                                <h3 class="attribute">Location</h3>
                                <p>{{$data->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="{{asset('assets/images/small/product.png')}}">
                            </div>
                            <div class="specification-text">
                                <h3 class="attribute">Main Products</h3>
                                <p>
    @foreach ($data->products as $product)
        {{ $product->title }}
    @endforeach
</p>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="{{asset('assets/images/small/es.png')}}">
                            </div>
                             <div class="specification-text">
                                <h3 class="attribute">GST NO.</h3>
                                <p>{{$data->gst}}</p>
                            </div> 
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="{{asset('assets/images/small/ar.png')}}">
                            </div>
                            <div class="specification-text">
                                <h3 class="attribute">Annual Revenue</h3>
                                <p>{{$data->turnover}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="{{asset('assets/images/small/tb1.png')}}">
                            </div>
                            <div class="specification-text">
                                <h3 class="attribute">Total Employees</h3>
                                <p>{{$data->total_employee}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-6 col-lg-4 specification-container">
                        <div class="intro-specification">
                            <div class="specification-icon">
                                <img src="{{asset('assets/images/small/bt.png')}}">
                            </div>
                            <div class="specification-text">
                                <h3 class="attribute">Business Type</h3>
                                <p>{{$data->business_type}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- company profile -->
    <div class="row mb-20 " style="width: 100%;">
        <div class="col-md-3">
            <div class="comp_short_info">
                <div class="badge1">
                   @if($data->rank == 1)
                    <img src="{{asset('pricelogo/ELITE.png')}}" style="width: 55%;">
                    @elseif($data->rank==2)
                    <img src="{{asset('pricelogo/PRO.png')}}" style="width: 55%;">
                    @elseif($data->rank==3)
                    <img src="{{asset('pricelogo/GROWING.png')}}" style="width: 55%;">
                    @elseif($data->rank==4)
                    <img src="{{asset('pricelogo/TETRA.png')}}" style="width: 55%;">
                    @elseif($data->rank==6)
                    <img src="{{asset('pricelogo/ELITE-PLUS.png')}}" style="width: 55%;">
                    @else
                    <p><b style="color:green">We Pass</b></p>
                    @endif
                </div>
                <span class="title">{{$data->company_name}}</span>
                <span class="address">

                    {{$data->address}}
                    <br>

                    <span><b>Country</b></span> :&nbsp;   {{$data->country}}
                </span>
                <div class="r-stars">
                    
                </div>
                <div style="background-color: #fff;padding: 20px;margin-bottom: 15px;" class="prod_groups mb-20 navigation left-nav-bar ">
                    <h2>Products Group</h2>
                    @foreach ($data->products as $product)
                    <ul class="product_groups">
                        <li>
                              <a href="{{ url('item/' . $product->id . '/' . \Illuminate\Support\Str::slug($product->title)) }}">
                            {{ $product->title }}
                            </a>
                        </li>
                    </ul>
                    @endforeach
                </div>
            </div>

        </div>

        <div class="col-md-9">
            <div class="main_products">
                <h2 class="h2_heading" style="margin-bottom: 0px;">Show Case</h2>
                <div class="row" style="width:100%;">
                @foreach ($data->products as $product)
                    <div class="col-6 col-sm-8 col-md-6 col-lg-3 prod_box">
                        <a href="">
                            <div class="product-box">
                                <div class="product-pic">
                                   <img src="{{ asset('assets/images/Products/' . $product->images) }}" alt="Product Image">
                                </div>
                            </div>
                            <div class="product-title">
                                 <a href="{{ url('item/' . $product->id . '/' . \Illuminate\Support\Str::slug($product->title)) }}"> {{ $product->title }}</a>
                            </div>
                        </a>
                         @if($product->price)
     <span class="prod_price"> 30 - 50 USD / pieces </span>
@else
   
@endif
         
                       
                    </div>
                   
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- company info -->
    <div class="row comp_info flex-row mt-20" style="margin-bottom:20px; width:100%">
        <div class="mb-20  col-xs-12 col-sm-12 col-md-6 ">
            <div class="co-specification-container">
                <h3 class="secondary-heading">Company Information</h3>
                <table class="table table-responsive">
                    <tbody>
                        <tr>
                            <td class="td1" style="border-top:0;">Business Type </td>
                            <td style="border-top:0;">{{$data->business_type}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Company </td>
                            <td style="border-top:0;"> {{$data->company_name}}</td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td class="td1" style="border-top:0;">Main Products </td>-->
                        <!--    <td style="border-top:0;"> Transportation</td>-->
                        <!--</tr>-->
                        <tr>
                            <td class="td1" style="border-top:0;">Established Year </td>
                            <td style="border-top:0;"> {{$data->eyear}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">City / State</td>
                            <td style="border-top:0;"> {{$data->city}} / {{$data->state}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Country </td>
                            <td style="border-top:0;"> {{$data->country}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Address </td>
                            <td style="border-top:0;"> {{$data->address}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Total Employees </td>
                            <td style="border-top:0;"> {{$data->total_employee}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="mb-20  col-12 col-sm-12 col-md-6 ">
            <div class="co-specification-container">
                <h3 class="secondary-heading">Trading Information</h3>
                <table class="table table-responsive">
                    <tbody>
                        <tr>
                            <td class="td1" style="border-top:0;">Total Revenue</td>
                            <td style="border-top:0;"> {{$data->turnover}}  </td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Export Percentage</td>
                            <!--<td style="border-top:0;">hritik</td>-->
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Nearest Port</td>
                            <td style="border-top:0;">{{$data->Port}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Overseas Office</td>
                             <td style="border-top:0;">{{$data->oOffice}}</td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
        <div class="mb-20  col-12 col-sm-12 col-md-6 ">
            <div class="co-specification-container">
                <div class="contact_details">
                    <h3 class="secondary-heading">Contact Details</h3>
                    <table class="table table-responsive" style="max-width: 450px;">
                        <tbody>
                            <tr>
                                <td style="border-top:0;"></td>
                                <td style="border-top:0;">
                                     @if($data->companylogo)
    <img src="{{ asset('assets/images/companylogo/' . $data->companylogo) }}" alt="logo" width="110" style="float: left;">
@else
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSr7pWJwuQujsDYq5udFDJP35gCaFEGd0hc_6owv_cXEQ&s" alt="logo" width="110" style="float: left;">
@endif
                                    <span class="contactdetails">{{$data->contact_name}}</span>
                                </td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>
                                    <p> {{$data->address}}</p>
                                </td>
                            </tr>
                            <tr>
                                <td>Phone:</td>
                                <td>
                                     <a href="#" onclick="showSweetAlert()">SHOW</a>
                               
                                        <script>
        function showSweetAlert() {
            // Use SweetAlert to display a custom alert
            Swal.fire({
                icon: 'info',
                title: 'You are not joined',
                text: 'Join With Us To View Contact!',
                confirmButtonText: 'Register Here'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = '{{ route("register") }}';
                }
            });
        }
                                </script>
                                </td>
                            </tr>
                            <tr>
                                <td>Website:</td>
                                <td>
                                    <p><a href="{{$data->website}}" target="_blank">{{$data->website}}</a></p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="mb-20  col-12 col-sm-12 col-md-6 ">
            <div class="co-specification-container">
                <h3 class="secondary-heading">Contact Supplier</h3>
                <div class="row" style="width:100;">
                    <form mathod="post" id="inquiry_form2">
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" type="text" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="{{$data->email}}" type="email" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" name="number" type="tel" required>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Massage" name="massage" type="text" cols="50" rows="10" required></textarea>
                            </div>

                        </div>
                        <div class="col-12">
<div class="form-submit">
    <button type="submit" class="btn btn-red">Send Message</button>
</div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
<style>.intro-specification{
    margin-top:3vh;
}
</style>
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection