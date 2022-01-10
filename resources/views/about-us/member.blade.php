@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0">
    <img src="{{ asset('img/banner-about-3-Members.png') }}">
</section>
<section class="bglightgray">
    <div class="container">
        <h2 class="underlinee">MEMBERS</h2>
        <div class="row">
            <div class="col">
                <p>CMC Holdings INC builds a business foundation with plans: M&A, establishment of new member
                    companies in other regions, ensuring coverage to countries around the world. We allocate
                    affiliates in different sectors to take advantage of local advantages and increase ownership
                    opportunities of strategic partners interested in our business.</p>
            </div>
            <div class="col"><img src="{{ asset('img/about-members-three.png') }}"></div>
        </div>
    </div>
</section>

<!-- Tech Mahindra -->
<section class="text-center">
    <div class="container">
        <p>CMC Holdings would not exist without the support of the member organizations listed below. <br> Learn
            more about how your company or organization can participate.</p>
        <h3 class="underline">Tech Mahindra</h3>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('img/banner-about-2-message.png') }}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-about-3-members.png') }}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('img/banner-contact.png') }}" alt="Third slide">
                </div>
            </div>
        </div>
        <p class="p-4">"Tech Mahindra has demonstrated strong product development capabilities using CMC Holdings projects by
            <br> developing 25+ Blockchain platforms and also implemented one of the world's largest Blockchain
            networks covering <br> 400 million+ subscribers in India to fight spam calls and text. By joining CMC
            Holdings, Tech Mahindra would like to <br> play a strong role in architecting the future of CMC Holdings
            technologies by architecting cutting-edge solutions to <br> solve tough business problems for
            enterprises globally."</p>
    </div>
</section>

<!-- CMC Holdings Members - Premier -->
<section class="p-0">
    <div class="container">
        <h3 class="underlinee">CMC Holdings Members - Premier</h3>
        <div class="container text-center"><img src="{{ asset('img/about-members-four.png') }}"></div>
    </div>

</section>
@endsection
