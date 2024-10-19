<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
<title>Exportersway- World fastest Growing B2B Network</title>
      <link rel="shortcut icon" href="{{ asset('companylogo/logo.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description">
        <meta content="Coderthemes" name="author">
        <!-- App favicon -->

<!-- App css -->
<link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">

    </head>

    <body class="loading" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <!-- Begin page -->
        <div class="wrapper">
            <!-- ========== Left Sidebar Start ========== -->
            @extends('admin.navmanu')
                <!-- LOGO -->
               
    
               
                <!-- Sidebar -left -->

           
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <!-- Topbar Start -->

                    @extends('admin.topbar')
                    <!-- end Topbar -->


                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-xxl-8">
                                <!-- start page title -->
                                <div class="page-title-box">
                                   
                                    
                                </div>
                                <!-- end page title -->

                                <!-- tasks panel -->
                                <div class="mt-2">
                                   

                                    <div class="collapse show" id="todayTasks">
                                        <div class="card mb-0">
                                            <div class="card-body">
                                            <!-- Responsive form design I created. Feel free to visit my website at jacoblisic.com -->


                                            <table style="width: 100%;">
	<thead>
	<tr>
		<th>Sno.</th>
		<th>Title</th>
		<th>L1 Category Name</th>
		<th>Discription</th>
		<th>Active</th>
		<th>Status</th>
		
	</tr>
	</thead>
    <?php $i = 0 ?>
    @foreach($allcustomer as $client)
    <?php $i++ ?>
	<tr>
		<td>{{ $i}}</td>

		<td>{{ $client->title }}</td>
        <td>{{ $client->categoryname }}</td>
		<td>{{ $client->details }} </td>

        <td>yes</td>
        <td>
		<div class="btn-group d-table ml-auto" role="group" aria-label="Basic example">
           <a href="{{ URL::to('/editsubcategory')}}}" style="margin-right: 7px;" class="mb-2 btn btn-sm btn-primary" > <i class="fas fa-edit"></i> Edit</a>
           <form action="{{ url('/delete') }}" method="POST" files="true" style="display: inline-block;">
           @csrf
                            @method('DELETE')
                            
                            <button class="mb-2 btn btn-sm btn-danger" type="submit"><i class="icon-material-outline-delete"></i> Delete</button>

                        </form>
                        </div>
</td>
	</tr>
	
	</tbody>
</table>
<style>
    table { 
  width: 50%; 
  border-collapse: collapse; 
}
/* Zebra striping */
tr:nth-of-type(odd) { 
  background: #eee; 
}
th { 
  background: #333; 
  color: white; 
  font-weight: bold; 
}
td, th { 
  padding: 6px; 
  border: 1px solid #ccc; 
  text-align: left; 
}
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	*/
	td:nth-of-type(1):before { content: "Title"; }
	td:nth-of-type(2):before { content: "Category Name"; }
	td:nth-of-type(3):before { content: "Discription"; }
	td:nth-of-type(4):before { content: "Favorite Color"; }
	td:nth-of-type(5):before { content: "Product Image"; }
	td:nth-of-type(6):before { content: "Active"; }
	td:nth-of-type(7):before { content: "Status"; }
}
</style>
    


                                            </div> <!-- end card-body-->
                                        </div> <!-- end card -->
                                    </div> <!-- end .collapse-->
                                </div> <!-- end .mt-2-->

                                
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> © Hyper - Exportersway.com
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-md-block">
                                    <a href="javascript: void(0);">About</a>
                                    <a href="javascript: void(0);">Support</a>
                                    <a href="javascript: void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <div class="rightbar-overlay"></div>
        <!-- /End-bar -->

        <!-- bundle -->
        <script src="assets/js/vendor.min.js"></script>
        <script src="assets/js/app.min.js"></script>

        <!-- quill js -->
        <script src="assets/js/vendor/quill.min.js"></script>
        <!-- Init js-->
        <script src="assets/js/pages/demo.tasks.js"></script>

    </body>

</html>
