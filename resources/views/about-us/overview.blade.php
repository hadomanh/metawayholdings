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
                            {{-- <iframe src="https://drive.google.com/file/d/1Uet3rd_qlluSj7nE1_TnP8riv9dYXsfk/preview" width="850" height="500" allow="autoplay"></iframe> --}}
                            <iframe width="850" height="500" src="https://www.youtube.com/embed/IpgNWxK8eIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>	
                    </div>
                        <div class="col-md-6" style="text-align: justify">
                            <ul>
                                <li><b>Global Based Company: </b>Metaway Holdings is headquartered in the US and has offices in many countries around the world, of which a large part of its personnel is in Vietnam, a country with people who are studious, clever, tech savvy and which is currently recognized for having numerous startups in innovation and high-tech industries.</li>
                                <li><b>Inspiration: </b>Metaway Holdings was founded on the aim of bringing together a community of competent entrepreneurs in the new era of emerging economies.</li>
                                <li><b>Human Power: </b>The founders and Executive Team of Metaway Holdings have vast experience in investing, corporate management, restructuring, and executing cross-border initiatives, which contributes to the company's strength.</li>
                                <li><b>Aspiration: </b>The big vision of Metaway Holdings always closely connects with the big dreams of solving the major challenges of the global and social market with huge user needs.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-governing-1" role="tabpanel" aria-labelledby="pills-governing-tab-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="videoWrapper">
                                {{-- <iframe src="https://drive.google.com/file/d/1Uet3rd_qlluSj7nE1_TnP8riv9dYXsfk/preview" width="850" height="500" allow="autoplay"></iframe> --}}
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/IpgNWxK8eIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6" style="text-align: justify">
                            <ul>
                                <li>Metaway Holdings  was created in 2022, the birth year of Metaverse, which was projected to be the year of intuition, imagination, passion, creativity, and tremendous ambition.</li>
                                <li>Metaway Holdings was given this name, we designed to create stories about the Meta aspirations of the worldwide individuals who strive to provide excellent values and social impacts to the world through technology.</li>
                                <li>We do not restrict our creativity while considering our Dreams and Desires with the Power of Technology, but we always keep the worthy mission of serving the world in mind and create the appropriate way from the start.</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-staff-1" role="tabpanel" aria-labelledby="pills-staff-tab-1">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="videoWrapper">
                                {{-- <iframe src="https://drive.google.com/file/d/1Uet3rd_qlluSj7nE1_TnP8riv9dYXsfk/preview" width="850" height="500" allow="autoplay"></iframe> --}}
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/IpgNWxK8eIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6" style="text-align: justify">
                            <ul>
                                <li>The pioneering and most advanced digital ecosystem in the world.</li>
                                <li>Set a goal IPO target of US$300 billion by 2027.</li>
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
                                {{-- <iframe src="https://drive.google.com/file/d/1Uet3rd_qlluSj7nE1_TnP8riv9dYXsfk/preview" width="850" height="500" allow="autoplay"></iframe> --}}
                                <iframe width="850" height="500" src="https://www.youtube.com/embed/IpgNWxK8eIs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>	
                        </div>
                        <div class="col-md-6" style="text-align: justify">
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
                            <img class="card-img-top" src="{{ asset('img/overview-core-value-1.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Globalization</h5>
                            <p class="card-text text-center">With the leverage of a borderless economy, Metaway Holdings' products, services, and business development are globally oriented with the goal of addressing huge user needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-core-value-2.png') }}" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Human First</h5>
                            <p class="card-text text-center">As a technology company, we put people first, including developing talent in the company and taking care of human issues globally.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-core-value-3.png') }}" style="width: 75%;"> 
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Technology</h5>
                            <p class="card-text text-center">Identify technologies for addressing both consumer digital endpoints & social impacts.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center row mt-5">
                <div class="col-md-4">
                    <div class="card bgGrey">
                        <a href="#" class="col-auto text-center">
                            <img class="card-img-top" src="{{ asset('img/overview-core-value-4.png') }}" style="width: 75%;">
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
                            <img class="card-img-top" src="{{ asset('img/overview-core-value-5.png') }}" style="width: 75%;">
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
            <h2 class="sectionHeading centered text-white">MEMBERS</h2>
            <p class="text-center text-white">As a “Holding in Holding” model, we establish member enterprises with separate ecosystems while maintaining focus on Metaway Holding's broad aims of globalization, digitalization, and innovation for outstanding social values.</p>
            <img src="{{ asset('img/banner-overview-member.jpg') }}" alt="">
        </div>
    </section>

    <!-- Our Executive Team -->
    <section class="bgGrey bgArrow newsHighlights">
        <div class="container">

            <h2 class="sectionHeading centered">OUR EXECUTIVE TEAM</h2>
            <p class="text-center">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-technical-tab" data-bs-toggle="pill" data-bs-target="#pills-technical" type="button" role="tab" aria-controls="pills-technical" aria-selected="true">BOM</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-governing-tab" data-bs-toggle="pill" data-bs-target="#pills-governing" type="button" role="tab" aria-controls="pills-governing" aria-selected="false">Advisors</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-staff-tab" data-bs-toggle="pill" data-bs-target="#pills-staff" type="button" role="tab" aria-controls="pills-staff" aria-selected="false">Techical steering commitee</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-asia-tab" data-bs-toggle="pill" data-bs-target="#pills-asia" type="button" role="tab" aria-controls="pills-asia" aria-selected="false">Core team</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-technical" role="tabpanel" aria-labelledby="pills-technical-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/bom-1.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Chairman</h5>
                                    <h5 class="name text-center">Mr. Tran Nam Chung</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/bom-2.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Vice President CMC, Chairman & CEO Phi Group</h5>
                                    <h5 class="name text-center">Mr. Henry D. Fahman</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/bom-3.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Member of BOM</h5>
                                    <h5 class="name text-center">Mr. Dau Minh Nhat</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/bom-4.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Member of BOM</h5>
                                    <h5 class="name text-center">Mr. Hoang Quoc Tuan</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/bom-5.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Member of BOM</h5>
                                    <h5 class="name text-center">Ms. Vu Thi Tuyet Thanh</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-governing" role="tabpanel" aria-labelledby="pills-governing-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-1.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Strategy Advisor</h5>
                                    <h5 class="name text-center">Mr. Tran Quang Trung</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-2.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Managing Director PHI Group Advisor</h5>
                                    <h5 class="name text-center">Mr. Steve Truong</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-3.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Finance Advisor</h5>
                                    <h5 class="name text-center">Mr. Frank N. Hawkins</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-4.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Investment Partnership Advisor</h5>
                                    <h5 class="name text-center">Mr. Michael Bennett</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-5.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Chief Operating Officer PHI Group Operation Advisor</h5>
                                    <h5 class="name text-center">Mr. Tam T. Bui</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-6.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Technology Advisor</h5>
                                    <h5 class="name text-center">Mr. Guido K</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-staff" role="tabpanel" aria-labelledby="pills-staff-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/tsc-1.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">CTO Blockchain</h5>
                                    <h5 class="name text-center">Mr. Bui Dinh Ngoc</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/tsc-2.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">CTO</h5>
                                    <h5 class="name text-center">Mr. Francesco D</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/advisor-6.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Technology Advisor</h5>
                                    <h5 class="name text-center">Mr. Guido K</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-asia" role="tabpanel" aria-labelledby="pills-asia-tab">
                    <div class="row d-flex justify-content-center">
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/ct-1.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">CMO</h5>
                                    <h5 class="name text-center">Mr. Andy Vu</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/ct-2.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Brand Director</h5>
                                    <h5 class="name text-center">Ms. Tracy Vu</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/ct-3.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Business & Partnership Director</h5>
                                    <h5 class="name text-center">Ms. Anna Nguyen</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <div class="circle">
                                        <div class="circle__inner">
                                          <div class="circle__wrapper">
                                            <div class="circle__content" style="background-size: cover; background-image: url({{ asset('img/ct-4.png') }})"></div>
                                          </div>
                                        </div>
                                    </div>
                                    <h5 class="name text-center">Legal Director</h5>
                                    <h5 class="name text-center">Mr. Le Van Duong</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Partners -->
    <section class="bgWhite bgArrow newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">OUR PARTNERS</h2>
            <p class="text-center">We choose to go with partners who share the same business ecosystem and corporate culture value system. We work with major service providers to blockchainise conventional business models. </p>
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
        </div>
    </section>

    <!-- Technology -->
    <section class="bgGrey newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">TECHNOLOGY</h2>
            <p class="text-center">Metaway Holdings will fully participate in the research, application, and development of cutting-edge technologies, including the building of infrastructure technology structures, systems integration superstructures, and content layer creation.</p>
            <div class="row">
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">

                    {{-- <div class="card bgGrey">
                        <img src="{{ asset('img/overview-technology-1.png') }}">
                        <div class="card-body">
                            <h5 class="card-title text-center">Blockchain</h5>
                        </div>
                    </div> --}}
                    <img src="{{ asset('img/overview-technology-1.png') }}">
                    <h5 class="name text-center mt-3">Blockchain</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">
                    
                    {{-- <div class="card bgGrey">
                        <img src="{{ asset('img/overview-technology-2.png') }}">
                        <div class="card-body">
                            <h5 class="card-title text-center">Artificial Intelligent (AI)</h5>
                        </div>
                    </div> --}}
                    <img src="{{ asset('img/overview-technology-2.png') }}">
                    <h5 class="name text-center mt-3">Artificial Intelligent (AI)</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">
                    <img src="{{ asset('img/overview-technology-3.png') }}">
                    <h5 class="name text-center mt-3">Augmented Reality (AR)</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">
                    <img src="{{ asset('img/overview-technology-4.png') }}">
                    <h5 class="name text-center mt-3">Virtual Reality (VR)</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">
                    <img src="{{ asset('img/overview-technology-5.png') }}">
                    <h5 class="name text-center mt-3">Web 3.0</h5>
                </div>
                <div class="col-xl-2 col-lg-4 col-md-6 d-flex justify-content-start align-items-center flex-column mt-3">
                    <img src="{{ asset('img/overview-technology-6.png') }}">
                    <h5 class="name text-center mt-3">Data Mining</h5>
                </div>
            </div>
        </div>
    </section>



</div>
@endsection
