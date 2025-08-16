<?php get_header(); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
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
    <div class="a"></div>
    <article class="l-news_cont p-single">
        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li><a href="<?php echo home_url(); ?>/news/">ニュース</a><span>&gt;</span></li>
                <li><?php the_title(); ?></li>
            </ol>
        </div>
        <!-- /パンくず -->
        <!-- c-inner-s -->
        <div class="c-inner-s c-p20">
            <!-- c-col_wrap -->
            <div class="c-col_wrap">
                <!-- c-post_wrap -->
                <div class="c-post_wrap">
                    <!-- c-post_area -->
                    <div class="c-post_area">
                        <?php if (have_posts()) : ?>
                            <h1 class="c-post_ttl"><?php the_title(); ?></h1>
                            <div class="c-ttl_bottom">
                                <?php
                                $terms = get_the_terms($post->ID, 'news_cat');
                                if ($terms) :
                                    foreach ($terms as $term) {
                                    echo '<p class="c-cat"><span>' . $term->name . '</span></p>';
                                }
                                endif;
                                ?>
                                <p class="c-day"><?php echo get_post_time('Y.m.d'); ?></p>
                            </div>
                            <div class="c-edit">
                                <?php if (has_post_thumbnail()) : ?>
                                    <figure class="c-thmb"><?php the_post_thumbnail(); ?></figure>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </div>
                        <?php endif; ?>
                        <!-- single-pager -->
                        <div class="single-pager">
                            <?php
                                $prevpost = get_adjacent_post(false, '', true);
                                $nextpost = get_adjacent_post(false, '', false);
                                if ($prevpost or $nextpost) {
                            ?>
                            <div class="pager_item prev">
                            <?php
                                if ($prevpost) { 
                                    echo '<a href="' . get_permalink($prevpost->ID) . '" title="' . get_the_title($prevpost->ID) . '" class="prev">PREV</a>';
                                } else {
                                    echo '<div class="prev_no"></div>';
                                }
                            ?>
                            </div>
                            <div class="pager_item all">
                            <?php
                                $referer = wp_get_referer();
                                $referer_post_id = url_to_postid($referer);
                                if ($referer && $referer != home_url('/') && !$referer_post_id) {
                                    echo '<a href="' . $referer . '"></a>';
                                } else {
                                    echo '<a href="' . home_url('/news/') . '"></a>';
                                }
                            ?>
                            </div>
                            <div class="pager_item next">
                            <?php
                                if ($nextpost) {
                                    echo '<a href="' . get_permalink($nextpost->ID) . '" title="' . get_the_title($nextpost->ID) . '"　class="next">NEXT</a>';
                                } else {
                                    echo '<div class="next_no"></div>';
                                }
                            ?>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- /single-pager -->
                        <!-- share -->
                        <div class="c-share_area">
                            <p class="c-text"><span class="en">SHARE</span><span class="ja">この記事をシェアする方はこちらから</span></p>
                            <ul class="c-sns_list">   
                                <li><a href="//www.facebook.com/sharer.php?u=<?php echo urlencode(get_permalink()); ?>&t=<?php echo urlencode(the_title("", "", 0)); ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/news/ico_fb.png"></a></li>
                                <li><a href="//twitter.com/intent/tweet?text=<?php echo urlencode(the_title("", "", 0)); ?>&<?php echo urlencode(get_permalink()); ?>&url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/news/ico_tw.png"></a></li>
                                <li><a href="//timeline.line.me/social-plugin/share?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noreferrer noopener"><img src="<?php echo get_template_directory_uri(); ?>/img/news/ico_line.png"></a></li>
                            </ul>
                        </div>
                        <!-- /share -->
                    </div>
                    <?php
                        global $post;
                        $term = array_shift(get_the_terms($post->ID, 'news_cat'));
                        $args = array(
                        'numberposts' => 3, 
                        'post_type' => 'news',
                        'taxonomy' => 'news_cat',
                        'term' => $term->slug,
                        'orderby' => 'rand',
                        'post__not_in' => array($post->ID)
                        );
                    ?>
                    <?php $myPosts = get_posts($args); if($myPosts) : ?>
                    <div class="c-related">
                        <p class="c-rel_ttl">RELATED ARTICLES <span>— 関連記事 —</span></p>
                        <div class="swiper js-post_slider">
                            <div class="swiper-wrapper">
  
                            <?php foreach($myPosts as $post) : setup_postdata($post); ?>
                            <div class="swiper-slide"><a href="<?php the_permalink(); ?>">
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
                            </a></div>
                            <?php endforeach; ?>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                    <?php else : ?>
                    <?php endif; wp_reset_postdata(); ?>     
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
            <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li><a href="<?php echo home_url(); ?>/news/">ニュース</a><span>&gt;</span></li>
            <li><?php the_title(); ?></li>
        </ol>
    </div>
    <?php get_footer(); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.7/swiper-bundle.min.js" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
jQuery(function () {

  //関連記事
  const swiper = new Swiper(".js-post_slider", {
    loop: true,
    slidesPerView: 1.5,
    spaceBetween: 20,
    centeredSlides : true,
    breakpoints: {
        600: {
            loop: false,
            centeredSlides : false,
            slidesPerView: 3,
            spaceBetween: 15
        },
        1024: {
            loop: false,
            centeredSlides : false,
            slidesPerView: 3,
            spaceBetween: 30
        },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    }
  });
});
    </script>
     </body>

 </html>