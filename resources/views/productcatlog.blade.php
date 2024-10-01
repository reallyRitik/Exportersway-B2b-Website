@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        @php
    $firstProduct = $products->first();
@endphp
       @if ($firstProduct && $firstProduct->customer)
    <title>{{ $firstProduct->customer->meta_title ?? $firstProduct->customer->company_name }}</title>
    <meta name="keywords" content="{{ $firstProduct->customer->keyword }}" />
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
    <meta name="description" content="{{ $firstProduct->customer->meta_des }}">
@endif
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="language" content="English">
        <meta name="revisit-after" content="Daily days">
        <meta name="author" content="Exporters Way">
        <link rel="canonical" href="https://www.exportersway.com/"/>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/companylogo/logo.png')}}">
         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
        
        <meta property="og:image" content="{{ asset('assets/images/companylogo/logo.png')}}">

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
                    @foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->companylogo !== $products[$key - 1]->customer->companylogo)
    
    @if($product->companylogo)
    <img src="{{ asset('assets/images/companylogo/' . $product->companylogo) }}">

@endif
    @endif
@endforeach
                </a>
            </div>
            <div class="comp_heaing">
                <a>
                    <h1 class="comp_heading" style="width:100%;">
    <p>@foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->company_name !== $products[$key - 1]->customer->company_name)
        <p>{{ $product->customer->company_name }}</p>
    @endif
@endforeach</p>
</h1>
                </a>
                <div class="flag-container2">
                @foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->rank !== $products[$key - 1]->customer->rank)
        
        @if ($product->customer->rank == 1)
            <img src="{{ asset('assets/images/small/Eliteteg.png') }}" style="width: 55%;">
        @elseif ($product->customer->rank == 2)
            <img src="{{ asset('assets/images/small/Proteg.png') }}" style="width: 55%;">
        @elseif ($product->customer->rank == 3)
            <img src="{{ asset('assets/images/small/Growingteg.png') }}" style="width: 55%;">
        @elseif ($product->customer->rank == 4)
            <img src="{{ asset('assets/images/small/Tetramembership.png') }}" style="width: 55%;">
        @elseif ($product->customer->rank == 6)
            <img src="{{ asset('assets/images/small/eliteplusteg.png') }}" style="width: 55%;">
        @endif
    @endif
@endforeach

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
                    @foreach ($products as $product)
    <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($product->customer->company_name ?? '')) }}" class="active">Home</a>
@endforeach

                    </li>
                    <li>
                    <a href="#" class="active">Product</a>
                    </li>
                    <li>
                        <a href="{{ route('viewabout', ['id' => $product->user_id]) }}" class="active" style="font-size: 13px;">About US</a>
                    </li>
                    <li>
                        <a href="{{ route('viewcontact', ['id' => $product->user_id]) }}" class="active" style="font-size: 11px;">Contact US</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="row mb-20 " style="width: 100%;">
        <div class="col-md-3">
            <div class="comp_short_info">
                <div class="badge1">
                @foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->rank !== $products[$key - 1]->customer->rank)
        
        @if ($product->customer->rank == 1)
        <img src="{{asset('pricelogo/ELITE.png')}}" style="width: 55%;">
        @elseif ($product->customer->rank == 2)
        <img src="{{asset('pricelogo/PRO.png')}}" style="width: 55%;">
        @elseif ($product->customer->rank == 3)
        <img src="{{asset('pricelogo/GROWING.png')}}" style="width: 55%;">
        @elseif ($product->customer->rank == 4)
        <img src="{{asset('pricelogo/TETRA.png')}}" style="width: 55%;">
        @elseif ($product->customer->rank == 6)
        <img src="{{asset('pricelogo/ELITE-PLUS.png')}}" style="width: 55%;">
        @else
        <img src="{{asset('pricelogo/Mfree.png')}}" style="width: 55%;">
        @endif
    @endif
@endforeach
                </div>
                <span class="title">@foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->company_name !== $products[$key - 1]->customer->company_name)
        <p>{{ $product->customer->company_name }}</p>
    @endif
@endforeach</span>
                <span class="address">

                @foreach ($products as $key => $product)
    @if ($key === 0 || $product->customer->address !== $products[$key - 1]->customer->address)
        <p>{{ $product->customer->address }}</p>
    @endif
@endforeach
                   
                </span>
                <div class="r-stars">
                    
                </div>
                <div style="background-color: #fff;padding: 20px;margin-bottom: 15px;" class="prod_groups mb-20 navigation left-nav-bar ">
                    <h2>Product Groups</h2>
                    @foreach ($products as $key => $product)
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
                @foreach ($products as $product)
                    <div class="col-6 col-sm-8 col-md-6 col-lg-3 prod_box">
                        <a href="{{ url('item/' . $product->id . '/' . \Illuminate\Support\Str::slug($product->title)) }}">
                            <div class="product-box">
                                <div class="product-pic">
                                <img src="{{ asset('assets/images/Products/' . $product->images) }}" alt="productname">
                                </div>
                            </div>
                            <div class="product-title">
                                <h3>{{ $product->title }}</h3>
                            </div>
                        </a>
                        <!-- <span class="prod_price"> 30 - 50 USD / pieces </span> -->
                    </div>
                  
                    @endforeach
                  
                  
                 
                   
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
@endsection