@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0">
    <img src="{{ asset('img/banner-contact.png') }}">
</section>
<section>
    <div class="container contact">
        <h2 class="underlinee"> CONTACT CMC HOLDINGS</h2>
        <h5 class="howtext">How can we help you?</h5>
        <div class="row">
            <div class="col">
                <span>Name *</span>
                <input type="email" class="form-control" placeholder="Enter Name">
                <span>Ragarding *</span>
                <select class="form-select colorlightgray" aria-label="Default select example">
                    <option selected>Select</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col">
                <span>Email *</span>
                <input type="email" class="form-control" placeholder="Email">
                <span>Phone *</span>
                <input type="email" class="form-control" placeholder="Enter Phone">
            </div>
        </div>
        <span>Message *</span>
        <input type="email" class="form-control entermessage" placeholder="Enter Message">
        <p class="text-center"><a href="" class="btn sendtext">SEND</a></p>
    </div>
</section>

@endsection
