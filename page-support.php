<?php
/*
Template Name: support
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/support.css" type="text/css" />

<?php wp_head(); ?>
</head>

<body class="noto">
    <?php get_header(2); ?>

    <!-- 動画 -->
    <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted playsinline></video>
    <!-- /動画 -->

    <div class="textfv">
        <div class="textfv_sd">
            <div class="c-pagettl_area">
                <div class="textfv_ttlbox">
                    <h1 class="yano">SUPPORT<br><span>アフターサポート</span></h1>
                </div>
            </div>
        </div>

        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">

    </div>

    <!-- パンくず -->
    <div class="c-inner-l c-p20">
        <ol class="c-bread">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>アフターサポート</li>
        </ol>
    </div>
    <!-- /パンくず -->

    <section>
        <div class="sec01">
            <div class="inner02">
                <h2 class="item_ttl yano">TROUBLE<br><span>悩み・問題</span></h2>
            </div>

            <div class="trouble_box">
                <h3>こんな症状があったら<br class="br_sp">お近くの修理店にお問い合わせください！</h3>
                <ul class="box_txt">
                    <li>ブレーキが効きづらい</li>
                    <li>ライト<sup>&#8251;</sup>が点灯しない</li>
                    <li>ディスプレイが表示されない</li>
                    <li>機体がガタつく</li>
                    <li>ブレーキワイヤーに亀裂がある</li>
                    <li>異音がある</li>
                    <li>タイヤがパンクしている</li>
                    <li>クラクションの音が変</li>
                </ul>
                <span>&#8251;ウインカー、ヘッドライト、テールライト</span>
            </div>
        </div>
        <div class="sec02">
            <div class="sec02_box">
                <p>電動キックボードの『日常点検』を<br class="br_sp">動画でチェックできます</p>
                <div class="sec02_btn pc">
                    <a href="https://www.youtube.com/watch?v=47GHuCPzsEk" target="_blank">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/btn_douga.svg" alt="YouTube 動画でチェック">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/btn_douga_hov.svg" alt="YouTube 動画でチェック">
                    </a>
                </div>
                <div class="sec02_btn sp">
                    <a href="https://www.youtube.com/watch?v=47GHuCPzsEk">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/common/btn_douga_sp.svg" alt="YouTube 動画でチェック">
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="sec03">
            <div class="inner02">
                <h2>SUPPORT SHOP<span>アフターサポート対応店舗</span></h2>
                <ul class="area_list">

                    <?php
                    $taxonomy = 'area_cat'; //タクソノミー名
                    $args = array(
                        'pad_counts' => true,
                        'hide_empty' => true,
                        'parent' => 0
                    );

                    $terms = get_terms($taxonomy, $args);
                    $i = 1;
                    foreach ($terms as $term) : //親タームのみ回す

                        $term_id = $term->term_id;
                        $term_count = $term->count;
                        $term_name = $term->name;
                        $term_url = get_term_link($term);
                        $term_slug = $term->slug;
                        $termchildren = get_term_children($term_id, $taxonomy);
                    ?>

                        <li>
                            <a href="#<?php echo $i; ?>">
                                <p><?php echo $term_name; ?></p>
                                <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588">
                                    <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918" />
                                </svg>
                                <div class="bottom_line"></div>
                            </a>
                        </li>
                    <?php $i++;
                    endforeach; ?>
                    <?php wp_reset_postdata(); ?>

                </ul>
                <!-- <ul class="area_list">
                <li>    
                    <a href="#area01">
                        <p>北海道・東北</p>
                        <svg class="shitayaji" class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area02">
                        <p>関東</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area03">
                        <p>中部</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area04">
                        <p>近畿</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area05">
                        <p>中国</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area06">
                        <p>四国</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>
                <li>
                    <a href="#area07">
                        <p>九州・沖縄</p>
                        <svg class="shitayaji" xmlns="http://www.w3.org/2000/svg" width="15.408" height="15.588" viewBox="0 0 15.408 15.588"><path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(15.408 0) rotate(90)" fill="#1c1918"/></svg>
                        <div class="bottom_line"></div>
                    </a>
                </li>

                </ul> -->
            </div>
        </div>

    </section>


    <!-- <section>
        <div class="sec04">
            <div class="inner02">
                <div class="area01" id="area01">
                    <h2 class="area_ttl">北海道・東北</h2>

                </div>
                <div class="area02" id="area02">
                    <h2 class="area_ttl">関東</h2>

                    
                </div>
                <div class="area03" id="area03">
                    <h2 class="area_ttl">中部</h2>

                    
                </div>
                <div class="area04" id="area04">
                    <h2 class="area_ttl">近畿</h2>

                    
                </div>
                <div class="area05" id="area05">
                    <h2 class="area_ttl">中国</h2>

                    
                </div>
                <div class="area06" id="area06">
                    <h2 class="area_ttl">四国</h2>

                    
                </div>
                <div class="area07" id="area07">
                    <h2 class="area_ttl">九州・沖縄</h2>

                    
                </div>


            </div>
        </div>

    </section> -->


    <section>
        <div class="sec04">
            <div class="inner02">
                <div class="inner_inner">
                    <?php // タームの親・子の一覧にタームに紐づく投稿一覧を表示する方法
                    $categories = get_terms('area_cat', 'parent=0');
                    $i = 1;
                    foreach ($categories as $cat) {
                        echo '<h2 class="area_h2" id="' . $i . '">' . esc_html($cat->name) . '</h2>'; // 親タームタイトル
                        $children = get_terms('area_cat', 'hierarchical=0&parent=' . $cat->term_id);
                        if ($children) { // 子タームの有無
                            foreach ($children as $child) {
                                echo '<div class="toggle_title"><h3>' . esc_html($child->name) . '<span class="plus"></span></h3></div>'; // 子タームタイトル
                                $catslug = $child->slug;
                                $args = array(
                                    'post_type' => 'shop',
                                    'area_cat' => $catslug,
                                    'posts_per_page' => -1
                                );
                                $myquery = new WP_Query($args);
                    ?>
                                <?php if ($myquery->have_posts()) : ?>
                                    <ul class="item_content toggle_ans">
                                        <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                                            <li><!-- 記事詳細 -->
                                                <div class="store_name">
                                                    <?php if (get_field('url')) : ?>
                                                        <a class="blank" href="<?php the_field('url'); ?>" target="blank"><?php the_title(); ?></a>
                                                    <?php else :  ?>
                                                        <?php the_title(); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="flex">
                                                    <p class="ttl">住所</p>
                                                    <p><?php the_field('address'); ?></p>
                                                </div>
                                                <div class="flex">
                                                    <p class="tel">TEL</p>
                                                    <p><?php the_field('tel'); ?></p>
                                                </div>
                                                <p class="check_ttl">サポート対象製品</p>
                                                <div class="flex_item">
                                                    <img class="pc a<?php the_field('support_item'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/common/kick_img.svg" alt="電動キックボード">
                                                    <img class="pc b<?php the_field('support_item'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/common/bicycle_img.svg" alt="電動自転車">

                                                    <img class="sp a<?php the_field('support_item'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/common/kick_img_sp.svg" alt="電動キックボード">
                                                    <img class="sp b<?php the_field('support_item'); ?>" src="<?php echo get_template_directory_uri(); ?>/img/common/bicycle_img_sp.svg" alt="電動自転車">
                                                </div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                <?php endif; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php } //子タームに紐づく記事一覧の表示終了 
                            ?>
                        <?php
                        } else { // 子タームがなければ親タームに紐づく記事一覧を表示
                            $catslug = $cat->slug;
                            $args = array(
                                'post_type' => 'shop',
                                'area_cat' => $catslug,
                                'posts_per_page' => -1
                            );
                            $myquery = new WP_Query($args); ?>
                            <?php if ($myquery->have_posts()) : ?>
                                <ul>
                                    <?php while ($myquery->have_posts()) : $myquery->the_post(); ?>
                                        <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php } // 子ターム終了 
                        ?>
                    <?php $i++;
                    } // 親ターム終了 
                    ?>

                </div><!-- /inner_inner -->
            </div><!-- /inner02 -->
        </div><!-- /sec03 -->
    </section>


    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>アフターサポート</li>
        </ol>
    </div>

    <?php get_footer(); ?>

    <script>
        //アコーディオン
        jQuery(function($) {
            $('.toggle_title').click(function() {
                $(this).toggleClass('selected');
                $(this).next().slideToggle();
            });
        });
    </script>

</body>

</html>