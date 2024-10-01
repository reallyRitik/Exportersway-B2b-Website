@extends('header')
@section('websitecontent')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>ExportersWay - Global Suppliers | Verified B2B Suppliers</title>
    <meta name="keywords" content="buy quality products, bestsellers products" />
    <meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
    <meta name="description" content="Explore Exportersway, connecting you with global suppliers for premium products. Find top wholesale manufacturers and exporters for quality goods at competitive prices.">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="revisit-after" content="1 day">
    <meta name="author" content="Exporters Way">
    <link rel="canonical" href="https://www.exportersway.com/" />
    <link rel="icon" type="image/x-icon" href="{{ asset('companylogo/logo.png') }}">
   
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://www.exportersway.com/">
    <meta property="twitter:title" content="Exporters Way - World Fastest Growing B2B Network">
    <meta property="twitter:description" content="Export Way - World Fastest Growing B2B Network of exporters Suppliers and importers, Indian Exporters, Buy Sell offers from India & foreign Countries.">
    <meta property="twitter:image" content="https://www.exportersway.com/img/VerifyBuyers.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="geo.region" content="IN-DL" />
    <meta name="geo.placename" content="Delhi" />
    <meta name="geo.position" content="28.694715;77.154261" />
    <meta name="ICBM" content="28.694715, 77.154261" />
</head> 


<body style="background-color: #EEEAE9;">
    <style>
        .link_box a {

            color: black;
            display: block;
            margin-bottom: 24px;
            margin-left: 30px;
        }

        .link_box a img {
            width: 40px;
        }
    </style>
    <div class="col-md-12">
        <div class="main-heading">
            <h2>Global Manufacturers, Verified Suppliers & Exporters</h2>
            <br>
            <h4><img src="{{ asset('assets/images/small/globe.gif')}}" alt="" style="width:35px;">&nbsp;Find Suppliers By Country</h4>
        </div>
    </div>
    <div class="row maincategory" style="width:100%;">
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">
            <a href="{{ url('filter-by-country', ['country' => 'India']) }}" data-country="India" title="India">
                <img src="{{ asset('assets/images/country/india.svg')}}" alt="">

                <span> &nbsp; India</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Australia']) }}" data-country="Australia" title="Australia">
                <img src="{{ asset('assets/images/country/Australia.svg')}}" alt="">
                <span> &nbsp; Australia</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Bangladesh']) }}" data-country="Bangladesh" title="Bangladesh">
                <img src="{{ asset('assets/images/country/Bangladesh.svg')}}" alt="">
                <span>&nbsp; Bangladesh</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'UAE']) }}" data-country="UAE" title="United Arab Emirates">
                <img src="{{ asset('assets/images/country/UAE.svg')}}" alt="">
                <span> &nbsp;United Arab Emirates</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Brazil']) }}" data-country="Brazil" title="Brazil">
                <img src="{{ asset('assets/images/country/Brazil.svg')}}" alt="">
                <span> &nbsp; Brazil</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Canada']) }}" data-country="Canada" title="Canada">
                <img src="{{ asset('assets/images/country/Canada.svg')}}" alt="">
                <span> &nbsp;Canada</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'China']) }}" data-country="China" title="China">
                <img src="{{ asset('assets/images/country/China.svg')}}" alt="">
                <span> &nbsp; China</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Germany']) }}" data-country="Germany" title="Germany">
                <img src="{{ asset('assets/images/country/Germany.svg')}}" alt="">
                <span> &nbsp;Germany</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Egypt']) }}" data-country="Egypt" title="Egypt">
                <img src="{{ asset('assets/images/country/Egypt.svg')}}" alt="">
                <span> &nbsp;Egypt</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'France']) }}" data-country="France" title="France">
                <img src="{{ asset('assets/images/country/France.svg')}}" alt="">
                <span> &nbsp;France</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'United Kingdom']) }}" data-country="United Kingdom" title="United Kingdom">
                <img src="{{ asset('assets/images/country/UK.svg')}}" alt="United Kingdom">
                <span>&nbsp; UK</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Hongkong']) }}" data-country="Hongkong" title="Hong Kong">
                <img src="{{ asset('assets/images/country/Hong-Kong.svg')}}" alt="Hong Kong">
                <span> &nbsp;Hong Kong</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Indonesia']) }}" data-country="Indonesia" title="Indonesia">
                <img src="{{ asset('assets/images/country/Indonesia.svg')}}" alt="Indonesia">
                <span> &nbsp;Indonesia</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Iran']) }}" data-country="Iran" title="Iran">
                <img src="{{ asset('assets/images/country/Iran.svg')}}" alt="Iran">
                <span> &nbsp;Iran</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Italy']) }}" data-country="Italy" title="Italy">
                <img src="{{ asset('assets/images/country/Italy.svg')}}" alt="Italy">
                <span> &nbsp;Italy</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Japan']) }}" data-country="Japan" title="Japan">
                <img src="{{ asset('assets/images/country/Japan.svg')}}" alt="Italy">
                <span> &nbsp;Japan</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'South Korea']) }}" data-country="Korea" title="South Korea">
                <img src="{{ asset('assets/images/country/South-Korea.svg')}}" alt="South Korea">
                <span> &nbsp;South Korea</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Malaysia']) }}" data-country="Malaysia" title="Malaysia">
                <img src="{{ asset('assets/images/country/Malaysia.svg')}}" alt="Malaysia">
                <span> &nbsp;Malaysia</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Netherlands']) }}" data-country="Netherlands" title="Netherlands">
                <img src="{{ asset('assets/images/country/Netherlands.svg')}}" alt="Netherlands">
                <span> &nbsp;Netherlands</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Philippines']) }}" data-country="Philippines" title="Philippines">
                <img src="{{ asset('assets/images/country/Philippines.svg')}}" alt="Philippines">
                <span> &nbsp;Philippines</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Pakistan']) }}" data-country="Pakistan" title="Pakistan">
                <img src="{{ asset('assets/images/country/Pakistan.svg')}}" alt="Pakistan">
                <span> &nbsp;Pakistan</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Russia']) }}" data-country="Russia" title="Russia">
                <img src="{{ asset('assets/images/country/Russia.svg')}}" alt="Russia">
                <span> &nbsp;Russia</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Singapore']) }}" data-country="Singapore" title="Singapore">
                <img src="{{ asset('assets/images/country/Singapore.svg')}}" alt="Singapore">
                <span> &nbsp;Singapore</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Thailand']) }}" data-country="Thailand" title="Thailand">
                <img src="{{ asset('assets/images/country/Thailand.svg')}}" alt="Thailand">
                <span> &nbsp;Thailand</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Türkiye']) }}" data-country="Türkiye" title="Türkiye">
                <img src="{{ asset('assets/images/country/Türkiye.svg')}}" alt="Türkiye">
                <span> &nbsp;Türkiye</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Taiwan']) }}" data-country="Taiwan" title="Taiwan">
                <img src="{{ asset('assets/images/country/Taiwan.svg')}}" alt="Taiwan">
                <span> &nbsp;Taiwan</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Ukraine']) }}" data-country="Ukraine" title="Ukraine">
                <img src="{{ asset('assets/images/country/Ukraine.svg')}}" alt="Ukraine">
                <span> &nbsp;Ukraine</span>
            </a>


        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Vietnam']) }}" data-country="Vietnam" title="Vietnam">
                <img src="{{ asset('assets/images/country/Vietnam.svg')}}" alt="Vietnam">
                <span> &nbsp;Vietnam</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'South Africa']) }}" data-country="Africa" title="South Africa">
                <img src="{{ asset('assets/images/country/South-Africa.svg')}}" alt="South Africa">
                <span> &nbsp;South Africa</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'USA']) }}" data-country="USA" title="USA">
                <img src="{{ asset('assets/images/country/USA.svg')}}" alt="USA">
                <span> &nbsp;USA</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Azerbaijan']) }}" data-country="Azerbaijan" title="Azerbaijan">
                <img src="{{ asset('assets/images/country/Azerbaijan.png')}}" alt="Azerbaijan">
                <span> &nbsp;Azerbaijan</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'MADAGASCAR']) }}" data-country="MADAGASCAR" title="MADAGASCAR">
                <img src="{{ asset('assets/images/country/Madagascar.png')}}" alt="MADAGASCAR">
                <span> &nbsp;Madagascar</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Kenya']) }}" data-country="Kenya" title="Kenya">
                <img src="{{ asset('assets/images/country/kenya.png')}}" alt="Kenya">
                <span> &nbsp;Kenya</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Belgium']) }}" data-country="Belgium" title="Belgium">
                <img src="{{ asset('assets/images/country/belgium.png')}}" alt="Belgium">
                <span> &nbsp;Belgium</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'México']) }}" data-country="México" title="México">
                <img src="{{ asset('assets/images/country/maxico.png')}}" alt="Belgium">
                <span> &nbsp;Mexico</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Nigeria']) }}" data-country="Nigeria" title="Nigeria">
                <img src="{{ asset('assets/images/country/nigiriya.png')}}" alt="Nigeria">
                <span> &nbsp;Nigeria</span>
            </a>

        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Papua New Guinea']) }}" data-country="Papua New Guinea" title="Papua New Guinea">
                <img src="{{ asset('assets/images/country/Papua-New-Guinea.png')}}" alt="Papua New Guinea">
                <span> &nbsp;Papua New Guinea</span>
            </a>
        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Poland']) }}" data-country="Poland" title="Poland">
                <img src="{{ asset('assets/images/country/poland.png')}}" alt="Poland">
                <span> &nbsp;Poland</span>
            </a>
        </div>
        <div class="col-6 col-sm-2 col-md-2 link_box ind_box">

            <a href="{{ url('filter-by-country', ['country' => 'Tanzania']) }}" data-country="Tanzania" title="Tanzania">
                <img src="{{ asset('assets/images/country/Tanzania.jpg')}}" alt="Poland">
                <span> &nbsp;Tanzania</span>
            </a>
        </div>
    </div>
    <div class="col-md-12">
        <div class="main-heading">
            <h2 class="main-heading"><img src="{{ asset('assets/images/small/Industry.gif')}}" alt="" style="width:7%;">&nbsp;Directory of Global Manufacturers and Suppliers</h2>
        </div>
    </div>
    <div class="row maincategory" style="width:100%;">
        @foreach($category as $row)
        <div class="col-6 col-sm-4 col-md-3 link_box ind_box">
            <img src="{{ asset('assets/images/categoryicon/' . $row->icon) }}" alt="" data-value="{{$row->name}}">
            <span class="search-tag" data-value="{{$row->id}}" style="cursor:pointer">{{$row->name}}</span>
        </div>
        @endforeach
        <div class="col-6 col-sm-4 col-md-3 link_box ind_box">

            <a href="{{url('/categories')}}">
                <img src="{{ asset('assets/images/categoryicon/show.png')}}" alt="" style="width:13%;">
                <span> &nbsp;Show All</span>
            </a>
            <style>
                .search-tag {
                    font-size: 14px;
                }

                .ind_box img {
                    width: 23%;
                }
            </style>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script>
    $(document).ready(function() {
        $('.search-tag').on('click', function() {
            var searchTerm = $(this).data('value');
            window.location.replace('searchss?search=' + encodeURIComponent(searchTerm));
        });
    });
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"> </script>
</body>

</html>
@endsection