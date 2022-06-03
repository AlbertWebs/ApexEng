@extends('front.master')
@section('content')
<div class="content-area">
    <div class="container max-w900">
        @foreach($Blogs as $blog)
        <!-- blog start -->
        <div class="blog-post blog-single">
            <div class="dlab-post-meta m-b20">
                <ul>
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
                    <li class="post-author"> By <a href="javascript:void(0);">{{$blog->author}}</a> </li>
                </ul>
            </div>
            <div class="dlab-post-title">
                <h4 class="post-title m-t0"><a href="#">{{$blog->title}}</a></h4>
            </div>
            <div class="dlab-post-media dlab-img-effect zoom-slow">
                <a href="#"><img src="{{url('/')}}/uploads/blogs/{{$blog->image_one}}" alt=""></a>
            </div>
            <div class="dlab-post-text">
                <p>{!! html_entity_decode($blog->content, ENT_QUOTES, 'UTF-8') !!}</p>
                <blockquote>{!! html_entity_decode($blog->meta, ENT_QUOTES, 'UTF-8') !!}</blockquote>
            </div>
        </div>
        <!-- blog END -->
        @endforeach
    </div>
</div>
    @include('front.home.pretty')

@endsection
