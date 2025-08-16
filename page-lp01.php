<?php
/*
Template Name: 3機種LP
*/
?>
<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/lp01.css" type="text/css" />
<?php wp_head(); ?>
</head>
<body>

<!-- FV -->
<div class="ly_sec_fv">
    <!-- FVコンテンツ -->
    <div class="ly_sec_inner">
        <p class="el_logo_img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp01/logo.svg" alt="YADEA"></p>
        <h1 class="el_fv_copy">特定原付モデルの<br class="un_sp_only">電動サイクルが3機種発売！</h1>
        <picture class="el_fv_img">
            <source srcset="<?php echo get_template_directory_uri(); ?>/img/lp01/fv_bike_sp.png" media="(max-width:1024px)" />
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp01/fv_bike_pc.png" alt="" />
        </picture>
    </div>

    <!-- 背景動画 -->
    <div class="bl_video_wrap">
        <div class="el_deco_bg un_sp_only">
            <img src="<?php echo get_template_directory_uri(); ?>/img/lp01/bg_deco.png" alt="" />
        </div>
        <video src="<?php echo get_template_directory_uri(); ?>/img/lp01/video.mp4" autoplay muted loop playsinline  preload="none"></video>
    </div>
</div>

<!-- 補足事項 -->
<div class="ly_sec_caution">
<div class="ly_sec_inner">
    <div class="ly_left">
        <h2 class="el_caution_head">特定小型原動機付自転車について</h2>
        <p class="el_caution_txt">
            2023年7月に施行された道路交通法改正により
            <br>新たに定義された車両区分です。
            <br>正しいルールを理解した上でサイクルを楽しみましょう。
        </p>
    </div>
    <div class="ly_right">
        <ul class="el_caution_list">
            <li>運転免許所不要※16歳未満の運転禁止</li>
            <li>ヘルメット着用努力義務</li>
            <li>ナンバー登録自賠責保険必須</li>
            <li>定格出力が600W以下</li>
            <li>車体の大きさが、長さ1900mm以下 / 幅600mm以下</li>
        </ul>
    </div>
</div>
</div>

<!-- 動画 -->
<div class="ly_sec_video">
    <!-- コンテンツ -->
    <div class="el_content_video">
        <video src="<?php echo get_template_directory_uri(); ?>/img/lp01/video.mp4" autoplay muted loop playsinline preload="none"></video>
    </div>
    <!-- 背景 -->
    <div class="el_bg_img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/lp01/video_bg_img.jpg" alt="" />
    </div>
</div>

<!-- ラインナップ -->
<div class="ly_sec_lineup">
<div class="ly_sec_inner">
    <h2 class="el_sec_ttl en">LINE UP</h2>
    <ul class="bl_item_list">

        <!-- YADEA TRP-01T -->
        <?php
            if(get_field('item01_info')){
                $item01_info = get_field('item01_info');
                $item01_option = $item01_info['option_txt'];
                $item01_url = $item01_info['item_url'];
                $item01_img = $item01_info['item_img'];
            }
        ?>
        <li>
            <p class="el_option_txt">
                <?php
                    if($item01_option){
                        echo $item01_option;
                    } else {
                        echo "-";
                    }
                ?>
            </p>
            <div class="bl_item_dtl">
                <p class="el_item_name"><span>YADEA</span><span>TRP-01T</span></p>
                <?php if($item01_url): ?>
                    <p class="el_btn"><a href="<?php echo $item01_url; ?>" target="_blank"><span>詳細<span class="un_pc_only">ページはこちら</span></span></a></p>
                <?php else: ?>
                    <p class="el_btn un_no_link"><a href="#" target="_blank">発売時期未定</a></p>
                <?php endif; ?>
                <?php if($item01_img): ?>
                    <p class="el_item_img"><img src="<?php echo $item01_img; ?>" alt="YADEA TRP-01T"></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('item_info_list')): ?>
            <ul class="bl_info_list">
                <?php while (have_rows('item_info_list')): the_row(); ?>
                    <?php
                        if(get_sub_field('list_content')){
                            $list_info = get_sub_field('list_content');
                            $item01_info = $list_info['item01_info'];
                        }
                    ?>
                    <li>
                        <p class="el_info_head"><?php echo get_sub_field('list_head'); ?></p>
                        <p class="el_info_content"><?php echo $item01_info; ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </li>

        <!-- YADEA CC-01T -->
        <?php
            if(get_field('item02_info')){
                $item02_info = get_field('item02_info');
                $item02_option = $item02_info['option_txt'];
                $item02_url = $item02_info['item_url'];
                $item02_img = $item02_info['item_img'];
            }
        ?>
        <li>
            <p class="el_option_txt">
                <?php
                    if($item02_option){
                        echo $item02_option;
                    } else {
                        echo "-";
                    }
                ?>
            </p>
            <div class="bl_item_dtl">
                <p class="el_item_name"><span>YADEA</span><span>CC-01T</span></p>
                <?php if($item02_url): ?>
                    <p class="el_btn"><a href="<?php echo $item02_url; ?>" target="_blank"><span>詳細<span class="un_pc_only">ページはこちら</span></span></a></p>
                <?php else: ?>
                    <p class="el_btn un_no_link"><a href="#" target="_blank">発売時期未定</a></p>
                <?php endif; ?>
                <?php if($item02_img): ?>
                    <p class="el_item_img"><img src="<?php echo $item02_img; ?>" alt="YADEA CC-01T"></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('item_info_list')): ?>
            <ul class="bl_info_list">
                <?php while (have_rows('item_info_list')): the_row(); ?>
                    <?php
                        if(get_sub_field('list_content')){
                            $list_info = get_sub_field('list_content');
                            $item02_info = $list_info['item02_info'];
                        }
                    ?>
                    <li>
                        <p class="el_info_head"><?php echo get_sub_field('list_head'); ?></p>
                        <p class="el_info_content"><?php echo $item02_info; ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </li>

        <!-- YADEA S-01T -->
        <?php
            if(get_field('item03_info')){
                $item03_info = get_field('item03_info');
                $item03_option = $item03_info['option_txt'];
                $item03_url = $item03_info['item_url'];
                $item03_img = $item03_info['item_img'];
            }
        ?>
        <li>
            <p class="el_option_txt">
                <?php
                    if($item03_option){
                        echo $item03_option;
                    } else {
                        echo "-";
                    }
                ?>
            </p>
            <div class="bl_item_dtl">
                <p class="el_item_name"><span>YADEA</span><span>S-01T</span></p>
                <?php if($item03_url): ?>
                    <p class="el_btn"><a href="<?php echo $item03_url; ?>" target="_blank"><span>詳細<span class="un_pc_only">ページはこちら</span></span></a></p>
                <?php else: ?>
                    <p class="el_btn un_no_link"><a href="#" target="_blank">発売時期未定</a></p>
                <?php endif; ?>
                <?php if($item03_img): ?>
                    <p class="el_item_img"><img src="<?php echo $item03_img; ?>" alt="YADEA S-01T"></p>
                <?php endif; ?>
            </div>
            <?php if (have_rows('item_info_list')): ?>
            <ul class="bl_info_list">
                <?php while (have_rows('item_info_list')): the_row(); ?>
                    <?php
                        if(get_sub_field('list_content')){
                            $list_info = get_sub_field('list_content');
                            $item03_info = $list_info['item03_info'];
                        }
                    ?>
                    <li>
                        <p class="el_info_head"><?php echo get_sub_field('list_head'); ?></p>
                        <p class="el_info_content"><?php echo $item03_info; ?></p>
                    </li>
                <?php endwhile; ?>
            </ul>
            <?php endif; ?>
        </li>

    </ul>
</div>
</div>

<!-- CTA -->
<div class="ly_sec_cta">
    <!-- ボタン -->
    <p class="el_cta_btn en"><a href="https://hasegawa-mobility.co.jp/" target="_blank">ONLINE STORE</a></p>
    <!-- 背景動画 -->
    <div class="el_bg_video">
        <video src="<?php echo get_template_directory_uri(); ?>/img/lp01/video.mp4" autoplay muted loop playsinline preload="none"></video>
    </div>
</div>

<!-- フッター -->
<footer class="ly_foot_area">
    <p class="el_logo_img"><img src="<?php echo get_template_directory_uri(); ?>/img/lp01/logo.svg" alt="YADEA"></p>
    <p class="el_copy_txt">&copy;&nbsp;2024&nbsp;YADEA</p>
</footer>

<?php wp_footer(); ?>
</body>
</html>