@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0">
    <div class="imgWrap">
        <!-- <div class="text">
            <h1 class="text-center">PINDIAS</h1>
            <p class="text-center">ASSETS DIGITALIZATION PLATFORMS</p>
        </div> -->
        <img src="{{ asset('img/banner-Pindias.png') }}" alt="banner PINDIAS">
    </div>
</section>

<!-- Overview -->
<section class="bgWhite bgArrow">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <img src="{{ asset('img/pindias-overview.png') }}" alt="PINDIAS overview">
            </div>
            <div class="col-lg-4 pt-4">
                <h2 class="titleUnderline">OVERVIEW</h2>
                <ul>
                    <li>Pindias is created by Pindias JSC.</li>
                    <li>Pindias is a superb application for connecting, managing, and trading decentralized digital assets.</li>
                    <li>Explore any type of property and assets on the platform.</li>
                    <li>Big Data has emerged as a critical differentiator for the platform.</li>
                    <li>Analyze and appraise real estate fast and accurately.</li>
                    <li>Tokenize decentralized assets using digital NFTs.</li>
                    <li>Discover and experience properties from all around the world in one site.</li>
                </ul>
                <div class="text-center"><a target="_blank" href="https://www.pindias.com/" class="btn btnWhite">READ MORE</a></div>
            </div>
        </div>
    </div>
</section>

<!-- Inspritation -->
<section class="bgGrey bgArrow">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="titleUnderline">INSPRITATION</h2>
                <p>Address the market's pain points:</p>
                <ul>
                    <li>Remove geographical barriers as well as time-consuming legal procedures.</li>
                    <li>Ensure transaction transparency.</li>
                    <li>Meet and assure a huge need for decentralized asset ownership.</li>
                </ul>
                <div class="text-center mb-4"><a target="_blank" href="https://www.pindias.com/" class="btn btnWhite">READ MORE</a></div>
            </div>
            <div class="col-lg-8">
                <img src="{{ asset('img/pindias-inspritation.png') }}" alt="banner PINDIAS">
            </div>
        </div>
</section>

<!-- Brand Story -->
<section class="bgDark bgArrow">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <img src="{{ asset('img/pindias-brand-story.png') }}" alt="PINDIAS overview">
            </div>
            <div class="col-md-4">
                <h2 class="titleUnderline text-light">BRAND STORY</h2>
                <div class="text-light text-justify">
                    <p>The term "Pindias" is a mashup of the phrases "Pinned Asset Digitization Platform."</p>
                    <p>The tagline "Blockchain Platform for Asset Digitization" conveys a straightforward message about the Blockchain platform's solution for digitizing assets.</p>
                    <p>The mission of Pindias is to become a leading platform and a top-of-mind brand or pinned app for digital asset management.</p>
                    <p>Not only does it provide all people with business and ownership options, but it is also a precious asset for every private owner that may be cherished as significant milestones in life.
                        Pindias is dedicated not only to assisting users in finding any type of property anywhere, but also to following each user in every “moment” so that every life is worthy of making history.</p>
                </div>

                <div class="text-center"><a target="_blank" href="https://www.pindias.com/" class="btn btnWhite">READ MORE</a></div>
            </div>
        </div>
    </div>
</section>

<!-- What makes PINDIAS differences -->
<section class="bgWhite bgArrow">
    <div class="container">
        <h2 class="sectionHeading centered">WHAT MAKES PINDIAS DIFFERENCES</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <a href="#" class="col-auto text-center">
                        <img src="{{ asset('img/pindias-USP1.png') }}" class="card-img-top" alt="hyperas-chain-USP1" style="width: 75%;">
                    </a>
                    <div class="card-body col">
                        <h5 class="card-title text-center">AI Pioneer</h5>
                        <p class="card-text text-center">Pioneering AI technology in management, appraisal, and transaction of stocks and real-estate assets.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="#" class="col-auto text-center">
                        <img src="{{ asset('img/pindias-USP2.png') }}" class="card-img-top" alt="hyperas-chain-USP2" style="width: 75%;">
                    </a>
                    <div class="card-body col">
                        <h5 class="card-title text-center">Blockchain Pioneer</h5>
                        <p class="card-text text-center">Pioneering Blockchain technology to encode assets into NFTs and convert from NFTs to physical assets. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="#" class="col-auto text-center">
                        <img src="{{ asset('img/pindias-USP3.png') }}" class="card-img-top" alt="hyperas-chain-USP3" style="width: 75%;">
                    </a>
                    <div class="card-body col">
                        <h5 class="card-title text-center">Leveraging 3D technology (AR, VR) </h5>
                        <p class="card-text text-center">Using 3D technology (AR, VR) helps customers visit and experience properties anywhere in the world in one place.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card">
                    <a href="#" class="col-auto text-center">
                        <img src="{{ asset('img/pindias-USP4.png') }}" class="card-img-top" alt="hyperas-chain-USP4" style="width: 75%;">
                    </a>
                    <div class="card-body col">
                        <h5 class="card-title text-center">Hyper-connected platform</h5>
                        <p class="card-text text-center">A hyper-connected platform in real-estate transactions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PINDIAS Solution -->
<section>
    <div class="container">
        <h2 class="sectionHeading centered">PINDIAS SOLUTION</h2>
        <div class="row">
            <div class="col-lg-6 col-xs-12">
                <div class="row">
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Rentals</h4>
                        <p class="text-justify">We create a seamless online experience  - from shopping on the largest rental network to applying, to paying rents.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Buy and Sell</h4>
                        <p class="text-justify">Explore our markets. We provide research and data analysis to help you determine which locations meet your investing objectives.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Sales and Agents</h4>
                        <p class="text-justify">No matter what type of real estate needs you have, finding the local real estate professional you want to work with is the first step. </p>
                        <p class="text-justify">Our directory helps you find real estate professionals who specialize in buying, selling, foreclosures, or relocation - among many other options. </p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Digital real-estate</h4>
                        <p class="text-justify">It’s important to keep in mind that as exciting as it may be, the metaverse is still unchartered territory. </p>
                        <p class="text-justify">Digital real estate investing is an extremely new form of investing and is rapidly changing.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Assets Management</h4>
                        <p class="text-justify">Get control of your assets with cloud-based asset tracking that's customizable, secure, easy to use, and trusted worldwide to track millions of assets.</p>
                    </div>
                    <div class="col-lg-6 col-xs-12">
                        <h4 class="titleUnderline">Property Valuation</h4>
                        <p class="text-justify">Review inspection reports, take a 3D tour, see estimated returns based on your financial criteria, and more.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
                <img src="{{ asset('img/pindias-solution.png') }}" alt="PINDIAS-solution">
            </div>
        </div>
    </div>
</section>
@endsection
