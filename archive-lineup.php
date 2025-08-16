<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lineup.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">

    <?php get_header(2); ?>
    <div class="fv_bg">
        <picture>
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/common/lineup_bg_sp.png" media="(max-width: 768px)" />
            <img class="" src="<?php echo get_template_directory_uri(); ?>/img/common/lineup_bg.png" alt="">
        </picture>
    </div>

    <!-- 画像fv -->
    <div class="imgfv">
        <div class="imgfv_sd">
            <div class="c-pagettl_area">
                <div class="imgfv_ttlbox">
                    <h1 class="yano">LINE UP<br><span>製品ラインナップ</span></h1>
                </div>
            </div>
        </div>

        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/imgbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_c_maru02.png" alt="">

    </div>
    <!-- /画像fv -->

    <div class="sec01">

        <!-- パンくず -->
        <div class="c-inner-l c-p20">
            <ol class="c-bread">
                <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
                <li>製品ラインナップ</li>
            </ol>
        </div>
        <!-- /パンくず -->

        <?php
        $category_slug = get_query_var('category_name'); ?>

        <?php single_cat_title(); ?>



        <!-- c-inner-s -->
        <div class="c-inner-s c-p20">
            <img src="<?php echo get_template_directory_uri(); ?>/img/commmon/lineup_bg.png" alt="">

            <!-- c-col_wrap -->
            <div class="c-col_wrap">
                <!-- c-post_wrap -->
                <div class="c-post_wrap">
                    <h2 class="item_ttl yano">特定小型原動機付自転車</h2>
                    <div class="box">
                        <!-- 画像 -->
                        <?php
                        $args = array(
                            'post_type' => 'lineup', // 投稿タイプ
                            'order' => 'DESC', // 降順
                            'orderby' => 'none', // 表示順
                            'post_status' => 'publish', //公開済みのみ表示
                            'paged' => get_query_var('paged'), // 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'item_cat',
                                    'terms' => array('kickscooter'),
                                    'field' => 'slug'
                                ),
                            ),
                        );
                        $new_query = new WP_Query($args); //サブループ作成
                        ?>
                        <?php if ($new_query->have_posts()) : ?>
                            <!-- ▼記事数が１の時だけ'center01'のクラスが付与される▼ -->
                            <ul class="c-post_list <?php if ($new_query->post_count == 1) echo 'center01'; ?>">
                                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

                                    <li class="c-item">
                                        <a class="c-item_a" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="c-thumb_list">
                                                    <img class="archive_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                            <?php else : ?>
                                                <!-- 画像がない場合 -->
                                                <div class="c-thumb_list">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                                </div>

                                            <?php endif; ?>
                                            <!-- 商品名 -->
                                            <div class="c-textarea">
                                                <p class="c-ttl"><?php the_title(); ?></p>
                                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                if (!empty($terms_cat)) { ?>
                                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                                        foreach ($terms_cat as $term_cat) {
                                                                            echo '<span>' . $term_cat->name . '</span>';
                                                                        } ?></p>
                                                <?php } ?>
                                            </div>

                                            <div class="detail_btn">
                                                <p>詳細を見る</p>
                                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 15.588 15.408">
                                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(0 0)" fill="#1C1918" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                            <!-- 投稿ないとき -->

                        <?php else : ?>
                            <ul>
                                <li class="coming_soon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                </li>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div><!-- box -->
                </div><!-- /c-post_wrap -->

                <div class="c-post_wrap">
                    <h2 class="item_ttl yano">一般原動機付自転車</h2>
                    <div class="box">
                        <!-- 画像 -->
                        <?php
                        $args = array(
                            'post_type' => 'lineup', // 投稿タイプ
                            'order' => 'DESC', // 降順
                            'orderby' => 'none', // 表示順
                            'post_status' => 'publish', //公開済みのみ表示
                            'paged' => get_query_var('paged'), // 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'item_cat',
                                    'terms' => array('bicycle'),
                                    'field' => 'slug'
                                ),
                            ),
                        );
                        $new_query = new WP_Query($args); //サブループ作成
                        ?>
                        <?php if ($new_query->have_posts()) : ?>
                            <!-- ▼記事数が１の時だけ'center01'のクラスが付与される▼ -->
                            <ul class="c-post_list <?php if ($new_query->post_count == 1) echo 'center01'; ?>">
                                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

                                    <li class="c-item">
                                        <a class="c-item_a" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="c-thumb_list">
                                                    <img class="archive_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                            <?php else : ?>
                                                <!-- 画像がない場合 -->
                                                <div class="c-thumb_list">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                                </div>

                                            <?php endif; ?>
                                            <!-- 商品名 -->
                                            <div class="c-textarea">
                                                <p class="c-ttl"><?php the_title(); ?></p>
                                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                if (!empty($terms_cat)) { ?>
                                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                                        foreach ($terms_cat as $term_cat) {
                                                                            echo '<span>' . $term_cat->name . '</span>';
                                                                        } ?></p>
                                                <?php } ?>
                                            </div>

                                            <div class="detail_btn">
                                                <p>詳細を見る</p>
                                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 15.588 15.408">
                                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(0 0)" fill="#1C1918" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                            <!-- 投稿ないとき -->

                        <?php else : ?>
                            <ul>
                                <li class="coming_soon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                </li>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                    </div><!-- box -->
                </div><!-- /c-post_wrap -->

                <!-- c-post_wrap -->
                <div class="c-post_wrap">
                    <h2 class="item_ttl yano">電動アシスト自転車</h2>
                    <div class="box">
                        <!-- 画像 -->
                        <?php
                        $args = array(
                            'post_type' => 'lineup', // 投稿タイプ
                            'order' => 'DESC', // 降順
                            'orderby' => 'none', // 表示順
                            'post_status' => 'publish', //公開済みのみ表示
                            'paged' => get_query_var('paged'), // 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'item_cat',
                                    'terms' => array('pedelec'),
                                    'field' => 'slug'
                                ),
                            ),
                        );
                        $new_query = new WP_Query($args); //サブループ作成
                        ?>
                        <?php if ($new_query->have_posts()) : ?>
                            <!-- ▼記事数が１の時だけ'center01'のクラスが付与される▼ -->
                            <ul class="c-post_list <?php if ($new_query->post_count == 1) echo 'center01'; ?>">
                                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

                                    <li class="c-item">
                                        <a class="c-item_a" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="c-thumb_list">
                                                    <img class="archive_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                            <?php else : ?>
                                                <!-- 画像がない場合 -->
                                                <div class="c-thumb_list">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                                </div>

                                            <?php endif; ?>
                                            <!-- 商品名 -->
                                            <div class="c-textarea">
                                                <p class="c-ttl"><?php the_title(); ?></p>
                                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                if (!empty($terms_cat)) { ?>
                                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                                        foreach ($terms_cat as $term_cat) {
                                                                            echo '<span>' . $term_cat->name . '</span>';
                                                                        } ?></p>
                                                <?php } ?>
                                            </div>

                                            <div class="detail_btn">
                                                <p>詳細を見る</p>
                                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 15.588 15.408">
                                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(0 0)" fill="#1C1918" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                            <!-- 投稿ないとき -->

                        <?php else : ?>
                            <ul>
                                <li class="coming_soon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                </li>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div><!-- box -->
                </div><!-- /c-post_wrap -->

                <!-- c-post_wrap -->
                <div class="c-post_wrap">
                    <h2 class="item_ttl yano">電動バイク</h2>
                    <div class="box">
                        <!-- 画像 -->
                        <?php
                        $args = array(
                            'post_type' => 'lineup', // 投稿タイプ
                            'order' => 'DESC', // 降順
                            'orderby' => 'none', // 表示順
                            'post_status' => 'publish', //公開済みのみ表示
                            'paged' => get_query_var('paged'), // 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'item_cat',
                                    'terms' => array('bike'),
                                    'field' => 'slug'
                                ),
                            ),
                        );
                        $new_query = new WP_Query($args); //サブループ作成
                        ?>
                        <?php if ($new_query->have_posts()) : ?>
                            <!-- ▼記事数が１の時だけ'center01'のクラスが付与される▼ -->
                            <ul class="c-post_list <?php if ($new_query->post_count == 1) echo 'center01'; ?>">
                                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

                                    <li class="c-item">
                                        <a class="c-item_a" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="c-thumb_list">
                                                    <img class="archive_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                            <?php else : ?>
                                                <!-- 画像がない場合 -->
                                                <div class="c-thumb_list">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                                </div>

                                            <?php endif; ?>
                                            <!-- 商品名 -->
                                            <div class="c-textarea">
                                                <p class="c-ttl"><?php the_title(); ?></p>
                                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                if (!empty($terms_cat)) { ?>
                                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                                        foreach ($terms_cat as $term_cat) {
                                                                            echo '<span>' . $term_cat->name . '</span>';
                                                                        } ?></p>
                                                <?php } ?>
                                            </div>

                                            <div class="detail_btn">
                                                <p>詳細を見る</p>
                                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 15.588 15.408">
                                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(0 0)" fill="#1C1918" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                            <!-- 投稿ないとき -->

                        <?php else : ?>
                            <ul>
                                <li class="coming_soon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                </li>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div><!-- box -->
                </div><!-- /c-post_wrap -->

                <!-- c-post_wrap -->
                <div class="c-post_wrap">
                    <h2 class="item_ttl yano">オプション</h2>
                    <div class="box">
                        <!-- 画像 -->
                        <?php
                        $args = array(
                            'post_type' => 'lineup', // 投稿タイプ
                            'order' => 'DESC', // 降順
                            'orderby' => 'none', // 表示順
                            'post_status' => 'publish', //公開済みのみ表示
                            'paged' => get_query_var('paged'), // 
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'item_cat',
                                    'terms' => array('option'),
                                    'field' => 'slug'
                                ),
                            ),
                        );
                        $new_query = new WP_Query($args); //サブループ作成
                        ?>
                        <?php if ($new_query->have_posts()) : ?>
                            <!-- ▼記事数が１の時だけ'center01'のクラスが付与される▼ -->
                            <ul class="c-post_list <?php if ($new_query->post_count == 1) echo 'center01'; ?>">
                                <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>

                                    <li class="c-item">
                                        <a class="c-item_a" href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <div class="c-thumb_list">
                                                    <img class="archive_img" src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </div>
                                            <?php else : ?>
                                                <!-- 画像がない場合 -->
                                                <div class="c-thumb_list">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                                </div>

                                            <?php endif; ?>
                                            <!-- 商品名 -->
                                            <div class="c-textarea">
                                                <p class="c-ttl"><?php the_title(); ?></p>
                                                <?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                if (!empty($terms_cat)) { ?>
                                                    <p class="c-cat"><?php $terms_cat = get_the_terms($post->ID, 'news_cat');
                                                                        foreach ($terms_cat as $term_cat) {
                                                                            echo '<span>' . $term_cat->name . '</span>';
                                                                        } ?></p>
                                                <?php } ?>
                                            </div>

                                            <div class="detail_btn">
                                                <p>詳細を見る</p>
                                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 15.588 15.408">
                                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(0 0)" fill="#1C1918" />
                                                </svg>
                                            </div>
                                        </a>
                                    </li>

                                <?php endwhile; ?>
                            </ul>
                            <!-- 投稿ないとき -->

                        <?php else : ?>
                            <ul>
                                <li class="coming_soon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/coming_soon.png" alt="comeingsoon">
                                </li>
                            </ul>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                    </div><!-- box -->
                </div><!-- /c-post_wrap -->

            </div>
            <!-- /c-col_wrap -->
        </div>
        <!-- /c-inner-s -->


    </div>
    <!-- /sec01 -->

    <div class="clear_box">
    </div>

    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>製品ラインナップ</li>
        </ol>
    </div>

    <?php get_footer(); ?>

</body>

</html>