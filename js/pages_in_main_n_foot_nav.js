$(document).ready(function() {
	
	
	// fade in content
	$('#mask').animate({opacity:0}, 1500, function(){ $(this).css({'z-index':'-100'});  });
	$('.background-image').animate({opacity:1}, 1500, function(){  });
	
	
	// nothing happen if active link is clincked 
	$('.active-navlink').click(function(e) { 
		e.preventDefault();
	});
	
	// if main nav or foot nav (but not the one that is acative) is clicked , fade out and follow the link			
	$("#nav-main li a, #nav-foot li a").filter(':not(.active-navlink)').click(function(e) { 
		e.preventDefault();
		var $link = $(e.target).attr('href');
		$('#mask').css({'z-index':'100'}).animate({opacity:1}, 1000, function(){	window.open($link, '_self');});
		$('.background-image').animate({opacity:0}, 1000, function(){  });
	});	
	
	// for collectin page 
	// if main nav or foot nav (but not the one that is acative) is clicked , fade out and follow the link			
	$("#collections-tab li").click(function(e) { 
		e.preventDefault();
		var $link = $(e.target).parent('a').get()
		$('#mask').css({'z-index':'100'}).animate({opacity:1}, 1000, function(){ window.open($link, '_self');});
	});	


});
