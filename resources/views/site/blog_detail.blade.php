@extends('site.layouts.master')

@section('title'){{ $post->name }} - {{ $config->web_title }}@endsection
@section('description'){{ strip_tags(html_entity_decode($config->introduction)) }}@endsection
@section('image'){{ @$post->image->path ?? '' }}@endsection

@section('css')
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Georgia&family=Courier+Prime&display=swap" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="/site/css/editor-content.css">

    <style>

    </style>
@endsection

@section('content')
    <section class="bread-crumb">
        <div class="container">

            <ul class="breadcrumb">
                <li class="home">
                    <a  href="{{ route('front.home-page') }}" ><span >Trang chủ</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>

                <li >
                    <a  href="{{ route('front.getPostCategory', $category->slug) }}"><span >{{ $category->name }}</span></a>
                    <span class="mr_lr">&nbsp;<i class="fa fa-angle-right"></i>&nbsp;</span>
                </li>
                <li><strong><span >{{ $post->name }}</span></strong></li>

            </ul>

        </div>
    </section>
    <section itemscope itemtype="http://schema.org/Article">
        <meta itemprop="mainEntityOfPage" content="/khu-phuc-hop-ascott-waterfront-saigon">
        <meta itemprop="description" content="">
        <meta itemprop="author" content="Đào Thiện Hải">
        <meta itemprop="headline" content="Dự án khu phức hợp sang trọng tiện nghi Ascott Waterfront Saigon TP Hồ Chí Minh">
        <meta itemprop="image" content="https_/bizweb.dktcdn.net/100/213/729/articles/6-min83d0.html?v=1496052850607">
        <meta itemprop="datePublished" content="19-05-2017">
        <meta itemprop="dateModified" content="18-05-2017">
        <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
            <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                <img class="hidden" src="../bizweb.dktcdn.net/100/213/729/themes/895043/assets/logo6008.png?1753153760720" alt="Dreamer"/>
                <meta itemprop="url" content="../bizweb.dktcdn.net/100/213/729/themes/895043/assets/logo6008.png?1753153760720">
                <meta itemprop="width" content="400">
                <meta itemprop="height" content="60">
            </div>
            <meta itemprop="name" content="Dreamer">
        </div>

        <div class="container article-wraper padding-bottom-70">
            <div class="row">
                <section class="right-content col-lg-9 col-lg-push-3">
                    <article class="article-main" itemscope itemtype="http://schema.org/Article">
                        <div class="news_details_page_title">
                            <div class="news_home_content_short_time"><i class="fa fa-clock-o"></i>{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i') }}</div>
                            <h1><a href="khu-phuc-hop-ascott-waterfront-saigon.html" itemprop="name">
                                    {{ $post->name }}
                                </a></h1>

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


                            <div class="toc-container mb-4" style="margin-bottom: 10px">
                                <h4 class="toc-title">Mục lục
                                    <a href="#" id="toc-toggle" class="toc-toggle">Ẩn</a>
                                </h4>

                                <ul id="toc-list" class="list-unstyled"></ul>
                            </div>


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

                        </div>
                        <div class="news_details_page_content" itemprop="description" id="post-content">
                                    {!! $post->body !!}
                        </div>
                        <div class="col-xs-12">
                            <div class="row row-noGutter tag-share">



                                <div class="col-xs-12 col-sm-6 a-left">


                                    <div class="social-media" data-permalink="khu-phuc-hop-ascott-waterfront-saigon.html">
                                        Chia sẻ:

                                        <a target="_blank" href="http://www.facebook.com/sharer.php?u={{ URL::current() }}" class="share-facebook" title="Chia sẻ lên Facebook">
                                            <i class="fa fa-facebook"></i>
                                        </a>


                                        <a target="_blank" href="http://twitter.com/share?text={{ $post->name }}&amp;url={{ URL::current() }}" class="share-twitter" title="Chia sẻ lên Twitter">
                                            <i class="fa fa-twitter"></i>
                                        </a>





                                        <a target="_blank" href="http://plus.google.com/share?url={{ URL::current() }}" class="share-google" title="+1">
                                            <i class="fa fa-google-plus"></i>
                                        </a>


                                    </div>
                                </div>

                            </div>
                        </div>



                        <!-- Tin khác -->
                        <div class="news_related">
                            <h2 class="title_related">Các tin khác</h2>

                            @foreach($otherPosts as $otherPost)
                                <div class="news_details_page_list">
                                    <ul>
                                        <li><h3><a href="{{ route('front.getPostDetail', $otherPost->slug) }}">{{ $otherPost->name }}</a>
                                                <span class="time-article-blog">{{ \Carbon\Carbon::parse($otherPost->created_at)->format('d/m/Y') }}</span></h3></li>

                                    </ul>
                                </div>

                            @endforeach


                        </div>
                        <!-- End tin khác -->
                    </article>
                </section>

                <aside class="left left-content col-lg-3 col-lg-pull-9">

                    @include('site.partials.aside_menu', ['postCategory' => $postCategory])

                </aside>

            </div>
        </div>
    </section>
@endsection

@push('scripts')
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
