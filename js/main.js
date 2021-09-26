$('.hamburger').click(function () {
  $(this).toggleClass('active');
  if ($('.hamburger').hasClass('active')) {
      $('.sp-menu').addClass('active');
  } else {
      $('.sp-menu').removeClass('active');
  }
})