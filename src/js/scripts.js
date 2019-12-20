var enableFadeIn = false;

const hideShowForgroundImage = () => {
  $('#divider_on_mobile').hide();
  var windowsize = $(window).width()
  if (windowsize < 1000 ) {
    enableFadeIn = false;
    $('#divider_on_mobile').show();
    $('#header_forground_image').addClass('invisible');
  } else {
    enableFadeIn = true;
    $('#header_forground_image').removeClass('invisible');
    $('#header_forground_image').addClass('animated slideInUp');
  }
}

$(document).ready(() => {
  hideShowForgroundImage();
})

$(window).resize(() => {
  hideShowForgroundImage();
});

$(document).ready(() => {
  // Hide content until page is loaded
  $("body").css("display", "block");
  $(".search-submit").addClass("btn btn-primary").removeClass("search-submit");
});

$(window).scroll(() => {
    if (enableFadeIn) {
      var hT = $('#card1').offset().top,
        hH = $('#card1').outerHeight(),
        wH = $(window).height(),
        wS = $(this).scrollTop();
    if (wS > (hT+hH-wH)){
      $("#card1").removeClass("invisible").addClass("fadeIn");
      setTimeout(() => {
        $("#card2").removeClass("invisible").addClass("fadeIn");
      }, 500);
      setTimeout(() => {
        $("#card3").removeClass("invisible").addClass("fadeIn");
      }, 1000);
    }
  } else {
    $("#card1").removeClass("invisible");
    $("#card2").removeClass("invisible");
    $("#card3").removeClass("invisible");
  }
});

$(window).scroll(() => {
  if (enableFadeIn) {
    var hT = $('.fadeInBlog').offset().top,
    hH = $('.fadeInBlog').outerHeight(),
    wH = $(window).height(),
    wS = $(this).scrollTop();
    if (wS > (hT+hH-wH)){
      $(".fadeInBlog").removeClass("invisible").addClass("fadeIn");
    }
  } else {
      $(".fadeInBlog").removeClass("invisible").addClass("fadeIn");
  }
});

$(window).scroll(() => {
  $("#header_forground_image").css("opacity", 1 - $(window).scrollTop() / 250);
});