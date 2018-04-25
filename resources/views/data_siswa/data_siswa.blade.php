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

								<!-- NISN -->
								<div class="form-group">
									<label for="inputNISN" class="col-sm-2 control-label">NISN</label>
									<div class="col-sm-4">
										<input type="text" name="NISN" class="form-control" id="inputNISN" placeholder="NISN">
									</div></br>
									<!-- UNDUH TEMPLATE -->
									<div class="col-sm-4 pull-right">
										<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-unduhtemplate">Unduh Template</button></div>
										<div class="modal fade" id="modal-unduhtemplate">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span></button>
															<h4 class="modal-title">PETUNJUK PENGISIAN</h4>
														</div>
														<div class="modal-body">
															<form class="form-horizontal">
																{{ csrf_field() }}
																<div class="box-body">
																	<!--POP UP ISI UNDUH TEMPLATE-->
																	<img src="{{asset('images/template.jpg')}}" style="width: 100%;height: 40%;""></br></br>
																	<ul>
																		<li><span class="badge">1</span> Pastikan tidak ada Judul dalam file.</li>
																	</ul>
																	<ul>
																		<li><span class="badge">2</span> Pada template tidak menampilkan status karena setiap data yang tambah pasti aktif.</li>
																	</ul>
																	<!--END POP UP ISI UNDUH TEMPLATE-->
																</div>
																<div class="modal-footer">
																	<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
																	<a class="btn btn-success" href="{{ url('downloadExcel') }}">Unduh</a>
																</div>
															</form>
														</div>
													</div>
												</div>
												<!-- /.modal-content -->
											</div>
											<!-- END UNDUH TEMPLATE -->
										</div>
										<!--END NISN -->

										<div class="form-group">
											<label for="inputNIS" class="col-sm-2 control-label">NIS</label>
											<div class="col-sm-4">
												<input type="text" name="NIS" class="form-control" id="inputNIS" placeholder="NIS">
											</div></br>
											<!-- UNGGAH FILE -->
											<div class="col-sm-4 pull-right">
												<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-unggahfile">Unggah File</button></div>
												<div class="modal fade" id="modal-unggahfile">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title">PETUNJUK MENGUNGGAH FILE</h4>
																</div>
																<div class="modal-body">
																	<form class="form-horizontal" action="{{ url('importExcel') }}" method="post" enctype="multipart/form-data">
																		{{ csrf_field() }}
																		<div class="box-body">
																			<!--POP UP ISI UNGGAH FILE-->
																			<div class="alert alert-danger alert-dismissible">
																				<button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
																				<h4><i class="icon fa fa-ban"></i> Pengumuman!</h4>
																				Silahkan unduh template sebelum unggah file agar sesuai dengan format penulisan yang benar. Pastikan nama file yang diunggah tidak ada spasi.
																			</div>
																			<input type="file" name="importExcel">
																			<!--END POP UP ISI UNGGAH FILE-->
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
																			<button type="submit" class="btn btn-success">Unggah</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
													<!-- END UNGGAH FILE -->
												</div>
												<!-- END NIS -->

												<div class="form-group">
													<label for="inputNama" class="col-sm-2 control-label">Nama</label>
													<div class="col-sm-4">
														<input type="text" name="nama_siswa" class="form-control" id="inputNama" placeholder="Nama">
													</div>
												</div></br>

												<div class="form-group">
													<label for="nama_jurusan" class="col-md-2 control-label">Tahun Ajaran</label>
													<div class="col-md-6">
														<label class="col-xs-8">
															<select id="nama_tahun_ajaran" class="form-control" name="id_tahun_ajaran" value="{{$tahun_ajaran[0]->id_tahun_ajaran}}" required>
																<option value="" disabled selected=""> <i>Pilih Tahun Ajaran</i></option>
																@foreach($tahun_ajaran as $value)
																@if($value->status_tahun_ajaran == 'Aktif') <!--menampilkan data yg aktif dari tahun ajaran-->
																<option value="{{$value->id_tahun_ajaran}}">{{$value->masa_tahun_ajaran}}</option>
																@endif
																@endforeach
															</select>
														</label>
													</div>
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
												<div class="box-footer">
													<div class="col-md-2"></div>
													<button type="submit" name="simpan" class="btn btn-success">Simpan</button>
												</div>
											</div>
											<!--submit-->

										</div>
										<!-- </form> -->
									</div>          
								</div> <!-- /.col -->        
							</div> <!-- /.row -->      
						</section>

						<section class="content">
							<div class="row">
								<div class="col-xs-12">
									<div class="box box-success">
										<div class="box-header">
											<h3 class="box-title">Daftar Data Siswa</h3></br></br>
											<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#modal-nonaktif">Non-Aktif Siswa Berdasarkan Tahun Ajaran</button>
										</div>
										<!-- /.box-header -->
										<div class="box-body">
											<!-- NON-AKTIF SISWA SESUAI TAHUN AJARAN -->
											<div class="col-sm-4 pull-right">
												<div class="modal fade" id="modal-nonaktif">
													<div class="modal-dialog">
														<div class="modal-content">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal" aria-label="Close">
																	<span aria-hidden="true">&times;</span></button>
																	<h4 class="modal-title">Non-Aktif Siswa</h4>
																</div>
																<div class="modal-body">
																	<form class="form-horizontal" action="{{ url('data_siswa', '$value->masa_tahun_ajaran') }}" method="post">
																		{{ csrf_field() }}
																		{{ method_field('PATCH') }}
																		<div class="box-body">
																			<!--POP UP ISI UNDUH TEMPLATE-->
																			<div class="form-group">
																				<label for="nama_tahun_ajaran" class="col-md-4 control-label">Tahun Ajaran</label>
																				<div class="col-md-6">
																					<label class="col-xs-10">
																						<select id="nama_tahun_ajaran" class="form-control" name="masa_tahun_ajaran" required>
																							<option value="" disabled selected=""> <i>Pilih Tahun Ajaran</i></option>
																							@foreach($tahun_ajaran as $value)
																							<option value="{{$value->id_tahun_ajaran}}">{{$value->masa_tahun_ajaran}}</option>
																							@endforeach
																						</select>
																					</label>
																				</div>
																			</div>
																			<!--END POP UP ISI TAMBAH TAHUN AJARAN-->
																		</div>
																		<div class="modal-footer">
																			<button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
																			<button type="submit" class="btn btn-success">Non-Aktif</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
														<!-- /.modal-content -->
													</div>
												</div>
												<!--END NISN -->

												<table id="example2" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th>No</th>
															<th>NISN</th>
															<th>NIS</th>
															<th>Nama</th>
															<th>Tahun Ajaran</th>
															<th>Status</th>
															<th>Aksi</th>
														</tr>
													</thead>

													<?php $i = 1; ?>
													@foreach($data_siswa as $value)
													<tr>
														<td>{{ $i }}</td>
														<td>{{ $value->NISN }}</td>
														<td>{{ $value->NIS }}</td>
														<td>{{ $value->nama_siswa }}</td>
														<td>{{ $value->masa_tahun_ajaran }}</td>
														<td>{{ $value->status_siswa }}</td>
														<td>
															<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubah{{ $value->id_siswa }}">Ubah</button>
														</td>
														<?php $i++; ?>
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