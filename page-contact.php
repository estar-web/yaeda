<?php
/*
Template Name: contact
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" />
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
                    <h1 class="yano">CONTACT<br><span>お問い合わせ</span></h1>
                </div>
            </div>
        </div>
        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
    </div>

    <div class="contact-main">
        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li>お問い合わせ</li>
            </ol>
        </div>
        <!-- /パンくず -->

        <!-- よくいただくお問い合わせ -->
        <section class="ly_frequentFaQSection">
            <div class="ly_frequentFaQSection_inner">
                <div class="bl_frequentFaQSectionTtl">
                    <h2 class="bl_frequentFaQSectionTtl_txt">よくいただくお問い合わせ</h2>
                    <p class="bl_frequentFaQSectionTtl_subTxt">よくいただくお問い合わせを<br
                            class="sp_br">サイトに掲載しています。<br>お問い合わせ前にご確認ください。</p>
                </div>
                <ul class="ly_faqWrapperList">
                    <?php
                    $count = "";
                    $faqTaxonomy_slug = "faq_cat";//タクソノミースラッグ
                    $faqTerms = get_terms($faqTaxonomy_slug);//タームを指定
                    ?>
                    <?php foreach ($faqTerms as $faqTerm): ?>

                        <?php
                        $args = array(
                            'post_type' => 'new-faq',
                            $faqTaxonomy_slug => $faqTerm->slug,
                            'posts_per_page' => -1
                        );
                        $faqQuery = new WP_Query($args);
                        ?>

                        <?php
                        //ターム内の記事にチェックの入った記事カウント
                        $count = 0;
                        while ($faqQuery->have_posts()) {
                            $faqQuery->the_post();
                            if (get_field('topPickup') == 1) {
                                $count = $count + 1;
                            }
                        }
                        ?>
                        <?php if ($count != 0): ?>
                            <li class="bl_faqWrapperList_item">
                                <h3 class="el_faqWrapper_itemTtl"><? echo $faqTerm->name; ?></h3>
                                <div class="ly_faqItemWrapper">
                                    <ul class="ly_faqContentsList">
                                        <?php if ($faqQuery->have_posts()): ?>

                                            <?php while ($faqQuery->have_posts()): ?>

                                                <?php $faqQuery->the_post(); ?>

                                                <?php if (get_field('topPickup') == 1): ?>
                                                    <!-- Pickupループ -->
                                                    <li class="bl_faqContentsList_item">
                                                        <a class="el_faqContentsList_item_anker"
                                                            href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                                    </li>
                                                <?php endif; ?>

                                            <?php endwhile; ?>

                                        <? endif; ?>
                                    </ul>
                                    <div class="ly_faqviewAllBtnWrapper">
                                        <div class="bl_faqCommonAllBtn">
                                            <a class="bl_faqCommonAllBtn_btn"
                                                href="<? echo get_term_link($faqTerm->slug, 'faq_cat'); ?>">
                                                <p class="el_faqCommonAllBtn_btn_txt"><? echo $faqTerm->name; ?>の質問をもっと見る</p>
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
                                </div>
                            </li>
                        <?php else: ?>

                            <?php continue; //記事内にトップに表示にチェックがなければ?>

                        <?php endif; ?>

                        <?php wp_reset_postdata(); //リセット ?>

                    <?php endforeach; ?>
                </ul>
                <div class="ly_formLinkWrapper">
                    <h3 class="el_formLinkWrapper_ttl">問題が解決しない場合</h3>
                    <p class="el_formLinkWrapper_ttlSubtxt">下記リンク先のメールフォームより<br class="sp_br">お問い合わせください。</p>
                    <div class="bl_formLinkWrapper_btnWrpper">
                        <div class="bl_faqCommonAllBtn">
                            <a class="bl_faqCommonAllBtn_btn" href="<?php echo home_url(); ?>/form/">
                                <p class="el_faqCommonAllBtn_btn_txt">メールでのお問い合わせ</p>
                                <div class="el_faqCommonAllBtn_btn_arrow">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/contact/arrow-line.svg"
                                        alt="">
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
            <li>お問い合わせ</li>
        </ol>
    </div>
    <div class="clear_box"></div>
    <?php get_footer(); ?>
</body>

</html>