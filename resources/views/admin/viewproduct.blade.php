@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">View Customer Product</div>
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
										<th>Sno.</th>
                                        <th>Title</th>
        <th>Category L1</th>
        
		<th>Discription</th>
		<th>Status</th>
										
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
    @foreach($listcust as $product)
    <?php $i++ ?>
									<tr>
                                    <td>{{ $i}}</td>
		<td>{{ $product->title ?? '' }}</td>
		<td>{{ $product->category->name  ?? '' }}</td>
        <td>{{ $product->details ?? '' }}</td>

										<td><a href="" title="Edit Customer Product"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                        
                                        <a href="" title="Delete Customer Product"><i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i></a>
 </td>
									</tr>
                                    @endforeach
							
								</tbody>
								
							</table>
						</div>
					</div>
				</div>
	

</body>

</html>
@endsection