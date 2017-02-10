$(document).ready(function(){
  $('a.internal-link').on('click', function(){
    $('html, body').animate({
      scrollTop: $('.' + this.id).offset().top - 300
    }, 'slow');
  });
});