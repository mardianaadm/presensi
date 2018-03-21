@extends('layouts.main')

@section('content')
<body>
	<section class="content">
    <div class="row">
        <div class="col-md-6">
          	<div class="box box-success">
            	<div class="box-header">
              		<h3 class="box-title">Tambah Jurusan</h3></br></br>
              		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Tambah Jurusan</button>
            	</div>
            <!-- /.box-header -->
	            <div class="box-body">
	              	<table id="example1" class="table table-bordered table-hover">
		                <thead>
			                <tr>
			                  <th>Jurusan</th>
			                  <th>Action</th>
			                </tr>
		                </thead>
                    <tbody>
                      @foreach ($jurusan as $key => $value)
                        <tr>
                          <td>{{ $value->nama_jurusan }}</td>
                          <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-success">Hapus</button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
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
                <h4 class="modal-title">Tambah Jurusan</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="{{ route('master_kelas.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                          <label for="inputNama" class="col-sm-4 control-label">Nama Jurusan</label>
                          <div class="col-sm-4">
                            <input type="text" class="form-control" id="inputNama" placeholder="Jurusan" name="nama_jurusan">
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
                    <div class="modal-footer">
                      <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                      <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                  </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>

        <div class="col-md-6">
          	<div class="box box-success">
            	<div class="box-header">
              		<h3 class="box-title">Tambah Urutan Kelas</h3></br></br>
              		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-urutan">Tambah Urutan Kelas</button>
            	</div>
            <!-- /.box-header -->
	            <div class="box-body">
	              	<table id="example2" class="table table-bordered table-hover">
		                <thead>
			                <tr>
			                  <th>Urutan Kelas</th>
			                  <th>Action</th>
			                </tr>
		                </thead>
                    <tbody>
                      @foreach ($urutan_kelas as $key => $value)
                        <tr>
                          <td>{{ $value->nama_urutan_kelas }}</td>
                          <td>
                            <button type="button" class="btn btn-success">Edit</button>
                            <button type="button" class="btn btn-success">Hapus</button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
	              	</table>
	            </div> <!-- /.box-body -->            
          	</div> <!-- /.box -->          
        </div> <!-- /.col -->

        <div class="modal fade" id="modal-urutan">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Urutan Kelas</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="{{ route('urutan_kelas.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="box-body">
                      <div class="form-group">
                          <label for="inputUrutan" class="col-sm-4 control-label">Urutan Kelas</label>
                          <div class="col-sm-4">
                            <input name="nama_urutan_kelas" type="text" class="form-control" id="inputUrutan" placeholder="Urutan Kelas">
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
                  <div class="modal-footer">
                    <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                  </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
         <!-- /.row -->      
</section>
</body>
@endsection
@section('js')
<script type="text/javascript">
$('#example1').DataTable({
  "ordering": false
});
</script>

<script type="text/javascript">
$('#example2').DataTable({
  "ordering": false
});
</script>
@endsection
