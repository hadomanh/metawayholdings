@extends('layouts.app')

@section('content')
<div class="anypage" id="mediaPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/investor-report-banner.png') }}" class="w-100"></section>

    <!-- INTERNAL REPORTS -->
    <section class="bgWhite">
        <div class="container" id="internalAnimate">
            <h2 class="sectionHeading centered">INTERNAL REPORTS</h2>
            <div class="row listFile">
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="item">
                        <a href="#">
                            <img src="{{ asset('img/Media-1-Internal.png') }}">
                        </a>
                        <div>Wednesday, October 6th, 2021</div>
                        <h6 class="titleUnderline centered mb-0">INTERNAL REPORTS</h6>
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
        if (isScrolledIntoView('#internalAnimate')) {
            document.querySelector('#internalAnimate').classList.add('contact-animation')
        }
    })


    function isScrolledIntoView(selector) {
        const element = document.querySelector(selector)
        return element.getBoundingClientRect().top < window.innerHeight
    }
</script>

@endpush
