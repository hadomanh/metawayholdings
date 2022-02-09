@extends('layouts.app')

@section('content')
<div id="mediaPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/media-news-banner.png') }}" class="w-100"></section>

    <!-- PRESS RELEASE METAWAY HOLDINGS -->
    <section class="bgGrey newsHighlights">
        <div class="container">
            <h2 class="sectionHeading centered">MEDIA NEWS</span></h2>
            <div class="row">

                @foreach ($news as $item)
                <div class="col-lg-3 col-md-6 item">
                    <div class="card">
                        <a href="{{ route('media.news-detail', $item->id) }}" class="imgThumb">
                            <img class="card-img-top" src="{{ $item->thumbnail }}">                             
                        </a>
                        <div class="card-body">
                            <h5 class="card-title titleUnderline">
                                <a href="{{ route('media.news-detail', $item->id) }}">{{ $item->title }}</a>
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
