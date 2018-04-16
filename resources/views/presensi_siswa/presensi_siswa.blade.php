@extends('layouts.main')

@section('content')

<body>
	<section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	          	<div class="box box-success">
	            	<div class="box-header">
	              		<h3 class="box-title">Presensi Siswa</h3>
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
		                			<label for="tingkat" class="col-md-2 control-label">Sesi</label>
		                      			<div class="col-md-4">
					                        <label class="col-xs-12">
					                  			<div class="radio">
					                    		<label>
					                      			<input type="radio" name="jk_user" id="optionsAktif" value="Laki - Laki">1 Sesi
					                    		</label>
					                    		<label>
					                      			<input type="radio" name="jk_user" id="optionsTdkAktif" value="Perempuan">2 Sesi
					                    		</label>
					                  		</div>
					                  	</label>
					                </div>
		            			</div>

		            			<div class="form-group">
		                 			<label for="inputAlamat" class="col-sm-2 control-label"></label>
		                  			<div class="col-sm-4">
		                    			<input type="text" name="alamat_user" class="form-control" id="inputAlamat" placeholder="Sesi">
		                  			</div>
		                		</div>

		                		<div class="form-group">
				                    <label for="nama_jurusan" class="col-md-2 control-label">Kelas</label>
				                      <div class="col-md-4">
				                        <label>
				                          <select id="nama_jurusan" type="nama_jurusan" class="form-control" name="nama_jurusan" required>
				                            <option>---</option>
				                              <option value=""></option>
				                          </select>
				                        </label>
				                      </div>
				                  </div>
				        </div>
		            </form>
	            </div>
	        		<!--submit-->
	        		<div class="box-footer">
		                <div class="col-md-4" style="margin-left: -1%"></div>
		                <button type="submit" class="btn btn-success">Simpan</button>
	              	</div>
	        		</form>
	          	</div>
	          	</div>          
	        </div> <!-- /.col -->        
	    </div> <!-- /.row -->      
	</section>
</body>
@endsection
@yield('css')