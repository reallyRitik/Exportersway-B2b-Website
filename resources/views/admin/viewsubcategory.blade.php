@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View L2 Categories</div>
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
				<style>
					.l3image{
						width: 26%;
					}
				</style>
				<hr>
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sno.</th>
										<th>L1 Category Name</th>
										<th>L2 Category Name</th>
										<th>L2 Image</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
    @foreach($subcategory as $subcat)
    <?php $i++ ?>
									<tr>
                                   <td>{{ $i}}</td>
                                    
										<td>@if($subcat->categorys)
    {{ $subcat->categorys->name }}
@else
    
@endif</td>

										<td> {{ str_replace('-', ' ', $subcat->subcategoryname ) }}</td>
										<td><img src="{{ asset('images/'.$subcat->image) }}" class="l3image"></td>
										<td><a href="{{ URL::to('/editsubcategory')}}/{{$subcat->id}}" title="L2 Category Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                        
                                        <form id="deleteForm{{$subcat->id}}" action="{{ route('delete_subdata', $subcat->id) }}" method="POST" style="display: none;">
										@csrf
										@method('DELETE')
									</form>

									<a href="#" title="L3 Category Delete" onclick="event.preventDefault(); document.getElementById('deleteForm{{$subcat->id}}').submit();" data-bs-toggle="modal" data-bs-target="#exampleModalToggle">
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