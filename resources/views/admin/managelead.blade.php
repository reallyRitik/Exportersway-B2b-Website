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
					<div class="ms-auto">
						<div class="btn-group">
                        <div class="col">
										<button id="addButton" type="button" class="btn btn-light px-5 radius-30">Active Lead</button>
									</div>
							
							
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				
				<hr>
				<div class="card">
                <style>
                                     .session-message1 {
        height: 50px;
        margin-top: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 18px;
        width: 100%;
        border-radius: 8px;
        border: 2px solid limegreen;
        border-bottom: 4px solid limegreen;
    padding: 10px;
    background-color: limegreen;
    color: Black;
    border: 1px solid limegreen;
    transition: opacity 3s ease-in-out;
}

.session-message1.fade-out {
    opacity: 0;
    transition: opacity 3s ease-in-out;
}
</style>
                @if(session('productcreationsuccess'))
    <div id="session-message" class="session-message">
        {{ session('productcreationsuccess') }}
    </div>
@endif

@if(session('productcreationerror'))
    <div id="session-message1" class="session-message1">
        {{ session('productcreationerror') }}
    </div>
@endif
                                <script>
    setTimeout(function() {
        $('#session-message1').addClass('fade-out');
    }, 4000);

    setTimeout(function() {
        $('#session-message1').remove();
    }, 8000);
</script>
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>Sno.</th>
										<th>Title</th>
										<th>Name</th>
                                        <th>Email</th>
										<th>Mobile</th>
                                        <th>Company name</th>
		<th>City</th>
		<th>Quantity</th>
		<th>Country</th>
		<th>Date</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                               
                                @foreach($lead as $leadlist)
                                <?php $i++ ?>
									<tr>
                                   
		<td>{{ $i}}</td>
        <td>{{ $leadlist->title }}</td>
        <td>{{ $leadlist->name }}</td>
        <td>{{ $leadlist->email }}</td>
        <td>{{ $leadlist->mobile }}</td>
        <td>{{ $leadlist->company_name }}</td>
		<td>{{ $leadlist->city }}</td>
		<td>{{ $leadlist->qty }}{{ $leadlist->unit }}</td>
        <td>{{ $leadlist->country }}</td>
        <td>{{ $leadlist->created_at }}</td>
     
        
        <td><input type="checkbox" class="activelead" value="{{ $leadlist->id }}" name="active" data-leadid="{{ $leadlist->id }}" style="cursor:pointer;"></td>
									</tr>
                                    @endforeach
									
								</tbody>
							</table>
						</div>
					</div>
				</div>
                
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
   let selectedLeadIds = [];

   $('.activelead').on('change', function() {
      const leadId = $(this).data('leadid');
      
      if (this.checked) {
         selectedLeadIds.push(leadId);
      } else {
         selectedLeadIds = selectedLeadIds.filter(id => id !== leadId);
      }
   });

   $('#addButton').on('click', function() {
      if (selectedLeadIds.length > 0) {
         $.ajax({
            type: 'POST',
            url: '{{ route("leadlist.updateMultiple") }}',
            data: {
               _token: '{{ csrf_token() }}',
               leadIds: selectedLeadIds
            },
            success: function(response) {
                window.location.href = '{{ url("lead") }}';
            },
            error: function(error) {
               // Handle error, maybe show an error message
            }
         });
      }
   });
});
</script>
	
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