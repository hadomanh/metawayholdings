@extends('layouts.app')

@section('content')
<div id="investorPage" class="bgWhite">

    <!-- Banner -->
    <section class="banner">
        <div class="container">
            <h1>INVESTORS</h1>
        </div>
    </section>

    <!-- INVESTORS -->
    <section class="investor-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h2 class="sectionHeading">INVESTORS</h2>
                    <h5 class="titleUnderline">Announcement</h5>
                    <h5 class="titleUnderline">Investment news</h5>
                    <h5 class="titleUnderline">Annual financial reports</h5>
                    <p>Welcome to our financial information pages, aimed for you as an investor, share
                        holder, analyst or similar.</p>
                    <p>Here you will find our financial reports, such as interim reports, annual reports and information
                        regarding the company and the Board.</p>
                </div>
                <div class="col-md-8">
                    <div class="row list">
                        <div class="col-md-6">
                            <a href="#" class="item">
                                <img src="{{ asset('img/investor-announce-1.jpg') }}" alt="">
                                <span>METAWAYH REPORT <br> 1 JANUARY-31 MARCH 2021</span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="item">
                                <img src="{{ asset('img/investor-announce-2.jpg') }}" alt="">
                                <span>ANNUAL REPORT <br> 2021</span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="item">
                                <img src="{{ asset('img/investor-announce-3.jpg') }}" alt="">
                                <span>ANNUAL REPORT <br> 2022</span>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="item">
                                <img src="{{ asset('img/investor-announce-4.jpg') }}" alt="">
                                <span>CALENDAR</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- INVESTORS METAWAY HOLDINGS -->
    <section class="investor-2">
        <div class="container">
            <h2 class="sectionHeading">INVESTORS <span>METAWAY HOLDINGS</span></h2>
            <div class="row g-0 list">
                <div class="col-md-6 item">
                    <h4 class="mb-1">Total Sales</h4>
                    <p class="fw-normal">In USD Millions</p>
                    <img src="{{ asset('img/investor-chart.jpg') }}" alt="">
                </div>
                <div class="col-md-6 item">
                    <h4 class="mb-1">Total Assets</h4>
                    <p class="fw-normal">In USD Millions</p>
                    <img src="{{ asset('img/investor-chart.jpg') }}" alt="">
                </div>
                <div class="col-md-6 item">
                    <h4 class="mb-1">Total Liabilities</h4>
                    <p class="fw-normal">In USD Millions</p>
                    <img src="{{ asset('img/investor-chart.jpg') }}" alt="">
                </div>
                <div class="col-md-6 item">
                    <h4 class="mb-1">Total Stockholder Equity</h4>
                    <p class="fw-normal">In USD Millions</p>
                    <img src="{{ asset('img/investor-chart.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
