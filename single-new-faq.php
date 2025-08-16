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
    <img class="fv_bg" src="<?php echo get_template_directory_uri(); ?>/img/common/news_bg.png" alt="">
    <div class="a"></div>

    <div class="singleFaq-main">
        <!-- パンくず -->
        <div class="c-inner-l c-p20 bl_singleFagBread">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li class="aaa"><a href="<?php echo home_url(); ?>/faq/">よくある質問</a><span>&gt;</span></li>
                <li> <?php if (have_posts()): ?><?php the_title(); ?><?php endif; ?></li>
            </ol>
        </div>
        <!-- /パンくず -->
        <section class="ly_faqSection">
            <div class="ly_faqSection_inner">
                <!-- select -->
                <?php get_template_part("faq-cat-navi"); ?>
                <div class="ly_faqPostSection">
                    <?php if (have_posts()): ?>
                        <div class="ly_faqPostWrapper">
                            <div class="ly_faqPostWrapper_inner">
                                <?php
                                $terms = get_the_terms($post->ID, 'faq_cat');
                                if ($terms) {
                                    foreach ($terms as $term) {
                                        echo '<p class="el_postCateTtl">' . $term->name . '</p>';
                                    }
                                }
                                ?>
                                <div class="bl_faqPostContets">
                                    <h1 class="bl_faqPostContets_ttl">
                                        <span class="bl_faqPostContets_ttl_head">Q</span>
                                        <span class="bl_faqPostContets_ttl_txt"><?php the_title(); ?></span>
                                    </h1>
                                    <div class="bl_faqPostContets_txt">
                                        <p class="el_faqPostContets_txt_head">A</p>
                                        <div class="el_faqPostContets_txt_txt c-edit">
                                            <?php the_content(); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? endif; ?>
                    <div class="ly_faqPostArchiveBtnWrapper">
                        <div class="bl_faqCommonAllBtn">
                            <a class="bl_faqCommonAllBtn_btn" href="<?php echo home_url(); ?>/faq/">
                                <p class="el_faqCommonAllBtn_btn_txt">一覧に戻る</p>
                                <div class="el_faqCommonAllBtn_btn_arrow">
                                    <svg width="11" height="8" viewBox="0 0 11 8" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.3536 4.35355C10.5488 4.15829 10.5488 3.84171 10.3536 3.64645L7.17157 0.464466C6.97631 0.269204 6.65973 0.269204 6.46447 0.464466C6.2692 0.659728 6.2692 0.976311 6.46447 1.17157L9.29289 4L6.46447 6.82843C6.2692 7.02369 6.2692 7.34027 6.46447 7.53553C6.65973 7.7308 6.97631 7.7308 7.17157 7.53553L10.3536 4.35355ZM0 4.5H10V3.5H0V4.5Z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li class="aaa"><a href="<?php echo home_url(); ?>/faq"></a>>よくある質問</a><span>&gt;</span></li>
            <li><?php the_title(); ?></li>
        </ol>
    </div>
    <div class="clear_box"></div>
    <?php get_footer(); ?>
</body>

</html>