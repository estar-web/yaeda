<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lineup.css" type="text/css" />
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
</head>


<body class="noto">
    <?php get_header(2); ?>
    <div class="fv_bg">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/lineup_bg_sp.png" media="(max-width: 768px)" />
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/common/lineup_bg.png" alt="">
        </picture>
    </div>
    <div class="a"></div>

    <div class="main">
        <!-- 商品詳細 -->
        <section>
            <div class="item_detail">
                <!-- パンくず -->
                <div class="c-inner-l c-p20">
                    <ol class="c-bread">
                        <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                        <li class="aaa"><a href="<?php echo get_post_type_archive_link('lineup'); ?>">製品ラインナップ</a><span>&gt;</span></li>
                        <li><?php the_title(); ?></li>

                    </ol>
                </div>
                <!-- /パンくず -->

                <div class="inner02 item_detail_area">
                    <div class="flex">
                        <div class="left_box">

                            <!-- スライダー-->
                            <div class="swiper-container slider">
                                <?php if (have_rows('image_list')) : ?>
                                    <ul class="gallery swiper-wrapper">
                                        <?php while (have_rows('image_list')) : the_row(); ?>
                                            <!-- 繰り返しフィールドの内容ここから -->
                                            <li class="swiper-slide"><img src="<?php the_sub_field('image'); ?>" alt=""></li>
                                            <!-- 繰り返しフィールドの内容ここまで -->
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div><!-- left_box -->


                        <div class="right_box">
                            <div class="item">
                                <p class="item_title pc"><?php the_title(); ?></p><br>
                                <p class="item_price pc"><?php the_field('price'); ?></p><br>
                                <p class="item_text pc"><?php the_field('item_text'); ?></p>

                                <!-- サムネイル -->
                                <div class="swiper-container slider-thumbnail">
                                    <?php if (have_rows('image_list')) : ?>
                                        <ul class="choice-btn swiper-wrapper">
                                            <?php while (have_rows('image_list')) : the_row(); ?>
                                                <!-- 繰り返しフィールドの内容ここから -->
                                                <li class="swiper-slide"><img src="<?php the_sub_field('image'); ?>" alt=""></li>
                                                <!-- 繰り返しフィールドの内容ここまで -->
                                            <?php endwhile; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                                <p class="item_title sp"><?php the_title(); ?></p><br>
                                <p class="item_price sp"><?php the_field('price'); ?></p><br>
                                <p class="item_text sp"><?php the_field('item_text'); ?></p>

                            </div>
                        </div><!-- right_box -->
                    </div><!-- /flex -->
                    <!-- <div id='product-component-1686202185011'></div> -->
                    <!-- </?php if (the_field('cart')) : ?>
                    </?php endif; ?> -->
                    <a href="<?php echo esc_url(get_field('cart')); ?>" target="_blank" class="store_link">購入ページへ</a>
                    <p class="storeTxt"><?php echo get_field('store_txt'); ?></p>
                </div>
            </div><!-- /item_detail -->
        </section>


        <!-- howto -->
        <section>
            <?php if (get_field('howto')) : ?>
                <div class="howto">
                    <h2 class="item_ttl yano">HOW TO RIDE<br><span>乗り方</span></h2>
                    <div class="inner02">
                        <?php echo $embed_code = wp_oembed_get(get_field('howto')); ?>
                    </div>
                </div>
            <?php endif; ?>
        </section>


        <!-- features -->
        <section>
            <div class="features">
                <div class="inner02">

                    <h2 class="item_ttl yano">FEATURES<br><span>特長</span></h2>

                    <?php if (have_rows('features')) : ?>

                        <?php $c = 1;
                        while (have_rows('features')) : the_row(); ?>
                            <!-- 繰り返しフィールドの内容ここから -->

                            <div class="features_area">

                                <div class="features_flex">
                                    <div class="num"><?php if ($c < 10) { ?>0<?php }; ?><?php echo $c; ?></div>
                                    <div class="features_img">
                                        <img src="<?php the_sub_field('features_image'); ?>" alt="">
                                    </div>
                                    <div class="features_txt">
                                        <?php if (get_sub_field('features_title')) : ?>
                                            <div class="fe_ttl">
                                                <?php the_sub_field('features_title'); ?>
                                            </div>
                                        <?php endif; ?>
                                        <div class="fe_txt">
                                            <?php the_sub_field('features_detail'); ?>
                                        </div>

                                    </div>
                                </div>
                                <?php if (get_sub_field('free')) : ?>
                                    <div class="fe_free">
                                        <?php the_sub_field('free'); ?>
                                    </div>
                                <?php endif; ?>

                            </div>
                            <!-- 繰り返しフィールドの内容ここまで -->

                        <?php $c++;
                        endwhile; ?>
                    <?php endif; ?>


                </div>
                <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/maru_wh.png" alt="">
                <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_whsp.png" alt="">
            </div>
        </section>


        <!-- spec -->
        <section>
            <div class="spec">
                <div class="inner02">

                    <h2 class="item_ttl yano">SPEC<br><span>製品仕様</span></h2>

                    <?php if (have_rows('spec')) : ?>
                        <div class="spec_flex">
                            <dl>
                                <?php while (have_rows('spec')) : the_row(); ?>
                                    <!-- 繰り返しフィールドの内容ここから -->

                                    <div class="spec_content">
                                        <dt><?php the_sub_field('spec_title'); ?></dt>
                                        <dd><?php the_sub_field('spec_detail'); ?></dd>
                                    </div>

                                    <!-- 繰り返しフィールドの内容ここまで -->

                                <?php endwhile; ?>
                            </dl>
                        </div>
                        <div class="spec_note"><?php the_field('spec_note'); ?></div>
                    <?php endif; ?>
                </div>
            </div>
        </section>



        <!-- explanation -->
        <?php
        $explanation_title = get_field('explanation_title'); // タイトルの値を取得
        $explanation = get_field('explanation'); // 説明の値を取得
        if ($explanation_title || $explanation) : // タイトルまたは説明が空でない場合にセクションを表示
        ?>
            <section>
                <div class="attention">
                    <div class="inner02">
                        <?php if ($explanation_title) : // タイトルが空でない場合に表示 
                        ?>
                            <div class="attntion_ttl">
                                <?php the_field('explanation_title'); ?>
                            </div>
                        <?php endif; ?>

                        <?php if ($explanation) : // 説明が空でない場合に表示 
                        ?>
                            <?php while (have_rows('explanation')) : the_row(); ?>
                                <!-- 繰り返しフィールドの内容ここから -->
                                <div class="mt20"><?php the_sub_field('explanation_list'); ?></div>
                                <!-- 繰り返しフィールドの内容ここまで -->
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php endif; ?>
        <?php
            $lineup_faq_slug = get_field('lineup_faq');

            if ($lineup_faq_slug): // カスタムフィールドが存在する場合のみ実行
            $faqTaxonomy_slug = "faq_cat"; // タクソノミースラッグ
            $args = array(
                'post_type' => 'new-faq',
                'tax_query' => array(
                    array(
                        'taxonomy' => $faqTaxonomy_slug,
                        'field'    => 'slug',
                        'terms'    => $lineup_faq_slug,
                    ),
                ),
                'posts_per_page' => -1,
            );
            $faqQuery = new WP_Query($args);

            if ($faqQuery->have_posts()): // 該当する投稿がある場合のみセクションを表示
        ?>
            <section>
                <div class="lineup_faq">
                    <div class="inner02">
                        <h2 class="faq_ttl">
                            <?php the_title(); ?>のよくある質問
                        </h2>
                        <p class="faq_description">
                            よくいただくお問い合わせを<br class="sp_br">サイトに掲載しています。<br>
                            お問い合わせ前にご確認ください。
                        </p>
                        <div class="faq_content">
                            <p class="faq_content_ttl"><?php the_title(); ?>について</p>
                            <ul class="faq_content_list">
                                <?php while ($faqQuery->have_posts()): $faqQuery->the_post(); ?>
                                    <li class="faq_content_list_item">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </li>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </ul>
                            <div class="faq_content_btn">
                                <div class="bl_faqCommonAllBtn">
                                    <a class="bl_faqCommonAllBtn_btn" href="">
                                        <p class="el_faqCommonAllBtn_btn_txt"><?php the_title(); ?>についての質問をもっと見る</p>
                                        <div class="el_faqCommonAllBtn_btn_arrow">
                                            <svg width="11" height="8" viewBox="0 0 11 8" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.3536 4.35355C10.5488 4.15829 10.5488 3.84171 10.3536 3.64645L7.17157 0.464466C6.97631 0.269204 6.65973 0.269204 6.46447 0.464466C6.2692 0.659728 6.2692 0.976311 6.46447 1.17157L9.29289 4L6.46447 6.82843C6.2692 7.02369 6.2692 7.34027 6.46447 7.53553C6.65973 7.7308 6.97631 7.7308 7.17157 7.53553L10.3536 4.35355ZM0 4.5H10V3.5H0V4.5Z" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
            endif;
            wp_reset_postdata(); // クエリのリセット
            endif;
        ?>

    </div>

    <div class="clear_box">
    </div>


    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>製品ラインナップ</li>
        </ol>
    </div>

    <?php the_content(); ?>

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







<!-- <div class="flex">
    <div class="left_box">
        <div class="left_l">
            <p>iPhoneの方はこちら</p>
            <a href="" target="blank"><img src="https://stg.spiqa.design/yadea/wp-content/themes/yadea/img/common/btn_app.png" alt=""></a>
        </div>
        <img src="https://stg.spiqa.design/yadea/wp-content/themes/yadea/img/common/qr_app.svg" alt="">
    </div>

    <div class="right_box">
        <div class="left_l">
            <p>Androidの方はこちら</p>
            <a href="" target="blank"><img src="https://stg.spiqa.design/yadea/wp-content/themes/yadea/img/common/btn_google.png" alt=""></a>
        </div>
        <img src="https://stg.spiqa.design/yadea/wp-content/themes/yadea/img/common/qr_google.svg" alt="">
    </div>
 </div> -->