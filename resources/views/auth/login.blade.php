<!DOCTYPE HTML>
<html>
	<head>
	<title>SMAN 3 MAGETAN</title>
	<!--untuk menampilkan logo pada web-->
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/logo.ico')}}">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
	</head>
	
	<body>
	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><img src="images/logo.jpg" width="55" height="50"><font face="Bookman Old Style"><a>SMAN 3 MAGETAN</a></font></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><h3><font face="News701 BT"><font color="white">Laboratorium Komputer</font></font></h3></li>
					</ul>	
				</div>
			</div>
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" style="background-image: url(images/komputer.jpg); background-size: cover; height: 95vh;" >
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><font face="Century Schoolbook">Sistem Informasi Presensi Siswa</font></h1>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3><center>LOGIN</center></h3>
											<form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        					{{ csrf_field() }}
												<div class="row form-group">
													<div class="col-md-12">
														<label>NIP</label>
														<input type="text" id="nip" class="form-control" name="nip" value="{{old('nip')}}" required autofocus>
						                                @if ($errors->has('nip'))
						                                    <span class="help-block">
						                                        <strong>{{ $errors->first('nip') }}</strong>
						                                    </span>
						                                @endif
													</div>
													<div class="col-md-12">
														<label>Password</label>
														<input type="password" id="password" class="form-control" name="password" value="{{old('password')}}" required>
														@if ($errors->has('password'))
						                                    <span class="help-block">
						                                        <strong>{{ $errors->first('password') }}</strong>
						                                    </span>
						                                @endif
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>
											</form>
										</div>
										<h5 style="text-align: center;"><a href="" data-toggle="modal" data-target="#modal-default">Lupa Password</a></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<footer class="main-footer">
    <div class="pull-right hidden-xs">
    </div>
    <strong><center>Copyright &copy; 2018 SMAN 3 MAGETAN. All rights reserved.</center></strong>
  	</footer>

	<!-- jQuery -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>
	</body>
</html>

