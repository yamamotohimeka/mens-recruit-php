$(function () {
  // ハンバーガーメニュー
  $(`.header__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
  });
  $(`.header__tabNav-close`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
  });

  // sideBar追尾
  const sideBar = $("#sideBar");
  const contents = $("#contents");
  const sideBarMargin = 16;

  const SideBarScroll = () => {
    const scroll = $(window).scrollTop();
    const minActive = contents.offset().top;
    const maxActive = contents.offset().top + contents.height() - sideBar.height() - sideBarMargin + parseInt(contents.css("margin-bottom"), 16);
    const topMargin = scroll - minActive + sideBarMargin;
    const bottomMargin = maxActive - minActive + sideBarMargin;
    if (scroll > minActive - sideBarMargin && scroll < maxActive) {
      sideBar.css({ "margin-top": topMargin });
    } else if (scroll > maxActive - sideBarMargin) {
      sideBar.css({ "margin-top": bottomMargin });
    } else {
      sideBar.css({ "margin-top": 0 });
    }
  };

  $(window).scroll(() => {
    if (sideBar.length !== 0 && contents.length !== 0) {
      SideBarScroll();
    }
  });

  $(window).on("load", () => {
    if (sideBar.length !== 0 && contents.length !== 0) {
      SideBarScroll();
    }
  });
});
