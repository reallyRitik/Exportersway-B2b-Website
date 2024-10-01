@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">L3 Category</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Add</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

				<!-- Repeater Html Start -->
                <div id="repeater">
                   
					
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
                    @if(session('successl3'))
    <div id="session-message" class="session-message">
        {{ session('successl3') }}
    </div>
@endif
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
        border: 2px solid #5F9EA0;
        border-bottom: 4px solid #5F9EA0;
    padding: 10px;
    background-color: #5F9EA0;
    border: 1px solid #5F9EA0;
    transition: opacity 3s ease-in-out;
}

.session-message.fade-out {
    opacity: 0;
    transition: opacity 2s ease-in-out;
}
</style>
<script>
    setTimeout(function() {
        $('#session-message').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message').remove();
    }, 8000);
</script>
						<div class="card">
							<div class="card-body">
                            <form action="{{url('/submitsubnestedcategory')}}" method="POST" enctype="multipart/form-data">
                             @csrf
								<!-- Repeater Content -->
								<div class="item-content">
                                <div class="mb-3">
                                <label for="inputName1" class="form-label">Select L1 Category Name</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="categoryId" id="dropdownList">
                                    
									<option selected="">--Select L1 Category Name--</option>
                                    @foreach($category as $row)
									<option value="{{$row->id}}" {{session('tempcategory')==$row->id ? 'selected' : ''}}>{{$row->name}}</option>
                                    @endforeach
								</select>
</div>
                                <div class="mb-3">
                                <label for="inputName1" class="form-label">Select L2 Category Name</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="subcategoryid" id="sel_user"  class="form-control">
                                    
									<option selected="">--Select L2 Category Name--</option>
                                    <option value="{{ session('tempsubcategory') }}" SELECTED>{{session('tempsubcategoryname')}}</option>
								</select>
                                </div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">L3 Category Name</label>
										<input type="text" class="form-control" id="inputName1" placeholder="L3 Category Name" name="subnestedcategoryname">
									</div>
                                    <div class="mb-3">
									<label for="formFile" class="form-label">L3 Category Image</label>
									<input class="form-control" type="file" id="formFile"  name="subcategoryimage">
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

                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
               <script>
    $(document).ready(function () {
        var tempcategory = sessionStorage.getItem('tempcategory');
        var tempsubcategory = sessionStorage.getItem('tempsubcategory');
        var tempsubcategoryname = sessionStorage.getItem('tempsubcategoryname');

        // Handle L1 category change event
        $('#dropdownList').on('change', function () {
            var category_id = $(this).val();

            if (category_id) {
                $.ajax({
                    url: 'subcatnam/' + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        var sortedData = Object.entries(data).sort((a, b) => a[1].localeCompare(b[1]));

                        $('#sel_user').empty();
                        sortedData.forEach(function (entry) {
                            var key = entry[0];
                            var value = entry[1];

                            // Replace hyphens with spaces in value
                            var displayValue = value.replace(/-/g, ' ');

                            // Set the selected L2 subcategory
                            if (tempsubcategory && key == tempsubcategory) {
                                $('#sel_user').append('<option value="' + key + "___" + value + '" selected>' + displayValue + '</option>');
                            } else {
                                $('#sel_user').append('<option value="' + key + "___" + value + '">' + displayValue + '</option>');
                            }
                        });
                    }
                });

                sessionStorage.setItem('tempcategory', category_id);
            } else {
                $('#sel_user').empty();
            }
        });

    });
</script>

                <!-- Repeater End -->

</body>

</html>
@endsection