<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/shop.css" type="text/css" />
<?php wp_head(); ?>
</head>

<body class="noto">
  <?php get_header(2); ?>
  <!-- <a href="https://hasegawa-online.jp/collections/yadea" class="footer_bnr" target="_blank">
          <img class="footer_bnr___img" src="</?php echo get_template_directory_uri(); ?>/img/banner/shop_bnr.png" alt="">
        </a> -->



  <!-- 動画 -->
  <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted playsinline></video>
  <!-- /動画 -->
  <div class="textfv">
    <div class="textfv_sd">
      <div class="c-pagettl_area">
        <div class="textfv_ttlbox">
          <h1 class="yano">SHOP<br><span>販売店一覧</span></h1>
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
        <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>shop/">販売店一覧</a><span>&gt;</span></li>
        <li><?php echo esc_html(single_term_title('', false)); ?></li>
      </ol>
    </div>
    <!-- /パンくず -->


    <section>
      <div class="area_wrapper">
        <div class="sec01">
          <div class="inner02">
            <p class="area_list_ttl">エリア</p>
            <ul class="area_list">
              <?php
                $taxonomy = 'area_cat'; // タクソノミー名
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
        <div class="sec02">
          <div class="inner02">
            <div class="inner_inner">
              <?php
                // 現在のタクソノミーページ情報を取得（子タクソノミー）
                $current_term = get_queried_object();
                if ($current_term && !is_wp_error($current_term)) :
              ?>
                <h2 class="area_h2 mb40"><?php echo esc_html($current_term->name); ?></h2>
                <?php
                  // 現在の子タクソノミーに紐づく投稿を取得
                  $args = array(
                      'post_type'      => 'shop',
                      'posts_per_page' => -1,
                      'tax_query'      => array(
                          array(
                              'taxonomy' => 'area_cat',
                              'field'    => 'slug',
                              'terms'    => $current_term->slug,
                          ),
                      ),
                  );
                  $query = new WP_Query($args);
                  // 投稿があるかチェック
                  if ($query->have_posts()) :
                ?>
                  <ul class="item_content toggle_ans">
                    <?php while ($query->have_posts()) : $query->the_post(); ?>
                      <li>
                        <div class="store_name">
                          <?php if (get_field('url')) : ?>
                              <a class="blank" href="<?php the_field('url'); ?>" target="_blank"><?php the_title(); ?></a>
                          <?php else : ?>
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
                  </ul>
                <?php endif; wp_reset_postdata(); ?>
              <?php endif; ?>
            </div>
          </div><!-- /inner02 -->
        </div><!-- /sec02 -->
      </div>
    </section>

  </div><!-- /main -->


  <div class="bread_sp">
    <ol class="c-bread c-bread_sp">
      <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
      <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>shop/">販売店一覧</a><span>&gt;</span></li>
      <li><?php echo esc_html(single_term_title('', false)); ?></li>
    </ol>
  </div>






  <!-- ▼footer.phpの中身 (shopページのみバナー違うためfooter.php読み込まない) -->
  <footer id="footer" class="footer noto">

    <div class="footer_top">
      <div class="footer_inner">
        <div class="btn_area">
          <a href="<?php echo home_url(); ?>/shop">
            <div class="shop">
              <p class="yano">SHOP</p>
              <p class="footer_p">販売店一覧</p>
            </div>
          </a>

          <a href="https://hasegawa-online.jp/collections/yadea" target="_blank">
            <div class="store">
              <p class="yano">ONLINE STORE</p>
            </div>
          </a>
        </div>
        <div class="inquiry_box">
          <a class="inquiry" href="<?php echo home_url(); ?>/contact">お問い合わせはこちら</a>
        </div>
      </div>
    </div>

    <div class="footer_bottom">
      <div class="footer_inner">
        <!-- topに戻るボタン -->
        <div class="footer_btn_area">
          <div class="close__btn__box">

          </div>

          <a class="pagetop pc" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100">
              <g transform="translate(-1249 -3114)">
                <path class="btn_clear" d="M0,0H100V100H0Z" transform="translate(1249 3114)" fill="#453e3e" />
                <g transform="translate(208 -36)">
                  <path d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z" transform="translate(1083 3193.588) rotate(-90)" fill="#fff" /><text transform="translate(1116 3219)" fill="#fff" font-size="12" font-family="NotoSansJP-Medium, Noto Sans JP" font-weight="500">
                    <tspan x="-49.968" y="0">page top</tspan>
                  </text>
                </g>
              </g>
            </svg>
          </a>
        </div>





        <img class="footer_logo" src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="YADEA">

        <ul class="footer_link">
          <li><a href="<?php echo home_url(); ?>">TOP</a></li>
          <li><a href="<?php echo home_url(); ?>/about">YADEAについて</a></li>
          <li><a href="<?php echo home_url(); ?>/lineup">製品ラインナップ</a></li>
          <li><a href="<?php echo home_url(); ?>/news">ニュース</a></li>
          <li><a href="<?php echo home_url(); ?>/aftersupport">アフターサポート</a></li>
          <li><a href="<?php echo home_url(); ?>/shop">販売店一覧</a></li>
          <li><a href="<?php echo home_url(); ?>/faq">よくある質問</a></li>
          <li><a href="<?php echo home_url(); ?>/contact">お問い合わせ</a></li>
        </ul>
      </div>

      <ul class="footer_iconlist">
        <li class="icon_sns insta">
          <a href="https://www.instagram.com/yadea.japan/" target="blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="37" height="37" viewBox="0 0 37 37">
              <defs>
                <filter id="a" x="0" y="0" width="37" height="37" filterUnits="userSpaceOnUse">
                  <feOffset input="SourceAlpha" />
                  <feGaussianBlur stdDeviation="3" result="b" />
                  <feFlood flood-opacity="0.302" />
                  <feComposite operator="in" in2="b" />
                  <feComposite in="SourceGraphic" />
                </filter>
              </defs>
              <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#a)">
                <path class="svg_in" d="M-1251.711-406.054a6.639,6.639,0,0,1-2.185-.419,4.408,4.408,0,0,1-1.594-1.038,4.405,4.405,0,0,1-1.038-1.594,6.609,6.609,0,0,1-.419-2.185c-.043-.96-.054-1.266-.054-3.711s.011-2.75.054-3.71a6.617,6.617,0,0,1,.419-2.186,4.4,4.4,0,0,1,1.038-1.593,4.393,4.393,0,0,1,1.594-1.038,6.586,6.586,0,0,1,2.185-.419c.96-.043,1.266-.054,3.711-.054s2.75.011,3.71.054a6.592,6.592,0,0,1,2.186.419,4.389,4.389,0,0,1,1.593,1.038,4.4,4.4,0,0,1,1.038,1.593,6.588,6.588,0,0,1,.419,2.186c.043.96.054,1.266.054,3.71s-.011,2.751-.054,3.711a6.581,6.581,0,0,1-.419,2.185,4.406,4.406,0,0,1-1.038,1.594,4.4,4.4,0,0,1-1.593,1.038,6.646,6.646,0,0,1-2.186.419c-.96.043-1.266.054-3.71.054S-1250.75-406.011-1251.711-406.054Zm.074-16.272a4.981,4.981,0,0,0-1.671.31,2.809,2.809,0,0,0-1.036.673,2.8,2.8,0,0,0-.673,1.036,5,5,0,0,0-.31,1.67c-.043.949-.053,1.234-.053,3.637s.01,2.688.053,3.637a5.016,5.016,0,0,0,.31,1.671,2.81,2.81,0,0,0,.673,1.036,2.809,2.809,0,0,0,1.036.673,5.009,5.009,0,0,0,1.671.31c.949.043,1.233.052,3.637.052s2.688-.009,3.636-.052a5,5,0,0,0,1.671-.31,2.8,2.8,0,0,0,1.036-.673,2.81,2.81,0,0,0,.673-1.036,4.987,4.987,0,0,0,.31-1.671c.043-.949.053-1.233.053-3.637s-.01-2.688-.053-3.637a4.973,4.973,0,0,0-.31-1.67,2.8,2.8,0,0,0-.673-1.036,2.8,2.8,0,0,0-1.036-.673,4.968,4.968,0,0,0-1.671-.31c-.948-.043-1.233-.053-3.636-.053S-1250.688-422.369-1251.637-422.326Zm-.984,7.326a4.621,4.621,0,0,1,4.621-4.621,4.622,4.622,0,0,1,4.621,4.621,4.621,4.621,0,0,1-4.621,4.621A4.62,4.62,0,0,1-1252.621-415Zm1.621,0a3,3,0,0,0,3,3,3,3,0,0,0,3-3,3,3,0,0,0-3-3A3,3,0,0,0-1251-415Zm6.724-4.8a1.08,1.08,0,0,1,1.08-1.08,1.079,1.079,0,0,1,1.079,1.08,1.079,1.079,0,0,1-1.079,1.079A1.079,1.079,0,0,1-1244.276-419.8Z" transform="translate(1266.5 433.5)" fill="#fff" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1" />
              </g>
            </svg>
          </a>
        </li>
        <li class="icon_sns twitter">
          <a href="https://twitter.com/YadeaJapan" target="blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.148" height="36" viewBox="0 0 40.148 36">
              <defs>
                <filter id="a" x="0" y="0" width="40.148" height="36" filterUnits="userSpaceOnUse">
                  <feOffset input="SourceAlpha" />
                  <feGaussianBlur stdDeviation="3" result="b" />
                  <feFlood flood-opacity="0.302" />
                  <feComposite operator="in" in2="b" />
                  <feComposite in="SourceGraphic" />
                </filter>
              </defs>
              <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#a)">
                <path class="svg_tw" d="M47.6,18A12.841,12.841,0,0,0,60.526,5.071c0-.2,0-.392-.013-.588a9.244,9.244,0,0,0,2.267-2.352,9.09,9.09,0,0,1-2.609.715,4.566,4.566,0,0,0,2-2.514,9.075,9.075,0,0,1-2.886,1.1A4.549,4.549,0,0,0,51.539,5.58,12.9,12.9,0,0,1,42.173.833,4.547,4.547,0,0,0,43.579,6.9a4.511,4.511,0,0,1-2.058-.569c0,.019,0,.038,0,.058a4.548,4.548,0,0,0,3.646,4.456,4.548,4.548,0,0,1-2.052.078,4.55,4.55,0,0,0,4.246,3.156,9.123,9.123,0,0,1-5.644,1.945,9.256,9.256,0,0,1-1.085-.064A12.866,12.866,0,0,0,47.6,18" transform="translate(-31.63 9)" fill="#fff" />
              </g>
            </svg>
          </a>
        </li>
        <li class="icon_sns youtube">
          <a href="https://www.youtube.com/channel/UCavTW7Lq1xg2baWBJ-VF5LA" target="blank">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="43.714" height="36" viewBox="0 0 43.714 36">
              <defs>
                <filter id="a" x="0" y="0" width="43.714" height="36" filterUnits="userSpaceOnUse">
                  <feOffset input="SourceAlpha" />
                  <feGaussianBlur stdDeviation="3" result="b" />
                  <feFlood flood-opacity="0.302" />
                  <feComposite operator="in" in2="b" />
                  <feComposite in="SourceGraphic" />
                </filter>
              </defs>
              <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#a)">
                <path class="svg_yo" d="M106.682,2.81A3.221,3.221,0,0,0,104.409.536C102.4,0,94.363,0,94.363,0S86.322,0,84.316.536A3.224,3.224,0,0,0,82.042,2.81,33.521,33.521,0,0,0,81.506,9a33.511,33.511,0,0,0,.536,6.188,3.224,3.224,0,0,0,2.274,2.274C86.322,18,94.363,18,94.363,18s8.041,0,10.046-.538a3.221,3.221,0,0,0,2.273-2.274A33.439,33.439,0,0,0,107.22,9a33.449,33.449,0,0,0-.538-6.19M91.791,12.857V5.142L98.472,9Z" transform="translate(-72.51 9)" fill="#fff" />
              </g>
            </svg>
          </a>
        </li>
      </ul>

      <p class="copy">&copy; 2023 YADEA</p>
    </div>




    <script>
      // フッターに到達したタイミングでバナーを非表示に
      $(function() {
        if (window.matchMedia('(min-width: 769px)').matches) {
          // 769px以上の場合の処理
          jQuery(window).on("scroll", function() {
            documentHeight = jQuery(document).height();
            scrollPosition = jQuery(this).height() + jQuery(this).scrollTop() - 100;
            footerHeight = jQuery(".footer_bottom").innerHeight();

            if (documentHeight - scrollPosition <= footerHeight) {
              jQuery(".footer_bnr").css({
                position: "absolute",
                bottom: footerHeight - 100,
                display: "none" // .footer_bnrを非表示にする
              });
            } else {
              jQuery(".footer_bnr").css({
                position: "fixed",
                bottom: 0,
                display: "block" // .footer_bnrを表示する
              });
            }
          });
        } else {
          // 768px以下の場合の処理
          jQuery(window).on("scroll", function() {
            documentHeight = jQuery(document).height();
            scrollPosition = jQuery(this).height() + jQuery(this).scrollTop() - 58;
            footerHeight = jQuery(".footer_bottom").innerHeight();

            if (documentHeight - scrollPosition <= footerHeight) {
              jQuery(".footer___bnr").css({
                position: "absolute",
                bottom: footerHeight - 58,
                display: "none" // .footer___bnrを非表示にする
              });
            } else {
              jQuery(".footer___bnr").css({
                position: "fixed",
                bottom: 0,
                display: "block" // .footer___bnrを表示する
              });
            }
          });
        }
      })


      $(function() {
        // 変数にクラスを入れる
        var btb = $('.footer_bnr');

        //スクロールしてページトップから100に達したらボタンを表示
        $(window).on('load scroll', function() {
          if ($(this).scrollTop() > 100) {
            btb.addClass('active');
          } else {
            btb.removeClass('active');
          }
        });
      });
    </script>



  </footer>
  <?php wp_footer(); ?>
  <!-- ▲footer.phpの中身 (shopページのみバナー違うためfooter.php読み込まない) -->












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