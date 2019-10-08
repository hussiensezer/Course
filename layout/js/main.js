/*
function theDoor() {
	'use strict';
	document.getElementById('thedoor').classList.toggle('active');
	document.getElementById('full-width').classList.toggle('full-width');
}


*/
$(function(){
    
    'use strict';
    
    $('#button').click(function(){
        $('.left-side').toggleClass('active');
        $('.right-side').toggleClass('full-width');
    })
    
});
