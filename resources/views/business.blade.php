@extends('layouts.app')
@section('content')

<div id="overviewPage">

    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/business-banner.png') }}" class="w-100"></section>

    <!-- BUSINESS CATEGORY -->
    <section class="newsHighlights bgWhite bgArrow">
		<div class="container">
			<h2 class="sectionHeading centered">BUSINESS CATEGORY</h2>
			<div class="text-center">
				<p class="mb-2">The business of Metaway Holdings focuses on technology-related categories, especially financial technology and blockchain driven.</p>
			</div>


            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                <i class="fas fa-chevron-left text-dark" style="font-size: 65px"></i>
            </button>

            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/home-category-1.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Consumer Tech</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">With the rapid advancement of technology, essential human desires have grown to include the evolving needs of tech-driven consumption, and Metaway Holdings' commercial growth aim is to improve living standards with powerful technology.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/home-category-2.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Social Tech</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">Our endeavor is to be pioneering and continuously innovating in technology but our ultimate mission is to create human-oriented technology and product development goals towards social impact, creating great value for people.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/home-category-3.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">BaaS</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">
                                            Metaway Holdings is a global network of the most talented blockchain developers, engineers and consultants. We have a roadmap for developing our own ecosystem of blockchain related goods and services targeting government regulators, digitized global businesses, and the management of blockchain-driven assets such as securities, real estate, etc.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-reliable.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Real Estate</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">We were formerly a traditional real estate developer, but quick to capitalize on digital transformation, using blockchain technology to convert real estate into digital assets, opening up global investment opportunities in real estate.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-companion.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Ecommerce</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">As we journey into 2022, convenience will be the critical driver in Retail and eCommerce. Our business covers the modernizations in technology to meet the consumers' shopping preferences and how it's affecting the customer experience.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/homepage-commitment.png"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Fintech</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">Financial institutions have to comply with a wide range of changing global and local regulations - across anti-money laundering (AML), know your customer (KYC), fraud, payments, and lending. The key to being agile enough to deal with the rapid change, we compliance teams step outside our comfort zone to embrace the FinTech/RegTech capabilities that have evolved in recent years to create a strategic foundation for the future. </p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card">
                                    <a href="#" class="col-auto"><img class="card-img-top" src="img/home-category-7.jpg"></a>
                                    <div class="card-body col">
                                        <h5 class="card-title titleUnderline"><a href="#">Digital Bank</a></h5>
                                        <p class="card-text" style="max-height: 80px; overflow-y: scroll; text-align: justify">Digital banking is regarded as the next banking system, and our mission is to put future digital users in charge of their financial lives anywhere, at any time, and to get the most benefits from being a member of its ecosystem.</p>
                                        <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                <i class="fas fa-chevron-right text-dark" style="font-size: 65px"></i>
            </button>

			
		</div>
	</section>

    <!-- CORE VALUES -->
    <section class="bgGrey bgArrow newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">BUSINESS MODEL</h2>
            <div class="text-center">
                <p>The business model of Metaway Holdings is developed in a digital environment by utilizing technology and financial mechanisms, as well as intellectual capabilities, to innovate and generate new ideas and solutions in existing markets.</p>
            </div>
            
            <div class="row">
                <div class="col-6">
                    <img src="{{ asset('img/business-model.png') }}" alt="">
                </div>
                <div class="col-6" style="text-align: justify">
                    <p>
                        The business model of Metaway Holdings focuses on business activities in the digital environment and digital economy, taking advantage of the ultimate power of technology and utilizing the  prevalent treasure of human knowledge. 
                        The core value of business models in Metaway Holdings' ecosystem, however, is the establishment, enhancement, and optimization of values in order to bring wealth and prosperity to many individuals, the whole society, and the entire globe.
                        Metaway Holdings accomplishes this through the use of three major mechanisms: the power of the capitalization model, the power of technology with light assets, huge cash flows, scalability, and demand in small and large volumes.
                        Our approach, in particular, is to engage in the markets and demands that have been defined, innovate by developing new solutions to speed up and create a better society.
                        Metaway Holdings, in particular, specializes in sharing and integrating values, particularly unifying all types of intelligence such as artificial intelligence, human intelligence, and business intelligence to establish a sustainable association to assist firms to survive, develop and prosper.
                        With the Divega project, Metaway Holdings is also a pioneer in building and applying business models that create social impact (SIB), contribute, and bring significant values ​​for people, organizations, society, and globally.
                    </p>

                    <div class="text-center"><a target="_blank" href="{{ route('about-us.overview') }}" class="btn btnWhite">READ MORE</a></div>
                </div>
            </div>

        </div>
    </section>

    <!-- ECOSYSTEM -->
    <section class="bgDark bgArrow">
        <div class="container">
            <h2 class="sectionHeading centered text-white">ECOSYSTEM</h2>
            <p class="text-center text-white">Metayway Holdings has built the pioneering and the most advanced digital ecosystem. We develop self-contained and growing ecosystems to fulfill the ever-increasing demands of our global consumers.</p>
            <p class="text-center text-white">The digital ecosystem of Metaway Holdings will feature Hyperas Chain, a specialized platform for coding assets, Pindias, a transaction management platform for digital asset logs, Divega, an auction e-commerce platform, and Rapital Bank, a digital banking service available at any time.</p>
            <img class="centered" src="{{ asset('img/business-ecosystem.png') }}" alt="">
        </div>
    </section>

    <!-- PRODUCT / SERVICE -->
    <section class="bgGrey newsHighlights pb-5">
        <div class="container">

            <h2 class="sectionHeading centered">PRODUCTS / SERVICES</h2>
            <p class="text-center">Metaway Holdings' goods and services revolve around answering the essential needs of global consumers on digital platforms, thanks to a self-contained digital ecosystem.</p>
            
            <div class="row d-flex justify-content-center">
                <div class="col-md-2 col">
                    <div class="card bgGrey">
                        <img src="{{ asset('img/business-product-1.png') }}" alt="" class="grey-image">
                        <div class="card-body">
                            <h5 class="card-title text-center">Asset tokenization platform</h5>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-2">
                    <img src="{{ asset('img/business-product-2.png') }}" alt="" class="grey-image">
                </div>
                <div class="col-2">
                    <img src="{{ asset('img/business-product-3.png') }}" alt="">
                </div> --}}


                <div class="col-md-2 col">
                    <div class="card bgGrey">
                        <img src="{{ asset('img/business-product-2.png') }}" alt="" class="grey-image">
                        <div class="card-body">
                            <h5 class="card-title text-center">Digital Banking</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col">
                    <div class="card bgGrey">
                        <img src="{{ asset('img/business-product-3.png') }}" alt="" class="grey-image">
                        <div class="card-body">
                            <h5 class="card-title text-center">E-commerce reverse auction</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col">
                    <div class="card bgGrey">
                        <img src="{{ asset('img/business-product-4.png') }}" alt="" class="grey-image">
                        <div class="card-body">
                            <h5 class="card-title text-center">Digital asset transaction management system</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>



</div>
@endsection
