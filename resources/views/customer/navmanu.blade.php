<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{ asset('companylogo/exportersway-logo.png')}}" type="image/png">
	<!--plugins-->
	<link href="{{asset('newpanelasset/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet">
	<link href="{{asset('newpanelasset/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
	<link href="{{asset('newpanelasset/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet">
	<link href="{{asset('newpanelasset/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
	<!-- loader-->
	<link href="{{asset('newpanelasset/css/pace.min.css')}}" rel="stylesheet">
	<script src="{{asset('newpanelasset/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('newpanelasset/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('newpanelasset/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="../../../css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('newpanelasset/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('newpanelasset/css/icons.css')}}" rel="stylesheet">
	
	<title>Exportersway-Global B2B Marketplace</title>
</head>
<body class="bg-theme bg-theme2">  
<div class="wrapper">
		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
                    <a href="{{url('/')}}">
					<img src="{{ asset('companylogo/exportersway-logo.png')}}" class="logo-icon" alt="logo icon">
                    </a>
                </div>
				<!-- <div>
					<h4 class="logo-text">Dashtrans</h4>
				</div> -->
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
				</div>
			 </div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="{{ url('user') }}" >
						<div class="parent-icon"><i class='bx bx-home-alt'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					
				</li>
				
				<li class="menu-label">Business Profile </li>
				
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-cart'></i>
						</div>
						<div class="menu-title">Add Business Profile</div>
					</a>
					<ul>
						<li> <a href="{{ url('company') }}"><i class='bx bx-radio-circle'></i>Add Company profile</a>
						</li>
						<li> <a href="{{ url('details') }}"><i class='bx bx-radio-circle'></i>Add Contact details</a>
						</li>
						<li> <a href="{{ url('companyabout') }}"><i class='bx bx-radio-circle'></i>Add About Compnay</a>
						</li>
						<li> <a href="{{url('importantdata')}}"><i class='bx bx-radio-circle'></i>Add Important Documents</a>
						</li>
						
						
					</ul>
				</li>
                <li class="menu-label">Our Profile</li>
				<li>
					<a href="{{url('profile')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">User Profile</div>
					</a>
				</li>
				<li>
					<a href="{{url('Changepassword')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Change Password</div>
					</a>
				</li>
                <li class="menu-label">Manage Your Product</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-bookmark-heart'></i>
						</div>
						<div class="menu-title">Add/Manage Product</div>
					</a>
					<ul>
						<li> <a href="{{url('addproduct')}}"><i class='bx bx-radio-circle'></i>Add New Product</a>
						</li>
						<li> <a href="{{url('viewproductlist')}}"><i class='bx bx-radio-circle'></i>Manage product</a>
						</li>
						
					</ul>
				</li>
				
				<li class="menu-label"> My Business Needs</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
						</div>
						<div class="menu-title">Enquiry/verify Leads</div>
					</a>
					<ul>
                    @php
    $userRank = optional(auth()->user()->customer)->rank;
    $userid = auth()->user()->id;
@endphp

						<li> <a href="{{ url('viewlead') }}"><i class='bx bx-radio-circle'></i>Incoming Buyer Leads</a>
						</li>
						<li> <a href="{{url('showenquiry')}}"><i class='bx bx-radio-circle'></i>Incoming Enquiries</a>
						</li>
						
						<li> <a href="{{url('ourrequirements')}}"><i class='bx bx-radio-circle'></i>Add Requirement</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="{{url('feedback')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Feedback</div>
					</a>
				</li>
				<li>
					<a href="{{url('adverties')}}">
						<div class="parent-icon"><i class="bx bx-user-circle"></i>
						</div>
						<div class="menu-title">Advertise with us</div>
					</a>
				</li>
            </ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
		<!--start header -->
		<header>
			<div class="topbar d-flex align-items-center">
				<nav class="navbar navbar-expand gap-3">
					<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
					</div>
				
					<div class="top-menu ms-auto">
						<ul class="navbar-nav align-items-center gap-1">
							<li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
								<a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
								</a>
							</li>
							

							<li class="nav-item dropdown dropdown-app" style="display:none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
								<div class="dropdown-menu dropdown-menu-end p-0">
									<div class="app-container p-2 my-2">
									
				
									</div>
								</div>
							</li>

							<li class="nav-item dropdown dropdown-large" style="display:none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown">
									<i class='bx bx-bell'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
									<a href="javascript:;">
										<div class="msg-header">
											<p class="msg-header-title">Notifications</p>
										</div>
									</a>
									<div class="header-notifications-list">
        
									</div>
									<a href="">
										<div class="text-center msg-footer">
											<button class="btn btn-light w-100">View All Notifications</button>
										</div>
									</a>
								</div>
							</li>
							<li class="nav-item dropdown dropdown-large" style="display:none;">
								<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
									<i class='bx bx-shopping-bag'></i>
								</a>
								<div class="dropdown-menu dropdown-menu-end">
								
									<div class="header-message-list">
									
									
									</div>
								
								</div>
							</li>
						</ul>
					</div>
					<div class="user-box dropdown px-3">
						<a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						     @auth
                
                        @if (auth()->check())
                        @if(auth()->user()->customer)
							<img src="{{ asset('assets/images/companylogo/' . auth()->user()->customer->companylogo) }}" class="user-img" alt="user avatar">
                            @endif  
							<div class="user-info">
                            @if (auth()->check())
								<p class="user-name mb-0">{{ auth()->user()->name }}</p>
                                @endif 
                                  @endif
                                     @endauth
							</div>	
						</a>
						<ul class="dropdown-menu dropdown-menu-end">
							<li><a class="dropdown-item d-flex align-items-center" href="{{url('profile')}}"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
							</li>
							
							<li><a class="dropdown-item d-flex align-items-center" href="{{ url('/user') }}"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
							</li>
						
								<div class="dropdown-divider mb-0"></div>
							</li>
                           
							<li><a class="dropdown-item d-flex align-items-center" href="{{ route('logout') }}"
                      ><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
							</li>
						</ul>
					</div>
				</nav>
			</div>
		</header>
		<!--end header -->

         @yield('maincontent')

        	</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
		<footer class="page-footer">
        @php
    $currentYear = \Carbon\Carbon::now()->year;
@endphp
			<p class="mb-0">Copyright © {{$currentYear}}. All right reserved By Exportersway.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	<div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr>
			<p class="mb-0">Gaussian Texture</p>
			<hr>
			<ul class="switcher">
				<li id="theme1"></li>
				<li id="theme2"></li>
				<li id="theme3"></li>
				<li id="theme4"></li>
				<li id="theme5"></li>
				<li id="theme6"></li>
			</ul>
			<hr>
			<p class="mb-0">Gradient Background</p>
			<hr>
			<ul class="switcher">
				<li id="theme7"></li>
				<li id="theme8"></li>
				<li id="theme9"></li>
				<li id="theme10"></li>
				<li id="theme11"></li>
				<li id="theme12"></li>
				<li id="theme13"></li>
				<li id="theme14"></li>
				<li id="theme15"></li>
			  </ul>
		</div>
	</div>
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('newpanelasset/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('newpanelasset/js/jquery.min.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/apexcharts-bundle/js/apexcharts.min.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('newpanelasset/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	<script>
		$(document).ready(function() {
			$('#Transaction-History').DataTable({
				lengthMenu: [[6, 10, 20, -1], [6, 10, 20, 'Todos']]
			});
		  } );
	</script>
	<script src="{{asset('newpanelasset/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('newpanelasset/js/app.js')}}"></script>
	<!-- <script>
		new PerfectScrollbar('.product-list');
		new PerfectScrollbar('.customers-list');
	</script> -->


</body>
</html>