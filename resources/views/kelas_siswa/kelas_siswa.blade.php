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
                              <option value="{{$item->id_jurusan}}">{{$item->nama_jurusan}}</option>
                            @endforeach
                          </select>
                        </label>
                      </div>
                  </div>

                  <div class="form-group">
                    <label for="nama_urutan_kelas" class="col-md-2 control-label">Urutan Kelas</label>
                      <div class="col-md-4">
                        <label>
                          <select id="nama_urutan_kelas" type="nama_urutan_kelas" class="form-control" name="nama_urutan_kelas" required>
                            <option>-</option>
                            <!-- <option>MIPA</option>
                            <option>SOSIAL</option> -->
                          </select>
                        </label>
                      </div>
                  </div>
              </div>

              <div class="box-footer">
                <div class="col-md-2"></div>
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
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
                      <th>Action</th>
                    </tr>
                  </thead>
                </table> 
            </div> <!-- /.box -->          
        </div> <!-- /.col -->        
    </div> <!-- /.row -->      
</section>

<!-- <div class="panel-footer">
  <div class="row">
    <div class="col col-xs-4">Page 1 of 5</div>
    <div class="col col-xs-8">
      <ul class="pagination hidden-xs pull-right">
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
      </ul>
      <ul class="pagination visible-xs pull-right">
        <li><a href="#"><i class="fa fa-angle-double-left"></i></a></li>
        <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
      </ul>
    </div>
  </div>
</div> -->
</body>

@endsection
@yield('css')
@section('js')
<script type="text/javascript">
$('#example2').DataTable({
  "ordering": false
});
</script>
@endsection