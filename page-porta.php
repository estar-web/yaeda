<?php get_header(); ?>
<header class="po-header">
  <div class="po-header__inner">
    <img src="<?php echo get_template_directory_uri(); ?>/img/common/logo.svg" alt="ロゴ：YEDEA" width="110" height="30" loading="lazy" decoding="async">
  </div>
</header>
<main class="l-main">
  <div class="po-fv">
    <div class="po-fv__contents">
      <h1 class="po-fv__title">PORTA</h1>
      <time datetime="2025-11-01" class="po-fv__date">11.01</time>
      <div class="po-fv__countdown">
        <?php $c = simple_countdown(); ?>
        <div class="po-fv__item">
          <p class="po-fv__num" id="countdown-days"><?php echo $c['days']; ?></p>
          <p class="po-fv__unit">DAYS</p>
        </div>
        <div class="po-fv__line"></div>
        <div class="po-fv__item">
          <p class="po-fv__num" id="countdown-hours"><?php echo $c['hours']; ?></p>
          <p class="po-fv__unit">HOURS</p>
        </div>
        <div class="po-fv__line"></div>
        <div class="po-fv__item">
          <p class="po-fv__num" id="countdown-minutes"><?php echo $c['minutes']; ?></p>
          <p class="po-fv__unit">MINUTES</p>
        </div>
        <div class="po-fv__line"></div>
        <div class="po-fv__item">
          <p class="po-fv__num" id="countdown-seconds"><?php echo $c['seconds']; ?></p>
          <p class="po-fv__unit">SECONDS</p>
        </div>
      </div>
      <p class="po-fv__text">最新型電動バイク<br class="u-show">2025年11月1日発売予定</p>
    </div>
    <p class="noto po-fv__scroll">scroll</p>
  </div>

  <section class="po-about">
    <div class="l-inner">
      <div class="po-about__body">
        <div class="c-title">
          <h2 class="c-title__jp">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="8" fill="#9CCAA9" />
            </svg>
            PORTA（ポルタ）について
          </h2>
          <p class="c-title__eg">ABOUT</p>
        </div>
        <p class="po-about__text">
          『レトロカワイイ』<br>レトロ感あるデザインとカラーで<br>
          欧州やアジアでは大人気のモビリティ<br>
          街乗りに最適な原付モデル<br>
          <br>
          見た目だけでなく<br>
          バッテリー、モーター等にもこだわった電動バイク<br>
          NFCキーでタッチして進むだけ<br>
          <br>
          あなたも「PORTA」でお洒落で快適な移動を
        </p>
      </div>
      <div class="po-about__movie">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/oNdANw-UE9Y?si=lJ1g7GSYLrFEpboO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </section>

  <section class="po-spec">
    <div class="l-inner">
      <div class="c-title">
        <h2 class="c-title__jp">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <circle cx="8" cy="8" r="8" fill="#9CCAA9" />
          </svg>
          製品仕様
        </h2>
        <p class="c-title__eg">SPEC</p>
      </div>
      <div class="po-spec__contents">
        <div class="po-spec__item">

          <dl class="po-spec__list">
            <div class="po-spec__wrap">
              <dt class="po-spec__label">モデル名</dt>
              <dd class="po-spec__data">PORTA</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">モーター</dt>
              <dd class="po-spec__data">定格出力 400W</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">最大航続距離</dt>
              <dd class="po-spec__data">40km※</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">サスペンション</dt>
              <dd class="po-spec__data">フロント/リアサスペンション</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">タイヤ</dt>
              <dd class="po-spec__data">フロント: 2.75-8 リア: 60/100-10 タイヤ/リアサスペンション</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">重量</dt>
              <dd class="po-spec__data">55kg</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">ディスプレイ</dt>
              <dd class="po-spec__data">5LEDディスプレイ</dd>
            </div>
          </dl>
          <dl class="po-spec__list">
            <div class="po-spec__wrap">
              <dt class="po-spec__label">バッテリー</dt>
              <dd class="po-spec__data">48V 24Ah</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">最高速度</dt>
              <dd class="po-spec__data">35km</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">コントローラ</dt>
              <dd class="po-spec__data">YADEA TTFARインテリジェントドライビング電子制御コア</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">ブレーキ</dt>
              <dd class="po-spec__data">フロント/リアドラムブレーキ</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">充電時間</dt>
              <dd class="po-spec__data">6-7h</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">サイズ</dt>
              <dd class="po-spec__data">1470mm×680mm×1005mm</dd>
            </div>
            <div class="po-spec__wrap">
              <dt class="po-spec__label">ライト</dt>
              <dd class="po-spec__data">LEDヘッドライト/リア/ブレーキ/ウィンカー/ナンバープレートライト</dd>
            </div>
          </dl>
        </div>
        <p class="po-spec__text">※最大航続距離は自社実験による理論値です。路面状況や環境により異なります。<br>現在、開発中の製品につき、スペック含めた製品情報は変更される予定です。</p>
      </div>

    </div>
  </section>

  <?php
  $args = array(
    'post_type' => 'story',
    'posts_per_page' => 3,
    'orderby' => 'date',
    'order' => 'DESC',
  );
  $story_query = new WP_Query($args);
  if ($story_query->have_posts()):
  ?>
    <section class="po-story">
      <div class="l-inner">
        <div class="c-title">
          <h2 class="c-title__jp">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="8" fill="#9CCAA9" />
            </svg>
            開発ストーリー
          </h2>
          <p class="c-title__eg">STORY</p>
        </div>
        <div class="po-story__contents">
          <?php
          while ($story_query->have_posts()):
            $story_query->the_post();
          ?>
            <article class="po-story__item">
              <p class="po-story__num"><?php echo $story_query->current_post + 1; ?></p>
              <figure class="po-story__thumbnail">
                <?php
                if (has_post_thumbnail()):
                  the_post_thumbnail('full');
                else:
                ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/porta/thumbnail-default.png" alt="画像：サムネイル" width="400" height="267" loading="lazy" decoding="async">
                <?php endif; ?>
              </figure>
              <h3 class="po-story__title">ここにタイトルが入りますここにタイトルが入りますここにタイトルが入ります</h3>
              <p class="po-story__content">
                ここに詳細文章が入りますここに詳細文章が入りますここに詳細文章が入りますここに詳細文章が入ります
              </p>
            </article>
          <?php
          endwhile;
          ?>
        </div>
        <div class="po-story__link">
          <a href="" class="c-btn--black">
            もっと見る
            <img src="<?php echo get_template_directory_uri(); ?>/img/porta/icon-btn.svg" alt="アイコン：三角形" width="20" height="20" loading="lazy" decoding="async">
          </a>
        </div>
      </div>
    </section>
  <?php
  endif;
  wp_reset_postdata();
  ?>
</main>

<footer class="l-footer">
  <div id="js-cta" class="p-cta">
    <a href="" class="p-cta__btn">
      購入する（準備中）
      <img src="<?php echo get_template_directory_uri(); ?>/img/porta/icon-btn.svg" alt="アイコン：三角形" width="20" height="20" loading="lazy" decoding="async">
    </a>
    <p class="p-cta__copy">
      この製品に関するお問い合わせは、<a href="<?php echo home_url('/contact'); ?>" class="p-cta__link">こちら</a> からお送りください。
    </p>
  </div>
  <h2 class="l-footer__title">PORTA</h2>
  <p class="l-footer__copyright">&copy; 2025 YADEA</p>
  <script src="<?php echo get_template_directory_uri(); ?>/js/countdown.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/js/porta.js" defer></script>
  <?php wp_footer(); ?>
</footer>