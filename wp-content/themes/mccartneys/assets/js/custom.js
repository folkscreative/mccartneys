$(document).ready(function () {
  $('.nav-link').on('click', function () {
    $('.inner-tabs.pr').slick('refresh');
  });
});
// daper
$('.depar').slick({
    dots: true,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slideToScroll: 1
  });
// Testimonials
  $('.testimonial-slider.wrapper').slick({
    dots: true,
    arrows: false,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slideToScroll: 1
  });
  // Property slider
  $('.inner-tabs.pr').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    adaptiveHeight: true,
    slideToScroll: 1
  });
  // btn
  $('.filter-btn a').click(function(){
    $('.filter-btn a').removeClass('active'); // Remove the class from all elements
    $(this).addClass('active'); // Add the class to the clicked element
});

