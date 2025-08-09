<!DOCTYPE html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    @include('site.partials.head')
    @yield('css')
</head>

<body ng-app="App">
@include('site.partials.header')

<div id="translate_select"></div>

<section class="main_container">
    @yield('content')


</section>


@include('site.partials.footer')

@include('site.partials.angular_mix')


<!-- Header JS -->
<script data-cfasync="false" src="/site/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>
    function dragStart(event) {
        event.dataTransfer.setData("Text", event.target.list_link);
    }
</script>
<script>
    $(window).on("load resize",function(e){
        if ( $('.list_link li').length > 7 ) {
            $('.nav_').removeClass('hidden');
        } else {
            $('.nav_').addClass('hidden');
            $('.list_link li').css('margin-right','33px');
        }
    });
</script>

<!-- Bizweb javascript -->
<!-- Plugin JS -->
<script src="/site/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="/site/cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/js/jquery.fancybox.min.js"></script>
<!-- Main JS -->
<script src="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/main6008.js?1753153760720" type="text/javascript"></script>
<!-- Product detail JS,CSS -->


<script>
    (function(){
        function loadFA() {
            var link = document.createElement('link');
            link.rel = 'stylesheet';
            link.href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
            document.head.appendChild(link);
        }
        if ('requestIdleCallback' in window) {
            requestIdleCallback(loadFA);
        } else {
            // fallback: chờ 200ms
            setTimeout(loadFA, 200);
        }
    })();
</script>

<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"96afc56d69bbb178","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"6c92bbc133584e029f09e826272d3606","b":1}' crossorigin="anonymous"></script>

<script src="/site/js/callbutton.js"></script>


<div class="">
    @if($config->click_call)
        <div onclick="window.location.href= 'tel:{{ $config->hotline }}'" class="hotline-phone-ring-wrap">
            <div class="hotline-phone-ring">
                <div class="hotline-phone-ring-circle"></div>
                <div class="hotline-phone-ring-circle-fill"></div>
                <div class="hotline-phone-ring-img-circle">
                    <a href="tel: {{ $config->hotline }}" class="pps-btn-img">
                        <img src="/site/images/phone.png" alt="Gọi điện thoại" width="50" loading="lazy">
                    </a>
                </div>
            </div>
            <a href="tel:{{ $config->hotline }}">
            </a>
            <div class="hotline-bar"><a href="tel:{{ $config->hotline }}">
                </a><a href="tel:{{ $config->hotline }}">
                    <span class="text-hotline">{{ $config->hotline }}</span>
                </a>
            </div>

        </div>
    @endif

    <div class="inner-fabs">
        @if($config->facebook_chat)
            <a target="blank" href="{{ $config->facebook }}" class="fabs roundCool" id="challenges-fab"
               data-tooltip="Send Messenger">
                <img class="inner-fab-icon" src="/site/images/mess1.png" alt="challenges-icon" border="0" loading="lazy">
            </a>
        @endif
        @if($config->zalo_chat)
            <a target="blank" href="https://zalo.me/{{ preg_replace('/\s+/', '', $config->zalo) }}" class="fabs roundCool" id="chat-fab"
               data-tooltip="Send message Zalo">
                <img class="inner-fab-icon" src="/site/images/icon_zalo.webp" alt="chat-active-icon" border="0" loading="lazy">
            </a>
        @endif

    </div>
    <div class="fabs roundCool call-animation" id="main-fab">
        <img class="img-circle" src="/site/images/lienhe.png" alt="" width="135" loading="lazy">
    </div>
</div>

    <script>
        var CSRF_TOKEN = "{{ csrf_token() }}";
    </script>

<script type="text/javascript"
        src="/site/js/elementa0d8.js?cb=googleTranslateElementInit">
</script>
<script>
    // Hàm dịch header (giữ nguyên của bạn)
    function translateheader(lang) {
        var sel = document.querySelector("select.goog-te-combo");
        if (!sel) {
            return setTimeout(function() {
                translateheader(lang);
            }, 100);
        }
        sel.value = lang;
        sel.dispatchEvent(new Event('change', { bubbles: true }));
    }

    document.addEventListener('DOMContentLoaded', function(){
        var uiSelect = document.getElementById('siteLang');
        // 1. Đọc lang đã lưu hoặc mặc định 'vi'
        var savedLang = localStorage.getItem('siteLang') || 'vi';

        // 2. Set UI select và gọi translate ngay khi load
        uiSelect.value = savedLang;
        translateheader(savedLang);

        // 3. Khi user đổi ngôn ngữ
        uiSelect.addEventListener('change', function(){
            var lang = this.value;
            // Lưu choice
            localStorage.setItem('siteLang', lang);
            // Gọi translate
            translateheader(lang);
        });
    });

</script>

<script>
    app.controller('headerPage', function ($scope, $window) {
        $scope.search = function () {

            if (!$scope.keywords) {
                alert('Vui lòng nhập từ khóa tìm kiếm!');
                return;
            }

            // Xây URL cơ bản
            var url = '/tim-kiem?keywords=' + encodeURIComponent($scope.keywords.trim());

            // Điều hướng
            $window.location.href = url;
        };
    });
</script>

    @stack('scripts')

</body>

</html>
