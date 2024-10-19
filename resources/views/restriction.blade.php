@extends('header')
@section('websitecontent')
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="{{ asset('assets/css/contact.css')}}">
 <title>ExportersWay Restrictions - Prohibited Products and Services</title>
        <meta name="keywords" content="restrictions, prohibited products, restricted services, alcohol ban, dating services ban, political organizations, mining restrictions, oil drilling ban, sex toys prohibition, sexually oriented services ban"/>
        <meta name="description" content="Learn about ExportersWay Restrictions. We prohibit listings for alcohol, dating services, political organizations, mining, oil drilling, sex toys, and sexually oriented services on our B2B marketplace.">
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="container">
<div class="row" >
<div class="col-12">
<div class="box-home">
<h1 class="heading-h3 h1"> 
Exportersway <span>Restrictions</span>
</h1>
<div class="page-content">
    <p>
we do not allow  any client to list these products:-
<br>
<ul>
  <li><a href=""><i class="fa-solid fa-x"></i>  Alcohol</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Dating And matchmaking services</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Lobby groups</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Political organizations</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Mining and oil drilling</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Sex toys</a></li>
  <li><a href=""><i class="fa-solid fa-x"></i>  Sexually oriented dating services</a></li>
</ul>
</p>

<style>

ul{
  margin: 0;
  padding: 0;
}

ul li{
  display: block;
  list-style: none outside;
  animation: slidein 0.3s ease 1 both;
}

ul li:nth-child(2) {animation-delay: 0.15s}
ul li:nth-child(3) {animation-delay: 0.30s}
ul li:nth-child(4) {animation-delay: 0.45s}
ul li:nth-child(5) {animation-delay: 0.60s}
ul li:nth-child(6) {animation-delay: 0.75s}
ul li:nth-child(7) {animation-delay: 0.90s}


ul li a{
  display:block;
  text-decoration: none;
  color: black;

}
.fa-x:before {
    content: "\58";
    color: red;
}

@keyframes slidein{
  from{
    transform: translateX(-10rem);
    opacity: 0;
  }
  
  to{
    transform: translate(0);
    opacity: 1;
  }
}


</style>


</div>
</div>
</div>
</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection