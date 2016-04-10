<!-- Navbar Element -->
<div class="mainbar">
	<div class="container">
		<button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
		<i class="fa fa-bars"></i>
		</button>
		<div class="mainbar-collapse collapse">
			<ul class="nav navbar-nav mainbar-nav">
				<li class="active">
					<a href="<?php echo base_url('view_ui/dasboard_v'); ?>">
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
						<li><a href="<?php echo base_url('view_ui/pendataan_buruh_v'); ?>"><i class="fa fa-user nav-icon"></i> Buruh</a></li>
						<li><a href="<?php echo base_url('view_ui/pendataan_koperasi_v'); ?>"><i class="fa fa-building-o nav-icon"></i> Koperasi</a></li>
						<li><a href="<?php echo base_url('view_ui/pendataan_supplier_v'); ?>"><i class="fa fa-users nav-icon"></i> Supplier</a></li>
						<li><a href="<?php echo base_url('view_ui/pendataan_barang_v'); ?>"><i class="fa fa-hdd-o nav-icon"></i> Barang / Sembako</a></li>
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