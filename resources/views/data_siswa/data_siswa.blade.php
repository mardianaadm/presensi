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
	                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
		                  		<div class="col-sm-4">
		                    		<input type="text" name="nama_siswa" class="form-control" id="inputNama" placeholder="Nama">
		                  		</div>
		                  			<div class="col-sm-4 pull-right"><button type="button" class="btn btn-success">Unduh Template</button></div>
	                		</div>
	                
	                		<div class="form-group">
	                 			<label for="inputNISN" class="col-sm-2 control-label">NISN</label>
	                  			<div class="col-sm-4">
	                    			<input type="text" name="NISN" class="form-control" id="inputNISN" placeholder="NISN">
	                  			</div>
	                  				<div class="col-sm-4 pull-right"><button type="button" class="btn btn-success">Unggah File</button></div>
	                		</div>

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
	        		<!--submit-->
	        		<div class="box-footer">
		                <div class="col-md-2"></div>
		                <button type="submit" name="simpan" class="btn btn-success">Simpan</button>
	              	</div>
	        		</form>
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
		                  	@foreach($data_siswa as $data)
		                    <tr>
			                    <th>Nama</th>
			                    <th>NISN</th>
			                    <th>Status</th>
			                    <th>Aksi</th>
		                    </tr>
		                  </thead>
		                  	<tr>
			                    <td>{{ $data->nama_siswa }}</td>
			                    <td>{{ $data->NISN }}</td>
			                    <td>{{ $data->status_siswa }}</td>
		                  </tr>
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