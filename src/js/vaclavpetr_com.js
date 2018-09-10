var language = $("html").attr("lang");

$(".program__post").on("click", function() {
  $("body").addClass("modal--active");
  var thisTitle = $(this).attr("data-title");
  var thisContent = $(this).attr("data-content");
  var thisDate = $(this).attr("data-date");
  var thisYear = $(this).attr("data-year");
  var thisLocation = $(this).attr("data-location");
  var thisLink = $(this).attr("data-link");
  if (language === "cs-CZ") {
    var locBuy = "Koupit vstupenky";
  } else {
    var locBuy = "Buy tickets";
  }
  $("#modal .modal__content")
    .empty()
    .html(
      "<h1>" +
        thisTitle +
        "</h1><p><b>" +
        thisDate +
        " " +
        thisYear +
        "</b> | <b>" +
        thisLocation +
        "</b></p>" +
        thisContent +
        '<a href="' +
        thisLink +
        '"class="btn" target="_blank">' +
        locBuy +
        "</a>"
    );
  $("#modal").fadeIn();
  $("#modal").scrollTop(0);
});

$(".modal__close").click(function() {
  $("body").removeClass("modal--active");
  $("#modal").fadeOut();
  $("#modal").scrollTop(0);
});

$(".news__post").on("click", function() {
  $("body").addClass("modal--active");
  var thisTitle = $(this).attr("data-title");
  var thisContent = $(this).attr("data-content");
  var thisLinkArticle = $(this).attr("data-link");
  if (language === "cs-CZ") {
    var locBtn = "Číst více";
  } else {
    var locBtn = "Read more";
  }
  $("#modal .modal__content")
    .empty()
    .html(
      "<h1>" +
        thisTitle +
        "</h1>" +
        thisContent +
        '<a class="btn" target="_blank" href="' +
        thisLinkArticle +
        '">' +
        locBtn +
        "</a>"
    );
  $("#modal").fadeIn();
  $("#modal").scrollTop(0);
});

$(document).keyup(function(e) {
  if (e.keyCode == 27) {
    $("body").removeClass("modal--active");
    $("#modal").fadeOut();
    $("#modal").scrollTop(0);
  }
});

$(function() {
  $(".program__post")
    .slice(0, 5)
    .css("display", "flex")
    .show();

  if ($(".program__post").length <= 5) {
    $("#concerts button.load-more").hide();
  } else {
    $("#concerts  button.load-more").on("click", function(e) {
      e.preventDefault();
      $(".program__post:hidden")
        .slice(0, 5)
        .css("display", "flex")
        .hide()
        .fadeIn();
      if ($(".program__post:hidden").length == 0) {
        $("#concerts button.load-more").hide();
      }
    });
  }
});

$(function() {
  $("#bio button.load-more").on("click", function(e) {
    $("#bio-more").removeAttr("hidden");
    $("#bio button.load-more").hide();
  });
});

$(function() {
  $(".news__post")
    .slice(0, 5)
    .css("display", "flex")
    .show();

  if ($(".news__post").length <= 5) {
    $("#news button.load-more-news").hide();
  } else {
    $("button.load-more-news").on("click", function(e) {
      e.preventDefault();
      $(".news__post:hidden")
        .slice(0, 5)
        .css("display", "flex")
        .hide()
        .fadeIn();
      if ($(".news__post:hidden").length == 0) {
        $("#news button.load-more-news").fadeOut("slow");
      }
    });
  }
});

var navController = function() {
  $("#header ul").toggleClass("nav--opened");
};

var isActive = false;
var checkHeader = function() {
  var heroHeight = $("#hero").innerHeight();
  var scrollPosition = $(window).scrollTop();
  if (scrollPosition >= heroHeight && isActive === false) {
    $("header")
      .css("display", "flex")
      .hide()
      .fadeIn();
    isActive = true;
  } else if (scrollPosition < heroHeight) {
    $("header").fadeOut();
    isActive = false;
  }
};

$(window).scroll(function() {
  checkHeader();
});

$(window).load(function() {
  $("#preloader").fadeOut(1500);
  checkHeader();
});

$(window).resize(function() {
  slickInit();
});
