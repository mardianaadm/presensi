@extends('layouts.main')

@section('content')
<div class="info">
	@foreach($tahun_ajaran as $value)
	@if($value->status_tahun_ajaran=='Aktif')
	<h2><center>Jadwal Mengajar</br>Mapel Teknologi Informasi dan Komunikasi</br>Tahun Ajaran <?php echo $value->masa_tahun_ajaran?></center></h2>
	@endif
    @endforeach
</div></br>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Detail Jadwal Mengajar</h3></br></br>
					<!-- <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambahjadwal">Tambah Jadwal Mengajar</button> -->
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th><center>Hari/Jam<center></th>
								<th><center>Senin<center></th>
								<th><center>Selasa<center></th>
								<th><center>Rabu<center></th>
								<th><center>Kamis<center></th>
								<th><center>Jum'at<center></th>
								<th><center>Sabtu<center></th>
							</tr>
						</thead>
						<tbody>
						<?php 
							foreach ($data_sesi as $value) {
								echo "<tr>";
								echo "<td>".$value->jam."</td>"; /*menampilkan list jam*/
								for ($i=0; $i <6 ; $i++) { 
									if ($value->jam == "07.00 - 07.45" && $i ==0) {  /*jika hari senin sesi 1 menampilkan upacara*/
										echo '<td><center>Upacara </br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
									}else{ 
										$cek = 0;
										foreach ($detail_jadwal as $value1) {
											if ($value->jam == $value1->jam && $i == 0 && $value1->hari =="Senin") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 1 && $value1->hari =="Selasa") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 2 && $value1->hari =="Rabu") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 3 && $value1->hari =="Kamis") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 4 && $value1->hari =="Jum'at") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 5 && $value1->hari =="Sabtu") {
												echo '<td><center>'.$value1->tingkat.' '.$value1->nama_jurusan.' '.$value1->nama_urutan_kelas.'</br> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a> </center></td>';
												$cek = 1;
											}

										}
										if ($cek == 0) {
											echo '<td> <center> <a class="btn btn-edit" data-toggle="modal" data-target="#modal-tambahjadwal'.$value->id_sesi.'">
									                  <i class="fa fa-edit" style="color: #00a65a"></i>
									                </a></center></td>';
										}								
									}
								?>

								<?php
								
								}
								echo "</tr>"; ?>
								<!---POP UP TAMBAH -->
						        <div class="modal fade" id="modal-tambahjadwal{{$value->id_sesi}}">
						          <div class="modal-dialog">
						            <div class="modal-content">
						              <div class="modal-header">
						                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						                  <span aria-hidden="true">&times;</span></button>
						                <h4 class="modal-title">Tambah Jadwal Mengajar</h4>
						              </div>
						              <div class="modal-body">
						                <form class="form-horizontal" action="{{ route('jadwal.store') }}" method="post">
						                  {{ csrf_field() }}
						                  	<input type="text" name="idguru" hidden="" value="{{$id_user}}">
						                    <div class="box-body">
						                    <!--ISI POP UP TAMBAH -->
						                    <div class="form-group">
						                      	<div class="form-group">
							                    <label for="jam" class="col-md-4 control-label">Jam</label>
							                      <div class="col-md-6">
							                        <label class="col-xs-8">
							                          <select id="jam" type="nama_jam" class="form-control" name="jam" required>
							                            <option value="{{$value->id_sesi}}">{{$value->jam}}</option>
							                            @foreach($data_sesi as $value)
							                              <option value="{{$value->id_sesi}}">{{$value->jam}}</option>
							                            @endforeach
							                          </select>
							                        </label>
							                      </div>
							                  	</div>

							                  	<div class="form-group">
							                    <label for="jam" class="col-md-4 control-label">Hari</label>
							                      <div class="col-md-6">
							                        <label class="col-xs-8">
							                          <select id="hari" type="nama_hari" class="form-control" name="hari" required>
							                            <option value="Senin">Senin</option>
							                            <option value="Selasa">Selasa</option>
							                            <option value="Rabu">Rabu</option>
							                            <option value="Kamis">Kamis</option>
							                            <option value="Jum'at">Jum'at</option>
							                            <option value="Sabtu">Sabtu</option>
							                          </select>
							                        </label>
							                      </div>
							                  	</div>

							                  	<div class="form-group">
							                    <label for="jam" class="col-md-4 control-label">Tingkat</label>
							                      <div class="col-md-6">
							                        <label class="col-xs-8">
							                          <select id="tingkat" type="nama_tingkat" class="form-control" name="tingkat" required>
							                            <option>---</option>
							                            <option value="X">X</option>
							                            <option value="XI">XI</option>
							                            <option value="XII">XII</option>
							                          </select>
							                        </label>
							                      </div>
							                  	</div>

							                  	<div class="form-group">
							                    <label for="jam" class="col-md-4 control-label">Jurusan</label>
							                      <div class="col-md-6">
							                        <label class="col-xs-8">
							                          <select id="jurusan" type="nama_jurusan" class="form-control" name="jurusan" required>
							                            <option value="{{$value->id_jurusan}}">{{$value->nama_jurusan}}</option>
							                            @foreach($jurusan as $value)
							                              <option value="{{$value->id_jurusan}}">{{ $value->nama_jurusan }}</option>
							                            @endforeach
							                          </select>
							                        </label>
							                      </div>
							                  	</div>

							                  	<div class="form-group">
							                    <label for="jam" class="col-md-4 control-label">Urutan Kelas</label>
							                      <div class="col-md-6">
							                        <label class="col-xs-8">
							                          <select id="urutan_kelas" type="nama_urutan_kelas" class="form-control" name="urutan_kelas" required>
							                            <option>---</option>
							                            @foreach($urutanKelas as $value)
							                              <option value="{{$value->id_urutan_kelas}}">{{ $value->nama_urutan_kelas }}</option>
							                            @endforeach
							                          </select>
							                        </label>
							                      </div>
							                  	</div>

						                   	</div>
						                    <!--END ISI POP UP TAMBAH JURUSAN-->
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
					        <!--END POP UP TAMBAH JURUSAN-->
							<?php }
						?>
                </tbody>
            </table>
        
        </div> <!-- /.box-body -->            
    </div> <!-- /.box -->          
</div> <!-- /.col -->        
</div> <!-- /.row -->      
</section>

@endsection
