@extends('front.master')
@section('content')
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url({{asset('theme/images/banner/bnr1.jpg')}});">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Latest News</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Latest News</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
        <!-- inner page banner END -->
        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- blog grid -->
                    <div id="masonry" class="dlab-blog-grid-3">
                        @foreach($Blogs as $blog)
                        <div class="post card-container col-lg-4 col-md-6 col-sm-12">
                            <div class="blog-post blog-grid blog-rounded blog-effect1">
                                <div class="dlab-post-media">
                                    <img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" width="200" height="143" alt="">
                                </div>
                                <div class="dlab-post-info  p-a20 border-1">
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
                                            <li class="post-author"> By <a href="javascript:void(0);">{{$blog->author}} </a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-header">
                                        <h6 class="post-title"><a href="{{url('/')}}/latest-news/{{$blog->slung}}">{{$blog->title}}</a></h6>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- blog grid END -->
                    <!-- Pagination -->
                    <div class="pagination-bx clearfix col-md-12 text-center">
						<?php echo $Blogs; ?>
					</div>

                    <!-- Pagination END -->
                </div>
            </div>
        </div>
    </div>
    <!-- Content END-->
    @include('front.home.pretty')

@endsection
