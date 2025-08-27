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


    @media (max-width: 767px) {
        /* 1) Hiện block top-contact, xoá mọi float nếu có */
        .header_top_slogan .top-contact {
            display: block !important;
            text-align: center !important;
            padding: 8px 0;
        }

        /* 2) Nhóm địa chỉ+hotline full-width, block, căn giữa */
        .header_top_slogan .contact-group {
            text-align: left;
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
            /*max-width: 200px;*/
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

        .header_bottom .container {
            width: 100% !important;
            max-width: 100% !important;
            padding-left: 15px !important;
            padding-right: 15px !important;
        }
    }

</style>


<style>
    .header_bottom .container {
        width: 1400px;
    }

    /*.bread-crumb .container {*/
    /*    width: 1400px;*/
    /*}*/

    .header_top_slogan .container {
        max-width: 1400px;
        width: 100%;
        margin: 0 auto;
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
        .top-contact,
        .top-contact .lang-switcher {
            float: none !important;
            text-align: right;
            width: 100%;
            margin-bottom: 6px;
        }

        .lang-switcher .lang-select {
            width: 80%;
        }
    }


    .lang-switcher {
        position: relative;
        display: inline-block;
        font-family: sans-serif;
        overflow: hidden; /* cắt mọi thứ tràn ra ngoài */
        /* nếu muốn căn phải, tùy layout */
        /* float: right; */
    }

    .lang-select {
        /* 1. Ẩn arrow mặc định */
        appearance: none;
        -webkit-appearance: none; /* Chrome, Safari, Opera */
        -moz-appearance: none; /* Firefox */

        /* 2. Kiểu nền & border */
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 4px;

        /* 3. Padding: trái/phải đủ chỗ cho arrow custom */
        padding: 0.5em 2.5em 0.5em 0.75em;

        /* 4. Kiểu chữ */
        font-size: 0.9rem;
        color: #333;
        line-height: 1.2;

        /* 5. Bóng đổ nhẹ */
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);

        cursor: pointer;
        box-sizing: border-box;

        transition: border-color .2s, box-shadow .2s;
    }

    /* 6. Arrow custom bằng pseudo-element */
    .lang-switcher::after {
        content: "\25BC"; /* Unicode mũi tên xuống ▼ */
        position: absolute;
        top: 50%;
        right: 0.75em;
        transform: translateY(-50%);
        pointer-events: none;
        font-size: 0.6em;
        color: #666;
    }

    /* 7. Hiệu ứng khi hover/focus */
    .lang-select:hover {
        border-color: #bbb;
    }

    .lang-select:focus {
        outline: none;
        border-color: #6ca0dc;
        box-shadow: 0 0 0 3px rgba(108, 160, 220, 0.3);
    }


    /* Giữ cho select không quá rộng */
    .lang-switcher {
        display: inline-block;
    }

    /* Giảm padding & font-size mặc định */
    .lang-select {
        max-width: 160px;
        font-size: 0.9rem;
        padding: 0.4em 1.8em 0.4em 0.6em;
    }

    /* Tinh chỉnh thêm trên màn nhỏ (<=576px) */
    @media (max-width: 767px) {
        .lang-select {
            max-width: 120px; /* không to quá */
            font-size: 0.75rem; /* chữ nhỏ hơn */
            padding: 0.3em 1.4em 0.3em 0.5em;
        }

        .lang-switcher::after {
            right: 0.5em; /* co mũi tên vào */
            font-size: 0.6em;
        }
    }
</style>

<header class="header_main" ng-controller="headerPage">
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
                            <select class="form-control lang-select" id="siteLang"
                                    onchange="translateheader(this.value)">
                                <option value="vi">Tiếng Việt</option>
                                <option value="en">English</option>
                                <option value="zh-CN">中文（简体）</option>
                                <option value="zh-TW">中文（繁體）</option>
                                <option value="ko">한국어</option>
                                <option value="ja">日本語</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <!-- Menu mobile -->
                <div class="hidden-lg hidden-md visibile-sm visibile-xs">
                    <section id="menu-mobi" class="menu_mobile menu_mobile_button">
                        <div id="menu_mobile_button_line_main">
                            <span class="menu_mobile_button_line menu_mobile_button_line_1"></span>
                            <span class="menu_mobile_button_line menu_mobile_button_line_2"></span>
                            <span class="menu_mobile_button_line menu_mobile_button_line_3"></span>
                        </div>
                    </section>
                    <nav class="menu_mobile_list" style="display:none;">
                        <div class="menu_mobile_pushmenu menu_mobile_pushmenu_left">
                            <ul class="menu_mobile_list_inner">

                                <li class="level0 "><a href="{{ route('front.home-page') }}">Trang chủ</a></li>
                                <li class="level0 "><a href="{{ route('front.about_page') }}">Giới thiệu</a></li>
                                <li class="level0 "><a href="{{ route('front.getServices') }}">Dịch vụ</a></li>
                                @foreach($postCategories as $postCate)
                                    <li class="level0 "><a href="{{ route('front.getPostCategory', $postCate->slug) }}"
                                                           @if(in_array($postCate->slug, ['ifrs', 'esg']))
                                                               class="notranslate"
                                                           translate="no"
                                            @endif>
                                            {{ $postCate->name }}
                                        </a></li>
                                @endforeach
                                <li class="level0 "><a href="{{ route('front.contact') }}">Liên hệ</a></li>

                            </ul>
                        </div>


                    </nav>
                </div>
                <!-- End Menu mobile -->

                <!-- Logo -->

                <style>
                    /*!* 1) Ngắt float phải của nav khi dùng chế độ scroll *!*/
                    /*nav.menu_main.nav-one-line-scroll.pull-right{*/
                    /*    float: none !important;*/
                    /*    display: block;*/
                    /*    width: 100%;*/
                    /*}*/

                    /*!* 2) Bật scroll ngang cho vùng chứa menu *!*/
                    /*nav.menu_main.nav-one-line-scroll .menu_main_list{*/
                    /*    overflow-x: auto !important;*/
                    /*    overflow-y: hidden !important;*/
                    /*    -webkit-overflow-scrolling: touch;*/
                    /*}*/

                    /*!* 3) Ép UL rộng bằng tổng item để chắc chắn phát sinh tràn -> hiện scrollbar *!*/
                    /*nav.menu_main.nav-one-line-scroll .menu_main_list > ul#nav{*/
                    /*    display: inline-flex !important;*/
                    /*    flex-wrap: nowrap !important;*/
                    /*    min-width: max-content !important;*/
                    /*}*/

                    /*!* 4) Mỗi <li> là một khối cố định, không co lại *!*/
                    /*nav.menu_main.nav-one-line-scroll .menu_main_list > ul#nav > li{*/
                    /*    flex: 0 0 auto !important;*/
                    /*}*/
                    /* 1) Wrapper thành 1 hàng linh hoạt */
                    .header-inline{
                        display:flex;align-items:center;justify-content:flex-start;gap:10px;position:relative;
                    }
                    .header-inline nav.menu_main.nav-one-line-scroll.pull-right{
                        float:none!important;width:auto!important;display:block;max-width:calc(100% - 44px);
                    }
                    .header-inline .menu_main_list > ul#nav{
                        display:flex;flex-wrap:wrap;align-items:center;gap:16px;margin:0;
                    }


                    /* 2) Menu không chiếm 100% chiều rộng nữa */
                    nav.menu_main.nav-one-line-scroll.pull-right{
                        float: none !important;
                        width: auto !important;     /* <-- quan trọng: thay cho 100% */
                        /*display: block !important;*/
                        max-width: calc(100% - 44px) !important;  /* chừa chỗ cho icon search (~44px) */
                    }

                    /* 3) Danh sách menu nằm 1 hàng đẹp */
                    .menu_main_list > ul#nav{
                        display: flex !important;
                        flex-wrap: wrap !important;           /* tự xuống dòng nếu chật */
                        align-items: center !important;
                        justify-content: flex-end !important;
                        gap: 16px !important;
                        margin: 0 !important;
                    }

                    /* Desktop only (md trở lên) */
                    @media (min-width: 992px) {
                        .header-inline .search_form_main{
                            position: static !important;      /* bỏ absolute để ngồi chung hàng */
                            display: inline-flex !important;
                            align-items: center !important;
                            flex: 0 0 auto !important;
                            margin-left: 4px !important;      /* sát menu */
                            z-index: 1 !important;            /* đủ cao để click */
                        }
                    }



                    /* 5) Kích thước, tương tác icon search */
                    .search_form_icon{
                        display: inline-flex !important;
                        align-items: center !important;
                        justify-content: center !important;
                        width: 36px !important;
                        height: 36px !important;
                        cursor: pointer !important;
                    }

                    /* (khuyến nghị) đừng để line-height:0 áp vào mọi div trong header */
                    .header_bottom div{
                        /*line-height: normal !important;        !* thay vì 0, tránh bóp icon/text *!*/
                        padding-right: 8px !important;
                    }

                    /* Giữ ô search popup như cũ (nếu bạn dùng) */
                    .searchboxlager .searchfromtop{
                        position: absolute !important;
                        /*right: 0 !important;*/
                        /*top: 100% !important;*/
                    }



                </style>
                <div
                    class="col-md-2 col-sm-10 col-xs-6 col-xs-offset-3 col-lg-offset-0 col-sm-offset-1 col-md-offset-0">
                    <div class="logo">
                        <a href="{{ route('front.home-page') }}"><img src="{{ $config->image->path ?? '' }}" alt="logo "
                                                                      class="img-responsive" style="width: 110px"></a>
                    </div>
                </div>

                <!-- End Logo -->
                <div class="col-md-10 col-sm-12 col-xs-12 header-inline">
                    <!-- Menu -->
                    <nav class="menu_main hidden-sm hidden-xs pull-right nav-one-line-scroll"
                         style="background: #FFFFFF">
                        <div class="menu_main_list">
                            <ul id="nav">
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.home-page') }}">Trang
                                        chủ</a></li>
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.about_page') }}">Giới
                                        thiệu</a></li>
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.getServices') }}">Dịch
                                        vụ</a></li>
                                @foreach($postCategories as $postCate)
                                    <li class="nav-item "><a class="nav-link"
                                                             href="{{ route('front.getPostCategory', $postCate->slug) }}"
                                                             @if(in_array($postCate->slug, ['ifrs', 'esg']))
                                                                 class="notranslate"
                                                             translate="no"
                                            @endif
                                        >{{ $postCate->name }}</a></li>
                                @endforeach
                                <li class="nav-item "><a class="nav-link" href="{{ route('front.contact') }}">Liên
                                        hệ</a></li>

                            </ul>
                        </div>
                    </nav>
                    <!-- End Menu -->
                    <!-- Search -->
                    <div class="searchboxlager">
                        <div class="searchfromtop">
                            <form autocomplete="off" ng-submit="search()">
                                <input type="text" class="form-control" maxlength="70" name="query" id="search"
                                       placeholder="Nhập từ khóa tìm kiếm và ấn enter"
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
