@extends('layouts.app')

@section('content')
<div class="anypage">
    <!-- Banner -->
    <section class="p-0">
        <div class="imgWrap">
            <!-- <div class="text">
            <h1 class="text-center">DIVEGA</h1>
            <p class="text-center">BLOCKCHAIN REVERT AUTION PLATFORM</p>
        </div> -->
            <img src="{{ asset('img/banner-divega.png') }}" alt="banner divega">
        </div>
    </section>

    <!-- Overview -->
    <section class="bgWhite bgArrow">
        <div class="container" id="overviewAnimate">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('img/divega-overview.png') }}" alt="divega overview">
                </div>
                <div class="col-md-4">
                    <h2 class="titleUnderline">OVERVIEW</h2>
                    <p class="text-justify">E-Auction is an effective eCommerce system that allows bidders and sellers to interact through online platforms with the world's first reverse auction method.</p>
                    <p class="text-justify">Blockchain and smart contracts, as a revolutionary technology, have attracted the interest of different industries including the designing of e-auction systems.</p>
                    <div class="text-center"><a target="_blank" href="https://divega.com/" class="btn btnBlue">READ MORE</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Inspiration -->
    <section class="bgGrey bgArrow">
        <div class="container" id="inspirationAnimate">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="titleUnderline">INSPIRATION</h2>
                    <div class="text-justify">
                        <p>Divega fulfills the desire for a real universe in the digital world and environment, especially solving the problem of transparency in charity activities.</p>
                        <p>Social impact is no longer only an activity; it may even be used to develop a new business model.</p>
                        <p>While traditional auctions provide a chance to win for individuals with a lot of money, Divega allows people all over the world with the opportunity and dream of owning the property.</p>
                    </div>
                    <div class="text-center mb-4"><a target="_blank" href="https://divega.com/" class="btn btnBlue">READ MORE</a></div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('img/divega-inspritation.png') }}" alt="banner divega">
                </div>
            </div>

    </section>

    <!-- Brand Story -->
    <section class="bgDark bgArrow">
        <div class="container" id="brandAnimate">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('img/divega-overview.png') }}" alt="divega overview">
                </div>
                <div class="col-md-4">
                    <h2 class="titleUnderline textWhite">BRAND STORY</h2>
                    <div class="text-justify textWhite">
                        <p>The term "Divega" is a mashup of the phrases Digital Universe Gate.</p>
                        <p>The tagline ???Blockchain Platform for Reverse Auction??? confirms the world's first launch of a distinctive auction model.</p>
                        <p>Divega brings the aspiration for a real universe in the digital world, especially through addressing the issue of transparency in charity works.</p>
                        <p>Divega provides a wide array of worldwide networking opportunities.</p>
                        <p>It is the exclusive portal for some, the marvelous entrance for many others, and the ultimate gate for others through which they might reach and actively pursue the global social impact.</p>
                    </div>
                    <div class="text-center"><a target="_blank" href="https://divega.com/" class="btn btnBlue">READ MORE</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- What makes divega differences -->
    <section class="bgWhite bgArrow">
        <div class="container" id="makeAnimate">
            <h2 class="sectionHeading centered">WHAT MAKES DIVEGA DIFFERENCES</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/divega-USP1.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP1" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Business Model </h5>
                            <p class="card-text text-center">Pioneering AI technology in management, appraisal, and transaction of stocks and real-estate assets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/divega-USP2.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP2" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Technology Combination </h5>
                            <p class="card-text text-center">Divega is a SIB (Social Impact Business).</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/divega-USP3.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP3" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Non-profit Social Firm</h5>
                            <p class="card-text text-center">A non-profit social firm undertakes actual charitable work by giving all operational profits to charity.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/divega-USP4.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP4" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Reverse Auction </h5>
                            <p class="card-text text-center">A blockchain auction platform for the first time in the world applies the reverse auction mechanism.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Divega Solution -->
    <section>
        <div class="container" id="solutionAnimate">
            <h2 class="sectionHeading centered">DIVEGA SOLUTION</h2>
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Transparency</h4>
                            <p class="text-justify">Using Blockchain technology to make all product auctions transparent</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Payment</h4>
                            <p class="text-justify">Crypto App for Payment (Bill of Auction)</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Reverse Auction </h4>
                            <p class="text-justify">The winning auction product's price is the lowest and most exclusive fee.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Categories</h4>
                            <p class="text-justify">Items and services conduct a variety of auctions of authentic products and market providers in many product areas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
                    <img src="{{ asset('/img/Divega-Solution.png')}}" alt="divega-solution">
                </div>
            </div>
        </div>
    </section>
</div>

@endsection

@push('script')

<script>
    window.addEventListener('scroll', () => {
        if (isScrolledIntoView('#overviewAnimate')) {
            document.querySelector('#overviewAnimate').classList.add('contact-animation')
        }
        if (isScrolledIntoView('#inspirationAnimate')) {
            document.querySelector('#inspirationAnimate').classList.add('contact-animation')
        }
        if (isScrolledIntoView('#brandAnimate')) {
            document.querySelector('#brandAnimate').classList.add('contact-animation')
        }
        if (isScrolledIntoView('#makeAnimate')) {
            document.querySelector('#makeAnimate').classList.add('contact-animation')
        }
        if (isScrolledIntoView('#solutionAnimate')) {
            document.querySelector('#solutionAnimate').classList.add('contact-animation')
        }
    })


    function isScrolledIntoView(selector) {
        const element = document.querySelector(selector)
        return element.getBoundingClientRect().top < window.innerHeight
    }
</script>

@endpush