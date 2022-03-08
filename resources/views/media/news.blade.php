@extends('layouts.app')

@section('content')
<div class="anypage" id="mediaPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/media-news-banner.png') }}" class="w-100"></section>

    <!-- PRESS RELEASE METAWAY HOLDINGS -->
    <section class="bgGrey newsHighlights">
        <div class="container" id="pressAnimate">
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

@push('script')

<script>
    window.addEventListener('scroll', () => {
        if (isScrolledIntoView('#pressAnimate')) {
            document.querySelector('#pressAnimate').classList.add('contact-animation')
        }
    })


    function isScrolledIntoView(selector) {
        const element = document.querySelector(selector)
        return element.getBoundingClientRect().top < window.innerHeight
    }
</script>

@endpush
