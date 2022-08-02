<!DOCTYPE html>
<html lang="en">
<?php $SiteSettings = DB::table('_site_settings')->get(); ?>
@foreach ($SiteSettings as $Settings)
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Apex Engineering, URBAN PLANNING GEOSPATIAL SERVICES ARCHITECTURAL ENVIRONMENTAL MANAGEMENT INFRASTRUCTURE MANAGEMENT LAND SURVEYING BRIDGE DESIGNING
	& REHABILITATION" />
	<meta name="author" content="Designekta Studios" />

	<meta name="format-detection" content="telephone=no">
    <!--Meta SEO-->
	{!! SEO::generate() !!}
	<!-- FAVICONS ICON -->
	@include('favicon')
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<link src="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="{{asset('theme/css/plugins.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/line-awesome/css/line-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/flaticon/flaticon.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/themify/themify-icons.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/css/style.min.css')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('theme/css/skin/skin-2.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('theme/css/templete.min.css')}}">
	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap');
	</style>

	<!-- REVOLUTION SLIDER CSS -->
	<link rel="stylesheet" type="text/css" href="{{asset('theme/plugins/revolution/revolution/css/revolution.min.css')}}">

	{{--  --}}
	<!--Start of Tawk.to Script-->

	 {!! html_entity_decode($Settings->tawkTo, ENT_QUOTES, 'UTF-8') !!}

	<!--End of Tawk.to Script-->

	{{--  --}}
	<script id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/279dc98707b286f6be9935bcb/a34b864e9e65112b650496752.js");</script>
	{{--  --}}
</head>
<h1 style="display:none">{{$page_title}}</h1>
<body id="bg">
<div class="page-wraper">
<div id="loading-area"></div>
    <!-- header -->
    <header class="site-header mo-left header ext-header navstyle1">
		<div class="top-bar">
			<div class="container">
				<div class="row d-flex justify-content-between align-items-center">
					<div class="dlab-topbar-left">
						<ul class="font-14">
							<li><a href="#">About Us &nbsp; <i class="fa fa-info"></i></a></li>
							<li><a href="#">Privacy Policy &nbsp;<i class="fa fa-lock"></i></a></li>
							<li><a href="#">Find Us &nbsp;<i class="fa fa-map-marker"></i></a></li>
						</ul>
					</div>
					<div class="dlab-topbar-right">
						<a href="#" class="site-button radius-no btnhover11 theProfile"><i class="ti-download"></i> &nbsp; Company Profile</a>
					</div>
				</div>
			</div>
		</div>
		<div class="middle-bar bg-white">
			<div class="container">
				<!-- website logo  -->
				<div class="middle-area">
					<div class="logo-header logo-dark">
						<a href="{{url('/')}}"><img src="{{url('/')}}/uploads/logo/{{$Settings->logo}}" alt="{{$Settings->sitename}}"></a>
					</div>
					<div class="service-list">
						<ul>
							<li>
								<i class="la la-phone"></i>
								<h4 class="title">{{$Settings->mobile_one}}</h4>
								<span>24Hours</span>
							</li>
							<li>
								<i class="la la-clock-o"></i>
								<h4 class="title">08:00 AM - 06:00 PM</h4>
								<span>Sunday - Thursday</span>
							</li>
							<li>
								<i class="la la-map"></i>
								<h4 class="title">Buula Huubey, Wadajir District, </h4>
								<span>Mogadishu Somalia.</span>
							</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
		<!-- main header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- website logo -->
                    <div class="logo-header mostion logo-dark">
						<a href="{{url('/')}}"><img src="{{asset('theme/images/logo-2.png')}}" alt="{{$Settings->sitename}}"></a>
					</div>
                    <!-- nav toggle button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
						<span></span>
						<span></span>
						<span></span>
					</button>
                    <!-- extra nav -->
                    <div class="extra-nav">
                        <div class="extra-cell">
                            <button id="quik-search-btn" type="button" class="site-button-link"><i class="la la-search"></i></button>
						</div>
                    </div>
                    <!-- Quik search -->
                    <div class="dlab-quik-search ">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type Your Keyword">
                            <span id="quik-search-remove"><i class="ti-close"></i></span>
                        </form>
                    </div>
                    <!-- main nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-start" id="navbarNavDropdown">
						<div class="logo-header d-md-block d-lg-none">
							<a href="{{url('/')}}"><img src="{{asset('theme/images/logo-2.png')}}" alt="{{$Settings->sitename}}"></a>
						</div>
                        <ul class="nav navbar-nav">
							<li>
								<a href="{{url('/')}}">Home <i style="font-size: 18px;" class="la la-home"></i> </a>

							</li>
							<li>
								<a href="{{url('/')}}/about-us">About Us <i style="font-size: 18px;" class="la la-info"></i> </a>

							</li>
							<li>
								<a href="{{url('/')}}/the-company">The Company </a>

							</li>
							<li>
								<a href="{{url('/')}}/portfolios">Our Projects</a>

							</li>
							{{-- <li class="active has-mega-menu homedemo"> <a href="javascript:;">Projects<i class="fa fa-chevron-down"></i></a>
								<ul class="mega-menu">
									<li><a href="{{url('/')}}"><img src="demo/pic1.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Default</span></a></li>
									<li><a href="index-2.html"><img src="demo/pic2.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Oil/Gas Plant</span></a></li>
									<li><a href="index-3.html"><img src="demo/pic3.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Steel Plant</span></a></li>
									<li><a href="index-4.html"><img src="demo/pic4.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Factory</span></a></li>
									<li><a href="index-5.html"><img src="demo/pic5.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Construct</span></a></li>
									<li><a href="index-6.html"><img src="demo/pic6.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Solar Plant</span></a></li>
									<li><a href="index-7.html"><img src="demo/pic7.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Food Industry</span></a></li>
									<li><a href="index-8.html"><img src="demo/pic8.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Agriculture</span></a></li>
									<li><a href="index-9.html"><img src="demo/pic9.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Ship Industry</span></a></li>
									<li><a href="index-10.html"><img src="demo/pic10.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Leather Industry</span></a></li>
									<li><a href="index-11.html"><img src="demo/pic11.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Nuclear Plant</span></a></li>
									<li><a href="index-12.html"><img src="demo/pic12.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Beer Factory</span></a></li>
									<li><a href="index-13.html"><img src="demo/pic13.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Mining Industry</span></a></li>
									<li><a href="index-14.html"><img src="demo/pic14.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Car Industry</span></a></li>
									<li><a href="index-15.html"><img src="demo/pic15.jpg')}}" alt="{{$Settings->sitename}}"><span>Home - Plastic Industry</span></a></li>
								</ul>
							</li> --}}

							<li>
								<a href="{{url('/')}}/services">Services </a>

							</li>

							<li>
								<a href="{{url('/')}}/latest-news">Latest News </a>

							</li>

							<li>
								<a href="{{url('/')}}/contact-us">Contact Us &nbsp; <i style="font-size: 18px;" class="la la-phone"></i></a>

							</li>
						</ul>
						<div class="dlab-social-icon">
							<ul>
								<li><a class="site-button facebook sharp-sm outline fa fa-facebook" href="javascript:void(0);"></a></li>
								<li><a class="site-button twitter sharp-sm outline fa fa-twitter" href="javascript:void(0);"></a></li>
								<li><a class="site-button linkedin sharp-sm outline fa fa-linkedin" href="javascript:void(0);"></a></li>
								<li><a class="site-button instagram sharp-sm outline fa fa-instagram" href="javascript:void(0);"></a></li>
							</ul>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main header END -->
    </header>
    <!-- header END -->

    @yield('content')

	<!-- Footer -->
    <footer class="site-footer style2">
		<!-- newsletter part -->
        {{-- <div class="dlab-newsletter">
            <div class="container">
                <div class="ft-contact wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
					<div class="ft-contact-bx">
						<img src="{{asset('theme/images/icon/icon1.png')}}" alt="{{$Settings->sitename}}"/>
						<h4 class="title">Address</h4>
						<p>Demo Address #8901 Marmora Road Chi Minh City, Somalia</p>
					</div>
					<div class="ft-contact-bx">
						<img src="{{asset('theme/images/icon/icon2.png')}}" alt="{{$Settings->sitename}}"/>
						<h4 class="title">Phone</h4>
						<p>+254723014032 <br> +254723014032</p>
					</div>
					<div class="ft-contact-bx">
						<img src="{{asset('theme/images/icon/icon3.png')}}" alt="{{$Settings->sitename}}"/>
						<h4 class="title">Email Contact</h4>
						<p>info@apexeng.com<br>info@apexeng.com</p>
					</div>
				</div>
            </div>
        </div> --}}
        <!-- footer top part -->
		<!-- Footer Info -->
		{{-- <div class="section-full p-t50 p-b20 bg-primary text-white overlay-primary-dark footer-info-bar wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm br-col-w1">
							<div class="icon-content">
								<h5 class="dlab-tilte">
									<span class="icon-sm"><i class="ti-location-pin"></i></span>
									Company Address
								</h5>
								<p class="op7"> demo address #8901 Marmora Road Chi Minh City, Somalia</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm br-col-w1">
							<div class="icon-content">
								<h5 class="dlab-tilte">
									<span class="icon-sm"><i class="ti-email"></i></span>
									E-mail
								</h5>
								<p class="m-b0 op7">info@apexengltd.com</p>
								<p class="op7">hello@apexengltd.com</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm br-col-w1">
							<div class="icon-content">
								<h5 class="dlab-tilte">
									<span class="icon-sm"><i class="ti-mobile"></i></span>
									Phone Numbers
								</h5>
								<p class="m-b0 op7">Mobile : +00 234 678 9012</p>
								<p class="op7">Phone : +0 1234 5678 90</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 m-b30">
						<div class="icon-bx-wraper bx-style-1 p-a20 radius-sm br-col-w1">
							<div class="icon-content">
								<h5 class="dlab-tilte">
									<span class="icon-sm"><i class="ti-alarm-clock"></i></span>
									Office Hours
								</h5>
								<p class="m-b0 op7">Mon To Sat - 08.00-18.00</p>
								<p class="op7">Sunday - Close</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
		<!-- Footer Info End -->
        <!-- Footer Top -->
		<div class="footer-top">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="widget widget_about">
							<div class="footer-logo logo-dark">
								<a href="{{url('/')}}"><img src="{{asset('theme/images/logo-2.png')}}" alt="{{$Settings->sitename}}"/></a>
							</div>
							<p>Apex Engineering Limited</p>
							<div class="widget widget_getintuch">
								<ul>
									<li><i class="ti-location-pin"></i>{{$Settings->address}} <hr></li>
									<li><i class="ti-mobile"></i> {{$Settings->mobile_one}} (24/7 Support Line)</li>
									<li><i class="ti-email"></i> {{$Settings->email}}</li>
								</ul>
							</div>
							<ul class="list-inline m-a0">
								<li><a href="{{$Settings->facebook}}" class="site-button-link facebook button-md"><i class="fa fa-facebook"></i></a></li>
								{{-- <li><a href="{{$Settings->email}}" class="site-button-link google-plus button-md"><i class="fa fa-google-plus"></i></a></li> --}}
								<li><a href="{{$Settings->linkedin}}" class="site-button-link linkedin button-md"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="{{$Settings->instagram}}" class="site-button-link instagram button-md"><i class="fa fa-instagram"></i></a></li>
								<li><a href="{{$Settings->twitter}}" class="site-button-link twitter button-md"><i class="fa fa-twitter"></i></a></li>
							</ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget">
                            <h4 class="footer-title">Usefull Link</h4>
                            <ul class="list-2">
                                <li><a href="{{url('/')}}/about-us">About Us</a></li>
                                <li><a href="{{url('/')}}/latest-news">Blog</a></li>
                                <li><a href="{{url('/')}}/services">Services</a></li>
                                <li><a href="{{url('/')}}/portfolios">Projects </a></li>
                                <li><a href="{{url('/')}}/contact-us">Help Desk </a></li>
                                <li><a href="{{url('/')}}/the-company">The Company</a></li>
                                <li><a href="{{url('/')}}/contact-us">Contact</a></li>
								<li><a href="{{url('/')}}/terms-and-conditions">Terms & Conditions</a></li>
								<li><a href="{{url('/')}}/copyright">Copyright</a></li>
								<li><a href="{{url('/')}}/privacy-policy">Privacy Policy</a></li>
                            </ul>
                        </div>
						<div class="widget">
                            <h4 class="footer-title mb-2">Newsletter</h4>
							<p>Sign Up To Get Updates on new articles done by Apex Engineering Limited</p>
							<div class="subscribe-form m-b20 m-t30">
								<form class="dzSubscribe" action="{{url('/news-letters')}}" method="post">
									{{csrf_field()}}
									<div style="color:#000000" class="dzSubscribeMsg"></div>
									<div class="input-group">
										<input name="user_email" required="required" class="form-control radius-no" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="site-button radius-no">SEND</button>
										</span>
									</div>
									<br>
									{{-- Capture --}}
									<div class="col-lg-12 col-md-12" id="TheCapcha">
										<div class="g-recaptcha" data-sitekey="6LcWh6McAAAAAI_oVHiM3bSfV06hbomYT47J2XUA" data-callback="correctCaptcha"></div>
										<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=en"></script>
									</div>
									{{-- Capture --}}
								</form>
							</div>
						</div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="widget recent-posts-entry">
                            <h4 class="footer-title">Recent Post</h4>
							<div class="widget-post-bx">
								<?php $Blogs = DB::table('blogs')->orderBy('id','DESC')->limit('3')->get(); ?>
								@foreach($Blogs as $blog)
								<div class="widget-post clearfix">
									<div class="dlab-post-media">
										<img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" width="200" height="143" alt="{{$Settings->sitename}}">
									</div>
									<div class="dlab-post-info">
										<div class="dlab-post-meta">
											<?php
                                                    $RawDate = $blog->created_at;
                                                    $FormatDate = strtotime($RawDate);
                                                    $Month = date('M',$FormatDate);
                                                    $Date = date('D',$FormatDate);
                                                    $date = date('d',$FormatDate);
                                                    $Year = date('Y',$FormatDate);
                                                ?>

											<ul>
												<li class="post-date"> <strong>{{$date}} {{$Month}}</strong> </li>
												<li class="post-author"> By <a href="{{url('/')}}/latest-news/{{$blog->slung}}">{{$blog->author}} </a> </li>
											</ul>
										</div>
										<div class="dlab-post-header">
											<h6 class="post-title"><a href="{{url('/')}}/latest-news/{{$blog->slung}}">{{$blog->title}}</a></h6>
										</div>
									</div>
								</div>
								@endforeach
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- Footer Top End -->
    </footer>
	{{-- NewsForm --}}
	@include('front.newsForm')
    <!-- Footer End -->
    <button class="scroltop style1 radius" type="button"><i class="fa fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
 <script src="{{asset('theme/js/combining.js')}}"></script>



<script>
	Industry.handleMasonryFilter();
</script>
@include('front.newsletter')
@include('schema')
</body>
@endforeach
</html>
