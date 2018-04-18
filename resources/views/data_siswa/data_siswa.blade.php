@extends('layouts.main')

@section('content')
<body>
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	          	<div class="box box-success">
	            	<div class="box-header">
	              		<h3 class="box-title">Tambah Data Siswa</h3>
	            	</div>
	            <!-- /.box-header -->
		            <form class="form-horizontal" method="post" action="{{ route('data_siswa.store') }}">
		            	{{ csrf_field() }}
	              		<div class="box-body">
	                
	                		<div class="form-group">
	                 			<label for="inputNISN" class="col-sm-2 control-label">NISN</label>
	                  			<div class="col-sm-4">
	                    			<input type="text" name="NISN" class="form-control" id="inputNISN" placeholder="NISN">
	                  			</div></br>
	                  				<div class="col-sm-4 pull-right"><button type="button" class="btn btn-success">Unduh Template</button></div>
	                		</div>

	                		<div class="form-group">
	                 			<label for="inputNIS" class="col-sm-2 control-label">NIS</label>
	                  			<div class="col-sm-4">
	                    			<input type="text" name="NIS" class="form-control" id="inputNIS" placeholder="NIS">
	                  			</div></br>
	                  				<div class="col-sm-4 pull-right"><button type="button" class="btn btn-success">Unggah File</button></div>
	                		</div>

	                		<div class="form-group">
	                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
		                  		<div class="col-sm-4">
		                    		<input type="text" name="nama_siswa" class="form-control" id="inputNama" placeholder="Nama">
		                  		</div>
	                		</div></br>

	                		<div class="form-group">
	                			<label for="tingkat" class="col-md-2 control-label">Status</label>
	                      			<div class="col-md-4">
				                        <label class="col-xs-12">
				                  			<div class="radio">
				                    		<label>
				                      			<input type="radio" name="status_siswa" id="optionsAktif" value="Aktif" checked>Aktif
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="status_siswa" id="optionsTdkAktif" value="Tidak Aktif">Tidak Aktif
				                    		</label>
				                  			</div>
				                  		</label>
				                	</div>
	            			</div>
	                	</div>
	        		</form>
	        		<!--submit-->
	        		<div class="box-footer">
		                <div class="col-md-2"></div>
		                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
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
	                  <h3 class="box-title">Daftar Data Siswa</h3>
	              	</div>
	            <!-- /.box-header -->
		            <div class="box-body">
		                <table id="example2" class="table table-bordered table-hover">
		                  <thead>
		                    <tr>
			                    <th>NISN</th>
			                    <th>NIS</th>
			                    <th>Nama</th>
			                    <th>Status</th>
			                    <th>Aksi</th>
		                    </tr>
		                  </thead>
		                  	@foreach($data_siswa as $value)
		                  	<tr>
			                    <td>{{ $value->NISN }}</td>
			                    <td>{{ $value->NIS }}</td>
			                    <td>{{ $value->nama_siswa }}</td>
			                    <td>{{ $value->status_siswa }}</td>
			                    <td>
                            		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubah{{ $value->id_siswa }}">Ubah</button>
                          		</td>
		                  	</tr>
		                  	<!---POP UP EDIT JURUSAN-->
	                        <div class="modal fade" id="modal-ubah{{ $value->id_siswa }}">
	                          <div class="modal-dialog">
	                            <div class="modal-content">
	                              <div class="modal-header">
	                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                                  <span aria-hidden="true">&times;</span></button>
	                                <h4 class="modal-title">Ubah Data Siswa</h4>
	                              </div>
	                              <div class="modal-body">
	                                <form class="form-horizontal" action="{{ route('data_siswa.update', $value->id_siswa) }}" method="post">
		                                {{ csrf_field() }}
		                                {{ method_field('PATCH') }}
	                                    <div class="box-body">
	                                    	<!--ISI POP UP EDIT JURUSAN-->
	                                    	<div class="form-group">
					                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
						                  		<div class="col-sm-4">
						                    		<input type="text" name="nama_siswa" class="form-control" id="inputNama" value="{{ $value->nama_siswa }}" placeholder="Nama">
						                  		</div>
				                			</div>
				                		<div class="form-group">
				                 			<label for="inputNISN" class="col-sm-2 control-label">NISN</label>
				                  			<div class="col-sm-4">
				                    			<input type="text" name="NISN" class="form-control" id="inputNISN" value="{{ $value->NISN }}" placeholder="NISN">
				                  			</div>
				                		</div>
				                		<div class="form-group">
				                 			<label for="inputNIS" class="col-sm-2 control-label">NIS</label>
				                  			<div class="col-sm-4">
				                    			<input type="text" name="NIS" class="form-control" id="inputNIS" value="{{ $value->NIS }}" placeholder="NIS">
				                  			</div>
				                		</div>
				                		<div class="form-group">
				                			<label for="tingkat" class="col-md-2 control-label">Status</label>
				                      			<div class="col-md-4">
							                        <label class="col-xs-12">
							                  			<div class="radio">
							                    		<label>
							                      			<input <?php if($value->status_siswa=="Aktif") {echo "checked='true'";} ?> type="radio" name="status_siswa" id="Aktif" value="Aktif" checked>Aktif
							                    		</label>
							                    		<label>
							                      			<input <?php if($value->status_siswa=="Tidak Aktif") {echo "checked='true'";} ?> type="radio" name="status_siswa" id="TdkAktif" value="Tidak Aktif">Tidak Aktif
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
<script type="text/javascript">
$('#example2').DataTable({
  "ordering": false
});
</script>
@endsection