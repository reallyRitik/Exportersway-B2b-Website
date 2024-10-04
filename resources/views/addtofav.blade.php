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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <section class="background">
        <img src="{{asset('bannerimg\Global-B2B-Buyers.jpg')}}">
    </section>

    <div class="container-fluid">

        <div class="row" style="width:100%">
       
            <div class="col-md-9 col-sm-12">
           
                <div class="row">
                    <div class="col-12 col-lg-7 col-md-7">
                        <h3>Your Favorite Items</h3>
                    </div>
                    <div class="col-12 col-lg-4 col-md-4" style="margin-top: 2%;">
                    <label><input type='checkbox' id='check-all' value='selectall'> Select All</label>&nbsp;&nbsp;&nbsp;
                    <i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Delete All
                    </div>
                    
                </div>
                @if(count($favoriteLeads) > 0)
                @foreach($favoriteLeads as $lead)
                <div class="wbg wbg-new">
                    <div class="row" style="width:100%;">
                        <div class="col-12 col-md-12">
                            <div class="related-bo">
                                <div class="related-bo-list">
                                    <div class="bo-list-left">
                                        <h3>
                                            <a href="" class="intpro"> {{$lead->title}}</a>
                                        </h3>
                                        <div class="bo-flag" style="margin-bottom:5px;">
                                            <div class="span-quantity">
                                                <p>Quantity Required: <stong style=" color: #5d0101;
    font-weight: 600;">{{$lead->qty}} {{$lead->unit}}</stong>
                                                </p>
                                            </div>
                                            <span>
                                                <div class="posted-date-wrapper">
                                                    Posted In :
                                                </div>
                                                <div class="country-name-wrapper"><strong>{{$lead->country}}</strong></div>
                                            </span>
                                        </div>
                                        <p class="bdesc">
                                        {{$lead->message}} </p>
                                        <div class="verification-wrapper">
                                            <div class="verification-name-wrapper">

                                            <span>{{ substr($lead->name, 0, 1) }}</span>
                                            <strong>{{$lead->name}}</strong>
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
                                            {{$lead->created_at->format('Y-m-d')}}
                                        </div>
                                    </div>
                                    <br>
                                    <div class="bo-list-right">
                                        <div class="quote-btn" style="align-items: baseline;
    display: flex;
    flex-direction: row-reverse;">
                                            <div class="showbuttonenquiry" style="    display: ruby-text;">
                                                <a title="Contact Buyer" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp;Remove
                                                </a>
                                                <a title="Contact Buyer" data-toggle="modal" data-target="#myModal"><label><input type='checkbox' id='check-all' value='selectall'> 
                                                Select Inquiry</label>
                                                </a>

                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
    @else
        <p>You haven't added any enquiries to your favorites yet.</p>
    @endif
          

            </div>
             <div class="col-md-3 col-sm-12 col-12 col-lg-3 signup__container sform ">
                <div class="home-signup-cont wt-signupw">
                    <div class="row" style="width: 100%;">
                        <div class="col-12">
                            <div class="form-wrapper-text">
                                <h3>Send Inquiry</h3>
                                <p>Select one or more items from left and type your message below</p>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="width: 100%;">
                        <div class="reg-form form-container">
                            <form mathod="" action="">
                            <div class="col-12 col-xs-12 padr4">
                                    <div class="form-group">
                                        <textarea class="form-control" rows="6" cols="7">Message</textarea>
                                    <!-- <input class="form-control" placeholder="Massage* " required name="massage" type="text"> -->
                                    </div>
                                </div>
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
            background: #fff;
            box-shadow: 0 0 10px #cccccc94;
            padding: 7px 16px 0px 7px;
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

    </script>
    <script data-require="jquery@*" data-semver="2.2.0" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script data-require="bootstrap@*" data-semver="3.3.6" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>

</body>

</html>
@endsection