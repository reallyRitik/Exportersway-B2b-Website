@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View User Details</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Register</li>
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
										<th>UserId</th>
										<th>Name</th>
                                        <th>Email</th>
										<th>Mobile</th>
										<th>Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                @foreach($data as $leadlist)
									<tr>
										<td>{{ $leadlist->id }}</td>
											<td>{{ ucfirst($leadlist->name) }}</td>
										<td>{{ $leadlist->email }}</td>
		<td>{{ $leadlist->mobile }}</td>
        @if ($leadlist->role_id == 1)
										<td><b style="color:#10ff10"> Admin </b></td>
                                        @elseif ($leadlist->role_id == 2)
                                        <td><b style="color:#10ff10"> Active </b></td>
                                        @else
                                        <td><b style="color:red">Not Active </b></td>
                                        @endif
										<td><a href="{{ URL::to('/edituser')}}/{{$leadlist->id}}" title="User Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a><form action="{{ url('/deleteuser', ['id' => $leadlist->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?');">
        @csrf
        @method('DELETE')
        <button type="submit" title="User Delete" style="    border: none;
    background: none;">
            <i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;color: white;"></i>
        </button>
    </form>
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

        function confirmDeletion() {
        if (confirm('Are you sure you want to delete this user?')) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>
	</script>
</body>

</html>
@endsection