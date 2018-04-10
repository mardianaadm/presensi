@extends('layouts.main')

@section('content')
<body>
	<section class="content">
    <div class="row">
        <div class="col-md-12">
          	<div class="box box-success">
            	<div class="box-header">
              		<h3 class="box-title">Tambah Tahun Ajaran</h3></br></br>
              		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambahtahunajaran">Tambah Tahun Ajaran</button>
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
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubah{{ $value->id_tahun_ajaran }}">Ubah</button>
                          </td>
                        </tr>
                        <!--POP UP EDIT TAHUN AJARAN-->
                        <div class="modal fade" id="modal-ubah{{ $value->id_tahun_ajaran }}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Ubah Tahun Ajaran</h4>
                              </div>
                              <div class="modal-body">
                                <form class="form-horizontal" action="{{ route('tahun_ajaran.update', $value->id_tahun_ajaran) }}" method="post">
                                  {{ csrf_field() }}
                                  {{ method_field('PATCH') }}
                                    <div class="box-body">
                                      <!--POP UP ISI EDIT TAHUN AJARAN-->
                                      <div class="form-group">
                                          <div class="form-group">
                                            <label for="nama_semester" class="col-md-4 control-label">Semester</label>
                                            <div class="col-md-4">
                                            <label>
                                              <select id="nama_semester" type="radio" class="form-control" name="nama_semester" required>
                                                <option>Ganjil</option>
                                                <option>Genap</option>
                                              </select>
                                            </label>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputNama" class="col-sm-4 control-label">Tahun Ajaran</label>
                                          <div class="col-sm-4">
                                            <input type="text" class="form-control" id="inputNama" name="masa_tahun_ajaran" value="{{ $value->masa_tahun_ajaran }}" placeholder="----/----">
                                          </div>
                                        </div>
                                        <div class="form-group">
                                        <label for="tingkat" class="col-md-4 control-label">Status</label>
                                              <div class="col-md-4">
                                                <label>
                                                <div class="radio">
                                                <label>
                                                    <input type="radio" name="status_tahun_ajaran" id="Aktif" value="Aktif" checked>Aktif
                                                </label>
                                                <label>
                                                    <input type="radio" name="status_tahun_ajaran" id="TdkAktif" value="Tidak Aktif">Tidak Aktif
                                                </label>
                                              </div>
                                                </label>
                                              </div>
                                        </div>
                                      </div>
                                      <!--END POP UP EDIT ISI TAHUN AJARAN-->
                                    </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                                <button type="submit" class="btn btn-success">Simpan</button>
                              </div>
                                </form>
                                </div>
                                </div>
                            </div>
                            <!-- /.modal-content -->
                          </div>
                          <!-- END POP UP EDIT TAHUN AJARAN -->
                    </tbody>
                      @endforeach
	              	</table>
	            </div> <!-- /.box-body -->            
          	</div> <!-- /.box -->          
        </div> <!-- /.col -->

        <!--POP UP TAMBAH TAHUN AJARAN-->
        <div class="modal fade" id="modal-tambahtahunajaran">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Tahun Ajaran</h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal" action="{{ route('tahun_ajaran.store') }}" method="post">
                  {{ csrf_field() }}
                    <div class="box-body">
                      <!--POP UP ISI TAMBAH TAHUN AJARAN-->
                    	<div class="form-group">
	                      	<div class="form-group">
		                        <label for="nama_semester" class="col-md-4 control-label">Semester</label>
		                        <div class="col-md-4">
		                        <label>
		                          <select id="nama_semester" type="radio" class="form-control" name="nama_semester" required>
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
                            <input type="text" class="form-control" id="inputNama" name="masa_tahun_ajaran" placeholder="----/----">
                          </div>
                      	</div>
                      	<div class="form-group">
	                			<label for="tingkat" class="col-md-4 control-label">Status</label>
	                      			<div class="col-md-4">
				                        <label>
				                  			<div class="radio">
				                    		<label>
				                      			<input type="radio" name="status_tahun_ajaran" id="optionsAktif" value="Aktif" checked>Aktif
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="status_tahun_ajaran" id="optionsTdkAktif" value="Tidak Aktif">Tidak Aktif
				                    		</label>
				                  		</div>
                                </label>
				                      </div>
	            			    </div>
                      </div>
                      <!--END POP UP ISI TAMBAH TAHUN AJARAN-->
                    </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
                </form>
                </div>
                </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- END POP UP TAMBAH TAHUN AJARAN -->
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