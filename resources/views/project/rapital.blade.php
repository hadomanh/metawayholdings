@extends('layouts.app')

@section('content')
<div class="anypage">
    <!-- Banner -->
    <section class="p-0">
        <div class="imgWrap">
            <!-- <div class="text-rb">
            <h1 class="text-center">RAPITAL BANK</h1>
            <p class="text-center">DIGITAL BANK IN DIGITAL ECONOMY 5.0</p>
        </div> -->
            <img src="{{ asset('img/banner-RapitalBank.png') }}" alt="banner RAPITAL BANK">
        </div>
    </section>

    <!-- Overview -->
    <section class="bgWhite bgArrow">
        <div class="container" id="overviewAnimate">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('img/RapitalBank-overview.png') }}" alt="RAPITAL BANK overview">
                </div>
                <div class="col-md-4">
                    <h2 class="titleUnderline">OVERVIEW</h2>
                    <div class="text-justify">
                        <p>It is a new digital bank in the Digital Economy.</p>
                        <p>Rapital Bank Platform helps financial institutions to minimize their time to market today while being prepared for the future. </p>
                        <p>It establishes the standard for digital transformation, as well as the skills required for remarkable omnichannel experiences and the technology required to fully embrace open banking.</p>
                        <p>It may be performed on-premises or on any public or private cloud.</p>
                    </div>
                    <div class="text-center"><a target="_blank" href="https://www.rapitalbank.com/" class="btn btnWhite">READ MORE</a></div>
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
                    <p>We assist individuals in removing the complexity, bureaucracy, and outdated methods of managing money through our efforts.</p>
                    <ul>
                        <li>Register account free, online</li>
                        <li>24/7 support</li>
                        <li>Free trade, no transaction fee</li>
                        <li>Decentralized finance</li>
                        <li>Super security technology (Blockchain)</li>
                    </ul>
                    <div class="text-center"><a target="_blank" href="https://www.rapitalbank.com/" class="btn btnWhite">READ MORE</a></div>
                </div>
                <div class="col-md-8">
                    <img src="{{ asset('img/RapitalBank-Inspritation.png') }}" alt="banner RAPITAL BANK">
                </div>
            </div>
    </section>


    <!-- Brand Story -->
    <section class="bgDark bgArrow">
        <div class="container" id="brandAnimate">
            <div class="row">
                <div class="col-md-8">
                    <img src="{{ asset('img/RapitalBank-BrandStory.png') }}" alt="RAPITAL BANK overview">
                </div>
                <div class="col-md-4">
                    <h2 class="titleUnderline textWhite">BRAND STORY</h2>
                    <div class="text-justify textWhite">
                        <p>The name Rapital Bank has many meanings, it can be Digital Payment Platform, a "Rapper" style digital bank or more simply Reliable Bank.</p>
                        <p>The tagline “Digital Bank in Your Hands with Hyper Security” highlights security as well as the fastest and most convenient banking transactions.</p>
                        <p>The mission of Rapital is to deliver a different message and raise new awareness about financial management.</p>
                        <p>Rapital's services every day bring small but endless joys and have a style and personality that not only assures safety and reliability, but also commits to bringing prosperity and a sustainable source of joy.</p>
                    </div>
                    <div class="text-center"><a target="_blank" href="https://www.rapitalbank.com/" class="btn btnWhite">READ MORE</a></div>

                </div>
            </div>
        </div>
    </section>

    <!-- What makes RAPITAL BANK differences -->
    <section class="bgWhite bgArrow">
        <div class="container" id="makeAnimate">
            <h2 class="sectionHeading centered">WHAT MAKES RAPITAL BANK DIFFERENCES</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset ('/img/01-Send.png')}}" class="card-img-top grey-image" alt="rapitalbank-send" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Hyper Transparency & Security</h5>
                            <p class="card-text text-center">Rapital Bank comes to build this world for you, simplify your financial life with high transparency and security.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset ('/img/02-Recieve.png')}}" class="card-img-top grey-image" alt="rapitalbank-recieve" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Decentralized Finance</h5>
                            <p class="card-text text-center">We aspire to be different in order to help you achieve your goal of decentralized finance, in which you are the only one with the authority to interfere in monetary assets, and you will own your financial wealth. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset ('/img/03-Spend.png')}}" class="card-img-top grey-image" alt="rapitalbank-spend" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Borderless Connecting</h5>
                            <p class="card-text text-center">Register online, 24/7. </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset ('/img/04-Track.png')}}" class="card-img-top grey-image" alt="rapitalbank-track" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Lowest Fee</h5>
                            <p class="card-text text-center">Free of charge for transaction fee.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RAPITAL BANK Solution -->
    <section>
        <div class="container" id="solutionAnimate">
            <h2 class="sectionHeading centered">RAPITAL BANK SOLUTION</h2>
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="row">
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Account Management</h4>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Payment cards (utility services)</h4>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Savings</h4>
                            <p class="text-justify">No matter what type of real estate needs you have, finding the local real estate professional you want to work with is the first step. </p>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Loans</h4>
                            <p class="text-justify">It’s important to keep in mind that as exciting as it may be, the metaverse is still unchartered territory. </p>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Payment technology (QR code, POSM, NFC...)</h4>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                        <div class="col-lg-6 col-xs-12">
                            <h4 class="titleUnderline">Digital currency (crypto and blockchain)</h4>
                            <p class="text-justify">News Lorem Ipsum is simply
                                dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 d-flex justify-content-center">
                    <img src="{{ asset('/img/RapitalBank-Solution.png')}}" alt="">
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