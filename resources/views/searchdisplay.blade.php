@extends('header')
@section('websitecontent')

        <!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        <title>{{ $meta_title}}</title>
<meta name="keywords" content="{{ $keyword }}" />
<meta name="google-site-verification" content="AyO2_SgJ7H1RYH8StqldojMzYEgxcLeS30SQIwXvqls" />
<meta name="description" content="{{ $meta_des }}" />
<link rel="icon" href="https://exportersway.com/companylogo/exportersway-logo.png" type="image/png">
<link rel="icon" href="https://exportersway.com/companylogo/exportersway-logo.ico" type="image/x-icon">


        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <meta name="robots" content="index, follow">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">


</head>
<style>
    .main_layout {
        padding: 0.9em;
    }

    .row_padding {
        height: 16.5rem;
        padding: 0.7em;
    }

    .product_catalogue {
        height: 100%;
        padding: 0.5em;
        border-radius: 5px;
        border-bottom: 2px solid #8a8a5c;
        border-right: 1px solid #8a8a5c;
        border-top: 1px solid #cccccc;
        box-shadow: rgb(38, 57, 77) 0px 20px 40px -10px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .product_catalogue:hover {
        background-color: #f5f5f0;
        border: 2px solid #ffb366;
        box-shadow: #ffcc99 0px 10px 30px -6px;

    }

    .product_catalogue_child1 {
        display: flex;
        gap: 10px;
        justify-content: center;
        align-items: center;
    }


    .product_catalogue_child1_image {
        height: 5.5em;

        width: 45%;
        border-radius: 5px;
    }

    .product_catalogue_child1_image a img {
        max-height: 100%;
        max-width: 100%;
        min-height: 100%;
        min-width: 100%;
        border-radius: 10px;
        border: 1px solid silver;
    }

    .product_catalogue_child1_name {
        font-size: 16px;
        width: 100%;
        font-weight: bold;
        color: #404040;
    }

    .product_catalogue_child1_name:hover
    {
        color: #ffa64d;
    }

    .product_catalogue_child2{
        border-top: 1px solid silver;
        box-shadow: 0px 0px 50px 10px #e6e6e6 inset;
        border-bottom-right-radius: 20px;
        padding: 10px;
        height:100%;
    }

    .product_catalogue_child2 a {
        color: #666666;
    }

    .product_catalogue_child2 a:hover {
        color: black;
        border-bottom: 1px solid black;
        font-weight: bold;
    }

    @media (max-width:750px) {
        .product_catalogue_child1 {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            align-items: flex-start;
        }

        .product_catalogue_child1_image {
            width: 100%;
            height: 8em;
            border-radius: 5px;

        }

        .row_padding {
        height: 25rem;
        padding: 0.2em;
    }

    .product_catalogue_child2 a {
        color: #666666;
        font-size: 12px;
        text-transform: lowercase !important;
    }
    }
</style>

<div class="main_layout">
    <div class="row">

    @if($errors->any())
    <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <b>{{ $error }}</b>
            @endforeach
    </div>
@endif

        @foreach ($name as $book)
        <div class="col-md-3 col-6 row_padding">
            <div class="product_catalogue">
                <div class="product_catalogue_child1">
                    <div class="product_catalogue_child1_image">
                          @php
    $categorySlug = Request::segment(2);
@endphp
                        <a href="{{ URL::to('viewcategory/' . $categorySlug . '/' . strtolower($book->subcategoryname)) }}"><img src="{{ asset('images/' . $book->image) }}" alt=""></a>
                    </div>
                    <a href="{{ URL::to('viewcategory/' . $categorySlug . '/' . strtolower($book->subcategoryname)) }}" data-value="{{$book->subcategoryname}}" class="product_catalogue_child1_name">
                        <div class="search-tag" style="font-size: 14px;">{{ str_replace('-', ' ', $book->subcategoryname) }}</div>
                    </a>
                </div>
                <div class="product_catalogue_child2 content-container">
                    <?php $newloop = $book->Subcategorynested ?>
                   @for ($i = 0; $i < 9 && $i < count($newloop); $i++)
    <a id="subnestedproductslink" href="{{ URL::to('viewcategory/' . $categorySlug . '/' . $book->subcategoryname . '/' . Str::lower($newloop[$i]->subnestedcategoryname)) }}" class="search-tag" data-value="{{ $book->subnestedcategoryname }}" style="font-size: 14px;">{{ ucwords(str_replace('-', ' ', strtolower($newloop[$i]->subnestedcategoryname))) }}<span>,</span></a>
@endfor
                </div>
            </div>
        </div>
        @endforeach
    </div>
     <script>
        let myText = document.getElementById("subnestedproductslink");
myText.textContent = myText.textContent.toLowerCase();
console.log(myText.textContent);

document.addEventListener('DOMContentLoaded', function () {
        var containers = document.querySelectorAll('.content-container');
        var maxLetters = 400; // Set the desired maximum number of letters

        containers.forEach(function (container) {
            var content = container.textContent.trim();

            if (content.length > maxLetters) {
                var truncatedContent = content.slice(0, maxLetters) + '...';
                container.textContent = truncatedContent;
            }
        });
    });


    </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</div>
@endsection