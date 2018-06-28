/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Animated Scroll
$(document).ready(function(){
    $('.page-scroll').on('click', function(event) {
        var $anchor = $(this);
        $('html,body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top-100
        }, 1250, 'easeInOutExpo');
        event.preventDefault();
    });
});

//Paralax Effect Jumbotron
$(document).ready(function(){
   $(window).scroll(function(){
       var wScroll = $(this).scrollTop();
       $('.jumbotron img').css({
           'transform' : 'translate(0px,'+ wScroll/4 +'%)'
       });
       $('.jumbotron h1').css({
           'transform' : 'translate(0px,'+ wScroll/2 +'%)'
       });
       $('.jumbotron p').css({
           'transform' : 'translate(0px,'+ wScroll/1.2 +'%)'
       });
       
       if(wScroll > $('.portfolio').offset().top - 275){
           $('.portfolio a').addClass('.faceUp')
       }
    }); 
});