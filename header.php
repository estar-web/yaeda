<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=cover">
    <meta name="format-detection" content="telephone=no">

    <!-- キャッシュ対策 -->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '944621596796510');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=944621596796510&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- ファビコンなど -->
    <link rel="apple-touch-icon" sizes="128x128"
        href="<?php echo get_template_directory_uri(); ?>/img/common/fav_yadea.jpg">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/common/fav_yadea.jpg">

    <!-- css -->
    <link rel="stylesheet"
        href="<?php echo get_template_directory_uri(); ?>/css/common.css?<?php echo date_i18n("YmdHis"); ?>"
        type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/locomotive-scroll.min.css"
        type="text/css" />
    <?php if (is_page('porta')) : ?>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/porta.css" type="text/css" />
    <?php endif; ?>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script type="text/javascript"
        src="<?php echo get_template_directory_uri(); ?>/js/common.js?<?php echo date_i18n("YmdHis"); ?>"></script>

    <!-- フォント -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap"
        rel="stylesheet" />

    <script id="_bownow_ts">
        var _bownow_ts = document.createElement('script');
        _bownow_ts.charset = 'utf-8';
        _bownow_ts.src = 'https://contents.bownow.jp/js/UTC_e9c25ae4b4b69df4bb16/trace.js';
        document.getElementsByTagName('head')[0].appendChild(_bownow_ts);
    </script>

    <!-- Google Tag Manager(広告運用) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-K5HPJTL');
    </script>
    <!-- End Google Tag Manager -->