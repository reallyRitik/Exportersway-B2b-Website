@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View Tetra Customers</div>
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
										<th>Contact Name</th>
										<th>Company Name</th>
										<th>Mobile</th>
										<th>Email</th>
                                        <th>Rank</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
    @foreach($customer as $index => $client)
									<tr class="{{ strtolower($client->rank) }}">
                                    <td>{{ count($customer) - $index }}</td>
		
		<td>{{ $client->contact_name }}</td>
        <td>{{ $client->company_name }}</td>
        <td>{{ $client->mobile }}</td>
        <td>{{ $client->email }}</td>
        <td style="font-weight: bolder; color: #11ff0a;">
            <?php
            if($client->rank == 1) {
                echo "Elite";
            } elseif ($client->rank == 2) {
                echo "PRO";
            } elseif ($client->rank == 3) {
                echo "Growing";
            } elseif ($client->rank == 4) {
                echo "Tetra";
            } elseif ($client->rank == 6) {
                echo "ELITE PLUS";
            } else {
                echo "We Pass";
            }
            ?>
        </td>
										<td><a href="{{ URL::to('/editpaidmembership')}}/{{$client->id}}" title="Membership"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;<a href="{{ URL::to('/editpoints')}}/{{$client->id}}" title="Points"><i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i></a>
 </td>
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