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
					<div class="breadcrumb-title pe-3">Feedback</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Form</li>
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
                            <form method="post"  action="{{ url('submitfeedback') }}" enctype="multipart/form-data">
                            @csrf
								<!-- Repeater Content -->
								<div class="item-content">
									<div class="mb-3">
										<label for="inputName1" class="form-label">Name</label>
										<input class="form-control" type="text" name="name">
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Email Address</label>
										<input class="form-control" id="country" type="text"  name="email">
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Enter feedback massage</label>
                                        <textarea class="form-control" type="text" name="massage"></textarea>
                                       
									</div>
									
									
								</div>
								<!-- Repeater Remove Btn -->
								<div class="repeater-remove-btn">
									<button class="btn btn-light remove-btn px-4" type="submit">
										Submit
									</button>
								</div>
                            </form>
							</div>
						</div>
                    </div>
					



                </div>
                <!-- Repeater End -->

</body>

</html>
@endsection