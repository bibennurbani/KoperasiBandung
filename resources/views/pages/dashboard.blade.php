@extends('layouts.koprasitmplt')
@section('content')
<div>
						<h4 class="heading-inline">Informasi
						&nbsp;&nbsp;<small>Per Tanggal 15 Maret - 22 Maret Tahun 2015</small>
						&nbsp;&nbsp;</h4>
</div>
					<br>
<div class="row">
	<div class="col-sm-6 col-md-3">
		<div class="row-stat">
			<p class="row-stat-label">Pendapatan Hari Ini</p>
			<h3 class="row-stat-value">Rp. 000000000</h3>
			<span class="label label-success row-stat-badge">+00%</span>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="row-stat">
			<p class="row-stat-label">Pendapatan Bulan Ini</p>
			<h3 class="row-stat-value">Rp. 000000000</h3>
			<span class="label label-success row-stat-badge">+00%</span>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="row-stat">
			<p class="row-stat-label">Total Barang</p>
			<h3 class="row-stat-value">000000000</h3>
			<span class="label label-success row-stat-badge">+00%</span>
		</div>
	</div>
	<div class="col-sm-6 col-md-3">
		<div class="row-stat">
			<p class="row-stat-label">Jumlah Pengguna</p>
			<h3 class="row-stat-value">000000000</h3>
			<span class="label label-danger row-stat-badge">+00%</span>
		</div>
	</div>
	
</div>
					<br>
<div class="row">
	<div class="col-md-8">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-bar-chart-o"></i>
				Grafik Pengiriman
				</h3>
			</div>
			<div class="portlet-content">
				<div class="pull-left">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-sm btn-default">
							<input type="radio" name="options" id="option1"> Day
						</label>
						<label class="btn btn-sm btn-default">
							<input type="radio" name="options" id="option2"> Week
						</label>
						<label class="btn btn-sm btn-default active">
							<input type="radio" name="options" id="option3"> Month
						</label>
					</div>
				</div>
				<div class="clear"></div>
				<hr />
				<div id="area-chart" class="chart-holder"></div>
			</div>
		</div>
		
		
		
	</div>
	<div class="col-md-4">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-bar-chart-o"></i>
				Grafik Transaksional
				</h3>
			</div>
			<div class="portlet-content">
				<div id="donut-chart" class="chart-holder-225"></div>
				
			</div>
		</div>
	</div>
	<div class="col-md-12">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-file-text-o"></i>
				Daftar Barang / Sembako Terbaru
				</h3>
			</div>
			<div class="portlet-content panel-thread scrollable-panel">
				<ul class="panel-lists">
					<li>
						<img src="assets/img/avatars/avatar-1-md.png" alt="Avatar" class="panel-list-avatar">
						<div class="panel-list-content">
							<span class="panel-list-time">Rp. 00000000</span>
							<a href="#" class="panel-list-title">Nama Barang.</a>
							<span class="panel-list-meta">Dimiliki Oleh <a href="#">Nama Suplier</a></span>
						</div>
					</li>
					<li>
						<img src="assets/img/avatars/avatar-1-md.png" alt="Avatar" class="panel-list-avatar">
						<div class="panel-list-content">
							<span class="panel-list-time">Rp. 00000000</span>
							<a href="#" class="panel-list-title">Nama Barang.</a>
							<span class="panel-list-meta">Dimiliki Oleh <a href="#">Nama Suplier</a></span>
						</div>
					</li>
					<li>
						<img src="assets/img/avatars/avatar-1-md.png" alt="Avatar" class="panel-list-avatar">
						<div class="panel-list-content">
							<span class="panel-list-time">Rp. 00000000</span>
							<a href="#" class="panel-list-title">Nama Barang.</a>
							<span class="panel-list-meta">Dimiliki Oleh <a href="#">Nama Suplier</a></span>
						</div>
					</li>
					<li>
						<img src="assets/img/avatars/avatar-1-md.png" alt="Avatar" class="panel-list-avatar">
						<div class="panel-list-content">
							<span class="panel-list-time">Rp. 00000000</span>
							<a href="#" class="panel-list-title">Nama Barang.</a>
							<span class="panel-list-meta">Dimiliki Oleh <a href="#">Nama Suplier</a></span>
						</div>
					</li>
					<li>
						<img src="assets/img/avatars/avatar-1-md.png" alt="Avatar" class="panel-list-avatar">
						<div class="panel-list-content">
							<span class="panel-list-time">Rp. 00000000</span>
							<a href="#" class="panel-list-title">Nama Barang.</a>
							<span class="panel-list-meta">Dimiliki Oleh <a href="#">Nama Suplier</a></span>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="portlet portlet-table">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-group"></i>
				Daftar Permintaan
				</h3>
				<ul class="portlet-tools pull-right">
					<li>
						<button class="btn btn-sm btn-default">
						Tambah Permintaan
						</button>
					</li>
				</ul>
			</div>
			<div class="portlet-content">
				<div class="table-responsive">
					<table id="user-signups" class="table table-striped table-bordered table-checkable">
						<thead>
							<tr>
								<th class="checkbox-column">
									<input type="checkbox" id="check-all" class="icheck-input" />
								</th>
								<th class="hidden-xs">Pemesan</th>
								<th>Tanggal Transaksi</th>
								<th>Total Harga</th>
								<th>Status</th>
								<th class="text-center" style="width: 90px">#</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="checkbox-column">
									<input type="checkbox" name="actiony" value="joey" class="icheck-input">
								</td>
								<td class="hidden-xs">Nama Buruh</td>
								<td>DD-MM-YYYY</td>
								<td>Rp. 00000000</td>
								<td><span class="label label-success">Dikirim</span></td>
								<td class="text-center">
									<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
										<i class="fa fa-edit"></i>
									</a>&nbsp;
									<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
							<tr>
								<td class="checkbox-column">
									<input type="checkbox" name="actiony" value="wolf" class="icheck-input">
								</td>
								<td class="hidden-xs">Nama Koperasi</td>
								<td>DD-MM-YYYY</td>
								<td>Rp. 00000000</td>
								<td><span class="label label-default">Pending</span></td>
								<td class="text-center">
									<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
										<i class="fa fa-edit"></i>
									</a>&nbsp;
									<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
										<i class="fa fa-trash-o"></i>
									</a>
								</td>
							</tr>
						</tbody>
					</table>
					
				</div>
				
			</div>
			<div class="portlet-footer">
				<div class="text-right">
					Apply to Selected: &nbsp;&nbsp;
					<select id="apply-selected" name="table-select" class="ui-select2" style="width: 125px">
						<option value="">Pilih Aksi</option>
						<option value="delete">Delete</option>
						
					</select>
				</div>
			</div>
		</div>
		<div class="portlet">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-calendar"></i>
				Jadwal Pengiriman
				</h3>
			</div>
			<div class="portlet-content">
				<div id="full-calendar"></div>
			</div>
		</div>
	</div>
</div>
@endsection