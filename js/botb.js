/**
* 最大幅に基づいてviewport設定を切り替える関数。
* @function
* @param {number} maxWidth - viewportを固定する際の最大幅
*/
const switchViewport = (maxWidth) => {
  const viewport = document.querySelector('meta[name="viewport"]');
  const value =
    window.outerWidth > maxWidth
      ? "width=device-width,initial-scale=1"
      : `width=${maxWidth}`;
  if (viewport.getAttribute("content") !== value) {
    viewport.setAttribute("content", value);
  }
};
addEventListener("resize", () => switchViewport(375));
switchViewport(375);



// ハンバーガーメニュー
document.addEventListener("DOMContentLoaded", () => {
  //定義
  const drawerIcon = document.querySelector('.p-drawer__icon');
  const drawer = document.querySelector('.p-drawer');
  const drawerNavItem = document.querySelectorAll('.p-drawer__body a[href^="#"]');
  const headerHeight = document.querySelector('.p-header').offsetHeight;
  const breakpoint = 768;
  let isMenuOpen = false;
  let isMenuOpenAtBreakpoint = false;

  //メニューを開くアニメーション
  const openMenu = () => {
    if (!drawer.classList.contains("js-show")) {
      drawer.classList.add("js-show");
      drawerIcon.classList.add("js-show");
    }
  }

  //メニューを閉じるアニメーション
  const closeMenu = () => {
    if (drawer.classList.contains("js-show")) {
      drawer.classList.remove("js-show");
      drawerIcon.classList.remove("js-show");
      isMenuOpen = false;
    }
  }

  //メニューの開閉動作
  const toggleMenu = () => {
    if (!drawer.classList.contains("js-show")) {
      openMenu();
    } else {
      closeMenu();
    }
  };

  //リサイズ処理
  const handleResize = () => {
    const bp = breakpoint;
    const windowWidth = window.innerWidth;
    if (windowWidth > bp && isMenuOpenAtBreakpoint) {
      closeMenu();
    } else if (windowWidth <= bp && drawer.classList.contains("js-show")) {
      isMenuOpenAtBreakpoint = true;
    }
  };

  //メニュー外クリック処理
  const clickOuter = (event) => {
    if (drawer.classList.contains("js-show") && !drawer.contains(event.target) && isMenuOpen) {
      closeMenu();
    } else if (drawer.classList.contains("js-show") && !drawer.contains(event.target)) {
      isMenuOpen = true;
    }
  }

  //該当箇所までスクロール
  const linkScroll = (target) => {
    if (target) {
      const targetPosition = target.getBoundingClientRect().top + window.scrollY;
      const offsetPosition = targetPosition - headerHeight;
      window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
      });
    }
  }

  //ヘッダーアイコン クリック時
  drawerIcon.addEventListener("click", toggleMenu);
  //画面幅リサイズ時
  window.addEventListener("resize", handleResize);
  //メニュー外クリック時
  document.addEventListener("click", clickOuter);
  //ページ内リンクナビメニュー クリック時
  drawerNavItem.forEach(item => {
    item.addEventListener("click", event => {
      event.preventDefault();
      closeMenu();
      const targetItem = document.querySelector(item.getAttribute("href"));
      linkScroll(targetItem);
    });
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const fvTitleTop = document.querySelector(".p-fv__title--top");
  const fvTitleBottom = document.querySelector(".p-fv__title--bottom");
  const fvItems = document.querySelectorAll(".p-fv__item"); // 3つの丸

  if (fvTitleTop && fvTitleBottom) {
    // 各文字をspanでラップ
    const wrapText = (element) => {
      const text = element.textContent.trim();
      element.innerHTML = text
        .split("")
        .map((char) => `<span class="char">${char}</span>`)
        .join("");
    };

    wrapText(fvTitleTop);
    wrapText(fvTitleBottom);

    // タイムライン作成（タイトル → 丸の順にアニメーション）
    const timeline = gsap.timeline();

    timeline
      .add(() => {
        fvTitleTop.classList.add("animate");
      }, 0)
      .fromTo(
        ".p-fv__title--top .char",
        { opacity: 0, x: -20 },
        { opacity: 1, x: 0, stagger: 0.05, duration: 0.5, ease: "power3.out" }
      )
      .add(() => {
        fvTitleBottom.classList.add("animate");
      }, "-=0.3")
      .fromTo(
        ".p-fv__title--bottom .char",
        { opacity: 0, x: -20 },
        { opacity: 1, x: 0, stagger: 0.05, duration: 0.5, ease: "power3.out" },
        "-=0.3"
      )
      .fromTo(
        fvItems, // 3つの丸をアニメーション
        { opacity: 0, scale: 0.5, y: 20 },
        {
          opacity: 1,
          scale: 1,
          y: 0,
          duration: 1,
          ease: "power3.out",
          stagger: 0.3,
        },
        "+=0.3" // 少し間をあけて発火
      );
  }
});

// message吹き出しアニメーション
document.addEventListener("DOMContentLoaded", () => {
  const imageArea = document.querySelector(".p-message__image-area"); // 監視対象
  const hukidashiItems = document.querySelectorAll(".p-message__hukidashi"); // アニメーション対象

  if (imageArea && hukidashiItems.length > 0) {
    const observer = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            // アニメーション実行
            gsap.fromTo(
              hukidashiItems,
              { opacity: 0, scale: 0.5, y: 20 },
              {
                opacity: 1,
                scale: 1,
                y: 0,
                duration: 1,
                ease: "power3.out",
                stagger: 0.3,
              }
            );
            observer.disconnect(); // 一度だけ発火
          }
        });
      },
      {
        threshold: 1.0 // ← 完全に表示されたときに発火
      }
    );

    observer.observe(imageArea); // ← ここがポイント
  }
});
//reasonアニメーション

document.addEventListener("DOMContentLoaded", () => {
  // ✅ 画面幅が768px以上のときだけ実行
  if (window.innerWidth >= 768) {
    const reasonItems = document.querySelectorAll(".p-reason__item");

    if (reasonItems.length > 0) {
      reasonItems.forEach((item) => {
        const image = item.querySelector(".p-reason__item-image");
        const body = item.querySelector(".p-reason__item-body");

        gsap.timeline({
          scrollTrigger: {
            trigger: item,
            start: "top 80%",
            end: "bottom 20%",
            toggleActions: "play none none none",
          },
        })
          .fromTo(
            image,
            { opacity: 0, x: 50 },
            { opacity: 1, x: 0, duration: 0.8, ease: "power3.out" }
          )
          .fromTo(
            body,
            { opacity: 0, x: -50 },
            { opacity: 1, x: 0, duration: 0.8, ease: "power3.out" },
            "-=0.4"
          );
      });
    }
  }
});


// アコーディオン
document.addEventListener("DOMContentLoaded", () => {
  setUpAccordion();
});

const setUpAccordion = () => {
  const details = document.querySelectorAll(".js-details");
  const IS_OPENED_CLASS = "is-opened";

  // ✅ 最初のアコーディオンを開いておく処理を追加
  if (details.length > 0) {
    const firstElement = details[0];
    const firstSummary = firstElement.querySelector(".js-summary");
    const firstContent = firstElement.querySelector(".js-content");

    firstElement.classList.add(IS_OPENED_CLASS);
    firstElement.setAttribute("open", "true");

    // 高さと透明度を即座にセット（アニメーションせず表示）
    gsap.set(firstContent, {
      height: "auto",
      opacity: 1,
    });
  }

  // ✅ 各アコーディオンにクリックイベントを設定
  details.forEach((element) => {
    const summary = element.querySelector(".js-summary");
    const content = element.querySelector(".js-content");

    summary.addEventListener("click", (event) => {
      event.preventDefault();

      if (element.classList.contains(IS_OPENED_CLASS)) {
        element.classList.remove(IS_OPENED_CLASS);
        closingAnim(content, element).restart();
      } else {
        element.classList.add(IS_OPENED_CLASS);
        element.setAttribute("open", "true");
        openingAnim(content).restart();
      }
    });
  });
};
/**
 * アコーディオンを閉じる時のアニメーション
 */
const closingAnim = (content, element) => gsap.to(content, {
  height: 0,
  opacity: 0,
  duration: 0.4,
  ease: "power3.out",
  overwrite: true,
  onComplete: () => {
    // アニメーションの完了後にopen属性を取り除く
    element.removeAttribute("open");
  },
});

/**
 * アコーディオンを開く時のアニメーション
 */
const openingAnim = (content) => gsap.fromTo(
  content,
  {
    height: 0,
    opacity: 0,
  },
  {
    height: "auto",
    opacity: 1,
    duration: 0.4,
    ease: "power3.out",
    overwrite: true,
  }
);


// スムーススクロール
// document.addEventListener("DOMContentLoaded", () => {
//   const headerLinks = document.querySelectorAll('.p-header__list a[href*="#"]');
//   const header = document.querySelector('.p-header');
//   const headerHeight = header ? header.offsetHeight : 0;

//   headerLinks.forEach(link => {
//     link.addEventListener('click', function(e) {
//       const href = link.getAttribute('href');
//       if (!href || !href.includes('#')) return;

//       // URLをパースして同一ページ内か判定（末尾スラッシュ有無を無視）
//       const url = new URL(link.href, location.origin);
//       const currentPath = window.location.pathname.replace(/\/$/, '');
//       const linkPath = url.pathname.replace(/\/$/, '');
//       if (linkPath === currentPath && url.hash) {
//         const target = document.querySelector(url.hash);
//         if (target) {
//           e.preventDefault();
//           const targetY = target.getBoundingClientRect().top + window.scrollY ;
//           window.scrollTo({
//             top: targetY,
//             behavior: 'smooth'
//           });
//         }
//       }
//     });
//   });
// });




// スムーススクロール
document.addEventListener("DOMContentLoaded", () => {
  // すべてのアンカーリンクを対象
  const anchorLinks = document.querySelectorAll('a[href*="#"]');
  const header = document.querySelector('.p-header');
  const headerHeight = header ? header.offsetHeight : 0;
  const drawer = document.querySelector('.p-drawer');
  const drawerIcon = document.querySelector('.p-drawer__icon');

  anchorLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      const href = link.getAttribute('href');
      if (!href || !href.includes('#')) return;

      // URLをパースして同一ページ内か判定（末尾スラッシュ有無を無視）
      const url = new URL(link.href, location.origin);
      const currentPath = window.location.pathname.replace(/\/$/, '');
      const linkPath = url.pathname.replace(/\/$/, '');
      if (linkPath === currentPath && url.hash) {
        const target = document.querySelector(url.hash);
        if (target) {
          e.preventDefault();

          // ハンバーガーメニュー内のリンクならメニューを閉じる
          if (link.closest('.p-drawer')) {
            drawer.classList.remove("js-show");
            if (drawerIcon) drawerIcon.classList.remove("js-show");
          }

          const targetY = target.getBoundingClientRect().top + window.scrollY ;
          window.scrollTo({
            top: targetY,
            behavior: 'smooth'
          });
        }
      }
    });
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document.querySelectorAll('.contact__row').forEach(function(row) {
    const hasError = row.querySelector('.contact__data .error');
    if (hasError) {
      row.classList.add('is-error');
    }
  });
});