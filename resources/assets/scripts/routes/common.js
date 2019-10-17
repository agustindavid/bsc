export default {
  init() {
    $('.more-info-btn').click(function(e){
      e.preventDefault();
      $('.more-info-product').slideUp();
      if(!($('.more-info-product', $(this).closest('.product-detail')).hasClass('shown'))){
        $('.more-info-product', $(this).closest('.product-detail')).slideDown();
        $('.more-info-product', $(this).closest('.product-detail')).addClass('shown');
        $(this).closest('.product-detail').addClass('shadow active');
        $(this).css('display', 'none');
      } else {
        $('.more-info-product', $(this).closest('.product-detail')).slideUp();
        $('.more-info-product', $(this).closest('.product-detail')).removeClass('shown');
        $(this).closest('.product-detail').removeClass('shadow active');
      }
    });

    $('.close-description').click(function(e){
      e.preventDefault();
      $('.more-info-product').slideUp();
      $('.more-info-btn', $(this).closest('.product-detail')).css('display', 'inline');
      $('.product-detail').removeClass('shadow active');
    });

    $('.parent-cat').click(function(){
      $('+ .inner-sidebar', $(this)).slideToggle();
      var text = $('.toggleCatList', $(this)).text();
      $('.toggleCatList', $(this)).text(
          text == '+' ? '-' : '+');
    });

    $('.faq-collapse').click(function(){
      if($(this).parent().hasClass('active-faq')){
        $('.question-faq').removeClass('active-faq');
      } else {
        $('.question-faq').removeClass('active-faq');
        $(this).parent().addClass('active-faq');
      }
    })
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
