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
					<div class="breadcrumb-title pe-3">Company Details</div>
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
                   
                @if(session('productcreationerror'))
    <div id="session-message1" class="session-message1">
        {{ session('productcreationerror') }}
    </div>
@endif
<style>
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
<script>
    setTimeout(function() {
        $('#session-message1').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message1').remove();
    }, 8000);
</script>
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
						<div class="card">
							<div class="card-body">
                            <form  method="post"  action="{{url('submitcompanydetails')}}" enctype="multipart/form-data">
                            @csrf
								<!-- Repeater Content -->
								<div class="item-content">
									<div class="mb-3">
										<label for="inputName1" class="form-label">Company Name</label>
										<input class="form-control" type="text" name="company_name"  required>
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Website URl</label>
										<input class="form-control" id="country" type="text"  name="website">
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Company Logo</label>
										<input class="form-control" id="country"  type="file" name="companylogo">
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">About Company</label>
                                        <textarea class="form-control" type="text" name="companydetails"></textarea>
                                       
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