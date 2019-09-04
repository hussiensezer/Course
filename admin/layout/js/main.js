/*
function theDoor() {
	'use strict';
	document.getElementById('thedoor').classList.toggle('active');
	document.getElementById('full-width').classList.toggle('full-width');
}


*/
$(function(){
    
    'use strict';
    
    $('#door').mouseover(function(){
        $('.left-side').addClass('active');
        $('.right-side').removeClass('full-width');
    });
      $('#door').mouseleave(function(){
        $('.left-side').removeClass('active');
            $('.right-side').addClass('full-width');
    });
    
    

 /*       var Hide = $('.hide');
          $('.hover').mouseover(function(){
              Hide.fadeIn(200);
              
          });   
    
        $('.hover').mouseleave(function(){
            Hide.fadeOut(200);
          }); */ 

$('.hover').hover(function(){
   $(this).find('.hide').fadeIn(200);
},function () {
     $(this).find('.hide').fadeOut(200);
    });

    
    
    
    
    
    
    
    $('.confirmed').click(function(){
        
        return confirm('Are You Sure To Delete ');
    })
    
});

	

