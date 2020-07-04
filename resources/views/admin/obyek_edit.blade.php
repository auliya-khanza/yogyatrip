<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Dashboard Admin - Edit Obyek Wisata</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS============================================= -->
			<link rel="stylesheet" href="/css/linearicons.css">
			<link rel="stylesheet" href="/css/font-awesome.min.css">
			<link rel="stylesheet" href="/css/bootstrap.css">
			<link rel="stylesheet" href="/css/magnific-popup.css">
			<link rel="stylesheet" href="/css/animate.min.css">
			<link rel="stylesheet" href="/css/owl.carousel.css">
			<link rel="stylesheet" href="/css/main.css">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
				<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-dark">
						<div class="container">
						<a class="navbar-brand" href="/admin">
								  <img src="/img/logo_.png" alt="">
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-black lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									
									<li><a href="{{url('/admin/objek_wisata')}}">Obyek Wisata</a></li>
									<li><a href="{{url('/admin/pemasukan')}}">Pemasukan</a></li>
									<li><a href="{{url('/admin/tiket')}}">Tiket</a></li>
									<li><a href="{{url('/admin/statistik')}}">Statistik</a></li>
									<!-- Dropdown -->
								    <li class="dropdown">
										
                                        @if(Auth::check())
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Welcome {{ ucfirst(Auth()->user()->name) }} 
										</a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{url('logout')}}">Log Out</a>
										</div>
                                        @else
                                        <a class="dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Pengguna
										</a>
										<div class="dropdown-menu">
										  <a class="dropdown-item" href="{{url('register')}}">Daftar</a>
                                          <a class="dropdown-item" href="{{url('login')}}">Login</a>
										</div>
									  </li>
                                      @endif
								</ul>
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
				<!-- End Header Area -->
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Obyek Wisata</h2>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->				
			</section>

		<body>
		<br>
		<br>
		<br>
		<br>
		<br>

		@foreach($objek as $p)

		<form action="/objek_wisata/update" method="post">
		{{ csrf_field() }}
		<table>
			<tr>
				<td><input type="hidden" required="required" name="id_objek" value="{{ $p->id_objek }}"> </td>
			</tr>
			<tr>
				<td>Nama Objek</td>
				<td>:</td>
				<td> <input type="text" name="nama_objek" required="required" value="{{ $p->nama_objek }}"> </td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" name="Alamat" required="required" value="{{ $p->Alamat }}"> </td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><input type="text" name="deskripsi" required="required" value="{{ $p->deskripsi }}"> </td>
			</tr>
			<tr>
				<td>Jam Operasional</td>
				<td>:</td>
				<td><input type="text" name="jam_operasional" required="required" value="{{ $p->jam_operasional }}">< </td>
			</tr>

			<tr>
				<td>Harga tiket</td>
				<td>:</td>
				<td><input type="text" name="harga_tiket" required="required" value="{{ $p->harga_tiket }}"></textarea> </td>
			</tr>
			
			<tr>
				<td colspan="3"><input type="submit" value="Simpan Data"></td>
			</tr>

			
		</table>
		
	</form>
	@endforeach

	<br>
	<br>
	<br>
	<br>
	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									Annida Rizki | Auliya Khanza | Ba'Auliyaul Afifah | Maheswari Paramita
								</p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            		<p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            		<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">

										<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">

										<div class="d-flex flex-row">

											<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">


				                            	<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
				                            	<div style="position: absolute; left: -5000px;">
													<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
												</div>
				                          	
											<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
										</div>		
										<div class="info"></div>
										</form>
								</div>
								</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->			

			<script src="/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="/js/vendor/bootstrap.min.js"></script>
			<script src="/js/jquery.ajaxchimp.min.js"></script>
			<script src="/js/jquery.magnific-popup.min.js"></script>	
			<script src="/js/owl.carousel.min.js"></script>			
			<script src="/js/jquery.sticky.js"></script>
			<script src="/js/slick.js"></script>
			<script src="/js/jquery.counterup.min.js"></script>
			<script src="/js/waypoints.min.js"></script>		
			<script src="/js/main.js"></script>	
	</body>
</html>