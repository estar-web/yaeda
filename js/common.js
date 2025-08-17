jQuery(function () {
  //スムーススクロール
  $('a[href^="#"]').click(function () {
    // .cn-buttonクラスがついた要素をクリックした場合は処理を中断する
    if ($(this).hasClass("cn-button")) {
      return;
    }
    // スクロールの速度
    let speed = 400; // ミリ秒で記述
    let href = $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $('body,html').animate({
      scrollTop: position
    }, speed, 'swing');
    return false;
  });

  $(".openbtn").click(function () {
    $(this).toggleClass('active');
    $('.open_menu').toggleClass('active');
    $('.menu_btn').toggleClass('active');
  });


  $(function () {
    if (window.matchMedia('(min-width: 769px)').matches) {
      jQuery(window).on("scroll", function () {
        documentHeight = jQuery(document).height();
        scrollPosition = jQuery(this).height() + jQuery(this).scrollTop() - 100;
        footerHeight = jQuery(".footer_bottom").innerHeight();
        if (documentHeight - scrollPosition <= footerHeight) {
          jQuery(".pagetop").css({
            position: "absolute",
            bottom: footerHeight - 100
          });
        } else {
          jQuery(".pagetop").css({
            position: "fixed",
            bottom: 0
          });
        }
      });
    } else if (window.matchMedia('(max-width:768px)').matches) {
      jQuery(window).on("scroll", function () {
        documentHeight = jQuery(document).height();
        scrollPosition = jQuery(this).height() + jQuery(this).scrollTop() - 58;
        footerHeight = jQuery(".footer_bottom").innerHeight();
        if (documentHeight - scrollPosition <= footerHeight) {
          jQuery(".pagetop").css({
            position: "absolute",
            bottom: footerHeight - 58
          });
        } else {
          jQuery(".pagetop").css({
            position: "fixed",
            bottom: 0
          });
        }
      });
    }
  })


  // TOPへ戻るボタン
  jQuery(window).on("scroll", function () {
    documentHeight = jQuery(document).height();
    scrollPosition = jQuery(this).height() + jQuery(this).scrollTop() - 100;
    footerHeight = jQuery(".footer_bottom").innerHeight();
    if (documentHeight - scrollPosition <= footerHeight) {
      jQuery(".pagetop").css({
        position: "absolute",
        bottom: footerHeight - 100
      });
    } else {
      jQuery(".pagetop").css({
        position: "fixed",
        bottom: 0
      });
    }
  });


  $(function () {
    // 変数にクラスを入れる
    var btn = $('.pagetop');
    var bnr = $('.footer___bnr');
    //スクロールしてページトップから100に達したらボタンを表示
    $(window).on('load scroll', function () {
      if ($(this).scrollTop() > 100) {
        btn.addClass('active');
        bnr.addClass('active');
      } else {
        btn.removeClass('active');
        bnr.removeClass('active');
      }
    });

    //スクロールしてトップへ戻る
    btn.on('click', function () {
      $('body,html').animate({
        scrollTop: 0
      });
    });
  });

  $(window).scroll(function () {
    if ($(window).scrollTop() > 20) {
      $('#header').addClass('fixed');
    } else {
      $('#header').removeClass('fixed');
    }
  });

  // ページが読み込まれた後に実行される処理
  $(document).ready(function () {
    // ボタンがクリックされた時の処理
    $('.bnr_right-bottom_close').click(function () {
      // 'bnr_right-bottom' のopacityを0にする
      $('.bnr_right-bottom').css('opacity', '0');
    });
  });


  // バナーの表示（画面の下の方で非表示）
  var $scrollEle = $('.ly_banner_area');
  function scrollHiddenSwitch() {
    $(window).on('scroll', function () {
      var scrollTop = $(this).scrollTop();
      var docHeight = $(document).height();
      var winHeight = $(window).height();
      var scrollPercent = (scrollTop / (docHeight - winHeight)) * 100;
      // スクロール量がそのページの20%を超えた時
      if (scrollPercent > 90) {
        $scrollEle.addClass('hidden');
      } else {
        $scrollEle.removeClass('hidden');
      }
    });
  }
  scrollHiddenSwitch();
});

// 375px未満はVPを固定

const viewport = document.querySelector('meta[name="viewport"]');
function switchViewport() {
  const value = window.outerWidth > 375 ? "width=device-width,initial-scale=1" : "width=375";
  if (viewport.getAttribute("content") !== value) {
    viewport.setAttribute("content", value);
  }
}
addEventListener("resize", switchViewport, false);
switchViewport();

