<?php
/*
Template Name: about
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/about.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">
    <?php get_header(2); ?>

    <div class="fv_bg">
        <picture>
            <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/about_bg_sp.png" media="(max-width: 768px)" /> -->
            <img style="object-position: left;" src="<?php echo get_template_directory_uri(); ?>/img/common/about_bg.png" alt="">
        </picture>
    </div>
    <!-- 画像fv -->
    <div class="imgfv">
        <div class="imgfv_sd">
            <div class="c-pagettl_area">

                <div class="imgfv_ttlbox">
                    <h1 class="yano">ABOUT YADEA<br><span>YADEAについて</span></h1>
                </div>
            </div>
        </div>

        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/imgbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_c_maru02.png" alt="">

    </div>
    <!-- /画像fv -->

    <!-- パンくず -->
    <div class="c-inner-l c-p20">
        <ol class="c-bread">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>YADEAについて</li>
        </ol>
    </div>
    <!-- /パンくず -->

    <div class="main">
        <div class="sec01">
            <img class="sec01_logo" src="<?php echo get_template_directory_uri(); ?>/img/common/about_logo.svg" alt="YADEA">



            <div class="txt_box">
                <img src="<?php echo get_template_directory_uri(); ?>/img/common/w_bg.png" alt="">
                <div class="txt_box_box pc slide-right show">
                    <p class="txt_box_ttl">
                        YADEAは、世界最大級の電動二輪モビリティメーカーで、<br class="br_1024">
                        電動バイク・電動アシスト自転車・電動キックボードなどの<br class="br_1024">製造・販売を展開しております。
                    </p>
                    <p class="txt_box_txt">
                        2001年の創業以来、<br class="br_1024">
                        電動二輪モビリティの累計販売台数は、<br class="br_1024">
                        2024年に1億台を突破。<br>
                        年間販売台数は、<br class="br_1024">
                        2017年より世界一を記録し、<br class="br_1024">
                        業界のリーディングカンパニー。<br>
                        環境に優しいテクノロジ開発にも力を入れ、<br class="br_1024">
                        安全で楽しくモビリティが走行できる未来と社会を目指しています。
                    </p>
                </div>
                <!-- <span class="note pc slide-right show">*1. 電動キックボード以外の製品を含む。<br>
                    *2. 2017〜2022年の販売実績。</span> -->
            </div>

            <div class="txt_box_box sp slide-right show">
                <p class="txt_box_ttl">YADEAは、世界最大級の電動二輪モビリティメーカーで電動バイク・電動アシスト自転車・電動キックボードなどの製造・販売を展開しております。
                </p>
                <p class="txt_box_txt">
                    2001年の創業以来、電動二輪モビリティの累計販売台数は2024年に1億台を突破。<br>
                    年間販売台数は2017年より世界一を記録している業界のリーディングカンパニーです。<br>
                    環境に優しいテクノロジ開発にも力を入れ、安全で楽しくモビリティが走行できる未来と社会を目指しています。
                </p>
                <!-- <span class="note sp slide-right show">*1. 電動キックボード以外の製品を含む。<br>
                    *2. 2017〜2022年の販売実績。</span> -->
            </div>

            <div class="sec01_box">
                <img class="ab_01 slide-bottom show" src="<?php echo get_template_directory_uri(); ?>/img/common/ab_01.png" alt="">
                <img class="ab_02 slide-bottom02 show" src="<?php echo get_template_directory_uri(); ?>/img/common/ab_02.png" alt="">
                <img class="ab_03 slide-bottom show" src="<?php echo get_template_directory_uri(); ?>/img/common/ab_03.png" alt="">
                <img class="ab_04 slide-bottom02 show" src="<?php echo get_template_directory_uri(); ?>/img/common/ab_04.png" alt="">
            </div>
        </div>


        <div class="sec02">
            <div class="sec02_box">
                <div class="img_box">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/ab2_01.svg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/ab2_02.svg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/ab2_03.svg" alt="">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/ab2_04.svg" alt="">
                </div>
            </div>

            <img class="maru_ab pc" src="<?php echo get_template_directory_uri(); ?>/img/common/about_maru.png" alt="">
            <img class="maru_ab sp" src="<?php echo get_template_directory_uri(); ?>/img/common/con03.png" alt="">
        </div>


        <div class="sec03">
            <div class="sec03_box">
                <h2 class="slide-bottom show">安全製品はハセガワ</h2>
                <div class="flex">
                    <div class="leftbox slide-bottom show">
                        <p>長谷川工業は<br>YADEAの総代理店です</p>
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/hasegawa.svg" alt="Hasegawa">
                    </div>
                    <div class="rightbox slide-bottom show">
                        <p>創業以来60年間、長谷川工業は<br>
                            「安全」と「革新」をテーマに、<br>
                            様々な製品を現場へ送り出してきました。<br>
                            安心・安全な電動モビリティを提供する<br>
                            ことも私たちのミッションです。</p>
                    </div>
                </div>
                <a href="https://www.hasegawa-kogyo.co.jp/" target="blank">
                    <div class="hp_btn">
                        <p>企業サイトへ</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="10.403" height="9" viewBox="0 0 10.403 9">
                            <path d="M5.059,0l-.69.627L8.18,4.1H0v.847H8.135L4.367,8.373,5.056,9,9.513,4.943h.033V4.912s1.575.815.454-.413S5.059,0,5.059,0Z" transform="translate(0 0)" fill="#1c1918" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>

    </div><!-- main -->


    <div class="clear_box">
    </div>

    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>YADEAについて</li>
        </ol>
    </div>


    <?php get_footer(); ?>

    <!-- スライドイン -->
    <script>
        $(function() {
            $(window).on('load scroll', function() {
                var winScroll = $(window).scrollTop();
                var winHeight = $(window).height();
                var scrollPos = winScroll + (winHeight * 0.8);

                $(".show").each(function() {
                    if ($(this).offset().top < scrollPos) {
                        $(this).css({
                            opacity: 1,
                            transform: 'translate(0, 0)'
                        });
                    }
                });
            });
        });
    </script><!-- /スライドイン -->

</body>

</html>