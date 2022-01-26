@extends('layouts.app')

@section('content')
<div id="contactPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/banner-contact.jpg') }}" class="w-100"></section>

    <section class="contactForm">
        <div class="container">
            <h2 class="sectionHeading"> CONTACT <span>METAWAY HOLDINGS</span></h2>
            <h5>How can we help you?</h5>
            <form action="">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Name *</label>
                        <input type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email *</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Ragarding *</label>
                        <select class="form-select">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone *</label>
                        <input type="text" class="form-control" placeholder="Enter Phone">
                    </div>
                    <div class="col-md-12 mb-3">
                    <label class="form-label">Message *</label>
                    <textarea class="form-control" placeholder="Enter Message"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btnRed">SEND</button>
                </div>
            </form>
        </div>
    </section>
</div>
@endsection
