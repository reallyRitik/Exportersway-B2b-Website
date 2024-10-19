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
					<div class="breadcrumb-title pe-3">Send Enquiry By Mail</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">To Client</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

				<!-- Repeater Html Start -->
                <div id="repeater">
                   
					
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
                    @if(Session::has("success"))
                            <div class="alert alert-success alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('success')}}</div>
                        @elseif(Session::has("failed"))
                            <div class="alert alert-danger alert-dismissible"><button type="button" class="close">&times;</button>{{Session::get('failed')}}</div>
                        @endif
						<div class="card">
							<div class="card-body">
                            <form  action="{{route('send-email')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
								<!-- Repeater Content -->
								<div class="item-content">
									<div class="mb-3">
										<label for="inputName1" class="form-label">Client Email </label>
										<input type="email" name="emailRecipient" id="emailRecipient" class="form-control" placeholder="Mail To">
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Enquiry Number</label>
										<input type="text" name="number" id="emailSubject" class="form-control" placeholder="Mobile Number">
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Enquiry Email</label>
										<input type="text" name="companyemail" id="emailSubject" class="form-control" placeholder="Comapny Name">
									</div>
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Massage</label>
										<textarea name="emailBody" id="emailBody" class="form-control" placeholder="Mail Body" style="word-break: break-word;" rows="7"></textarea>
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
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					



                </div>
                <!-- Repeater End -->

</body>

</html>
@endsection