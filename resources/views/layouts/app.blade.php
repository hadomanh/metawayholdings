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
	<header class="fw-medium col-auto">
		<div class="roadmapText">CMC Holdings Roadmap 2022-2027 IPO $300 billion</div>
		<nav class="navbar navbar-expand-lg">
			<div class="icon-menu">
				<a href="{{ route('home') }}"><img src="{{ asset('img/logoHomepage.png') }}" alt=""></a>
			</div>
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
		</nav>
	</header>

	@yield('content')

	<!-- newsletter -->
	<section class="newsletter bgletter">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-auto text-end">
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
	<footer>
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-4">
					<img src="{{ asset('img/logo-footer.png') }}" class="footerLogo">
				</div>
				<div class="col-md-8">
					<div class="row menuFooter">
						<div class="col">
							<h6 class="title"><span>Home Page</span></h6>
							<div class="row">
								<div class="col-4">
									<ul>
										<li>
											<a href="javascript:void(0)">About Us</a>
											<a href="{{ route('about-us.overview') }}" class="d-block underlineFooter ms-4">Overview</a>
											<a href="{{ route('about-us.message') }}" class="d-block underlineFooter ms-4">Message</a>
											<a href="{{ route('about-us.member') }}" class="d-block underlineFooter ms-4">Members</a>
											<a href="{{ route('about-us.team') }}" class="d-block underlineFooter ms-4">Executive Team</a>
										</li>
										<li><a href="{{ route('project') }}">Projects</a></li>
										<li><a href="{{ route('partner') }}">Our Partners</a></li>
									</ul>
								</div>
								<div class="col-4">
									<ul>
										<li>
											<a href="{{ route('investor') }}">Investors</a>
											<a href="javascript:void(0)" class="d-block underlineFooter ms-4">Announcement</a>
											<a href="javascript:void(0)" class="d-block underlineFooter ms-4">Investment news</a>
											<a href="javascript:void(0)" class="d-block underlineFooter ms-4">Annual financial reports</a>

										</li>
										<li>
											<a href="{{ route('media.overview') }}">Media</a>
											<a href="{{ route('media.report') }}" class="d-block underlineFooter ms-4">Internal reports</a>
											<a href="{{ route('media.press') }}" class="d-block underlineFooter ms-4">Press release</a>
										</li>
									</ul>
								</div>
								<div class="col-4">
									<ul>
										<li> <a href="{{ route('contact') }}">Contact</a> </li>
										<li> <a href="#">Legal Statement</a> </li>
										<li> <a href="#">Privacy Policy</a> </li>
										<li> <a href="#">Cookies Preferences</a> </li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-end">
				<div class="col">
					<div class="row">
						<div class="col social">
							<h6 class="title"><span>Social media</span></h6>
							<div class="row">
								<div class="col">
									<p>
										<strong class="redText">A</strong> <span>30 N Gould St Ste R Sheridan, Wyoming
											82801, USA</span>
									</p>
									<p>
										<strong class="redText">E</strong> <span>info@cmcholdings.com</span>
									</p>
									<p>
										<strong class="redText">W</strong> <span>www.cmcholdings.com</span>
									</p>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fa fa-instagram"></i></a>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fa fa-facebook-f"></i></a>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fa fa-youtube"></i></a>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fa fa-linkedin"></i></a>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fa fa-twitter"></i></a>
								</div>
								<div class="col-md-1">
									<a href="" class="item"><i class="fas fa-plus"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<section class="bgGray">
		<div class="container">
			<div>CMCholdings.com is a proud part of CMC holdings Inc., a leading business services company.</div>
			<div>CMCholdings.com is a Registered Trademark. © 2020 - 2021 All Rights Reserved</div>
		</div>
	</section>

	<!-- Js File -->
	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
