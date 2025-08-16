<?php
/*
Template Name: faq
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq.css" type="text/css" />
<?php wp_head(); ?>
</head>
<body>
<?php get_header(2); ?>
<!-- 動画 -->
<video class="bg_movie" src="<?php echo get_template_directory_uri(); ?>/movie/web.mp4" loop autoplay muted playsinline></video>
    <!-- /動画 -->
    <div class="textfv">
        <div class="textfv_sd">
            <div class="c-pagettl_area">
                <div class="textfv_ttlbox">
                    <h1 class="yano">FAQ<br><span>よくある質問</span></h1>
                </div>
            </div>
        </div>
        <img class="maru pc" src="<?php echo get_template_directory_uri(); ?>/img/common/textbg_maru.png" alt="">
        <img class="maru sp" src="<?php echo get_template_directory_uri(); ?>/img/common/bg_maru_sp.png" alt="">
    </div>

    <main class="faq_main">
        <!-- パンくず -->
   <div class="c-inner-l c-p20">
        <ol class="c-bread">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>よくある質問</li>
        </ol>
    </div>
    <!-- /パンくず -->

        <div class="faq_cont">
        <?php if(have_rows('faq_box')): ?>
            <ul class="faq_list">
            <?php while(have_rows('faq_box')): the_row(); ?>
                <li class="faq_area">
                    <div class="q_txt">
                        <p><span class="ttl yano">Q</span><span class="txt"><?php the_sub_field('q_txt'); ?></span></p>
                        <div class="cross">
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <div class="a_txt">
                        <p><span class="ttl yano">A</span><span class="txt"><?php the_sub_field('a_txt'); ?></span></p>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif; ?>
        </div>

        
    </main>
    <div class="bread_sp">
        <ol class="c-bread c-bread_sp">
            <li class="aaa"><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a><span>&gt;</span></li>
            <li>よくある質問</li>
        </ol>
    </div>
<?php get_footer(); ?>

<script>
    // faqプルダウン
$('.faq_area').click(function(){
    $(this).children('.a_txt').slideToggle(300, 'swing');
    $(this).children('.q_txt').children('.cross').toggleClass('active');
});

</script>

</body>
 </html>