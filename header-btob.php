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

  <!-- google-font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Zen+Kaku+Gothic+Antique:wght@300;400;500;700;900&display=swap"
    rel="stylesheet" />

  <!-- css -->
  <link rel="stylesheet"
    href="<?php echo get_template_directory_uri(); ?>/css/btob.css?<?php echo date_i18n("YmdHis"); ?>"
    type="text/css" />


  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>

  <?php wp_head(); ?>
</head>

<body>
  <header class="p-header">
    <div class="p-header__inner">
      <a href="<?php echo home_url('business'); ?>" class="p-header__logo">
        <div class="p-header__title">
          企業・自治体向け販売・電動モビリティ導入サービス
        </div>
        <img src="<?php echo get_template_directory_uri() ?>/img/btob/logo.png" alt="YADEA BIZ" />
      </a>
      <nav class="p-header__nav">
        <ul class="p-header__list">
          <li><a href="<?php echo home_url('business'); ?>">トップ</a></li>
          <li><a href="<?php echo home_url('business'); ?>#message">サービス概要</a></li>
          <li><a href="<?php echo home_url('business'); ?>#case">利用事例</a></li>
          <li><a href="<?php echo home_url('business'); ?>#reason">安心・安全の理由</a></li>
          <li><a href="<?php echo home_url('business'); ?>#product">製品情報</a></li>
          <!-- <li><a href="<?php echo home_url('business'); ?>">料金プラン</a></li> -->
          <!-- <li><a href="<?php echo home_url('business'); ?>#faq">よくある質問</a></li> -->
        </ul>
        <a href="<?php echo home_url('business'); ?>#contact" class="p-header__btn">まずは相談する</a>
      </nav>
    </div>
  </header>

  <button class="p-drawer__icon">
    <span class="p-drawer__icon--bar"></span>
    <span class="p-drawer__icon--bar"></span>
    <span class="p-drawer__icon--bar"></span>
  </button>

  <div class="p-drawer">
    <div class="p-drawer__body">
      <ul class="p-drawer__list">
        <li><a href="<?php echo home_url('business'); ?>">トップ</a></li>
        <li><a href="<?php echo home_url('business'); ?>#message">サービス概要</a></li>
        <li><a href="<?php echo home_url('business'); ?>#case">利用事例</a></li>
        <li><a href="<?php echo home_url('business'); ?>#reason">安心・安全の理由</a></li>
        <li><a href="<?php echo home_url('business'); ?>#product">製品情報</a></li>
        <!-- <li><a href="">料金プラン</a></li> -->
        <!-- <li><a href="<?php echo home_url('business'); ?>#faq">よくある質問</a></li> -->
      </ul>
      <a href="<?php echo home_url('business'); ?>#contact" class="p-drawer__btn">まずは相談する</a>
    </div>
  </div>