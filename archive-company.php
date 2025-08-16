<?php
/*
Template Name: company
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/showroom.css" type="text/css" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/company.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">
    <?php get_header(2); ?>
    <a href="https://hasegawa-mobility.co.jp/" class="footer_bnr" target="_blank">
        <img class="footer_bnr___img" src="<?php echo get_template_directory_uri(); ?>/img/banner/shop_bnr.png" alt="">
    </a>



    <!-- 動画 -->
    <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted
        playsinline></video>
    <!-- /動画 -->
    <div class="textfv">
        <div class="textfv_sd">
            <div class="c-pagettl_area">
                <div class="textfv_ttlbox">
                    <h1 class="yano">COMPANY<br><span>運営会社</span></h1>
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
                <li>運営会社</li>
            </ol>
        </div>
        <!-- /パンくず -->



        <section class="company">

            <h2 class="showroom_h2">OVERVIEW</h2>
            <p class="showroom_h202">概要</p>




            <div class="company_overview">

                <?php if (have_rows('company_overview')): ?>
                    <dl class="overview_flex_dl">
                        <?php while (have_rows('company_overview')): the_row(); ?>
                            <div class="overview_flex">
                                <dt class="overview_flex_dt">
                                    <span><?php the_sub_field('label_ttl'); ?></span>
                                </dt>
                                <dd class="overview_flex_dd">
                                    <?php the_sub_field('label_content'); ?>
                                </dd>
                            </div>
                        <?php endwhile; ?>
                    </dl>
                <?php endif; ?>




            </div>

        </section>

    </div><!-- /main -->


    <?php get_footer(); ?>



    <script>
        //アコーディオン
        jQuery(function($) {
            $('.toggle_title').click(function() {
                $(this).toggleClass('selected');
                $(this).next().slideToggle();
            });

            $(function() {
                $(".menu_shop").addClass("menu_hover");
            });

        });
    </script>

</body>

</html>