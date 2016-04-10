<div class="content-header">
	<h2 class="content-header-title">Transaksi Pemesanan</h2>
	<ol class="breadcrumb">
		<li><a href="dashboard.html">Home</a></li>
		<li><a href="javascript:;">Transaksi</a></li>
		<li class="active">Pemesanan</li>
	</ol>
</div>
<br>
<div class="row">
	<div class="col-md-8">
		<div class="portlet">
			<div class="portlet-header">
				<h3>
				<i class="fa fa-tasks"></i>
				Data Pemesanan Barang
				</h3>
				<ul class="portlet-tools pull-right">
					<li>
						<button type="button" class="btn btn-secondary btn-sm">
						Barang Baru
						</button>
						
				</li>
			</ul>
		</div>
		<div class="portlet-content">
			<div class="form-horizontal">
				<div class="form-group">
					<label class="col-md-3">Cari / Scan Barang</label>
					<div class="col-md-9">
						<input type="text" class="form-control" placeholder="">
					</div>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-bordered table-hover">
					<thead>
						<tr>
							<th>Kode</th>
							<th>Nama Barang</th>
							<th>Harga Barang</th>
							<th width="10%">QTY</th>
							<th>Disc %</th>
							<th>Total</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>XXXXXXXXX</td>
							<td>Barang XXXXXXXXX</td>
							<td>Rp. </td>
							<td><input type="text" class="form-control" placeholder=""></td>
							<td>XX %</td>
							<td>Rp. </td>
							<td>
								<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
									<i class="fa fa-edit"></i>
								</a>&nbsp;
								<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
									<i class="fa fa-trash-o"></i>
								</a>
							</td>
						</tr>
					</tbody>
					<tfoot>
					<tr>
						<th>Kode</th>
						<th>Nama Barang</th>
						<th>Harga Barang</th>
						<th>QTY</th>
						<th>Disc %</th>
						<th>Total</th>
						<th>#</th>
					</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="col-md-4">
	<div class="portlet">
		<div class="portlet-header">
			<h3>
			<i class="fa fa-tasks"></i>
			Data Supplier
			</h3>
		</div>
		<div class="portlet-content">
			<div class="form-group">
				<label for="text-input">Pilih Supplier</label>
				<input type="text" id="text-input" class="form-control" />
			</div>
			<div class="form-group">
				<label for="text-input">Atau</label>
				<button class="btn btn-primary col-sm-12">Supplier Baru</button>
			</div>
			<br>
			<hr/>
			<div class="form-group">
				<label for="text-input">Total</label>
				<input type="text" id="text-input" class="form-control" readonly />
			</div>
			<div class="form-group">
				<label for="text-input">Jenis Pembayaran</label>
				<select id="select-input" class="form-control">
					<option>Pilih Jenis Pembayaran</option>
					<option>Debit</option>
					<option>Kredit</option>
				</select>
			</div>
			<div class="form-group">
				<label for="text-input">Keterangan</label>
				<textarea name="textarea-input" id="textarea-input" cols="10" rows="3" class="form-control"></textarea>
			</div>
		</div>
		
		<div class="portlet-footer">
			<div class="text-right">
				<button class="btn btn-default">Batal</button>
				<a class="btn btn-primary" href="<?php echo base_url('view_ui/transaksi_invoice_v'); ?>">Proses</a>
			</div>
		</div>
	</div>
</div>
</div>