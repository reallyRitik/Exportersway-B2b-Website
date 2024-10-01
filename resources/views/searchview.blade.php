@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>{{$subcategory->meta_title }}</title>
    <meta name="keywords" content="{{$subcategory->keyword }}"/>
    <link rel="icon" type="image/x-icon" href="https://exportersway.com/companylogo/exportersway-logo.png">
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
    <meta name="description" content="{{$subcategory->meta_desc }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" 
        integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assets/css/catlog.css')}}">
</head>

<body>
    <div class="container-fluid">
        <div class="row" style="width:100%">
            <div class="col-12">
                <div class="datasearch">
                    <ul class="datasearchmain">
                        <li><a href="{{url('/')}}" title="Home">Home</a></li>
                        <li><a href="{{url('suppliers')}}" title="Supplier">Supplier</a></li>
                        <li><a href="" title="Search">Search</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-bottom: 0px;background-color: #fff;padding: 10px; width:100% ;">
        <h2 class="hadingmain">
            {{ str_replace('-', ' ', $subcategory->subcategoryname) }}
        </h2>
        <div class="col-12 col-md-3 col-lg-2 categoryname1">
            <div class="displaycat mb-md-3 pb-md-2">
                <h6 class="p-3 d-none d-md-block mt-md-2 Body3R" style="background-color: #ededed;">Related Categories</h6>
                <ul class="m-0 pl-0 cat-scroll">
                    <!-- Loop through related categories (if any) -->
                    <li class="mb-2 mb-md-0">
                        <a class="d-flex align-items-center justify-content-between pt-2 pb-2 pl-3 pr-3">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            .l2name{
                width: calc(100% - 48px);
    text-transform: capitalize;
            }
            .imagel2>img{
                opacity: 1;
    transition: opacity .3s;
    object-fit: contain;
}
            .imagel2{
                filter: blur(0);
    transition: filter .3s;
            }
            .cat-scroll ul li a {
                width: 100%;
    text-decoration: none;
    background-color: rgb(244, 246, 248);
    border: 1px solid rgb(210, 218, 224);
    border-radius: 4px;
    box-sizing: border-box;
    position: relative;
}
.cat-scroll ul li a::before {
    border-top: 2px solid rgb(94, 115, 132);
    border-right: 2px solid rgb(94, 115, 132);
    position: absolute;
    right: 16px;
    top: 50%;
    transform: rotate(45deg);
    content: "";
    width: 8px;
    height: 8px;
    margin-top: -5px;
    z-index: 2;
}
            @media (min-width: 768px){

.cat-scroll ul li a {
    width: 100%;
    text-decoration: none;
    background: linear-gradient(90deg, rgb(241, 234, 228) -5.09%, rgba(251, 242, 225, 0) 90.72%);
    border-bottom: 1px solid;
    border-image-slice: 1;
    border-top-width: 1px;
    border-right-width: 1px;
    border-left-width: 1px;
    border-image-source: linear-gradient(90deg, rgb(208, 208, 208) 1.36%, rgba(244, 244, 244, 0.4) 98.91%);
    box-sizing: border-box;
}
.cat-scroll ul li a::before {
    border-top: 0px;
    border-right: 0px;
    position: absolute;
    z-index: -3;
}
 .l2name {
    display: -webkit-box;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 2;
    overflow: hidden;
    font-size: 14px!important;
    line-height: 20px!important;
    color: rgb(45, 56, 64);
    font-weight: 400;
}
}
            .cat-scroll {
    overflow-y: auto;
    max-height: 460px;
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

#owl-demo .item{
    outline: none;
    width: 135px
}
/* #owl-demo .item{
  background: #42bdc2;
  padding: 30px 0px;
  margin: 10px;
  color: #FFF;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  text-align: center;
} */
        </style>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script>
            $(document).ready(function() {
 
 $("#owl-demo").owlCarousel({
   navigation : true
 });

});
        </script>
        <style>
            @media (min-width: 768px){
                .l3slider .imgCnt {
    height: 120px;
    box-shadow: rgba(67, 89, 113, 0.12) 0px 2px 6px;
}
            }

/* .owl-item{
    width: 200px !important;
} */
            .l3slider a{
                text-decoration: none;
            }
            .l3slider .imgCnt {
    width: 100%;
    height: 119px;
    border: 1px solid rgb(238, 240, 243);
    border-radius: 8px;
    display: inline-block;
    position: relative;
    box-sizing: border-box;
    min-width: 64px;
}
.showl3{
    filter: blur(0);
    transition: filter .3s;
}
.showl3>img {
    opacity: 1;
    transition: opacity .3s;
}
.imgCnt img {
    object-fit: contain;
}
.owl-item {
    width: 186.444px !important;
}

@media (min-width: 768px){
    .l3slider.showl3name {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-size: 14px!important;
    line-height: 20px!important;
}



}


        </style>
        <div class="col-12 col-lg-10 col-md-10">
            <div id="owl-demo" class="owl-carousel owl-theme">
                @foreach ($subnestedCategory as $subnested)
                    <div class="item">
                        <div class="l3slider">
                              @php
    $categorySlug = Request::segment(2);
    $categorySlugmain = Request::segment(3);
@endphp
                            <a href="{{ URL::to('viewcategory/' . $categorySlug . '/' . $categorySlugmain . '/' . Str::lower($subnested->subnestedcategoryname)) }}">
                                <span class="imgCnt p-3 d-flex align-items-center justify-content-center">
                                    <span class="showl3" style="color: transparent; display: inline-block; height: 108px; width: 100%;">
                                        <img src="{{ asset('subcategoryimage/' . $subnested->subcategoryimage) }}" class="img-height" height="108px" width="100%">
                                    </span>
                                </span>
                                <p color="#2D3840" class="showl3name" style="text-align: center;">{{ $subnested->subnestedcategoryname }}</p>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
         
         
         @foreach($name as $book)
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                                <div class="prod_itm">
                                    <div class="prod-pic">
                                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($book->customer->company_name ?? '')) }}">
                                            <img style="border-radius:4px;width: 100%;height:247px;" 
                                                src="{{ asset('assets/images/Products/' . $book->images) }}" class="img-resp">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-12 col-md-8 col-lg-8">
                                <div class="package_img">
                                    <img src="https://img2.tradewheel.com/template1/images/icons/gold-advance-txt-m.png.webp">
                                    <span>
                                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($book->customer->company_name ?? '')) }}" 
                                            style="font-size: 22px; font-weight: 600;">
                                            {{$book->title}}
                                        </a>
                                    </span>
                                    <div class="mamber">
                                        <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($book->customer->company_name ?? '')) }}" 
                                            class="search-tag">
                                            {{ $book->customer->company_name ?? '' }}
                                        </a>
                                    </div>
                                </div>
                                <div class="details">
                                    <table class="table table-responsive comp_details">
                                        <tbody>
                                            <tr>
                                                <td class="td1">Main Products</td>
                                                <td class="td2">{{$book->title}}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Country</td>
                                                <td class="td2">{{ $book->customer->country ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="td1">Website</td>
                                                <td class="td2">
                                                    <a href="{{ $book->customer->website ?? '' }}" target="_blank">{{ $book->customer->website ?? '' }}</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            
          <div class="d-flex justify-content-center">
                {{ $name->links('pagination::simple-bootstrap-4') }}
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
    /* .details {
    width: calc(99% - 420px);
} */
    /* @media only screen and (max-width: 600px) {
    .displaycat {
   display: none;
  } */

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
        /* padding: 15px;
        background-color: rgb(255, 255, 255);
    box-shadow: rgba(67, 89, 113, 0.12) 0px 2px 6px;
    border-radius: 8px;
    transition: all 0.3s ease 0s;
        margin-bottom: 20px; */
        background-color: rgb(255, 255, 255);
    box-shadow: rgba(67, 89, 113, 0.12) 0px 2px 6px;
    border-radius: 8px;
    transition: all 0.3s ease 0s;
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

    /* .prodimg img {
        max-width: 115px;
        vertical-align: middle;
    } */

    /* .prodimg {
        overflow: hidden;
        max-height: 115px;
    } */

    /* .prod-pic {
        width: 115px;
        height: 115px;
        border: 1px solid #ededed;
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        overflow: hidden !important;
    } */

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
        padding: 15px;
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
</body>

</html>
@endsection