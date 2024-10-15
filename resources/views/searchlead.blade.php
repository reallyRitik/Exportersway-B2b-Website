@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>ExportersWay | Global B2b Marketplace | Show Lead</title>
    <meta name="keywords" content="Global B2b Marketplace, B2b Online Marketplace, Online B2b Marketplace Platform,b2b Marketplace, B2b Online Portal, Signup, Register, Login, Sign In" />
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
    <meta name="description" content="We're here to help you grow your business with leads. Access our list of global B2B buyers, importers, and purchase managers. Let's get started today.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="Daily days">
    <meta name="author" content="Exporters Way">
    <link rel="canonical" href="https://www.exportersway.com/" />
    <link rel="icon" type="image/x-icon" href="{{ asset('companylogo/exportersway-logo.png')}}">
    <link data-require="bootstrap-css@3.3.6" data-semver="3.3.6" rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.css" />
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css" />
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="geo.region" content="IN-DL" />
    <meta name="geo.placename" content="Delhi" />
    <meta name="geo.position" content="28.694715;77.154261" />
    <meta name="ICBM" content="28.694715, 77.154261" />
</head>

<body>
    <section class="background">
        <img src="{{asset('bannerimg\Global-B2B-Buyers.jpg')}}">
    </section>
    <section class="topheading">

        <div class="container-fluid">
            <div class="row" style="width:100%">
                <div class="col-12">
                    <h1>List of Global B2B Buyers, Importers, and Purchase Managers</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="searchsection">
        <div class="container-fluid">
            <div class="row" style="width:100%">
                <div class="col-md-2">
                    <div class="buyers">
                        Buyers
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 searchinput">
                    <div class="mainsearch">
                        <form action="{{ route('searchLead') }}" method="GET">
                            <div class="search-fields-cont">
                                <div class="search-col2">
                                    <input name="title" class="form-control" type="text" placeholder="search lead you are looking? " value="{{ request('title') }}" style="border: 1px solid red !important;
    border-radius: 6px 0px 0px 6px;">
                                    <button type="submit" class="search_submit_btn" style="background: #393531;">
                                        <i class="search-icon"></i>
                                    </button>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
                @if(Auth::check() && $hasFavorites)
    <div class="col-md-4 col-lg-4 text-center">
        <a href="{{ url('addtofavorite') }}" class="btn add-to-favorites">
            <i class="fas fa-heart"></i> View Your Favorites Item
        </a>
    </div>
@endif
            </div>
        </div>
    </section>

    <div class="container-fluid">
        <div class="row" style="width:100%">
            <div class="col-md-3 col-sm-12 col-12 col-lg-3 signup__container sform ">
                <div class="home-signup-cont wt-signupw">
                    <div class="row" style="width: 100%;">
                        <div class="col-12">
                            <div class="form-wrapper-text">
                                <h3>Let us Connect you</h3>
                                <h4>with Relevant Buyers</h4>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="width: 100%;">
                        <div class="reg-form form-container">
                            <form mathod="" action="">
                                <div class="col-12 col-xs-12 padr4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Full Name* " required name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-xs-12 padr4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mobile* " required name="mobile" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-xs-12 padr4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email* " required name="email" type="text">
                                    </div>
                                </div>
                                <div class="col-12 col-xs-12 padr4">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Massage* " required name="massage" type="text">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="boltop-btn-cont text-center mt10">
                                        <button type="submit" class="btn boltop-btn btn-submit">Submit
                                            <img src="https://img2.tradewheel.com/template1/images/arrow-rights.png" class="img-responsive">
                                        </button>
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9 col-sm-12">


                @foreach($leads as $row)
                @if($row->active == 1)
                <div class="wbg wbg-new">
                    <div class="row" style="width:100%;">
                        <div class="col-12 col-md-12">
                            <div class="related-bo">
                                <div class="related-bo-list">
                                    <div class="bo-list-left">
                                        <h3>
                                            <a href="{{ route('leaddetails', ['id' => $row->id]) }}" class="intpro"> {{$row->title}}</a>
                                        </h3>
                                        <div class="bo-flag" style="margin-bottom:5px;">
                                            <div class="span-quantity">
                                                <p>Quantity Required: <stong style=" color: #5d0101;
    font-weight: 600;">{{$row->qty}}{{$row->unit}}</stong>
                                                </p>
                                            </div>
                                            <span>
                                                <div class="posted-date-wrapper">
                                                    Posted In :
                                                </div>
                                                <div class="country-name-wrapper"><strong>{{$row->country}}</strong></div>
                                            </span>
                                        </div>
                                        <p class="bdesc">
                                            {{$row->message}}
                                        </p>
                                        <div class="verification-wrapper">
                                            <div class="verification-name-wrapper">

                                                <span>{{ substr($row->name, 0, 1) }}</span>
                                                <strong>{{$row->name}}</strong>
                                            </div>
                                            <div class="verification-email-wrapper">
                                                <h4 style="font-size: 14px;">
                                                    <span><img src="https://img2.tradewheel.com/template1/images/check-icons.png"></span>
                                                    E-mail Verified
                                                </h4>
                                            </div>
                                        </div>
                                        <div class="rbo-specs" style="margin-top:5px;">
                                            <span>Date Posted: </span>
                                            {{$row->created_at->format('Y-m-d')}}
                                        </div>
                                    </div>
                                    <div class="bo-list-right">
                                        <div class="quote-btn">
                                            <div class="showbuttonenquiry" style="    display: ruby-text;">
                                                <a title="Contact Buyer" data-toggle="modal" data-target="#myModal"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp; Inquire Now
                                                </a>
                                                &nbsp; &nbsp; @if(Auth::check()) <!-- Check if user is logged in -->
                                                <a href="{{ route('addtofav', ['lead_id' => $row->id]) }}" id="addToFav{{$row->id}}">
                                                    <i class="fa-solid fa-heart"></i> Add to favorite
                                                </a>
                                                @endif
                                            </div>
                                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-body">

                                                            <div class="row">
                                                                <div class="col-md-12 form-container">
                                                                    <div class=" wt-signupwgg">
                                                                        <div class="row" style="width: 100%;">
                                                                            <div class="col-12">
                                                                                <div class="form-wrapper-text">
                                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                                                    <h3 style="color: #596b06;
    font-size: 27px;
    margin-top: 20px;"> <b>Register Your Comapny</b></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                        <div class="row" style="width: 100%;">
                                                                            <div class="reg-form form-container">
                                                                                <form method="POST" action="{{ route('register') }}">
                                                                                    @csrf
                                                                                    <div class="col-12 col-xs-12 padr4">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" id="name" type="text" class="input100{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Enter Your Name">
                                                                                            <span class="focus-input100"></span>
                                                                                            @if ($errors->has('name'))
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $errors->first('name') }}</strong>
                                                                                            </span>
                                                                                            @endif

                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12 col-xs-12 padr4">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" id="email" type="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required placeholder="E-Mail Address">
                                                                                            <span class="focus-input100"></span>
                                                                                            @if ($errors->has('email'))
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $errors->first('email') }}</strong>
                                                                                            </span>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-12 col-xs-12 padr4">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" type="password" placeholder="*****" name="password" id="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" required>
                                                                                            <span class="focus-input100"></span>
                                                                                            @if ($errors->has('password'))
                                                                                            <span class="invalid-feedback" role="alert">
                                                                                                <strong>{{ $errors->first('password') }}</strong>
                                                                                            </span>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-12 col-xs-12 padr4">
                                                                                        <div class="form-group">
                                                                                            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" required placeholder="Confirm Password" class="input100">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <label style="color: #efefef;font-size: 12px;color: #636363;">
                                                                                            <input type="checkbox" checked required style="vertical-align: sub;"> I agree to Terms and Conditions <span style="color: red;">*</span></input>
                                                                                    </div>
                                                                                    <div class="col-xs-12">
                                                                                        <div class="boltop-btn-cont text-center mt10">
                                                                                            <button type="submit" class="btn boltop-btn btn-submit">Submit
                                                                                                <img src="https://img2.tradewheel.com/template1/images/arrow-rights.png" class="img-responsive">
                                                                                            </button>
                                                                                        </div>

                                                                                    </div>



                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                    <!-- modal -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                <div class="d-flex justify-content-center">
                    {{ $leads->links('pagination::simple-bootstrap-4') }}
                </div>

            </div>
        </div>

    </div>
    <style>
        .wt-signupwgg {
            background: #fff;
            border-radius: 15px;
            min-height: 330px;

        }

        .forminput {
            height: 40px;
            font-size: 16px;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            border-radius: 0;
            box-shadow: none;
            background-color: #fff;
            padding: 6px 10px;
            transition: all .3s ease 0s;
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
        }

        .formdata {
            margin-bottom: 8px;
        }
    </style>

    <script>
        $('.modal-content').resizable({
            //alsoResize: ".modal-dialog",
            minHeight: 300,
            minWidth: 300
        });
        $('.modal-dialog').draggable();

        $('#myModal').on('show.bs.modal', function() {
            $(this).find('.modal-body').css({
                'max-height': '60%'
            });
        });
    </script>
    <style>
        .intpro:hover {
            color: #C77F60;
        }

        .btn-theme {
            background-color: #000000;
            background-image: linear-gradient(315deg, #a1a09e 0%, #484b4c 74%);
            color: #fff;
            font-size: 18px;
            font-weight: 400;
            border-radius: 3px;
            padding: 5px 20px;
        }

        .btn-theme {
            white-space: unset !important;
            border-radius: 25px;
            box-shadow: 2px 5px 10px #ccc;
        }


        .quote-btn {
            margin-top: 25px;
        }

        .bo-list-right {
            display: inline-block;
            width: 180px;
            text-align: center;
            vertical-align: top;
            padding-top: 35px;
        }

        .related-bo ul li .bo-list-right,
        .related-bo-list .bo-list-right {
            padding-top: 12px;
        }

        .rbo-specs,
        .rbo-specs span {
            font-size: 14px;
            color: #656464 !important;
            font-weight: 400;
            margin-bottom: 5px;
        }

        .verification-email-wrapper h4 span img {
            width: 14px;
            top: -2px !important;
        }

        .verification-email-wrapper span img {
            display: inline-block;
            position: relative;
            top: 2px;
        }

        .verification-email-wrapper span {
            display: inline-block;
            margin-right: 4px;
        }

        .verification-email-wrapper h4 {
            display: inline-block;
            margin-right: 10px;
            color: #7b671d;
        }

        .verification-email-wrapper {
            display: inline-block;
            margin-left: 10px;
        }

        .verification-name-wrapper span {
            background: #cccccc63;
            width: 22px;
            height: 22px;
            display: inline-block;
            text-align: center;
            line-height: 22px;
            border-radius: 25px;
            font-size: 16px;
        }

        .verification-name-wrapper {
            display: inline-block;
            margin-bottom: 10px;
        }

        .verification-wrapper {
            margin-top: 20px;
        }

        .wbg p.bdesc {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .wbg p {
            font-size: 16px;
            color: #333;
            line-height: 18px;
            margin-bottom: 10px;
        }

        .bo-flag {
            display: inline-flex;
        }

        .country-name-wrapper {
            display: inline-block;
            color: #1e1f14;
        }

        .posted-date-wrapper {
            display: inline-block;
        }

        .span-quantity p strong {
            color: #97a22e;
            font-size: 14px;
        }

        .wbg p {
            font-size: 16px;
            color: #333;
            line-height: 18px;
            margin-bottom: 10px;
        }

        .span-quantity p {
            color: #767676;
        }

        .span-quantity {
            margin-right: 30px;
        }

        .related-bo-list h3 a {
            font-size: 18px;
            color: #935401;
            text-transform: uppercase;
        }

        .wbg h3 {
            font-size: 20px;
            color: #333;
            font-weight: 600;
            margin-bottom: 10px;
        }

        .related-bo-list h3 {
            color: #4a4a4a;
            margin-bottom: 12px;
        }



        .related-bo-list {
            background-color: #fff;
            border: 3px solid #efeeee;
            padding: 15px 20px 15px;
            margin-bottom: 10px;
            min-height: 148px;
        }

        .related-bo-list {
            border: unset;
            box-shadow: 0 0 10px #cccccc45;
            border-radius: 5px;
            background-color: #d8d8d8;
        }

        .related-bo {
            margin-top: 10px;
        }

        .wbg {
            background-color: #fff;
        }

        .btn-submit img {
            margin: unset !important;
            display: inline-block;
        }

        .btn-submit,
        body .btn-theme {
            white-space: unset !important;
            border-radius: 25px;
            box-shadow: 2px 5px 10px #ccc;
        }

        .btn-submit {
            display: inline-block !important;
            width: auto;
        }

        .boltop-btn {
            background-color: #ce672a;
            color: #fff;
            font-size: 18px;
            font-weight: 500;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            padding: 3px 35px;
            display: block;
            width: 100%;
            height: 34px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .padr4 {
            padding-right: 4px;
        }

        .form-wrapper-text h3,
        .form-wrapper-text h4 {
            line-height: 28px;
            font-weight: 600;
        }

        .form-wrapper-text h3 {
            color: #ce672a;
            font-size: 24px;
        }

        .form-wrapper-text {
            text-align: center;
        }

        .home-signup-cont {
            margin-bottom: 30px;
        }

        .home-signup-cont {
            background: #fff;
            box-shadow: 0 0 10px #cccccc94;
            padding: 10px 20px 20px 15px;
            border-radius: 15px;
            min-height: 330px;
            margin-top: 10px;
        }

        #counter {
            display: inline-flex;
        }

        @media only screen and (min-width: 1140px) and (max-width: 2400px) {
            body li.RFQs-Count-total span.count.percent {
                letter-spacing: 13px;
            }
        }

        li.RFQs-Count-total span.count.percent {
            font-size: 35px;
            color: #f06924;
            font-weight: 700;
            letter-spacing: 12px;
            text-align: center;
            display: inline-block;
        }

        li.RFQs-Count-total {
            margin-left: 26px;
        }

        @media only screen and (min-width: 1140px) and (max-width: 2400px) {
            li.RFQs-Count-total {
                background-size: contain !important;
            }
        }

        @media only screen and (min-width: 1140px) and (max-width: 2400px) {
            body li.RFQs-Count-total {
                width: 200px;
                padding: 0 0 0 12px !important;
            }
        }

        li.RFQs-Count {
            position: relative !important;
            top: -7px;
        }

        ul#counter li {
            text-align: center;
            font-size: 18px;
            display: flex;
        }

        .totalcount {
            text-align: right;
            display: flex;
        }

        .search-icon {
            width: 12px;
            height: 12px;
            background-size: contain;

            background: url(https://img2.tradewheel.com/template1/images/search-icon.png) no-repeat 0 0;
            width: 15px;
            height: 15px;
            display: inline-block;
            margin-right: 6px;

        }

        button#search_submit_btn {
            border-radius: unset !important;
            width: unset;
            padding: 13px 40px !important;
            height: 41px !important;
            background: #393531;
        }

        .form-control {
            display: block;
            width: 100%;

            border: 1px solid #ccc;
            height: 34px;
            padding: 6px 12px !important;
            font-size: 14px;
            color: #555;
            border-radius: 4px;

        }

        .search-col2 input {
            font-size: 12px;
            border: none !important;
            box-shadow: none;
            height: 34px;
        }

        .search-col2 {
            width: calc(100% - 0px) !important;
            height: 34px;
            display: flex;
        }

        .search-fields-cont {
            margin-top: 2px;
            width: calc(100% - 144px);
            float: left;
        }

        .main-search {
            overflow: hidden;
            margin-top: 1px;
            padding-bottom: 0 !important;
            padding-top: 0 !important;
            padding-right: 0;
            padding: 2px;
            background-color: #fff;
        }

        body .main-search {
            border-radius: unset !important;
            border: unset;
            margin-left: 0 !important;
            height: 41px !important;
        }

        .searchinput {
            padding-left: 0;
        }

        .buyers {
            position: relative;
            display: inline-block;
            color: #ff6701;
            box-shadow: 2px 5px 10px #cccccca3;
            background: #fff;
            width: 100%;
            padding: 7px 40px !important;
            text-align: center;
        }

        .searchsection {
            padding: 10px 0 20px;
        }

        .topheading h1 {
            font-size: 22px;
            color: #344e69;
            font-weight: 600;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .headname1>li {
            display: inline-block;
            font-size: 15px;
        }

        .headname .headname1 {
            background-color: transparent;
            padding: 6px 0;
            margin-bottom: 0;
        }

        .container-fluid {
            max-width: 1440px;
            padding-right: 10px;
            padding-left: 10px;
            margin-right: auto;
            margin-left: auto;
        }

        .topheading {
            padding-top: 5px;
        }

        .background img {
            min-width: 100%;
            max-width: 100%;
        }
    </style>

    <script>
        $(document).ready(function() {
            $('#searchForm').on('submit', function(event) {
                event.preventDefault(); // Prevent the form from submitting

                var searchQuery = $(this).find('input[name="dataserch"]').val();

                filterLeads(searchQuery);
            });
        });

        function filterLeads(searchQuery) {
            var leadCards = $('.wbg.wbg-new');

            leadCards.each(function() {
                var leadName = $(this).find('.intpro').text();
                var leadIndustry = $(this).find('.bdesc').text();

                if (leadName.toLowerCase().includes(searchQuery.toLowerCase()) || leadIndustry.toLowerCase().includes(searchQuery.toLowerCase())) {
                    $(this).show(); // Show the card if the search query matches the lead's name or industry
                } else {
                    $(this).hide(); // Hide the card if the search query doesn't match
                }
            });
        }   
    </script>
    <script>
        @if(session('status') == 'added')
        alert('Product saved to favorites!');
        if (confirm("Go to favorites?")) {
            window.location.href = "{{ url('addtofavorite') }}";
        }
        @elseif(session('status') == 'already_saved')
        alert('Product already saved in favorites!'); 
        if (confirm("Go to favorites?")) {
            window.location.href = "{{ url('addtofavorite') }}";
        }
        @endif
    </script>
    <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.3.6" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

</body>

</html>
@endsection