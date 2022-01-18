@extends('layouts.app')

@section('content')

<div id="leaderBoard">

    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/banner-members.jpg') }}"></section>

    <!-- EXECUTIVE TEAM -->
    <section>
        <div class="container">

            <h2 class="sectionHeading">EXECUTIVE TEAM</h2>
            <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-technical-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-technical" type="button" role="tab" aria-controls="pills-technical"
                        aria-selected="true">Technical Steering Committee</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-governing-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-governing" type="button" role="tab" aria-controls="pills-governing"
                        aria-selected="false">Governing Board</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-staff-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-staff" type="button" role="tab" aria-controls="pills-staff"
                        aria-selected="false">Staff</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-asia-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-asia" type="button" role="tab" aria-controls="pills-asia"
                        aria-selected="false">Asia Pacific</button>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-technical" role="tabpanel" aria-labelledby="pills-technical-tab">
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtnd-2.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtrd.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtst.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-4.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-5.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-6.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-7.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="item">
                                <a href="#" class="info" data-bs-toggle="modal" data-bs-target="#leaderInfo">
                                    <span class="thumbWrap circle">
                                        <span class="inner">
                                            <img src="https://dev.cmcchain.network/img/avtth-8.jpg">
                                        </span>
                                    </span>
                                    <div>AT&amp;T</div>
                                    <h5 class="name">Andre Fuetsch</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-governing" role="tabpanel" aria-labelledby="pills-governing-tab">
                    Governing Board
                </div>
                <div class="tab-pane fade" id="pills-staff" role="tabpanel" aria-labelledby="pills-staff-tab">
                    Staff
                </div>
                <div class="tab-pane fade" id="pills-asia" role="tabpanel" aria-labelledby="pills-asia-tab">
                    Asia Pacific
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="leaderInfo" tabindex="-1" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-auto col-12">
                            <div class="info">
                                <span class="thumbWrap circle">
                                    <span class="inner">
                                        <img src="https://dev.cmcchain.network/img/avtnd-2.jpg">
                                    </span>
                                </span>
                            </div>
                        </div>
                        <div class="col-lg col-12">
                            <h6>AT&amp;T</h6>
                            <h5 class="mb-4">Andre Fuetsch</h5>
                            <p>Melissa E. Evers is vice president in the Intel Architecture, Graphics, and Software group and general manager of Software Business Strategy at Intel Corporation. Her responsibilities span guiding the strategy and defining software strategies across Intel collaborating with teams and business units. Her team builds tools, insights, systems and processes to ensure our software initiatives drive maximum impact to Intel’s business. Based in Portland, Oregon, Evers leads Intel’s open source software coordination, strategy and engagement in our associated communities. Outside of Intel, she is a member of the Linux Foundation board and serves as governing board chair of LF Edge, an umbrella project within the Linux Foundation.</p>
                            <p>Before assuming her current Intel role in 2019, Evers worked across the system software stack in open source communities, from device to edge to cloud. She has led development in a breadth of open source development areas, including Android, Chrome, graphics, media, OpenStack, Cloud Native Computing and StarlingX. In 2017, her contributions to Chrome OS earned her an Intel Achievement Award, the company’s highest recognition. Since joining Intel in 2004, Evers has worked across engineering, finance  and product management functions. Before joining Intel, she worked at Dell Inc. and Exxon Mobil Corp.</p>
                            <p>Evers holds a bachelor’s degree in engineering from the University of Texas at Austin. She also earned an MBA degree from the university’s McCombs School of Business. An active champion of diversity and inclusion, as well as a certified coach, Evers frequently coaches leaders internally and externally. She is also a frequent keynote speaker at industry events.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
