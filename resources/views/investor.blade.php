@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0 bgInvestors">
    <div class="container">
        <h1 class="bgInvestors">INVESTORS</h1>
    </div>
</section>

<!-- INVESTORS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="unnderlinee">INVESTORS</h2>
                <h5 class="unnderline">Announcement</h5>
                <h5 class="unnderline">Investment news</h5>
                <h5 class="unnderline">Annual financial reports</h5>
                <p class="pt-4">Welcome to our financial information pages, aimed for you as an investor, share
                    holder, analyst or similar.</p>
                <p>Here you will find our financial reports, such as interim reports, annual reports and information
                    regarding the company and the Board.</p>
            </div>
            <div class="col">
                <div class="investorsone">
                    <h5 class="imgtext">CMCH REPORT <br> 1 JANUARY-31 MARCH 2021</h5>
                </div>
                <div class="investorsthree">
                    <h5 class="imgtext">NNUAL REPORT <br> 2022</h5>
                </div>
            </div>
            <div class="col">
                <div class="investorstwo">
                    <h5 class="imgtext">ANNUAL REPORT <br> 2021</h5>
                </div>
                <div class="investorsfour">
                    <h5 class="imgtext calendartext">CALENDAR</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- INVESTORS CMC HOLDINGS -->
<section>
    <div class="container">
        <h2 class="underlinee">INVESTORS CMC HOLDINGS</h2>
        <table>
            <tr>
                <th class="total"><img src="{{ asset('img/Investors-Announce-five.png') }}"></th>
                <th class="total"><img src="{{ asset('img/Investors-Announce-six.png') }}"></th>
            </tr>
            <tr>
                <th class="total"><img src="{{ asset('img/Investors-Announce-seven.png') }}"></th>
                <th class="total"><img src="{{ asset('img/Investors-Announce-eight.png') }}"></th>
            </tr>
        </table>
    </div>
</section>
@endsection
