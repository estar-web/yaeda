<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">
    <?php get_header(2); ?>
    <!-- 動画 -->
    <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted
        playsinline></video>
    <!-- /動画 -->

    <div class="textfv">
        <div class="textfv_sd">
            <div class="c-pagettl_area">
                <div class="textfv_ttlbox">
                    <h1 class="yano">FAQ<br><span>よくある質問</span></h1>
                </div>
            </div>
        </div>
        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
    </div>
    <div class="faq-main">
        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li>よくある質問</li>
            </ol>
        </div>
        <!-- /パンくず -->
        <section class="ly_faqSection">
            <div class="ly_faqSection_inner">
                <!-- select -->
                <?php get_template_part("faq-cat-navi"); ?>
                <ul class="ly_faqList">
                    <?php
                    $faqTerms = get_terms($faqTaxonomy_slug);//タームを指定
                    ?>
                    <li class="ly_faqList_item bl_taxFaqList_item">
                        <h3 class="el_faqList_item_ttl"><?php single_term_title(); ?></h3>
                        <ul class="ly_faqContetsList">
                            <?php if (have_posts()): ?>

                                <?php while (have_posts()): ?>

                                    <?php the_post(); ?>

                                    <li class="bl_faqContetsList_item">
                                        <a href="<?php the_permalink(); ?>" class="bl_faqContetsList_item_btn">
                                            <p class="el_faqContetsList_item_btn_head">Q</p>
                                            <p class="el_faqContetsList_item_btn_txt"><?php the_title(); ?></p>
                                        </a>
                                    </li>

                                <?php endwhile; ?>

                            <? endif; ?>
                        </ul>
                    </li>
                </ul>
            </div>
        </section>
    </div>
    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>よくある質問</li>
        </ol>
    </div>
    <div class="clear_box"></div>
    <?php get_footer(); ?>
</body>

</html>