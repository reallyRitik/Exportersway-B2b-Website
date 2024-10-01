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
                            <div class="row">
<div class="col-sm-12 col-md-6">

</div>
<div class="col-sm-12 col-md-6">
<div class="dataTables_filter" id="example2_filter">
    <lable style="display: flex;
    margin-left: 40%;">
        Search:
        <input type="text" class="form-control form-control-sm" id="searchInput" placeholder=""aria-controls="example2">
    </lable>

</div>
</div>
                      </div>
								<thead>
									<tr>
										<th>Sno.</th>
										<th>Client email</th>
										<th>Massage</th>
                                        <th>Email Sent</th>
										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php $i = 0 ?>
                               
                                @foreach($allmail as $mail)
                                <?php $i++ ?>
									<tr>
                                   
		<td>{{ $i}}</td>
        <td>{{$mail->clientemail}}</td>
        @php
            $massage = str_replace('<br />', ' ', $mail->massage);
        @endphp
        <td><span class="truncate">{{ $massage }}</span></td>
        <td>{{
                                                \Carbon\Carbon::parse($mail->created_at)->format('d F Y') }}</td>
     
        
        <td><a href="{{ route('showmail', ['id' => $mail->id]) }}" title="View Mail"><i class="fadeIn animated bx bx-show" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                        
 </td>
									</tr>
									@endforeach
								</tbody>
							</table>
                            <div id="pagination-links">
                        {{ $allmail->onEachSide(1)->links() }}
                    </div>
						</div>
					</div>
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
    color: black; /* Adjust the color as per your preference */
}
                </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
        $(document).ready(function() {
    $('#searchInput').on('keyup', function(event) {
        event.preventDefault(); // Prevent default form submission behavior
        var searchTerm = $(this).val();
        search(searchTerm); // Call the search function with the search term
    });
    

    function search(searchTerm) {
        $.ajax({
            url: "{{ route('searchmail') }}",
            type: "GET",
            data: {
                search: searchTerm
            },
            success: function(response) {
                
                // Assuming your response is paginated, you may need to access the data differently
                var html = '';
                var monthNames = ["January", "February", "March", "April", "May", "June",
    "July", "August", "September", "October", "November", "December"
];
                $.each(response.data, function(index, serchmail) {
                    var created_at = new Date(serchmail.created_at);
    var formatted_date = created_at.getDate() + ' ' + monthNames[created_at.getMonth()] + ' ' + created_at.getFullYear();
    var truncatedMessage = truncateText(serchmail.massage, 8);
    html += '<tr>';
    html += '<td>' + (index + 1) + '</td>';
    html += '<td>' + serchmail.clientemail + '</td>';
    html += '<td class="truncates">' + truncatedMessage + '</td>';
    html += '<td>' + formatted_date + '</td>';
    html += '<td>';
    html += '<a href="{{ URL::to('/showmail')}}/' + serchmail.id + '" title="View Mail"><i class="fadeIn animated bx bx-show" style="font-size: 23px;"></i></a>&nbsp;&nbsp;';
    html += '</td>';
    html += '</tr>';
});

            $('#example2 tbody').html(html);
        
        },
        
               
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
        
        function truncateText(text, maxLength) {
    var words = text.split(' ');
    if (words.length > maxLength) {
        return words.slice(0, maxLength).join(' ') + '...';
    } else {
        return text;
    }
}
    }
});

  </script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var elements = document.getElementsByClassName('truncate');
        for (var i = 0; i < elements.length; i++) {
            var text = elements[i].innerHTML;
            if (text.split(' ').length > 8) {
                var truncatedText = text.split(' ').slice(0, 8).join(' ') + '...';
                elements[i].innerHTML = truncatedText;
            }
        }
    });
</script>

</body>

</html>
@endsection