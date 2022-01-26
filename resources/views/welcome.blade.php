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
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active" data-bs-interval="5000">
					<img src="img/Banner-homepage.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/Banner-homepage.png" class="w-100">
				</div>
				<div class="carousel-item" data-bs-interval="5000">
					<img src="img/Banner-homepage.png" class="w-100">
				</div>
			</div>
		</div>
	</section>

	<!-- Business Highlights -->
	<section class="newsHighlights bgGrey bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">BUSINESS HIGHLIGHTS</h2>
			<div class="text-center">
				<p class="mb-2">At CMC Holdings, we partner with our customers. We listen first and only then
				create solutions.</p>
				<p>And it is from the understanding of our customers with which we create the products
				and services that <br> are changing how the world works, lives, and plays.</p>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-reliable.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Reliable</a></h5>
							<p class="card-text">CMC Holdings attaches great importance to the trust of customers for its business activities. And set it as a pioneering core value in every action.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-companion.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Companion</a></h5>
							<p class="card-text">CMC holdings vows to accompany its partners and customers to the end of the path chosen by the mission.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-commitment.png"></a>
						<div class="card-body col">
							<h5 class="card-title titleUnderline"><a href="#">Commitment</a></h5>
							<p class="card-text">CMC Holdings is always committed to serving customers and partners with the best products and services.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ABOUT -->
	<section class="about bgWhite bgArrow">
		<div class="container">
			<h2 class="sectionHeading">ABOUT <span>CMC HOLDINGS</span></h2>
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<h5 class="titleUnderline">CMC Holdings INC Overview</h5>
					<ul class="style-1">
						<li>CMC Holdings was founded based on the global business ambition of the Founders who have many years experience in the field of investing, restructuring and developing cross-border projects.</li>
						<li>CMC was inspired by connecting a community of competent entrepreneurs in the new economic field of the millennium.</li>
						<li>CMC Holdings attaches great importance to social values and focuses on the vital core areas of this world.</li>
						<li>The Founders team are from all over the world for a lasting business goal.</li>
						<li>CMC Holdings defines a bold direction for a successful business community in the 21st century.</li>
					</ul>
				</div>
				<div class="col-lg-8 col-md-6">
					<div class="videoWrapper">
						<iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</div>					
				</div>
			</div>
		</div>
	</section>

	<!-- PROJECTS -->
	<section class="projects bgDark bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered text-white">PROJECTS <span>CMC HOLDINGS</span></h2>
			<div id="projectsCarousel" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#projectsCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
				</div>
				<div class="carousel-inner text-center mw-600 text-white">
					<div class="carousel-item active">
						<p>CMC Holdings INC focuses on market research, updating the latest trends. Leveraging a solid industry and financial background to develop and put into practice products services related to: Renewable Energy, Financial Technology, Crypto Real Estate and development needs other. Each of our projects responds to and serves the key aspects and trends of the times.</p>
					</div>
					<div class="carousel-item">
						<p>CMC Holdings INC focuses on market research, updating the latest trends. Leveraging a solid industry and financial background to develop and put into practice products services related to: Renewable Energy, Financial Technology, Crypto Real Estate and development needs other. Each of our projects responds to and serves the key aspects and trends of the times.</p>
					</div>
					<div class="carousel-item">
						<p>CMC Holdings INC focuses on market research, updating the latest trends. Leveraging a solid industry and financial background to develop and put into practice products services related to: Renewable Energy, Financial Technology, Crypto Real Estate and development needs other. Each of our projects responds to and serves the key aspects and trends of the times.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="img/project-one.png"></a>
						<div class="card-body">
							<h5 class="card-title titleUnderline">CLEAN ENERGY</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="img/project-two.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">REAL ESTATE</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="https://diasplat.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" src="img/project-three.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline">FINANCE AND TECHNOLOGY</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="https://paygate.global/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Investors -->
	<section class="investors bgGrey bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">INVESTORS</h2>
			<div class="text-center mw-600">
				Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
			</div>
			<div class="row listInvestors">
				<div class="col-md-6">
					<div class="card">
						<img class="card-img-top" src="img/Investors-cmctechnology.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline centered">CMC TECHNOGLY SOLUSION INC</h5>
							<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
								has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
								old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
								looked up one of the more obscure Latin words, consectetur</p>
							<div class="text-center"><a target="_blank" href="https://dev.cmcchain.network/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<img class="card-img-top" src="img/Investors-software.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline centered">SOFT WARE EMPOWER COOPERATION PTE.LTD</h5>
							<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
								has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
								old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
								looked up one of the more obscure Latin words, consectetur</p>
							<div class="text-center"><a target="_blank" href="https://onstora.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<img class="card-img-top" src="img/Investors-globalAsset.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline centered">GLOBAL ASSET MANAGEMENT.JSC</h5>
							<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
								has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
								old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
								looked up one of the more obscure Latin words, consectetur</p>
							<div class="text-center"><a target="_blank" href="https://diasplat.com/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card">
						<img class="card-img-top" src="img/Investors-paygate.png">
						<div class="card-body">
							<h5 class="card-title titleUnderline centered">PAYGATE CANADA INC</h5>
							<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
								has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
								old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
								looked up one of the more obscure Latin words, consectetur</p>
							<div class="text-center"><a target="_blank" href="https://paygate.global/" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PARTNERS -->
	<section class="partners bgWhite bgArrow">
		<div class="container">
			<h2 class="sectionHeading">PARTNERS <span>CMC HOLDINGS</span></h2>
			<p class="fw-normal fs-6">“We work with major service providers to blockchainise conventional business models”
			</p>
		</div>
		<div class="container-fluid">
			<div class="row align-items-center justify-content-center listPartners text-center">
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-1.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-2.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-3.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-4.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-5.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-6.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-7.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-8.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-1.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-2.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-3.jpg" alt=""></a>
				</div>
				<div class="col-md-1 col-4">
					<a href="#"><img src="img/partner-4.jpg" alt=""></a>
				</div>
			</div>
		</div>
	</section>

	<!-- Insider news -->
	<section class="newsHighlights bgGray">
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
	</section>
</div>
@endsection
