@extends('layouts.app')

@section('content')
<div id="mediaPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/media-press-banner.png') }}" class="w-100"></section>

    <!-- PRESS RELEASE METAWAY HOLDINGS -->
    <section class="bgGrey newsHighlights">
        <div class="container">
            <h2 class="sectionHeading">PRESS RELEASE <span>METAWAY HOLDINGS</span></h2>
            <div class="row">
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <a href="{{ route('media.press-detail') }}" class="imgThumb">
                            <img class="card-img-top" src="{{ asset('img/Media-2-Press-one.png') }}">
                            <div class="datePublished">
                                <span>Jan</span>
                                <span>17</span>
                                <span>2022</span>
                            </div>                              
                        </a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline">
                                <a href="{{ route('media.press-detail') }}">Startup CMC Holdings successfully raised capital of 1.5 million USD</a>
                            </h5>
                            <p class="card-text">After a one-hour call, a startup establishing the digital economy successfully secured $1.5 million in a Co-founder round to develop the digital economy ecosystem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
