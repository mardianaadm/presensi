@extends('layouts.main')

@section('content')
<div class="info">
	<h2><center>Jadwal Mengajar</br>Mapel Teknologi Informasi dan Komunikasi</br>Tahun Ajaran 2017/2018</center></h2>
</div></br>

<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box box-success">
				<div class="box-header">
					<h3 class="box-title">Detail Jadwal Mengajar</h3></br></br>
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambahjadwal">Tambah Jadwal Mengajar</button>
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
						dd($detail_jadwal);
							foreach ($data_sesi as $value) {
								echo "<tr>";
								echo "<td>".$value->jam."</td>"; /*menampilkan ist jam*/
								for ($i=0; $i <6 ; $i++) { 
									if ($value->jam == "07.00 - 07.45" && $i ==0) {  /*jika hari senin sesi 1 menampilkan upacara*/
										echo "<td><center>Upacara</center></td>";
									}else{ 
										foreach ($detail_jadwal as $value) {
											if ($i == 0) {
												
											}elseif ($i == 1) {
												# code...
											}elseif ($i == 2) {
												# code...
											}elseif ($i == 3) {
												# code...
											}elseif ($i == 4) {
												# code...
											}elseif ($i == 5) {
												# code...
											}else{

											}
										}
										if (!empty($detail_jadwal[$i]->jam)) { /*jika kosong menampilkan warna*/
											if ($value->jam == $detail_jadwal[$i]->jam) { /*jika ada jadwal menampilkan tingkat jurusan dan urutan*/
												echo "<td>"."<center>".$detail_jadwal[$i]->tingkat." ".$detail_jadwal[$i]->nama_jurusan." ".$detail_jadwal[$i]->nama_urutan_kelas."</br>"."<i class='fa fa-edit'><i></td>"."</center>";
											}else{
												echo "<td style='background-color: #228B22'></td>";
											}
										}else
												echo "<td style='background-color: #228B22'></td>";
									}
								}
								echo "</tr>";
							}
						?>
                </tbody>
            </table>

            <!---POP UP TAMBAH JURUSAN-->
	        <div class="modal fade" id="modal-tambahjadwal">
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
	                    <!--ISI POP UP TAMBAH JURUSAN-->
	                    <div class="form-group">
	                      	<div class="form-group">
		                    <label for="jam" class="col-md-4 control-label">Jam</label>
		                      <div class="col-md-6">
		                        <label class="col-xs-8">
		                          <select id="jam" type="nama_jam" class="form-control" name="jam" required>
		                            <option>---</option>
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
		                            <option>---</option>
		                            <option value="Senin">Senin</option>
		                            <option value="Selasa">Selasa</option>
		                            <option value="Rabu">Rabu</option>
		                            <option value="Kamis">Kamis</option>
		                            <option value="Jum'at">Jum'at</option>
		                            <option value="Sabtu">Sabtu</option>
		                           <!--  @foreach($detail_jadwal as $value)
		                              <option value="{{$value->hari}}">{{$value->hari}}</option>
		                            @endforeach -->
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
		                            <option>---</option>
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

        </div> <!-- /.box-body -->            
    </div> <!-- /.box -->          
</div> <!-- /.col -->        
</div> <!-- /.row -->      
</section>

@endsection
