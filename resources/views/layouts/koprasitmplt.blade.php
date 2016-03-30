<!DOCTYPE html>
<html>
	<head>
		@include('includes.koprasi.head')
	</head>
	<body>
		<!-- Header Element -->
		@include('includes.koprasi.header')
		<!-- End Header Element -->
		<!-- Navbar Element -->
		@include('includes.koprasi.navbar')
		<!-- End Navbar Element -->
		<!-- Content Element -->
		<div class="container">
			<div class="content">
				<div class="content-container">					
					@yield('content')
				</div>				
			</div>
		</div>
		<!-- End Content Element -->
		@include('includes.koprasi.scripts')
		@yield('script')
	</body>
</html>