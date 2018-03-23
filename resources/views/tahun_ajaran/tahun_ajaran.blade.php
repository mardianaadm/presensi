@extends('layouts.main')

@section('content')
<body>
	<section class="content">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-success">
            	<div class="box-header">
              		<h3 class="box-title">Tambah Tahun Ajaran</h3></br></br>
              		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah Tahun Ajaran</button>
            	</div>
            <!-- /.box-header -->
	            <div class="box-body">
	              	<table id="example1" class="table table-bordered table-hover">
		                <thead>
			                <tr>
			                  <th>Semester</th>
			                  <th>Tahun Ajaran</th>
			                  <th>Status</th>
			                  <th>Aksi</th>
			                </tr>
		                </thead>
                    <tbody>
                      @foreach ($tahun_ajaran as $key => $value)
                        <tr>
                          <td>{{ $value->nama_semester }}</td>
                          <td>{{ $value->masa_tahun_ajaran }}</td>
                          <td>{{ $value->status_tahun_ajaran }}</td>
                          <td>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-{{ $value->id_tahun_ajaran }}">Ubah</button>
                          </td>
                        </tr>
                      @endforeach
	              	</table>
	            </div> <!-- /.box-body -->            
          	</div> <!-- /.box -->          
        </div> <!-- /.col -->

        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tahun Ajaran</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                    <div class="box-body">
                    	<div class="form-group">
	                      	<div class="form-group">
		                        <label for="nama_jurusan" class="col-md-4 control-label">Semester</label>
		                      <div class="col-md-4">
		                        <label>
		                          <select id="nama_jurusan" type="nama_jurusan" class="form-control" name="nama_jurusan" required>
		                            <option>---</option>
		                            <option>Ganjil</option>
		                            <option>Genap</option>
		                          </select>
		                        </label>
		                      </div>
		                  	</div>
                      	<div class="form-group">
                          <label for="inputNama" class="col-sm-4 control-label">Tahun Ajaran</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputNama" placeholder="----/----">
                          </div>
                      	</div>
                      	<div class="form-group">
	                			<label for="tingkat" class="col-md-4 control-label">Status</label>
	                      			<div class="col-md-4">
				                        <label>
				                  			<div class="radio">
				                    		<label>
				                      			<input type="radio" name="optionsAktif" id="optionsAktif" value="optionsAktif" checked>Aktif
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="optionsTdkAktif" id="optionsTdkAktif" value="optionsTdkAktif">Tidak Aktif
				                    		</label>
				                  		</div>
                                </label>
				                      </div>
	            			    </div>
                      </div>
                    </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success">Simpan</button>
              </div>
                </form>
                </div>
                </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
</section>
</body>
@endsection
@section('js')
<script type="text/javascript">
$('#example1').DataTable({
  "ordering": false
});
</script>
@endsection