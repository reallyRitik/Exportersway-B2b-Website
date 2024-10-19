@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>Exporters Way - World Fastest Growing B2B Network</title>
        <meta name="keywords" content="B2B Portal in Delhi, B2B Portal in India, International Buyer in India, Worldwide Suppliers in India, Worldwide Importers in India, Worldwide Exporters in India, Best B2B Portal in India, Import Consultancy in India, Export Consultancy in India, Top 10 B2B Consultancy in India, Best Exporter in India, Best Importers in India, International Business Providers in India, Top Business Providers in India, Google Business Partner in India"/>
        <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
        <meta name="description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
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
    <div class="container-fluid">
        <div class="row" style="width:100%">
            <div class="col-12">
                <div class="datasearch">
                    <ul class="datasearchmain">
                        <li>
                            <a href="" title="Home">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="" title="Home">
                                Supplier
                            </a>
                        </li>
                        <li>
                            <a href="" title="Home">
                                searchdata
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 0px;background-color: #fff;width:100%; margin:10px; ">
    
        <div class="col-3 col-md-3 col-lg-2 categoryname1">
            <div class="displaycat" style="border-bottom: 1px solid black;">
                <h5>Search Product<img src="{{ asset('assets/images/small/more.png')}}" style="width:10%" alt=""></h5>
                @foreach ($companies as $product)
                @foreach ($product->products as $productss)
            <a href="{{ url('item/' . $productss->id . '/' . \Illuminate\Support\Str::slug($productss->title)) }}">  <p  style="border-bottom: 1px solid #d0cdcd; font-size:12px"><b>{{$productss->title}}</b></p></a>
            @endforeach
            @endforeach
            </div>
        </div>
        <style>
            @media screen and (max-width: 480px) {
   .categoryname1{
    display: none;
  }
}
            @media screen and (max-width: 768px) {
   .categoryname1{
    display: none;
  }
}
            @media screen and (max-width: 992px) {
   .categoryname1{
    display: none;
  }
}
        </style>
        <div class="col-12 col-lg-9 col-md-9">
        @foreach ($companies as $product)
           
        <div class="card" style="margin-bottom: 3vh;">
                <div class="card-body">
                    <div class="row" style="width:100%">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                 
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    @php $imageCount = 0 @endphp
    @foreach ($product->products as $productss)
      @if ($imageCount == 0)
        <div class="carousel-item active">
      @else
        <div class="carousel-item">
      @endif
      <a href="{{ url('item/' . $productss->id . '/' . \Illuminate\Support\Str::slug($productss->title)) }}">
      <img class="d-block w-100" src="{{ asset('assets/images/Products/' . $productss->images) }}" alt="Product {{$imageCount + 1}}" style="border-bottom: 1px solid black;">
      </a>
      <span><b style="font-size:14px;; text-align:center">{{$productss->title}}</b></span>
      </div>
      @php $imageCount++ @endphp
    @endforeach 
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>


                        </div>
                        <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="package_img">
                            
                                 <span>
                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($product->company_name ?? '')) }}" style="font-size: 18px; font-weight: 600;">
                             {{ $product->company_name ?? '' }}
                         </a></span>
                              
                            </div>
                            <div class="details">
                                <table class="table table-responsive comp_details">
                                    <tbody>
                                            <tr>
                                                <td class="td1">Package:</td>
                                                <td class="td2">@if($product->rank == 1)
                    <img src="{{asset('pricelogo/ELITE.png')}}" style="    width: 25%;">
                    @elseif($product->rank ==2)
                    <img src="{{asset('pricelogo/PRO.png')}}" style="width: 25%;">
                    @elseif($product->rank ==3)
                    <img src="{{asset('pricelogo/GROWING.png')}}" style="width: 25%;">
                    @elseif($product->rank ==4)
                    <img src="{{asset('pricelogo/TETRA.png')}}" style="width:25%;">
                    @elseif($product->rank ==6)
                    <img src="{{asset('pricelogo/ELITE-PLUS.png')}}" style="width: 25%;">
                    @else
                    <p style="Color:green;"><b>We Pass</b></p>
                    @endif</td>
                                            </tr>
                                            
                                            <tr>
                                                <td class="td1">Country</td>
                                                <td class="td2">{{ $product->country ?? '' }}</td>
                                            </tr>
                                            
                                            <!--<tr>-->
                                            <!--    <td class="td1">Website</td>-->
                                            <!--    <td class="td2"><a href="{{ $product->website ?? '' }}" target="_blank">{{ $product->website ?? '' }}</a></td>-->
                                            <!--</tr>-->
                                        
                                    </tbody>
                                </table>
                            </div>

                        </div>
                     
                        
                    </div>
                </div>
            </div>
            @endforeach
            
            
        </div>
        
    </div>
    </div>
    </div>
    
    <style>
    

    .displaycat h5 {
        font-size: 18px;
        border-bottom: 2px solid Black;
    }

    .catnamedis a {
        color: #3f4462;
        font-size: 12px;
    }

    .catnamedis {
        width: 100%;
        padding-top: 8px;
        padding-bottom: 8px;
    }

    .displaycat {
        padding: 15px;
        background-color: #F5F5F5;
        margin-bottom: 20px;
    }

    .mamber button {
        background-color: #ccc;
        border: none;
        border-radius: 3px;
        /* padding: 2px 2px 2px 2px; */
    }

    .prod-item span {
        height: 32px;
        margin-top: 7px;
        margin-bottom: 1px;
        display: block;
    }

    .img-resp {
        text-align: center;
    }

    .prodimg img {
        max-width: 100%;
        vertical-align: middle;
    }

    .prodimg {
        overflow: hidden;
    }

   
    .prod-item {
        padding: 10px;
        background-color: #fff;
        display: inline-block;
        width: 135px;
        vertical-align: top;
        text-align: center;
        cursor: pointer;
        transition: all .1s ease 0s;
    }

    table tr td {
        border-bottom: none;
    }

    .comp_details .td2 {
        font-size: 14px;
    }

    .comp_details .td1 {
        width: 120px;
        font-size: 14px;
        color: #787878;
    }

    .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 20px;
    }

    .table-responsive {
        min-height: .01%;
        overflow-x: auto;
    }

    .mamber p {
        margin-top: 6px;
    }

    .package_img span {
        font-size: 16px;
    }

    .package_img {
        margin-bottom: 15px;
        border-bottom: 1px solid #f3f3f3;
        background-color: #fff;
        position: relative;
    }

    .hadingmain {
        font-size: 20px;
        color: #454545;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .datasearchmain>li+li:before {
        padding: 0 5px;
        color: #ccc;
        content: "/\00a0";
    }

    .datasearchmain>li {
        font-size: 14px;
        display: inline-block;
    }

    a {
        font-size: 14px;
        color: #333;
    }

    .datasearch .datasearchmain {
        background-color: transparent;
        padding: 6px 0;
        margin-bottom: 0;
    }

    .datasearchmain {
        padding: 8px 15px;
        margin-bottom: 20px;
        list-style: none;
        background-color: #f5f5f5;
        border-radius: 4px;
    }

    .container-fluid {
        max-width: 1440px;
    }

    .container-fluid {
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto;
    }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.min.js" integrity="sha512-WW8/jxkELe2CAiE4LvQfwm1rajOS8PHasCCx+knHG0gBHt8EXxS6T6tJRTGuDQVnluuAvMxWF4j8SNFDKceLFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
@endsection