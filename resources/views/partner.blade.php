@extends('layouts.app')

@section('content')

<div id="partnerPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/banner-project.jpg') }}" class="w-100"></section>

    <!-- Our PartnerS -->
    <section class="bgWhite">
        <div class="container">
            <h2 class="sectionHeading centered">OUR PARTNERS <span>CMC HOLDINGS</span></h2>
            <p class="text-center">CMC Holdings invites participants that are building on CMC Holdings blockchain
                platform, access to additional resources to help speed up your build out of your blockchain initiatives.
                Using CMC Holdings qualified partners, tap into established and knowledgeable consulting firms,
                implementation partners, system integrators and developer firms. From small to massive blockchain
                projects across a variety of sectors and geos, CMC Holdings Partner Program is created to help you along
                your path to blockchain adoption.</p>
            <div class="row g-0 listPartner">
                <div class="col-md-2 col-4 item" data-bs-toggle="modal" data-bs-target="#partnerModal">
                    <a href="#"><img src="{{ asset('img/partner-one.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-two.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-three.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-four.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-five.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-six.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-seven.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-eight.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-nine.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-ten.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-eleven.png') }}"></a>
                </div>
                <div class="col-md-2 col-4 item">
                    <a href="#"><img src="{{ asset('img/partner-twelve.png') }}"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="partnerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('img/partner-swisscom.png') }}" class="mb-3">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Swisscom</h4>
                                        <p>Swisscom, Switzerland's leading telecoms company and one of its leading IT companies, is headquartered in Ittigen.</p>
                                        <ul class="list-unstyled info">
                                            <li><span class="text">Website:</span> <a href="#">swisscom.ch/de/privatkunden.html</a></li>
                                            <li><span class="text">Crunchbase:</span> <a href="#">crunchbase.com/organization/swisscom</a></li>
                                            <li><span class="text">LinkedIn:</span> <a href="#">linkedin.com/company-beta/2715</a></li>
                                            <li><span class="text">Twitter:</span> <a href="#">@Swisscom</a></li>
                                            <li><span class="text">Headquarters:</span> <a href="#">Worblaufen, Switzerland</a></li>
                                            <li><span class="text">Market Cap:</span> <span class="text-danger">$29.2B</span></li>
                                        </ul>
                                        <hr>
                                        <img src="{{ asset('img/partner-Tweets.png') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <img src="{{ asset('img/partner-twelve.png') }}" class="mb-3">
                                    </div>
                                    <div class="col-md-8">
                                        <h4>Swisscom</h4>
                                        <p>Swisscom, Switzerland's leading telecoms company and one of its leading IT companies, is headquartered in Ittigen.</p>
                                        <ul class="list-unstyled info">
                                            <li><span class="text">Website:</span> <a href="#">swisscom.ch/de/privatkunden.html</a></li>
                                            <li><span class="text">Crunchbase:</span> <a href="#">crunchbase.com/organization/swisscom</a></li>
                                            <li><span class="text">LinkedIn:</span> <a href="#">linkedin.com/company-beta/2715</a></li>
                                            <li><span class="text">Twitter:</span> <a href="#">@Swisscom</a></li>
                                            <li><span class="text">Headquarters:</span> <a href="#">Worblaufen, Switzerland</a></li>
                                            <li><span class="text">Market Cap:</span> <span class="text-danger">$29.2B</span></li>
                                        </ul>
                                        <hr>
                                        <img src="{{ asset('img/partner-Tweets.png') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
