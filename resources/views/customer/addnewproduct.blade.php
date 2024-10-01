@extends('customer.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Add Product </div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Details</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

				<!-- Repeater Html Start -->
                <div id="repeater">
                   
					
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
						<div class="card">
                        <style>
    .session-message {
        height: 50px;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 100%;
        border-radius: 8px;
        border: 2px solid darkslategray;
        border-bottom: 4px solid darkslategray;
    padding: 10px;
    background-color: #f0f0f0;
    border: 1px solid #ccc;
    transition: opacity 3s ease-in-out;
}

.session-message.fade-out {
    opacity: 0;
    transition: opacity 2s ease-in-out;
}
.session-message1 {
        height: 50px;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 100%;
        border-radius: 8px;
        border: 2px solid darkslategray;
        border-bottom: 4px solid darkslategray;
    padding: 10px;
    background-color: #87483b;
    color: white;
    border: 1px solid #ccc;
    transition: opacity 3s ease-in-out;
}

.session-message1.fade-out {
    opacity: 0;
    transition: opacity 2s ease-in-out;
}
</style>

@if(session('productcreationsuccess'))
    <div id="session-message" class="session-message">
        {{ session('productcreationsuccess') }}
    </div>
@endif
@if(session('productcreationerror'))
    <div id="session-message1" class="session-message1">
        {{ session('productcreationerror') }}
    </div>
@endif

<script>
    setTimeout(function() {
        $('#session-message').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message').remove();
    }, 8000);
</script>
<script>
    setTimeout(function() {
        $('#session-message1').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message1').remove();
    }, 8000);
</script>
           
							<div class="card-body">
                                                    <form action="{{ url('submitproduct')}}" method="post" enctype="multipart/form-data"> 
                                                    @csrf
								<!-- Repeater Content -->
								<div class="item-content">
                               
									<div class="mb-3">
										<label for="inputName1" class="form-label">Select Category</label>
										<select class="form-select mb-3 form-control" aria-label="Default select example" name="categoryname" id="dropdownList">
                                        <option selected="">---Select Category-L1---</option>
                                        @foreach($category as $row)
                                        <option value="{{$row->id}}">{{$row->name}}</option>
                                        @endforeach
                                        </select>
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Select Sub Category</label>
										<select class="form-select mb-3 form-control" name="subcategoryname" id="sel_user" aria-label="Default select example" name="categoryname" id="dropdownList">
                                        <option selected="">---Select Category-L2---</option>
                                       
                                        </select>
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Select Child Category</label>
										<select class="form-select mb-3 form-control"  name="subnastedcategoryname" id="sel_user2" aria-label="Default select example" name="categoryname" id="dropdownList">
                                        <option selected="">---Select Category-L3---</option>
                                       
                                        </select>
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Title</label>
										<input id="simpleinput" class="form-control" type="text" name="title">
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Description</label>
                                        <textarea class="form-control" type="text" name="details"></textarea>
                                       
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Product Image</label>
                                        <input class="form-control" type="file" name="images">
                                       
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Product price</label>
                                        <input class="form-control" type="text" name="pprice">
                                       
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Minimum Order Quentity</label>
                                        <input class="form-control" type="text" name="mqty">
                                       
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Payment terms</label>
                                        <input class="form-control" type="text" name="pterms">
                                       
									</div>
                                    <div class="mb-3">
										<label for="inputName1" class="form-label">Supply  Ability</label>
                                        <input class="form-control" type="text" name="sability">
                                       
									</div>
								</div>
								<!-- Repeater Remove Btn -->
								<div class="repeater-remove-btn">
									<button class="btn btn-light remove-btn px-4">
										Submit
									</button>
								</div>
                            </form>
							</div>
						</div>
                    </div>
					
					

                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
    $(document).ready(function() {
        $('#dropdownList').on('change', function() {
            var category_id = $(this).val();
            console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: 'addproduct/' + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var len = data.length;
                        $('#sel_user').empty();
                        $.each(data, function(key, value) {
                            $('#sel_user').append('<option value="' + key + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#sel_user').empty();
            }
        });

        $('#sel_user').on('change', function() {
            var category_id = $(this).val();
            console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: 'addproductss/' + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        var len = data.length;
                        $('#sel_user2').empty();
                        $.each(data, function(key, value) {
                            $('#sel_user2').append('<option value="' + value + '">' + value + '</option>');
                        });
                    }
                });
            } else {
                $('#sel_user2').empty();
            }
        });
    });
</script>


                </div>
                <!-- Repeater End -->

</body>

</html>
@endsection