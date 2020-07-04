@extends('layouts/main')
@section('title','Yogya Trip - Obyek Wisata')
@section('container')
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Yogya Trip</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--CSS============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		
			<section>			
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

			<div class="container">	
								
				<br>
				<form action="/obyek_wisata/cari" method="GET">
					<input type="text" name="cari" placeholder="Cari Obyek Wisata .." value="{{ old('cari') }}">
					<input type="submit" value="CARI" class="genric-btn default">
				</form>
				<br/>

				<div class="row">
				@foreach($objek as $p)
				
				<div class="card" style="width: 18rem;">
				
				<img src="{{url('/data_file/'.$p->image)}}" class="card-img-top">
				  <div class="card-body">
				
				    <h5 class="card-title">{{ $p->nama_objek }}</h5>
				    <p class="card-text">{{ $p->Alamat }}</p>
					<a href="/objek_wisata/lihat/{id}" class="btn btn-info">Lihat informasi</a>
					<br>

				
				  </div>
				</div>

				@endforeach
				</div>
			</div>

			<!-- JS Script -->
			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/slick.js"></script>
			<script src="js/jquery.counterup.min.js"></script>
			<script src="js/waypoints.min.js"></script>		
			<script src="js/main.js"></script>
@endsection
