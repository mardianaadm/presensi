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
                    <label for="tingkat" class="col-md-4 control-label">Tingkat</label>
                      <div class="col-md-4">
                        <label class="col-xs-12">
                          <div class="radio">
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios1" value="X">X</label>
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios2" value="XI">XI</label>
                              <label>
                                <input type="radio" name="tingkat" id="optionsRadios3" value="XII">XII</label>
                          </div>
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_jurusan" class="col-md-4 control-label">Jurusan</label>
                      <div class="col-md-6">
                        <label class="col-xs-4">
                          <select id="nama_jurusan" type="nama_jurusan" class="form-control" name="nama_jurusan" required>
                            <option value="" disabled selected=""> <i>Pilih Angkatan</i></option>
                            @foreach($jurusan as $value)
                            @if($value->status_jurusan == 'Aktif') <!--menampilkan data yg aktif dari master kelas-->
                              <option value="{{$value->id_jurusan}}">{{$value->nama_jurusan}}</option>
                              @endif
                            @endforeach
                          </select>
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_urutan_kelas" class="col-md-4 control-label">Urutan Kelas</label>
                      <div class="col-md-6">
                        <label class="col-xs-4">
                          <select id="nama_urutan_kelas" type="nama_urutan_kelas" class="form-control" name="nama_urutan_kelas" required>
                            <option>---</option>
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
                <div class="col-md-4"></div>
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
                    <tr>
                      <th>Tingkat</th>
                      <th>Jurusan</th>
                      <th>Urutan Kelas</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                    @foreach($KelasSiswa as $value)
                  <tr>
                    <td>{{ $value->tingkat }}</td>
                    <td>{{ $value->nama_jurusan }}</td>
                    <td>{{ $value->nama_urutan_kelas }}</td>
                    <td>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-ubah{{ $value->id_kelas }}">Ubah</button>
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-datasiswa">Data Siswa</button>
                    </td>
                  </tr>
                  <!---POP UP EDIT DATA KELAS-->
                  <div class="modal fade" id="modal-ubah{{ $value->id_kelas }}">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                          <h4 class="modal-title">Ubah Jurusan</h4>
                        </div>
                        <div class="modal-body">
                          <form class="form-horizontal" action="{{ route('kelas_siswa.update', $value->id_kelas) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                              <div class="box-body">
                                <!--ISI POP UP EDIT DATA KELAS-->
                                <div class="form-group">
                                  <label for="tingkat" class="col-md-4 control-label">Tingkat</label>
                                    <div class="col-md-6">
                                      <label class="col-xs-12">
                                        <div class="radio">
                                            <label>
                                              <input <?php if($value->tingkat=="X") {echo "checked='true'";} ?> type="radio" name="tingkat" id="optionsRadios1" value="X">X</label>
                                            <label>
                                              <input <?php if($value->tingkat=="XI") {echo "checked='true'";} ?> type="radio" name="tingkat" id="optionsRadios2" value="XI">XI</label>
                                            <label>
                                              <input <?php if($value->tingkat=="XII") {echo "checked='true'";} ?> type="radio" name="tingkat" id="optionsRadios2" value="XII">XII</label>
                                        </div>
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="nama_jurusan" class="col-md-4 control-label">Jurusan</label>
                                    <div class="col-md-6">
                                      <label>
                                        <select id="nama_jurusan" type="nama_jurusan" class="form-control" name="nama_jurusan" required>
                                          <option>---</option>
                                          @foreach($jurusan as $item_jurusan)
                                          @if($item_jurusan->status_jurusan == 'Aktif') <!--menampilkan data yg aktif dari master kelas-->
                                            <option <?php if($item_jurusan->nama_jurusan==$value->nama_jurusan) {echo "selected='true'";} ?> value="{{$item_jurusan->id_jurusan}}">{{$item_jurusan->nama_jurusan}}</option>
                                            @endif
                                          @endforeach
                                        </select>
                                      </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <label for="nama_urutan_kelas" class="col-md-4 control-label">Urutan Kelas</label>
                                    <div class="col-md-2">
                                      <label>
                                        <select id="nama_urutan_kelas" type="nama_urutan_kelas" class="form-control" name="nama_urutan_kelas" value="{{ $value->nama_urutan_kelas }}" required>
                                          <option>---</option>
                                          @foreach($urutan_kelas as $item_urutan_kelas)
                                          @if($item_urutan_kelas->status_urutan_kelas == 'Aktif')<!--menampilkan data yg aktif dari master kelas-->
                                            <option <?php if($item_urutan_kelas->nama_urutan_kelas==$value->nama_urutan_kelas) {echo "selected='true'";} ?> value="{{$item_urutan_kelas->id_urutan_kelas}}">{{$item_urutan_kelas->nama_urutan_kelas}}</option>
                                            @endif
                                          @endforeach
                                        </select>
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
</section>
</body>

@endsection
@yield('css')
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