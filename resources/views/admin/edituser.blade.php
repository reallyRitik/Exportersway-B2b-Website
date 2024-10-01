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
					<div class="breadcrumb-title pe-3">User</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Edit</li>
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
                            <form action="{{ url('updateuser', ['id' => $lead->id]) }}" method="post" enctype="multipart/form-data">
                                                        @csrf
								<!-- Repeater Content -->
								<div class="item-content">
									<div class="mb-3">
										<label for="inputName1" class="form-label">Username</label>
										<input class="form-control" type="text" name="email" value="{{$lead->email}}">
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Name</label>
										<input class="form-control" id="country" type="text" name="name"  value="{{$lead->name}}" >
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Password</label>
										<input class="form-control" id="country"  type="text" name="password"   >
                                       
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Account Active/Deactive</label>
										<select name="role_id" class="form-control">
                                                                   
																   <option value="2" {{ old('role_id', $lead->role_id) == '2' ? 'selected' : '' }}>Active</option>
																   <option value="4" {{ old('role_id', $lead->role_id) == '4' ? 'selected' : '' }}>Deactive</option>
																   
															   </select>
									</div>
									<div class="mb-3">
										<label for="inputName1" class="form-label">Expiry Date</label>
										<input class="form-control" type="date" name="edate">
                                       
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