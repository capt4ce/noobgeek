$(".button-collapse").sideNav();
$(window).scroll(function(){
    var wScroll=$(this).scrollTop();
    console.log(wScroll);
    <!--//fixed navigation bar-->
    if (wScroll >= $('#img-header').height()){
        $('#navbar-fixed-id').addClass('navbar-fixed');
        $('nav').css({'top':'0px'});
        console.log('inside');
    }
    else{
        $('#navbar-fixed-id').removeClass('navbar-fixed');
        $('nav').css({'top':'0px'});
        console.log('inside');
    }
});