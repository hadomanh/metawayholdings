@extends('layouts.app')

@section('content')
<div id="projectPage">
    <!-- Banner -->
    <section class="p-0"><img src="{{ asset('img/banner-project.jpg') }}" class="w-100"></section>

    <!-- PROJECTS METAWAY HOLDINGS -->
    <section class="projects">
        <div class="container">
            <h2 class="sectionHeading centered">PROJECTS <span>METAWAY HOLDINGS</span></h2>
            <div class="text-center mw-600 desc">
                METAWAY Holdings INC focuses on market research, updating the latest trends. Leveraging a solid industry and financial background to develop and put into practice products services related to: Renewable Energy, Financial Technology, Crypto Real Estate and development needs other. Each of our projects responds to and serves the key aspects and trends of the times.
            </div>
            <div class="row newsHighlights">
				<div class="col-md-4">
					<div class="card">
						<a href="#"><img class="card-img-top" src="{{ asset('img/project-one.png') }}"></a>
						<div class="card-body">
							<h5 class="card-title titleUnderline">CLEAN ENERGY</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/project-two.png') }}"></a>
						<div class="card-body">
							<h5 class="card-title titleUnderline">REAL ESTATE</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card">
                        <a href="#"><img class="card-img-top" src="{{ asset('img/project-three.png') }}"></a>
						<div class="card-body">
							<h5 class="card-title titleUnderline">FINANCE AND TECHNOLOGY</h5>
							<p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</p>
							<div class="text-center"><a target="_blank" href="#" class="btn btnWhite">READ MORE</a></div>
						</div>
					</div>
				</div>
			</div>
        </div>
    </section>
</div>
@endsection
