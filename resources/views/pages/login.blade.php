<!DOCTYPE html>
<html>
	<head>
		@include('includes.koprasi.head')
	</head>
	<body class="account-bg">
		<div class="navbar">
			<div class="container">
				<div class="navbar-header">
					<a class="navbar-brand navbar-brand-image" href="#">
						<img src="{{ asset('/koprasi/assets/img/logo.png')}}" alt="Aplikasi Koperasi">
					</a>
				</div>
			</div>
		</div>
		<hr class="account-header-divider">
		<div class="account-wrapper">
			<div class="account-logo">
				<img src="{{ asset('/koprasi/assets/img/logo-login.png')}}" alt="Aplikasi Koperasi">
			</div>
			<div class="account-body">
				<h3 class="account-body-title">Aplikasi Koperasi.</h3>
				<h5 class="account-body-subtitle">Silahkan login untuk menggunakan aplikasi.</h5>
				<form class="form account-form" method="POST" action="/dashboard">
					<div class="form-group">
						<label for="login-username" class="placeholder-hidden">Username</label>
						<input type="text" class="form-control" id="login-username" placeholder="Username" tabindex="1">
					</div>
					<div class="form-group">
						<label for="login-password" class="placeholder-hidden">Password</label>
						<input type="password" class="form-control" id="login-password" placeholder="Password" tabindex="2">
					</div>
					<div class="form-group clearfix">
						<div class="pull-left">
							<label class="checkbox-inline">
								<input type="checkbox" class="" value="" tabindex="3">Ingatkan Saya
							</label>
						</div>
						<div class="pull-right">
							<a href="lupa_password.html">Lupa Password?</a>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block btn-lg" tabindex="4">
						Login &nbsp; <i class="fa fa-play-circle"></i>
						</button>
					</div>
				</form>
			</div>
			<div class="account-footer">
				<p>
					Belum Memiliki Akun? &nbsp;
					<a href="daftar_akun.html" class="">Daftar</a>
				</p>
			</div>
		</div>
		
		<script src="{{ asset('/koprasi/assets/js/libs/jquery-1.10.1.min.js')}}"></script>
		<script src="{{ asset('/koprasi/assets/js/libs/jquery-ui-1.9.2.custom.min.js')}}"></script>
		<script src="{{ asset('/koprasi/assets/js/libs/bootstrap.min.js')}}"></script>
		
		<!-- App JS -->
		<script src="{{ asset('/koprasi/assets/js/script.js')}}"></script>
	</body>
</html>