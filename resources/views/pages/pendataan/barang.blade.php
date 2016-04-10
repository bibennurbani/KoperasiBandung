@extends('layouts.koprasitmplt')
@section('content')
<div class="content-header">
	<h2 class="content-header-title">Pendataan Barang</h2>
	<ol class="breadcrumb">
		<li><a href="/dashboard">Home</a></li>
		<li><a href="javascript:;">Pendataan</a></li>
		<li class="active">Data Barang</li>
	</ol>
</div>
					<br>
<div class="portlet">
{!! Form::open(array('route' => 'pendataan.barang.store')) !!}
	<div class="portlet-header">
		<h3>
		<i class="fa fa-tasks"></i>
		Form Barang
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
						<label for="text-input">Nama</label>
						<input type="text" id="text-input" class="form-control" />
					</div>
					<div class="form-group">
						<label for="textarea-input">Descriptions</label>
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
	{!! Form::close() !!}
</div>
					<br>
<div class="portlet">
	<div class="portlet-header">
		<h3>
		<i class="fa fa-tasks"></i>
		Data Barang
		</h3>
	</div>
	@if ($barang->count())
	<div class="portlet-content">
		<div class="table-responsive">
			<table id="statusTable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Descriptions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($barang as $item)
                     <tr>
                        <td>{{ $item['code'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['description'] }}</td>
                      </tr>
                    @endforeach           
                    </tbody>
                    <tfoot>
                     <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Descriptions</th>
                      </tr>
                    </tfoot>
                  </table>
		</div>
	</div>
	@else
    	Data Barang Masih Kosong
	@endif
</div>				
@endsection

@section('script')
<script>
	$(function () {
        $("#statusTable").DataTable();
      });
</script>
@endsection