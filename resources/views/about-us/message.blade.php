@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0"><img src="{{ asset('img/banner-about-2-message.png') }}"></section>

<!-- MESSAGE -->
<section class="bglightgray">
    <div class="container">
        <h2 class="underlinee">MESSAGE</h2>
        <div class="row">
            <div class="col">
                <p>Dear All Partners;<br>We have entered the 3rd decade of the 21st century. The development of
                    technology 4.0 has made this world change rapidly. Besides the positive side of improving the
                    quality of life, we also face many dangers of climate change, ethnic war, geopolitics and the
                    new world order. The development of society has a significant contribution from entrepreneurs,
                    global business enterprises. CMC Holdings is an enterprise born in the technology age and we
                    focus on leveraging technology to develop business and serve the community. Our founders have a
                    burning desire to leave their business legacy to this society. Our activities cover key areas of
                    society. It is positioned in the renewable energy, real estate and financial technology sectors.
                    These 3 pillars will be developed specifically by internet applications and mobile apps to serve
                    the convenience of users. We are convinced that the development plan of CMC Holdings INC is
                    based on respecting the values of companions and stakeholders, as well as not separating the
                    value left to the community. Every development is challenging, but we accept the challenge to
                    receive worthy results for worthy contributions. Welcome to join us and create great things.</p>
                <p>Best regards<br>of CMC Holdings INC</p>
            </div>
            <div class="col"><img src="{{ asset('img/about-message-one.png') }}"></div>
        </div>
    </div>
</section>
<section>
    <div class="container"><img src="{{ asset('img/about-message-two.png') }}"></div>
</section>
@endsection
