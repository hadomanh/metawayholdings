@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0"><img src="{{ asset('img/Banner-Project-Partners.png') }}"></section>

<!-- PROJECTS CMC HOLDINGS -->
<section>
    <div class="container">
        <h2 class="underline">PROJECTS CMC HOLDINGS</h2>
        <p class="text-center p-4">CMC Holdings INC focuses on market research, updating the latest trends.
            Leveraging a solid <br> industry and financial background to develop and put into practice products
            services related to: <br> Renewable Energy, Financial Technology, Crypto Real Estate and development
            needs other. Each of <br> our projects responds to and serves the key aspects and trends of the times.
        </p>
        <div class="row">
            <div class="col">
                <div class="bglightgray">
                    <img class="card-img-top" src="{{ asset('img/project-one.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">CLEAN ENERGY</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s...</p>
                        <p class="text-center"><a href="" class="readmore">READ MORE</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bglightgray">
                    <img class="card-img-top" src="{{ asset('img/project-two.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">REAL ESTATE</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s...</p>
                        <p class="text-center"><a href="" class="readmore">READ MORE</a></p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="bglightgray">
                    <img class="card-img-top" src="{{ asset('img/project-three.png') }}">
                    <div class="card-body">
                        <h5 class="card-title unnderlinee">FINANCE AND TECHNOLOGY</h5>
                        <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                            1500s...</p>
                        <p class="text-center"><a href="" class="readmore">READ MORE</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
