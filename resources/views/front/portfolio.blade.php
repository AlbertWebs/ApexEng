@extends('front.master-portfolio')
@section('content')
@foreach ($Portfolio as $item)
	  <!-- Content -->
	  <div class="page-content bg-white">
		<!-- inner page banner -->
		<div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{url('/')}}/uploads/casestudies/{{$item->image_one}});">
			<div class="container">
				<div class="dlab-bnr-inr-entry">

					<h1 class="text-white">
						{{$item->title}}
					</h1>

					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							{{-- <li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/')}}/portfolios">Home</a></li>
							<li>{{$item->title}} </li> --}}
						</ul>
					</div>
					<!-- Breadcrumb row END -->
				</div>
			</div>
		</div>
		<!-- inner page banner END -->

		<div class="content-block">
				  <!-- Portfolio Details -->
		<div class="section-full content-inner bg-white">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 m-b30">
						<h2 class="text-black font-weight-600 m-b15">Scope Of Work</h2>
						<p>{!! html_entity_decode($item->scope, ENT_QUOTES, 'UTF-8') !!}</p>
						{{-- Content --}}
						<div class="row widget widget_getintuch widget_getintuch-pro-details m-lr0">
							<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 p-lr0">
								<div class="pro-details">
									<i class="ti ti-info"></i>
									<strong>Project</strong>{{$item->title}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-user"></i>
									<strong>CLIENT</strong> {{$item->client}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-location-pin"></i>
									<strong>LOCATION</strong>{{$item->location}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="fa fa-calendar"></i>
									<strong>Date</strong>{{$item->completion}}
								</div>
							</div>
							<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 p-lr0">
								<div class="pro-details">
									<i class="ti ti-home"></i>
									<strong>TYPE</strong>{{$item->Consultant}}
								</div>
							</div>
						</div>

					</div>
					<div class="col-lg-6">
						<div class="row">
                            @if($item->video == null or $item->video == "0")
								@if($item->image_one == null or $item->image_one == 0)

								@else
								<div class="col-lg-12 m-b30">
									<img alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_one}}">
								</div>
								@endif
							@else
								{{-- Showreel --}}
								<div class="dlab-box dlab-gallery-box">
									<div class="dlab-media dlab-img-overlay1 dlab-img-effect ">
										<a href="#"> <img src="{{url('/')}}/uploads/casestudies/{{$item->image_one}}" alt=""> </a>
										<div class="overlay-bx">
											<div class="overlay-icon">
												<div class="text-white">
													<a href="{{$item->video}}" class="popup-youtube video play-btn"><i class="fa fa-play icon-bx-xs"></i></a>
												</div>
											</div>
										</div>
									</div>
								</div>
								{{-- Showreel --}}

							@endif



							@if($item->image_two == null or $item->image_two == 0)

							@else
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_two}}">
							</div>
							@endif
							@if($item->image_three == null or $item->image_three == 0)

							@else
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_three}}">
							</div>
							@endif


							@if($item->image_four == null or $item->image_four == 0)

							@else
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_four}}">
							</div>
							@endif

							@if($item->image_five == null or $item->image_five == 0)

							@else
							<div class="col-lg-6 col-md-6 col-sm-6 m-b30">
								<img style="min-height:192px !important" alt="" src="{{url('/')}}/uploads/casestudies/{{$item->image_five}}">
							</div>
							@endif
							{{--  --}}


						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Portfolio Details End -->
		<?php $Gallery = DB::table('galleries')->where('portfolio_id',$item->id)->get(); ?>
		@if($Gallery->isEmpty())

		@else
		{{--  --}}
		<div class="bg-white lightgallery gallery-filters" id="lightgallery">
			<div class="section-full bg-gray content-inner-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<h3 class="m-t0 m-b20">Portfolio Gallery</h3>
							<div class="site-filters clearfix m-b20">
								<ul class="filters11" data-toggle="buttons">
									<?php $Cases = DB::table('cases')->where('id',$item->id)->get(); $counter = 1; ?>
									@foreach($Cases as $case)
									@If($counter == 1)
									<li data-filter="" class="btn active"><input type="radio"><a href="javascript:void(0);" class="site-button outline outline-2"><span>All</span></a></li>
									<li data-filter="portfolio_{{$case->id}}" class="btn"><input type="radio"><a href="javascript:void(0);" class="site-button outline outline-2"><span><small>{{$case->title}}</small></span></a></li>
									@else
									<li data-filter="portfolio_{{$case->id}}" class="btn"><input type="radio"><a href="javascript:void(0);" class="site-button outline outline-2"><span><small>{{$case->title}}</small></span></a></li>
									@endif
									<?php $counter = $counter+1; ?>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="clearfix">
						<ul id="masonry11" class="dlab-gallery-listing gallery-grid-4 gallery mfp-gallery text-center sp10">
							<?php $Galleries = DB::table('galleries')->where('portfolio_id',$item->id)->get(); ?>
							@foreach($Galleries as $Gallery)
							<li class="card-container m-b10 col-lg-4 portfolio_{{$Gallery->portfolio_id}}">
								<div class="dlab-media dlab-img-overlay1 dlab-img-effect">
									<img src="{{url('/')}}/uploads/gallery/{{$Gallery->image}}"  alt="" width="800" height="650"/>
									<div class="overlay-bx">
										<div class="overlay-icon">
											<span data-exthumbimage="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" data-src="{{url('/')}}/uploads/gallery/{{$Gallery->image}}" class="check-km" title="Apex Engineering Limited Somalia">
												<i class="ti-zoom-in icon-bx-xs"></i>
											</span>
										</div>
									</div>
								</div>
							</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
		</div>
		{{--  --}}
		@endif

		@include('front.home.pretty')

</div>
<!-- contact area END -->
@endforeach


@endsection
