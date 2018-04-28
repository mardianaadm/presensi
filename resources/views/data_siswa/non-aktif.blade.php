@extends('layouts.main')

@section('content')
<body>
  <section class="content-header">
    <h1>Non Aktif Siswa</h1></br>
    <div class="row">
      <div class="col-xs-12">
        <div class="box box-success">
          <div class="box-header">
            <center><h3 class="box-title">Filter</h3></center>
          </div>
          <!-- /.box-header -->
          <form role="form" method="post">
            {{ csrf_field() }}
            <div>
              <div class="form-horizontal">
              <div class="form-group">
                <label for="nama_jurusan" class="col-md-2 control-label">Kelas</label>
                  <div class="col-md-6">
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
                  <div class="box-footer">
                    <div class="col-md-2"></div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                  </div>
                </form>
              </div> <!-- /.box -->          
            </div> <!-- /.col -->        
          </div> <!-- /.row -->      
        </section>

  <section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box box-success">
        <div class="box-header">
          <h3 class="box-title">Daftar Data Siswa</h3></br></br>
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
              @foreach($kelas_siswa as $value)
              <tr>
                <td>{{ $i }}</td>
                <td>{{ $value->NISN }}</td>
                <td>{{ $value->NIS }}</td>
                <td>{{ $value->nama_siswa }}</td>
                <td>{{ $value->masa_tahun_ajaran }}</td>
                <td>{{ $value->status_siswa }}</td>
                <td>
                  <input type="checkbox" name="" style="color: #00a65a" checked>
                </td>
                <?php $i++; ?>
              </tr>
                @endforeach
              </table>
                <div class="box-footer">
                    <div class="col-md-2"></div>
                    <button type="submit" class="btn btn-success pull-right">Non Aktif</button>
                </div>
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