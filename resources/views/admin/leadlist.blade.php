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
                        <a href="{{ URL::to('/managelead')}}"><button type="button" class="btn btn-light px-5 radius-30">Manage Lead</button></a>
                    </div>

                </div>
            </div>
        </div>
        <!--end breadcrumb-->

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
                                <th>Title</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Company name</th>
                                <th>City</th>
                                <th>Quantity</th>
                                <th>Country</th>
                                <th>Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lead as $leadlist)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $leadlist->title }}</td>
                                <td>{{ $leadlist->name }}</td>
                                <td>{{ $leadlist->email }}</td>
                                <td>{{ $leadlist->mobile }}</td>
                                <td>{{ $leadlist->company_name }}</td>
                                <td>{{ $leadlist->city }}</td>
                                <td>{{ $leadlist->qty }}{{ $leadlist->unit }}</td>
                                <td>{{ $leadlist->country }}</td>
                                <td>{{ $leadlist->created_at }}</td>
                                <td>
                                    @if($leadlist->active == 1)
                                    <b style="color: lime;">Active</b>
                                    @else
                                    <b style="color: red;">Not Active</b>
                                    @endif
                                </td>
                                <td style="display: flex;">
                                    <a href="{{ URL::to('/editlead')}}/{{$leadlist->id}}" title="Lead Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;
                                    <form action="{{ url('/leaddelete', ['id' => $leadlist->id]) }}" method="post" id="deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="Lead Delete" onclick="return confirm('Are you sure you want to delete?')" style="background: #252E32; border: none; color: white;">
                                            <i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div id="pagination-links">
                        {{ $lead->onEachSide(1)->links() }}
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
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
        $(document).ready(function() {
    $('#searchInput').on('keyup', function(event) {
        event.preventDefault(); // Prevent default form submission behavior
        var searchTerm = $(this).val();
        search(searchTerm); // Call the search function with the search term
    });

    function search(searchTerm) {
        $.ajax({
            url: "{{ route('leadlist.search') }}",
            type: "GET",
            data: {
                search: searchTerm
            },
            success: function(response) {
                // Assuming your response is paginated, you may need to access the data differently
                var html = '';
                $.each(response.data, function(index, lead) {
                    var createdAt = new Date(lead.created_at);
                var formattedDate = createdAt.toISOString().split('T')[0];
                html += '<tr>';
                html += '<td>' + (index + 1) + '</td>';
                html += '<td>' + lead.title + '</td>';
                html += '<td>' + lead.name + '</td>';
                html += '<td>' + lead.email + '</td>';
                html += '<td>' + lead.mobile + '</td>';
                html += '<td>' + lead.company_name + '</td>';
                html += '<td>' + lead.city + '</td>';
                html += '<td>' + lead.qty + lead.unit + '</td>';
                html += '<td>' + lead.country + '</td>';
                html += '<td>' + formattedDate + '</td>';
                html += '<td>';
                if (lead.active == 1) {
                    html += '<b style="color: lime;">Active</b>';
                } else {
                    html += '<b style="color: red;">Not Active</b>';
                }
                html += '</td>';
                html += '<td style="display: flex;">';
                html += '<a href="{{ URL::to('/editlead')}}/' + lead.id + '" title="Lead Edit"><i class="fadeIn animated bx bx-message-square-edit" style="font-size: 23px;"></i></a>&nbsp;&nbsp;';
                html += '<form action="{{ url('/leaddelete') }}/' + lead.id + '" method="post" id="deleteForm">';
                html += '@csrf';
                html += '@method('DELETE')';
                html += '<button type="submit" title="Lead Delete" onclick="return confirm(\'Are you sure you want to delete?\')" style="background: #252E32; border: none; color: white;">';
                html += '<i class="fadeIn animated bx bx-message-square-x" style="font-size: 23px;"></i>';
                html += '</button>';
                html += '</form>';
                html += '</td>';
                html += '</tr>';
            });
            $('#example2 tbody').html(html);
        
        },
               
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
        });
    }
});

  </script>

       
        </body>

</html>
@endsection