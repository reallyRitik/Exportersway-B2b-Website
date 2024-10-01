@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View Leads Details</div>
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
										<th>Product Want</th>
		<th>Name</th>   
		<th>Mobile</th>
		<th>Email</th>
		<th>Company name</th>
		<th>Person Type</th>
		<th>Date</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                               
                                @foreach($leadrequirement as $leadlist)
                                <?php $i++ ?>
									<tr>
                                   
		<td>{{ $i}}</td>
        <td>{{ $leadlist->products_want }}</td>
		<td>{{ $leadlist->full_name }}</td>
		<td>{{ $leadlist->number }}</td>
		<td>{{ $leadlist->email }}</td>
		<td>{{ $leadlist->company }}</td>
		<td>{{ $leadlist->type }}</td>
		<td>{{ $leadlist->created_at }}</td>
     
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