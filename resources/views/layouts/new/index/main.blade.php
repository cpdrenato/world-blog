@include('layouts.new.index.header')
<body>
    @include('layouts.new.index.navbar')

@include('layouts.new.index.slide')
    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-50">
                <div class="world-latest-articles col-12 col-lg-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 body-article-latest">
                                <div class="title">
                                    <h5>
                                        Latest Articles
                                    </h5>
                                </div>
                                @foreach($posts as $post)
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img alt="" src="{{asset('img').'/'.$post->image}}">
                                        </img>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a class="headline" href="{{ route('frontendblog.show', $post->slug) }}">
                                            <h5>
                                                {{$post->title}}
                                            </h5>
                                        </a>
                                        {{-- brief of article --}}
                                        <p>
                                            {!!$post->excerpt_html!!}
                                        </p>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p>
                                                <a class="post-author" href="#">
                                                    {{$post->auther->name}}
                                                </a>
                                                on
                                                <a class="post-date" href="#">
                                                    {{$post->date}}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <div class="next-news">
                                    {{$posts->appends(request()->only(['term', 'month', 'year']))->links()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                
                @include('layouts.new.index.sidebar')
            </div>
            {{-- 3 Post in the line --}}
            <div class="row justify-content-center col-12">
                <?php $i=0; ?>
                <!-- ========== Single Blog Post ========== -->
                @foreach($posts as $post)
                <?php 
               if($i==3)break;
               $i++; ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->
                        <div class="post-thumbnail">
                            <img alt="" src="{{asset('img').'/'.$post->image}}">
                                <!-- Post Content -->
                                <div class="post-content d-flex align-items-center justify-content-between">
                                    <!-- Catagory -->
                                    <div class="post-tag float-left">
                                        {!! $post->tags_html !!}
                                    </div>
                                    <!-- Headline -->
                                    <a class="headline" href="#">
                                        <h5>
                                            {{$post->title}}
                                        </h5>
                                    </a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>
                                            <a class="post-author" href="#">
                                                {{$post->auther->name}}
                                            </a>
                                            on
                                            <a class="post-date" href="#">
                                                {{$post->date}}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </img>
                        </div>
                    </div>
                </div>
                <div>
                </div>
                <div>
                </div>
                @endforeach
            </div>
            {{-- End 3 post in the line --}}

           
        
           {{--
            <div class="world-latest-articles">
                <div class="row justify-content-center">
                    Most popular Videos --}}
               {{--    @include('layouts.new.index.most_viewed_videos')
            {{-- End Most popular Videos
                </div>
            </div>
            --}}
            <!-- Load More btn -->
            {{--
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a class="btn world-btn" href="#">
                            Load More
                        </a>
                    </div>
                </div>
            </div>
            --}}
        </div>
    </div>
    @include('layouts.new.index.footer')
</body>