@extends('site.layouts.master')

@section('title')
    Dịch vụ - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{ $config->image->path ?? '' }}
@endsection

@section('css')

@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>


                <li><strong><span>Dịch vụ</span></strong></li>


            </ul>

        </div>
    </section>

    <div class="container">
        <div class="row">
            <section class="main_container collection col-lg-12 ">
                <h1 class="title-head margin-top-20" style="font-size:24px;color:#575454;">Dịch vụ của chúng tôi</h1>
                <div class="category-products products">

                    <div class="sortPagiBar">
                        <div class="collection-filter-panel">
                        </div>
                    </div>
                    <script>
                        $(function () {

                            $(".filter-vendor .sortby-2 li").click(function () {
                                var text = $('.filter-vendor .sortby-2 li.active a').text();
                                $(".droplist .select-name").text(text);
                            });

                            if ($(".filter-vendor .sortby-2 li").hasClass('active')) {
                                var text = $('.filter-vendor .sortby-2 li.active a').text();
                                $(".droplist .select-name").text(text);

                            } else {
                                $(".droplist .select-name").text('Nhà sản xuất');
                            }


                            $(".filter-type .sortby-1 li").click(function () {
                                var text = $('.filter-type .sortby-1 li.active a').text();
                                $(".droplist1 .select-name1").text(text);
                            });
                            if ($(".filter-type .sortby-1 li").hasClass('active')) {
                                var text = $('.filter-type .sortby-1 li.active a').text();
                                $(".droplist1 .select-name1").text(text);

                            } else {
                                $(".droplist1 .select-name1").text('Loại sản phẩm');
                            }


                        });
                    </script>


                                        <style>
                                            /* 1. Ép cột thành flex để box bên trong stretch full height */
                                            .product-gird-cl {
                                                display: flex;
                                            }

                                            /* 2. Box chính: flex column */
                                            .product-box {
                                                display: flex;
                                                flex-direction: column;
                                                width: 100%;
                                            }

                                            /* 3. Thumbnail giữ tỉ lệ 16:9 */
                                            .field_work_short_tab_content_img {
                                                position: relative;
                                                width: 100%;
                                                padding-top: 56.25%; /* 9/16 */
                                                overflow: hidden;
                                            }
                                            .field_work_short_tab_content_img img {
                                                position: absolute;
                                                top: 0; left: 0;
                                                width: 100% !important;
                                                height: 100%;
                                                object-fit: cover;
                                            }

                                            /* 4. Info section stretch, padding đẹp */
                                            .field_work_short_tab_content_title {
                                                flex: 1;
                                                display: flex;
                                                flex-direction: column;
                                                padding-top: 10px;
                                            }
                                            .field_work_short_tab_content_title h3 {
                                                margin: 0 0 10px;
                                                font-size: 1.2rem;
                                                line-height: 1.3;
                                            }

                                            /* 5. Clamp description tối đa 3 dòng */
                                            .intro p {
                                                margin: 0;
                                                flex: none;
                                                display: -webkit-box;
                                                -webkit-box-orient: vertical;
                                                -webkit-line-clamp: 3;    /* chỉ 3 dòng */
                                                overflow: hidden;
                                                text-overflow: ellipsis;
                                                line-height: 1.4em;        /* phải khớp với line-clamp */
                                                max-height: calc(1.4em * 3);
                                            }




                                            .intro {
                                                background-color: #f9f9f9;    /* nền nhẹ để tách khối */
                                                padding: 12px 15px;           /* khoảng thở xung quanh */
                                                border-left: 4px solid #007bff; /* thanh nhấn mạnh bên trái */
                                                border-radius: 4px;           /* bo góc mềm mại */
                                            }

                                            .intro p {
                                                margin: 0;
                                                color: #555;                  /* màu chữ dễ đọc */
                                                /*font-size: 1rem;              !* chữ to vừa phải *!*/
                                                /*line-height: 1.6;             !* khoảng cách dòng thoáng *!*/
                                                text-align: justify;          /* đều hai bên */
                                            }

                                            /* Tùy chọn: in nghiêng nếu muốn nhấn mạnh phong cách trích dẫn */
                                            .intro p:first-letter {
                                                font-size: 1.2em;
                                                font-weight: bold;
                                            }


                                        </style>
                    <section class="products-view products-view-grid">
                        <div class="row">

                            @foreach($services as $service)
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 product-gird-cl">
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
                                                   title="{{ $service->name }}">{{ $service->name }}
                                                </a>
                                            </h3>

                                            <div class="intro" title="{{ $service->description }}">
                                                <p>{{ $service->description }}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @endforeach


                        </div>

                        <div class="text-right">
                            {{ $services->links('site.pagination.paginate2') }}
                        </div>

                    </section>

                </div>
            </section>

        </div>
    </div>

@endsection

@push('scripts')


@endpush
