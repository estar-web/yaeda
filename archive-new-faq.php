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
                    $faqCateTaxonomy_slug = "faq_cat";//タクソノミースラッグ
                    $faqTerms = get_terms($faqCateTaxonomy_slug);//タームを指定
                    ?>
                    <?php foreach ($faqTerms as $faqTerm): ?>

                        <li class="ly_faqList_item">
                            <h3 class="el_faqList_item_ttl"><?php echo $faqTerm->name; ?></h3>
                            <ul class="ly_faqContetsList">
                                <?php
                                $args = array(
                                    'post_type' => 'new-faq',
                                    $faqCateTaxonomy_slug => $faqTerm->slug,//タクソノミーからターム指定
                                    'posts_per_page' => -1
                                );
                                $faqQuery = new WP_Query($args);
                                ?>
                                <?php if ($faqQuery->have_posts()): ?>

                                    <?php while ($faqQuery->have_posts()): ?>

                                        <?php $faqQuery->the_post(); ?>

                                        <li class="bl_faqContetsList_item">
                                            <a href="<?php the_permalink(); ?>/" class="bl_faqContetsList_item_btn">
                                                <p class="el_faqContetsList_item_btn_head">Q</p>
                                                <p class="el_faqContetsList_item_btn_txt"><?php the_title(); ?></p>
                                            </a>
                                        </li>

                                    <?php endwhile; ?>

                                <? endif; ?>
                            </ul>
                            <div class="bl_faqCateArchiveBtn">
                                <div class="bl_faqCommonAllBtn">
                                    <a class="bl_faqCommonAllBtn_btn"
                                        href="<? echo get_term_link($faqTerm->slug, 'faq_cat'); ?>/">
                                        <p class="el_faqCommonAllBtn_btn_txt"><?php echo $faqTerm->name; ?>の質問をもっと見る</p>
                                        <div class="el_faqCommonAllBtn_btn_arrow">
                                            <svg width="11" height="8" viewBox="0 0 11 8"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M10.3536 4.35355C10.5488 4.15829 10.5488 3.84171 10.3536 3.64645L7.17157 0.464466C6.97631 0.269204 6.65973 0.269204 6.46447 0.464466C6.2692 0.659728 6.2692 0.976311 6.46447 1.17157L9.29289 4L6.46447 6.82843C6.2692 7.02369 6.2692 7.34027 6.46447 7.53553C6.65973 7.7308 6.97631 7.7308 7.17157 7.53553L10.3536 4.35355ZM0 4.5H10V3.5H0V4.5Z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </li>

                    <?php endforeach; ?>
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