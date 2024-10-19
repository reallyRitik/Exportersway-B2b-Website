
@extends('header')
@section('websitecontent')
<style>
    .main_layout
    {
        padding: 0.9em;
    }
    .row_padding{
        padding: 0.7em;
    }

    .product_catalogue{
        padding: 0.5em;
        border-radius: 5px;
        border-bottom:2px solid #8a8a5c;
        border-right:1px solid #8a8a5c;
        border-top:1px solid #cccccc;
        box-shadow: rgb(38, 57, 77) 0px 20px 40px -10px;
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    .product_catalogue:hover
    {
        background-color: #f5f5f0;
        border: 2px solid #ffb366;
        box-shadow: #ffcc99 0px 10px 30px -6px;

    }

    .product_catalogue_child1{
        display: flex;
        gap: 10px;
        justify-content: center;
        align-items: center;
    }

    
    .product_catalogue_child1_image{
        height: 5.5em;
        width: 45%;
        border-radius: 5px;
    }

    .product_catalogue_child1_image a img{
        max-height: 100%;
        max-width: 100%;
        min-height: 100%;
        min-width: 100%;
    }

    .product_catalogue_child1_name
    {
        font-size: 16px;
        font-weight: bold;
        color: #404040;
    }

    .product_catalogue_child2 a
    {
        color: #666666;
    }

    .product_catalogue_child2 a:hover
    {
        color: black;
        border-bottom: 1px solid black;
    }
    @media (max-width:750px)
    {
        .product_catalogue_child1{
        display: flex;
        flex-direction: column;
        gap: 10px;
        justify-content: center;
        align-items: flex-start;
    }

    .product_catalogue_child1_image{
        width: 100%;
        height: 8em;
        border-radius: 5px;

    }
    }

</style>

<div class="main_layout">
<div class="row">

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
           
           <a href="{{ URL::to('viewcategory/' . $categorySlug . '/' . strtolower($book->subcategoryname)) }}}" data-value="{{$book->id }}" class="search-tag"><div class="product_catalogue_child1_name" class="search-tag">{{ $book->subcategoryname }}</div></a>
          </div>
          <div class="product_catalogue_child2">
            
          @foreach ($subnest as $subcat)
          
            <a href="" class="search-tag" data-value="{{$book->subcategoryname }}">{{ $subcat->subnestedcategoryname }}<span>,</span></a>
            @endforeach
          </div>
        </div>
    </div>
    
    @endforeach
   
</div>
<!-- <script>
    $('.search-tag').click(function() {
        var searchTerm = $(this).data('value');
        console.log(searchTerm); 
        window.location.href = 'searchs?search=' + searchTerm;
    });
    </script> -->

</div>
<!-- <div class="product_show">
   @if ($name->count() > 0)
<ul>
    @foreach ($name as $book)
        <li>{{ $book->title }}</li>
        <li>{{ $book->details }}</li>
        <li>{{ $book->categoryname }}</li>
        <li>{{ $book->subcategoryname }}</li>
        <li>{{ $book->subnastedcategoryname }}</li>
        <li>{{ $book->images }}</li>
    @endforeach
</ul> 

@else
<p>No products found.</p>
@endif
    </div> -->
@endsection
