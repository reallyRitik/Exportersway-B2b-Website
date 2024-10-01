@extends('admin.navmanu')
@section('maincontent')
<!doctype html>
<html lang="en">

<body class="bg-theme bg-theme2">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Update</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Membership</li>
							</ol>
						</nav>
					</div>
					
				</div>
				<!--end breadcrumb-->

				<!-- Repeater Html Start -->
                <div id="repeater">
                   
					
                    <!-- Repeater Items -->
                    <div class="items" data-group="test">
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
                                border: 2px solid darkslategray;
                                border-bottom: 4px solid darkslategray;
                                padding: 10px;
                                background-color: #88a8db;
                                color: black;
                                border: 1px solid #ccc;
                                transition: opacity 3s ease-in-out;
                            }

                            .session-message1.fade-out {
                                opacity: 0;
                                transition: opacity 2s ease-in-out;
                            }
                        </style>
                        @if(session('success'))
                        <div id="session-message1" class="session-message1">
                            {{ session('success') }}
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
						<div class="card">
        <table class="table">
            <thead>
                <tr>
                    <th>Rank</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rankHistory as $history)
                    <tr>
                        <td>{{ $history['rank_name'] }}</td>
                        <td>{{ \Carbon\Carbon::parse($history['updated_at'])->format('Y-m-d H:i:s') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

							<div class="card-body">
                            <form action="{{ url('submitupdatemembership', ['id' => $customer->id]) }}" method="post">

                                                           @csrf
								<!-- Repeater Content -->
								<div class="item-content">
                                <div class="mb-3">
                                <label for="inputName1" class="form-label">Update Membership </label>
                                <select class="form-select mb-3" name="rank" id="simpleinput">
                                    
                                <option >---- Select Package ---</option>
								<option value="6">Elite Plus</option>
								<option value="1">Elite</option>
								<option value="2">PRO</option>
								<option value="3">Growing</option>
								<option value="4">Tetra</option>
								<option value="5">Free</option>
								</select>
</div>
									
                                   
									
								</div>
								<!-- Repeater Remove Btn -->
								<div class="repeater-remove-btn">
									<button class="btn btn-light remove-btn px-4">
										Submit
									</button>
								</div>
                            </form>
							</div>
						</div>
                    </div>
					<br>
					<br>
					
					<br>
					<br>
					
					<br>
					<br>
					
					<br>
					<br>
					
					<br>
					<br>
					



                </div>
                <!-- Repeater End -->

</body>

</html>
@endsection