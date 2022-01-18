@extends('layouts.app')

@section('content')
<div id="memberPage">
    <!-- Banner -->
    <section class="p-0">
        <img src="{{ asset('img/banner-members.jpg') }}">
    </section>

    <section class="bgGrey bgArrow">
        <div class="container">
            <h2 class="sectionHeading">MEMBERS</h2>
            <div class="row">
                <div class="col-md-6">
                    <p>CMC Holdings INC builds a business foundation with plans: M&A, establishment of new member
                        companies in other regions, ensuring coverage to countries around the world. We allocate
                        affiliates in different sectors to take advantage of local advantages and increase ownership
                        opportunities of strategic partners interested in our business.</p>
                </div>
                <div class="col-md-6"><img src="{{ asset('img/about-members-three.jpg') }}"></div>
            </div>
        </div>
    </section>

    <!-- Tech Mahindra -->
    <section class="bgWhite tech">
        <div class="container">
            <p class="text-center">CMC Holdings would not exist without the support of the member organizations listed below. <br> Learn
                more about how your company or organization can participate.</p>
            <h3 class="sectionHeading centered">Tech Mahindra</h3>
            <div class="mw-600 text-center">
                <div id="memberTextCarouselControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            “Tech Mahindra has demonstrated strong product development capabilities using CMC Holdings projects by developing 25+ Blockchain platforms and also implemented one of the world’s largest Blockchain networks covering 400 million+ subscribers in India to fight spam calls and text. By joining CMC Holdings, Tech Mahindra would like to play a strong role in architecting the future of CMC Holdings technologies by architecting cutting-edge solutions to solve tough business problems for enterprises globally.”
                        </div>
                        <div class="carousel-item">
                            “Tech Mahindra has demonstrated strong product development capabilities using CMC Holdings projects by developing 25+ Blockchain platforms and also implemented one of the world’s largest Blockchain networks covering 400 million+ subscribers in India to fight spam calls and text. By joining CMC Holdings, Tech Mahindra would like to play a strong role in architecting the future of CMC Holdings technologies by architecting cutting-edge solutions to solve tough business problems for enterprises globally.”
                        </div>
                        <div class="carousel-item">
                            “Tech Mahindra has demonstrated strong product development capabilities using CMC Holdings projects by developing 25+ Blockchain platforms and also implemented one of the world’s largest Blockchain networks covering 400 million+ subscribers in India to fight spam calls and text. By joining CMC Holdings, Tech Mahindra would like to play a strong role in architecting the future of CMC Holdings technologies by architecting cutting-edge solutions to solve tough business problems for enterprises globally.”
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#memberTextCarouselControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true">
                            <i class="fas fa-chevron-left"></i>
                        </span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#memberTextCarouselControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true">
                            <i class="fas fa-chevron-right"></i>
                        </span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- List Members -->
    <section class="bgWhite pt-0 listMembers text-center">
        <div class="container">
            <h2 class="sectionHeading centered">CMC Holdings Members - Premier</h2>
            <div class="row align-items-center">
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-1.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-2.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-3.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-4.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-5.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-6.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-7.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-8.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-9.jpg') }}"></a>
                </div>
                <div class="col-md-2 col-6 item">
                    <a href="#"><img src="{{ asset('img/cmc-member-10.jpg') }}"></a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
