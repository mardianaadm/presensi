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
              		<h3 class="box-title">Data Guru</h3>
            	</div>
            <!-- /.box-header -->
            <div class="box-body">
              	<table id="example1" class="table table-bordered table-hover">
	                <thead>
		                <tr>
		                  <th>Nama</th>
		                  <th>NIP</th>
		                  <th>Aksi</th>
		                </tr>
	                </thead>
              	</table>
            </div> <!-- /.box-body -->            
          	</div> <!-- /.box -->          
        </div> <!-- /.col -->        
    </div> <!-- /.row -->      
</section>
    
<!-- <center>
	<table  border='3' width="900px">  
		<tr>
			<th><center>Hari / Jam</center></th>
			<th><center>Senin</center></th>
			<th><center>Selasa</center></th>
			<th><center>Rabu</center></th>
			<th><center>Kamis</center></th> 
			<th><center>Jum'at</center></th> 
			<th><center>Sabtu</center></th> 
		</tr>
		<tr>
			<td><center>07.00 - 07.45</center></td>
			<td><center>Upacara</center></td>
			<td><center>XI SOSIAL 3</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>XII MIPA 2</center></td>
			<td><center>XII SOSIAL 1</center></td>
		</tr>
		<tr>
			<td><center>07.45 - 08.30</center></td>
			<td><center>XI SOSIAL 2</center></td>
			<td><center>XI SOSIAL 3</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>XII SOSIAL 1</center></td>
		</tr>
			<td><center>08.30 - 09.15</center></td>
			<td><center>XI SOSIAL 2</center></td>
			<td><center>-</center></td>
			<td><center>XI SOSIAL 1</center></td>
			<td><center>X MIPA 6</center></td>
			<td><center>-</center></td>
			<td><center>X SOSIAL 1</center></td>
		</tr>
		</tr>
			<td><center>09.15 - 10.00</center></td>
			<td><center>XII SOSIAL 3</center></td>
			<td><center>-</center></td>
			<td><center>XI SOSIAL 1</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
		</tr>
		</tr>
			<td><center>10.20 - 11.05</center></td>
			<td><center>XII SOSIAL 3</center></td>
			<td><center>-</center></td>
			<td><center>XII MIPA 1</center></td>
			<td><center>XII MIPA 3</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
		</tr>
		</tr>
			<td><center>11.05 - 11.05</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>XII MIPA 1</center></td>
			<td><center>XII MIPA 3</center></td>
			<td><center>-</center></td>
			<td><center>XII SOSIAL 2</center></td>
		</tr>
		</tr>
			<td><center>12.10 - 12.50</center></td>
			<td><center>XII MIPA 6</center></td>
			<td><center>XII MIPA 5</center></td>
			<td><center>XII MIPA 4</center></td>
			<td><center>X SOSIAL 3</center></td>
			<td><center>-</center></td>
			<td><center>XII SOSIAL 2</center></td>
		</tr>
		</tr>
			<td><center>12.50 - 13.30</center></td>
			<td><center>XII MIPA 6</center></td>
			<td><center>XII MIPA 5</center></td>
			<td><center>XII MIPA 4</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
		</tr>
		</tr>
			<td><center>13.30 - 14.10</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
			<td><center>X SOSIAL 2</center></td>
			<td><center>-</center></td>
			<td><center>-</center></td>
		</tr>
	</table>
</center> -->

@endsection

@section('js')
<script type="text/javascript">
$('#example1').DataTable({
	"ordering": false
});
</script>
@endsection