<?php
/*
Template Name: thanks
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/contact.css" type="text/css" />
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
                    <h1 class="yano">CONTACT<br><span>お問い合わせ</span></h1>
                </div>
            </div>
        </div>
    
        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
    </div>

    <!-- パンくず -->
   <div class="c-inner-l c-p20 thanks_bread">
        <ol class="c-bread">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>お問い合わせ</li>
        </ol>
    </div>
    <!-- /パンくず -->



    <div class="thanks">
        <h2 class="noto">お問い合わせを受け付けました。</h2>
        <p class="noto">ご記入頂いた情報は無事送信されました。<br>お問い合わせ頂き、ありがとうございました。</p>
        <a class="el_thanksTopBtn" href="<?php echo esc_url(home_url('/')); ?>">TOPへ戻る</a>
    </div>
    

    <?php the_content(); ?>
    
    

    <div class="clear_box">
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