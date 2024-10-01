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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
   
    <div class="row" style="margin-bottom: 0px;background-color: #fff;padding: 20px; width:100% ; ">
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
    <div class="row" style="width: 100%;">
        <nav class="navbar navbar-inverse affix-top" data-offset-top="197">
            <div class="container-fluid">
                <ul class="nav1 nav navbar-nav" style="    display: block;
">
                   <li>
                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($data->company_name ?? '')) }}"  class="active">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('viewproduct', ['id' => $data->id]) }}" class="active">Product</a>
                    </li>
                    <li>
                        <a href="#" class="active" style="font-size: 13px;">About US</a>
                    </li>
                    <li>
                    <a href="{{ route('viewcontact', ['id' => $data->id]) }}" class="active" style="font-size: 11px;">Contact US</a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid mt-20">
        <div class="row mb-20" style="width:100%">
            <div class="col-12 col-sm-8 col-md-12">
                <div class="company-overview desc">
                    <h2 class="secondary-heading">Company Overview</h2>
                    <p></p>
                    @if($data->companydetails)
                    <p>{{$data->companydetails}}</p>
                    @else
                    <p>
We have hired an adroit team of employees, which keeps themselves abreast with advanced manufacturing techniques and designs. Further, we also have a quality control unit, wherein, we check our entire range on defined parameters like design, quality and finish. All units and equipped with all the essential tools, machine, and technology in order to manufacture a high-quality range of products</p>
@endif
                    <p>&nbsp;</p>

                </div>
            </div>
        </div>
        <div class="row comp_info flex-row mb-20" style="width:100%">
    <div class="col-12 col-sm-12 col-md-6">
        <div class="co-specification-container">
<h3 class="secondary-heading">Company Information</h3>
<table class="table table-responsive">
    <tbody> 
        <tr>
            <td class="td1" style="border-top:0;">
            Business Type 
            </td>
            <td  style="border-top:0;">
             {{$data->business_type}}</td>
        </tr>
        <tr>
                            <td class="td1" style="border-top:0;">Company </td>
                            <td style="border-top:0;"> {{$data->company_name}}</td>
                        </tr>
                        <tr>
                            <td class="td1" style="border-top:0;">Main Products </td>
                            <td style="border-top:0;"> @foreach ($data->products as $product)
        {{ $product->title }},
    @endforeach</td>
                        </tr>
                        <!-- <tr>
                            <td class="td1" style="border-top:0;">Established Year </td>
                            <td style="border-top:0;"> 2006</td>
                        </tr> -->
                        <tr>
                            <td class="td1" style="border-top:0;">City / State</td>
                            <td style="border-top:0;"> {{$data->city}}</td>
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
    </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection