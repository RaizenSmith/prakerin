@extends('layouts.frontend')
@section('content')
<div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">
                    <div class="post-content-area mb-100">
                        <!-- Catagory Area -->
                        
                        <div class="world-catagory-area">
                            
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="title">Lifestyle</li>
                                @foreach ($artikel as $item)
                                <li class="nav-item">
                                    <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">{{$item->kategori->nama_kategori}}</a>
                                </li>@endforeach
                            </ul>

                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <!-- Single Blog Post -->
                                    @foreach ($artikel as $data)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('assets/img/artikel/'.$data->foto.'')}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="/blog/{{$data->slug}}" class="headline">
                                                <h5>{{$data->judul}}</h5>
                                            </a>
                                            <p>{!! str_limit($data->konten,150) !!}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="tab-pane fade" id="world-tab-5" role="tabpanel" aria-labelledby="tab5">
                                    <!-- Single Blog Post -->
                                    @foreach ($artikel as $data)
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{ asset('assets/img/artikel/'.$data->foto.'')}}" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>{{$data->judul}}</h5>
                                            </a>
                                            <p>{!! str_limit($data->konten,150) !!}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b19.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b20.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b21.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b23.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Single Blog Post -->
                                    <div class="single-blog-post post-style-4 d-flex align-items-center">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="img/blog-img/b24.jpg" alt="">
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                            </a>
                                            <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                        
                    </div>
                    
                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">
                    <div class="post-sidebar-area">
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">About World</h5>
                            <div class="widget-content">
                                <p>HomelyTone adalah sebuah aplikasi web yang menyajikan artikel artikel seputar dunia permusikan baik artis maupun judul musik yang ada di indonesia dan alat alat musik
                                </p>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Top Stories</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b11.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b13.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b14.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b10.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                                <!-- Single Blog Post -->
                                <div class="single-blog-post post-style-2 d-flex align-items-center widget-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b12.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5 class="mb-0">How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Stay Connected</h5>
                            <div class="widget-content">
                                <div class="social-area d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                    <a href="#"><i class="fa fa-vimeo"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-google"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Widget Area -->
                        <div class="sidebar-widget-area">
                            <h5 class="title">Today’s Pick</h5>
                            <div class="widget-content">
                                <!-- Single Blog Post -->
                                <div class="single-blog-post todays-pick">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="img/blog-img/b22.jpg" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content px-0 pb-0">
                                        <a href="#" class="headline">
                                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Load More btn -->
            <div class="row">
                <div class="col-12">
                    <div class="load-more-btn mt-50 text-center">
                        <a href="#" class="btn world-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
