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
							
							foreach ($data_sesi as $value) {
								echo "<tr>";
								echo "<td>".$value->jam."</td>"; /*menampilkan ist jam*/
								for ($i=0; $i <6 ; $i++) { 
									if ($value->jam == "07.00 - 07.45" && $i ==0) {  /*jika hari senin sesi 1 menampilkan upacara*/
										echo "<td><center>Upacara</center></td>";
									}else{ 
										$cek = 0;
										foreach ($detail_jadwal as $value1) {
											if ($value->jam == $value1->jam && $i == 0 && $value1->hari =="Senin") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 1 && $value1->hari =="Selasa") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 2 && $value1->hari =="Rabu") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 3 && $value1->hari =="Kamis") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 4 && $value1->hari =="Jum'at") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}if ($value->jam == $value1->jam && $i == 5 && $value1->hari =="Sabtu") {
												echo "<td><center>".$value1->tingkat." ".$value1->nama_jurusan." ".$value1->nama_urutan_kelas."</center></td>";
												$cek = 1;

											}
										}
										if ($cek == 0) {
											echo "<td><center></center></td>";
										}
																				
									}
								}
								echo "</tr>";
							}
						?>
                </tbody>
            </table>
        </div> <!-- /.box-body -->            
    </div> <!-- /.box -->          
</div> <!-- /.col -->        
</div> <!-- /.row -->      
</section>

@endsection
