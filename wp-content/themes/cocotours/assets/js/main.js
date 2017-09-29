;(function($){


  $('.slider-page').slick({
      infinite: true,
      speed: 500,
      fade: true,
      autoplay: true,
      arrows:false,
      dots:true,
      cssEase: 'linear'
  });

  $('.slider-gallery').slick({
    slidesToShow: 5,
    infinite: true,
    autoplay: true,
    arrows:false,
    cssEase: 'linear'
    
});

$('.slider-gallery').magnificPopup({
  delegate: '.woocommerce-product-gallery__image a', // child items selector, by clicking on it popup will open
  type: 'image',
  gallery:{
      enabled:true
    }
  
});

$('.tour-popup-link').magnificPopup({
  type: 'inline',
  midClick: true,
  removalDelay: 500, //delay removal by X to allow out-animation
  callbacks: {
      beforeOpen: function() {

          this.st.mainClass = 'mfp-zoom-out';
          $('body').addClass('mfp-open');
      },
      beforeClose: function() {

         
          $('body').removeClass('mfp-open');
      }

  }

 
});

$('.tour-popup-link').on('click',function (e) {
  


 
  $('#tour-popup').find('input[name="your-subject"]').val('Inquire for '+$(this).attr('data-title'));
  
 
  

  });


  $(window).scroll(function () {

          
  });


 
  $(window).load(function() {
      
        resize();

  });


  $(window).resize(resize);

  function resize () {
    
  
  }


    
})(jQuery);





