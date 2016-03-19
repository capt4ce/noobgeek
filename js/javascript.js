$(document).ready(function(){
  $(".button-collapse").sideNav();
  $('.carousel').carousel();
  $('.slider').slider({full_width: true});
  $(".button-collapse").sideNav();
  var wScreenY=window.pageYOffset;
  console.log(wScreenY);
  if (wScreenY >= $('header').height()){
      $('nav').css({'top':'0px'});
  }
  else{
      $('nav').css({'top': $('header').height()-$('nav').height()-wScreenY+'px'});
  }
  $('.content').css({'margin-bottom': $('footer').height()+'px'});
});

$(window).scroll(function(){
    var wScroll=$(this).scrollTop();
    console.log(wScroll);
    <!--//fixed navigation bar-->
    /*if (wScroll >= $('header').height()){
        $('#navbar-fixed-id').addClass('navbar-fixed');
        $('nav').css({'top':'0px'});
    }
    else{
        $('#navbar-fixed-id').removeClass('navbar-fixed');
    }*/
    if (wScroll >= $('header').height()-$('nav').height()){
        $('nav').css({'top':'0px'});
    }
    else{
        $('nav').css({'top': $('header').height()-$('nav').height()-wScroll});
    }
});
