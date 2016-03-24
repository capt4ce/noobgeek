var hHeight=$('header').height();
var htmlMargin=parseInt($('html').css('margin-top').replace('px',''));

$(document).ready(function(){
  $(".button-collapse").sideNav();
  $('.carousel').carousel();
  $('.slider').slider({full_width: true});
  var wScreenY=window.pageYOffset;
  console.log(hHeight-$('nav').height()-wScreenY+htmlMargin+'px');
  if (wScreenY >= hHeight){
      $('nav').css({'top':htmlMargin+'px'});
  }
  else{
      $('nav').css({'top': hHeight-$('nav').height()-wScreenY+htmlMargin+'px'});
  }
  $('.content').css({'margin-bottom': $('footer').height()+'px'});
});

$(window).scroll(function(){
    var wScroll=$(this).scrollTop();
    <!--//fixed navigation bar-->
    /*if (wScroll >= $('header').height()){
        $('#navbar-fixed-id').addClass('navbar-fixed');
        $('nav').css({'top':'0px'});
    }
    else{
        $('#navbar-fixed-id').removeClass('navbar-fixed');
    }*/
    if ((wScroll >= hHeight-$('nav').height()) && $(window).width()>600){
        $('nav').css({'top':htmlMargin+'px'});
    }
    else{
        $('nav').css({'top': hHeight-$('nav').height()-wScroll+htmlMargin+'px'});
    }
});
