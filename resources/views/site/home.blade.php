@extends('site.layouts.master')

@section('title')
    {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')

@endsection


@section('content')

    <section class="awe-section-1">
        <div class="owl-slideshow owl-carousel not-dqowl" data-md-items='1' data-sm-items='1' data-xs-items="1"
             data-margin='0'>

            @foreach($banners as $banner)
                <div class="item">
                    <a href="#" class="clearfix">
                        <img src="{{ $banner->image->path ?? '' }}"
                             alt="">
                    </a>
                </div>

            @endforeach




        </div><!-- /.products -->
    </section>




    <section class="awe-section-2">
        <!-- Field Work -->


        <div class="main_container_top">
            <section class="field_work_main">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="bwt_title_main">
                                <h2><a href="#">Giới thiệu</a></h2>
                            </div>
                            <div class="field_work_short">
                                {!! $config->introduction !!}
                            </div>
                        </div>
                        <div class="col-xs-12">


                            <div id="field_work_nav_list_action" class="field_work_nav_list hidden-xs">
                                <div class="field_work_nav_list_box">
                                    <ul class="field_work_short_tab list_link">

                                        <li class="active">
                                            <i class="" aria-hidden="true"></i><a data-toggle="tab" href="#menu-1">Dịch vụ của chúng tôi</a>
                                        </li>

                                    </ul>

                                </div>

{{--                                <div class="field_work_nav_list_box_action nav_ hidden">--}}
{{--                                    <a id="icon_prev" class="field_work_nav_list_icon prev" title="Lùi"--}}
{{--                                       data-toggle="tooltip" data-placement="top"><i class="fa fa-caret-left"></i></a>--}}
{{--                                    <a id="icon_next" class="field_work_nav_list_icon next" title="Tiến"--}}
{{--                                       data-toggle="tooltip" data-placement="top"><i class="fa fa-caret-right"></i></a>--}}
{{--                                </div>--}}
                            </div>

                            <style>
                                /* Ép owl-item con .col-xs-12 thành flex container để .product-box stretch full height */
                                .owl-field-work .owl-item > .col-xs-12 {
                                    display: flex;
                                }

                                /* Box chính: flex cột */
                                .owl-field-work .product-box {
                                    display: flex;
                                    flex-direction: column;
                                    width: 100%;
                                }

                                /* Thumbnail giữ tỉ lệ 16:9, ảnh cover */
                                .field_work_short_tab_content_img {
                                    position: relative;
                                    width: 100% !important;
                                    padding-top: 56.25%; /* 16:9 */
                                    overflow: hidden;
                                }
                                .field_work_short_tab_content_img img {
                                    position: absolute;
                                    top: 0; left: 0;
                                    width: 100% !important;
                                    height: 100%;
                                    object-fit: cover;
                                }

                                /* Info section giãn đều, padding đẹp */
                                .field_work_short_tab_content_title {
                                    flex: 1;
                                    display: flex;
                                    flex-direction: column;
                                    padding-top: 10px;
                                }
                                .field_work_short_tab_content_title h3 {
                                    margin: 0 0 0.5em;
                                    font-size: 1.1rem;
                                }
                                /* Clamp 3 dòng cho đoạn mô tả */
                                .field_work_short_tab_content_title p {
                                    margin: 0;
                                    flex: 1;
                                    overflow: hidden;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 3;
                                    -webkit-box-orient: vertical;
                                }













                                .field_work_short_tab_content_title {
                                    background: #fdfdfd;              /* nền nhẹ */
                                    border-radius: 8px;               /* bo góc mềm mại */
                                    box-shadow: 0 4px 12px rgba(0,0,0,0.05); /* bóng nhẹ */
                                    position: relative;
                                    overflow: hidden;
                                }

                                /* Tiêu đề */
                                .field_work_short_tab_content_title h3 {
                                    margin: 0 0 0.5em;
                                    font-size: 1.1rem;
                                    line-height: 1.3;
                                    display: -webkit-box;
                                    -webkit-box-orient: vertical;
                                    -webkit-line-clamp: 2; /* chỉ hiển thị 2 dòng */
                                    overflow: hidden;
                                }

                                /* Đảm bảo link trong tiêu đề cũng tính clamp */
                                .field_work_short_tab_content_title h3 a {
                                    display: inline-block; /* hoặc block tuỳ layout */
                                    color: inherit;
                                    text-decoration: none;
                                }
                                .field_work_short_tab_content_title h3 a:hover {
                                    color: #007bff;
                                }

                                /* Thanh nhấn mạnh dưới tiêu đề */
                                .field_work_short_tab_content_title h3::after {
                                    content: "";
                                    display: block;
                                    width: 40px;
                                    height: 3px;
                                    background: #007bff;
                                    border-radius: 2px;
                                    position: absolute;
                                    bottom: -6px;
                                    left: 0;
                                }

                                /* Đoạn mô tả */
                                .field_work_short_tab_content_title p {
                                    margin: 0;
                                    color: #555;
                                    line-height: 1.6;
                                    /*font-size: 0.95rem;*/
                                }

                            </style>
                            <div class="field_work_nav_list_box hidden-lg hidden-md hidden-sm visibily-xs">
                                <ul class="field_work_short_tab">
                                    <li class="field_work_short_action"><span>Dịch vụ của chúng tôi</span>
                                    <ul class="field_work_short_content">


                                    </ul>
                                </ul>
                            </div>

                            <div class="tab-content margin-top-30">


                                <div id="menu-1" class="tab-pane fade in  active">
                                    <div class="row">
                                        <div class="owl-field-work owl-carousel" data-md-items='4' data-sm-items='2'
                                             data-xs-items="1" data-margin='0'>


                                            @foreach($services as $service)
                                                <div class="col-xs-12">
                                                    <div class="product-box field_work_short_tab_content ">

                                                        <div class="product-thumbnail field_work_short_tab_content_img ">

                                                            <a href="{{ route('front.getServiceDetail', $service->slug) }}"
                                                               title="{{ $service->name }}">
                                                                <img
                                                                    src="{{ $service->image->path ?? '' }}"
                                                                    alt="{{ $service->name }}">
                                                            </a>
                                                        </div>
                                                        <div class="product-info field_work_short_tab_content_title">
                                                            <h3><a href="{{ route('front.getServiceDetail', $service->slug) }}"
                                                                   title="{{ $service->name }}">{{ $service->name }}</a></h3>

                                                            <p title="{{ $service->description }}">{{ $service->description }}</p>

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
                </div>
            </section>
        </div>
        <!-- Field Work -->
    </section>



<style>
    .news_home_main {
        /* gradient từ xanh đậm xuống xanh nhạt */
        background: linear-gradient(135deg, #004A9F 0%, #006FCC 100%);
    }
</style>
    <section class="awe-section-3">
        <!-- News -->
        <section class="news_home_main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="bwt_title_main">
                            <h2><a href="#">Tin tức & Sự kiện</a></h2>
                        </div>
                    </div>
                    @if($posts->count())
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                            <!-- Bai viet big destop-->
                            <div class="col=xs-12 col-sm-12 col-md-6 col-lg-6 mobi_big_blog">

                               @php
                                   $firstBlog = $posts->first();
                                   $blogs = $posts->slice(1)->values();

                               @endphp

                                <div class="news_home_content">
                                    <figure class="news_home_content_img">

                                        <a href="khu-phuc-hop-ascott-waterfront-saigon.html">
                                            <picture>
                                                <source media="(max-width: 480px)"
                                                        srcset="{{ $firstBlog->image->path ?? '' }}">
                                                <source media="(min-width: 481px) and (max-width: 767px)"
                                                        srcset="{{ $firstBlog->image->path ?? '' }}">
                                                <source media="(min-width: 768px) and (max-width: 1023px)"
                                                        srcset="{{ $firstBlog->image->path ?? '' }}">
                                                <source media="(min-width: 1024px) and (max-width: 1199px)"
                                                        srcset="{{ $firstBlog->image->path ?? '' }}">
                                                <source media="(min-width: 1200px)"
                                                        srcset="{{ $firstBlog->image->path ?? '' }}">
                                                <img
                                                    src="{{ $firstBlog->image->path ?? '' }}"
                                                    title="{{ $firstBlog->name }}"
                                                    alt="{{ $firstBlog->name }}">
                                            </picture>
                                        </a>

                                    </figure>
                                    <div class="news_home_content_short_big">
                                        <div class="news_home_content_short_time"><i class="fa fa-clock-o"></i>{{\Illuminate\Support\Carbon::parse($firstBlog->created_at)->format('d/m/Y H:i')}}
                                        </div>

                                        <div class="news_home_content_short_info">
                                            <a href="khu-phuc-hop-ascott-waterfront-saigon.html">{{ $firstBlog->name }}</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- End Bai viet big destop -->

                            <style>
                                /* Giới hạn tiêu đề (nội dung của <h3>) chỉ 2 dòng */
                                .news_home_content_short_title a {
                                    display: -webkit-box;
                                    -webkit-box-orient: vertical;
                                    -webkit-line-clamp: 2; /* số dòng tối đa */
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    line-height: 1.3em;    /* nhớ để phù hợp với clamp */
                                    max-height: calc(1.3em * 2);
                                }

                                /* Giới hạn phần intro (div.news_home_content_short_info) chỉ 3 dòng */
                                .news_home_content_short_info {
                                    display: -webkit-box;
                                    -webkit-box-orient: vertical;
                                    -webkit-line-clamp: 3; /* số dòng tối đa */
                                    overflow: hidden;
                                    text-overflow: ellipsis;
                                    line-height: 1.4em;    /* nhớ để phù hợp với clamp */
                                    max-height: calc(1.4em * 3);
                                }

                            </style>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="row">

                                    @foreach($blogs as $blog)
                                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 small-blog-home">
                                            <div class="news_home_content">
                                                <figure class="news_home_content_img">

                                                    <a href="{{ route('front.blogDetail', $blog->slug) }}">
                                                        <picture>
                                                            <source media="(max-width: 480px)"
                                                                    srcset="{{ $blog->image->path ?? '' }}">
                                                            <source media="(min-width: 481px) and (max-width: 767px)"
                                                                    srcset="{{ $blog->image->path ?? '' }}">
                                                            <source media="(min-width: 768px) and (max-width: 1023px)"
                                                                    srcset="{{ $blog->image->path ?? '' }}">
                                                            <source media="(min-width: 1024px) and (max-width: 1199px)"
                                                                    srcset="{{ $blog->image->path ?? '' }}">
                                                            <source media="(min-width: 1200px)"
                                                                    srcset="{{ $blog->image->path ?? '' }}">
                                                            <img
                                                                src="{{ $blog->image->path ?? '' }}"
                                                                title="{{ $blog->name }}"
                                                                alt="{{ $blog->name }}i">
                                                        </picture>
                                                    </a>

                                                    <div class="news_home_content_icon">
                                                        <a href="{{ route('front.blogDetail', $blog->slug) }}"
                                                           title="{{ $blog->name }}"><i
                                                                class="fa fa-expand"></i></a>
                                                    </div>
                                                </figure>
                                                <div class="news_home_content_short">
                                                    <div class="news_home_content_short_time"><i class="fa fa-clock-o"></i>
                                                        {{\Illuminate\Support\Carbon::parse($blog->created_at)->format('d/m/Y H:i')}}
                                                    </div>
                                                    <h3 class="news_home_content_short_title"><a
                                                            href="{{ route('front.blogDetail', $blog->slug) }}" title="{{ $blog->name }}">{{ $blog->name }}</a></h3>
                                                    <div class="news_home_content_short_info" title=" {{ $blog->intro }}">
                                                        {{ $blog->intro }}
                                                    </div>
                                                    <div class="news_home_content_short_readmore">
                                                        <a href="{{ route('front.blogDetail', $blog->slug) }}">Xem tiếp <span><i
                                                                    class="fa fa-arrow-circle-o-right"></i></span></a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    @endforeach


                                </div>
                            </div>
                        </div>
                    @endif


                </div>
            </div>
        </section>
        <!-- End News -->
    </section>


    <style>
        /* Card gọn giữa + dễ đọc */
        .dtkh{
            --brand:#D32F2F;                 /* đỏ thương hiệu */
            max-width: min(980px, 92vw);     /* thu gọn bề ngang */
            margin-inline: auto;             /* căn giữa */
            padding: clamp(16px, 3vw, 28px);
            box-sizing: border-box;
            background:#fff;
            border:1px solid #eee;
            border-radius:16px;
            box-shadow:0 8px 24px rgba(0,0,0,.06);
            color:#222;
        }

        /* Đoạn giới thiệu */
        .dtkh .field_work_short{
            margin:0;
            font-size:clamp(1rem, 0.95rem + .3vw, 1.825rem);
            line-height:1.75;
        }

        /* Slogan in nghiêng, kiểu blockquote nhẹ */
        .dtkh > i{
            font-size: 1.525rem;
            display:block;
            margin-top:14px;
            font-style:italic;               /* đảm bảo in nghiêng */
            color:#444;
            position:relative;
            padding:14px 16px 14px 44px;
            border-left:3px solid var(--brand);
            background:linear-gradient(90deg, rgba(211,47,47,.06), rgba(211,47,47,0));
            border-radius:10px;
        }

        /* Dấu ngoặc kép trang trí */
        .dtkh > i::before{
            content:"“";
            position:absolute;
            left:12px; top:2px;
            font-size:36px; line-height:1;
            color:var(--brand);
            opacity:.9;
        }

        /* Mobile tinh chỉnh nhẹ */
        @media (max-width:600px){
            .dtkh{ padding: 16px 14px; }
            .dtkh > i{ padding-left:40px; }
            .dtkh > i::before{ font-size:30px; left:10px; top:4px; }
        }

    </style>

    <section class="awe-section-4">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="content-page page_develop padding-bottom-50">
                        <div class="page-mid">

                            <div class="dtkh padding-top-50">
                                <div class="bwt_title_main">
{{--                                    <h2><a href="#">Khách hàng tiêu biểu</a></h2>--}}
                                </div>
                                <div class="field_work_short">
                                    Trên hành trình kiến tạo chuẩn mực minh bạch và phát triển bền vững, chúng tôi khẳng định vị thế là công ty kiểm toán, kế toán, thuế và thẩm định giá uy tín hàng đầu – nơi hội tụ niềm tin, sự chính trực và giá trị trường tồn cho doanh nghiệp.
                                </div>
                                <i>Chúng tôi hợp tác với khách hàng để kiến tạo tương lai, niềm tin và giá trị</i>
                            </div>

                            <div class="header_top_brands">

{{--                                <div class="row">--}}
{{--                                    <div class="owl-brands owl-carousel" data-md-items='6' data-sm-items='3' data-xs-items="2"--}}
{{--                                         data-margin='0'>--}}

{{--                                        @foreach($partners as $partner)--}}
{{--                                            <div class="col-xs-12">--}}
{{--                                                <a href="{{ $partner->link }}" title="{{ $partner->name }}" target="_blank">--}}
{{--                                                    <img src="{{ $partner->image->path ?? '' }}"--}}
{{--                                                         alt="{{ $partner->name }}">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}





{{--                                    </div>--}}

{{--                                </div>--}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>




{{--    <section class="awe-section-5">--}}
{{--        <!-- Feedback Customers -->--}}
{{--        <section class="feedback_customers">--}}
{{--            <div class="container">--}}
{{--                <div class="feedback_customers_inner">--}}
{{--                    <div id="sync1" class="owl-carousel owl-theme not-dqowl">--}}

{{--                        @foreach($reviews as $review)--}}
{{--                            <div class="item">--}}
{{--                                <figure class="feedback_customers_icon">--}}
{{--                                    <img--}}
{{--                                        src="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/dau-hoi6008.png?1753153760720"--}}
{{--                                        alt="">--}}
{{--                                </figure>--}}
{{--                                <div class="feedback_customers_content text-center">--}}
{{--                                    <em>{{ $review->message }}</em>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}

{{--                    </div>--}}
{{--                    <div class="feedback_customers_inner_line"></div>--}}
{{--                    <div id="sync2" class="owl-carousel owl-theme not-dqowl">--}}

{{--                        @foreach($reviews as $review)--}}
{{--                            <div class="item">--}}
{{--                                <figure class="feedback_customers_avatar_icon">--}}
{{--                                    <img--}}
{{--                                        src="{{ $review->image->path ?? '' }}"--}}
{{--                                        alt="{{ $review->name }}">--}}
{{--                                </figure>--}}
{{--                                <div class="feedback_customers_avatar_content">--}}
{{--                                    <h2><strong>{{ $review->name }}</strong></h2>--}}
{{--                                    <em>{{ $review->position }}</em>--}}
{{--                                    <div class="feedback_customers_avatar_content_star">--}}
{{--                                        <i class="fa fa-star"></i>--}}
{{--                                        <i class="fa fa-star"></i>--}}
{{--                                        <i class="fa fa-star"></i>--}}
{{--                                        <i class="fa fa-star"></i>--}}
{{--                                        <i class="fa fa-star"></i>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}


{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        <!-- End Feedback Customers -->--}}
{{--    </section>--}}

@endsection

@push('scripts')
@endpush
