@extends('layouts.app')
@section('content')
<!-- Banner -->
<section class="p-0"><img src="{{ asset('img/Banner-overview.png') }}"></section>

<!-- OVERVIEW -->
<section>
    <div class="container">
        <h2 class="underlinee">OVERVIEW</h2>
        <div class="row pt-4">
            <div class="col-4">
                <h5 class="unnderline">Overview about CMC Holdings INC</h4>
                    <p>CMC Holdings was founded based on the global business ambition of the Founders who have many
                        years experience in the field of investing, restructuring and developing cross-border
                        projects. CMC was inspired by connecting a community of competent entrepreneurs in the new
                        economic field of the millennium CMC Holdings attaches great importance to social values and
                        focuses on the vital core areas of this world. The Founders team are from all over the world
                        for a lasting business goal. CMC Holdings defines a bold direction for a successful business
                        community in the 21st century.</p>
            </div>
            <div class="col-8"><iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
        </div>
    </div>
</section>
<section class="bglightgray">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="bgWhite">
                    <img class="card-img-top" src="{{ asset('img/overview-one.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">DEVELOPMENT HISTORY</h5>
                        <p class="card-text">The newly established CMC Holdings INC aims to conduct M&A with the
                            Company that has listed its shares on Nasdaq. Its goal is restructuring in the direction
                            of financial technology enterprises and holding its member companies.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bgWhite">
                    <img class="card-img-top" src="{{ asset('img/overview-two.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">HUMAN RESOURCES<br>BACKGROUND</h5>
                        <p class="card-text">We have a team of qualified personnel, advisors, CEOs, CMOs... all of
                            them have many years experience in restructuring, M&A, Marketing and business management
                            industries.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bgWhite">
                    <img class="card-img-top" src="{{ asset('img/overview-three.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">HUMAN RESOURCES<br>BACKGROUND</h5>
                        <p class="card-text">The parent company and the Founders have a strong financial foundation
                            to ensure the operation and growth of the project in 2021 and the following years.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
