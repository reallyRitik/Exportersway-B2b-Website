@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View All Customers</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Data</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->
				
				<hr>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sno.</th>
										<th>Company Name</th>
										<th>Email</th>
										<th>Mobile</th>
										<th>Country</th>
										<th>Sataus</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($allcustomer as $client)
									<tr>
										<td>{{ $client->id }}</td>
										<td>{{ $client->company_name }}</td>
										<td>{{ $client->email }}</td>
										<td>{{ $client->mobile }}</td>
										<td>{{ $client->country }}</td>
										<td style="display: flex;"><a href="{{ URL::to('/editlistcustomer')}}/{{$client->id}}" title="Edit customer"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                        <a href="{{ URL::to('/viewproducts')}}/{{$client->user_id}}" title="Customer Product Show"><i class="lni lni-shopping-basket" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                        <a href="{{ URL::to('/updatemembership')}}/{{$client->id}}" title="Update Paid Membership" ><i class="lni lni-package" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
										<form action="{{ url('/deletecustomer', ['id' => $client->id]) }}" method="post" id="deleteForm">
    @csrf
    @method('DELETE')
    <button type="submit" title="Customer Delete" onclick="return confirm('Are you sure you want to delete?')" style="background: #252E32;
    border: none;
    color: white;">
        <i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i>
    </button>
									</tr>
							@endforeach
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
	
	<script src="{{asset('newpanelasset/js/jquery.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
</body>

</html>
@endsection