<!DOCTYPE html>
<html>
  <head>
   	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <!-- Bootstrap core CSS -->
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.5/css/mdb.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="/ven/bootstrap/css/bootstrap.min.css">
	<!-- Custom fonts for this template -->
	<link href="/ven/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Plugin CSS -->
	

 


	<!-- Custom styles for this template -->
	<link href="/css/sb-admin.css" rel="stylesheet">
	
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"> -->


<style type="text/css">
	.custom-file-input:before{
  content: "Browse";
}
.custom-file-input:after{
  content: "Add files..";
}
</style>



  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
	  <a class="navbar-brand" href="./">Showtimes Admin Panel</a>
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarResponsive">
	    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
	      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Search">
	        <a class="nav-link" href="/admin/movie">
	          
	          <span class="nav-link-text">
	          	Movie Management
	            </span>
	        </a>
	      </li>
	      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Search">
	        <a class="nav-link" href="/admin/theater">
	          
	          <span class="nav-link-text">
	          	Theater Management
	            </span>
	        </a>
	      </li>
	      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Search">
	        <a class="nav-link" href="/admin/show">
	          
	          <span class="nav-link-text">
	          	Show Management
	            </span>
	        </a>
	      </li>
	      

	    </ul>
	    <ul class="navbar-nav sidenav-toggler">
	      <li class="nav-item">
	        <a class="nav-link text-center" id="sidenavToggler">
	          <i class="fa fa-fw fa-angle-left"></i>
	        </a>
	      </li>
	    </ul>
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item">
	        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
	          <i class="fa fa-fw fa-sign-out"></i>
	          Logout</a>
	      </li>
	    </ul>
	  </div>
	</nav>



	<div class="mt-5">
<div class="container-flued">
    	@yield('AdminContent')
</div>
	</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/ven/popper/popper.min.js"></script>
	<script src="/ven/bootstrap/js/bootstrap.min.js"></script>
	


	<!-- Plugin JavaScript -->
	<script src="/ven/jquery-easing/jquery.easing.min.js"></script>
	<!-- <script src="/ven/chart.js/Chart.min.js"></script> -->

	<!-- Custom scripts for this template -->
	<!-- <script src="/js/sb-admin.js"></script> -->
    
  </body>
</html>