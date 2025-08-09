<header class="header_main" ng-controller="headerPage">
    {{--    <div class="header_top_slogan">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-xs-12">--}}
    {{--                    <h2>Chào mừng bạn đến với {{ $config->web_title }}</h2>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}

    <style>
        .header_top_slogan {
            position: relative;
            z-index: 1000; /* luôn nằm trên cùng */
        }

        .header_top_slogan {
            background: #f5f5f5;
            padding: 6px 0;
        }
        .top-contact {
            font-size: 14px;
            line-height: 1.4;
        }
        .contact-group .contact-item {
            display: inline-block;
            margin-right: 20px;
            color: #333;
        }
        .contact-group .contact-item i {
            color: #007bff;
            margin-right: 6px;
        }
        /* style cho dropdown */
        .lang-switcher {
            margin-top: 2px; /* căn dòng cho đẹp */
        }
        .lang-switcher .lang-select {
            display: inline-block;
            width: 130px;
            padding: 3px 6px;
            font-size: 13px;
            line-height: 1.4;
            border-radius: 4px;
            border: 1px solid #ccc;
            background: #fff;
        }
        @media (max-width: 480px) {
            .top-contact .contact-group,
            .top-contact .lang-switcher {
                float: none !important;
                text-align: center;
                width: 100%;
                margin-bottom: 6px;
            }
            .lang-switcher .lang-select {
                width: 80%;
            }
        }

        @media (max-width: 767px) {
            /* 1) Hiện block top-contact, xoá mọi float nếu có */
            .header_top_slogan .top-contact {
                display: block !important;
                text-align: center !important;
                padding: 8px 0;
            }
            /* 2) Nhóm địa chỉ+hotline full-width, block, căn giữa */
            .header_top_slogan .contact-group {
                float: none !important;
                display: block !important;
                margin: 0 auto 8px !important;
                width: 100% !important;
            }
            /* 3) Mỗi item inline, cách đều */
            .header_top_slogan .contact-item {
                display: inline-block !important;
                margin: 0 10px !important;
                font-size: 13px;
                color: #333;
            }
            /* 4) Select ngôn ngữ full-width, block, căn giữa */
            .header_top_slogan .lang-switcher {
                float: none !important;
                display: block !important;
                margin: 0 auto !important;
                width: 100% !important;
            }
            .header_top_slogan .lang-select {
                width: 80% !important;
                max-width: 200px;
                margin: 0 auto;
                display: block;
                font-size: 13px;
                padding: 4px 8px;
            }
        }

        /* Gỡ bỏ width cố định trên mobile */
        @media (max-width: 767px) {
            .header_top_slogan .container {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 15px !important;
                padding-right: 15px !important;
            }
        }

    </style>


    <div class="header_top_slogan">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="top-contact clearfix">
                        <!-- phần địa chỉ + hotline -->
                        <div class="contact-group pull-left">
                            <div class="contact-item">
                                <i class="fa fa-map-marker"></i>
                                <span>{{ $config->address_company }}</span>
                            </div>
                            <div class="contact-item">
                                <i class="fa fa-phone"></i>
                                <span>{{ $config->hotline }}</span>
                            </div>
                        </div>
                        <!-- select ngôn ngữ bên phải -->
                        <div class="lang-switcher pull-right">
                            <select class="form-control lang-select"  id="siteLang" Tiếng Việtonchange="translateheader(this.value)">
                                <option value="vi">Tiếng Việt</option>
                                <option value="en">Tiếng Anh</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <style>
        .header_bottom .container {
            width: 1400px;
        }

        .bread-crumb .container {
            width: 1400px;
        }

        .header_top_slogan .container {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto;
        }


    </style>

    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <!-- Menu mobile -->
                <div class="hidden-lg hidden-md visibile-sm visibile-xs">
                    <section  id="menu-mobi" class="menu_mobile menu_mobile_button">
                        <div id="menu_mobile_button_line_main">
                            <span class="menu_mobile_button_line menu_mobile_button_line_1"></span>
                            <span class="menu_mobile_button_line menu_mobile_button_line_2"></span>
                            <span class="menu_mobile_button_line menu_mobile_button_line_3"></span>
                        </div>
                    </section>
                    <nav class="menu_mobile_list" style="display:none;">
                        <div class="menu_mobile_pushmenu menu_mobile_pushmenu_left">
                            <ul class="menu_mobile_list_inner">

                                <li class="level0 "> <a href="{{ route('front.home-page') }}">Trang chủ</a></li>
                                <li class="level0 "> <a href="{{ route('front.getServices') }}">Trang chủ</a></li>
                                <li class="level0 "> <a href="{{ route('front.about_page') }}">Giới thiệu</a></li>
                                <li class="level0 "> <a href="{{ route('front.getServices') }}">Dịch vụ</a></li>
                                @foreach($postCategories as $postCate)
                                    <li class="level0 "> <a href="{{ route('front.getPostCategory', $postCate->slug) }}"
                                                            @if(in_array($postCate->slug, ['ifrs', 'esg']))
                                                                class="notranslate"
                                                            translate="no"
                                            @endif>
                                            {{ $postCate->name }}
                                        </a></li>
                                @endforeach
                                <li class="level0 "> <a href="{{ route('front.contact') }}">Liên hệ</a></li>

                            </ul>
                        </div>
                    </nav>
                </div>
                <!-- End Menu mobile -->

                <!-- Logo -->
                <div class="col-xs-6 col-sm-2 col-md-3">
                    <div class="logo">
                        <a href="{{ route('front.home-page') }}"><img src="{{ $config->image->path ?? '' }}" alt="logo " class="img-responsive" style="width: 110px"></a>
                    </div>
                </div>
                <!-- End Logo -->
                <div class="col-xs-6 col-sm-10 col-md-9">
                    <!-- Menu -->
                    <nav class="menu_main hidden-sm hidden-xs pull-right">
                        <div class="menu_main_list">
                            <ul id="nav">



                                <li class="nav-item "><a class="nav-link" href="{{ route('front.home-page') }}">Trang chủ</a></li>
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.about_page') }}">Giới thiệu</a></li>
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.getServices') }}">Dịch vụ</a></li>
                                @foreach($postCategories as $postCate)
                                    <li class="nav-item "><a class="nav-link" href="{{ route('front.getPostCategory', $postCate->slug) }}"
                                                             @if(in_array($postCate->slug, ['ifrs', 'esg']))
                                                                 class="notranslate"
                                                             translate="no"
                                            @endif
                                        >{{ $postCate->name }}</a></li>
                                @endforeach
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.contact') }}">Liên hệ</a></li>


                            </ul>
                        </div>
                    </nav>
                    <!-- End Menu -->
                    <!-- Search -->
                    <div class="searchboxlager">
                        <div class="searchfromtop">
                            <form autocomplete="off"  ng-submit="search()">
                                <input type="text" class="form-control" maxlength="70" name="query" id="search" placeholder="Nhập từ khóa tìm kiếm và ấn enter"
                                       ng-model="keywords"
                                >
                                <button type="submit" style="display:none;"></button>
                            </form>
                            <a class="hidesearchfromtop"><i class="fa fa-times"></i></a>
                        </div>
                    </div>
                    <div class="search_form_main">
                        <div class="search_form_icon"><i class="fa fa-search"></i></div>

                    </div>

                    <!-- End Search -->
                </div>



            </div>
        </div>
    </div>
</header>
