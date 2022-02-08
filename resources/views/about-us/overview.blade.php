@extends('layouts.app')
@section('content')

<div id="overviewPage">

    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/overview-banner.png') }}" class="w-100"></section>

    <!-- ABOUT US -->
    <section class="bgWhite bgArrow">
        <div class="container">

            <h2 class="sectionHeading centered">ABOUT US</h2>
            <ul class="nav nav-pills nav-fill" id="pills-tab-1" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-technical-tab-1" data-bs-toggle="pill"
                        data-bs-target="#pills-technical-1" type="button" role="tab" aria-controls="pills-technical-1"
                        aria-selected="true">Overview</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-governing-tab-1" data-bs-toggle="pill"
                        data-bs-target="#pills-governing-1" type="button" role="tab" aria-controls="pills-governing-1"
                        aria-selected="false">Brand Story</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-staff-tab-1" data-bs-toggle="pill"
                        data-bs-target="#pills-staff-1" type="button" role="tab" aria-controls="pills-staff-1"
                        aria-selected="false">Vision</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-asia-tab-1" data-bs-toggle="pill"
                        data-bs-target="#pills-asia-1" type="button" role="tab" aria-controls="pills-asia-1"
                        aria-selected="false">Mission</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-technical-1" role="tabpanel" aria-labelledby="pills-technical-tab-1">
                   <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="videoWrapper">
                            <iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>	
                    </div>
                        <div class="col-md-6">
                            <ul>
                                <li><b>Country of Origin: </b>Metaway Holdings was founded in Vietnam, a country with people who are passionate about learning, clever, and proud of their country, and which is currently recognized for having numerous startups in innovation and high-tech industries.</li>
                                <li><b>Inspiration: </b>Metaway Holdings was founded on the aim of bringing together a community of competent entrepreneurs in the new era of emerging economies.</li>
                                <li><b>Human Power: </b>The founders and Executive Team of Metaway Holdings have vast experience in investing, corporate management, restructuring, and executing cross-border initiatives, which contributes to the company's strength.</li>
                                <li><b>Ambition: </b>The big vision of Metaway Holdings always closely connects with the big dreams of solving the major challenges of the global and social market with huge user needs.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-governing-1" role="tabpanel" aria-labelledby="pills-governing-tab-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="videoWrapper">
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Metaway was created in 2022, the birth year of Metaverse, which was projected to be the year of intuition, imagination, passion, creativity, and tremendous ambition.</li>
                                <li>Metaway was given this name, we designed to create stories about the Meta aspirations of Vietnamese individuals who strive to provide excellent values and social impacts to the world through technology. </li>
                                <li>We do not restrict our creativity while considering our Dreams and Ambitions with the Power of Technology, but we always keep the worthy mission of serving the world in mind and create the appropriate way from the start.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-staff-1" role="tabpanel" aria-labelledby="pills-staff-tab-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="videoWrapper">
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Vietnam's first and most advanced digital ecosystem.</li>
                                <li>Set an ambitious IPO target of at least US$50 billion on Nasdaq by 2027.</li>
                                <li>Stay connected with the entry and companionship of worldwide partners in order to become a gigantic player in global business for mutual prosperity.</li>
                                <li>Creating a legacy for future generations.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-asia-1" role="tabpanel" aria-labelledby="pills-asia-tab-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="videoWrapper">
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li>Pioneer develops a worldwide digital ecosystem in the field of asset management.</li>
                                <li>Pioneering technological innovation and knowledge, and altering the digital economy and economic growth.</li>
                                <li>Delivers worldwide digital services that are speedy, efficient, reliable, transparent, secure, and also have the lowest fees.</li>
                                <li>Concentrate on finding comprehensive answers to society's and people's key concerns.</li>
                                <li>Creating a worldwide community with individuals that have a huge vision.</li>
                                <li>Delivering significant values and positive impacts on society and the globe.</li>
                            </ul>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES -->
    <section class="bgGrey bgArrow newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">CORE VALUES</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-globalization.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Globalization</h5>
                            <p class="card-text text-center">The newly established METAWAY Holdings INC aims to conduct M&A with the
                                Company that has listed its shares on Nasdaq. Its goal is restructuring in the direction
                                of financial technology enterprises and holding its member companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-human.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Human First</h5>
                            <p class="card-text text-center">We have a team of qualified personnel, advisors, CEOs, CMOs... all of
                                them have many years experience in restructuring, M&A, Marketing and business management
                                industries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-technology.png') }}" style="width: 75%;"> 
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Technology</h5>
                            <p class="card-text text-center">The parent company and the Founders have a strong financial foundation
                                to ensure the operation and growth of the project in 2021 and the following years.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center row mt-5">
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-globalization.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Digitalization</h5>
                            <p class="card-text text-center">Our journey has always been linked to this strategy, direction, and approach from the dawn of the digital era and the birth of Metaverse.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-human.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">HI, AI, BI Union</h5>
                            <p class="card-text text-center">Unifying human intelligence (HI), artificial intelligence (AI) and business intelligence (BI) for optimum performance. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MEMBER -->
    <section class="bgDark bgArrow">
        <div class="container">
            <h2 class="sectionHeading centered text-white">Member</h2>
            <p class="text-center text-white">As a “Holding in Holding” model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.</p>
            <img src="" alt="">
        </div>
    </section>

    <!-- Our Executive Team -->
    <section class="bgGrey bgArrow newsHighlights">
        <div class="container">

            <h2 class="sectionHeading centered">Our Executive Team</h2>
            <p class="text-center">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-technical-tab" data-bs-toggle="pill" data-bs-target="#pills-technical" type="button" role="tab" aria-controls="pills-technical" aria-selected="true">BOD</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-governing-tab" data-bs-toggle="pill" data-bs-target="#pills-governing" type="button" role="tab" aria-controls="pills-governing" aria-selected="false">Advisors</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-staff-tab" data-bs-toggle="pill" data-bs-target="#pills-staff" type="button" role="tab" aria-controls="pills-staff" aria-selected="false">Techical steering commitee</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-asia-tab" data-bs-toggle="pill" data-bs-target="#pills-asia" type="button" role="tab" aria-controls="pills-asia" aria-selected="false">Staff</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-technical" role="tabpanel" aria-labelledby="pills-technical-tab">
                    <div class="row">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtnd-2.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtrd.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtst.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-4.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-5.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-6.jpg" style="border-radius: 50%">
                                        </span>
                                    </span>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-governing" role="tabpanel" aria-labelledby="pills-governing-tab">
                    Governing Board
                </div>
                <div class="tab-pane fade" id="pills-staff" role="tabpanel" aria-labelledby="pills-staff-tab">
                    Staff
                </div>
                <div class="tab-pane fade" id="pills-asia" role="tabpanel" aria-labelledby="pills-asia-tab">
                    Asia Pacific
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section class="bgWhite bgArrow newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">OUR PARTNERS</h2>
            <p class="text-center">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
            <div class="row">
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-1.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-2.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-3.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-4.png') }}">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-5.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-6.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-7.png') }}">
                </div>
                <div class="col-md-3">
                    <img src="{{ asset('img/overview-partner-8.png') }}">
                </div>
            </div>
        </div>
    </section>

    <!-- Technology -->
    <section class="bgGrey bgArrow newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">TECHNOGLY</h2>
            <p class="text-center">Metaway Holdings will fully participate in the research, application, and development of cutting-edge technologies, including the building of infrastructure technology structures, systems integration superstructures, and content layer creation.</p>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-1.png') }}">
                    <h5 class="name text-center mt-3">Blockchain</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-2.png') }}">
                    <h5 class="name text-center mt-3">Metaverse</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-3.png') }}">
                    <h5 class="name text-center mt-3">AI</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-4.png') }}">
                    <h5 class="name text-center mt-3">AR</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-5.png') }}">
                    <h5 class="name text-center mt-3">VR</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6">
                    <img src="{{ asset('img/overview-technology-5.png') }}">
                    <h5 class="name text-center mt-3">NFT</h5>
                </div>
            </div>
        </div>
    </section>



</div>
@endsection
