@extends('layouts.main')
@section('content')
<body>
   	<section class="content">
	    <div class="row">
	    <div class="col-md-12">
	        <div class="box box-success">
	            <div class="box-header">
	               <h3 class="box-title">Tambah Sesi</h3></br></br>
	               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-tambahsesi">Tambah Sesi</button>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body">
	               <table id="example1" class="table table-bordered table-hover">
	                  	<thead>
		                    <tr>
		                       <th>Nama Sesi</th>
		                       <th>Jam</th>
		                       <th>Aksi</th>
		                    </tr>
	                  	</thead>
	                	<tbody>
                     @foreach ($data_sesi as $value)
                     <tr>
                        <td>{{ $value->nama_sesi }}</td>
                        <td>{{ $value->jam }}</td>
                        <td>
                           <span data-toggle="tooltip" title="Ubah" style="padding-left: 20px;"><i class="fa fa-edit" style="color: #00a65a" type="button" data-toggle="modal" data-target="#modal-ubah{{ $value->id_sesi }}"></i></span>
                        </td>
                     </tr>
                     <!--POP UP EDIT TAHUN AJARAN-->
                     <div class="modal fade" id="modal-ubah{{ $value->id_sesi }}">
                        <div class="modal-dialog">
                           <div class="modal-content">
                              <div class="modal-header">
                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                 <span aria-hidden="true">&times;</span></button>
                                 <h4 class="modal-title">Ubah Data Sesi</h4>
                              </div>
                              <div class="modal-body">
                                 <form class="form-horizontal" action="{{ route('data_sesi.update', $value->id_sesi) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PATCH') }}
                                    <div class="box-body">
                                       <!--POP UP ISI EDIT TAHUN AJARAN-->
                                          <div class="form-group">
                                             <label for="nama_semester" class="col-md-4 control-label">Nama Sesi</label>
                                             <div class="col-sm-4">
					                            <input type="text" class="form-control" id="inputNama" placeholder="Sesi" name="nama_sesi" value="{{ $value->nama_sesi }}">
					                         </div>
                                          </div></br></br>
                                          <div class="form-group">
                                             <label for="inputNama" class="col-md-4 control-label">Jam</label>
                                             <div class="col-sm-4">
					                            <input type="text" class="form-control" id="inputJam" placeholder="Jam" name="jam" value="{{ $value->jam }}">
					                         </div>
                                          </div>
                                       <!--END POP UP EDIT ISI TAHUN AJARAN-->
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                                       <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                        <!-- /.modal-content -->
                     </div>
                     <!-- END POP UP EDIT TAHUN AJARAN -->
                  @endforeach
                  </tbody>
	               </table>
	            </div>
	            <!-- /.box-body -->
	        </div>            
	    </div>
	    <!-- /.box -->          
	    </div>
	    <!-- /.col -->

	    <!--POP UP TAMBAH TAHUN AJARAN-->
      <div class="modal fade" id="modal-tambahsesi">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title">Tambah Sesi</h4>
               </div>
               <div class="modal-body">
                  <form class="form-horizontal" action="{{ route('data_sesi.store') }}" method="post">
                     {{ csrf_field() }}
                     <div class="box-body">
                        <!--POP UP ISI TAMBAH TAHUN AJARAN-->
                        <div class="form-group">
	                         <label for="nama_semester" class="col-md-4 control-label">Nama Sesi</label>
	                         <div class="col-sm-4">
	                            <input type="text" class="form-control" id="inputNama" placeholder="Sesi" name="nama_sesi">
	                         </div>
	                      </div>
	                      <div class="form-group">
	                         <label for="inputNama" class="col-md-4 control-label">Jam</label>
	                         <div class="col-sm-4">
	                            <input type="text" class="form-control" id="inputJam" placeholder="Jam" name="jam">
	                         </div>
	                      </div>
                        <!--END POP UP ISI TAMBAH TAHUN AJARAN-->
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <!-- /.modal-content -->
      </div>
      <!-- END POP UP TAMBAH TAHUN AJARAN -->
   	</section>
</body>
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