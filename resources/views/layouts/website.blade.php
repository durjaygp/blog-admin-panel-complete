<!DOCTYPE html>
<html lang="en">

<head>
	<title>Recipe Template</title>
	<!-- Meta Tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon -->
	<link rel="shortcut icon" href="{{asset('website')}}/images/favicon.ico">

	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com/">
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&amp;family=Rubik:wght@400;500;700&amp;display=swap" rel="stylesheet">

	<!-- Plugins CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('website')}}/vendor/font-awesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('website')}}/vendor/bootstrap-icons/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="{{asset('website')}}/vendor/tiny-slider/tiny-slider.css">

	<!-- Theme CSS -->
	<link id="style-switch" rel="stylesheet" type="text/css" href="{{asset('website')}}/css/style.css">
	
</head>
<body>

<!-- =======================
Header START -->
<header class="navbar-light navbar-sticky header-static">
	<!-- Logo Nav START -->
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<!-- Logo START -->
			<a class="navbar-brand" href="index.html">
				<img class="navbar-brand-item light-mode-item" src="{{asset('website')}}/images/logo.svg" alt="logo">			
				<img class="navbar-brand-item dark-mode-item" src="{{asset('website')}}/images/logo-light.svg" alt="logo">			
			</a>
			<!-- Logo END -->

			<!-- Responsive navbar toggler -->
			<button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="text-body h6 d-none d-sm-inline-block">Menu</span>
			  <span class="navbar-toggler-icon"></span>
		  </button>

			<!-- Main navbar START -->
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav navbar-nav-scroll mx-auto">
					
					<!-- Nav item 1 Demos -->
					<li class="nav-item dropdown">
						<a class="nav-link" href="#" id="homeMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
					</li>

					<!-- Nav item 2 Pages -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="pagesMenu" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Category</a>
						<ul class="dropdown-menu" aria-labelledby="pagesMenu">
							<li> <a class="dropdown-item" href="about-us.html">Ramen</a></li>
							<li> <a class="dropdown-item" href="contact-us.html">Pizza</a></li>
							
						</ul>
					</li>

				

					<li class="nav-item"><a class="nav-link" href="docs/alerts.html">Contact</a></li>
					<li class="nav-item"><a class="nav-link" href="docs/alerts.html">About Us</a></li>
				</ul>
			</div>
			<!-- Main navbar END -->

			<!-- Nav right START -->
			<div class="nav ms-sm-3 flex-nowrap align-items-center">
				<!-- Dark mode switch -->
				<div class="nav-item">
					<div class="modeswitch" id="darkModeSwitch">
						<div class="switch"></div>
					</div>
				</div>
				<!-- Nav Button -->
				<div class="nav-item d-none d-md-block">
					<a href="#" class="btn btn-sm btn-danger mb-0 mx-2">Subscribe!</a>
				</div>
				<!-- Nav Search -->
				<div class="nav-item dropdown nav-search dropdown-toggle-icon-none">
					<a class="nav-link pe-0 dropdown-toggle" role="button" href="#" id="navSearch" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bi bi-search fs-4"> </i>
					</a>
					<div class="dropdown-menu dropdown-menu-end shadow rounded p-2" aria-labelledby="navSearch">
					  <form class="input-group">
					    <input class="form-control border-success" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-success m-0" type="submit">Search</button>
					  </form>
					</div>
				</div>
			</div>
			<!-- Nav right END -->
		</div>
	</nav>
	<!-- Logo Nav END -->
</header>
<!-- =======================
Header END -->
@yield('content')

<!-- =======================
Footer START -->
<footer class="bg-dark">
	<!-- Footer copyright START -->
	<div class="bg-dark-overlay-3 mt-5">
		<div class="container">
			<div class="row align-items-center justify-content-md-between py-4">
				<div class="col-md-6">
					<!-- Copyright -->
					<div class="text-center text-md-start text-primary-hover text-muted">©2021 <a href="https://www.webestica.com/" class="text-reset btn-link" target="_blank">Webestica</a>. All rights reserved
					</div>
				</div>
				<div class="col-md-6 d-sm-flex align-items-center justify-content-center justify-content-md-end">
					<!-- Language switcher -->
					<div class="dropup me-0 me-sm-3 mt-3 mt-md-0 text-center text-sm-end">
					  <a class="dropdown-toggle text-primary-hover" href="#" role="button" id="languageSwitcher" data-bs-toggle="dropdown" aria-expanded="false">
					    English Edition
					  </a>
					  <ul class="dropdown-menu min-w-auto" aria-labelledby="languageSwitcher">
					    <li><a class="dropdown-item" href="#">English</a></li>
					    <li><a class="dropdown-item" href="#">German </a></li>
					    <li><a class="dropdown-item" href="#">French</a></li>
					  </ul>
					</div>
					<!-- Links -->
				  <ul class="nav text-primary-hover text-center text-sm-end justify-content-center justify-content-center mt-3 mt-md-0">
			      <li class="nav-item"><a class="nav-link" href="#">Terms</a></li>
			      <li class="nav-item"><a class="nav-link" href="#">Privacy</a></li>
			      <li class="nav-item"><a class="nav-link pe-0" href="#">Cookies</a></li>
				  </ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Footer copyright END -->
</footer>
<!-- =======================
Footer END -->

<!-- Back to top -->
<div class="back-top"><i class="bi bi-arrow-up-short"></i></div>

<!-- =======================
JS libraries, plugins and custom scripts -->

<!-- Bootstrap JS -->
<script src="{{asset('website')}}/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Vendors -->
<script src="{{asset('website')}}/vendor/tiny-slider/tiny-slider.js"></script>
<script src="{{asset('website')}}/vendor/sticky-js/sticky.min.js"></script>

<!-- Template Functions -->
<script src="{{asset('website')}}/js/functions.js"></script>

</body>

</html>