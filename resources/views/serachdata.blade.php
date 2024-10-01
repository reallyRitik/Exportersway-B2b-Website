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
        <meta name="language" content="English">
        <meta name="revisit-after" content="Daily days">
           <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="author" content="Exporters Way">
        <link rel="canonical" href="https://www.exportersway.com/"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('companylogo/exportersway-logo.png')}}">
         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
        <meta property="og:title" content="Exporters Way - World Fastest Growing B2B Network">
        <meta property="og:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
        <meta property="og:image" content="{{ asset('companylogo/exportersway-logo.png')}}">

        <!-- Twitter -->
        <meta property="twitter:card" content="summary_large_image">
        <meta property="twitter:url" content="https://www.exportersway.com/">
        <meta property="twitter:title" content="Exporters Way - World Fastest Growing B2B Network">
        <meta property="twitter:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
        <meta property="twitter:image" content="https://www.exportersway.com//img/VerifyBuyers.jpg">

        <meta name="geo.region" content="IN-DL" />
        <meta name="geo.placename" content="Delhi" />
        <meta name="geo.position" content="28.694715;77.154261" />
        <meta name="ICBM" content="28.694715, 77.154261" />
        
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->

    <script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Article",
  "mainEntityOfPage": {
    "@type": "WebPage",
    "@id": "https://www.exportersway.com/"
  },
  "headline": "Exporters Way - Indian Exporters Supplier B2B Marketplace",
  "description": "Exporters Way - Global B2B Marketplace of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.",
  "image": {
    "@type": "ImageObject",
    "url": "https://www.exportersway.com//img/VerifyBuyers.jpg",
    "width": "696",
    "height": "300"
  },
  "author": {
    "@type": "Person",
    "name": "Exporters Way"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Exporters Way",
    "logo": {
      "@type": "ImageObject",
      "url": "https://www.exportersway.com//img/logo.jpg",
      "width": "200",
      "height": "60"
    }
  },
  "datePublished": "2021-09-01",
  "dateModified": "2021-09-02"
}
</script>
    <link rel="stylesheet" href="{{ asset('assets/css/catlog.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="width:100%">
            <div class="col-12">
            <div class="breadcrum">
<h2>
Search Results for 

<span>{{ $searchTerm }}</span>
</h2>
<ul class="breadcrumb"> 
<li>
    <a>Home</a>
</li>
<li>
   <span>
    Search
   </span>
</li>
</ul>
</div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 0px;background-color: #fff;padding: 20px; width:100% ; ">
    
       
<div class="col-3 col-md-3 col-lg-2 ">
<div class="filter-box">
<div class="navbar-header">
<a class="filter-head">
Relevant Categories
</a>
</div>
<div class="country-filter left-filter-item collapse navbar-collapse">

</div>

</div>
<div class="filter-box">
<div class="navbar-header">
<a class="filter-head">Country / Region</a>
<div id="country-filter" class="country-filter left-filter-item collapse navbar-collapse">
    <div class="filter_searchbox">
<i class="glyphicon glyphicon-search"></i>
<input class="form-control country_search" type="text" id="countrySearch" placeholder="search">
    </div>
        <div class="clearfix">
            
        </div>
    <ul>
     

        <li>
            <a href="{{ url('filter-by-country', ['country' => 'India']) }}" data-country="India" title="India">
                <img src="{{ asset('assets/images/country/india.svg')}}" alt="" class="country-flag">
             
                <span> &nbsp; India</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Australia']) }}" data-country="Australia" title="Australia">
                <img src="{{ asset('assets/images/country/Australia.svg')}}" alt="" class="country-flag">
                <span> &nbsp; Australia</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Bangladesh']) }}" data-country="Bangladesh" title="Bangladesh">
                <img src="{{ asset('assets/images/country/Bangladesh.svg')}}" alt="" class="country-flag">
                <span>&nbsp; Bangladesh</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'UAE']) }}" data-country="UAE"  title="United Arab Emirates">
                <img src="{{ asset('assets/images/country/UAE.svg')}}" alt="" class="country-flag">
                <span> &nbsp;UAE</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Brazil']) }}" data-country="Brazil" title="Brazil">
                <img src="{{ asset('assets/images/country/Brazil.svg')}}" alt="" class="country-flag">
                <span> &nbsp; Brazil</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Canada']) }}" data-country="Canada" title="Canada">
                <img src="{{ asset('assets/images/country/Canada.svg')}}" alt="" class="country-flag">
                <span> &nbsp;Canada</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'China']) }}" data-country="China" title="China">
                <img src="{{ asset('assets/images/country/China.svg')}}" alt="" class="country-flag">
                <span> &nbsp; China</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Germany']) }}" data-country="Germany" title="Germany">
                <img src="{{ asset('assets/images/country/Germany.svg')}}" alt="" class="country-flag">
                <span> &nbsp;Germany</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Egypt']) }}" data-country="Egypt" title="Egypt">
                <img src="{{ asset('assets/images/country/Egypt.svg')}}" alt="" class="country-flag">
                <span> &nbsp;Egypt</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'France']) }}" data-country="France" title="France">
                <img src="{{ asset('assets/images/country/France.svg')}}" alt="" class="country-flag">
                <span> &nbsp;France</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'ENGLAND']) }}" data-country="ENGLAND" title="United Kingdom">
                <img src="{{ asset('assets/images/country/UK.svg')}}" alt="United Kingdom" class="country-flag">
                <span>&nbsp; UK</span>
            </a>
           
</li>
        <li>
       
            <a href="" title="Kyrgyzstan">
                <img src="{{ asset('assets/images/country/Kyrgyzstan.png')}}" alt="Kyrgyzstan" class="country-flag">
                <span> &nbsp;Kyrgyzstan</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Indonesia']) }}" data-country="Indonesia" title="Indonesia">
                <img src="{{ asset('assets/images/country/Indonesia.svg')}}" alt="Indonesia" class="country-flag">
                <span> &nbsp;Indonesia</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Iran']) }}" data-country="Iran" title="Iran">
                <img src="{{ asset('assets/images/country/Iran.svg')}}" alt="Iran" class="country-flag">
                <span> &nbsp;Iran</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Italy']) }}" data-country="Italy" title="Italy">
                <img src="{{ asset('assets/images/country/Italy.svg')}}" alt="Italy" class="country-flag">
                <span> &nbsp;Italy</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Japan']) }}" data-country="Japan" title="Japan">
                <img src="{{ asset('assets/images/country/Japan.svg')}}" alt="Japan" class="country-flag">
                <span> &nbsp;Japan</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Korea']) }}" data-country="Korea" title="South Korea">
                <img src="{{ asset('assets/images/country/South-Korea.svg')}}" alt="South Korea" class="country-flag" >
                <span> &nbsp;South Korea</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Malaysia']) }}" data-country="Malaysia" title="Malaysia">
                <img src="{{ asset('assets/images/country/Malaysia.svg')}}" alt="Malaysia" class="country-flag">
                <span> &nbsp;Malaysia</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Netherlands']) }}" data-country="Netherlands"  title="Netherlands">
                <img src="{{ asset('assets/images/country/Netherlands.svg')}}" alt="Netherlands" class="country-flag">
                <span> &nbsp;Netherlands</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Philippines']) }}" data-country="Philippines" title="Philippines">
                <img src="{{ asset('assets/images/country/Philippines.svg')}}" alt="Philippines" class="country-flag">
                <span> &nbsp;Philippines</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Pakistan']) }}" data-country="Pakistan" title="Pakistan">
                <img src="{{ asset('assets/images/country/Pakistan.svg')}}" alt="Pakistan" class="country-flag">
                <span> &nbsp;Pakistan</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Russia']) }}" data-country="Russia" title="Russia">
                <img src="{{ asset('assets/images/country/Russia.svg')}}" alt="Russia" class="country-flag">
                <span> &nbsp;Russia</span>
            </a>
           
</li>
        <li>
       
            <a  href="{{ url('filter-by-country', ['country' => 'Singapore']) }}" data-country="Singapore" title="Singapore">
                <img src="{{ asset('assets/images/country/Singapore.svg')}}" alt="Singapore" class="country-flag">
                <span> &nbsp;Singapore</span>
            </a>
           
</li>
        <li>
       
            <a  href="{{ url('filter-by-country', ['country' => 'Thailand']) }}" data-country="Thailand" title="Thailand">
                <img src="{{ asset('assets/images/country/Thailand.svg')}}" alt="Thailand" class="country-flag">
                <span> &nbsp;Thailand</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Türkiye']) }}" data-country="Türkiye" title="Türkiye">
                <img src="{{ asset('assets/images/country/Türkiye.svg')}}" alt="Türkiye" class="country-flag">
                <span> &nbsp;Türkiye</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Taiwan']) }}" data-country="Taiwan" title="Taiwan">
                <img src="{{ asset('assets/images/country/Taiwan.svg')}}" alt="Taiwan" class="country-flag">
                <span> &nbsp;Taiwan</span>
            </a>
           
</li>
        <li>
       
            <a  href="{{ url('filter-by-country', ['country' => 'Ukraine']) }}" data-country="Ukraine" title="Ukraine">
                <img src="{{ asset('assets/images/country/Ukraine.svg')}}" alt="Ukraine" class="country-flag">
                <span> &nbsp;Ukraine</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Vietnam']) }}" data-country="Vietnam" title="Vietnam">
                <img src="{{ asset('assets/images/country/Vietnam.svg')}}" alt="Vietnam" class="country-flag">
                <span> &nbsp;Vietnam</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'Africa']) }}" data-country="Africa" title="South Africa">
                <img src="{{ asset('assets/images/country/South-Africa.svg')}}" alt="South Africa" class="country-flag">
                <span> &nbsp;South Africa</span>
            </a>
           
</li>
        <li>
       
            <a href="{{ url('filter-by-country', ['country' => 'USA']) }}" data-country="USA" title="USA">
                <img src="{{ asset('assets/images/country/USA.svg')}}" alt="USA" class="country-flag">
                <span> &nbsp;USA</span>
            </a>
           
</li>
        

            </ul>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

            <script>
$(document).ready(function() {
  $("#countrySearch").on("input", function() {
    var searchTerm = $(this).val().toLowerCase();
    $("#country-filter ul li").each(function() {
      var countryName = $(this).text().toLowerCase();
      if (countryName.indexOf(searchTerm) === -1) {
        $(this).hide();
      } else {
        $(this).show();
      }
    });
  });
});
</script>

</div>
</div>
</div>
</div>

        <style>
            .country-flag.at {
    height: 14px;
    background-position: -264px 0;
}
.country-flag {
    box-shadow: 0 0 1px 0 #dcdcdc;
    background-repeat: no-repeat;
    background-color: #dbdbdb;
    background-position: 20px 0;
    position: relative;
    width: 20px!important;
    max-width: 20px!important;
}
.country-flag {
    vertical-align: middle;
    max-width: 25px;
}
            .left-filter-item ul li a {
    font-size: 15px;
    color: #333;
}
            .left-filter-item ul li {
    margin-bottom: 15px;
}
            div#country-filter ul {
    height: 250px;
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}
            .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
}
            .filter_searchbox input {
    padding-left: 25px;
}
            .glyphicon-search:before {
    content: "\e003";
}
            .filter_searchbox i {
    position: absolute;
    left: 5px;
    top: 0;
    bottom: 0;
    margin: auto;
    font-size: 13px;
    height: 12px;
}
.glyphicon {
    position: relative;
    top: 1px;
    display: inline-block;
    font-family: 'Glyphicons Halflings';
    font-style: normal;
    font-weight: 400;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
            .filter_searchbox {
    margin-bottom: 10px;
    position: relative;
    display: block;
    float: left;
    width: 100%;
}
            @media (min-width: 768px){
.navbar-collapse.collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
}

}
.left-filter-item {
    padding: 0;
}
@media (min-width: 768px){
.navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
}
            .filter-box .navbar-header {
    width: 100%;
    margin-bottom: 12px;
}
@media (min-width: 768px){
.navbar-header {
    float: left;
}

}
.filter-head {
    font-size: 18px;
    color: #333;
    font-weight: 600;
}
            .filter-box {
    margin-bottom: 0;
}
.filter-box {
    margin-top: 10px;
    margin-bottom: 10px;
}
           /* * ul  li {
    display: list-item;
} */
            .left-filter-item ul li {
    margin-bottom: 15px;
    display: math;
}
.left-filter-item ul li a {
    font-size: 15px;
    color: #333;
}
            .filter-head {
    font-size: 18px;
    color: #333;
    font-weight: 600;
}
            .filter-box {
    margin-bottom: 0;
}
.filter-box .navbar-header {
    width: 100%;
    margin-bottom: 12px;
}
.filter-box {
    margin-top: 10px;
    margin-bottom: 10px;
}
            .breadcrumb li span {
    font-size: 14px;
    color: #dd5647;
}
            .breadcrum ul.breadcrumb>li+li:before {
    padding: 0 2px;
    color: #ccc;
    content: "/\00a0";
}
            .breadcrum ul.breadcrumb li a {
    font-size: 14px;
    color: #333;
}
            .breadcrum h2 {
    font-size: 22px;
    color: #333;
    font-weight: 600;
}
.breadcrumb>li {
    display: inline-block;
}
.breadcrum .breadcrumb {
    background-color: transparent;
    padding: 6px 0;
    margin-bottom: 0;
}
.left-filter-item {
    padding: 0;
}
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
@media (min-width: 768px){
.navbar-header {
    float: left;
}
.navbar-collapse.collapse {
    display: block!important;
    height: auto!important;
    padding-bottom: 0;
    overflow: visible!important;
}
.navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
}
}

        </style>
        <div class="col-12 col-lg-10 col-md-9 col-sm-10">
        
        <div class="wbg">
        @foreach ($products as $product)
<div class="pl-listitem">
<div class="col1">
<a href="{{ url('item/' . $product->id . '/' . \Illuminate\Support\Str::slug($product->title)) }}">
<div class="pl-pic">
<img src="{{ asset('assets/images/Products/' . $product->images) }}">
</div>
</a>
</div>
<div class="col2">
<div class="col-product">
    <h2>
        <a href="{{ url('item/' . $product->id . '/' . \Illuminate\Support\Str::slug($product->title)) }}">
        {{$product->title}}
        </a>
    </h2>
    <h4 class="cname-mobile">
<a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($product->customer->company_name ?? '')) }}" data-value="{{ $product->customers->company_name ?? '' }}">
{{ $product->customers->company_name ?? '' }}
</a>
    </h4>

    <ul class="attr-product" style="list-style: none;"> 
<li></li>
<li>
<span>
MOQ :- 
</span>

{{$product->mqty}}
</li>
<li>
<span>
    Price Range :-
</span>

{{$product->pprice}}
</li>
<li>
<span>
Payment Terms :-
</span>

{{$product->pterms}}
</li>
<li>
<span>
Supply Ability:- 
</span>

{{$product->sability}}
</li>

    </ul>
    <div class="action-cont">
<a class="contactlistbtn  btn">
Contact Now
</a>
    </div>
</div>

<div class="col-comp" style="background: #f4f4f4;">
<div class="package-badge">
<!-- <img style="max-width: 80px;" src="https://img2.tradewheel.com/template1/premium_services/img/gold-advance-icon.png.webp"> -->
@if($product->customers)
    @if($product->customers->rank == 1)
        <img src="{{asset('pricelogo/ELITE.png')}}" style="max-width: 80px;">
    @elseif($product->customers->rank == 2)
        <img src="{{asset('pricelogo/PRO.png')}}" style="max-width: 80px;">
    @elseif($product->customers->rank == 3)
        <img src="{{asset('pricelogo/GROWING.png')}}" style="max-width: 80px;">
    @elseif($product->customers->rank == 4)
        <img src="{{asset('pricelogo/TETRA.png')}}" style="max-width: 80px;">
    @elseif($product->customers->rank == 6)
        <img src="{{asset('pricelogo/ELITE-PLUS.png')}}" style="max-width: 80px;">
    @else
        <p style="color:green;"><b>We Pass</b></p>
    @endif
@else
    <p style="color:red;"></p>
@endif


</div>
<h4 style="font-size: 12px;">
<a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($product->customer->company_name ?? '')) }}" data-value="{{ $product->customers->company_name ?? '' }}">
{{ $product->customers->company_name ?? '' }}
</a>
</h4>
<ul class="attr-comp" style="list-style: none;">
<li>
Country/Region:
<span>{{ $product->customers->country ?? '' }}</span>
</li>
<li>
Website:
 <a href="{{ $product->customers->website ?? '' }}" target="_blank" style="font-size: 13px; ">
        {{ $product->customers->website ?? '' }}
    </a>
</li>
<li>
Business Type:-
<span>{{ $product->customers->business_type ?? '' }}</span>
</li>
<li>
Employee Count:
<span>{{ $product->customers->total_employee ?? '' }}</span>
</li>

</ul>
</div>
</div>
<div class="action-cont action-cont-mb">
<a href="" class="btn pl-btn-list link-open">
Contact Now
</a>
</div>
</div>
@endforeach      

</div>
            
            <div class="d-flex justify-content-center">
    {{ $products->appends(request()->except('page'))->links('pagination::simple-bootstrap-4') }}
</div>
        </div>
        
    </div>
    </div>
    </div>
    
    <!-- <script>
    $('.search-tag').click(function() {
        var searchTerm = $(this).data('value');
        console.log(searchTerm);
        window.location.href = '/catalog?search=' + searchTerm;
    });
    </script> -->
    <style>
        ul.attr-comp li span {
    color: #333;
    margin-left: 3px;
}
        ul.attr-comp li {
    font-size: 15px;
    color: #878787;
    margin-bottom: 6px;
}
        ul.attr-comp {
    min-height: 100px;
    margin-bottom: 17px;
}
        .col-comp h4 a {
    font-size: 13px;
    color: #878787;
}
        .col-comp h4 {
    margin-bottom: 0px;
        }
        .package-badge {
    text-align: center;
}
        .col-comp {
    width: 230px;
    padding: 7px 0 0 15px;
    border-left: 1px dotted #eee;
}
        .contactlistbtn{

            background-color: #b2a42463;;
    color: #fff;
    font-size: 18px;
    font-weight: 400;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    padding: 2px 20px;
        }
        .action-cont-mb {
    display: none;
}
        .btn {
    display: inline-block;
    padding: 7px 16px;
    margin-bottom: 0;
    font-size: 15px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
        .action-cont {
    text-align: right;
}
        ul.attr-product li span {
    color: #878787;
    width: 125px;
    display: inline-block;
}
        ul.attr-product li {
    font-size: 13px;
    color: #5c5c5c;
    margin-bottom: 6px;
}
        ul.attr-product {
    margin-bottom: 20px;
}
        .col-product h2 a {
    font-size: 17px;
    color: #344e69;
    font-weight: 600;
    word-break: break-word;
}
        .col-product h2 {
    margin-bottom: 15px;
}
        .col-product {
    width: calc(99% - 260px);
    padding: 5px 15px 0;
}
        .col2 {
    width: calc(99% - 152px);
    position: relative;
}
        .pl-pic img {
    max-width: 150px;
    vertical-align: middle;
    max-height: 150px;
}
        .pl-pic {
    width: 150px;
    height: 150px;
    border: 1px solid #ededed;
    display: table-cell;
    vertical-align: middle;
    position: relative;
    text-align: center;
}
        .col-comp, .col-left, .col-product, .col1, .col2, .col3, .mainimage {
    vertical-align: top;
    display: inline-block;
}
        .col1 {
    width: 152px;
}
.wbg {
    background-color: #fff;
    padding: 20px;
   
}
.pl-listitem {
    padding-bottom: 8px;
    border:1px solid #f3f3f3;
    margin-bottom: 8px;
    border-bottom: 1px solid #f3f3f3;
}

     
a {
    font-size: 14px;
    color: #333;
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

    
    </style>

<style>
    .cname-mobile {
    display: none;
}
            @media screen and (max-width: 480px) {
   .wbg {
    background-color: #fff;
    padding: 0px !important;
  }
   .pl-listitem{
    background: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom: 5px;
    position: relative;
    border-bottom: 1px solid #f3f3f3;
  }
   .col1{
    width: 140px;
    display: inline-block !important;
    padding-left: 10px;
    padding-right: 10px;
  }
  .pl-pic {
    width: 140px;
    height: 130px;
}
.col1 img {
    max-width: 100%;
    height: auto;
    max-height: 130px;
}
.col2 {
    width: calc(100% - 150px);
    display: inline-block;
}
.col-product {
    padding-top: 0;
    padding-bottom: 0;
    padding: 15px 0;
    display: block;
    width: 100%;
    min-height: 150px;
}
.col-product h2 {
    margin-bottom: 5px;
}
.col-product h2 a {
    font-size: 17px;
}
h4.cname-mobile {
    margin-bottom: 15px;
    color: #efefef;
}
.cname-mobile {
    display: block;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
ul.attr-product li span {
    width: 100%;
    /* height: 15px; */
    font-size: 9px;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
.col-comp{
    display: none;
}
.action-cont{
    display: none;
}
h4.cname-mobile a {
    color: #767676;
    font-size: 8px;
}
.action-cont-mb {
    display: initial;
    position: absolute;
    right: 10px;
    bottom: 15px;
    display: block;
    width: 100%;
    right: initial;
    bottom: initial;
    position: relative;
    padding-left: 10px;
    padding-right: 10px;
}
.pl-btn-list {
    background: #fff;
    color: black;
    border: 1px solid #c0c0c0;
    display: block;
    width: 100%;
}
ul.attr-product li {
    display: none;
}
.filter-box .navbar-header{
    display: none;
}
}







            @media screen and (max-width: 768px) {
                .wbg {
    background-color: #fff;
    padding: 0px !important;
  }
  .filter-box .navbar-header{
    display: none;
}
  .pl-listitem{
    background: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom: 5px;
    position: relative;
    border-bottom: 1px solid #f3f3f3;
  }
  
  .col1{
    width: 140px;
    display: inline-block !important;
    padding-left: 10px;
    padding-right: 10px;
  }
  .pl-pic {
    width: 140px;
    height: 130px;
}
.col1 img {
    max-width: 100%;
    height: auto;
    max-height: 130px;
}
.col2 {
    width: calc(100% - 150px);
    display: inline-block;
}
.col-product {
    padding-top: 0;
    padding-bottom: 0;
    padding: 15px 0;
    display: block;
    width: 100%;
    min-height: 150px;
}
.col-product h2 {
    margin-bottom: 5px;
}
.col-product h2 a {
    font-size: 17px;
}
h4.cname-mobile {
    margin-bottom: 15px;
    color: #efefef;
}
.cname-mobile {
    display: block;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
ul.attr-product li span {
    width: 100%;
    /* height: 12px; */
    font-size: 9px;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
.col-comp{
    display: none;
}
.action-cont{
    display: none;
}
h4.cname-mobile a {
    color: #767676;
    font-size: 8px;
}
.action-cont-mb {
    display: initial;
    position: absolute;
    right: 10px;
    bottom: 15px;
    display: block;
    width: 100%;
    right: initial;
    bottom: initial;
    position: relative;
    padding-left: 10px;
    padding-right: 10px;
}
.pl-btn-list {
    background: #fff;
    color: black;
    border: 1px solid #c0c0c0;
    display: block;
    width: 100%;
}
ul.attr-product li {
    display: none;
}
}







            @media screen and (max-width: 992px) {
                .wbg {
    background-color: #fff;
    padding: 0px !important;
  }
  .filter-box  .navbar-header{
    display: none;
}
  .pl-listitem{
    background: #fff;
    padding-top: 15px;
    padding-bottom: 15px;
    margin-bottom: 5px;
    position: relative;
    border-bottom: 1px solid #f3f3f3;
  }
  .col1{
    width: 140px;
    display: inline-block !important;
    padding-left: 10px;
    padding-right: 10px;
  }
  .pl-pic {
    width: 140px;
    height: 130px;
}
.col1 img {
    max-width: 100%;
    height: auto;
    max-height: 130px;
}
.col2 {
    width: calc(100% - 150px);
    display: inline-block;
}
.col-product {
    padding-top: 0;
    padding-bottom: 0;
    padding: 15px 0;
    display: block;
    width: 100%;
    min-height: 150px;
}
.col-product h2 {
    margin-bottom: 5px;
}
.col-product h2 a {
    font-size: 17px;
}
h4.cname-mobile {
    margin-bottom: 15px;
    color: #efefef;
}
.cname-mobile {
    display: block;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
ul.attr-product li span {
    width: 100%;
    /* height: 12px; */
    font-size: 9px;
}
ul.attr-product li:nth-of-type(1), ul.attr-product li:nth-of-type(2), ul.attr-product li:nth-of-type(3), ul.attr-product li:last-of-type {
    display: block !important;
}
ul.attr-product li {
    font-size: 12px;
    font-weight: normal;
}
.col-comp{
    display: none;
}
.action-cont{
    display: none;
}
h4.cname-mobile a {
    color: #767676;
    font-size: 8px;
}
.action-cont-mb {
    display: initial;
    position: absolute;
    right: 10px;
    bottom: 15px;
    display: block;
    width: 100%;
    right: initial;
    bottom: initial;
    position: relative;
    padding-left: 10px;
 
    padding-right: 10px;
}
.pl-btn-list {
    background: #fff;
    color: black;
    border: 1px solid #c0c0c0;
    display: block;
    width: 100%;
}
ul.attr-product li {
    display: none;
}
}
        </style>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection