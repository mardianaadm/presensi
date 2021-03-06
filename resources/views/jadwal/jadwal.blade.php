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
	                @foreach($data_guru as $value)
                  @if($value->status_user == 'Aktif')
	                <tr>
	                    <td><?php echo $value->nama_user?></td>
	                    <td>{{ $value->NIP }}</td>
	                    <td> <a href="{{ route('jadwal.show', $value->id_user ) }}" class="btn btn-success">Detail Jadwal Mengajar</a>
	                    </td>
	                </tr>
                  @endif
	                @endforeach
              	</table>
            </div> <!-- /.box-body -->            
          	</div> <!-- /.box -->          
        </div> <!-- /.col -->        
    </div> <!-- /.row -->      
</section>

@endsection

@section('js')
<script>
  $(function () {
    $('#example1').DataTable({
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