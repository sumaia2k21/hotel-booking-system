
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Room Management</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<link rel="stylesheet" href="{{url('/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="{{url('/css/ready.css')}}">
	<link rel="stylesheet" href="{{url('/css/demo.css')}}">
<!-- font link -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/v4-shims.css">

</head>
<body>
	<div class="wrapper">
    @include('admin.backend.partials.header')
		
			@include('admin.backend.partials.sidebar')
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid">
						<h4 class="page-title">Hotel Booking Management System</h4>

						@yield('content')
						
						
				</div>
				@include('admin.backend.partials.footer')
			</div>
		</div>
	</div>
	<!-- Modal -->
	<!-- <div class="modal fade" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
				<div class="modal-header bg-primary">
					<h6 class="modal-title"><i class="la la-frown-o"></i> Under Development</h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body text-center">									
					<p>Currently the pro version of the <b>Ready Dashboard</b> Bootstrap is in progress development</p>
					<p>
						<b>We'll let you know when it's done</b></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				</div>
			</div>
		</div>
	</div> -->
</body>
<script src="{{url('/js/jquery.3.2.1.min.js')}}"></script>
<script src="{{url('/js/jquery-ui.min.js')}}"></script>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('/js/bootstrap.min.js')}}"></script>
<script src="{{url('/js/chartist.min.js')}}"></script>
<script src="{{url('/js/chartist-plugin-tooltip.min.js')}}"></script>
<script src="{{url('/js/bootstrap-notify.min.js')}}"></script>
<script src="{{url('/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{url('/js/jquery.mapael.min.js')}}"></script>
<script src="{{url('/js/world_countries.min.js')}}"></script>
<script src="{{url('/js/circles.min.js')}}"></script>
<script src="{{url('/js/jquery.scrollbar.min.js')}}"></script>
<!-- <script src="{{url('/js/ready.min.js')}}"></script> -->
<!-- <script src="{{url('/js/demo.js')}}"></script> -->
</html>