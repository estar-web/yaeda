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

    <div class="main">

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
                        <a href="https://www.youtube.com/watch?v=47GHuCPzsEk" target="_blank">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/common/btn_douga_sp.svg" alt="YouTube 動画でチェック">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section style="background-color: #EFEAEA;">
      <div class="area_wrapper">
        <div class="sec03">
          <div class="inner02">
            <p class="area_list_ttl">エリア</p>
            <ul class="area_list">
              <?php
                $taxonomy = 'area2_cat'; // タクソノミー名
                $args = array(
                  'pad_counts' => true,
                  'hide_empty' => true,
                  'parent' => 0, // 親タームのみ取得
                );
                $parent_terms = get_terms($taxonomy, $args);
                if (!empty($parent_terms) && !is_wp_error($parent_terms)):
                foreach ($parent_terms as $parent_term): // 親タームをループ
              ?>
                <li>
                  <div class="area_pulldown_menu">
                    <p class="area_pulldown_menu_btn"><?php echo esc_html($parent_term->name); ?><span class="plus"></span></p>
                    <?php
                      // 子タームの取得
                      $child_args = array(
                        'taxonomy' => $taxonomy,
                        'hide_empty' => true,
                        'parent' => $parent_term->term_id, // 親タームのIDを指定
                      );
                      $child_terms = get_terms($child_args);

                      if (!empty($child_terms) && !is_wp_error($child_terms)):
                    ?>
                      <ul>
                        <?php foreach ($child_terms as $child_term): // 子タームをループ
                          $child_name = $child_term->name; // 子ターム名
                          $child_url = get_term_link($child_term); // 子タームのリンク
                        ?>
                          <li>
                            <a href="<?php echo esc_url($child_url); ?>">
                              <?php echo esc_html($child_name); ?>
                            </a>
                          </li>
                        <?php endforeach; ?>
                      </ul>
                    <?php endif; ?>
                  </div>
                </li>
              <?php endforeach; endif; ?>
            </ul>
          </div><!-- inner02 -->
        </div><!-- sec01 -->
        <div class="sec04">
          <div class="inner02">
            <div class="inner_inner">
              <?php // タームの親・子の一覧にタームに紐づく投稿一覧を表示する方法
              $categories = get_terms('area2_cat', 'parent=0');
              $i = 1;
              foreach ($categories as $cat) {
                echo '<h2 class="area_h2" id="' . $i . '">' . esc_html($cat->name) . '</h2>'; // 親タームタイトル
                $children = get_terms('area2_cat', 'hierarchical=0&parent=' . $cat->term_id);
                if ($children) { // 子タームの有無
                  foreach ($children as $child) {
                    echo '<h3 class="area_h3">' . esc_html($child->name) . '</h3>'; // 子タームタイトル
                    $catslug = $child->slug;
                    $args = array(
                      'post_type' => 'aftersupport',
                      'area2_cat' => $catslug,
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
                                    <p class="check_ttl toggle_title">取扱製品<span class="plus"></span></p>
                                    <div class="flex_item" style="display:none;">
                                        <div class="flex_item_content">
                                            <?php echo do_shortcode('[flex_item_content]'); ?>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
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
        </div><!-- /sec02 -->
      </div>
    </section>

    </div><!-- /main -->


    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>販売店一覧</li>
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
            $('.area_pulldown_menu_btn').click(function () {
              $(this).toggleClass('selected');
              $(this).next().slideToggle();
            });

            $(function() {
                $(".menu_shop").addClass("menu_hover");
            });

        });
    </script>

</body>

</html>