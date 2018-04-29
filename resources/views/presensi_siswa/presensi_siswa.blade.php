@extends('layouts.main')

@section('content')

<body>
	<section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box box-success">
					<div class="box-header text-center">
						@foreach($kelas_siswa as $data)
						<h3 class="box-title">Presensi Siswa <br><font style="font-size: 30px; font-weight: bold">{{$data->tingkat}} {{$data->nama_jurusan}} {{$data->nama_urutan_kelas}}</font></h3>
						@endforeach	
					</div>
					<!-- /.box-header -->
					<div class="row">
						<form class="form-horizontal col-md-10 col-md-offset-2" method="post" action="{{ route('presensi_siswa.store') }}">
							{{ csrf_field() }}
							<div class="box-body">
								<div class="form-group">
									<label for="search" class="col-sm-2 control-label">NISN</label>
									<div class="col-sm-6">
										<input type="hidden" name="id_kelas_siswa" value="<?php echo $kelas_siswa[0]->id_kelas_siswa ?>">
										<input type="text" name="NISN" class="form-control" id="search" placeholder="NISN / NIS">
									</div>
									<div class="col-md-2">
										<a id="infoSubmit" class="btn btn-info">Cari</a>
									</div>
								</div>
								
								<div class="form-group">
									<label for="inputNama" class="col-sm-2 control-label">Nama</label>
									<div class="col-sm-6">
										<input type="hidden" name="id_presensi" value="<?php echo $id_presensi ?>">
										<input type="text" name="nama_user" class="form-control" id="inputNama" placeholder="Nama" readonly>
									</div>
								</div>
								
								<div class="form-group">
									<label for="tingkat" class="col-md-2 control-label">Tingkat</label>
									<div class="col-md-6">
										<label class="col-xs-12">
											<div class="radio">
												<label>
												<input type="radio" name="status" value="Hadir">Hadir</label>
												<label>
												<input type="radio" name="status" value="Sakit">Sakit</label>
												<label>
												<input type="radio" name="status" value="Izin">Izin</label>
												<label>
												<input type="radio" name="status" value="Alpha">Alpha</label>
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