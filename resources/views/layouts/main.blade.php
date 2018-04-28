@include('layouts/header')

@if(Auth::user()->level=="Guru")
@include('layouts/guru_sidebar')
@elseif(Auth::user()->level=="Admin")
@include('layouts/sidebar')
@endif

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- right col (We are only adding the ID to make the widgets sortable)-->

         @yield('content')
        <!-- right col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('layouts/footer')