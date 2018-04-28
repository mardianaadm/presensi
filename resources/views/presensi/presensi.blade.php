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
						<form class="form-horizontal col-md-10 col-md-offset-2" method="post" action="{{ route('presensi.store') }}">
							{{ csrf_field() }}
							<div class="box-body">
								<div class="form-group">
									<label for="inputNama" class="col-sm-2 control-label">Tanggal</label>
									<div class="col-sm-2">
										<input type="text" name="tanggal" class="form-control" id="inputNama" value="<?php
										echo date('j M Y') ?>" disabled="inputNama">
									</div>
								</div>
								
								<div class="form-group">
									<label for="nama_jurusan" class="col-md-2 control-label">Kelas</label>
									<div class="col-md-4">
										<label>
											<select id="nama_kelas" class="form-control" name="id_kelas" required>
												<option value="">---</option>
												@foreach($kelas_siswa as $value)
												<option value="{{$value->id_kelas_siswa}}">{{$value->tingkat}} {{$value->nama_jurusan}} {{$value->nama_urutan_kelas}}</option>
												@endforeach
											</select>
										</label>
									</div>
								</div>
								
							</div>
						</div>
						<!--submit-->
						<div class="box-footer">
							<div class="col-md-4" style="margin-left: -1%"></div>
							<input type="submit" name="" class="btn btn-success" value="Simpan">
						</div>
					</form>
				</div>     
			</div> <!-- /.col -->        
		</div> <!-- /.row -->      
	</section>
</body>
@endsection
@yield('css')