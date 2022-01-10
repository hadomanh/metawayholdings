@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0"><img src="{{ asset('img/Banner-Project-Partners.png') }}"></section>

<!-- Our PartnerS -->
<section>
    <div class="container">
        <h2 class="underline" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">OUR
            PARTNERS CMC HOLDINGS</h2>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="{{ asset('img/partner-swisscom.png') }}">
                                        </div>
                                        <div class="col-8">
                                            <h4>Swisscom</h4>
                                            <p>Swisscom, Switzerland's leading telecoms company and one of its
                                                leading IT companies, is headquartered in Ittigen.</p>
                                            <p>Website: <span
                                                    class="blueText">swisscom.ch/de/privatkunden.html</span></p>
                                            <p>Crunchbase: <span
                                                    class="blueText">crunchbase.com/organization/swisscom</span></p>
                                            <p>LinkedIn: <span
                                                    class="blueText">linkedin.com/company-beta/2715</span></p>
                                            <p>Twitter: <span class="blueText">@Swisscom</span></p>
                                            <p>Headquarters: <span class="blueText">Worblaufen, Switzerland</span>
                                            </p>
                                            <p>Market Cap: <span class="redText">$29.2B</span></p>
                                            <img src="{{ asset('img/partner-Tweets.png') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-4">
                                            <img src="img/avt-2.png" class="d-block w-100">
                                        </div>
                                        <div class="col-8">
                                            <h5>Intel <br> Melissa E. Evers</h5>
                                            <p>Melissa E. Evers is vice president in the Intel Architecture,
                                                Graphics, and Software group and general manager of Software
                                                Business Strategy at Intel Corporation. Her responsibilities span
                                                guiding the strategy and defining software strategies across Intel
                                                collaborating with teams and business units. Her team builds tools,
                                                insights, systems and processes to ensure our software initiatives
                                                drive maximum impact to Intel's business. Based in Portland, Oregon,
                                                Evers leads Intel's open source software coordination, strategy and
                                                engagement in our associated communities. Outside of Intel, she is a
                                                member of the Linux Foundation board and serves as governing board
                                                chair of LF Edge, an umbrella project within the Linux Foundation.
                                                Before assuming her current Intel role in 2019, Evers worked across
                                                the system software stack in open source communities, from device to
                                                edge to cloud. She has led development in a breadth of open source
                                                development areas, including Android, Chrome, graphics, media,
                                                OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                                contributions to Chrome OS earned her an Intel Achievement Award,
                                                the company's highest recognition. Since joining Intel in 2004,
                                                Evers has worked across engineering, finance and product management
                                                functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                                Mobil Corp. Evers holds a bachelor's degree in engineering from the
                                                University of Texas at Austin. She also earned an MBA degree from
                                                the university's McCombs School of Business. An active champion of
                                                diversity and inclusion, as well as a certified coach, Evers
                                                frequently coaches leaders internally and externally. She is also a
                                                frequent keynote speaker at industry events.</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="text-center p-4">CMC Holdings invites participants that are building on CMC Holdings blockchain
            platform, access to additional resources to help speed up your build out of your blockchain initiatives.
            Using CMC Holdings qualified partners, tap into established and knowledgeable consulting firms,
            implementation partners, system integrators and developer firms. From small to massive blockchain
            projects across a variety of sectors and geos, CMC Holdings Partner Program is created to help you along
            your path to blockchain adoption.</p>
        <table class="table text-center">
            <tr>
                <th class="tableimg "><img src="{{ asset('img/partner-one.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-two.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-three.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-four.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-five.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-six.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg"><img src="{{ asset('img/partner-seven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eight.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-nine.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-ten.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eleven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-twelve.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg "><img src="{{ asset('img/partner-one.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-two.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-three.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-four.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-five.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-six.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg"><img src="{{ asset('img/partner-seven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eight.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-nine.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-ten.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eleven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-twelve.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg "><img src="{{ asset('img/partner-one.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-two.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-three.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-four.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-five.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-six.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg"><img src="{{ asset('img/partner-seven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eight.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-nine.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-ten.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eleven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-twelve.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg "><img src="{{ asset('img/partner-one.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-two.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-three.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-four.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-five.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-six.png') }}"></th>
            </tr>
            <tr>
                <th class="tableimg"><img src="{{ asset('img/partner-seven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eight.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-nine.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-ten.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-eleven.png') }}"></th>
                <th class="tableimg"><img src="{{ asset('img/partner-twelve.png') }}"></th>
            </tr>
        </table>
    </div>
</section>
@endsection
