			$(document).ready(function() {
			
				var animateSubNav;
				animateSubNav = $("#nav-sub").attr("data-animate");
								
				// fade in gallery
				$('#mask').animate({opacity:0}, 1500, function(){ 
					//hide mask underneath
					$(this).css({'z-index':'-100'}); 
				
					// drop in sub-menu
				
					if (animateSubNav == 'y') {
						$("#nav-sub").animate({top:0},1000);
					} else {
						$("#nav-sub").css({top:0});
					}
				});



				// nothing happen if active link is clincked 
				$('.active-navlink').click(function(e) { 
					e.preventDefault();
				});			

				

				// if other jewelry category (but not the one that is acative) is clicked, fade out gallery before follow the link
				$("#nav-sub li a").filter(':not(.active-navlink)').click(function(e) { 
					e.preventDefault();
					var $link = $(e.target).attr('href');
					$('#mask').css({'z-index':'100'}).animate({opacity:1}, 1000, function(){ window.open($link, '_self');});
				});

				// if main nav or foot nav (but not the one that is acative) is clicked , fade out, retract sub-nav, and follow the link			
				$("#nav-main li a, #nav-foot li a").filter(':not(.active-navlink)').click(function(e) { 
					e.preventDefault();
					var $link = $(e.target).attr('href');
					$('#mask').css({'z-index':'100'}).animate({opacity:1}, 1000, function(){ 
						$('#nav-sub').animate({top:-25}, 800 , function(){ window.open($link, '_self'); } );
					});					
				});	

			
			});
