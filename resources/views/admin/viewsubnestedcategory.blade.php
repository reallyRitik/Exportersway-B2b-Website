@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">View L3 Categories</div>
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
			.l3image {
				width: 26%;
			}
		</style>

		<hr>
		<div class="card">
			<div class="card-body">
				<div class="table-responsive">
					<table id="example2" class="table table-striped table-bordered">
						<div class="row">
							<div class="col-sm-12 col-md-6">

							</div>
							<div class="col-sm-12 col-md-6">
								<div class="dataTables_filter" id="example2_filter">
									<label style="display: flex; margin-left: 40%;">
										Search:
										<input type="text" class="form-control form-control-sm" id="searchInput" name="query" placeholder="" aria-controls="example2">
									</label>
								</div>
							</div>
						</div>
						<thead>

							<th>Sno.</th>
							<th>L1 Category Name</th>
							<th>L2 Category Name</th>
							<th>L3 Category Name</th>
							<th>L3 Image</th>
							<th>Status</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 0 ?>
							@foreach($subnestcategory as $subcat)
							<?php $i++ ?>
							<tr>
								<td>{{ $i}}</td>

								<td> @if($subcat->category)
									{{ $subcat->category->name }}
									@else
									Category: Not available
									@endif
								</td>
								<td> @if($subcat->subcategory)
									{{ $subcat->subcategory->subcategoryname }}
									@else
									Subcategory: Not available
									@endif
								</td>

								<td>{{ $subcat->subnestedcategoryname }}</td>
								@if(isset($subcat->subcategoryimage) && !empty($subcat->subcategoryimage))
								<td><img src="{{ asset('subcategoryimage/'.$subcat->subcategoryimage) }}" class="l3image"></td>
								@else
								<td>L3 Image not found</td>
								@endif
								<td><a href="{{ URL::to('/editsubnestedcategory')}}/{{$subcat->id}}" title="L3 Category Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
								
									<form id="deleteForm{{$subcat->id}}" action="{{ route('delete_subnestcategory', $subcat->id) }}" method="POST" style="display: none;">
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
					<div id="pagination-links">
						{{ $subnestcategory->onEachSide(1)->links() }}
					</div>
					<style>
						div.dataTables_wrapper div.dataTables_paginate {
							display: none;
						}

						.pagination {
							display: flex;
							justify-content: end;
						}

						#searchInput::placeholder {
							color: black;
							/* Adjust the color as per your preference */
						}
					</style>

					<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



					<script>
    $(document).ready(function(){
        $('#searchInput').on('keyup', function(){
            var query = $(this).val();
            $.ajax({
                url: "{{ route('searchsubnestedcategory') }}",
                type: "GET",
                data: { query: query },	
                dataType: 'json',
                success: function(response) {
                  
                    if (response && response.length > 0) {
						
                        var html = '';
                        $.each(response, function(index, subnestcategory) {
                           
							html += '<tr>';
                        html += '<td>' + (index + 1) + '</td>';
						html += '<td>' + (subnestcategory.category ? subnestcategory.category.name : 'Category: Not available') + '</td>';
						html += '<td>' + (subnestcategory.subcategory ? subnestcategory.subcategory.subcategoryname : 'Subcategory: Not available') + '</td>';
                        html += '<td>' +subnestcategory.subnestedcategoryname  +  '</td>';
						if (subnestcategory.subcategoryimage) {
                            html += '<td><img src="subcategoryimage/' + subnestcategory.subcategoryimage + '" class="l3image"></td>';
                        } else {
                            html += '<td>L3 Image not found</td>';
                        }
                        html += '<td>';
                        html += '<a href="editsubnestedcategory/' + subnestcategory.id + '" title="L3 Category Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;';
                        html += '<a href="delete?id=' + subnestcategory.id + '" title="L3 Category Delete"><i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i></a>';
                        html += '</td>';
                        html += '</tr>';
                        });
                        $('#example2 tbody').html(html);
						$('#pagination-links').html(response.links);
                    } 
					
					else {
                        $('#example2 tbody').html('<tr><td colspan="2">No data found</td></tr>');
						$('#pagination-links').html('');
                    }
                },
                error: function(xhr){
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>



				</div>
			</div>
		</div>

		<script src="{{asset('newpanelasset/js/jquery.min.js')}}"></script>
		<!-- <script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script> -->
		</body>

</html>
@endsection