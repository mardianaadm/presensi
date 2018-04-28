@extends('layouts.main')

@section('content')

<body>
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	          	<div class="box box-success">
	            	<div class="box-header">
	              		<h3 class="box-title">Tambah Data Guru</h3>
	            	</div>
	            <!-- /.box-header -->
	            <div class="row">
		            <form class="form-horizontal col-md-10 col-md-offset-2" method="post" action="{{ route('data_guru.store') }}">
		            	{{ csrf_field() }}
	              		<div class="box-body">
		                		<div class="form-group">
		                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
			                  		<div class="col-sm-4">
			                    		<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama">
			                  		</div>
		                		</div>
		                
		                		<div class="form-group">
		                 			<label for="inputNIP" class="col-sm-2 control-label">NIP</label>
		                  			<div class="col-sm-4">
		                    			<input type="text" name="NIP" class="form-control" id="inputNIP" placeholder="NIP">
		                  			</div>
		                		</div>

		                		<div class="form-group">
		                 			<label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
		                  			<div class="col-sm-4">
		                    			<input type="text" name="alamat_user" class="form-control" id="inputAlamat" placeholder="Alamat">
		                  			</div>
		                		</div>

		            			<div class="form-group">
		                			<label for="tingkat" class="col-md-2 control-label">Jenis Kelamin</label>
		                      			<div class="col-md-4">
					                        <label class="col-xs-12">
					                  			<div class="radio">
					                    		<label>
					                      			<input type="radio" name="jk_user" id="optionsAktif" value="Laki - Laki">Laki - Laki
					                    		</label>
					                    		<label>
					                      			<input type="radio" name="jk_user" id="optionsTdkAktif" value="Perempuan">Perempuan
					                    		</label>
					                  		</div>
					                  	</label>
					                </div>
		            			</div>

		            			<div class="form-group">
		                			<label for="tingkat" class="col-md-2 control-label">Status</label>
		                      			<div class="col-md-4">
					                        <label class="col-xs-12">
					                  			<div class="radio">
					                    		<label>
					                      			<input type="radio" name="status_user" id="optionsAktif" value="Aktif" checked>Aktif
					                    		</label>
					                    		<label>
					                      			<input type="radio" name="status_user" id="optionsTdkAktif" value="Tidak Aktif">Tidak Aktif
					                    		</label>
					                  		</div>
					                  	</label>
					                </div>
		            			</div>

		            			<div class="form-group">
		                 			<label for="inputPassword" class="col-sm-2 control-label">Password</label>
		                  			<div class="col-sm-4">
		                    			<input type="text" name="password" class="form-control" id="inputPassword" value="1234567" readonly>
		                  			</div>
		                		</div>
	                	</div>
	        		<!--submit-->
	        		<div class="box-footer">
		                <div class="col-md-2"></div>
		                <button type="submit" class="btn btn-success">Simpan</button>
	              	</div>
	        		</form>
	          	</div>
	          	</div>          
	        </div> <!-- /.col -->        
	    </div> <!-- /.row -->      
	</section>

	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	            <div class="box box-success">
	              	<div class="box-header">
	                  <h3 class="box-title">Daftar Data Guru</h3>
	              	</div>
	            <!-- /.box-header -->
		            <div class="box-body">
		                <table id="example2" class="table table-bordered table-hover">
		                  <thead>
		                    <tr>
		                      <th>Nama</th>
		                      <th>NIP</th>
		                      <th>Alamat</th>
		                      <th>Jenis Kelamin</th>
		                      <th>Status</th>
		                      <th>Aksi</th>
		                    </tr>
		                  </thead>
		                  @foreach($data_guru as $value)
		                  	<tr>
			                    <td>{{ $value->nama_user }}</td>
			                    <td>{{ $value->NIP }}</td>
			                    <td>{{ $value->alamat_user }}</td>
			                    <td>{{ $value->jk_user }}</td>
			                    <td>{{ $value->status_user }}</td>
			                    <td>
                            		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubahdataguru">Ubah</button>
                          		</td>
		                  	</tr>
		                  	<!---POP UP EDIT DATA KELAS-->
			                  <div class="modal fade" id="modal-ubahdataguru">
			                    <div class="modal-dialog">
			                      <div class="modal-content">
			                        <div class="modal-header">
			                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                            <span aria-hidden="true">&times;</span></button>
			                          <h4 class="modal-title">Ubah Data Guru</h4>
			                        </div>
			                        <div class="modal-body">
			                          <form class="form-horizontal" action="{{ route('data_guru.update', $value->id_user) }}" method="post">
			                            {{ csrf_field() }}
			                            {{ method_field('PATCH') }}
			                              <div class="box-body">
			                                <!--ISI POP UP EDIT DATA KELAS-->
			                                <div class="form-group">
					                  			<label for="inputNama" class="col-md-2 control-label">Nama</label>
						                  		<div class="col-md-4">
						                    		<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama" value="{{ $value->nama_user }}">
						                  		</div>
					                		</div>
					                
					                		<div class="form-group">
					                 			<label for="inputNIP" class="col-sm-2 control-label">NIP</label>
					                  			<div class="col-sm-4">
					                    			<input type="text" name="NIP" class="form-control" id="inputNIP" placeholder="NIP" value="{{ $value->NIP }}">
					                  			</div>
					                		</div>

					                		<div class="form-group">
					                 			<label for="inputAlamat" class="col-sm-2 control-label">Alamat</label>
					                  			<div class="col-sm-4">
					                    			<input type="text" name="alamat_user" class="form-control" id="inputAlamat" placeholder="Alamat" value="{{ $value->alamat_user }}">
					                  			</div>
					                		</div>

					            			<div class="form-group">
					                			<label for="tingkat" class="col-md-2 control-label">Jenis Kelamin</label>
					                      			<div class="col-md-4">
								                        <label class="col-xs-12">
								                  			<div class="radio">
								                    		<label>
								                      			<input <?php if($value->jk_user=="Laki - Laki") {echo "checked='true'";} ?> type="radio" name="jk_user" id="optionsAktif" value="Laki - Laki">Laki - Laki
								                    		</label>
								                    		<label>
								                      			<input <?php if($value->jk_user=="Perempuan") {echo "checked='true'";} ?> type="radio" name="jk_user" id="optionsTdkAktif" value="Perempuan">Perempuan
								                    		</label>
								                  		</div>
								                  	</label>
								                </div>
					            			</div>

					            			<div class="form-group">
					                			<label for="tingkat" class="col-md-2 control-label">Status</label>
					                      			<div class="col-md-4">
								                        <label class="col-xs-12">
								                  			<div class="radio">
								                    		<label>
								                      			<input <?php if($value->status_user=="Aktif") {echo "checked='true'";} ?> type="radio" name="status_user" id="optionsAktif" value="Aktif" checked>Aktif
								                    		</label>
								                    		<label>
								                      			<input <?php if($value->status_user=="Tidak Aktif") {echo "checked='true'";} ?> type="radio" name="status_user" id="optionsTdkAktif" value="Tidak Aktif">Tidak Aktif
								                    		</label>
								                  		</div>
								                  	</label>
								                </div>
					            			</div>
			                                <!--END ISI POP UP EDIT JURUSAN-->
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
			                  <!--END POP UP EDIT JURUSAN-->
		                  	@endforeach
		                </table> 
		            </div> <!-- /.box -->          
	        	</div> <!-- /.col -->        
	    	</div> <!-- /.row --> 
	    </div>     
	</section>
</body>
@endsection
@section('js')
<script>
  $(function () {
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>
@endsection
