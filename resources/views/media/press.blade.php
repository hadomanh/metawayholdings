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
                @foreach ($press as $item)
                <div class="col-lg-4 col-md-6 item">
                    <div class="card">
                        <a href="{{ route('media.press-detail', $item->id) }}" class="imgThumb">
                            <img class="card-img-top" src="{{ $item->thumbnail }}">
                            {{-- <div class="datePublished">
                                <span>Jan</span>
                                <span>17</span>
                                <span>2022</span>
                            </div>                               --}}
                        </a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline">
                                <a href="{{ route('media.press-detail', $item->id) }}">{{ $item->title }}</a>
                            </h5>
                            <p class="card-text">{{ $item->subtitle }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>
</div>
@endsection
