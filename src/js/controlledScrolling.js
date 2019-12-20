const disableOnSmallScreens = () => {
  if ($(window).width() < 1000) {
    $.scrollify.disable();
  } else {
    $.scrollify.enable();
  }
};

$(document).ready(() => {
  $.scrollify({
    section: ".scroll-section",
    sectionName: "section-name",
    interstitialSection: "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset: 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll: true,
    before: function() {},
    after: function() {},
    afterResize: function() {},
    afterRender: function() {}
  });

  disableOnSmallScreens();

  $(window).resize(() => {
    disableOnSmallScreens();
  });
});
