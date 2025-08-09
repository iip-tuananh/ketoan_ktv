<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<title>@yield('title')</title>

<!-- ================= Page description ================== -->
<!-- ================= Meta ================== -->
<meta name='revisit-after' content='1 days' />
<meta name="robots" content="noodp,index,follow" />
<!-- ================= Favicon ================== -->

<!-- ================= Google Fonts ================== -->

<!-- Favicon and touch Icons -->
<link rel="shortcut icon" href="{{@$config->favicon->path ?? ''}}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="180x180" href="{{@$config->favicon->path ?? ''}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{@$config->favicon->path ?? ''}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{@$config->favicon->path ?? ''}}">
<meta name="application-name" content="{{ $config->web_title }}" />
<meta name="generator" content="@yield('title')" />

<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="@yield('title')">
<meta property="og:description" content="@yield('description')">
<meta property="og:image" content="@yield('image')">
<meta property="og:site_name" content="{{ url()->current() }}">
<meta property="og:image:alt" content="{{ $config->web_title }}">
<meta itemprop="description" content="@yield('description')">
<meta itemprop="image" content="@yield('image')">
<meta itemprop="url" content="{{ url()->current() }}">
<meta property="og:type" content="website" />
<meta property="og:locale" content="vi_VN" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="{{ url()->current() }}" />




<!-- Plugin CSS -->
<link rel="preload" as='style' type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/base.scss6008.css?1753153760720">
<link rel="preload" as='style'  type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/styles.scss6008.css?1753153760720">
<link rel="preload" as='style' type="text/css" href="/site/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="preload" as='style'  type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/module.scss6008.css?1753153760720">
<link rel="preload" as='style' type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/responsive.scss6008.css?1753153760720">
<link rel="preload" as='style'  type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/owl.carousel.min6008.css?1753153760720">
<link rel="preload" as='style'  type="text/css" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/animate6008.css?1753153760720">
<link rel="stylesheet" href="/site/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="/site/cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.3.2/css/simple-line-icons.css">

<link rel="stylesheet" href="/site/cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.6/css/jquery.fancybox.min.css" />

<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/owl.carousel.min6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />

<!-- Build Main CSS -->
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/base.scss6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/style.scss6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/styles.scss6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/module.scss6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/responsive.scss6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/animate6008.css?1753153760720" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="/site/css/callbutton.css?v=12">



<!-- Bizweb javascript customer -->



<!-- Bizweb conter for header -->
{{--<script>--}}
{{--    var Bizweb = Bizweb || {};--}}
{{--    Bizweb.store = 'dreamer.mysapo.net';--}}
{{--    Bizweb.id = 213729;--}}
{{--    Bizweb.theme = {"id":895043,"name":"Dreamer 14-02-2023","role":"main"};--}}
{{--    Bizweb.template = 'index';--}}
{{--    if(!Bizweb.fbEventId)  Bizweb.fbEventId = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function (c) {--}}
{{--        var r = Math.random() * 16 | 0, v = c == 'x' ? r : (r & 0x3 | 0x8);--}}
{{--        return v.toString(16);--}}
{{--    });--}}
{{--</script>--}}
{{--<script>--}}
{{--    (function () {--}}
{{--        function asyncLoad() {--}}
{{--            var urls = [];--}}
{{--            for (var i = 0; i < urls.length; i++) {--}}
{{--                var s = document.createElement('script');--}}
{{--                s.type = 'text/javascript';--}}
{{--                s.async = true;--}}
{{--                s.src = urls[i];--}}
{{--                var x = document.getElementsByTagName('script')[0];--}}
{{--                x.parentNode.insertBefore(s, x);--}}
{{--            }--}}
{{--        };--}}
{{--        window.attachEvent ? window.attachEvent('onload', asyncLoad) : window.addEventListener('load', asyncLoad, false);--}}
{{--    })();--}}
{{--</script>--}}


{{--<script>--}}
{{--    window.BizwebAnalytics = window.BizwebAnalytics || {};--}}
{{--    window.BizwebAnalytics.meta = window.BizwebAnalytics.meta || {};--}}
{{--    window.BizwebAnalytics.meta.currency = 'VND';--}}
{{--    window.BizwebAnalytics.tracking_url = 's.html';--}}

{{--    var meta = {};--}}


{{--    for (var attr in meta) {--}}
{{--        window.BizwebAnalytics.meta[attr] = meta[attr];--}}
{{--    }--}}
{{--</script>--}}


{{--<script src="/site/dist/js/stats.minbadf.js?v=96f2ff2"></script>--}}


<link rel="preload" as="script" href="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/plugin_main6008.js?1753153760720" />
<script src="/site/bizweb.dktcdn.net/100/213/729/themes/895043/assets/plugin_main6008.js?1753153760720" type="text/javascript"></script>


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'vi',includedLanguages:'en,hi,vi,zh-CN', }, 'translate_select');
    }
</script>

<style>
    .VIpgJd-ZVi9od-aZ2wEe-wOHMyf-ti6hGc {
        display: none;
    }
    .skiptranslate{
        display: none;
        top: 0;
    }
    .goog-te-banner-frame{display: none !important;}
    .goog-text-highlight { background: none !important; box-shadow: none !important;}
    .goog-te-banner-frame.skiptranslate {
        display: none !important;
    }

    .goog-gt-tt{
        display: none !important;
    }
    body {
        position: revert!important;
        top: 0px !important;
    }

    /* Ẩn các phần tử có ng-cloak */
    [ng-cloak], .ng-cloak {
        display: none !important;
    }


</style>
