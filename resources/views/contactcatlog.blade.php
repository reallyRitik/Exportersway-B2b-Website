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
        <meta name="robots" content="index, follow">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

<!--    <script type="application/ld+json">-->
<!--{-->
<!--  "@context": "https://schema.org/",-->
<!--  "@type": "Article",-->
<!--  "mainEntityOfPage": {-->
<!--    "@type": "WebPage",-->
<!--    "@id": "https://www.exportersway.com/"-->
<!--  },-->
<!--  "headline": "Exporters Way - Indian Exporters Supplier B2B Marketplace",-->
<!--  "description": "Exporters Way - Global B2B Marketplace of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.",-->
<!--  "image": {-->
<!--    "@type": "ImageObject",-->
<!--    "url": "https://www.exportersway.com//img/VerifyBuyers.jpg",-->
<!--    "width": "696",-->
<!--    "height": "300"-->
<!--  },-->
<!--  "author": {-->
<!--    "@type": "Person",-->
<!--    "name": "Exporters Way"-->
<!--  },-->
<!--  "publisher": {-->
<!--    "@type": "Organization",-->
<!--    "name": "Exporters Way",-->
<!--    "logo": {-->
<!--      "@type": "ImageObject",-->
<!--      "url": "https://www.exportersway.com//img/logo.jpg",-->
<!--      "width": "200",-->
<!--      "height": "60"-->
<!--    }-->
<!--  },-->
<!--  "datePublished": "2021-09-01",-->
<!--  "dateModified": "2021-09-02"-->
<!--}-->
<!--</script>-->
    <link rel="stylesheet" href="{{ asset('assets/css/catlog.css')}}">
</head>

<body>
   
    <div class="row" style="margin-bottom: 0px;background-color: #fff;padding: 20px; width:100%">
        <div class="col-12 col-md-6">
            <div class="comp_logo">
                <a href="">
                @if($data->companylogo)
    <img src="{{ asset('assets/images/companylogo/' . $data->companylogo) }}">
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
                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($data->company_name ?? '')) }}" class="active">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('viewproduct', ['id' => $data->id]) }}" class="active">Product</a>
                    </li>
                    <li>
                        <a  href="{{ route('viewabout', ['id' => $data->id]) }}" class="active" style="font-size: 13px;">About US</a>
                    </li>
                    <li>
                        <a href="#" class="active" style="font-size: 11px;">Contact US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    
    <div class="row comp_info flex-row mt-20" style="margin-bottom:20px; width:100%">
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
                                <input class="form-control" placeholder="Email" name="email" type="email" required>
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
</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection