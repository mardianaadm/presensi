  <footer class="main-footer">
    <strong style="font-size: 13px;">Copyright &copy; 2018 SMAN 3 MAGETAN</a>.</strong> All rights
    reserved.
  </footer>

<!-- jQuery 3 -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('js/dataTables.bootstrap.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('js/demo.js')}}"></script>
<!-- Select2 -->
<link rel="stylesheet" href="{{asset('js/select2.full.min.js')}}">
<script src="{{asset('js/sweetalert.min.js')}}"></script>
@include('sweet::alert')
@yield('js')
<script type="">
  var url = window.location;

  $('ul.sidebar-menu a').filter(function(){
    return this.href==url;
  }).parent().addClass('active');
</script>
</body>
</html>