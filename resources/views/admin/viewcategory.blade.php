@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View L1 Categories</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Name</li>
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
										<th>L1 Category Name</th>
										<th>Status</th>
										
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
    @foreach($category as $cat)
    <?php $i++ ?>
									<tr>
										<td>{{ $i}}</td>
										<td>{{ $cat->name }}</td>
										<td><a href="{{ URL::to('/edit')}}/{{$cat->id}}/edit" title="L1 Category Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;

           <form id="deleteForm{{$cat->id}}" action="{{ route('deletecategory', $cat->id) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>

									<a href="#" title="L1 Category Delete" onclick="event.preventDefault(); document.getElementById('deleteForm{{$cat->id}}').submit();" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
										<i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i>
									</a>
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