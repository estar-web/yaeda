<?php

/* titleタグの出力 */
add_theme_support('title-tag');
/* 固定ページで抜粋を有効化 */
add_post_type_support('page', 'excerpt');
// アイキャッチ画像を有効にする。
add_theme_support('post-thumbnails');


// アーカイブの表示条件
function change_posts_per_page($query)
{
    if (is_admin() || !$query->is_main_query())
        return;
    if ($query->is_post_type_archive('news')) {
        $query->set('posts_per_page', '10');
        $query->set('orderby', 'date');
    }
    if ($query->is_tax('news_cat')) {
        $query->set('posts_per_page', '10');
        $query->set('orderby', 'date');
    }
}
add_action('pre_get_posts', 'change_posts_per_page');

/* the_archive_title 余計な文字を削除 */
add_filter('get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_tax()) {
        $title = single_term_title('', false);
    } elseif (is_post_type_archive()) {
        $title = post_type_archive_title('', false);
    } elseif (is_date()) {
        $title = get_the_time('Y年n月');
    } elseif (is_search()) {
        $title = '検索結果：' . esc_html(get_search_query(false));
    } elseif (is_404()) {
        $title = '「404」ページが見つかりません';
    } else {
    }
    return $title;
});
//MWFORMのビジュアルエディタを非表示
function disable_visual_editor_in_page()
{
    global $typenow;
    if (in_array($typenow, array('mw-wp-form'))) {
        add_filter('user_can_richedit', 'disable_visual_editor_filter');
    }
}
function disable_visual_editor_filter()
{
    return false;
}
add_action('load-post.php', 'disable_visual_editor_in_page');
add_action('load-post-new.php', 'disable_visual_editor_in_page');


function is_mobile()
{
    $useragents = array(
        'iPhone',          // iPhone
        'iPod',            // iPod touch
        '^(?=.*Android)(?=.*Mobile)', // 1.5+ Android
        'dream',           // Pre 1.5 Android
        'CUPCAKE',         // 1.5+ Android
        'blackberry9500',  // Storm
        'blackberry9530',  // Storm
        'blackberry9520',  // Storm v2
        'blackberry9550',  // Storm v2
        'blackberry9800',  // Torch
        'webOS',           // Palm Pre Experimental
        'incognito',       // Other iPhone browser
        'webmate'          // Other iPhone browser
    );
    $pattern = '/' . implode('|', $useragents) . '/i';
    return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}

// WP自動更新停止
add_filter('auto_update_plugin', '__return_false');

// 取扱製品の紐付け（店舗一覧）
function render_flex_item_content()
{
    // バッファリング開始
    ob_start();

    /*--- 投稿オブジェクト取得 & 整形 ----*/

    $custom_fields = array('item_kickscooter', 'item_bicycle', 'item_pedelec', 'item_bike');
    $objectList = array(); //初期化
    foreach ($custom_fields as $slug) { // 正しい配列を使用
        $objectList[] = get_field($slug); // カスタムフィールドの値を取得
    }

    //falseを除外
    $objectList = array_filter($objectList, function ($item) {
        return is_array($item); // 配列だけを残す
    });

    //配列をフラット化
    $objectList = array_merge(...$objectList);

    /*---ここまで----*/

    // タクソノミーのタームを取得
    $lineupTermList = get_terms(array(
        'taxonomy' => 'item_cat',
        'hide_empty' => true,
    ));
    ?>
    <?php foreach ($lineupTermList as $lineupTerm): //タームループ ?>

        <?php
        //Option除外
        if($lineupTerm->term_id == 64){
            continue;
        }
        ?>

        <?php
        // 投稿タイプ「lineup」のすべての投稿を取得
        $args = array(
            'post_type' => 'lineup',
            'posts_per_page' => -1,
            'post__not_in' => array(64), // 投稿ID 64 を除外
            'tax_query' => array(
                array(
                    'taxonomy' => 'item_cat', // タクソノミー名
                    'field' => 'term_id',
                    'terms' => $lineupTerm->term_id, // タームIDを使用 
                ),
            ),
        );
        $lineup_query = new WP_Query($args);
        ?>

        <?php if ($lineup_query->have_posts()): ?>

            <!-- アイテム -->
            <p class="flex_item_content_ttl"><?php echo $lineupTerm->name; ?></p>
            <ul class="flex_item_content_list">

                <?php while ($lineup_query->have_posts()):
                    $lineup_query->the_post(); ?>

                    <?php
                    $class = "";
                    $post_id = get_the_ID(); // 投稿ID を取得 
    
                    if (in_array((int) $post_id, array_map('intval', $objectList))) {
                        $class = "selected";
                    }
                    ?>

                    <li class="<?php echo $class; ?>">
                        <a href="<?php the_permalink(); ?>">
                            <figure class="flex_item_img"><?php the_post_thumbnail('thumbnail'); ?></figure>
                            <p class="flex_item_name"><?php the_title(); ?></p>
                        </a>
                    </li>

                <?php endwhile; ?>

            </ul>

        <?php endif; ?>

    <?php endforeach;
    wp_reset_postdata(); // 最後にもう一度リセット（安全のため）
    // バッファリング終了
    return ob_get_clean();

}
// ショートコードを登録
add_shortcode('flex_item_content', 'render_flex_item_content');

/* カウントダウン */
function simple_countdown($target_date = '2025-11-01 00:00:00') {
    $target = new DateTime($target_date, new DateTimeZone('Asia/Tokyo'));
    $now = new DateTime('now', new DateTimeZone('Asia/Tokyo'));
    
    if ($now >= $target) {
        return array(
            'days' => '00',
            'hours' => '00',
            'minutes' => '00',
            'seconds' => '00'
        );
    }
    
    $diff = $now->diff($target);
    
    return array(
        'days' => sprintf('%02d', $diff->days),
        'hours' => sprintf('%02d', $diff->h),
        'minutes' => sprintf('%02d', $diff->i),
        'seconds' => sprintf('%02d', $diff->s)
    );
}
?>