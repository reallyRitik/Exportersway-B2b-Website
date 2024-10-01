<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
       
        
    <link rel="stylesheet" href="{{ asset('assets/css/topnav.css')}}">

    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />



</head>

<body>
        <nav class="top_searchesmain" style="margin: 1%;
     background-color: #fff;
    padding: 10px;">
               <span style="font-size:14px;padding:2px;">Top Searches</span>
                    <div class="namedata">
                        <a id="top-searches" href={{url('/viewcategory/agriculture/soil-additives-&-fertilizers')}}>Soil Additives & Fertilizers</a>
                        <a href={{url('/viewcategory/agriculture/fresh-vegetables')}} >Fresh Vegetables</a>
                        <a href={{url('/viewcategory/food-and-beverage/dry-fruits-&-nuts')}}>Dry Fruits & Nuts</a>
                        <a href={{url('/viewcategory/apparel-and-fashion/apparel-fabrics-&-dress-materials')}}>Apparel Fabrics & Dress Materials</a>
                        <a href={{url('viewcategory/food-and-beverage/cooking-spices-and-oil')}}>Cooking Spices and Oil</a>
                        <a href={{url('viewcategory/food-and-beverage/beverages')}}>Beverages</a>
                    </div>
        </nav>
        <style>
            .namedata a:hover{
               background-color:#ca7500;
               border:none;
                color:white;
                font-weight:700;
            }
        </style>
        <script>
    $(document).ready(function() {
        $.ajax({
            url: "{{ route('topsearch') }}",
            dataType: 'json',
            success: function(data) {
                $.each(data, function(index, search) {
                    $('#top-searches').append('<li>' + search.query + ' (' + search.count + ')</li>');
                });
            }
        });
    });
</script>
    
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js')}}"></script>
</body>

</html>