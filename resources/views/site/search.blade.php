@extends('site.layouts.master')

@section('title')Tìm kiếm- {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection

@section('css')

@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a  href="{{ route('front.home-page') }}" ><span >Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>


                <li><strong ><span>Tìm kiếm</span></strong></li>


            </ul>

        </div>
    </section>
    <div class="container">
        <div class="row">
            <div class="full-content-blog">
                <section class="right-content col-lg-9 col-lg-push-3">

                    <p style="font-size: 16px">Có {{ $posts->count() + $services->count() }} kết quả phù hợp với từ khóa "{{ $keyword }}"</p>

                    <style>
                        /* 1. Ép mỗi cột thành flexbox, kéo article bằng nhau */
                        .item-blog-cl {
                            display: flex;
                            padding: 10px;
                        }

                        /* 2. Article làm flex-column */
                        .item-blog-cl .blog-item {
                            display: flex;
                            flex-direction: column;
                            width: 100%;
                        }

                        /* 3. Thumbnail giữ tỉ lệ 16:9 */
                        .news_home_content_img {
                            position: relative;
                            width: 100%;
                            padding-top: 56.25%;  /* 16:9 */
                            overflow: hidden;
                        }
                        .news_home_content_img img {
                            position: absolute;
                            top: 0; left: 0;
                            width: 100%;
                            height: 100%;
                            object-fit: cover;
                        }

                        /* 4. Phần content giãn đều, padding đẹp */
                        .news_home_content_short {
                            flex: 1;
                            display: flex;
                            flex-direction: column;
                            /*padding: 15px;*/
                        }
                        .news_home_content_short_time {
                            font-size: 1.25rem;
                            color: #666;
                            margin-bottom: 8px;
                        }

                        /* 5. Tiêu đề clamp 2 dòng */
                        .news_home_content_short_title a {
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 2;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            line-height: 1.3;
                            max-height: calc(1.3em * 2);
                            margin-bottom: 8px;
                        }

                        /* 6. Mô tả clamp 3 dòng */
                        .news_home_content_short_info {
                            flex: 1;
                            font-size: 1.35rem;
                            color: #444;
                            display: -webkit-box;
                            -webkit-box-orient: vertical;
                            -webkit-line-clamp: 3;
                            overflow: hidden;
                            text-overflow: ellipsis;
                            line-height: 1.4;
                            max-height: calc(1.4em * 3);
                            margin-bottom: 12px;
                        }

                        /* 7. Đọc tiếp luôn nằm cuối */
                        .news_home_content_short_readmore {
                            margin-top: auto;
                        }
                        .news_home_content_short_readmore a {
                            color: #007bff;
                            font-weight: 500;
                        }


                    </style>
                    <div class="row">
                        <section class="list-blogs blog-main">

                            @foreach($posts as $post)
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item-blog-cl">
                                    <article class="blog-item">
                                        <figure class="news_home_content_img">

                                            <a href="{{ route('front.getPostDetail', $post->slug) }}">
                                                <picture>
                                                    <source media="(max-width: 480px)" srcset="{{ $post->image->path ?? '' }}">
                                                    <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{ $post->image->path ?? '' }}">
                                                    <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{ $post->image->path ?? '' }}">
                                                    <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{ $post->image->path ?? '' }}">
                                                    <source media="(min-width: 1200px)" srcset="{{ $post->image->path ?? '' }}">
                                                    <img src="{{ $post->image->path ?? '' }}"
                                                         title="{{ $post->name }}"
                                                         alt="{{ $post->name }}">
                                                </picture>
                                            </a>

                                            <div class="news_home_content_icon">
                                                <a href="{{ route('front.getPostDetail', $post->slug) }}" title="{{ $post->name }}"><i class="fa fa-expand"></i></a>
                                            </div>
                                        </figure>
                                        <div class="news_home_content_short">
                                            <div class="news_home_content_short_time"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}</div>
                                            <h3 class="news_home_content_short_title"><a href="{{ route('front.getPostDetail', $post->slug) }}" title="{{ $post->name }}">
                                                    {{ $post->name }}</a>
                                            </h3>
                                            <div class="news_home_content_short_info" title="{{ $post->intro }}">
                                                {{ $post->intro }}
                                            </div>
                                            <div class="news_home_content_short_readmore">
                                                <a href="{{ route('front.getPostDetail', $post->slug) }}">Xem tiếp <span><i class="fa fa-arrow-circle-o-right"></i></span></a>
                                            </div>
                                        </div>
                                    </article>
                                </div>

                            @endforeach

                           @foreach($services as $service)
                                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item-blog-cl">
                                        <article class="blog-item">
                                            <figure class="news_home_content_img">

                                                <a href="{{ route('front.getServiceDetail', $service->slug) }}">
                                                    <picture>
                                                        <source media="(max-width: 480px)" srcset="{{ $service->image->path ?? '' }}">
                                                        <source media="(min-width: 481px) and (max-width: 767px)" srcset="{{ $service->image->path ?? '' }}">
                                                        <source media="(min-width: 768px) and (max-width: 1023px)" srcset="{{ $service->image->path ?? '' }}">
                                                        <source media="(min-width: 1024px) and (max-width: 1199px)" srcset="{{ $service->image->path ?? '' }}">
                                                        <source media="(min-width: 1200px)" srcset="{{ $service->image->path ?? '' }}">
                                                        <img src="{{ $service->image->path ?? '' }}"
                                                             title="{{ $service->name }}"
                                                             alt="{{ $service->name }}">
                                                    </picture>
                                                </a>

                                                <div class="news_home_content_icon">
                                                    <a href="{{ route('front.getServiceDetail', $service->slug) }}" title="{{ $service->name }}"><i class="fa fa-expand"></i></a>
                                                </div>
                                            </figure>
                                            <div class="news_home_content_short">
                                                <div class="news_home_content_short_time"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($service->created_at)->format('d/m/Y H:i') }}</div>
                                                <h3 class="news_home_content_short_title"><a href="{{ route('front.getServiceDetail', $service->slug) }}" title="{{ $service->name }}">
                                                        {{ $service->name }}</a>
                                                </h3>
                                                <div class="news_home_content_short_info" title="{{ $service->intro }}">
                                                    {{ $service->description }}
                                                </div>
                                                <div class="news_home_content_short_readmore">
                                                    <a href="{{ route('front.getServiceDetail', $service->slug) }}">Xem tiếp <span><i class="fa fa-arrow-circle-o-right"></i></span></a>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                @endforeach
                        </section>
                    </div>




                </section>
            </div>


            <aside class="left left-content col-lg-3 col-lg-pull-9">
                @include('site.partials.aside_menu', ['postCategory' => $postCategory])

            </aside>



        </div>
    </div>
@endsection

@push('scripts')

@endpush
