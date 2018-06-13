$(document).ready(function() {

// Gets the video src from the data-src on each button

$(function() {
    $(".video-button").click(function () {
      var theModal = $(this).data("target"),
      videoSRC = $(this).attr("data-video"),
      videoSRCauto = videoSRC + "?modestbranding=1&rel=0&showinfo=0&html5=1&autoplay=1";
      $(theModal + ' iframe').attr('src', videoSRCauto);
      $(theModal + ' button.close').click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
      $(".modal").click(function () {
        $(theModal + ' iframe').attr('src', videoSRC);
      });
    });
  });
// document ready
});
