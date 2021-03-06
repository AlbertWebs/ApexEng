@extends('front.master')
@section('content')
      <!-- Content -->
      <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/architecture-2287327_1920.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Contact Us </h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Contact Us </li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        @foreach ($Content as $Con)
             <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">
                <div class="row">
					<!-- right part start -->
                    <div class="col-lg-4 col-md-6 d-flex m-b30">
                        <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
							<h3 class="m-b5">Quick Contact</h3>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Address:</h6>
                                        <p>{{$Con->address}}</p>
                                        {{-- <p>{{$Con->location}}</p> --}}
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="mailto:info@apexeng.com" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>{{$Con->email}}</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <a href="tel:{{$Con->mobile_one}}" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                        <p>{{$Con->mobile_one}}<br>
                                            {{-- {{$Con->mobile_two}} --}}
                                        </p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dlab-social-icon border dlab-social-icon-lg">
									<li><a href="{{$Con->facebook}}" class="fa fa-facebook bg-primary"></a></li>
									<li><a href="{{$Con->twitter}}" class="fa fa-twitter bg-primary"></a></li>
									<li><a href="{{$Con->linkedin}}" class="fa fa-linkedin bg-primary"></a></li>
									<li><a href="{{$Con->instagram}}" class="fa fa-instagram bg-primary"></a></li>
									<li><a href="{{$Con->youtube}}" class="fa fa-youtube bg-primary"></a></li>
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->
                    <!-- Left part start -->
                    {{-- <div class="col-lg-4 col-md-6  mb-4 m-b30 mb-md-0">
                        <div class="p-a30 bg-gray clearfix radius-sm">
							<h3 class="m-b10">Send Message Us</h3>
							<div class="dzFormMsg"></div>
							<form method="post" class="dzForm" action="https://industry.dexignzone.com/xhtml/script/contact.php">
							<input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="dzName" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="dzEmail" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="dzMessage" rows="4" class="form-control" required placeholder="Your Message..."></textarea>
                                            </div>
                                        </div>
                                    </div>
									<div class="col-lg-12">
										<div class="form-group">
											<div class="input-group">
												<div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
												<input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
											</div>
										</div>
									</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> --}}
                    <!-- Left part END -->
					<div class="col-lg-8 d-flex m-b30">
						{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227748.3825624477!2d75.65046970649679!3d26.88544791796718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x396c4adf4c57e281%3A0xce1c63a0cf22e09!2sJaipur%2C+Rajasthan!5e0!3m2!1sen!2sin!4v1500819483219" class="align-self-stretch radius-sm" style="border:0; width:100%; min-height:100%;" allowfullscreen></iframe> --}}
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.332910006001!2d45.296995014754934!3d2.0224726985256205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3d586bbe3e34ef31%3A0xb42174e54bd0a472!2sApex%20Engineering%20Ltd!5e0!3m2!1sen!2ske!4v1633433997603!5m2!1sen!2ske" width="100%" height="650" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>
                    
                </div>
            </div>
        </div>
        <!-- contact area  END -->
        @endforeach
       
        @include('front.home.call-to-action-one')
    </div>
    <!-- Content END-->
@endsection