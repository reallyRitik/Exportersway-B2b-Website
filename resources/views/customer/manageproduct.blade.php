@extends('customer.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<!--start page wrapper -->
<div class="page-wrapper">
	<div class="page-content">
		<!--breadcrumb-->
		<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
			<div class="breadcrumb-title pe-3">Your Product</div>
			<div class="ps-3">
				<nav aria-label="breadcrumb">
					<ol class="breadcrumb mb-0 p-0">
						<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
						</li>
						<li class="breadcrumb-item active" aria-current="page">List</li>
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
								<th>Title</th>
								<th>Category Name</th>
								<th>Discription</th>
								<th>Product Image</th>
								<th>Active</th>
								<th>Status</th>

							</tr>
						</thead>
						<tbody>
							@foreach($products as $product)
							@if (auth()->check() && auth()->user()->customer && $product->user_id == auth()->user()->customer->id)
							<tr>
								<td>{{ $product->title }}</td>
								<td>@if ($product->category)
									{{ $product->category->name }}
									@endif
								</td>
								<td>{{ $product->details }}</td>
								<td><img src="{{ asset('assets/images/Products/' . $product->images) }}" alt="produt image" style="width: 66%"></td>
								<td>
									@if($product->active)
									<b style="color: green;">Active</b>
									@else
									<b style="color: red;">Not Active</b>
									@endif
								</td>

								<td><a href="{{ URL::to('/editproduct')}}/{{$product->id}}" title="Edit Product"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
									<form action="{{ url('/delete', ['id' => $product->id]) }}" method="post" id="deleteForm">
										@csrf
										@method('DELETE')
										<button type="submit" title="Delete product" onclick="return confirm('Are you sure you want to delete?')" style="background: #252E32; border: none; color: white;">
											<i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i>
										</button>
									</form>
								</td>
							</tr>
							@endif
							@endforeach

						</tbody>

					</table>
				</div>
			</div>
		</div>


		</body>

</html>
@endsection