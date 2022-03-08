@extends('layouts.app')

@section('content')
<div class="anypage">
    <!-- Banner -->
    <section class="p-0">
        <div class="imgWrap">
            <!-- <div class="text">
            <h1 class="text-center">HYPERAS CHAIN</h1>
            <p class="text-center">THE CHAIN FOR HYPER ASSETS</p>
        </div> -->
            <img src="{{ asset('img/Banner-project-hyperas.png') }}" alt="banner HYPERAS CHAIN">
        </div>
    </section>

    <!-- Overview -->
    <section class="bgWhite bgArrow">
        <div class="container" id="overviewAnimate">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/project-overview.png') }}" alt="HYPERAS CHAIN overview">
                </div>
                <div class="col-md-6">
                    <h2 class="titleUnderline">OVERVIEW</h2>
                    <div class="text-justufy">
                        <p>Hyperas Chain (Hyra coin) is created by Hyperas INC. </p>
                        <p>Hyperas chain is a blockchain infrastructure that helps connect other blockchains.</p>
                        <p>With our non-invasive cross-chain technology Hyperas chain operates as a data conduit, allowing cross-chain communications between public and private protocols. </p>
                        <p>Hyperas chain can transfer both assets and data without requiring any change on participating blockchains.</p>
                        <p>Our unified infrastructure helps solutions run on multiple platforms by enabling interoperability among them and making the implementation as straightforward as possible from the developer's perspective.</p>
                        <p>The founders of Hyperas Chain seek to cooperate with strategic partners, product developers, venture capital funds, investors, and global users, who lend their hands in developing this platform to bring real values to the global community fans that love blockchain technology and digital assets.</p>
                    </div>
                    <div class="text-center"><a target="_blank" href="https://hyperaschain.com/" class="btn btnWhite">READ MORE</a></div>

                </div>
            </div>
        </div>
    </section>

    <!-- Inspiration -->
    <section class="bgGrey bgArrow">
        <div class="container" id="inspirationAnimate">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="titleUnderline">INSPIRATION</h2>
                    <div class="text-justufy">
                        <p>Hyperas was created to help address users' tremendous dissatisfaction and expectations.</p>
                        <p>Response KYC - Most existing blockchain platforms in the crypto industry leverage anonymous user information.</p>
                        <p>Multiple blockchains compatible: EVM with trading pairs with ETH /BSC/MATIC/ FANTOM/TRON/ETC/POA/ XDAI </p>
                        <p>LOWEST gas fee in the market: 0.00001 $</p>
                    </div>
                    <div class="text-center mb-3"><a target="_blank" href="https://hyperaschain.com/" class="btn btnWhite">READ MORE</a></div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('img/project-inspriration.png') }}" alt="banner HYPERAS CHAIN">
                </div>
            </div>
    </section>

    <!-- Brand Story -->
    <section class="bgDark bgArrow">
        <div class="container" id="brandAnimate">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('img/hyperas-brandstory.png') }}" alt="HYPERAS CHAIN overview">
                </div>
                <div class="col-md-6">
                    <h2 class="titleUnderline textWhite">BRAND STORY</h2>
                    <div class="text-justify textWhite">
                        <p>The name “Hyperas” is a combination of the words including Hyper and Asset.</p>
                        <p>The tagline “Hyper Asset Digitization on the Chain” affirms efforts to digitize high-value assets.</p>
                        <p>The Hyperas Chain logo represents stable structures, non-stop flows, non-stop motions, and decentralization, all while ensuring dependability and transparency.</p>
                        <p>Hyperas Chain built by Metaway Holdings is the "superior" of the digital ecosystem, demonstrating its capacity and stature as well as its commitment to achieving the corporation's goal of tokenizing real-world assets.</p>
                    </div>
                    <div class="text-center"><a target="_blank" href="https://hyperaschain.com/" class="btn btnWhite">READ MORE</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- What makes HYPERAS CHAIN differences -->
    <section class="bgWhite bgArrow">
        <div class="container" id="makeAnimate">
            <h2 class="sectionHeading centered">WHAT MAKES HYPERAS CHAIN DIFFERENCES</h2>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/hyperas-usp1.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP1" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Tokenization</h5>
                            <p class="card-text text-justify">Development of a different Blockchain platform Hyperaschain, the application of tokenizing real-world assets such as stocks, real estate, and other types of assets.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/hyperas-usp2.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP2" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Diversified Assets</h5>
                            <p class="card-text text-justify">Hyperaschain supports a wide range of existing and new financial assets such as equity and publicly traded bonds, real estate, artwork, and more as the project expands.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/hyperas-usp3.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP3" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">Consensus Algorithm</h5>
                            <p class="card-text text-justify">Apply Proof of Authority (PoA) consensus algorithm, as well as ST20, SAP2022 protocol to its own Blockchain platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="#" class="col-auto text-center">
                            <img src="{{ asset('img/hyperas-usp4.png') }}" class="card-img-top grey-image" alt="hyperas-chain-USP4" style="width: 75%;">
                        </a>
                        <div class="card-body col">
                            <h5 class="card-title text-center">KYC</h5>
                            <p class="card-text text-justify">Know-your-customer (KYC) practices are enforced to ensure security and trust remain at the heart of Hyperaschain.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HYPERAS CHAIN Ecosystem -->
    <section>
        <div class="container" id="ecosystemAnimate">
            <h2 class="sectionHeading centered">HYPERAS ECOSYSTEM</h2>
            <div class="row">
                <div class="col-lg-3 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12" style="height: 570px;">
                            <div class="p-5">
                                <div class="row d-flex align-items-center">
                                    <img src="{{ asset('img/ecosystem-hyperasscan.png') }}" alt="ecosystem scan">
                                </div>
                                <h3 class="sectionHeading centered mt-3">Hyra Scan</h3>
                                <p class="text-justify">The blockchain ledger of Hyperas Chain, where to keep track of transactions in and out of smart contracts, cryptocurrency transactions, cryptographic assets (NFT).</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="p-5">
                                <div class="row d-flex align-items-center">
                                    <img src="{{ asset('img/ecosystem-hyperaswallet.png') }}" alt="ecosystem hyperaswallet">
                                </div>
                                <h3 class="sectionHeading centered mt-3">Hyra Wallet</h3>
                                <p class="text-justify">A digital asset storage wallet and gateway to blockchain applications, capable of communicating with various blockchain networks: Buy, store, send and swap digital assets, Explore blockchain applications, Own your data.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('img/hyperas-brandstory.png') }}" alt="hyperas brandstory">
                </div>
                <div class="col-lg-3 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-xs-12" style="height: 570px;">
                            <div class="p-5">
                                <div class="row d-flex align-items-center">
                                    <img src="{{ asset('img/ecosystem-hyperasdex.png') }}" alt="ecosystem hyperasdex">
                                </div>
                                <h3 class="sectionHeading centered mt-3">Hyra Dex</h3>
                                <p class="text-justify">A decentralized exchange where cryptocurrencies and other digital assets (NFTs) are listed. </p>
                                <p class="text-justify">Hyradex is considered a great step forward in the mission of currency liberalization, decentralized crypto-assets of the Hyperas Chain ecosystem...</p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xs-12">
                            <div class="p-5">
                                <div class="row d-flex align-items-center">
                                    <img src="{{ asset('img/ecosystem-hyperasinvest.png') }}" alt="ecosystem hyperasinvest">
                                </div>
                                <h3 class="sectionHeading centered mt-3">Hyra Invest</h3>
                                <p class="text-justify">Hyra Invest is a marketplace to offer Hyra Coin in ICO rounds and a place for investors to pay for transactions when investing in digital real estate on Pindias platform.</p>
                            </div>
                        </div>
                    </div>

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
        if (isScrolledIntoView('#ecosystemAnimate')) {
            document.querySelector('#ecosystemAnimate').classList.add('contact-animation')
        }
    })


    function isScrolledIntoView(selector) {
        const element = document.querySelector(selector)
        return element.getBoundingClientRect().top < window.innerHeight
    }
</script>

@endpush