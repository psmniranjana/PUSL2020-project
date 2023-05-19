$(window).scroll(function() {
    if ($(this).scrollTop() > 100) { /* adjust this to the desired scroll position */
      $('.navbar').addClass('scrolled');
    } else {
      $('.navbar').removeClass('scrolled');
    }
  });
  