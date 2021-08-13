jQuery(document).ready(function($) {

  // Responsive sidebar toggle

  const $button  = document.querySelector('#sidebar-toggle');

  const $wrapper = document.querySelector('#wrapper');


  // hamburger menu

  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();      
    });

    function hamburger_cross() {

      if (isClosed == true) {          
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        $('.sidebar').toggleClass('active');
        $('#wrapper').toggleClass('active');
        isClosed = false;
      } else {   
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        $('.sidebar').toggleClass('active');
        $('#wrapper').toggleClass('active');
        isClosed = true;
      }
  }
  
  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled');
  });  



});



