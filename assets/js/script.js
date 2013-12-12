/* 	@author: Jepri Torang Sinaga
	@project : BroChallenge
	@dependencie : Jquery
	@version : 1.0 beta
*/

// shadow text function 

var shadows = function(param){

	// thanks for the math, Zach!
	// http://www.zachstronaut.com/lab/text-shadow-box/text-shadow-box.html

	    $('body').mousemove(function(e){

	    	// calculate the shadow
	    	var offset = $(param).offset();
		    var XX = e.clientX - offset.left - 150;
		    var YY = e.clientY - offset.top - 60;
		    var hyp = Math.sqrt(XX*XX+YY*YY)
		    var blur = hyp/4;
		    var fade = 60/hyp;
		    var shadows = '';

	    	
	    	shadows += -XX/70 +'px '+ -YY/70 +'px 0 #000, ';
	    	shadows += -XX/60 +'px '+ -YY/60 +'px 0 #000, ';
	    	shadows += -XX/50 +'px '+ -YY/50 +'px 0 #000, ';
	    	shadows += -XX/40 +'px '+ -YY/40 +'px 0 #000, ';
	    	shadows += -XX/30 +'px '+ -YY/30 +'px 0 #000 ';
		    

		    // apply text shadow(s)
		    $(param).css('text-shadow', shadows);
	});
}

// init function
var init = function(){
	shadows('.text-shadow');
	
	setTimeout(function(){
		$(".md-modal").addClass('md-show');
	},1000);
}

// ready function
$(function(){
	init();	
});