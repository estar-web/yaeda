<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/top.css?<?php echo date_i18n("YmdHis"); ?>"
    type="text/css" />
<?php wp_head(); ?>
</head>


<body class="noto">
    <?php get_header(2); ?>

    <div class="p-rule">
        <div class="p-rule__wrap">
            <p class="p-rule__text">最新型電動バイク「PORTA」登場</p>
            <a href="<?php echo home_url(); ?>/kickboard/" class="p-rule__link">
                詳細を見る
            <img src="<?php echo get_template_directory_uri(); ?>/img/top/icon-btn.svg" alt="アイコン：右矢印" width="20" height="20" loading="lazy" decoding="async">
            </a>
        </div>
    </div>

    <div class="wrapper" id="smoothScroll" data-scroll-container>
        <main class="noto" data-scroll-section>
            <!-- 動画 -->
            <video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted
                playsinline></video>
            <!-- /動画 -->
            <div class="bg_gra">
                <div class="fv">
                    <div class="top_inner">
                        <h1 class="fv_ttl yano">ELECTRIFY<br>YOUR LIFE</h1>
                        <p class="fv_txt">世界最大の電動二輪モビリティブランド<br class="br_sp">「YADEA」で快適を手元に。</p>
                    </div>
                    <p class="noto scroll">scroll</p>
                </div>

                <!-- sec01 -->
                <div class="sec01">
                    <div class="non"></div>
                    <div class="sec01_box">

                        <img class="bg_txt pc slide-left02 show"
                            src="<?php echo get_template_directory_uri(); ?>/img/common/bg_txt.png"
                            alt="ELECTRIFY YOUR LIFE">
                        <img class="bg_txt sp slide-left02 show"
                            src="<?php echo get_template_directory_uri(); ?>/img/common/xxx.png"
                            alt="ELECTRIFY YOUR LIFE">
                        <div class="top_inner">
                            <div class="flex">
                                <div class="leftbox">
                                    <h2 class="sec01_ttl yano">ABOUT YADEA</h2>
                                    <a href="<?php echo home_url(); ?>/about" class="pc_only">
                                        <div class="detail_btn">
                                            <p>YADEAについて</p>
                                            <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15"
                                                height="15" viewBox="0 0 15.588 15.408">
                                                <path
                                                    d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                                    transform="translate(0 0)" fill="#fff" />
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                                <div class="rightbox slide-right show02">
                                    <p class="sec01_txt">「YADEA」は世界最大の電動二輪モビリティブランドです。<br>
                                        電動キックボードをはじめ、電動自転車、電動バイクを開発・製造しています。<br>
                                        安心・安全な設計で快適な乗り心地、そして高性能。<br>
                                        体験したことのない「快適」を手に入れませんか。
                                    </p>
                                </div>
                                <a href="<?php echo home_url(); ?>/about" class="tb-sp_only">
                                    <div class="detail_btn">
                                        <p>YADEAについて</p>
                                        <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                            viewBox="0 0 15.588 15.408">
                                            <path
                                                d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                                transform="translate(0 0)" fill="#fff" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <div class="about_img"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/top_ab_img.png" alt="">
                            </div>
                        </div>
                    </div>
                    <img class="top_maru01 pc" src="<?php echo get_template_directory_uri(); ?>/img/common/top_maru.png"
                        alt="">
                    <img class="top_maru01 sp"
                        src="<?php echo get_template_directory_uri(); ?>/img/common/top_maru_sp.png" alt="">
                </div>
                <!-- /sec01 -->
            </div><!-- /bg_gra -->

            <!-- sec02 -->
            <div class="sec02">
                <div class="top_inner">
                    <h2 class="sec01_ttl yano">LINE UP</h2>
                    <!-- ▼チェック項目を呼び出す▼ -->
                    <?php
                    //スマホ・PCで表示件数を変更する条件分岐
                    if (is_mobile()) {
                        //スマホ・タブレットの時
                        $num = 4;
                    } else {
                        //PCの時
                        $num = 3;
                    }
                    ;
                    $args = array(
                        'post_type' => 'lineup',
                        'posts_per_page' => $num,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'pick',
                                'field' => 'slug',
                                'terms' => 'pick',
                                'orderby' => 'modified'
                            ),
                        ),
                    );
                    $the_query = new WP_Query($args);
                    ?>
                    <!-- ▼呼び出す項目の内容▼ -->
                    <?php if ($the_query->have_posts()): ?>
                        <ul class="c-case_list">
                            <?php while ($the_query->have_posts()):
                                $the_query->the_post(); ?>
                                <li>
                                    <div class="l-flex">
                                        <figure class="c-img">
                                            <?php
                                            if (has_post_thumbnail()) { ?>
                                                <img src="<?php if (has_post_thumbnail()) {
                                                    the_post_thumbnail_url();
                                                }
                                                ; ?>" alt="">
                                            <?php } ?>
                                        </figure>
                                        <div class="l-txtBox">
                                            <p class="c-text"><?php the_title(); ?></p>
                                            <p class="l-type"><?php the_field('l-type'); ?></p>
                                            <p class="l-spec"><?php the_field('l-spec'); ?></p>
                                            <?php $reserve = get_field('l-reserve');
                                            if (!empty($reserve)): ?>
                                                <p class="l-reserve"><?php echo $reserve; ?></p>
                                            <?php endif; ?>
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="detail_btn">
                                                    <p>詳しく見る</p>
                                                    <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15"
                                                        height="15" viewBox="0 0 15.588 15.408">
                                                        <path
                                                            d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                                            transform="translate(0 0)" fill="#1C1918" />
                                                    </svg>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                    <!-- /TOPに表示 -->
                    <div class="a_center">
                        <a href="<?php echo home_url(); ?>/lineup">
                            <div class="detail_btn">
                                <p>製品ラインナップ</p>
                                <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 15.588 15.408">
                                    <path
                                        d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                        transform="translate(0 0)" fill="#1C1918" />
                                </svg>
                            </div>
                        </a>
                    </div>
                </div>
                <img class="top_maru02 pc" src="<?php echo get_template_directory_uri(); ?>/img/common/top_maru02.svg"
                    alt="">
                <img class="top_maru02 sp"
                    src="<?php echo get_template_directory_uri(); ?>/img/common/top_maru02_sp.png" alt="">
            </div><!-- /sec02 -->

            <!-- sec03 -->
            <div class="sec03">
                <div class="top_inner">
                    <div class="flex">
                        <h2 class="sec01_ttl yano">NEWS</h2>
                        <div class="s_box">
                            <!-- If we need pagination -->
                            <div class="swiper-pagination"></div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                    </div>

                    <!-- Slider main container -->
                    <div class="swiper">
                        <?php
                        $args = [
                            'post_type' => 'news',
                            'posts_per_page' => 6,
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()): ?>
                            <!-- Additional required wrapper -->
                            <ul class="swiper-wrapper c-post_list">
                                <?php while ($my_query->have_posts()):
                                    $my_query->the_post(); ?>

                                    <!-- Slides -->
                                    <li class="c-item top_news swiper-slide"><a href="<?php the_permalink(); ?>">
                                            <?php if (has_post_thumbnail()): ?>
                                                <figure class="c-thumb">
                                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                                </figure>
                                            <?php else: ?>
                                                <!-- 画像がない場合 -->
                                                <figure class="c-thumb">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/no_image.png" alt="">
                                                </figure>
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
                        <?php endif; ?>
                    </div><!-- swiper -->

                    <a class="ib" href="<?php echo home_url(); ?>/news">
                        <div class="detail_btn noto">
                            <p>VIEW MORE</p>
                            <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                viewBox="0 0 15.588 15.408">
                                <path
                                    d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                    transform="translate(0 0)" fill="#1C1918" />
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
            <!-- /sec03 -->
            <!-- sec04 -->
            <div class="sec04">
                <div class="top_inner">
                    <div class="non"></div>
                    <div class="flex">
                        <a href="<?php echo home_url(); ?>/aftersupport">
                            <div class="su">
                                <img class="su01"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/support_hov.png" alt="">
                                <img class="su02"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/top_support.png" alt="">
                                <h3>SUPPORT</h3>

                                <div class="detail_btn">
                                    <p>アフターサポート</p>
                                    <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 15.588 15.408">
                                        <path
                                            d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                            transform="translate(0 0)" fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo home_url(); ?>/shop">
                            <div class="sh">
                                <img class="sh01"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/shop_hov.png" alt="">
                                <img class="sh02"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/top_shop.png" alt="">
                                <h3>SHOP</h3>

                                <div class="detail_btn">
                                    <p>販売店一覧</p>
                                    <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 15.588 15.408">
                                        <path
                                            d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                            transform="translate(0 0)" fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                        </a>

                        <a href="<?php echo home_url(); ?>/faq">
                            <div class="fa">
                                <img class="fa01"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/faq_hov.png" alt="">
                                <img class="fa02"
                                    src="<?php echo get_template_directory_uri(); ?>/img/common/top_faq.png" alt="">
                                <h3>FAQ</h3>

                                <div class="detail_btn">
                                    <p>よくある質問</p>
                                    <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 15.588 15.408">
                                        <path
                                            d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                            transform="translate(0 0)" fill="#fff" />
                                    </svg>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <img class="top_maru03" src="<?php echo get_template_directory_uri(); ?>/img/common/maru_insta.png"
                    alt="">
            </div>
            <!-- /sec04 -->


            <!-- sec05 -->
            <div class="sec05">
                <div class="insta_ttl">
                    <h2 class="sec01_ttl">INSTAGRAM</h2>
                    <p>インスタグラムでも情報発信しています</p>
                </div>

                <div class="insta_box">
                    <?php echo do_shortcode('[instagram-feed feed=5]'); ?>
                </div>

                <a href="https://www.instagram.com/yadea.japan/" target="_blank">
                    <div class="detail_btn noto">
                        <p class="view">VIEW MORE</p>
                        <svg class="yaji_svg" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            viewBox="0 0 15.588 15.408">
                            <path
                                d="M7.886,0,6.811,1.074l5.94,5.938H0v1.45H12.681L6.808,14.334l1.074,1.074,6.947-6.946h.052V8.409l.707-.707Z"
                                transform="translate(0 0)" fill="#1C1918" />
                        </svg>
                    </div>
                </a>
            </div>
            <!-- /sec05 -->



        </main>
        <?php get_footer(); ?>
    </div>



    <!-- スクロール要素の表示/非表示制御 -->
    <script>
        jQuery(function () {
            var footer = $('.sec05').innerHeight(); // footerの高さを取得

            $(window).on('scroll', function () {
                var point = $(window).scrollTop(); // 現在のスクロール地点 
                var docHeight = $(document).height(); // ドキュメントの高さ
                var dispHeight = $(window).height(); // 表示領域の高さ

                if (point > docHeight - dispHeight - footer) { // スクロール地点>ドキュメントの高さ-表示領域-footerの高さ
                    $('.scroll').addClass('is-hidden'); //footerより下にスクロールしたらis-hiddenを追加
                } else {
                    $('.scroll').removeClass('is-hidden'); //footerより上にスクロールしたらis-hiddenを削除
                }
            });
        });
    </script>

    <!-- スライドイン -->
    <script>
        $(function () {
            $(window).on('load scroll', function () {
                var winScroll = $(window).scrollTop();
                var winHeight = $(window).height();
                var scrollPos = winScroll + (winHeight * 0.8);

                $(".show").each(function () {
                    if ($(this).offset().top + 250 < scrollPos) {
                        $(this).css({
                            opacity: 1,
                            transform: 'translate(0, 0)'
                        });
                    }
                });
                $(".show02").each(function () {
                    if ($(this).offset().top - 20 < scrollPos) {
                        $(this).css({
                            opacity: 1,
                            transform: 'translate(0, 0)'
                        });
                    }
                });
            });
        });
    </script><!-- /スライドイン -->

    <!-- swiper -->
    <script>
        $(function () {
            let options = {}; // オプションを指定する宣言
            if ($(".swiper .swiper-slide").length == 1) {
                // スライドが1枚の時のオプションを追加
                options = {
                    loop: false,
                    slidesPerView: 1.4,
                    spaceBetween: 20,
                    loopAdditionalSlides: 3,
                    centeredSlides: true,
                    breakpoints: {
                        // スライドの表示枚数：355px以上の場合
                        355: {
                            slidesPerView: 1.6,
                            spaceBetween: 50,
                            centeredSlides: true,
                        },
                        // スライドの表示枚数：600px以上の場合
                        600: {
                            slidesPerView: 2.6,
                            spaceBetween: 50,
                            centeredSlides: true,
                        },
                        // スライドの表示枚数：768px以上の場合
                        768: {
                            slidesPerView: 2.2,
                            spaceBetween: 50,
                            centeredSlides: false,
                        },
                        // スライドの表示枚数：1024px以上の場合
                        1024: {
                            slidesPerView: 3.3,
                            spaceBetween: 50,
                            centeredSlides: false,
                        }
                    },
                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    // And if we need scrollbar
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                }
            } else {
                // スライドが複数枚の時のオプションを追加
                options = {
                    loop: false,
                    slidesPerView: 1.4,
                    spaceBetween: 20,
                    loopAdditionalSlides: 3,
                    centeredSlides: true,
                    breakpoints: {
                        // スライドの表示枚数：355px以上の場合
                        355: {
                            slidesPerView: 1.6,
                            spaceBetween: 50,
                            centeredSlides: true,
                        },
                        // スライドの表示枚数：600px以上の場合
                        600: {
                            slidesPerView: 2.6,
                            spaceBetween: 50,
                            centeredSlides: true,
                        },
                        // スライドの表示枚数：768px以上の場合
                        768: {
                            slidesPerView: 2.2,
                            spaceBetween: 50,
                            centeredSlides: false,
                        },
                        // スライドの表示枚数：1024px以上の場合
                        1024: {
                            slidesPerView: 3.3,
                            spaceBetween: 50,
                            centeredSlides: false,
                        }
                    },
                    // If we need pagination
                    pagination: {
                        el: '.swiper-pagination',
                    },

                    // Navigation arrows
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },

                    // And if we need scrollbar
                    scrollbar: {
                        el: '.swiper-scrollbar',
                    },
                }
            }
            new Swiper('.swiper', options);

        });



        // const swiper = new Swiper('.swiper', {
        //     // Optional parameters
        //     loop: true,
        //     slidesPerView: 1.4,
        //     spaceBetween: 20,
        //     loopAdditionalSlides: 3,
        //     centeredSlides: true,
        //     breakpoints: {
        //         // スライドの表示枚数：355px以上の場合
        //         355: {
        //             slidesPerView: 1.6,
        //             spaceBetween: 50,
        //             centeredSlides: true,
        //         },
        //         // スライドの表示枚数：600px以上の場合
        //         600: {
        //             slidesPerView: 2.6,
        //             spaceBetween: 50,
        //             centeredSlides: true,
        //         },
        //         // スライドの表示枚数：768px以上の場合
        //         768: {
        //             slidesPerView: 2.2,
        //             spaceBetween: 50,
        //             centeredSlides: false,
        //         },
        //         // スライドの表示枚数：1024px以上の場合
        //         1024: {
        //             slidesPerView: 3.3,
        //             spaceBetween: 50,
        //             centeredSlides: false,
        //         }
        //     },
        //     // If we need pagination
        //     pagination: {
        //         el: '.swiper-pagination',
        //     },

        //     // Navigation arrows
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },

        //     // And if we need scrollbar
        //     scrollbar: {
        //         el: '.swiper-scrollbar',
        //     },
        // });
    </script><!-- /swiper -->

    <script>
        $(".openbtn").click(function () {
            $(this).toggleClass('active');
        });
    </script>

    <script>
        $(function () {
            $('.c-ttl').matchHeight();
        });
    </script>
</body>


<?php get_footer(); ?>

</html>