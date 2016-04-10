<div class="content-header">
	<h2 class="content-header-title">Pendataan Buruh</h2>
	<ol class="breadcrumb">
		<li><a href="dashboard.html">Home</a></li>
		<li><a href="javascript:;">Pendataan</a></li>
		<li class="active">Data Buruh</li>
	</ol>
</div>
<br>
<div class="portlet">
	<div class="portlet-header">
		<h3>
		<i class="fa fa-tasks"></i>
		Form Buruh
		</h3>
	</div>
	<div class="portlet-content">
		<div class="row">
			<div class="col-sm-12">
				<div class="form-group">
					<label for="text-input">Nama</label>
					<input type="text" id="text-input" class="form-control" />
				</div>
				<div class="form-group">
					<label for="textarea-input">Alamat</label>
					<textarea name="textarea-input" id="textarea-input" cols="10" rows="3" class="form-control"></textarea>
				</div>
			</div>
		</div>
	</div>
	<div class="portlet-footer">
		<div class="text-right">
			<button class="btn btn-primary">Proses</button>
		</div>
	</div>
</div>
<br>
<div class="portlet">
	<div class="portlet-header">
		<h3>
		<i class="fa fa-tasks"></i>
		Data Buruh
		</h3>
	</div>
	<div class="portlet-content">
		<div class="table-responsive">
			<table
				class="table table-striped table-bordered table-hover table-highlight table-checkable"
				data-provide="datatable"
				data-display-rows="10"
				data-info="true"
				data-search="true"
				data-length-change="true"
				data-paginate="true"
				>
				<thead>
					<tr>
						<th class="checkbox-column">
							<input type="checkbox" class="icheck-input">
						</th>
						<th data-filterable="true" data-sortable="true" data-direction="desc">Nama Buruh</th>
						<th data-direction="asc" data-filterable="true" data-sortable="true">Alamat</th>
						<th data-filterable="true" data-sortable="true">Daftar Pada</th>
						<th data-filterable="false" class="hidden-xs hidden-sm">#</th>
					</tr>
				</thead>
				<tbody>
					<?php for ($i=0; $i < 50; $i++) { ?>
					<tr>
						<td class="checkbox-column">
							<input type="checkbox" class="icheck-input">
						</td>
						<td>Nama Buruh</td>
						<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</td>
						<td>DD-MM-YYYY</td>
						<td class="hidden-xs hidden-sm">
							<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
								<i class="fa fa-edit"></i>
							</a>&nbsp;
							<a href="javascript:void(0);" class="btn btn-xs btn-primary" data-original-title="Approve">
								<i class="fa fa-trash-o"></i>
							</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>