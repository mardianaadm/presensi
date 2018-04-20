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
		                  			<label for="inputNama" class="col-sm-2 control-label">NISN</label>
			                  		<div class="col-sm-4">
			                    		<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama">
			                  		</div>
		                		</div>

		                		<div class="form-group">
		                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
			                  		<div class="col-sm-4">
			                    		<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama">
			                  		</div>
		                		</div>

		            			<div class="form-group">
	                			<label for="tingkat" class="col-md-2 control-label">Keterangan</label>
	                      			<div class="col-md-4">
				                        <label class="col-xs-12">
				                  			<div class="radio">
				                    		<label>
				                      			<input type="radio" name="keterangan" id="hadir" value="Hadir" checked>Hadir
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="keterangan" id="sakit" value="Sakit">Sakit
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="keterangan" id="izin" value="Izin">Izin
				                    		</label>
				                    		<label>
				                      			<input type="radio" name="keterangan" id="alpha" value="Alpha">Alpha
				                    		</label>
				                  			</div>
				                  		</label>
				                	</div>
	            				</div>

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