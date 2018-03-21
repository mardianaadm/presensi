  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- <li class="header">MAIN NAVIGATION</li> -->
        <li class="">
          <a href="{{url('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </span>
          </a>

        <li class="">
          <a href="{{url('jadwal')}}">
            <i class="fa fa-calendar"></i> <span>Jadwal Mengajar</span>
            </span>
          </a>

        <li class="">
          <a href="{{url('kelas_siswa')}}">
            <i class="fa fa-files-o"></i>
            <span>Data Kelas Siswa</span>
            </span>
          </a>
        </li>
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Data Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('data_guru')}}"><i class="fa fa-users"></i> Data Guru</a></li>
            <li><a href="{{url('master_kelas')}}"><i class="fa fa-bank"></i> Master Kelas</a></li>
            <li><a href="{{url('data_siswa')}}"><i class="fa fa-users"></i> Data Siswa</a></li>
            <li><a href="{{url('data_sesi')}}"><i class="fa fa-clock-o"></i> Data Sesi</a></li>
            <li><a href="{{url('tahun_ajaran')}}"><i class="fa fa-calendar-check-o"></i> Tahun Ajaran</a></li>
          </ul>
        </li>
    </section>
    <!-- /.sidebar -->
  </aside>