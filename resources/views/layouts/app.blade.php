<!DOCTYPE html>
<html lang="en">

<head>
    
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-KMYZR7Z5G3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-KMYZR7Z5G3');
    </script>
	
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>METAWAY HOLDING</title>
	<meta id="PagKeywords" name="keywords" content="METAWAY HOLDING" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="METAWAY HOLDING" />
	<meta property="og:description" content="METAWAY HOLDING" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="METAWAY HOLDING" />

	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> 

	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/fa881189ef.js" crossorigin="anonymous"></script>

	<!-- Css File -->
	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/owl.theme.default.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>

	<!-- Header -->
	<header>
		<div class="top">METAWAY Holdings Roadmap 2022-2027 IPO $300 billion</div>
		<nav class="navbar navbar-expand-lg bg-light">
			<a href="{{ route('home') }}" class="navbar-brand">
				<img src="{{ asset('img/logo.png') }}" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars" aria-hidden="true"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item dropdown">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'home') ? 'active' : '' }}" href="{{ route('home') }}" role="button" aria-expanded="false">Home</a>
						{{-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="#">Business Highlights</a></li>
							<li><a class="dropdown-item" href="#">About Metaway Holdings</a></li>
							<li><a class="dropdown-item" href="#">Business Category</a></li>
							<li><a class="dropdown-item" href="#">Project Metaway</a></li>
							<li><a class="dropdown-item {{ str_contains(Route::currentRouteName(), 'partner') ? 'active' : '' }}" href="{{ route('partner') }}">Our Partners</a></li>
							<li><a class="dropdown-item" href="#">News</a></li>
						</ul> --}}
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'about-us') ? 'active' : '' }}" href="{{ route('about-us.overview') }}" role="button" aria-expanded="false">
							About us
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							{{-- <li><a class="dropdown-item" href="{{ route('about-us.overview') }}">Overview</a></li>
							<li><a class="dropdown-item" href="#">Brand Story</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.member') }}">Core values</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.member') }}">Members</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.team') }}">Our Executive Team</a></li>
							<li><a class="dropdown-item" href="{{ route('partner') }}">Our Partners</a></li> --}}
							{{-- <li><a class="dropdown-item" href="#">Technology</a></li> --}}
							<!-- <li><a class="dropdown-item" href="{{ route('about-us.message') }}">Message</a></li> -->
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'business') ? 'active' : '' }}" href="{{ route('business') }}" role="button">Business</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Projects</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('project.hyperas') }}">Hyperas Chain</a></li>
							<li><a class="dropdown-item" href="{{ route('project.pindias') }}">Pindias</a></li>
							<li><a class="dropdown-item" href="{{ route('project.divega') }}">Divega</a></li>
							<li><a class="dropdown-item" href="{{ route('project.rapital') }}">Rapital Bank</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'investor') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Investors</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('investor.report') }}">Internal reports</a></li>
							<li><a class="dropdown-item" href="{{ route('investor.annual') }}">Annual Finance Reports</a></li>
							<li><a class="dropdown-item" href="#">Sec Filing</a></li>
						</ul>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'media') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('media.news') }}">News</a></li>
							<li><a class="dropdown-item" href="{{ route('media.invest-news') }}">Investor News</a></li>
							<li><a class="dropdown-item" href="{{ route('media.press') }}">Press release</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Language</a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a>
					</li> -->
					<!-- <li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'investor') ? 'active' : '' }}" href="{{ route('investor') }}">Investors</a>
					</li> -->
					<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'media') ? 'active' : '' }}" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('media.overview') }}">Overview</a></li>
							<li><a class="dropdown-item" href="{{ route('media.report') }}">Internal reports</a></li>
							<li><a class="dropdown-item" href="{{ route('media.press') }}">Press release</a></li>
						</ul>
					</li> -->
				</ul>
			</div>
		</nav>
	</header>

	@yield('content')

	<!-- newsletter -->
	<section id="newsletter">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-auto col-sm text-end">
					<h6 class="mb-0">Stay ahead</h6>
					<div>weekly insights straight to your inbox</div>
				</div>
				<div class="col">
					<div class="input-group input-group-lg">
						<input type="email" class="form-control" placeholder="Email address">
						<button class="btn" type="button">
							<i class="fab fa-telegram-plane" aria-hidden="true"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<footer class="pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-auto col-12">
					<img src="{{ asset('img/logo-footer.png') }}" class="footerLogo">
				</div>
				<div class="col-lg col-12">
					<h6 class="title text-red"><span>Home Page</span></h6>
					<div class="row menuFooter">
						<div class="col-md-4">
							<ul>
								<li class="parent">
									<span>About us</span>
									<ul class="list-unstyled">
										<li><a href="{{ route('about-us.overview') }}">Overview</a></li>
										<li><a href="{{ route('about-us.overview') }}">Brand Story</a></li>
										<li><a href="{{ route('about-us.overview') }}">Core Values</a></li>
										<li><a href="{{ route('about-us.overview') }}">Members</a></li>
										<li><a href="{{ route('about-us.overview') }}">Our Executive Team</a></li>
										<li><a href="{{ route('about-us.overview') }}">Our Partner</a></li>
									</ul>
								</li>
								<li class="parent">
									<span>Projects</span>
									<ul class="list-unstyled">
										<li><a href="https://hyperaschain.com/" target="_blank">Hyperas Chain</a></li>
										<li><a href="https://www.pindias.com/" target="_blank">Pindias</a></li>
										<li><a href="https://divega.com/" target="_blank">Divega</a></li>
										<li><a href="https://www.rapitalbank.com/" target="_blank">Rapital Bank</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li class="parent">
									<span>Investors</span>
									<ul class="list-unstyled">
										<li><a href="javascript:void(0)">Announcement</a></li>
										<li><a href="javascript:void(0)">Investment news</a></li>
										<li><a href="javascript:void(0)">Annual financial reports</a></li>
									</ul>
								</li>
								<li class="parent">
									<span>Media</span>
									<ul class="list-unstyled">
										<li><a href="{{ route('media.report') }}">Internal reports</a></li>
										<li><a href="{{ route('media.press') }}">Press release</a></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="col-md-4">
							<ul>
								<li><a href="{{ route('contact') }}">Contact</a> </li>
								<li><a href="#">Legal Statement</a> </li>
								<li><a href="#">Privacy Policy</a> </li>
								<li><a href="#">Cookies Preferences</a> </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="companyInfo">
				<h6 class="title"><span>METAWAY HOLDINGS INC (USA)</span></h6>
				<div class="row">
					<div class="col-md-8">
						<ul class="list-unstyled">
							<li>
								<span>A</span> 30 N GOULD STREET STE R SHERIDAN, WYOMING (WY) 81801
							</li>
							<li>
								<span>E</span> info@metawayholdings.com
							</li>
							<li>
								<span>W</span> www.metawayholdings.com
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="row social">
							{{-- <div class="col-auto"><a href="" class="item"><i class="fa fa-instagram"></i></a></div> --}}
							<div class="col-auto"><a target="_blank" href="https://www.facebook.com/Metaway-Holdings-109209504990418" class="item"><i class="fa fa-facebook-f"></i></a></div>
							<div class="col-auto"><a target="_blank" href="https://www.youtube.com/channel/UCpIg6-XEcZnofCZD5z8OLVw" class="item"><i class="fa fa-youtube"></i></a></div>
							<div class="col-auto"><a target="_blank" href="https://linkedin.com/company/metawayglobal" class="item"><i class="fa fa-linkedin"></i></a></div>
							<div class="col-auto"><a target="_blank" href="https://twitter.com/metawayglobal" class="item"><i class="fa fa-twitter"></i></a></div>
							{{-- <div class="col-auto"><a href="" class="item"><i class="fas fa-plus"></i></a></div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div>METAWAYholdings.com is a proud part of METAWAY holdings Inc., a leading business services company.</div>
				<div>METAWAYholdings.com is a Registered Trademark. © 2020 - 2021 All Rights Reserved</div>
			</div>
		</div>
	</footer>

	<!-- Js File -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
	{{-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> --}}
	<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

	@stack('script')
</body>

</html>
