<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/post.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">
    <?php get_header(2); ?>

    <div class="fv_bg">
        <picture>
            <!-- <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/news_bg_sp.png" media="(max-width: 768px)" /> -->
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/common/news_bg.png" alt="">
        </picture>
    </div>

    <!-- 画像fv -->
    <div class="imgfv">
        <div class="imgfv_sd">
            <div class="c-pagettl_area">

                <div class="imgfv_ttlbox">
                    <h1 class="yano">NEWS<br><span>ニュース</span></h1>
                </div>
            </div>
        </div>
    
        <img class="maru" src="<?php echo get_template_directory_uri(); ?>/img/common/imgbg_maru.png" alt="">
    
    </div>
    <!-- /画像fv -->
<article class="l-news_cont">
     <!-- パンくず -->
     <div class="c-inner-l c-p20">
        <ol class="c-bread">
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>ニュース</li>
        </ol>
    </div>
    <!-- /パンくず -->
    <!-- c-inner-s -->
    <div class="c-inner-s c-p20">
        <!-- c-col_wrap -->
        <div class="c-col_wrap">
            <!-- c-post_wrap -->
            <div class="c-post_wrap">
                <ul class="c-post_list">
                    <?php while (have_posts()) : the_post(); ?>
                    <li class="c-item"><a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) : ?>
                            <figure class="c-thumb" style="background-image: url(<?php if (has_post_thumbnail()) { the_post_thumbnail_url(); }; ?>)"></figure>
                        <?php else : ?>
                            <figure class="c-thumb" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/common/img-noimage.jpg)"></figure>
                        <?php endif; ?>
                        <div class="c-textarea">
                            <p class="c-ttl"><?php the_title(); ?></p>
                            <div class="c-bottom">
                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                if (!empty($terms_cat)) { ?>
                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                    foreach ($terms_cat as $term_cat) {
                                    echo '<span>' . $term_cat->name . '</span>';
                                    } ?></p>
                                <?php } ?>
                                <p class="c-day"><?php echo get_post_time('Y.m.d'); ?></p>
                            </div>
                        </div>
                    </a></li>
                    <?php endwhile; ?>
                </ul>
                <!--pager -->
                <div class="c-pager">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 0,
                        'prev_text' => __('', 'textdomain'),
                        'next_text' => __('', 'textdomain'),
                    ));
                    ?>
                </div>
                <!-- /pager -->
            </div>
            <!-- /c-post_wrap -->
            <!-- c-side_cat -->
            <div class="c-side_cat">
                <div class="c-sticky">
                    <p class="c-side_ttl">CATEGORY</p>
                    <ul>
                        <li class="current">
                            <a href="<?php echo home_url(); ?>/news/">ALL</a>
                        <?php
                        $terms = get_terms('news_cat');
                        foreach ($terms as $term) {
                            echo '<li><a href="' . get_term_link($term) . '">' . $term->name . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <!-- /c-side_cat -->
        </div>
        <!-- /c-col_wrap -->
    </div>
    <!-- /c-inner-s -->
</article>
    <div class="clear_box">
    </div>

    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>ニュース</li>
        </ol>
    </div>

    <?php get_footer(); ?>
     </body>

 </html>