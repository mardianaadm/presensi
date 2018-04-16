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
					<h3 class="box-title">Detail Jadwal Mengajar</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Hari/Jam</th>
								<th>Senin</th>
								<th>Selasa</th>
								<th>Rabu</th>
								<th>Kamis</th>
								<th>Jum'at</th>
								<th>Sabtu</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($data_sesi as $value)
							<tr>
								<td>{{$value->jam}}</td>
								@foreach($detail_jadwal as $dj)

								<!-- apabila ada jadwal -->
								@if($dj->jam==$value->jam && $dj->hari=='Senin')
								
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>

								<!-- apabila tidak ada jadwal -->
								@else
								
								<!-- apabila tidak ada jadwal dan sesi 1 diisi dengan upacara -->
								@if($value->jam == '07.00 - 07.45')
								<td>Upacara</td>

								<!-- apabila tidak ada jadwal dan selain sesi 1 -->
								@else
								<td style="background-color: #228B22"></td>
								@endif
								
								@endif

								@if($dj->jam==$value->jam && $dj->hari=='Selasa')
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>
								@else
								<td style="background-color: #228B22"></td>
								@endif

								@if($dj->jam==$value->jam && $dj->hari=='Rabu')
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>
								@else
								<td style="background-color: #228B22"></td>
								@endif

								@if($dj->jam==$value->jam && $dj->hari=='Kamis')
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>
								@else
								<td style="background-color: #228B22"></td>
								@endif

								@if($dj->jam==$value->jam && $dj->hari=="Jum'at")
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>
								@else
								<td style="background-color: #228B22"></td>
								@endif

								@if($dj->jam==$value->jam && $dj->hari=='Sabtu')
								<td>{{$dj->tingkat.' '.$dj->nama_jurusan.' '.$dj->nama_urutan_kelas}}</td>
								@else
								<td style="background-color: #228B22"></td>
								@endif

								@endforeach
                     <!-- <tr>
                        <td></td>
                        <td>Senin</td>
	                    <td>Selasa</td>
	                    <td>Rabu</td>
	                    <td>Kamis</td>
	                    <td>Jum'at</td>
	                    <td>Sabtu</td>
                        <td>
                           <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubah{{ $value->id_tahun_ajaran }}">Ubah</button>
                        </td>
                    </tr> -->
                    @endforeach
                </tbody>
            </table>
        </div> <!-- /.box-body -->            
    </div> <!-- /.box -->          
</div> <!-- /.col -->        
</div> <!-- /.row -->      
</section>

@endsection
