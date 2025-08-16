<?php
/*
Template Name: showroom
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/showroom.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lineup.css" type="text/css" />

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>

<body class="noto">
    <?php get_header(2); ?>
    <!-- <a href="https://hasegawa-online.jp/collections/yadea" class="footer_bnr" target="_blank">
        <img class="footer_bnr___img" src="</?php echo get_template_directory_uri(); ?>/img/banner/shop_bnr.png" alt="">
    </a> -->



    <!-- 動画 -->
    <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted playsinline></video>
    <!-- /動画 -->
    <div class="textfv">
        <div class="textfv_sd">
            <div class="c-pagettl_area">
                <div class="textfv_ttlbox">
                    <h1 class="yano">SHOWROOM<br><span>ショールーム</span></h1>
                </div>
            </div>
        </div>

        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
    </div>

    <div class="main">

        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li>ショールーム</li>
            </ol>
        </div>
        <!-- /パンくず -->



        <section class="showroom">

            <h2 class="showroom_h2">INFORMATION</h2>
            <p class="showroom_h202">案内</p>


            <!-- アコーディオンエリア -->
            <div class="inner02 item_detail_area item_detail">
                <div class="flex">
                    <div class="left_box">

                        <!-- スライダー-->
                        <div class="swiper-container slider">
                            <?php if (have_rows('showroom_img_list')) : ?>
                                <ul class="gallery swiper-wrapper">
                                    <?php while (have_rows('showroom_img_list')) : the_row(); ?>
                                        <!-- 繰り返しフィールドの内容ここから -->
                                        <li class="swiper-slide"><img src="<?php the_sub_field('showroom_img'); ?>" alt=""></li>
                                        <!-- 繰り返しフィールドの内容ここまで -->
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!-- left_box -->


                    <div class="right_box">
                        <div class="item">
                            <p class="item_price pc"><?php the_field('info_title'); ?></p>
                            <p class="item_price02 pc"><?php the_field('info_text01'); ?></p>
                            <p class="item_text pc"><?php the_field('info_text02'); ?></p>

                            <!-- サムネイル -->
                            <div class="swiper-container slider-thumbnail">
                                <?php if (have_rows('showroom_img_list')) : ?>
                                    <ul class="choice-btn swiper-wrapper">
                                        <?php while (have_rows('showroom_img_list')) : the_row(); ?>
                                            <!-- 繰り返しフィールドの内容ここから -->
                                            <li class="swiper-slide"><img src="<?php the_sub_field('showroom_img'); ?>" alt="">
                                            </li>
                                            <!-- 繰り返しフィールドの内容ここまで -->
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                            <p class="item_title sp"><?php the_field('info_title'); ?></p><br>
                            <p class="item_price sp"><?php the_field('info_text01'); ?></p><br>
                            <p class="item_text sp"><?php the_field('info_text02'); ?></p>

                        </div>
                    </div><!-- right_box -->
                </div><!-- /flex -->
                <!-- <div id='product-component-1686202185011'></div> -->
                <?php if (the_field('cart')) : ?>
                <?php endif; ?>
            </div>

            <!-- howto -->
            <?php if (get_field('showroom_movie')) : ?>
                <div class="howto promo">
                    <h2 class="item_ttl yano">PROMOTION MOVIE</h2>
                    <div class="inner02">
                        <?php echo $embed_code = wp_oembed_get(get_field('showroom_movie')); ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- お問い合わせエリア -->
            <div class="showroom_contact">

                <p class="showroom_contact_p">
                    予約なしで試乗できますのでお気軽にご来店ください。
                </p>
                <a class="shop_a" href="<?php echo home_url(); ?>/contact">
                    <div class="shop">
                        <p class="btn_text">CONTACT</p>
                        <p class="footer_p">お問い合わせ</p>
                    </div>
                </a>
            </div>

        </section>

    </div><!-- /main -->


    <?php get_footer(); ?>

    <script>
        //サムネイル
        var sliderThumbnail = new Swiper('.slider-thumbnail', {
            slidesPerView: 6,
            //   spaceBetween: 20,
            freeMode: true,
        });

        //スライダー
        var slider = new Swiper('.slider', {
            slidesPerView: 1,
            thumbs: {
                swiper: sliderThumbnail
            }
        });
    </script>

    <script>
        jQuery(function() {
            $(".openbtn").click(function() {
                $(this).toggleClass('active');
                $('.open_menu').toggleClass('active');
            });

        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!--自作のJS-->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
</body>

</html>