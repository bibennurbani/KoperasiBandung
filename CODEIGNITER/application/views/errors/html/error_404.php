<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$ci =& get_config();
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>404 Page Not Found</title>
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
		<link rel="stylesheet" href="<?php echo $ci['base_url']; ?>assets/themes1/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php echo $ci['base_url']; ?>assets/themes1/js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
		<link rel="stylesheet" href="<?php echo $ci['base_url']; ?>assets/themes1/css/bootstrap.min.css">
		<!-- App CSS -->
		<link rel="stylesheet" href="<?php echo $ci['base_url']; ?>assets/themes1/css/style.css">
		<link rel="stylesheet" href="<?php echo $ci['base_url']; ?>assets/themes1/css/custom.css">
	</head>
	<body>

	<!-- Header Element -->
<div class="navbar">
	<div class="container">
		<!-- Nav Header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<i class="fa fa-bars"></i>
			</button>
			<a class="navbar-brand navbar-brand-image" href="#">
				<img src="<?php echo $ci['base_url'] . 'assets/img/logo.png'; ?>" alt="Site Logo">
			</a>
		</div>
		<!-- End Nav Header -->
		<div class="navbar-collapse collapse">
			<!-- Header Nav Right -->
			<ul class="nav navbar-nav noticebar navbar-left">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-bell"></i>
						<span class="navbar-visible-collapsed">&nbsp;Notifikasi&nbsp;</span>
						<span class="badge">3</span>
					</a>
					<ul class="dropdown-menu noticebar-menu" role="menu">
						<li class="nav-header">
							<div class="pull-left">
								Notifikasi
							</div>
							<div class="pull-right">
								<a href="javascript:;">Tandai Telah Dibaca</a>
							</div>
						</li>
						<li>
							<a href="#" class="noticebar-item">
								<span class="noticebar-item-image">
									<i class="fa fa-cloud-upload text-success"></i>
								</span>
								<span class="noticebar-item-body">
									<strong class="noticebar-item-title">Judul Notifikasi</strong>
									<span class="noticebar-item-text">Deskripsi Singkat Notifikasi.</span>
									<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 12 menit yang lalu</span>
								</span>
							</a>
						</li>
						<li>
							<a href="#" class="noticebar-item">
								<span class="noticebar-item-image">
									<i class="fa fa-ban text-danger"></i>
								</span>
								<span class="noticebar-item-body">
									<strong class="noticebar-item-title">Judul Notifikasi</strong>
									<span class="noticebar-item-text">Deskripsi Singkat Notifikasi.</span>
									<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
								</span>
							</a>
						</li>
						<li class="noticebar-menu-view-all">
							<a href="#">Lihat Seluruh Notifikasi</a>
						</li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope"></i>
						<span class="navbar-visible-collapsed">&nbsp;Pesan&nbsp;</span>
					</a>
					<ul class="dropdown-menu noticebar-menu" role="menu">
						<li class="nav-header">
							<div class="pull-left">
								Pesan
							</div>
							<div class="pull-right">
								<a href="javascript:;">Pesan Baru</a>
							</div>
						</li>
						<li>
							<a href="#" class="noticebar-item">
								<span class="noticebar-item-image">
									<img src="<?php echo $ci['base_url'] . 'assets/img/avatars/avatar-1-xs.png'; ?>" style="width: 50px" alt="">
								</span>
								<span class="noticebar-item-body">
									<strong class="noticebar-item-title">Judul Pesan</strong>
									<span class="noticebar-item-text">Isi dari pesan...</span>
									<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
								</span>
							</a>
						</li>
						<li>
							<a href="#" class="noticebar-item">
								<span class="noticebar-item-image">
									<img src="<?php echo $ci['base_url'] . 'assets/img/avatars/avatar-1-xs.png'; ?>" style="width: 50px" alt="">
								</span>
								<span class="noticebar-item-body">
									<strong class="noticebar-item-title">Judul Pesan</strong>
									<span class="noticebar-item-text">Isi dari pesan...</span>
									<span class="noticebar-item-time"><i class="fa fa-clock-o"></i> 20 menit yang lalu</span>
								</span>
							</a>
						</li>
						<li class="noticebar-menu-view-all">
							<a href="#">Lihat Semua Pesan</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- End Header Nav Right -->
			<!-- Header Nav Left -->
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown navbar-profile">
					<a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
						<img src="<?php echo $ci['base_url'] . 'assets/img/avatars/avatar-1-xs.png'; ?>" class="navbar-profile-avatar" alt="">
						<span class="navbar-profile-label">Username &nbsp;</span>
						<i class="fa fa-caret-down"></i>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li>
							<a href="#">
								<i class="fa fa-user"></i>
								&nbsp;&nbsp;Profil Saya
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-dollar"></i>
								&nbsp;&nbsp;Informasi &amp; Harga
							</a>
						</li>
						<li>
							<a href="#">
								<i class="fa fa-cogs"></i>
								&nbsp;&nbsp;Pengaturan
							</a>
						</li>
						<li class="divider"></li>
						<li>
							<a href="#">
								<i class="fa fa-sign-out"></i>
								&nbsp;&nbsp;Keluar
							</a>
						</li>
					</ul>
				</li>
			</ul>
			<!-- End Header Nav Left -->
		</div>
	</div>
</div>
<!-- End Header Element -->

<!-- Navbar Element -->
<div class="mainbar">
	<div class="container">
		<button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
		<i class="fa fa-bars"></i>
		</button>
		<div class="mainbar-collapse collapse">
			<ul class="nav navbar-nav mainbar-nav">
				<li class="active">
					<a href="<?php echo $ci['base_url'] . 'view_ui/dasboard_v'; ?>">
						<i class="fa fa-dashboard"></i>
						Dashboard
					</a>
				</li>
				<li class="dropdown ">
					<a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
						<i class="fa fa-book"></i>
						Pendataan
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo $ci['base_url'] . 'view_ui/pendataan_buruh_v'; ?>"><i class="fa fa-user nav-icon"></i> Buruh</a></li>
						<li><a href="<?php echo $ci['base_url'] . 'view_ui/pendataan_koperasi_v'; ?>"><i class="fa fa-building-o nav-icon"></i> Koperasi</a></li>
						<li><a href="<?php echo $ci['base_url'] . 'view_ui/pendataan_supplier_v'; ?>"><i class="fa fa-users nav-icon"></i> Supplier</a></li>
						<li><a href="<?php echo $ci['base_url'] . 'view_ui/pendataan_barang_v'; ?>"><i class="fa fa-hdd-o nav-icon"></i> Barang / Sembako</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
						<i class="fa fa-bullseye"></i>
						Transaksional
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-shopping-cart nav-icon"></i> Pemesanan</a></li>
						<li><a href="#"><i class="fa fa-money nav-icon"></i> Pembayaran</a></li>
						<li><a href="#"><i class="fa fa-truck nav-icon"></i> Pengiriman</a></li>
						<li><a href="#"><i class="fa fa-ticket nav-icon"></i> Return</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
						<i class="fa fa-files-o"></i>
						Pengelolaan Informasi
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#"><i class="fa fa-dollar nav-icon"></i> Informasi Harga Harian</a></li>
						<li><a href="#"><i class="fa fa-bar-chart-o nav-icon"></i> Statistik Pembelian</a></li>
						<li><a href="#"><i class="fa fa-users nav-icon"></i> Status Member</a></li>
					</ul>
				</li>
				<li class="dropdown ">
					<a href="#contact" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown">
						<i class="fa fa-inbox"></i>
						Pelaporan
						<span class="caret"></span>
					</a>
					<ul class="dropdown-menu" role="menu">
						<li class="dropdown-submenu">
							<a tabindex="-1" href="#">
								<i class="fa fa-file-o"></i>
								&nbsp;&nbsp;Pelaporan Berkala
							</a>
							<ul class="dropdown-menu">
								<li>
									<a href="#">
										<i class="fa fa-table"></i>
										&nbsp;&nbsp;Tabel
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fa fa-bar-chart-o"></i>
										&nbsp;&nbsp;Grafik
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- End Navbar Element -->


<div class="container">

  <div class="content">

    <div class="content-container">

      

      <div class="row">

        <div class="col-md-12">

          <div class="error-container">

            <div class="error-code">
              404
            </div> <!-- /.error-code -->

            <div class="error-details">
              <h4><?php echo $heading; ?>.</h4>
              <p><?php echo $message; ?></p>
            </div> <!-- /.error-details -->

          </div> <!-- /.error -->

        </div> <!-- /.col-md-12 -->

      </div> <!-- /.row -->

      <br><br>



        

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->


<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <h4>Tentang aplikasi</h4>
        <br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr>
        <p>&copy; <?php echo date('Y') ?> All Rights Reserved.</p>
        </div> <!-- /.col -->
        <div class="col-sm-3">
          <h4>Dukungan</h4>
          <br>
          <ul class="icons-list">
            <li>
              <i class="fa fa-angle-double-right icon-li"></i>
              <a href="javascript:;">Link 1</a>
            </li>
          </ul>
          </div> <!-- /.col -->
          <div class="col-sm-3">
          <h4>Dukungan</h4>
          <br>
          <ul class="icons-list">
            <li>
              <i class="fa fa-angle-double-right icon-li"></i>
              <a href="javascript:;">Link 1</a>
            </li>
          </ul>
          </div> <!-- /.col -->
          <div class="col-sm-3">
          <h4>Dukungan</h4>
          <br>
          <ul class="icons-list">
            <li>
              <i class="fa fa-angle-double-right icon-li"></i>
              <a href="javascript:;">Link 1</a>
            </li>
          </ul>
          </div> <!-- /.col -->
          </div> <!-- /.row -->
          </div> <!-- /.container -->
          
        </footer>

  <script src="<?php echo $ci['base_url']; ?>assets/themes1/js/libs/jquery-1.10.1.min.js"></script>
  <script src="<?php echo $ci['base_url']; ?>assets/themes1/js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="<?php echo $ci['base_url']; ?>assets/themes1/js/libs/bootstrap.min.js"></script>

  <!--[if lt IE 9]>
  <script src="<?php echo $ci['base_url']; ?>js/libs/excanvas.compiled.js"></script>
  <![endif]-->
  <!-- App JS -->
  <script src="<?php echo $ci['base_url']; ?>assets/themes1/js/script.js"></script>
		<div id="container">
			<h1></h1>
			
		</div>
	</body>
</html>