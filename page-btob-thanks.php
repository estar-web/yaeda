<?php
/*
Template Name: 法人向けサービス thanks
*/
?>
<?php get_header("btob"); ?>



<main class="l-main">
  <section class="l-section p-thanks">
    <div class="l-inner p-thanks__inner">
      <div class="c-section-title">
        <h1 class="c-section-title__main">Thank you</h1>
        <p class="c-section-title__sub">お問い合わせありがとうございます</p>
      </div>
      <p class="p-thanks__text">
        この度は、お問い合わせいただき<br
          class="u-sp" />ありがとうございます。<br />
        お問い合わせ内容については、<br
          class="u-sp" />順次対応させていただきます。<br />
        自動送信メールにて<br
          class="u-sp" />お問い合わせ完了メールを送信しております。<br />
        受付完了メールが届かない場合は、<br
          class="u-sp" />お手数ですが再度Webフォームより<br class="u-sp" />お問い合わせください。
      </p>
      <?php the_content(); ?>
      <div class="p-thanks__btn-wrap">
        <a href="<?php echo home_url('business'); ?>" class="p-thanks__btn">TOPページへ戻る</a>
      </div>
    </div>
  </section>
</main>
<?php get_footer("btob"); ?>

</body>

</html>