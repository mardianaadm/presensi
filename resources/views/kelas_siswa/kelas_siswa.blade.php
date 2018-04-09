@extends('layouts.main')

@section('content')

<body>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
              <div class="box-header">
                  <h3 class="box-title">Tambah Data Kelas</h3>
              </div>
            <!-- /.box-header -->
            <form role="form" method="post" action="{{ route('kelas_siswa.store') }}">
              {{ csrf_field() }}
              <div class="form-horizontal">
                  <div class="form-group">
                    <label for="tingkat" class="col-md-2 control-label">Tingkat</label>
                      <div class="col-md-4">
                        <label class="col-xs-12">
                          <div class="radio">
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios1" value="X">X</label>
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios2" value="XI">XI</label>
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios2" value="XII">XII</label>
                          </div>
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_jurusan" class="col-md-2 control-label">Jurusan</label>
                      <div class="col-md-4">
                        <label>
                          <select id="nama_jurusan" type="nama_jurusan" class="form-control" name="nama_jurusan" required>
                            <option>-</option>
                            @foreach($jurusan as $item)
                            @if($item->status_jurusan == 'Aktif') <!--menampilkan data yg aktif dari master kelas-->
                              <option value="{{$item->id_jurusan}}">{{$item->nama_jurusan}}</option>
                              @endif
                            @endforeach
                          </select>
                        </label>
                      </div>
                  </div>

                  <!-- <div class="form-group">
                <label>Multiple</label>
                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                        style="width: 30%;">
                  <option>Alabama</option>
                  <option>Alaska</option>
                  <option>California</option>
                  <option>Delaware</option>
                  <option>Tennessee</option>
                  <option>Texas</option>
                  <option>Washington</option>
                </select>
              </div>
 -->
                  <div class="form-group">
                    <label for="nama_urutan_kelas" class="col-md-2 control-label">Urutan Kelas</label>
                      <div class="col-md-4">
                        <label>
                          <select id="nama_urutan_kelas" type="nama_urutan_kelas" class="form-control" name="nama_urutan_kelas" required>
                            <option>-</option>
                            @foreach($urutan_kelas as $item)
                            @if($item->status_urutan_kelas == 'Aktif')
                              <option value="{{$item->id_urutan_kelas}}">{{$item->nama_urutan_kelas}}</option>
                              @endif
                            @endforeach
                          </select>
                        </label>
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
                  <h3 class="box-title">Daftar Data Kelas</h3>
              </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    @foreach($KelasSiswa as $data)
                    <tr>
                      <th>Tingkat</th>
                      <th>Jurusan</th>
                      <th>Urutan Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tr>
                    <td>{{ $data->tingkat }}</td>
                    <td>{{ $data->nama_jurusan }}</td>
                    <td>{{ $data->nama_urutan_kelas }}</td>
                    <td>{{ $data->tingkat }}</td>
                  </tr>
                  @endforeach
                </table> 
            </div> <!-- /.box -->          
        </div> <!-- /.col -->        
    </div> <!-- /.row -->      
</section>
</body>

@endsection
@yield('css')
@section('js')
<script type="text/javascript">
$('#example2').DataTable({
  "ordering": false
});
</script>

<script>
  $(function () {
    $('.select2').select2()
  });
</script>
@endsection