<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <!-- Google site verification tags -->
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
    <meta name="google-site-verification" content="8zxGQNS39-m5pzC-f-BxtD3UfnpGQySE1kEdjqDpRRs" />
    <link rel="icon" type="image/x-icon" href="https://exportersway.com/companylogo/exportersway-logo.png">

    <!-- Geo meta tags -->
    <meta name="geo.region" content="IN-DL" />
    <meta name="geo.placename" content="Delhi" />
    <meta name="geo.position" content="28.694715;77.154261" />
    <meta name="ICBM" content="28.694715, 77.154261" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/header.css') }}">

    <!-- Google Analytics (G-SRD6Z9KL6Q) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SRD6Z9KL6Q"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-SRD6Z9KL6Q');
    </script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

    <!-- Google Analytics (G-JRS5QKJFNW) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JRS5QKJFNW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-JRS5QKJFNW');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w,d,s,l,i){
            w[l]=w[l]||[];
            w[l].push({'gtm.start': new Date().getTime(), event:'gtm.js'});
            var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),
                dl=l!='dataLayer'?'&l='+l:'';
            j.async=true;
            j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
            f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5GNBTPV6');
    </script>

    <!-- Google Analytics (G-4CXBV285WT) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4CXBV285WT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-4CXBV285WT');
    </script>

    <!-- Organization schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Exporters Way",
        "image": "https://exportersway.com/companylogo/exportersway-logo.png",
        "@id": "https://www.exportersway.com/",
        "url": "https://www.exportersway.com/",
        "telephone": "011-46591110",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "A1/20, Ist Floor Vijay Enclave, near Dashrath Puri Metro Station, Palam Dabri Road, Upper Floor IDBI Bank New Delhi, 110045",
            "addressLocality": "New Delhi",
            "postalCode": "110045",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.605440,
            "longitude": 77.081070
        }
    }
    </script>
</head>
<style>

.date {
    padding-right: 3cm;
}

@keyframes tickerTape {
    0% {
        transform: translate(0, 0);
    }

    100% {
        transform: translate(-100%, 0);
    }
}

#search-results {
    list-style-type: none;
    padding: 0;
    margin-top: 10px;
}

#search-results li {
    padding: 10px;
    background-color: #f2f2f2;
    margin-bottom: 5px;
    border-radius: 5px;
}

.footer-section::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("{{ asset('bannerimg/Global-B2b-Marketplace.jpg') }}");
    background-size: cover; /* Use 'cover' for better responsiveness */
    background-position: center;
    opacity: 0.08;    
}

 

</style>

<section style="width: 100%;height: 100%;">
    <!-- <section id="main_header_section">
        <div id="casualEnquiryDesktop" class="row">
            <div class="col-md-4 col-lg-4 col-sm-12 casualEnquiryDesktop__items">
                <i style="font-size:17px">
                    Join World's Fastest Growing B2B Network
                </i>
            </div>
            <div id="casualEnquiryDesktop__item2" class="col-md-7 col-lg-7 col-sm-12 casualEnquiryDesktop__items">
                <form action="{{ url('/enquiry') }}" method="post">
                    @csrf
                    <div id="casualEnquiryDesktop__item2__item" class="row">
                        <input type="text" name="fname" placeholder="Full Name*" class="col-md-3 col-lg-3 col-sm-12">
                        <input type="text" name="phone" placeholder="Mobile Number*" class="col-md-2 col-lg-2 col-sm-12">
                        <input type="text" name="email" placeholder="Email ID*" class="col-md-2 col-lg-2 col-sm-12">
                        <input type="text" name="companyname" placeholder="Company Name*" class="col-md-3 col-lg-3 col-sm-12">
                    </div>

                </form>
<style>
 #casualEnquiryDesktop__item2__item input[type="text"]::placeholder {
    color: white; /* Set the desired placeholder color */
}
</style>
            </div>
            <button style="background-color: #000000;
background-image: linear-gradient(315deg, #a1a09e 0%, #484b4c 74%);color:white;font-weight:bold;" class="col-md-1 col-lg-1 col-sm-12 casualEnquiryDesktop__items">Join us</button>

        </div>
    </section> -->
    <!--<div id="newsTicker" style="width: 100%;">-->
    <!--    <p>We don't allow any client to list their Company In The Products like &nbsp;Alcohol, &nbsp; Dating And matchmaking services, &nbsp;Lobby groups, Political organizations, &nbsp;Mining and oil drilling,&nbsp;Sex toys, &nbsp;and Sexually oriented dating services etc..</p>-->
    <!--</div>-->


    <div id="topbarid" class="top-bar button-platinum">
                        <a href="https://exportersway.com/">
                            <img id="headerLogo" src="{{ asset('companylogo/exportersway-logo.png')}}" alt="Exportersway">
                        </a>
                    <div id="searchBar">
                        <form action="{{ route('products.search') }}" method="GET" id="searchBar__form">
                                    <select class="custom-select" id="searchBar__form__cities" name="search_type">
                                        <option value="product" selected>Product</option>
                                        <option value="company">Company</option>
                                    </select>
                                    <input name="title" type="text" placeholder="Search for a product & company" class="form-control " id="searchBar__form__input">
                                    
                            
                                    <i id="searchBar__icon" class="fa-solid fa-magnifying-glass"></i>
                                    <!--<ul id="search-results"></ul>-->
                            
                        </form>
                        <script>
    $(document).ready(function () {
        // Add click event to the magnifying glass icon
        $("#searchBar__icon").click(function () {
            // Submit the form when the icon is clicked
            $("#searchBar__form").submit();
        });
    });
</script>
                        </div>
                <div class="members_area">
            <div class="members_area_signup">
                @if (Route::has('login'))
                <i class="fa fa-user" aria-hidden="true"></i>
                    <div class=" fixed top-0 right-0  sm:block">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 "><i
                                class="icon-dashboard">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log
                            in</a><span>&nbsp;/</span>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 ">SignUp</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    </div>
                    <div style="    border-left: 1px solid silver;" class="members_area_signup">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <div class=" fixed top-0 right-0  sm:block">
                    
                <a href="{{ url('/showlead') }}">Buy Lead</a>
                </div>
                    </div>
            </div>
            </div>
        </div>
    </div>
    <script>
            $(document).ready(function() {
                $('#searchBar__form__input').on('keyup', function() {
                    var query = $(this).val();
                    
                    if (query.length >= 1) {
                        $.ajax({
                            url: 'search/',
                            type: 'GET',
                            data: {
                                search: query
                            },
                            success: function(response) {
                                var results = '';
                                $.each(response, function(index, book) {
              results += '<li id="current_result">' + book.subcategoryname + '</li>';
            //   console.log(result)
            });
                                $('#search-results').html(results);
                            }
                        });
                    } else {
                        $('#search-results').empty();
                    }
                });
            });

            </script>
    <script>
$(document).ready(function() {
  $('.search-tag').click(function() {
    var searchTerm = $(this).data('value');
    console.log(searchTerm);
    window.location.href = 'searchss?search=' + searchTerm;
  });
});
</script>
    <style>
        .li-icons img {
            position: absolute;
            top: -12px;
            right: 0;
            left: 0;
            max-width: 20px;
            margin: auto;
        }

        ul.top-left-menu li {
            position: relative;
            line-height: 16px;
        }

        ul.top-left-menu>li:after {
            top: 10px;
        }

        ul.top-left-menu>li:after {
            position: absolute;
            content: '';
            width: 1px;
            height: 12px;
            background-color: #d3d3d3;
            top: 3px;
            right: -12px;
        }

        ul.top-left-menu li a {
            font-size: 16.4px;
            color: #676767;
            padding: 5px 2px 7px;
        }

        ul.top-left-menu li a {
            vertical-align: text-bottom;
        }

        ul.top-left-menu li a {
            font-size: 14px;
        }

        ul.top-left-menu li a {
            font-size: 13px;
            line-height: 16px;
            font-family: Arial !important;
            padding: 0 !important;
            vertical-align: text-bottom;
        }

        ul.top-left-menu>li {
            display: inline-block;
            color: #676767;
            position: relative;
            margin-right: 18px;
        }

        ul.top-left-menu li {
            margin-top: 10px;
            padding-bottom: 0;
        }

        ul.top-left-menu li {
            position: relative;
            line-height: 16px;
        }

        ul.top-left-menu li {
            position: relative;
            line-height: 16px;
            font-family: Arial !important;
            padding: 5px 2px;
        }

        ul.top-left-menu li {
            font-size: 16.5px;
        }

        ul.top-left-menu li {
            padding: 5px 2px;
        }

        .top-left-menu {
            margin-bottom: 0;
        }

        @media only screen and (min-width: 992px) {
            .right-menu {
                float: right;
            }
        }

        ul.top-left-menu.right-menu {
            padding-top: 11px;
        }

        .search-col3 button span,
        .search-col3 button span i {
            font-size: 13px;
        }

        .search-col3 button span,
        .search-col3 button span i {
            font-size: 13px;
            font-family: Arial;
        }

        .search-icon {
            background: url(https://img2.tradewheel.com/template1/images/search-icon.png) no-repeat 0 0;
            width: 15px;
            height: 15px;
            display: inline-block;
            margin-right: 6px;
        }

        .search-icon {
            width: 12px;
            height: 12px;
            background-size: contain;
        }

        #search_submit_btn {
            height: 34px;
            background-color: #ff6701;
            color: #fff;
            font-size: 16px;
            width: 100%;
            font-weight: 400;
        }

        #search_submit_btn {
            border: none !important;
        }

        #search_submit_btn {
            background-color: #3f4462;
        }

        button#search_submit_btn {
            border-top-right-radius: 28px;
            border-bottom-right-radius: 28px;
            height: 38px;
        }

        .search-col3 {
            float: right;
        }

        .search-col3 {
            width: 100px;
            height: 38px;
            border-top-right-radius: 5px;
        }

        header .search-col2 input {
            font-size: 12px !important;
            font-family: Arial !important;
        }

        .search-col2 input {
            border: none !important;
            box-shadow: none;
        }

        .search-col2 input {
            border-radius: 0;
            border: 0;
            height: 34px;
            font-size: 15px;
        }

        .search-col2 {
            width: calc(100% - 125px);
            height: 34px;
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
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, .075);
            -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
        }

        .search-col1 select {
            outline: none !important;
            border: none !important;
            font-size: inherit;
            overflow: hidden;
            padding-top: 2px;
            padding-bottom: 2px;
            text-overflow: ellipsis;
            white-space: nowrap;
            background: transparent;
            -webkit-box-shadow: none;
            padding-left: 10px;
        }

        .search-col1 select {
            border-radius: 0;
            border: 0;
            height: 34px !important;
            box-shadow: none;
            padding: 6px 10px;
            color: #6d6d6d;
            font-size: 15px;
        }

        .search-col1 select {
            padding-top: 5px;
            font-family: Arial !important;
            font-size: 14px;
        }

        .search-col1 select {
            box-shadow: inset 0 0 0 2px #fff;
        }

        .search-col1 {
            display: inline-block;
            vertical-align: top;
            width: 125px;
            border-right: 1px solid #e8e8e8;
            height: 34px;
        }

        .search-fields-cont {
            margin-top: 2px;
        }

        .search-fields-cont {
            width: calc(100% - 144px);
        }

        .search-col1,
        .search-col2,
        .search-fields-cont {
            float: left;
        }

        .main-search {
            overflow: hidden;
            margin-top: 11px;
            border-radius: 28px;
            margin-left: 15px;
            padding-bottom: 0 !important;
            padding-top: 0 !important;
            padding-right: 0;
            border: 1px solid #e4e0df;
            height: 40px;
            padding: 2px;
            background-color: #fff;
        }

        .button-whitegold {
  color: rgba(82, 82, 34, 0.72);
  text-decoration: none;
  box-shadow:
    2px 2px 0.5em rgba(155, 122, 89, 0.55),
    inset 1px 1px 0 rgba(255, 255, 255, 0.9),
    inset -1px -1px 0 rgba(0, 0, 0, 0.5)
  ;
  background:
  -moz-linear-gradient(
    -72deg,
    #ffdea1,
    #ffffff 16%,
    #ffdea1 21%,
    #ffffff 24%,
    #736445 27%,
    #ffdea1 36%,
    #ffffff 45%,
    #ffffff 60%,
    #ffdea1 72%,
    #ffffff 80%,
    #ffdea1 84%,
    #736445
  );
  background:
  -webkit-linear-gradient(
    -72deg,
    #ffdea1,
    #ffffff 16%,
    #ffdea1 21%,
    #ffffff 24%,
    #736445 27%,
    #ffdea1 36%,
    #ffffff 45%,
    #ffffff 60%,
    #ffdea1 72%,
    #ffffff 80%,
    #ffdea1 84%,
    #736445
  );
  background:
  -o-linear-gradient(
    -72deg,
    #ffdea1,
    #ffffff 16%,
    #ffdea1 21%,
    #ffffff 24%,
    #736445 27%,
    #ffdea1 36%,
    #ffffff 45%,
    #ffffff 60%,
    #ffdea1 72%,
    #ffffff 80%,
    #ffdea1 84%,
    #736445
  );
  background:
  linear-gradient(
    -72deg,
    #ffdea1,
    #ffffff 16%,
    #ffdea1 21%,
    #ffffff 24%,
    #736445 27%,
    #ffdea1 36%,
    #ffffff 45%,
    #ffffff 60%,
    #ffdea1 72%,
    #ffffff 80%,
    #ffdea1 84%,
    #736445
  );
}

    </style>
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar_temp button-china" style="font-size: 16px;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="memberarea_mobile">
            <div class="members_area_signup" >
                @if (Route::has('login'))
                <i class="fa fa-user" aria-hidden="true"></i>
                    <div class="hidden fixed top-0 right-0  sm:block">
                        @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 "><i
                                class="icon-dashboard">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Log
                            in</a><span>&nbsp;/</span>

                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="text-sm text-gray-700 dark:text-gray-500 ">Register</a>
                        @endif
                        @endauth
                    </div>
                    @endif
                    </div>
                    <div style="    border-left: 1px solid silver;" class="members_area_signup">
                <i class="fa fa-bullhorn" aria-hidden="true"></i>
                <div class="hidden fixed top-0 right-0  sm:block">
                    
                <a href="{{ url('/showlead') }}">Buy Lead</a>
                </div>
                </div>
                    </div>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active nav-item_temp" style="border:none">
                        <a class="nav-link" id="premium" href="{{url('premiumservice')}}" style="border-radius:4px;"><i>Premium Services</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="maindata" href="{{url('categories')}}" style="color: black;">Categories </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="maindata" href="{{url('ourrequirements')}}">Our requirements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="maindata" href="{{url('suppliers')}}">Suppliers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="maindata" href=""  data-toggle="modal" data-target="#exampleModalLong">Add Free Listing</a>

                        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document" style="width: 360px;">
    <div class="modal-content">
    <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" >
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      

      <div class="modal-body">
<div class="row">
<div class="col-12 col-xs-12 col-sm-12 form-container">
<span class="popheading">
Create Account
</span>
<form method="Post" class="register_form" id="register_form_popup">
<div class="reg-form-cont">
<div class="row">
<div class="col-12 col-xs-12 type-container" style="color: black;">
     
I am : <label style="margin-right: 10px;font-weight:normal;">
<input name="type" type="radio" value="buyer" onclick="showProductInput();" checked>
Buyer</label>
<label style="    margin-right: 10px;font-weight:normal;">
<input name="type" type="radio" value="buyer" onclick="hideProductInput();">
Seller</label>
</div>
<script>
    function showProductInput() {
        document.getElementById("productInputContainer").style.display = "block";
    }

    function hideProductInput() {
        document.getElementById("productInputContainer").style.display = "none";
    }
</script>
<div class="col-12 col-xs-12 padr4">
<div class="form-group">
<input class="form-control" placeholder="Name" name="name" type="text">
</div>
</div>
<div class="col-12 col-xs-12 padr4">
<div class="form-group">
<input class="form-control" placeholder="Email" name="email" type="text">
</div>
</div>
<div class="col-12 col-xs-12 padr4">
<div class="form-group">
<input class="form-control" placeholder="Number" name="number" type="text">
</div>
</div>
<div class="col-12 col-xs-12 padr4">
<div class="form-group">
<input class="form-control" placeholder="Buying Product" name="product" type="text">
</div>
</div>
<div class="col-12 col-xs-12 padr4">
<div class="form-group">
<input class="form-control" placeholder="Company Name (Optional)" name="companyname" type="text">
</div>
</div>
<div class="col-12 col-xs-12">
<div class="join-btn-cont">
<button type="submit" class="btn btn-red" style="background: #ff6701;
    text-transform: capitalize;
    max-width: 160px;
    padding: 5px;width: 206px;">Submit</button>
</div>
</div>
<div class="col-12 col-xs-12">
<div class="terms-cont">
<span style="color: #ff6701;">*</span>
By joining, I agree to terms of use and 
<a href="" title="Privacy & Policy" target="_blank">Privacy Policy</a>
</div>
</div>
</div>
</div>
</form>
</div>
</div>
      </div>
    </div>
  </div>
</div>
                    </li>
                    <style>
                        .modal-header .close {
    margin-top: -2px;
}
                        button.close {
    position: absolute;
    top: 0;
    right: 5px;
    font-size: 25px;
    border: 0;
    opacity: 1;
    box-shadow: none;
    text-shadow: none;
}
                        .modal-header {
    padding-bottom: 0!important;
}
                        .terms-cont {
    font-size: 12px;
    color: #868686;
    font-style: italic;
    line-height: 17.2px;
}
                        .btn-red {
    background: #ff6701;
    text-transform: capitalize;
    max-width: 160px;
    padding: 5px;
}
                        .join-btn-cont {
    margin-top: 5px;
    display: flex;
    justify-content: center;
}
                        .modal-dialog {
    width: 360px;
}
                        .form-group {
    margin-bottom: 8px;
}
                       .type-container label {
    display: inline-block;
    max-width: 100%;
    margin-bottom: 5px;
    font-weight: 700;
}
                        .popheading {
    font-size: 22px;
    text-align: center;
    font-weight: bold;
    margin-top: 10px;
    margin-bottom: 10px;
    color: #4c4c4c;
    text-align: center;
    display: block;
}
                        .modal-body div.row {
    margin-left: -3px;
    margin-right: -3px;
}
                        .modal-body {
    padding-left: 15px;
    padding-bottom: 25px;
}
                        .modal-content {
                            margin-top: 24%;
                        }
                        .modal-title{
                            color: black;
                        }
                        button.close span {
    color: #8c8c8c;
}
                        button.close span:hover {
    color: black;
  
}
                        button.close:hover {
    color: black;
   background:none;
}
                    </style>
                    <li class="nav-item">
                        <a class="nav-link" id="maindata" href="{{url('adverties')}}">Advertise with us</a>
                    </li>
                      <li class="nav-item">
                <div id="google_translate_element" style="display: flex;
    justify-content: end;
    text-align: end;"></div>
                <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                </li>
                </ul>

            </div>
        </nav>

    @yield('websitecontent')
   <footer class="footer">
        <div class="footer-content">
            <div class="row border-bottom border-white pb-3 mb-3">
                <div class="col-md-4 mb-3 mb-md-0">
                    <div class="widget1">
                        <div class="logo">
                            <img src="https://exportersway.com/companylogo/exportersway-logo.png" class="img-fluid" alt="">
                        </div>
                        <p>
                            Exportersway Is a Trusted B2b Network Dedicated to Helping Businesses Expand Both Domestically and Globally. We Offer a Seamless Platform for Manufacturers, Suppliers, and Exporters to Showcase Their Products to International Buyers. Serving Industries Like Fashion, Agriculture, Electronics, and More, We Provide Verified Buyers, Tailored Website Solutions, and 24/7 Consultancy, Supporting Businesses in Achieving Global Growth.
                        </p>
                    </div>
                    <h5>Download Our Free App</h5>
                   <a href="{{url('comingsoon')}}" title="Google Play" target="_blank">
                                   <img src="https://img2.tradewheel.com/template1/images/tradewheelapp/app-btn-11.png" alt="Download from Google Play">
                               </a>
                               <a href="{{url('comingsoon')}}" title="IOS Play" target="_blank">
                                   <img src="https://www.citypng.com/public/uploads/small/11639742555plaimcmhgk1iwsdoussxkmvw5t7hudkccsnzhmlzh1oa1ixznc6qrmbuzqha8r6ktkfm8qvrhz6oo64v8g3nrjqz7ur4sncbuj1g.png" alt="Download from IOS Play" style="width:25%">
                               </a>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="widget3">
                                <h5>Customer Services</h5>
                                <ul>
                                    <li><a href="{{url('/Contactus')}}">Contact Us</a></li>
                                    <li><a href="{{url('/privacyPolicy')}}">Privacy Policy</a></li>
                                    <li><a href="{{url('/refundPolicy')}}">Refund Policy</a></li>
                                    <li><a href="{{url('/faq')}}">Customer FAQ</a></li>
                                    <li><a href="{{url('/maintenance')}}">Tradeshow Services</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="widget3">
                                <h5>About Us</h5>
                                <ul>
                                    <li><a href="{{url('/about')}}">About Exportersway</a></li>
                                    <li><a href="{{url('/review')}}">Customer Reviews</a></li>
                                    <li><a href="{{url('/partners')}}">Our Partners</a></li>
                                    <li><a href="{{'/restriction'}}">Company Restriction</a></li>
                                    <li><a href="{{url('/maintenance')}}">Blog</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3 mb-3 mb-lg-0">
                            <div class="widget3">
                                <h5>For Sellers</h5>
                                <ul>
                                    <li><a href="{{url('/premiumservice')}}">Premium Services</a></li>
                                    <li><a href="{{url('/termandcondition')}}">Terms & Conditions</a></li>
                                    <li><a href="{{url('/maintenance')}}">IPR Policy</a></li>
                                    <li><a href="{{url('product-policy')}}">Product Posting Policy</a></li>
                                    <li><a href="{{url('suppliers')}}">Regions</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget3">
                                <h5>For Buyers</h5>
                                <ul>
                                    <li><a href="{{url('/showlead')}}">Buyers</a></li>
                                    <li><a href="{{url('/maintenance')}}">Trade Leads</a></li>
                                    <li><a href="{{url('/maintenance')}}">Easy Sourcing</a></li>
                                    <li><a href="{{url('/maintenance')}}">Customer Testimonials</a></li>
                                    <li><a href="{{url('/categories')}}">All categories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="socialLinks">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/people/ExportersWay/100076842766250/">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://x.com/ExportersWay">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/exporters._.way?igsh=MTR4cWwxdzdxd3k=">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>


            </div>

            <div class="row">
                <div class="col-12 trending">
                    <h5>Our Top Category</h5>
                    <ul>
                        @php
                        use App\Models\Addcategory;
                        $category = Addcategory::all();
                        @endphp
                        @foreach($category as $row)
                        <li style=" list-style-type: none;">
                            <a style="color: rgb(255, 255, 255);" href="{{ route('category.search', ['slug' => strtolower(str_replace(['&', ' '], ['and', '-'], $row->name))]) }}">
                                {{$row->name}}
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </footer>

    <div class="copyRightArea text-center" style="background-color: #4A4F52;">
        <div class="" style="margin:10px;">
            <div class="row" style="width:100%">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2021-<?php echo date('Y'); ?>, All Right Reserved <a href="https://webcrowdsolutions.com/" style="color:#55a9ff;"> Webcrowd Solutions PVT LTD.</a> </p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">

                        <ul>
                            <li style=" list-style-type: none;"><a href="https://payment.exportersway.com/"><img src="{{ asset('assets/images/small/payment.png')}}"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .widget3 ul li a {
            font-size: .875rem !important;
        }

       .widget3 a,
        a:hover,
        a:focus,
        a:active {
            text-decoration: none;
            outline: none;
        }

       .widget3 a,
        a:active,
        a:focus {
            color: #6f6f6f;
            text-decoration: none;
            transition: color 0.2s ease-in-out;
        }

        .widget3 ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .widget3 img {
            max-width: 100%;
            height: auto;
        }

        .footer {
            padding: 20px 15px;
            background-color: #12151c;
        }

        .footer .widget1 p {
            font-size: 14px;
            color: rgba(255, 255, 255, .6);
        }

        .footer-content {
            margin: 0;
        }

        .footer .logo {
            max-width: 170px;
            margin-bottom: 20px;
        }

        .footer h5 {
            font-weight: 600;
            color: #fff;
            font-size: 18px;
        }

        .footer .widget3 ul li a {
            font-size: 16px;
            color: rgba(255, 255, 255, .6);
            text-transform: capitalize;
            display: block;
            margin-bottom: 10px;
        }

        .footer .widget3 ul li a:hover {
            color: #ffb606;
        }

        .copyRightArea {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .copyRightArea p {
            color: rgba(255, 255, 255, 0.6);
        }

        .footer .socialLinks {
            text-align: end;
            padding-top: 7rem;
        }

        @media (max-width: 600px) {
            .footer .socialLinks {
                padding-top: 0rem !important;
                text-align: start;
                margin-top: 1rem;
            }
        }

        .footer-content {
            margin: 10px;
        }

        .socialLinks ul li {
            display: inline-block;
        }


        .socialLinks ul li a i {
            display: block;
            margin: 0 2px;
            width: 40px;
            height: 40px;
            background: #fafafa;
            border-radius: 50%;
            text-align: center;
            margin-right: 5px;
            line-height: 40px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
        }

        .socialLinks ul li a .fa-facebook-f {
            color: #4267b2;
        }

        .socialLinks ul li a .fa-twitter {
            color: #1da1f2;
        }


        .socialLinks ul li a .fa-instagram {
            color: #FF0D5F;
        }



        .socialLinks ul li a:hover i {
            color: #fff;
        }

        .socialLinks ul li a:hover .fa-facebook-f {
            background: #4267b2;
        }

        .socialLinks ul li a:hover .fa-twitter {
            background: #1da1f2;
        }


        .socialLinks ul li a:hover .fa-instagram {
           background: #FF0D5F;
        }


        footer .trending ul {
            display: inline-block;
            padding-top: 15px;
            width: calc(100% + 30px);
            margin: 0 -15px;
        }

        footer .trending ul li {
            padding: 5px 15px;
            width: -moz-max-content;
            width: max-content;
            float: left;
            font-size: .875rem;
            text-decoration: underline;
            text-decoration-color: white;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('#searchBar__form__input').on('keyup', function() {
                var query = $(this).val();
                if (query.length >= 1) {
                    $.ajax({
                        url: 'search/',
                        type: 'GET',
                        data: {
                            search: query
                        },
                        success: function(response) {
                            var results = '';
                            $.each(response, function(index, book) {
                                results +=
                                    '<a id="current_result">' +
                                    book.subcategoryname + '</a>'
                            });
                            $('#search-results').html(results);
                        }
                    });
                } else {
                    $('#search-results').empty();
                }
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.search-tag').click(function() {
                var searchTerm = $(this).data('value');
                console.log(searchTerm);
                window.location.href = 'searchss?search=' + searchTerm;
            });
        });
    </script>
    <script>
        var searchBar = document.getElementById("topbarid");

        searchBar.addEventListener("click", function(event) {
            if (event.target.tagName === "INPUT") {
                searchBar.classList.add("animate");
            }
        });

        document.addEventListener("click", function(event) {
            if (
                event.target.id !== "searchBar__form__input"
            ) {
                searchBar.classList.remove("animate");
            }
        });
    </script>
    <style>
        .nav-link{
      font-size: 13px;
    }
    @media screen and (max-device-width: 480px) {
    .supplier a {
    min-width: 32%;
    max-width: 12%;
}
.footer-section::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-image: url(https://i.pinimg.com/originals/c3/d3/a3/c3d3a33….jpg); */
    background-image: url(https://exportersway.com/bannerimg/footerlogo.jpg);
    /* background-size: 173% 94%; */
    background-position: center;
    opacity: 13%;
}
}
 
/* For Mobile Landscape View */
@media screen and (max-device-width: 640px)  {
    .supplier a {
    min-width: 32%;
    max-width: 12%;
}
.footer-section::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url(https://exportersway.com/bannerimg/footerlogo.jpg);
    background-position: center;
    opacity: 13%;
}

}
@media only screen and (max-width: 768px) {
 .supplier a {
    min-width: 32%;
    max-width: 12%;
}
    .footer-section::before{
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    /* background-image: url(https://i.pinimg.com/originals/c3/d3/a3/c3d3a33….jpg); */
    background-image: url(https://exportersway.com/bannerimg/footerlogo.jpg);
    /* background-size: 173% 94%; */
    background-position: center;
    opacity: 13%;
}
}

    </style>
</section>

</html>