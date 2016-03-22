@extends('layouts.sidebar')
@section('content')
<div class='row'>
        <div class="col-xs-12">
            <!-- Box -->
            <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Status</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="statusTable" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Code</th>
                        <th>Name</th>
                        <th>Descriptions</th>
                      </tr>
                    </thead>
                    <tbody>
                     @foreach($status as $item)
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
                </div><!-- /.box-body -->
              </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row --> 
    <script>
      $(function () {
        $("#statusTable").DataTable();
      });
</script>   
@endsection