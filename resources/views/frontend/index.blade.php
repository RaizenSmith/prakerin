@extends('layouts.frontend')

    {{-- <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="world-load"></div>
        </div>
    </div>
    <!-- Preloader End --> --}}

    @section('content')
    {{--  {{ Auth::user()->name }}  --}}
    

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">

        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel" >
            @foreach ($artikel as $data)
                <!-- Single Slide -->
                <div class="single-hero-slide bg-img background-overlay"><img class="background-image" src="../assets/img/artikel/{{$data->foto}}"> </div>
            @endforeach
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            <!-- Single Slide -->
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($artikel as $data)
                            
                            <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>{{ $no++ }}</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">{{ $data->judul }}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="world-latest-articles">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <div class="title">
                                <h5>Latest Articles</h5>
                            </div>
    
                            <div id="isinya">
    
                            </div>
                        </div>
    
                        <div class="col-12 col-lg-4">
                            <div class="title">
                                <h5>Most Popular Videos</h5>
                            </div>
    
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ ('assets/frontend/img/blog-img/b7.jpg')}}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                    <!-- Video Button -->
                                    <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Single Blog Post -->
                            <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.4s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ ('assets/frontend/img/blog-img/b8.jpg')}}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                    <!-- Video Button -->
                                    <a href="https://www.youtube.com/watch?v=IhnqEwFSJRg" class="video-btn"><i class="fa fa-play"></i></a>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
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

    @push('scripts')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    
    var alamat_artikel = 'api/artikel'
let no = 1;
no++;
$.ajax({
    url: alamat_artikel,
    method: "GET",
    dataType: "json",
    success: function (berhasil) {
        // console.log(berhasil)
        $.each(berhasil.data, function (key, value) {
            
            
            $(".judulnya").append(
                `
                ${value.judul}
                `
            )
        })
    }
})
});
</script>
@endpush
