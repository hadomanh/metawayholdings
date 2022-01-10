@extends('layouts.app')

@section('content')
<!-- Banner -->
<section class="p-0"><img src="{{ asset('img/banner-about-3-members.png') }}"></section>

<!-- EXECUTIVE TEAM -->
<section>
    <div class="container">

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-1.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-2.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-3.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-4.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-5.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-6.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-7.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-8.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-9.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-10.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-11.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-12.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal13" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-13.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal14" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-14.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal15" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-15.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal16" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-16.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal17" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-17.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal18" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-18.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal19" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-19.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-5.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-2.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-3.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-4.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-5.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-6.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-7.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <img src="{{ asset('img/avt-8.png') }}" class="d-block w-100">
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
                                </p>
                                <p>Before assuming her current Intel role in 2019, Evers worked across
                                    the system software stack in open source communities, from device to
                                    edge to cloud. She has led development in a breadth of open source
                                    development areas, including Android, Chrome, graphics, media,
                                    OpenStack, Cloud Native Computing and StarlingX. In 2017, her
                                    contributions to Chrome OS earned her an Intel Achievement Award,
                                    the company's highest recognition. Since joining Intel in 2004,
                                    Evers has worked across engineering, finance and product management
                                    functions. Before joining Intel, she worked at Dell Inc. and Exxon
                                    Mobil Corp. </p>
                                <p>Evers holds a bachelor's degree in engineering from the University of
                                    Texas at Austin. She also earned an MBA degree from the university's
                                    McCombs School of Business. An active champion of diversity and
                                    inclusion, as well as a certified coach, Evers frequently coaches
                                    leaders internally and externally. She is also a frequent keynote
                                    speaker at industry events.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2 class="underlinee">EXECUTIVE TEAM</h2>
        <ul class="nav nav-pills mt-4" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                    aria-selected="true">Technical Steering Committee</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                    aria-selected="false">Governing Board</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact"
                    aria-selected="false">Staff</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-messages-tab" data-bs-toggle="pill"
                    data-bs-target="#pills-messages" type="button" role="tab" aria-controls="pills-messages"
                    aria-selected="false">Asia Pacific</button>
            </li>
        </ul>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row text-center mt-5">
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-9.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-10.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-11.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-12.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-13.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-14.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-15.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-16.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-17.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-18.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal18">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-19.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal19">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-5">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row text-center mt-5">
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-9.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-10.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-11.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-12.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-13.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-14.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-15.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-16.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-17.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-18.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal18">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-19.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal19">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-5">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <div class="row text-center mt-5">
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-9.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-10.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-11.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-12.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-13.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-14.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-15.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-16.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-17.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-18.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal18">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-19.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal19">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-5">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-messages" role="tabpanel" aria-labelledby="pills-messages-tab">
                <div class="row text-center mt-5">
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-9.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal9">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-10.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal10">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-11.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal11">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-12.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal12">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-13.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal13">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-14.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal14">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-15.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal15">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-16.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal16">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-17.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal17">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3">
                        <img src="{{ asset('img/avt-18.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal18">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-19.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal19">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-4">
                        <img src="{{ asset('img/avt-1.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-2.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                        <div class="pt-3">AT&T</div>
                        <h5>Chris Mason</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-3.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal3">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-4.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal4">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 pb-5">
                        <img src="{{ asset('img/avt-5.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal5">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-6.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal6">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-7.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal7">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                    <div class="col-3 ">
                        <img src="{{ asset('img/avt-8.png') }}" data-bs-toggle="modal" data-bs-target="#exampleModal8">
                        <div class="pt-3">AT&T</div>
                        <h5>Andre Fuetsch</h5>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
