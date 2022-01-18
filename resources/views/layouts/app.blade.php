<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<!-- Main Tag -->
	<title>CMC HOLDING</title>
	<meta id="PagKeywords" name="keywords" content="CMC HOLDING" />
	<meta id="PagDescription" name="description" content="" />
	<link id="LinkIcon" href="" type="image/x-icon" rel="shortcut icon" />
	<link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Facebook Tag -->
	<meta property="og:url" content="" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="CMC HOLDING" />
	<meta property="og:description" content="CMC HOLDING" />
	<meta property="og:image" content="" />
	<meta property="og:site_name" content="CMC HOLDING" />

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
		<div class="top">CMC Holdings Roadmap 2022-2027 IPO $300 billion</div>
		<nav class="navbar navbar-expand-lg bg-light">
			<a href="{{ route('home') }}" class="navbar-brand">
				<img src="{{ asset('img/logo.png') }}" alt="">
			</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fas fa-bars" aria-hidden="true"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'home') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home Page</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'about-us') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							About us
						</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('about-us.overview') }}">Overview</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.message') }}">Message</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.member') }}">Members</a></li>
							<li><a class="dropdown-item" href="{{ route('about-us.team') }}">Executive Team</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'project') ? 'active' : '' }}" href="{{ route('project') }}">Projects</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'partner') ? 'active' : '' }}" href="{{ route('partner') }}">Our Partners</a>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'investor') ? 'active' : '' }}" href="{{ route('investor') }}">Investors</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle {{ str_contains(Route::currentRouteName(), 'media') ? 'active' : '' }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Media</a>
						<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
							<li><a class="dropdown-item" href="{{ route('media.overview') }}">Overview</a></li>
							<li><a class="dropdown-item" href="{{ route('media.report') }}">Internal reports</a></li>
							<li><a class="dropdown-item" href="{{ route('media.press') }}">Press release</a></li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link {{ str_contains(Route::currentRouteName(), 'contact') ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">English</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"><i class="fas fa-search"></i></a>
					</li>
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
									<span>About Us</span>
									<ul class="list-unstyled">
										<li><a href="{{ route('about-us.overview') }}">Overview</a></li>
										<li><a href="{{ route('about-us.message') }}">Message</a></li>
										<li><a href="{{ route('about-us.member') }}">Members</a></li>
										<li><a href="{{ route('about-us.team') }}">Executive Team</a></li>
									</ul>
								</li>
								<li><a href="{{ route('project') }}">Projects</a></li>
								<li><a href="{{ route('partner') }}">Our Partners</a></li>
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
				<h6 class="title"><span>CMC HOLDINGS INC (USA)</span></h6>
				<div class="row">
					<div class="col-md-8">
						<ul class="list-unstyled">
							<li>
								<span>A</span> 30 N Gould St Ste R Sheridan, Wyoming 82801, USA
							</li>
							<li>
								<span>E</span> info@cmcholdings.com
							</li>
							<li>
								<span>W</span> www.cmcholdings.com
							</li>
						</ul>
					</div>
					<div class="col-md-4">
						<div class="row social">
							<div class="col-auto"><a href="" class="item"><i class="fa fa-instagram"></i></a></div>
							<div class="col-auto"><a href="" class="item"><i class="fa fa-facebook-f"></i></a></div>
							<div class="col-auto"><a href="" class="item"><i class="fa fa-youtube"></i></a></div>
							<div class="col-auto"><a href="" class="item"><i class="fa fa-linkedin"></i></a></div>
							<div class="col-auto"><a href="" class="item"><i class="fa fa-twitter"></i></a></div>
							<div class="col-auto"><a href="" class="item"><i class="fas fa-plus"></i></a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div>CMCholdings.com is a proud part of CMC holdings Inc., a leading business services company.</div>
				<div>CMCholdings.com is a Registered Trademark. © 2020 - 2021 All Rights Reserved</div>
			</div>
		</div>
	</footer>

	<!-- Js File -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>