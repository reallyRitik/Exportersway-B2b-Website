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
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/companylogo/logo.png')}}">
         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
      
        <meta property="og:image" content="{{ asset('assets/images/companylogo/logo.png')}}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.exportersway.com/">
        
        <meta property="twitter:image" content="https://www.exportersway.com//img/VerifyBuyers.jpg">

        <meta name="geo.region" content="IN-DL" />
        <meta name="geo.placename" content="Delhi" />
        <meta name="geo.position" content="28.694715;77.154261" />
        <meta name="ICBM" content="28.694715, 77.154261" />
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
        <div class="breadcrum">
            <ol class="breadcrumb">
                <li>
                    <a href="">
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span>{{$product->title}}</span>
                    </a>
                </li>
            </ol>
        </div>
        <div class="row" id="overview" style="width:100%">
            <div class="col-12 col-md-9 col-sm-9">
                <div class="wbg">
                    <div class="row" style="width:100%">

                        <div class="col-6 col-sm-6 col-md-6 list_image_container pd-left">
                            <div class="new_bg_image_overlay main-pic" id="main_img_0">
                                <img
                                src="{{ asset('assets/images/Products/' . $product->images) }}" alt="{{ $product->title }}">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6">
                            <div class="pd-right">
                                <h1 class="pd-heading">{{$product->title}}</h1>
                                <h2>Price: &nbsp; {{$product->pprice}}</h2>
                                <p>Minimum order quantity -  &nbsp; {{$product->mqty}} </p>
                                <hr>
                                <p>Payment Terms:   &nbsp; {{$product->pterms}}<span>_</span></p>
                                <p>Supply Ability:  &nbsp; {{$product->sability}} <span>_</span></p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong" style="    background-color: black;
    color: white;
    font-weight: lighter;"><i class='fas fa-comment'></i>&nbsp;<strong>Send Inquiry</strong></button>
                            </div>
                            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Send Inquiry</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
    <p><b>To:</b>&nbsp; &nbsp;{{ $product->customer ? $product->customer->company_name : 'No customer' }}</p>
    <h5><b>Product:</b>&nbsp;&nbsp;<img src="{{ asset('assets/images/Products/' . $product->images) }}" style="width: 10%; border-radius:5px;">&nbsp;&nbsp;{{$product->title}}</h5>
    <lable style="display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;"> Subject</lable>
    <input type="text" maxlength="100" required name="subject" value="{{$product->title}}" style="    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #cbd5e1;
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
">
    <lable style="display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;">Your Name</lable>
    <input type="text" maxlength="100" required name="name"  style="    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #cbd5e1;
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
">
    <lable style="display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;">Your Email</lable>
    <input type="text" maxlength="100" required name="email"  style="    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #cbd5e1;
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
">
    <lable style="display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;"> Number</lable>
    <input type="text" maxlength="100" required name="number"  style="    width: 100%;
    height: 34px;
    padding: 6px 12px;
    background-color: #fff;
    background-image: none;
    border: 1px solid #cbd5e1;
    border-radius: 3px;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
">
    <lable style="display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;"> Message</lable>
    <textarea type="text" maxlength="100" required name="massage"  style="width: 100%;
   
" minlength="20" rows="4"></textarea>

      </div>
      <div class="modal-footer" style="justify-content: center;">
        <button class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

                        </div>

                    </div>
                </div>
                <div class="productdetails">
                <h5>Product details</h5>
                <p>{{$product->details}}</p>
                </div>
            </div>
            <style>
                .productdetails{
                    background-color: #fff;
                    padding: 10px 20px;
                    word-break: break-word;
                    margin-bottom: 20px;
                    border: 1px Solid #e6e6e6;
                    position: relative;
                }
            </style>
            <div class="col-12 col-lg-3 col-md-3">
                <div class="comp-info">
                  <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($product->customer->company_name ?? '')) }}">
                        <h2>{{ $product->customer ? $product->customer->company_name : 'No customer' }}</h2>
                    </a>
                    
                    @if($product->customer)
    @switch($product->customer->rank)
        @case(1)
            <img src="{{ asset('assets/images/small/Eliteteg.png') }}" style="width: 55%;">
            @break
        @case(2)
            <img src="{{ asset('assets/images/small/Proteg.png') }}" style="width: 55%;">
            @break
        @case(3)
            <img src="{{ asset('assets/images/small/Growingteg.png') }}" style="width: 55%;">
            @break
        @case(4)
            <img src="{{ asset('assets/images/small/Tetramembership.png') }}" style="width: 55%;">
            @break
        @case(6)
            <img src="{{ asset('assets/images/small/eliteplusteg.png') }}" style="width: 55%;">
            @break
        @default
            <p><b style="color: green;">We Pass</b></p>
    @endswitch
@endif
                    <p class="address">  {{ $product->customer ? $product->customer->state : 'No customer' }}</p>
                    <div class="bo-flag">
                    {{ $product->customer ? $product->customer->country : 'No customer' }}
                    </div>

                </div>
                <div class="rfq-form-wrapper">
                    <h4>Get Free Quotes From Multiple Sellers</h4>
                    <form class="rfq_form rfqs-wrapper">
                    <label for="name">Name</label>
                            <input name="name" type="text" placeholder="full name" required>
                            <label for="Email">Email</label>
                            <input placeholder="Email" name="name" type="email" required>
                            <label for="Number">Number</label>
                            <input placeholder="Number" name="name" type="tel" required>
                            <label for="Quantity">Quantity</label>
                            <input placeholder="Quantity" name="name" type="text" required>
                            <label for="Tell Us Your Requirement">Tell Us Your Requirement</label>
                            <textarea placeholder="Tell Us Your Requirement"></textarea>
                            <button type="submit" class="inq">submit</button>

                    </form>
                </div>

            </div>


        </div>
        
    </div>
    <style>
        .inq{
            background: #ff6701;
    color: #fff;
    width: 100%;
    padding: 5px 0;
    border-radius: 2px;
        }
    .rfq-form-wrapper input,
    .rfq-form-wrapper textarea {
        width: 100%;
        margin-bottom: 8px;
        padding: 5px 10px;
        /* box-shadow: 0 0 10px #cccccc69; */
        resize: unset;
        border-radius: 2px;
        border: solid 1px #72167b82;
    }

    .rfq-form-wrapper h4 {
        font-size: 16px;
        color: #333;
        font-weight: 600;
        margin-bottom: 15px;
        margin-top: 5px;
        text-align: center;
    }

    .rfq-form-wrapper {
        margin-bottom: 20px !important;
    }

    .rfq-form-wrapper {
        background: #fff !important;
        box-shadow: 0 0 10px #cccccc96;
        padding: 10px 15px 0px 15px;
        border-radius: 5px;
        margin: 10px 0 10px 0;
    }

    .bo-flag,
    p.port {
        font-size: 16px;
        color: #333;
        margin-bottom: 4px;
    }

    p.address {
        margin-top: 10px;
        font-size: 16px;
        color: #333;
        word-break: break-word;
    }

    .comp-info img {
        height: 25px;
    }

    .comp-info h2 {
        word-break: break-word;
        margin-bottom: 10px;
        font-size: 16px;
        color: #ff6701;
        font-weight: initial;
        font-family: Arial;
        font-weight: 700;
        line-height: 22px;
        text-decoration-line: underline;
        text-decoration-skip-ink: none;
    }

    .comp-info {
        border: 1px Solid #e6e6e6;
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
    }

    .pd-heading {
        font-weight: 550;
        margin-bottom: 22px;
        font-size: 20px;
        color: #3e3e3e;
        font-family: Arial;
        line-height: 1.4;
    }

    .pd-right button {
        border-radius: 15px;
        padding: 8px 37px 8px 42px;
        background-color: #6d7a724d;
    }

    .pd-right h2 {
        font-size: 30px;
    }

    .pd-right {
        padding: 33px 0 0 20px;
    }

    .pd-thumbs ul li a img {
        position: absolute;
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        margin: auto !important;
    }

    .pd-thumbs ul li img {
        max-width: 48px;
        max-height: 48px;
        vertical-align: middle;
        overflow: hidden;
    }

    .product_secondary_images_container {
        display: block;
    }

    .product_secondary_images_container {
        width: 50px;
        height: 50px;
    }

    .pd-thumbs ul li {
        border: 1px solid #efefef;
        position: relative;
        margin: 0 1px;
    }

    .pd-thumbs ul,
    .pd-thumbs ul li {
        display: inline-block;
    }

    .pd-thumbs ul {
        height: 50px;
        width: 300px;
        overflow: hidden;
        display: inline-block;
    }

    .pd-thumbs {
        text-align: center;
        margin-top: 10px;
    }

    .main-pic img {
        max-height: 300px;
        vertical-align: middle;
    }

    .main-pic img {
        max-width: 300px;
    }

    .main-pic img {
        left: 0;
        height: auto !important;
        width: auto !important;
        position: absolute;
        bottom: 0;
        top: 0;
        margin: auto;
        left: 0;
        right: 0;
    }

    .main-pic {
        position: relative;
        height: 300px;
        display: table-cell;
        vertical-align: middle;
    }

    .main-pic,
    .pd-thumbs ul li span {
        border: 1px solid #efefef;
        text-align: center;
    }

    .pd-left {
        width: 312px;
        display: inline-block;
        vertical-align: top;

    }

    .wbg {
        background-color: #fff;
        /* padding: 10px 20px; */
        word-break: break-word;
        margin-bottom: 20px;
        border: 1px Solid #e6e6e6;
        overflow: hidden;
    }

    .breadcrumb li span {
        color: #868686;
        font-size: 14px;
    }

    .breadcrumb>li {
        display: inline-block;
    }

    .breadcrum .breadcrumb {
        background-color: transparent;
        padding: 6px 0;
        margin-bottom: 0;
        list-style: none;
        border-radius: 4px;
    }

    .breadcrum {
        margin-bottom: 20px;
    }

    .container-fluid {
        max-width: 1440px;
        padding-right: 10px;
        padding-left: 10px;
        margin-right: auto;
        margin-left: auto;
    }
    </style>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>
@endsection