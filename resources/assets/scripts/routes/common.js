export default {
  init() {
    $('.more-info-btn').click(function(e){
      e.preventDefault();
      $('.more-info-product').slideUp();
      if(!($('.more-info-product', $(this).closest('.product-detail')).hasClass('shown'))){
        $('.more-info-product', $(this).closest('.product-detail')).slideDown();
        $('.more-info-product', $(this).closest('.product-detail')).addClass('shown');
        $(this).css('display', 'none');
      } else {
        $('.more-info-product', $(this).closest('.product-detail')).slideUp();
        $('.more-info-product', $(this).closest('.product-detail')).removeClass('shown');
      }
    });

    $('.close-description').click(function(e){
      e.preventDefault();
      $('.more-info-product').slideUp();
      $('.more-info-btn', $(this).closest('.product-detail')).css('display', 'inline');
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
