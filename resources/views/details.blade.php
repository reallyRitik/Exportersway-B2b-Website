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
        <meta name="author" content="Exporters Way">
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="canonical" href="https://www.exportersway.com/"/>
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/companylogo/logo.png')}}">
         <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://www.exportersway.com/">
        <meta property="og:title" content="Exporters Way - World Fastest Growing B2B Network">
        <meta property="og:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
        <meta property="og:image" content="{{ asset('assets/images/companylogo/logo.png')}}">

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
</head>

<body>
    <section class="background">
        <img src="{{asset('bannerimg/Global-B2B-Buyers.jpg')}}">
    </section>
    <section class="topheading">
        <div class="container-fluid">
            <div class="row" style="width:100%">
                <div class="col-12">
                    <div class="headname">
                        <ul class="headname1">
                            <li>Home</li>
                            <li>/</li>
                            <li>Buyer</li>
                            <li>/</li>
                            <li>{{$lead->title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section>
        <div class="row" style="width:100%">

            <div class="col-sm-12 details">
                    <h1>
                        {{$lead->title}}
                    </h1>
                    <div class="bo-attr-cont">
                        <div class="bo-attr-left">
                            <ul class="bo-leftattr">
                                <li>
                                    <span>
                                        Purchaser
                                    </span>
                                    {{ $lead->name }}
                                </li>
                                <li>
                                    <span>
                                        Country
                                    </span>
                                    {{ $lead->country }}
                                </li>
                                <li>
                                    <span>
                                        Contact Number
                                    </span>
                                    &nbsp;
                                    <a  href="tel:{{$lead->mobile}}" style="color: #ff6701;" >{{$lead->mobile}}</a>
                                </li>
                                 <li>
                                    <span>
                                        Company Name
                                    </span>
                                   {{$lead->company_name}}
                                </li>
                                 <li>
                                    <span>
                                        Unit
                                    </span>
                                   {{$lead->qty}} {{$lead->unit}}
                                </li>
                                <li>
                                    <span>
                                       Email
                                    </span>
                                   {{$lead->email}}
                                </li>
                            </ul>
                        </div>
                </div>
                <h4 class="rel-wrapper">Buy offer Details</h4>
<p class="alldetails">
Hello.
<br>
{{$lead->message}}
<br>
<br>
Greetings,
<br>
{{$lead->name}}
</p>

            </div>
        </div>
    </section>
    <style>
        
      
        .alldetails{
            font-size: 18px;
    word-break: break-word;
    color: #333;
    line-height: 20px;
        }
        .rel-wrapper:before {
    content: "";
    background: #ff6701;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 40px;
    height: 2px;
}
        .rel-wrapper {
    display: block;
    font-weight: 600;
    font-size: 18px;
    margin-bottom: 10px;
    position: relative;
    padding-bottom: 7px;
}
        ul.bo-leftattr li span {
            color: #878787;
            width: 125px;
            display: inline-block;
            font-size: 14px;
        }

        ul.bo-leftattr li span {
            font-size: 17px;
        }

        ul.bo-leftattr li {
            font-size: 15px;
            color: #333;
            padding: 0 10px 4px 0;
            border: 0;
            margin-bottom: 2px;
        }

        ul.bo-leftattr li {
            font-size: 18px;
            list-style-type: none;
        }

        .bo-attr-left,
        .bo-attr-right {
            display: table-cell;
            width: 50%;
            vertical-align: top;
        }

        .bo-attr-cont {
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .bo-attr-cont {
            display: table;
            width: 100%;
            margin-top: 30px;
            margin-left: 9px;
            float: left;
        }

        .details {
            background-color: aliceblue;
            margin-top: 20px;
    padding: 20px 20px 25px;
    position: relative;
    margin-bottom: 10px;
        }

        .details h1 {
            font-size: 24px;
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>
@endsection