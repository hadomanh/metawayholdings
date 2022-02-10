@extends('layouts.app')

@section('content')
<div id="homepage">

	<!-- Banner -->
	<section class="banner p-0">
		<div id="carouselBanner" class="carousel slide pt-0" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="2" aria-label="Slide 3"></button>
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="3" aria-label="Slide 4"></button>
				<button type="button" data-bs-target="#carouselBanner" data-bs-slide-to="4" aria-label="Slide 5"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="5000">
					<img src="img/home-banner-1.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/home-banner-2.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/home-banner-3.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/home-banner-4.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/home-banner-5.png" class="w-100">
				</div>
			</div>
		</div>
	</section>

	<!-- ABOUT -->
	<section class="about bgWhite bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">ABOUT <span>METAWAY HOLDINGS</span></h2>
			<div class="row">
				<div class="col-lg-8 col-md-6">
					<div class="videoWrapper">
						{{-- <iframe src="https://drive.google.com/file/d/1Uet3rd_qlluSj7nE1_TnP8riv9dYXsfk/preview" width="850" height="500"></iframe> --}}
						<iframe width="850" height="500" src="https://www.youtube.com/embed/IpgNWxK8eIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>					
				</div>
				<div class="col-lg-4 col-md-6" style="text-align: justify">
					<h5 class="titleUnderline">METAWAY Holdings INC Overview</h5>
					<ul class="style-1">
						<li><b>MOMENT</b>: Metaway Holdings was founded at a time when digital transformation is inevitable, and many emerging technologies, such as blockchain, NFT, Metaverse, Cryptocurrency, and primarily Digital Banking, are on the rise.</li>
						<li><b>ECONOMY</b>: Metaway Holdings enters the market with the obvious intention of actively engaging in and developing new economies such as Platform Economy, DeFi, BaaS, tokenomics, and borderless economies.</li>
						<li><b>TECHNOLOGY</b>: We place priority on technology development and digitization of all business activities, but always put technology in mind for the sake of humanity.</li>
						<li><b>ASPIRATION</b>: Metaway Holdings brings together individuals with big goals to build an incredible power designed to resolve unprecedented challenges in a new era of the surreal universe like the birth of Metaverse.</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- Business Highlights -->
	<section class="newsHighlights bgGrey bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">BUSINESS HIGHLIGHTS</h2>
			<div class="text-center">
				<p class="mb-2">Metaway Holdings specializes in Global Digitalization Investment and Large Needs Search, addressing consumer concerns as well as social impacts.</p>

			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-reliable.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Vision</a></h5>
							<p class="card-text" style="height: 80px; overflow-y: scroll;">We aim to be the gigantic player in global business for mutual prosperity and set a goal IPO target of US$300 billion by 2027. </p>

							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-companion.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Mission</a></h5>
							<p class="card-text" style="height: 80px; overflow-y: scroll;">Pioneering technological innovation and knowledge, our goal is to make use of technology for delivering significant values and positive impacts on society and the globe.</p>
							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-commitment.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Core Values</a></h5>
							<p class="card-text" style="height: 80px; overflow-y: scroll;">Our positioning is global, digital, but our core values are centered on people and the unifying of intelligence including human intelligence, artificial intelligence, and business intelligence.</p>
							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="newsHighlights bgWhite bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">BUSINESS CATEGORY</h2>
			<div class="text-center">
				<p class="mb-2">The business of Metaway Holdings focuses on technology-related categories, especially financial technology, and blockchain-driven.</p>
				
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="{{ asset('img/home-category-1.png') }}"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Consumer Tech</a></h5>
							<p class="card-text" style="height: 100px; overflow-y: scroll;">With the rapid advancement of technology, essential human desires have grown to include the evolving needs of tech-driven consumption, and Metaway Holdings' commercial growth aim is to improve living standards with powerful technology.</p>
							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="{{ asset('img/home-category-2.png') }}"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Social Tech</a></h5>
							<p class="card-text" style="height: 100px; overflow-y: scroll;">Our endeavor is to be pioneering and continuously innovating in technology but our ultimate mission is to create human-oriented technology and product development goals towards social impact, creating great value for people.</p>
							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="{{ asset('img/home-category-3.png') }}"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">BaaS</a></h5>
							<p class="card-text" style="height: 100px; overflow-y: scroll;">Metaway Holdings is a global network of the most talented blockchain developers, engineers and consultants. We have a roadmap for developing our own ecosystem of blockchain related goods and services targeting government regulators, digitized global businesses, and the management of blockchain-driven assets such as securities, real estate, etc.</p>
							<div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PROJECTS -->
	<section class="projects bgDark bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered text-white">OUR PROJECTS</h2>
			<div class="text-center text-white">
				<p class="">Metaways Holdings focuses on market research, updating the latest trends. Leveraging a solid industry and financial background to develop and put into practice products & services related to Consumer Tech, Social Tech, Financial Tech, Crypto Real Estate, and development needs others. Each of our projects responds to and serves the key aspects and trends of the times.</p>
			</div>
			
			<div class="row">
				<div class="col-md-3">
					<div class="card">
						<a href="#"><img class="card-img-top" src="img/project-1.png"></a>
						<div class="card-body">
							<h5 class="card-title titleUnderline">Hyperas Chain</h5>
							<p class="card-text" style="height: 120px; overflow-y: scroll;">Hyperas Chain is a blockchain infrastructure that connects other blockchains with the noble mission of providing super security, super privacy, and super efficiency.</p>
							<div class="text-center"><a target="_blank" href="https://hyperaschain.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="img/project-3.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">Divega</h5>
							<p class="card-text" style="height: 120px; overflow-y: scroll;">E-Auction is an effective ecommerce system that allows bidders and sellers to interact through online platforms with the world's first reverse auction method.</p>
							<div class="text-center"><a target="_blank" href="https://divega.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="img/project-2.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">Pindias</h5>
							<p class="card-text" style="height: 120px; overflow-y: scroll;">Pindias' goal is to become a leading platform, top of mind brand for digital asset management.</p>
							<div class="text-center"><a target="_blank" href="https://www.pindias.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="card">
						<img class="card-img-top" src="img/project-4.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">Rapital Bank</h5>
							<p class="card-text" style="height: 120px; overflow-y: scroll;"> It provides the foundation for digital transformation, the capabilities for exceptional omni-channel experiences, and the technology to leverage open banking at its best. </p>
							<div class="text-center"><a target="_blank" href="https://www.rapitalbank.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				{{-- <div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="img/project-three.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">Our Partners</h5>
							<p class="card-text">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
							<div class="text-center"><a target="_blank" href="https://paygate.global/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>

	<!-- PARTNERS -->
	<section class="partners bgWhite">
		<div class="container">
			<h2 class="sectionHeading centered">OUR PARTNERS</h2>
			<p class="fw-normal fs-6 text-center">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models.</p>
		</div>
		<div class="container">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-md-4 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-9.png') }}" style="max-height: 100px">
				</div>
				<div class="col-md-4 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-10.png') }}" style="max-height: 100px">
				</div>
				<div class="col-md-4 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-11.jpg') }}" style="max-height: 100px">
				</div>
			</div>
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-md-3 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-12.png') }}" style="max-height: 100px">
				</div>
				<div class="col-md-3 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-13.png') }}" style="max-height: 100px">
				</div>
				<div class="col-md-3 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-14.png') }}" style="max-height: 100px">
				</div>
				<div class="col-md-3 d-flex justify-content-center mt-5">
					<img src="{{ asset('img/overview-partner-15.png') }}" style="max-height: 100px">
				</div>
			</div>
		</div>
	</section>

	<!-- Insider news -->
	{{-- <section class="newsHighlights bgGray">
		<div class="container">
			<h2 class="sectionHeading">INSIDER NEWS</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/Insider_news-one.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">News Lorem ipsum dolor amet</a></h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/Insidernews-two.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">News Lorem ipsum dolor amet</a></h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/Insidernews-three.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">News Lorem ipsum dolor amet</a></h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
</div>
@endsection
