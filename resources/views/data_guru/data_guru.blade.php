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
		            <form class="form-horizontal">
	              		<div class="box-body">
	                		<div class="form-group">
	                  			<label for="inputNama" class="col-sm-2 control-label">Nama</label>
		                  		<div class="col-sm-4">
		                    		<input type="text" class="form-control" id="inputNama" placeholder="Nama">
		                  		</div>
	                		</div>
	                
	                		<div class="form-group">
	                 			<label for="inputNIP" class="col-sm-2 control-label">NIP</label>
	                  			<div class="col-sm-4">
	                    			<input type="text" class="form-control" id="inputNIP" placeholder="NIP">
	                  			</div>
	                		</div>

	                		<div class="form-group">
	                			<label for="tingkat" class="col-md-2 control-label">Status</label>
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

	            			<div class="form-group">
	                 			<label for="inputPassword" class="col-sm-2 control-label">Password</label>
	                  			<div class="col-sm-4">
	                    			<input type="text" class="form-control" id="inputPassword" placeholder="xxx" disabled="inputPassword">
	                  			</div>
	                		</div>
	                	</div>
	        		</form>
	        		<!--submit-->
	        		<div class="box-footer">
		                <div class="col-md-2"></div>
		                <button type="submit" class="btn btn-success">Simpan</button>
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
		                      <th>Status</th>
		                      <th>Action</th>
		                    </tr>
		                  </thead>
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
