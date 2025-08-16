<?php
/*
Template Name: from
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/form.css" type="text/css" />
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

    <div class="form-main">
        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li>お問い合わせ</li>
            </ol>
        </div>

        <div class="ly_contactFormWrapper">
            <div class="ly_contactFormWrapper_inner">
                <section class="bl_contactConfirmSection">
                    <h2 class="el_contactConfirmSection_ttl">お問い合わせの前に<br class="sp_br">ご確認ください</h2>
                    <ul class="bl_confirmList">
                        <?php while (have_rows('confirmList')):
                            the_row(); ?>

                            <?php if (get_sub_field('confirmContent')): ?>

                                <li class="el_confirmList_item">
                                    <?php the_sub_field('confirmContent'); ?>
                                    <?php if (get_sub_field('detailLink')): ?>
                                        詳細は<a class="el_confirmList_item_txtLink" href="<?php the_sub_field('detailLink'); ?>"
                                            target="_blank" rel="noopener noreferrer">こちら</a>
                                    <?php endif; ?>
                                </li>

                            <?php endif; ?>

                        <?php endwhile; ?>
                    </ul>
                </section>
                <?php the_content(); ?>
            </div>
        </div>

    </div>
    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>お問い合わせ</li>
        </ol>
    </div>
    <?php get_footer(); ?>
</body>

</html>