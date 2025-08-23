@extends('site.layouts.master')

@section('title')
    {{ $service->name }} - {{ $config->web_title }}
@endsection
@section('description')
    {{ strip_tags(html_entity_decode($config->introduction)) }}
@endsection
@section('image')
    {{@$config->image->path ?? ''}}
@endsection

@section('css')
    <link rel="stylesheet" href="/site/cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css" />
    <link rel="stylesheet" href="/site/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"/>

    <script src="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/option-selectors6008.js?1753153760720" type="text/javascript"></script>
    <script src="/site/bizweb.dktcdn.net/assets/themes_support/api.jquery.js" type="text/javascript"></script>

    <link type="text/css" rel="stylesheet" href="/site/css/editor-content.css">

@endsection

@section('content')
    <style>
        .rte h1, .rte .h1, .rte h2, .rte .h2, .rte h3, .rte .h3, .rte h4, .rte .h4, .rte h5, .rte .h5, .rte h6, .rte .h6
        {
            margin-top: 0.5em;
        }
    </style>


    <section class="bread-crumb">
        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a href="{{ route('front.home-page') }}"><span>Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>


                <li>
                    <a class="changeurl" href="{{ route('front.getServices') }}"><span>Dịch vụ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>

                <li><strong><span>{{ $service->name }}</span></strong></li>

            </ul>

        </div>
    </section>





    <section class="product" itemscope itemtype="http://schema.org/Product">


        <div class="container">


            <div class="hidden-md hidden-lg">
                @include('site.partials.aside_menu', ['postCategory' => $postCategory])
            </div>


            <div class="row content-product">
                <div class="details-product col-lg-9 col-lg-push-3">
                    <h1 class="title-heads" itemprop="name">{{ $service->name }}</h1>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="thumbs_gallery_vertical">
                                <div class="swiper-container gallery-top">


                                    <div class="swiper-wrapper large-image zoom-gallery">


                                        <div class="swiper-slide">
                                            <a href="{{ $service->image->path ?? '' }}">
                                                <img
                                                    src="{{ $service->image->path ?? '' }}"
                                                    alt="">
                                            </a>
                                        </div>

{{--                                        @foreach($service->galleries as $gallery)--}}
{{--                                            <div class="swiper-slide">--}}
{{--                                                <a href="{{ $gallery->image->path ?? '' }}">--}}
{{--                                                    <img--}}
{{--                                                        src="{{ $gallery->image->path ?? '' }}"--}}
{{--                                                        alt="">--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}


                                    </div>

                                </div>

{{--                                <div class="swiper-container gallery-thumbs">--}}
{{--                                    <div class="swiper-wrapper">--}}

{{--                                        <div class="swiper-slide">--}}
{{--                                            <img--}}
{{--                                                src="{{ $service->image->path ?? '' }}"--}}
{{--                                                alt="">--}}
{{--                                        </div>--}}

{{--                                        @foreach($service->galleries as $gallery)--}}
{{--                                            <div class="swiper-slide">--}}
{{--                                                <img--}}
{{--                                                    src="{{ $gallery->image->path ?? '' }}"--}}
{{--                                                    alt="">--}}
{{--                                            </div>--}}
{{--                                        @endforeach--}}


{{--                                    </div>--}}
{{--                                </div>--}}
                                <!-- Add Arrows -->
{{--                                <div class="swiper-button-next swiper-button-white"></div>--}}
{{--                                <div class="swiper-button-prev swiper-button-white"></div>--}}

                                <!--<div class="fs-icon" title="Expand/Close"></div>-->
                            </div>
                        </div>

                        <style>
                            .toc-container {
                                background: #f8f9fa;
                                padding: 12px;
                                border-radius: 6px;
                                border: 1px solid #dee2e6;
                            }
                            .toc-title {
                                margin-bottom: 8px;
                                font-weight: 600;
                                font-size: 1.55rem;
                            }
                            /* Nút Ẩn/Hiện */
                            .toc-toggle {
                                margin-left: auto;
                                font-size: 1.375rem;
                                font-weight: 400;
                                text-decoration: none;
                                cursor: pointer;
                                color: #007bff;
                            }
                            #toc-list li {
                                margin-bottom: 4px;
                            }
                            #toc-list li a {
                                color: #007bff;
                                text-decoration: none;
                            }
                            #toc-list li a:hover {
                                text-decoration: underline;
                            }

                            /* Khi scroll, bạn có thể highlight mục đang ở viewport */
                            #toc-list li.active > a {
                                font-weight: bold;
                            }

                        </style>
                        <div class="col-xs-12 details-pro">

                            <div class="product-summary product_description">

                                <div class="toc-container mb-4">
                                    <h4 class="toc-title">Mục lục
                                        <a href="#" id="toc-toggle" class="toc-toggle">Ẩn</a>
                                    </h4>

                                    <ul id="toc-list" class="list-unstyled"></ul>
                                </div>

                            </div>





                            <span class="social_wish_right">
							<ul class="share_product">
								<li class="block-share-cs fb"><a
                                        title="Chia sẻ {{ $service->name }} lên Facebook"
                                        target="_blank"
                                        href="http://www.facebook.com/sharer.php?u={{ URL::current() }}"><i
                                            class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li class="block-share-cs googleplus"><a
                                        title="Chia sẻ {{ $service->name }} lên Google plus"
                                        target="_blank"
                                        href="https://plus.google.com/share?url={{ URL::current() }}"><i
                                            class="fa fa-google-plus" aria-hidden="true"></i></a></li>
								<li class="block-share-cs tw"><a
                                        title="Chia sẻ {{ $service->name }} lên Twitter"
                                        target="_blank"
                                        href="http://twitter.com/share?url={{ URL::current() }}"><i
                                            class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li class="block-share-cs linkedin"><a
                                        title="Chia sẻ {{ $service->name }} lên Linkedin"
                                        target="_blank"
                                        href="http://www.linkedin.com/shareArticle?url={{ URL::current() }}"><i
                                            class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
						</span>


                        </div>
                    </div>
                    <div class="row">
                        <style>
                            /* Vùng bài viết */
                            #post-content table {
                                border-collapse: collapse !important;
                                table-layout: fixed !important; /* tránh cột co méo thất thường */
                                width: max(100%, calc(var(--cols, 6) * 140px)) !important; /* tối thiểu 140px mỗi cột */
                                background: #fff;
                                font-size: 14.5px;
                            }

                            #post-content .table-scroll {
                                width: 100%;
                                overflow-x: auto;
                                -webkit-overflow-scrolling: touch;
                                border: 1px solid rgba(33,150,243,.25);
                                border-radius: 12px;
                                background: linear-gradient(180deg, #f7fbff, #fff);
                                padding: 8px;
                                margin: 16px 0;
                                position: relative;
                                box-shadow: 0 10px 24px rgba(33,150,243,.12);
                            }

                            /* Gợi ý có thể cuộn */
                            #post-content .table-scroll-hint{
                                position: absolute; right: 12px; bottom: 8px;
                                background: #2196f3; color: #fff; padding: 4px 8px;
                                font-size: 12px; border-radius: 999px; opacity: .9;
                                pointer-events: none; user-select: none;
                            }
                            #post-content .table-scroll-hint.hide{ opacity: 0; transition: opacity .2s; }

                            /* Viền, khoảng cách ô */
                            #post-content table th,
                            #post-content table td{
                                border: 1px solid #e6effc;
                                padding: 10px 12px;
                                word-break: break-word; /* nếu có text quá dài */
                            }

                            /* Header sticky + màu xanh nhạt */
                            #post-content table thead th{
                                position: sticky; top: 0; z-index: 2;
                                background: #e9f3ff;
                                color: #0f3e86;
                                font-weight: 700;
                                box-shadow: 0 1px 0 #dbeafe;
                            }

                            /* Zebra rows */
                            #post-content table tbody tr:nth-child(odd){ background: #f8fbff; }

                            /* Scrollbar nhẹ nhàng (WebKit) */
                            #post-content .table-scroll::-webkit-scrollbar{ height: 10px; }
                            #post-content .table-scroll::-webkit-scrollbar-track{ background: #eef6ff; border-radius: 8px; }
                            #post-content .table-scroll::-webkit-scrollbar-thumb{ background: #9cc7fb; border-radius: 8px; }
                            #post-content .table-scroll::-webkit-scrollbar-thumb:hover{ background: #79b3fb; }

                            /* Caption (nếu bài viết có <caption>) */
                            #post-content table caption{
                                caption-side: top;
                                text-align: left;
                                padding: 6px 0 10px;
                                font-weight: 600; color: #1565c0;
                            }

                        </style>
                        <div class="col-xs-12">
                            <!-- Nav tabs -->
                            <div class="tab-content ck-content product-tabs-content editor-content" id="post-content" style="display: block !important;">

                                <div class="tab-pane fade in active rte" role="tabpanel" id="pd-1" style="display: block !important;">
                                   {!! $service->content !!}
                                </div>


                            </div>
                        </div>


                    </div>
                </div>


                <aside class="sidebar left left-content col-lg-3 col-lg-pull-9">
                    <div class="hidden-xs hidden-sm">
                        @include('site.partials.aside_menu', ['postCategory' => $postCategory])
                    </div>



                    <div class="aside-item collection-aside">


                        <div class="aside-heading">
                            <h2 class="title-box-fu title-heading"><a href="#">Dịch vụ khác</a>
                            </h2>
                        </div>
                        <div class="aside-content">
                            <ul class="list_product_aside_collection Dlist_Uproduct_Csidebar">

                                @foreach($otherServices as $otherService)
                                    <li class="item">
                                        <div class="product-box field_work_short_tab_content">
                                            <div class="product-thumbnail field_work_short_tab_content_img">
                                                <a href="{{ route('front.getServiceDetail', $otherService->slug) }}"
                                                   title="{{ $otherService->name }}">
                                                    <img
                                                        src="{{ $otherService->image->path ?? '' }}"
                                                        alt="">
                                                </a>
                                            </div>
                                            <div class="product-info field_work_short_tab_content_title">
                                                <p></p>
                                                <h3><a href="{{ route('front.getServiceDetail', $otherService->slug) }}"
                                                       title="{{ $otherService->name }}">{{ $otherService->name }}</a></h3>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach




                            </ul>

                        </div>
                    </div>

                </aside>


            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $(".fs-icon").click(function () {
                $(".thumbs_gallery_vertical").toggleClass("thumbs_gallery_vertical_zoom");
            });
        });
    </script>

    <script>


        if ($(window).width() < 768) {

            $('.nav-tab-detailspro .nav-itemx:nth-child(1) ').append('<div class="tab-content thongtin"></div>');
            $('.nav-tab-detailspro .nav-itemx:nth-child(1) .tab-content').append($('#pd-1').html());
            $('.nav-tab-detailspro .nav-itemx:nth-child(1)').addClass('active');

            $('.nav-tab-detailspro .nav-itemx:nth-child(2)').append('<div class="tab-content danhgia"></div>');
            $('.nav-tab-detailspro .nav-itemx:nth-child(2) .tab-content').append($('#pd-2').html());

            $('.nav-tab-detailspro .nav-itemx:nth-child(3)').append('<div class="tab-content tags"></div>');
            $('.nav-tab-detailspro .nav-itemx:nth-child(3) .tab-content').append($('#pd-3').html());

            $('.des-content').hide();
            /*$('.nav-itemx').click(function(e){
                $(this).toggleClass('active');
                $(this).find('.nav-linkx').addClass('active');
                e.preventDefault();
            })*/
            $(".li1 .nav-link").click(function () {
                $(".thongtin").toggle();
            });
            $(".li2 .nav-link").click(function () {
                $(".danhgia").toggle();
            });
            $(".li3 .nav-link").click(function () {
                $(".tags").toggle();
            });


        }


        var selectCallback = function (variant, selector) {
            if (variant) {

                var form = jQuery('#' + selector.domIdPrefix).closest('form');

                for (var i = 0, length = variant.options.length; i < length; i++) {

                    var radioButton = form.find('.swatch[data-option-index="' + i + '"] :radio[value="' + variant.options[i] + '"]');
                    console.log(radioButton);

                }
            }
            var addToCart = jQuery('.form-product .btn-cart'),
                form = jQuery('.form-product .form-group'),
                productPrice = jQuery('.details-pro .special-price .product-price'),
                qty = jQuery('.inventory_quantity'),
                comparePrice = jQuery('.details-pro .old-price .product-price-old');

            if (variant && variant.available) {
                if (variant.inventory_management == "bizweb") {
                    qty.html('<span>Chỉ còn ' + variant.inventory_quantity + ' sản phẩm</span>');
                } else {
                    qty.html('<span>Còn phòng</span>');
                }
                addToCart.text('CHỌN PHÒNG').removeAttr('disabled');
                if (variant.price == 0) {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    form.addClass('hidden');
                } else {
                    form.removeClass('hidden');
                    productPrice.html(Bizweb.formatMoney(variant.price, "@{{amount_no_decimals_with_comma_separator}}₫"));
                    // Also update and show the product's compare price if necessary
                    if (variant.compare_at_price > variant.price) {
                        comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "@{{amount_no_decimals_with_comma_separator}}₫")).show();
                    } else {
                        comparePrice.hide();
                    }
                }

            } else {
                qty.html('<span>Hết phòng</span>');
                addToCart.text('Hết phòng').attr('disabled', 'disabled');
                if (variant) {
                    if (variant.price != 0) {
                        form.removeClass('hidden');
                        productPrice.html(Bizweb.formatMoney(variant.price, "@{{amount_no_decimals_with_comma_separator}}₫"));
                        // Also update and show the product's compare price if necessary
                        if (variant.compare_at_price > variant.price) {
                            comparePrice.html(Bizweb.formatMoney(variant.compare_at_price, "@{{amount_no_decimals_with_comma_separator}}₫")).show();
                        } else {
                            comparePrice.hide();
                        }
                    } else {
                        productPrice.html('Liên hệ');
                        comparePrice.hide();
                        form.addClass('hidden');
                    }
                } else {
                    productPrice.html('Liên hệ');
                    comparePrice.hide();
                    form.addClass('hidden');
                }

            }

        };
        jQuery(function ($) {


            // Add label if only one product option and it isn't 'Title'. Could be 'Size'.


            // Hide selectors if we only have 1 variant and its title contains 'Default'.

            $('.selector-wrapper').hide();

            $('.selector-wrapper').css({
                'text-align': 'left',
                'margin-bottom': '15px'
            });
        });

        jQuery('.swatch :radio').change(function () {
            var optionIndex = jQuery(this).closest('.swatch').attr('data-option-index');
            var optionValue = jQuery(this).val();
            jQuery(this)
                .closest('form')
                .find('.single-option-selector')
                .eq(optionIndex)
                .val(optionValue)
                .trigger('change');
        });

        $('.qtyplus').click(function (e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
            if (!isNaN(currentVal)) {
                $('input[data-field=' + fieldName + ']').val(currentVal + 1);
            } else {
                $('input[data-field=' + fieldName + ']').val(0);
            }

        })

        $(".qtyminus").click(function (e) {
            e.preventDefault();
            fieldName = $(this).attr('data-field');
            var currentVal = parseInt($('input[data-field=' + fieldName + ']').val());
            if (!isNaN(currentVal) && currentVal > 1) {
                $('input[data-field=' + fieldName + ']').val(currentVal - 1);
            } else {
                $('input[data-field=' + fieldName + ']').val(1);
            }

        })

        $(document).ready(function () {

        });
        $('#gallery_01 img, .swatch-element label').click(function (e) {
            $('.checkurl').attr('href', $(this).attr('src'));
            setTimeout(function () {
                $('.zoomContainer').remove();


            }, 300);

        })
    </script>

@endsection

@push('scripts')



    <script src="/site/cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="/site/cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const root = document.querySelector('#post-content');
            if (!root) return;

            root.querySelectorAll('table').forEach(function (table) {
                // Bỏ qua nếu đã được bọc
                if (table.closest('.table-scroll')) return;

                // Tạo wrapper cuộn ngang
                const wrap = document.createElement('div');
                wrap.className = 'table-scroll';
                wrap.setAttribute('role', 'region');
                wrap.setAttribute('aria-label', 'Bảng có thể cuộn ngang');

                // Tính số cột để set min-width hợp lý
                let cols = 0;
                const headRow = (table.tHead && table.tHead.rows[0]) || table.rows[0];
                if (headRow) {
                    for (const cell of headRow.cells) cols += cell.colSpan || 1;
                }
                wrap.style.setProperty('--cols', cols || 6);

                // Chèn wrapper
                table.parentNode.insertBefore(wrap, table);
                wrap.appendChild(table);

                // Gợi ý kéo để xem thêm
                const hint = document.createElement('div');
                // hint.className = 'table-scroll-hint';
                // hint.innerHTML = '<span>Kéo để xem thêm →</span>';
                wrap.appendChild(hint);

                // Ẩn gợi ý khi người dùng cuộn
                wrap.addEventListener('scroll', function () {
                    if (wrap.scrollLeft > 8) hint.classList.add('hide');
                    else hint.classList.remove('hide');
                }, { passive: true });
            });
        });
    </script>

    <script>

        $(document).ready(function () {
            $('.zoom-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                closeOnContentClick: false,
                closeBtnInside: false,
                mainClass: 'mfp-with-zoom mfp-img-mobile',
                gallery: {
                    enabled: true
                },
                zoom: {
                    enabled: true,
                    duration: 300, // don't foget to change the duration also in CSS
                    opener: function (element) {
                        return element.find('img');
                    }
                }

            });
        });


        var galleryTop = new Swiper('.gallery-top', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 0,
            loop: false,
            loopedSlides: 5, //looped slides should be the same
        });
        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 20,
            initialSlide: 5,
            slidesPerView: 5,
            loop: false,
            direction: 'vertical',
            mousewheelControl: true,
            centeredSlides: true,
            slideToClickedSlide: true
        });
        galleryTop.params.control = galleryThumbs;
        galleryThumbs.params.control = galleryTop;

    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const content   = document.getElementById("post-content");
            const tocList   = document.getElementById("toc-list");
            const tocToggle = document.getElementById("toc-toggle");
            if (!content || !tocList || !tocToggle) return;

            // 1. Sinh TOC
            const headings = content.querySelectorAll("h1,h2,h3,h4,h5,h6");
            if (headings.length === 0) {
                tocList.innerHTML = "<li>Chưa có mục nào</li>";
            } else {
                headings.forEach((head, idx) => {
                    if (!head.id) head.id = "heading-" + idx;
                    const level = parseInt(head.tagName.substring(1), 10);
                    const li = document.createElement("li");
                    li.style.paddingLeft = ((level - 1) * 12) + "px";
                    const a  = document.createElement("a");
                    a.href = "#" + head.id;
                    a.textContent = head.textContent.trim();
                    li.appendChild(a);
                    tocList.appendChild(li);
                });
            }

            // 2. Smooth scroll (nếu chưa dùng CSS scroll-behavior)
            tocList.addEventListener("click", function(e) {
                if (e.target.tagName !== "A") return;
                e.preventDefault();
                const id = e.target.getAttribute("href").slice(1);
                const target = document.getElementById(id);
                if (!target) return;
                target.scrollIntoView({ behavior: "smooth", block: "start" });
                history.pushState(null, "", "#" + id);
            });

            // 3. Highlight mục active khi scroll
            window.addEventListener("scroll", function() {
                const offset = window.scrollY + 10;
                let currentId = null;
                headings.forEach(h => {
                    if (h.offsetTop <= offset) currentId = h.id;
                });
                document.querySelectorAll("#toc-list li").forEach(li => {
                    li.classList.toggle(
                        "active",
                        li.querySelector("a").getAttribute("href") === "#" + currentId
                    );
                });
            });

            // 4. Toggle Ẩn/Hiện TOC
            tocToggle.addEventListener("click", function(e) {
                e.preventDefault();
                if (tocList.style.display === "none") {
                    tocList.style.display = "";      // hoặc "block"
                    tocToggle.textContent = "Ẩn";
                } else {
                    tocList.style.display = "none";
                    tocToggle.textContent = "Hiện";
                }
            });
        });
    </script>


@endpush
