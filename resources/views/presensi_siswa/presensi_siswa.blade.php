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
									<label for="search" class="col-sm-2 control-label">NISN</label>
									<div class="col-sm-6">
										<input type="text" name="NISN" class="form-control" id="search" placeholder="NISN / NIS">
									</div>
									<div class="col-md-2">
										<a id="infoSubmit" class="btn btn-info">Cari</a>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputNama" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-6">
										<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama" readonly>
									</div>
								</div>
								
								<div class="form-group">
									<label for="tingkat" class="col-md-2 control-label">Tingkat</label>
									<div class="col-md-6">
										<label class="col-xs-12">
											<div class="radio">
												<label>
												<input type="radio" name="tingkat" id="optionsRadios1" value="X">Hadir</label>
												<label>
												<input type="radio" name="tingkat" id="optionsRadios2" value="XI">Sakit</label>
												<label>
												<input type="radio" name="tingkat" id="optionsRadios3" value="XII">Izin</label>
												<label>
												<input type="radio" name="tingkat" id="optionsRadios3" value="XII">Alpha</label>
											</div>
										</label>
									</div>
								</div>
								
							</div>
	        		<!--submit-->
	        		<div class="box-footer">
								<div class="col-md-2" style="margin-left: -1%"></div>
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