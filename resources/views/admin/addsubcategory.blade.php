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
					<div class="breadcrumb-title pe-3">L2 Category</div>
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
						<div class="card">
							<div class="card-body">
                            <form action="{{ url('submitsubcategory') }}" method="post"  enctype="multipart/form-data">
                                @csrf
								<!-- Repeater Content -->
								<div class="item-content">
                                <div class="mb-3">
                                <label for="inputName1" class="form-label">Select L1 Category Name</label>
                                <select class="form-select mb-3" aria-label="Default select example">
                                    
									<option selected="">--Select L1 Category Name--</option>
                                    @foreach($category as $row)
									<option value="{{$row->id}}">{{$row->name}}</option>
                                    @endforeach
								</select>
</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">L2 Category Name</label>
										<input type="text" class="form-control" id="inputName1" placeholder="L2 Category Name" name="subcategoryname">
									</div>
                                    <div class="mb-3">
									<label for="formFile" class="form-label">L2 Category Image</label>
									<input class="form-control" type="file" id="formFile" name="image">
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
					<br>
					<br>
					



                </div>
                <!-- Repeater End -->

</body>

</html>
@endsection