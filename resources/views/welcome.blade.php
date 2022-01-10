@extends('layouts.app')

@section('content')
<!-- Banner -->
<div class="pt-0">
	<div id="carouselExampleDark" class="carousel carousel-dark slide pt-0" data-bs-ride="carousel">
		<div class="carousel-indicators carousel-right">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
				aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
				aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
				aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="5000">
				<img src="img/Banner-homepage.png">
			</div>
			<div class="carousel-item" data-bs-interval="5000">
				<img src="img/Banner-homepage.png">
			</div>
			<div class="carousel-item" data-bs-interval="5000">
				<img src="img/Banner-homepage.png">
			</div>
		</div>
	</div>
</div>

<!-- Business Highlights -->
<section class="bglightgray">
	<div class="container">
		<h2 class="underline">BUSINESS HIGHLIGHTS</h2>
		<p class="text-center pt-4">At CMC Holdings, we partner with our customers. We listen first and only then
			create solutions.</p>
		<p class="text-center">And it is from the understanding of our customers with which we create the products
			and services that <br> are changing how the world works, lives, and plays.</p>
		<div class="row">
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/homepage-reliable.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">Reliable</h5>
						<p class="card-text">CMC Holdings attaches great importance to the trust of customers for
							its business activities. And set it as a pioneering core value in every action.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/homepage-companion.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">Companion</h5>
						<p class="card-text pb-3">CMC holdings vows to accompany its partners and customers to the
							end of the path chosen by the mission.</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/homepage-commitment.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">Commitment</h5>
						<p class="card-text pb-3">CMC Holdings is always committed to serving customers and partners
							with the best products and services.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- ABOUT CMC HOLDINGS -->
<section>
	<div class="container">
		<h2 class="underlinee">ABOUT CMC HOLDINGS</h2>
		<div class="row mt-5">
			<div class="col-4">
				<h5 class="unnderline">CMC Holdings INC Overview</h5>
				<ul class="listStyleSquare">
					<li>CMC Holdings was founded based on the global business ambition of the Founders who have many
						years experience in the field of investing, restructuring and developing cross-border
						projects.</li>
					<li>CMC was inspired by connecting a community of competent entrepreneurs in the new economic
						field of the millennium.</li>
					<li>CMC Holdings attaches great importance to social values and focuses on the vital core areas
						of this world.</li>
					<li>The Founders team are from all over the world for a lasting business goal.</li>
					<li>CMC Holdings defines a bold direction for a successful business community in the 21st
						century.</li>
				</ul>
			</div>
			<div class="col-8"><img src="img/overview-about.png"></div>
		</div>
	</div>
</section>

<!-- PROJECTS CMC HOLDINGS -->
<p class="text-center whiteText pb-5 ">CMC Holdings INC focuses on market research, updating the latest trends.
	Leveraging a solid <br> industry and financial background to develop and put into practice products services
	related to: <br> Renewable Energy, Financial Technology, Crypto Real Estate and development needs other. Each of
	<br> our projects responds to and serves the key aspects and trends of the times.
</p>
<section class="bgDarkGray">
	<div class="container">
		<h2 class="underline whiteText">PROJECTS CMC HOLDINGS</h2>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
					class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
					aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
					aria-label="Slide 3"></button>
			</div>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<p class="text-center whiteText pb-5 pt-4">CMC Holdings INC focuses on market research, updating
						the latest trends. Leveraging a solid <br> industry and financial background to develop and
						put into practice products services related to: <br> Renewable Energy, Financial Technology,
						Crypto Real Estate and development needs other. Each of <br> our projects responds to and
						serves the key aspects and trends of the times.</p>
				</div>
				<div class="carousel-item">
					<p class="text-center whiteText pb-5 pt-4">CMC Holdings INC focuses on market research, updating
						the latest trends. Leveraging a solid <br> industry and financial background to develop and
						put into practice products services related to: <br> Renewable Energy, Financial Technology,
						Crypto Real Estate and development needs other. Each of <br> our projects responds to and
						serves the key aspects and trends of the times.</p>
				</div>
				<div class="carousel-item">
					<p class="text-center whiteText pb-5 pt-4">CMC Holdings INC focuses on market research, updating
						the latest trends. Leveraging a solid <br> industry and financial background to develop and
						put into practice products services related to: <br> Renewable Energy, Financial Technology,
						Crypto Real Estate and development needs other. Each of <br> our projects responds to and
						serves the key aspects and trends of the times.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="bglightgray">
					<img class="card-img-top" src="img/project-one.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">CLEAN ENERGY</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bglightgray">
					<img class="card-img-top" src="img/project-two.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">REAL ESTATE</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bglightgray">
					<img class="card-img-top" src="img/project-three.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">FINANCE AND TECHNOLOGY</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Investors -->
<section class="bglightgray">
	<div class="container">
		<h2 class="underline text-center">INVESTORS</h2>
		<p class="text-center pt-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
			Ipsum has been <br> the industry's standard dummy text ever since the 1500s, when an unknown printer
			took a galley of <br> type and scrambled it to make a type specimen book. It has survived not only five
			centuries, but also <br> the leap into electronic typesetting, remaining essentially unchanged. </p>
		<div class="row">
			<div class="col-6">
				<div class="bgWhite mb-4 borderInvestors">
					<img class="card-img-top" src="img/Investors-cmctechnology.png">
					<div class="card-body">
						<h5 class="card-title underliine">CMC TECHNOGLY SOLUSION INC</h5>
						<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
							has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
							old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
							looked up one of the more obscure Latin words, consectetur</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="bgWhite borderInvestors">
					<img class="card-img-top" src="img/Investors-software.png">
					<div class="card-body">
						<h5 class="card-title underliine">SOFT WARE EMPOWER COOPERATION PTE.LTD</h5>
						<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
							has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
							old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
							looked up one of the more obscure Latin words, consectetur</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="bgWhite borderInvestors">
					<img class="card-img-top" src="img/Investors-globalAsset.png">
					<div class="card-body">
						<h5 class="card-title underliine">GLOBAL ASSET MANAGEMENT.JSC</h5>
						<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
							has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
							old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
							looked up one of the more obscure Latin words, consectetur</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
			<div class="col-6">
				<div class="bgWhite borderInvestors">
					<img class="card-img-top" src="img/Investors-paygate.png">
					<div class="card-body">
						<h5 class="card-title underliine">PAYGATE CANADA INC</h5>
						<p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It
							has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
							old... <br> Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
							looked up one of the more obscure Latin words, consectetur</p>
						<p class="text-center"><a href="" class="readmore">READ MORE</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- PARTNERS CMC HOLDINGS -->
<section>
	<div class="container">
		<h2 class="underlinee">PARTNERS CMC HOLDINGS</h2>
		<p class="pt-4 pb-5">“We work with major service providers to blockchainise conventional business models”
		</p>
	</div>
	<img src="img/homepage-partner.png">
</section>

<!-- Insider news -->
<section class="bglightgray">
	<div class="container">
		<h2 class="underlinee">INSIDER NEWS</h2>
		<div class="row mt-5 mb-5">
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/Insider_news-one.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">News Lorem ipsum dolor amet</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/Insidernews-two.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">News Lorem ipsum dolor amet</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="bgWhite">
					<img class="card-img-top" src="img/Insidernews-three.png">
					<div class="card-body">
						<h5 class="card-title unnderlinee">News Lorem ipsum dolor amet</h5>
						<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
							industry. Lorem Ipsum has been the industry's standard dummy text ever since the
							1500s...</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
