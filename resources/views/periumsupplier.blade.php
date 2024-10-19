
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

  <link rel="stylesheet" href="{{ asset('assets/css/company.css')}}">


<body>
<div class="row" style="width: 100%; margin:-1px;">
  <div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 mobile-full-width ">
<h3 class="general-heading">
  <strong>Latest</strong> Buy Offers
  <a style="font-size: 12px;text-decoration:none;" title="latest Buyoffers" href="{{url('/showlead')}}">(Show All)</a>
</h3>
  <div class="owl-carousel owl-theme">
  @foreach ($lead as $index => $row)
  @if ($index % 6 == 0)
    <ul class="br-list">
  @endif

  <li>
  <a title="Want To Purchase Paper Cups" href="{{url('leaddetails/' . $row->id)}}">
   <img class="country-flag"   src="{{ asset('assets/images/flags/' . $row->country . '.svg') }}" alt="" style="height: 11px!important;
    margin: -5px!important;">
    <span>{{$row->created_at->format('Y-m-d')}}</span>
    <b>{{$row->title}}</b>
  </a>
</li>

  @if ($index % 6 == 5 || $index == count($lead) - 1)
    </ul>
  @endif
@endforeach
                 
</div>
  </div>




  <div class="col-md-3 col-sm-12 col-xs-12 col-lg-3 mobile-full-width ">
  <h3 class="general-heading">
  <strong>Latest</strong>  Products 
  <!-- <a style="font-size: 12px;text-decoration:none;" title="latest Buyoffers"  >(Show All)</a> -->
</h3>
  <div class="owl-carousel owl-theme">
@foreach ($productname as $index => $row)
  @if ($index % 3 == 0)
  <div class="item">
  @endif
 
          <div class="lproducts-item-cont">
<div class="lproducts-item">
<div class="lproducts-left">

<a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($row->customer->company_name ?? '')) }}" >

  <img class="lazyloaded" src="{{ asset('assets/images/Products/' . $row->images) }}">

</a>
</div>
<div class="lproducts-right">
<h4>
  <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($row->customer->company_name ?? '')) }}">{{$row->title}}</a>
</h4>
<span>
  <a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($row->customer->company_name ?? '')) }}">{{ $row->customer ? $row->customer->company_name : 'No customer' }}</a>
</span>
<div class="l_pro-anchor">
<a href="{{ URL::to('viewcompany') }}/{{ str_replace(' ', '-', Str::lower($row->customer->company_name ?? '')) }}" style="    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
    color: #337ab7;
    text-decoration: none;
    border-top:1px solid black;">
                    View Details >>
                  </a>
</div>
</div>
</div>
          </div>
            
              @if ($index % 3 == 2 || $index == count($productname) - 1)
              </div>
  @endif
@endforeach
             
</div>
  </div>



  <div class="col-md-3 col-xs-12 col-lg-3 mobile-full-width ">
  <h3 class="general-heading">
  <strong>Success</strong>Stories
</h3>
  <div class="owl-carousel owl-theme">
  <div class="item">
      <div class="success-story-para">
<div class="success-story-paragraph">
<p>

For more than two decades, we have been associated with Exportersway, which has helped in increasing the demand for our products in both the domestic and international markets.
</p>
</div>
<div class="success-story-border-bottom">
<div class="success-story-left">
<h6>
Franklin C.
</h6>
<p>
  <a href="{{url('viewcompany/Swift-Thirty-Six-Enterprises-Ltd')}}" class="companynameid">
  Swift Thirty-Six Enterprises Ltd
  </a>
</p>
<div class="s_story-anchor">
<span style="font-size: 12px;font-weight: 400;color: #767676;">

Growing
</span>
</div>
</div>

<div class="success-story-right ">
<a href="{{url('viewcompany/Swift-Thirty-Six-Enterprises-Ltd')}}">
<img style="width: 38px;
    height: 21px;" class="img-responsive lazyloaded"src="{{asset('assets/images/companylogo/Swift-Thirty-Six -Enterprises-Limited.png')}}">    

</a>
</div>
</div>
      </div>
                
</div>
  <div class="item">
      <div class="success-story-para">
<div class="success-story-paragraph">
<p>

Thanks for work  You are doing for us, we will very happy with your work & appreciate your hard working. We will give score of 4.7 out of 5. We will keep in touch with you.
</p>
</div>
<div class="success-story-border-bottom">
<div class="success-story-left">
<h6 style>
HiraniMansukh Dev
</h6>
<p>
<a href="{{url('viewcompany/KRISHNA-AGRO-CENTER')}}" class="companynameid">
                  KRISHNA AGRO CENTER
                  </a>
</p>
<div class="s_story-anchor">
<span style="font-size: 12px;font-weight: 400;color: #767676;">
Pro
</span>
</div>
</div>

<div class="success-story-right ">
<a href="{{url('viewcompany/KRISHNA-AGRO-CENTER')}}">
<img style="width: 38px;
    height: 29px;" class="img-responsive lazyloaded"src="{{asset('assets/images/companylogo/Krishna-Agro-Center.png')}}">

</a>
</div>
</div>
      </div>
                
</div>
  <div class="item">
      <div class="success-story-para">
<div class="success-story-paragraph">
<p>

We are associated with Exportersway from last  one year. It is a very nice and useful  global B2B 
portal.  I am very much satisfied with the services.
</p>
</div>
<div class="success-story-border-bottom">
<div class="success-story-left">
<h6>
Rana Rehman
</h6>
<p>
<a href="{{url('viewcompany/NATIONAL-SALT-LAMPS-TRADERS-')}}" class="companynameid">
                  NATIONAL SALT LAMPS TRADERS
                  </a>
</p>
<div class="s_story-anchor">
<span style="font-size: 12px;font-weight: 400;color: #767676;">
Elite Plus
</span>
</div>
</div>

<div class="success-story-right ">
<a  href="{{url('viewcompany/NATIONAL-SALT-LAMPS-TRADERS-')}}">
<img style="width: 40px;
    height: 29px;" class="img-responsive lazyloaded"src="{{asset('assets/images/companylogo/National-Salt-Lamp-Traders.png')}}">

</a>
</div>
</div>
      </div>
                
</div>
  </div>
</div>
 
  <script>
    $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
			  
                items: 1,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 5000,
              });
            })
  </script>
  <style>
    .success-story-right img {
    max-width: 60px;
    overflow: hidden;
    max-height: 100%;
}
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    max-width: 57px;
    max-height: 61px;
}
  .success-story-right {
    display: table-cell;
    width: 60px;
    height: 60px;
    border: 2px solid #f4f4f4;
    text-align: center;
    vertical-align: middle;
    position: relative;
}
.success-story-left p {
    margin-bottom: 0;
    font-size: 12px;
    color: #767676;
}
.success-story-left p {
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}
    .success-story-left h6 {
    margin: 0;
    color: #444;
    font-size: 14px;
    font-weight: 500;
}
    .success-story-left {
    display: block;
    float: left;
    width: calc(100% - 60px);
    text-align: left;
    vertical-align: middle;
    padding-right: 5px;
}
   
    .success-story-border-bottom {
    border-bottom: solid 1px #ccc;
    padding-bottom: 10px;
}
    .success-story-paragraph p {
    color: #767676;
    font-size: 14px;
    font-style: italic;
}
.success-story-paragraph {
    border-bottom: solid 1px #ccc;
    margin-bottom: 10px;
    min-height: 137px;
}
.success-story-paragraph p {
    display: -webkit-box;
    -webkit-line-clamp: 7;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}
    .success-story-para {
    height: initial!important;
    min-height: 273px;
}
    .success-story-para {
    padding: 15px 15px 35px 15px;
    background-color: #fff;
    padding-bottom: 0;
}
    .lproducts-right span a {
    font-size: 12px;
    color: #767676;
}
.lproducts-right a {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}
.lproducts-right a {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}
    .lproducts-right h4 {
    margin-bottom: 0;
}
.lproducts-right h4 a {
    font-size: 14px;
    color: #444;
    font-weight: 500;
    text-transform: capitalize;
}
.companynameid:hover{
    color:#aba28e;
}
.lproducts-right a {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
    margin-bottom: 0;
}
    .lproducts-right {
    display: table-cell;
    width: calc(100% - 60px);
    text-align: left;
    vertical-align: middle;
    padding-left: 10px;
}
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    max-width: 57px;
    max-height: 61px;
}
.lproducts-left img {
    max-height: 56px;
}
.lproducts-left img {
    max-width: 56px;
    overflow: hidden;
    max-height: 100%;
}
    .owl-carousel .owl-item img {
    display: block;
    width: 100%;
    max-width: 57px;
    max-height: 61px;
}
    .lproducts-left {
    display: table-cell;
    width: 60px;
    height: 60px;
    border: 2px solid #f4f4f4;
    text-align: center;
    vertical-align: middle;
}
  .lproducts-item {
    display: table;
    width: 100%;
}
    .lproducts-item-cont {
    margin-bottom: 6px;
    padding-right: 0;
    background-color: #fff;
    padding: 10px 0 8px 7px;
    height: 87px;
}
    ul.br-list li a b {
    margin-left: 36px;
    font-weight: 400;
}
    ul.br-list li span {
    margin-left: 20px;
    text-transform: capitalize;
    float: right;
    margin-right: 10px;
    color: #767676;
    font-size: 12px;
}
    /* .country-flag.pk {
    height: 14px;
    background-position: -4009px 0;
} */
.country-flag {
    box-shadow: 0 0 1px 0 #dcdcdc;
    background-repeat: no-repeat;
    background-color: #dbdbdb;
    background-position: 10px 0;
    position: relative;
    width: 10px!important;
    max-width: 20px!important;
}
.country-flag {
    margin-right: 5px;
    vertical-align: bottom;
    display: inline-block;
    max-width: 15px!important;
    height: 15px;
}
ul.br-list li a {
    display: block;
    width: 100%;
    padding: 10px;
}

ul.br-list li a {
    color: #767676;
    font-weight: 400;
    font-size: 14px;
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}


    
    ul.br-list li:before {
    content: "";
    background-color: #f2f3f7;
    width: 2px;
    height: 41px;
    position: absolute;
    left: 40px;
    top: 0;
}
ul.br-list li {
    padding: 0px;
}
    ul.br-list li {
    list-style: none;
    background-color: #fff;
    margin-bottom: 6px;
    padding: 10px 0 10px 10px;
    position: relative;
    height: 40.5px;
}
    .general-heading strong {
    font-weight: 700;
}
.general-heading {
    margin: 0 0 6px 0;
    padding: 10px 0 10px 10px;
    background-color:#aba28e;
    font-size: 18px;
    font-weight: 500;
}


@media screen
    and (max-device-width: 768px) {
    .general-heading {
       margin: -3px 2px 7px -5px;
    padding: 10px 10px 10px 10px;
    background-color: #aba28e;
    font-size: 18px;
    font-weight: 500;
    }
    ul.br-list li {
    list-style: none;
    background-color: #fff;
    margin-bottom: x;
    margin: -4px 4px 7px -8px;
    padding: 10px 0 10px 10px;
    position: relative;
    height: 40.5px;
}
}
@media screen
    and (max-device-width: 640px) {
   .general-heading {
       margin: -3px 2px 7px -5px;
    padding: 10px 10px 10px 10px;
    background-color: #aba28e;
    font-size: 18px;
    font-weight: 500;
    }
    ul.br-list li {
    list-style: none;
    background-color: #fff;
    margin-bottom: x;
    margin: -4px 4px 7px -8px;
    padding: 10px 0 10px 10px;
    position: relative;
    height: 40.5px;
}
}
@media screen
    and (max-device-width: 568px) {
   .general-heading {
       margin: -3px 2px 7px -5px;
    padding: 10px 10px 10px 10px;
    background-color: #aba28e;
    font-size: 18px;
    font-weight: 500;
    }
    ul.br-list li {
    list-style: none;
    background-color: #fff;
    margin-bottom: x;
    margin: -4px 4px 7px -8px;
    padding: 10px 0 10px 10px;
    position: relative;
    height: 40.5px;
}
@media screen
    and (max-device-width: 667px) {
   .general-heading {
       margin: -3px 2px 7px -5px;
    padding: 10px 10px 10px 10px;
    background-color: #aba28e;
    font-size: 18px;
    font-weight: 500;
    }
    ul.br-list li {
    list-style: none;
    background-color: #fff;
    margin-bottom: x;
    margin: -4px 4px 7px -8px;
    padding: 10px 0 10px 10px;
    position: relative;
    height: 40.5px;
}
}





    .owl-carousel .item{
		padding:0 !important;
		height:285px !important;;
	}

	.owl-carousel .owl-item div{
           position: relative;
           overflow: hidden;
         }
      .owl-carousel .owl-item img{
           display: block;
           width: 100%;
           height: 3rem;
           max-height:3rem;
           -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
           border-radius: 3px;
           max-height: 1490px;
function:linear;
         }
 .owl-carousel .owl-item:nth-child(even) img{
             -webkit-transform: scale(1.4);
             -ms-transform: scale(1.4);
             transform: scale(1.4);
             -webkit-transform-origin: bottom right;
    -moz-transform-origin: bottom right;
     -ms-transform-origin: bottom right;
      -o-transform-origin: bottom right;
         transform-origin: bottom right;
           }
         
.owl-carousel .owl-item:nth-child(odd) img{
             -webkit-transform: scale(1.1);
             -ms-transform: scale(1.1);
             transform: scale(1.1);
             -webkit-transform-origin: bottom left;
    -moz-transform-origin: bottom left;
     -ms-transform-origin: bottom left;
      -o-transform-origin: bottom left;
         transform-origin: bottom left;
           }
         

.owl-carousel .owl-item.active:nth-child(even) img{
               -webkit-transform: scale(1.1);
               -ms-transform: scale(1.1);
               transform: scale(1.1);
             }
           
  .owl-carousel .owl-item.active:nth-child(odd) img{
               -webkit-transform: scale(1.4);
               -ms-transform: scale(1.4);
               transform: scale(1.4);
             }
    .foil-image {
      min-width: 20vw;
      max-width: 20vw;
      max-height: 150px;
      min-height: 150px;
      position: relative;
      z-index: 1;
      overflow: hidden;
      transform-origin: center center;
      transform-style: preserve-3d;
      -webkit-animation: move 3s infinite linear;
      -moz-animation: move 3s infinite linear;
      animation: move 3s infinite linear;
    }

    .foil-image img {
      height: 100%;
      width: 100%;
    }

    .foil-image::after {
      content: ' ';
      position: absolute;
      height: 200%;
      width: 200%;
      z-index: 2;
      -webkit-animation: moveafter 3s infinite linear;
      -moz-animation: moveafter 3s infinite linear;
      animation: moveafter 3s infinite linear;

      background: -moz-linear-gradient(-45deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 45%, rgba(255, 255, 255, 0.5) 50%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0) 100%);
      /* FF3.6+ */
      background: -webkit-gradient(linear, left top, right bottom, color-stop(0%, rgba(255, 255, 255, 0)), color-stop(45%, rgba(255, 255, 255, 0)), color-stop(50%, rgba(255, 255, 255, 0.2)), color-stop(55%, rgba(255, 255, 255, 0)), color-stop(100%, rgba(255, 255, 255, 0)));
      /* Chrome,Safari4+ /background: -webkit-linear-gradient(-45deg,  rgba(255,255,255,0) 0%,rgba(255,255,255,0) 45%,rgba(255,255,255,0.2) 50%,rgba(255,255,255,0) 55%,rgba(255,255,255,0) 100%); / Chrome10+,Safari5.1+ */
      background: -o-linear-gradient(-45deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 45%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0) 100%);
      /* Opera 11.10+ */
      background: -ms-linear-gradient(-45deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 45%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0) 100%);
      /* IE10+ */
      background: linear-gradient(135deg, rgba(255, 255, 255, 0) 0%, rgba(255, 255, 255, 0) 45%, rgba(255, 255, 255, 0.2) 50%, rgba(255, 255, 255, 0) 55%, rgba(255, 255, 255, 0) 100%);
      /* W3C */
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00ffffff', endColorstr='#00ffffff', GradientType=1);
      /* IE6-9 fallback on horizontal gradient */

    }

    #premium_badge {
      margin: 0 -33px -50px 0;
      overflow: visible;
      z-index: 99999;
      height: 80px;
      width: 70px;
    }

    @-webkit-keyframes moveafter {
      0% {
        top: 100%;
        left: 100%;
      }

      50% {
        top: -100%;
        left: -100%;
      }

      100% {
        top: -200%;
        left: -200%;
      }
    }

    .premium_suppliers_padding_main {
      padding: 5px;

    }

    .premium_suppliers_padding {
      height: 8em;
      border-radius: 5px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

    .ticker {
      display: flex;
      flex-wrap: wrap;
      width: 100%;
      height: 50px;
      margin: 0 auto
    }

    .news {
      width: 96%;
      background: #cc4444;
      padding: 0 2%
    }

    .premiumcontent {
      display: flex;
      flex-direction: row;
      gap: 50px;
    }

    .premiummainouter {
      display: flex !important;
      flex-direction: column !important;
    }

    .premiummaininner {
      display: flex !important;
      flex-direction: row-reverse !important;
      width: 100% !important;
    }

    .marquee {
      width: 100%;
      /* Set the desired width */
      overflow: hidden;
      white-space: nowrap;
    }

    .marquee span {
      display: inline-block;
      padding: 0 10px;
      /* Adjust as needed */
      animation: marquee 10s linear infinite;
    }

    @keyframes marquee {
      0% {
        transform: translateX(0);
      }

      100% {
        transform: translateX(-100%);
      }
    }



    @media(max-width:765px) {
      .premium_suppliers_padding {
        height: 6em;
      }

      .premium_suppliers_padding_main {
        padding: 5px;
      }

      #premium_badge {
        height: 45px;
        width: 40px;
        margin: 0 -19px -29px 0;
        overflow: visible;
        z-index: 99999;
      }

      marquee {
        margin-top: 10px;
      }

      .foil-image {
        min-width: 48vw;
        max-width: 48vw;
        max-height: 122px;
        min-height: 122px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transform-origin: center center;
        transform-style: preserve-3d;
        -webkit-animation: move 3s infinite linear;
        -moz-animation: move 3s infinite linear;
        animation: move 3s infinite linear;
      }

    }
    .main2 {
  position: relative;
}

.main2::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: url('{{ asset("bannerimg/bg.jpg") }}');
  opacity: 0.8;
      background-repeat: no-repeat;
      background-color: #c6b76b2e;
/*background-image: linear-gradient(315deg, #fbfbfb 0%, #f9886c 74%);*/
    /*background-attachment: fixed;*/
}
@media only screen and (max-width: 600px) {
  .suppliers_head {
    margin-top: 0px;
  }
}
@media only screen and (max-width: 565px) {
  .suppliers_head {
    margin-top: 0px;
  }
}
@media only screen and (max-width: 768px) {
  .suppliers_head {
    margin-top: 0px;
  }
  
  
    @media(max-width:765px) {
      .premium_suppliers_padding {
        height: 6em;
      }

      .premium_suppliers_padding_main {
        padding: 5px;
      }

      #premium_badge {
        height: 45px;
        width: 40px;
        margin: 0 -19px -29px 0;
        overflow: visible;
        z-index: 99999;
      }

      marquee {
        margin-top: 10px;
      }

      .foil-image {
        min-width: 48vw;
        max-width: 48vw;
        max-height: 122px;
        min-height: 122px;
        position: relative;
        z-index: 1;
        overflow: hidden;
        transform-origin: center center;
        transform-style: preserve-3d;
        -webkit-animation: move 3s infinite linear;
        -moz-animation: move 3s infinite linear;
        animation: move 3s infinite linear;
      }

    }
}
  </style>

  <!--<h3 class="suppliers_head" style="color: #732626;"><strong>P</strong>remium Suppliers</h3>-->
  <!--<div class="main2">-->
  <!--<marquee behavior="" direction="">-->
  <!--  <div class="premiumcontent">-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/2297"><img src="{{asset('assets/images/premiumsupplierlogo/1.jpg')}}"></a> -->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2157"><img src="{{asset('assets/images/premiumsupplierlogo/2.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->

      

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/1987"> <img src="{{asset('assets/images/premiumsupplierlogo/4.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/2449"> <img src="{{asset('assets/images/premiumsupplierlogo/3.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/2396"> <img src="{{asset('assets/images/premiumsupplierlogo/9.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/2016"> <img src="{{asset('assets/images/premiumsupplierlogo/12.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--        <a href="https://exportersway.com/viewcompany/2136"><img src="{{asset('assets/images/premiumsupplierlogo/5.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--     <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2445"><img src="{{asset('assets/images/premiumsupplierlogo/10.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--        <a href="https://exportersway.com/viewcompany/2201"> <img src="{{asset('assets/images/premiumsupplierlogo/6.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2193"><img src="{{asset('assets/images/premiumsupplierlogo/7.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2217"><img src="{{asset('assets/images/premiumsupplierlogo/8.jpg')}}"></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2157"><img src="{{asset('assets/images/premiumsupplierlogo/11.jpg')}}"></a>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--       <a href="https://exportersway.com/viewcompany/2297"><img src="{{asset('assets/images/premiumsupplierlogo/1.jpg')}}"></a> -->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2157"><img src="{{asset('assets/images/premiumsupplierlogo/2.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->


  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--        <a href="https://exportersway.com/viewcompany/1987"> <img src="{{asset('assets/images/premiumsupplierlogo/4.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--        <a href="https://exportersway.com/viewcompany/2396"> <img src="{{asset('assets/images/premiumsupplierlogo/9.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2136"><img src="{{asset('assets/images/premiumsupplierlogo/5.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2449"><img src="{{asset('assets/images/premiumsupplierlogo/3.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2445"><img src="{{asset('assets/images/premiumsupplierlogo/10.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->

  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2201"> <img src="{{asset('assets/images/premiumsupplierlogo/6.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2157"> <img src="{{asset('assets/images/premiumsupplierlogo/11.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--         <a href="https://exportersway.com/viewcompany/2193"><img src="{{asset('assets/images/premiumsupplierlogo/7.jpg')}}" ></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--          <a href="https://exportersway.com/viewcompany/2217"><img src="{{asset('assets/images/premiumsupplierlogo/8.jpg')}}"></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--    <div class="premiummainouter">-->
  <!--      <div class="premiummaininner">-->
  <!--        <img id="premium_badge" src="{{asset('premiumsuppliers/PREMIUM-TAG.png')}}" alt="">-->
  <!--      </div>-->
  <!--      <div class="foil-image premium_suppliers_padding">-->
  <!--          <a href="https://exportersway.com/viewcompany/2016"><img src="{{asset('assets/images/premiumsupplierlogo/12.jpg')}}"></a>-->
  <!--      </div>-->
  <!--    </div>-->
  <!--</marquee>-->
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>
</html>