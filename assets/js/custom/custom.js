$(document).ready(function() {

   smoothScroll.init();

      AOS.init({
        duration: 1200
      });

    $("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,3]
});

  $('.parallax-window-fr').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });
  
  $('.parallax-window').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });

  $('.next-section').parallax({
    naturalWidth: 600,
    naturalHeight: 400
  });

  $('.finally-section').parallax({
    naturalWidth: 600,
    naturalHeight: 400
});

$('.portfolio').parallax({
    naturalWidth: 600,
    naturalHeight: 400
});

  });
