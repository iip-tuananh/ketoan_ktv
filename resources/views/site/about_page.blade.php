@extends('site.layouts.master')

@section('title')Về chúng tôi - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{@$config->image->path ?? ''}}@endsection
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

                <li><strong><span>Giới thiệu</span></strong></li>

            </ul>

        </div>
    </section>
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="content-page page_develop padding-bottom-50">
                        <div class="page-slider padding-top-15">
                            <div class="home-slider owl-carousel" data-md-items='1' data-sm-items='1' data-xs-items="1"
                                 data-margin='0'>

                                @foreach($about->galleries as $banner)
                                    <div class="item">
                                        <a href="#" class="clearfix">
                                            <img src="{{ $banner->image->path ?? '' }}"
                                                 alt="">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="page-mid">
                            <!-- Field Work -->


                            <div class="main_container_top">
                                <section class="field_work_main product-develop">

                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="bwt_title_main">
                                                <h2><a href="gioi-thieu.html">Về chúng tôi</a></h2>
                                            </div>
                                            <div class="field_work_short">
                                                    {!! $about->body_text !!}
                                            </div>
                                        </div>
                                    </div>

                                </section>
                            </div>
                            <!-- Field Work -->
                            <div class="dtkh padding-top-50">
                                <div class="bwt_title_main">
                                    <h2><a href="#">Khách hàng tiêu biểu</a></h2>
                                </div>
                                <div class="field_work_short">
                                    Với mong muốn đem đến cho thị trường những sản phẩm - dịch vụ theo tiêu chuẩn quốc tế và
                                    những trải nghiệm hoàn toàn mới về phong cách sống hiện đại, ở bất cứ lĩnh vực nào cũng
                                    chứng tỏ vai trò tiên phong, dẫn dắt sự thay đổi xu hướng tiêu dùng. Chúng tôi đã làm
                                    nên những điều kỳ diệu để tôn vinh thương hiệu Việt và tự hào là một trong những Tập
                                    đoànkinh tế tư nhân hàng đầu Việt Nam.
                                </div>
                            </div>
                        </div>

                        <div class="header_top_brands">

                            <div class="row">
                                <div class="owl-brands owl-carousel" data-md-items='6' data-sm-items='3' data-xs-items="2"
                                     data-margin='0'>

                                    @foreach($partners as $partner)
                                        <div class="col-xs-12">
                                            <a href="{{ $partner->link }}" target="_blank" title="{{ $partner->name }}" >
                                                <img src="{{ $partner->image->path ?? '' }}"
                                                     alt="{{ $partner->name }}">
                                            </a>
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

@endsection

@push('scripts')


@endpush
