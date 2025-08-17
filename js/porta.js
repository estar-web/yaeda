document.addEventListener("DOMContentLoaded", function () {
  // スクロールしたら「トップに戻る」ボタンが表示される
  const toTopButton = document.querySelector("#js-cta");
  const scrollHeight = 100;
  if (toTopButton) {
    window.addEventListener("scroll", function () {
      if (window.scrollY > scrollHeight) {
        toTopButton.classList.add("add-show")
      } else {
        toTopButton.classList.remove("add-show")
      }
    });
  }
});