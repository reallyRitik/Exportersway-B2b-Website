@extends('header')

@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    
    <title>ExportersWay - B2B Business Marketplace | World Exporters | Manufacturers Suppliers Exporters</title>

    <!-- SEO Meta Tags -->
    <meta name="keywords" content="Global B2b Marketplace, B2b Online Marketplace, Online B2b Marketplace Platform, b2b Marketplace, B2b Online Portal, B2b Portal in India, International Buyer in India, Worldwide Suppliers in India, Worldwide Importers in India, Worldwide Exporters in India, Best B2b Portal in India">
    <meta name="description" content="Experience the future of global trade on our innovative B2B platform, where exporters, manufacturers, and suppliers converge to drive sustainable business growth.">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="https://exportersway.com/companylogo/exportersway-logo.png">

    <!-- Google Site Verification -->
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls">

    <!-- General Meta Tags -->
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="Daily">
    <meta name="author" content="Exporters Way">
    <link rel="canonical" href="https://www.exportersway.com/">

    <!-- Geo Meta Tags -->
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Delhi">
    <meta name="geo.position" content="28.694715;77.154261">
    <meta name="ICBM" content="28.694715, 77.154261">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <link rel="stylesheet" href="{{ asset('assets/css/library/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/homecontent.css') }}">

    <!-- Structured Data / JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "https://www.exportersway.com/"
        },
        "headline": "Exporters Way - Indian Exporters Supplier B2B Marketplace",
        "description": "Exporters Way - Global B2B Marketplace of exporters, suppliers, and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.",
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
                "url": "https://exportersway.com/companylogo/exportersway-logo.png",
                "width": "200",
                "height": "60"
            }
        },
        "datePublished": "2021-09-01",
        "dateModified": "2021-09-02"
    }
    </script>
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GNBTPV6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 


<div style="width:100%;padding: 5px 0px 2px 10px;" class="row homecontent_menu">
    <div class="col-lg-3  col-2 col-md-3">
        <div id="navCatContent" class="nav_cat navbar collapse" style="cursor:pointer">
            <ul>
                <h4 style="border-bottom:2px solid Black; color:black; text-align:center">Main Categories <img
                        src="{{ asset('assets/images/small/more.png')}}" style="width:10%" alt=""></h4>
                @foreach($category->take(9)  as $row)
                <!-- <li class="dropdown dropdown-mega-menu" style="cursor:pointer"> -->
                    <li class="dropdown dropdown-mega-menu" >

                    <a class="dropdown-item nav-link dropdown-toggler" id="search-tag"
   href="{{ route('category.search', ['slug' => strtolower(str_replace(['&', ' '], ['and', '-'], $row->name))]) }}"
   style="font-size: 12px;">
    <img src="{{ asset('assets/images/categoryicon/' . $row->icon) }}" alt="{{$row->name}}" style="width:10%">
    <span style="text-align: center !important" class="search-tag" style="font-size:12px">
        {{$row->name}}
    </span>
</a>
                   
                </li>
                @endforeach
            </ul>
            <a href="{{url('/categories')}}">
                <div class="more_categories" style="text-align: center !important; color:#AA832C;" >More Categories</div>
            </a>
        </div>

    </div>
    <div class="col-12 col-lg-6 col-md-9" style="margin-top: 1px;">
    <div class="container" data-autoplay="true">
     
        
        <div class="slide">
            <img src="{{asset('bannerimg/cousin-cover.jpg')}}"
                alt="nature" />
        </div>
        <div class="slide">
            <img src="{{asset('bannerimg/bluetooth-otc-hearing-aids.jfif')}}"
                alt="nature" />
        </div>
        <div class="slide">
            <img src="{{asset('bannerimg/Silica-sand.jpeg')}}"
                alt="nature" />
        </div>
        
        
        <div class="slide">
             <a> <img src="{{asset('bannerimg/Block-Manufacturers&Suppliers-In-India.jpg')}}"
                alt="nature" /></a>
        </div>
        
       
<div class="buttonnexth">
        <button class="prev" onclick="prev()"><i class="fa fa-angle-left"></i></button>
        <button class="next" onclick="next()"><i class="fa fa-angle-right"></i></button>
        </div>

    </div>
    <div class="dots_container" id="indicator"></div>
    </div>
    <div class="col-12 col-lg-3 maindataregister">
        
<section class="registerformmain">
<h3 style="
    color: #002e4b;
    font-size: 18px;
    text-align: center;
    text-transform: uppercase;
    border: none;
    margin-bottom: 0px;    border-bottom: 1px solid #686565;"> Tell Us What You
<span>NEED</span>    
</h3>
<p style="font-size: 10px;
    color: #5d6177;
    margin-top: 8px;">Navigating Global Trade, Your Way with <b>ExportersWay!</b></p>
<form method="post" name="quoteform"  action="{{ url('/requirement') }}">
    @csrf
<div class="form-row mt-3">
<div class="col-sm-12">
<label>Requirements</label>
<input type="text" name="products_want" class="form-control" placeholder="Enter product/service name" title="Comma seperated keywords" autocomplete="off" required >
</div>
<div class="col-lg-6 col-md-12 col-sm-6">
<label>Name</label>
<input type="text" name="full_name" class="form-control" placeholder="Full Name" title="Please enter your Full Name here" autocomplete="off" >
</div>
<div class="col-lg-6 col-md-12 col-sm-6">
<label>Email</label>
<input type="text" name="email" class="form-control" placeholder="Email" title="Please enter your Email here" autocomplete="off" >
</div>
<div class="col-lg-6 col-md-12 col-sm-6">
<label>Company</label>
<input type="text" name="company" class="form-control" placeholder="Company" title="Please enter your Company here" autocomplete="off" >
</div>
<div class="col-lg-6 col-md-12 col-sm-6">
<label>Number</label>
<input type="text" name="number" class="form-control" placeholder="Number" title="Please enter your number here" autocomplete="off" >
</div>
<div class="col-md-12">
    <label>I am a</label>
    <select class="form-control" name="type" aria-required="true">

        <option>--WHO YOU ARE --</option>
        <option value="suplier">Suplier</option>
        <option value="buyer">Buyer</option>
    </select>
    
</div>
<div class="col-12 form-p-0 text-center">
<button class="btn btn-outline-danger" type="submit" style="background-color: #AA832C;">Submit</button>
</div>
<p class="text-center" style="font-size:8px">
    <span>*</span>
    The mission is achieved by providing all the necessary functionalities to buyers and sellers, aiding them in developing the voice of their business and enabling global expansion.
</p>
</div>
</form>
</section>
    </div>

    <style>
        /* .container {
        position: relative;
        width: 100%;
        height: 400px;
        margin: 20px auto;
    } */
    
    .registerformmain{
       
    padding: 14px 15px 0;
    position: relative;
    border-left: 1px solid #a8a6a6; 
    }

    .registerformmain h3 span{
       
        background-color: #AA832C;
    color: #fff;
    padding: 3px 4px;
    }

    @media only screen and (max-width: 600px) {
        .maindataregister {
    display: none;
  }
  .dots_container {
    display: flex;
    margin: -10px auto;
    width: fit-content;
}
   
   
}
@media only screen and (max-width: 565px) {
        .maindataregister {
    display: none;
  }
    .dots_container {
    display: flex;
    margin: -10px auto;
    width: fit-content;
}
   
}
    @media only screen and (max-width: 768px) {
        .maindataregister {
    display: none;
  }
         .mobile-full-width {
    position: relative;
    width: 100%;
    padding-right: 1px;
    padding-left: 10px;
    margin-top: 22px;
 }
 .dots_container {
    display: flex;
    margin: -10px auto;
    width: fit-content;
}
   
 .left-categories-wrapper{
display: none;
 }
 .registerformmain{
display: none;
 }
        
    }
  
   form p {
    font-size: 11px;
    color: #5d6177;
    margin-top: 4px;
}
        form p span {
    color: #e61d25;
}
        .form-control {
    display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
       .registerformmain form .form-control {
    background-color: #fff;
    color: #000;
    width: 100%;
    margin-bottom: 13px;
    height: 32px;
    border-width: 1px;
    border-style: solid;
    border-color: transparent;
    border-image: initial;
    padding: 6px!important;
    border-radius: 6px;
    box-shadow: 1px 2px 3px #5d617624;
    font-size: 12px;
}
       .registerformmain form button {
        padding: 7px 25px;
    -webkit-transition: all 1.2s ease;
    transition: all 1.2s ease;
    text-shadow: 1px 2px 4px rgba(0,0,0,.3);
    background: #e61d25;
    color: #fff;
    box-shadow: inset 0 -3px 0 0 rgba(0,0,0,.2);
    -webkit-transition: all .2s ease;
    transition: all .2s ease;
    border-radius: 6px;
    cursor: pointer;
    font-size: 15px;
    border: none;
    display: inline-block;
    text-transform: uppercase;
    width: 80%;

}
    .registerformmain form label {
    display: block;
    float: left;
    width: 100%;
    margin-bottom: 0;
}
    .form-row {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -5px;
    margin-left: -5px;
}

    .slide {
        position: absolute;
        top: 0;
       right: 0px;
        width: 100%;
        margin: 0;
        opacity: 0;
        transition: 1s ease-in-out;
        overflow: hidden;
    }

    .slide img {
        width: 100%;
    }

.search-tag:hover{
    color:#AA832C;
}
#search-tag:hover{
    color:#AA832C;
}
   .buttonnexth button {
        position: absolute;
        top: 45%;
        border: none;
        background: rgba(32, 26, 26, 0.527);
        color: rgb(243, 243, 243);
        /*margin-top: -25px;*/
        font-size: 30px;
        z-index: 1000;
        font-weight: 900;
        transition: 0.5s ease-in-out;
    }

    .prev {
        left: 0;
    }

    .next {
        right: 0;
    }


    button:hover {
        background: rgba(32, 26, 26, 0.527);
    }

    .dots_container {
        display: flex;
        margin: 5px auto;
        width: fit-content;
    }

    .dots {
        height: 12px;
        width: 12px;
        border-radius: 50%;
        background: #bdbdbd;
        margin: 4px;
    }

    .dots:hover {
        background: #696969 !important;
    }

    @media screen and (max-width:600px) {
      .slide{
        height: fit-content;
    right: -8px;
    width: 100%;
      }
      .container{
height:200px;}
    button {
        top: 50%;
    }
     .mobile-full-width {
    position: relative;
    width: 100%;
    padding-right: 1px;
    padding-left: 10px;
    margin-top: 22px;
 }
 .left-categories-wrapper{
display: none;
 }
 .registerformmain{
display: none;
 }
    }
    @media screen and (max-width:468px) {
      .slide{
        height:fit-content;
      }
      
    button {
        top: 50%;
    }
     .mobile-full-width {
    position: relative;
    width: 100%;
    padding-right: 1px;
    padding-left: 10px;
    margin-top: 22px;
 }
 .left-categories-wrapper{
display: none;
 }
 .registerformmain{
display: none;
 }
    }

    </style>
<script>
     var slide = document.getElementsByClassName("slide");
        var indicator = document.getElementById("indicator");
        var dots = document.getElementsByClassName("dots");
        var autoplay = document.getElementsByClassName("container")[0].getAttribute("data-autoplay");
        var l = slide.length;
        var interval = 5000;
        var set;

        window.onload = function () {
            initialize();
            slide[0].style.opacity = "1";
            for (var j = 0; j < l; j++) {
                indicator.innerHTML += "<div class='dots' onclick=change(" + j + ")></div>";
            }

            dots[0].style.background = "#696969";

        }

        function initialize() {
            if (autoplay === "true")
                set = setInterval(function () { next(); }, interval);
        }



        function change(index) {
            clearInterval(set);
            count = index;
            for (var j = 0; j < l; j++) {
                slide[j].style.opacity = "0";
                dots[j].style.background = "#bdbdbd";
            }
            slide[count].style.opacity = "1";
            dots[count].style.background = "#696969";


        }

        var count = 0;
        function next() {
            clearInterval(set);
            slide[count].style.opacity = "0";
            count++;
            for (var j = 0; j < l; j++) {
                dots[j].style.background = "#bdbdbd";
            }


            if (count == l) {
                count = 0;
                slide[count].style.opacity = "1";
                dots[count].style.background = "#696969";

            } else {
                slide[count].style.opacity = "1";
                dots[count].style.background = "#696969";
            }
            initialize()
        }


        function prev() {
            clearInterval(set);
            slide[count].style.opacity = "0";
            for (var j = 0; j < l; j++) {
                dots[j].style.background = "#bdbdbd";
            }
            count--;

            if (count == -1) {
                count = l - 1;
                slide[count].style.opacity = "1";
                dots[count].style.background = "#696969";

            } else {
                slide[count].style.opacity = "1";
                dots[count].style.background = "#696969";
            }
            initialize()
        }
</script>

    <!-- <div class="col-1 col-lg-1  ">
        <img src="https://www.exportersway.com/img/home/demos/demo1/banners/3.jpg" alt="" style="width:100%" >
    </div> -->
  
    <script>
    $('.carousel').carousel();
    function index(Id) {
        $.ajax({
            url: "/subn",
            type: "GET",
            data: {
                "Id": Id
            },
            dataType: "json",
            success: function(response) {
                var subcategories = JSON.parse(data);
                var dropdown = '<select>';
                for (var i = 0; i < subcategories.length; i++) {
                    dropdown += '<option value="' + subcategories[i].id + '">' + subcategories[i].subcategoryname + '</option>';
                }
                dropdown += '</select>';
                // Replace the following line with the code to display the dropdown in your page
                console.log(dropdown);
            }
        });
    }
    </script>

</div>

<section style="width:100%;">
    @include('topsearch')
</section>
<section style="width:100%;">
    @include('periumsupplier')
</section>
<section style="width:100%;">
     @include('productlist', ['products' => $products])
</section>

<br>
 <div class="container-fluid regions">
        <h3>
            Companies by country
        </h3>
        <div class="col-12 list">
            <ul id="countries">
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'India']) }}" data-country="India">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/india.svg')}}" alt="India">
                        <span>India</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'Australia']) }}" data-country="Australia" title="Australia">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Australia.svg')}}" alt="australia">
                        <span>Australia</span>
                    </a>
                </li>
                <li>
                    <a title="UAE" href="{{ url('filter-by-country', ['country' => 'UAE']) }}" data-country="UAE">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/UAE.svg')}}" alt="UAE">
                        <span>UAE</span>
                    </a>
                </li>
                <li>
                    <a title="United Kingdom" href="{{ url('filter-by-country', ['country' => 'United Kingdom']) }}" data-country="United Kingdom">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/UK.svg')}}" alt="United Kingdom">
                        <span>UK</span>
                    </a>
                </li>
                <li>

                    <a title="Canada" href="{{ url('filter-by-country', ['country' => 'Canada']) }}" data-country="Canada">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Canada.svg')}}" alt="Canada">
                        <span>Canada</span>
                    </a>
                </li>
                <li>

                    <a title="China" href="{{ url('filter-by-country', ['country' => 'china']) }}" data-country="China">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/China.svg')}}" alt="China">
                        <span>China</span>
                    </a>
                </li>
                <li>
                    <a title="USA" href="{{ url('filter-by-country', ['country' => 'USA']) }}" data-country="USA">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/USA.svg')}}" alt="USA">
                        <span>USA</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'Brazil']) }}" data-country="Brazil" title="Brazil">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Brazil.svg')}}" alt="Brazil">
                        <span>Brazil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'Germany']) }}" data-country="Germany" title="Germany">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Germany.svg')}}" alt="Germany">
                        <span>Germany</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'Indonesia']) }}" data-country="Indonesia" title="Indonesia">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Indonesia.svg')}}" alt="Indonesia">
                        <span>Indonesia</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('filter-by-country', ['country' => 'Italy']) }}" data-country="Italy" title="Italy">
                        <img width="30" height="30" class="lazy" src="{{ asset('assets/images/country/Italy.svg')}}" alt="Italy">
                        <span>Italy</span>
                    </a>
                </li>
                <li>
                    <a href="{{url('suppliers')}}">
                        <img width="30" height="30" class="lazy" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRmyBOc1QrVkR7Wjlzjvi9SkqS7fZsRQyfqcA&s">
                        <span>view more</span>
                    </a>
                </li>



            </ul>
        </div>
    </div>
    <style>
        .regions {
            background-color: #fff;
            padding: 25px 0;
        }

        ul a {
            color: white;
        }

        .regions ul li img {
            width: 40px;
            border: 1px solid #e1e1e1;
            border-radius: 2px;
        }

        .regions ul li span {
            display: block;
            width: 100%;
            font-weight: 500;
            padding: 5px 10px 0;
            color: black;

        }

        .regions ul li {
            display: inline-table;
            padding: 0;
            margin: 10px;
            width: -moz-max-content;
            width: max-content;
            max-width: -moz-max-content;
            max-width: max-content;
            cursor: pointer;
            text-align: center;
        }

        .regions ul {
            display: inline-block;
            width: 100%;
            margin: 15px 0;
            text-align: center;
        }

        .regions .list {
            padding: 0;
        }

        .regions h3 {
            font-size: 1.25rem;
            width: 100%;
            text-align: center;
            text-transform: uppercase;
            font-weight: 800;
        }
    </style>
    <div class="footercontant-keyword" style="margin:10px;">
        <div class="row" style="width:100%">
            <div class="col-md-6 col-12">
                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>Discover a New Era of B2B Trade with ExportersWay</h5>
                        <p><b>ExportersWay</b> is not just another B2B portal; it is your gateway to international trade.
                            As the <b>Best Indian B2B Portal in India</b>, our platform is designed to provide exporters,
                            manufacturers, and suppliers with unparalleled access to global markets.
                            We aim to streamline B2B transactions,
                            making the process seamless for both exporters and importers in India and across the globe.
                            <br>
                            Our platform serves as a <b>Leading B2B Portal in India</b>, offering countless
                            business opportunities to connect with genuine buyers and sellers worldwide.
                            Whether you're new to international trade or an established exporter, ExportersWay provides you
                            with the tools and support needed to succeed in today’s competitive marketplace.
                        </p>
                    </div>
                </div>
                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>A Feature-Rich Platform for Global Trade</h5>
                        <p>
                            At ExportersWay, we offer more than just a marketplace. Our platform is robust, interactive, and designed to meet the demands of modern businesses. As one of the Top 5 B2B Portals in India, we ensure that every transaction is secure, every lead is genuine, and every business can reach its full potential.
                            <br>
                            Our feature-rich platform includes everything from <b>Top Online B2B Marketplace in India</b> features
                            like merchant trust certificate and secure payment
                            gateways to marketing services that help businesses expand their reach.
                        </p>
                    </div>
                </div>
                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>Grow Your Business with ExportersWay</h5>
                        <p>
                            Join the thousands of businesses who have trusted ExportersWay, the <b>
                                Top Online B2B Marketplace in India
                            </b> to help them grow their reach and increase their revenue. With a dedicated support team and innovative solutions, ExportersWay is the perfect platform for any business looking to expand into international markets.
                            <br>
                            Be it generating leads or finding the right buyers, ExportersWay is your one-stop solution for success in the B2B industry.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>Best B2B Portal in India for SMEs and Large Businesses</h5>
                        <p>
                            No matter your business size, ExportersWay has the perfect solution.
                            As <b>India's No 1 B2B Portal</b>, we support small and medium-sized enterprises (SMEs) in
                            acquiring new clients and retaining existing customers. We understand the challenges
                            of international trade, which is why we offer merchant trust certificate and payment guarantee services,
                            ensuring peace of mind for all our users.
                            <br>
                            Our platform is also recognized as one of the Best B2B Exporters in India, consistently helping suppliers and manufacturers grow their business through high-quality leads and verified buyers.
                        </p>
                    </div>
                </div>
                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>Comprehensive Categories to Meet Your Business Needs</h5>
                        <p>
                            Whether you're in any products ExportersWay has a wide array of product categories to cater to your business needs. As the Top B2B Exporters in India, we provide a vast marketplace where
                            buyers and sellers can connect seamlessly. Our Top B2B Marketplace in India is home to exporters, wholesalers, and manufacturers who are industry leaders in their respective fields.
                            <br>
                            From finding <b>Worldwide Exporters in India</b> to expanding your business across borders, ExportersWay makes the entire process simple, transparent, and effective.
                        </p>
                    </div>
                </div>

                <div class="col-12 tile" style="padding: 10px;">
                    <div class="contantmainfooter">
                        <h5>Why Choose ExportersWay?</h5>
                        <p>
                            We offer more than just a platform; we offer solutions. With ExportersWay, businesses not only gain access to a global audience but also benefit from services such as custom website development, SEO promotion, and social media marketing. Our goal is to help businesses convert leads into long-term customers, making us the Top B2B Portal in India. <br>
                            As a <b>Leading B2B Marketplace in India</b>, ExportersWay is committed to providing secure payment options, swift transactions, and reliable partnerships with logistics companies to ensure seamless delivery processes.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .footercontant-keyword {
            background: #fff;
            padding: 20px .5rem;
            overflow: hidden;
        }

        .contantmainfooter h5 {
            font-size: .9rem;
            margin-bottom: 5px;
            color: #000;
            font-weight: 600;
        }

        .contantmainfooter b {
            color: black;
        }

        .contantmainfooter p {
            font-size: .75rem;
            color: grey;
            margin-bottom: 0;
            text-align: justify;
        }
    </style>
<style>
    .cat-anchor {
        cursor: pointer;
       background: rgb(242 242 242);
    border-radius: 4px;
    color: rgb(101 105 107);
    text-decoration: none;
    font-size: 14px;
    line-height: 21px;
    padding: 4px 12px;
    margin-bottom: 5px;
    display: inline-block;
    /* margin-right: 4px; */
}
.cat-anchor:hover{
    color:#AA832C;
}

</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>

</body>
</html>
@endsection