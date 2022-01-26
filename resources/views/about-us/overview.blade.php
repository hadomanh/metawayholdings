@extends('layouts.app')
@section('content')

<div id="overviewPage">

    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/banner-overview.jpg') }}" class="w-100"></section>

    <!-- OVERVIEW -->
    <section class="bgWhite bgArrow">
        <div class="container">
            <h2 class="sectionHeading">OVERVIEW</h2>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <h4 class="titleUnderline">Overview about METAWAY Holdings INC</h4>
                    <p>METAWAY Holdings was founded based on the global business ambition of the Founders who have many
                    years experience in the field of investing, restructuring and developing cross-border
                    projects. METAWAY was inspired by connecting a community of competent entrepreneurs in the new
                    economic field of the millennium METAWAY Holdings attaches great importance to social values and
                    focuses on the vital core areas of this world. The Founders team are from all over the world
                    for a lasting business goal. METAWAY Holdings defines a bold direction for a successful business
                    community in the 21st century.</p>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="videoWrapper">
                        <iframe width="850" height="500" src="https://www.youtube.com/embed/oQ4TdsvCfAs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>	
                </div>
            </div>
        </div>
    </section>

    <!-- Highlight -->
    <section class="bgGrey newsHighlights">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <a href="#" class="col-auto">
                            <img class="card-img-top" src="{{ asset('img/overview-one.png') }}">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title titleUnderline">DEVELOPMENT HISTORY</h5>
                            <p class="card-text">The newly established METAWAY Holdings INC aims to conduct M&A with the
                                Company that has listed its shares on Nasdaq. Its goal is restructuring in the direction
                                of financial technology enterprises and holding its member companies.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="#" class="col-auto">
                            <img class="card-img-top" src="{{ asset('img/overview-two.png') }}">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title titleUnderline">HUMAN RESOURCES BACKGROUND</h5>
                            <p class="card-text">We have a team of qualified personnel, advisors, CEOs, CMOs... all of
                                them have many years experience in restructuring, M&A, Marketing and business management
                                industries.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <a href="#" class="col-auto">
                            <img class="card-img-top" src="{{ asset('img/overview-three.png') }}">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title titleUnderline">HUMAN RESOURCES BACKGROUND</h5>
                            <p class="card-text">The parent company and the Founders have a strong financial foundation
                                to ensure the operation and growth of the project in 2021 and the following years.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
