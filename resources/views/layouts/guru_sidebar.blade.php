  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
            <img src="{{ url('images/logo.jpg') }}" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{ ucfirst(\Illuminate\Support\Facades\Auth::user()->nama_user) }}</p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="{{url('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </span>
          </a>

        <li class="">
          <a href="{{url('presensi')}}">
            <i class="fa fa-calendar"></i> <span>Presensi</span>
            </span>
          </a>

        <li class="">
          <a href="{{url('rekap_presensi')}}">
            <i class="fa fa-files-o"></i><span>Data Kelas Siswa</span>
            </span>
          </a>
        </li>
        
    </section>
    <!-- /.sidebar -->
  </aside>