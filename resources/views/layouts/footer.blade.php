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

<script type="text/javascript">
	$( document ).ready(function() {
		function getInfo() {
			var inputs = $("#search").val();

			$.ajax({
					url: "search/"+inputs,
					dataType: "json",
					type: "GET", // Even if its the default value... looks clearer
					success: function(data){
						if(data.length != 0){
							$('#inputNama').val(data[0].nama_siswa);
						}else{
							alert('NISN/NIS tidak ditemukan!');
						}
					}
			});

			return false;
		}
		$('#infoSubmit').click(getInfo);
    
	});
</script>

<script type="text/javascript">
      /** add active class and stay opened when selected */
		var url = window.location;

		// for sidebar menu entirely but not cover treeview
		$('ul.sidebar-menu a').filter(function() {
			 return this.href == url;
		}).parent().addClass('active');

		// for treeview
		$('ul.treeview-menu a').filter(function() {
			 return this.href == url;
		}).parentsUntil(".sidebar-menu > .treeview-menu").addClass('active');
</script>
</body>
</html>