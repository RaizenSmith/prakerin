(function ($) {
    "use strict";

    var browserWindow = $(window);
    var url = "api/front";

    // :: 1.0 Preloader Active Code
    browserWindow.on("load", function () {
        $("#preloader").fadeOut("slow", function () {
            $(this).remove();
        });
    });

    // :: 2.0 Slides Active Code
    if ($.fn.owlCarousel) {
        $.ajax({
            url: "api/front",
            dataType: "json",
            success: function (getdata) {
                $(".top-news").html(
                    '<div id="top-content" class="hero-slides owl-carousel"></div>'
                );
                for (var i = 0; i < getdata.data["top"].length; i++) {
                    $(".hero-slides").append(
                        '<div class="single-blog-post d-flex align-items-center mb-50"><div class="post-thumb"><a href="' +
                        getdata.data["top"][i].slug +
                        '"><img src="' +
                        getdata.data["top"][i].image +
                        '" alt=""></a></div><div class="post-data"><a href="' +
                        getdata.data["top"][i].slug +
                        '" class="post-title"><h6>' +
                        getdata.data["top"][i].title +
                        '</h6></a><div class="post-meta"><p class="post-date"><a href="' +
                        getdata.data["top"][i].slug +
                        '">2 Days Ago</a></p></div></div></div>'
                    );
                }
                var heroSlide = $("#top-content");
                heroSlide.owlCarousel({
                    items: 3,
                    lazyLoad: true,
                    margin: 30,
                    loop: true,
                    nav: false,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    smartSpeed: 1000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: 3
                        }
                    }
                });
            }
        });

        var welcomeSlide = $(".welcome-slides");
        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            autoplayTimeout: 8000,
            smartSpeed: 1000,
            autoplayHoverPause: true
        });

        welcomeSlide.on("translate.owl.carousel", function () {
            var slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data("animation");
                $(this)
                    .removeClass("animated " + anim_name)
                    .css("opacity", "0");
            });
        });

        welcomeSlide.on("translated.owl.carousel", function () {
            var slideLayer = welcomeSlide
                .find(".owl-item.active")
                .find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data("animation");
                $(this)
                    .addClass("animated " + anim_name)
                    .css("opacity", "1");
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data("delay");
            $(this).css("animation-delay", anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data("duration");
            $(this).css("animation-duration", anim_dur);
        });
    }

    // :: 3.0 Newsticker Active Code
    if ($.fn.simpleTicker) {
        $.simpleTicker($("#breakingNewsTicker"), {
            speed: 1000,
            delay: 3000,
            easing: "swing",
            effectType: "roll"
        });
    }
    // :: 4.0 Nav Active Code
    if ($.fn.classyNav) {
        $("#viralnewsNav").classyNav();
    }

    // :: 5.0 Gallery Active Code
    if ($.fn.magnificPopup) {
        $(".videoPlayer").magnificPopup({
            type: "iframe"
        });
    }

    // :: 6.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    // :: 7.0 CouterUp Active Code
    if ($.fn.counterUp) {
        $(".counter").counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 8.0 Sticky Active Code
    if ($.fn.sticky) {
        $("#stickyMenu").sticky({
            topSpacing: 0
        });
    }

    // :: 9.0 wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

    // :: 10.0 prevent default a click
    $('a[href="#"]').on("click", function ($) {
        $.preventDefault();
    });

    // :: 11.0 Search Form Active Code
    var searchbtn = $("#searchbtn");
    var viral_search_form = $(".viral-search-form");
    var navbar_toggler = $(".classy-navbar-toggler");

    searchbtn.on("click", function () {
        $(this).toggleClass("fa-close");
        viral_search_form.toggleClass("active");
    });
    navbar_toggler.on("click", function () {
        viral_search_form.removeClass("active");
    });
    navbar_toggler.on("click", function () {
        searchbtn.removeClass("fa-close");
    });

    // Get List Menu
    $.ajax({
        url: url,
        dataType: "json",
        success: function (getdata) {
            $.each(getdata.data.menu, function (key, value) {
                if (key === 0) {
                    $(".up-menu").append(
                        `
                        <li class="active"><a href="${value.slug}">${
                        value.title
                        }</a></li>
                        `
                    );
                } else
                    $(".up-menu").append(
                        `
                    <li><a href="${value.slug}">${value.title}</a></li>
                    `
                    );
            });
        }
    });

    // Get List Article
    $.ajax({
        url: url,
        dataType: "json",
        success: function (getdata) {
            $.each(getdata.data.article, function (key, value) {
                $(".article-post").append(
                    `
                    <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img src="${
                    value.image
                    }" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory">${
                    value.categories
                    }</a>
                                    <a href="#" class="post-title">
                                        <h6>${value.title}</h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#">${
                    value.author
                    }</a></p>
                                        <p class="post-date">5 Hours Ago</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `
                );
            });
        }
    });

    // Get List Trending
    $.ajax({
        url: url,
        dataType: "json",
        success: function (getdata) {
            var no = 1;
            $.each(getdata.data.trending, function (key, value) {
                $(".trending").append(
                    `
                    <div class="single-blog-post style-4">
                        <!-- Post Thumb -->
                        <div class="post-thumb">
                            <a href="${value.slug}"><img src="${
                    value.image
                    }" alt=""></a>
                            <span class="serial-number">0${no++}.</span>
                        </div>
                        <!-- Post Data -->
                        <div class="post-data">
                            <a href="${value.slug}" class="post-title">
                                <h6>${value.title}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-author">By <a href="#">${
                    value.author
                    }</a></p>
                            </div>
                        </div>
                    </div>
                    `
                );
            });
        }
    });

    // Get List Latest Article
    $.ajax({
        url: url,
        dataType: "json",
        success: function (getdata) {
            var no = 1;
            $.each(getdata.data.latest, function (key, value) {
                $(".latest").append(
                    `
                    <div class="single-blog-post style-2 d-flex align-items-center">
                        <div class="post-thumb">
                            <a href="${value.slug}"><img src="${
                    value.image
                    }" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-title">
                                <h6>${value.title}</h6>
                            </a>
                            <div class="post-meta">
                                <p class="post-date"><a href="#">7:00 AM | April 14</a></p>
                            </div>
                        </div>
                    </div>
                    `
                );
            });
        }
    });
})(jQuery);
