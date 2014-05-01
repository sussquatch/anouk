/*!
 * Copyright (c) 2011 by Apollo Tang at Opus 6 web development
 * Contact: tang.apollo@gmail.com
 *
 * Built on top of:
 * 		jQuery library ( http://jquery.com)
 * 		jCarousel ( http://sorgalla.com/jcarousel/ )
 */


function o6_gallery(gallery_name, gallery_dir, json_file, gallery_length, item_to_view, first_carousel_item ){

	item_to_view = parseInt(item_to_view);
	first_carousel_item = parseInt(first_carousel_item);
	gallery_length = parseInt(gallery_length);
	
	var carousel_start_item,
		carousel_frame;

	if ( !item_to_view ) { //if invalid set to 1 to prevent error in caculating carousel_frame 
		item_to_view = 1;
	}	
	if ( !first_carousel_item ) {  // if invalid parameter (NaN, )calculate the item to be first in carousel 
		carousel_frame = Math.ceil(item_to_view / 7); 
		carousel_start_item = carousel_frame*7 - 6;
	} 
	if ( 0 < first_carousel_item && first_carousel_item < gallery_length+1 ) {  // check to make sure item is not out of bound  
		carousel_start_item = first_carousel_item;
	}
	

	/* @funtion loadItems
	 *
	 * load thumb nail via json call
	 * @param {obj} carousel : The instance of the carousel from jcarousel plug-in
	 * @param {string} state : The state of carousel action (prev, next, init)
	 *
	 * dependency: jquery.jcarousel.js, getItemHTML(), buildDisplay()
	 */
	/* json format to load:
		{
			"items": [
				{	"n":"Sea Sand Diamond Ring",
					"d":"14k Gold and Diamond ring",
					"p":"starting from $1800",
					"f":"sea_sand_diamond_ring" }
				,	
				{	"n":"Ancient Promise Solitaire Ring",
					"d":"14k Gold and Diamond ring",
					"p":"Starting from $2000",
					"f":"ancient_promise_solitaire_ring" }
			]
		}	
	*/ 
	function loadItems(carousel, state){ 
		
	   if (state != 'init') return;  // if state is previous or next skip initialization 

		var carouselData = {},
			dataLength = 0,
			itemList = [],
			thumbDir = gallery_dir +'imgs/thumb/',
			fullSizeDir = gallery_dir +'imgs/full/'; 

		var html_display;

//console.log( gallery_dir + json_file + '?nocache=' + ( new Date() ).getTime() );			
		$.getJSON( gallery_dir + json_file +'?nocache=' + (new Date()).getTime(), // this prevent IE from caching

			function(data) {
				alert(data);
				carouselData = data;
				dataLength = carouselData.items.length; 
				carousel.size(dataLength);  // set total number of item in for jcarousal 

				for (counter = 0; counter < dataLength; counter++) { // extrating information from json and store in itemList[]
				//console.log("counter=" + counter);				
					
					itemList[counter] = {};
					itemList[counter].title = carouselData.items[counter].n;
					itemList[counter].url = thumbDir + carouselData.items[counter].f + '_thumb.jpg';
					carousel.add(counter+1, getItemHTML(itemList[counter])); //add items to jcarousel

					if (counter == item_to_view ) { $("ul#carousel > li[jcarouselindex=" + counter + "]").addClass("thumb-selected"); } // set flag
					var counter_plus_1 = counter+1;
					$("ul#carousel > li[jcarouselindex=" + counter_plus_1 + "]").find('img').attr("alt", itemList[counter].title); // set alt attribute
					$("ul#carousel > li[jcarouselindex=" + counter_plus_1 + "]").find('img').attr("title", itemList[counter].title); // set title attribute
					
				} // end for loop
				
			} // end callback for getJSON
		); //end getJSON

	} //end: loadItems

	function itemsLoaded(carousel, state){ 	} //end: itemsLoaded
			
	// Item html creation helper.
	function getItemHTML(item){ return '<img src="' + item.url + '" width="105" height="85" alt="' + item.title + '" />'; } 

	/*
	 * initialization
	 */
	var $carousel;
	var carousel_data;
		
	$carousel = $('#carousel').jcarousel({
					itemLoadCallback: {
						onBeforeAnimation: loadItems,
						onAfterAnimation: itemsLoaded }
					, scroll:7
					, animation: 1500
					, start: carousel_start_item
				});

	$('#carousel li').live("click", function(e){

		var $itemClicked = $(e.target).parent()
		var itemClicked_index =  $itemClicked.attr('jcarouselindex');

		if ( itemClicked_index ) { 	
			carousel_data=$carousel.data('jcarousel');
				$('#mask').css({'z-index':'100'}).animate({opacity:1}, 800, function(){ 
					window.open(gallery_name + ".php?s=" + carousel_data.first + "&item=" + itemClicked_index, "_self" );
				});
	 	}//end if
	 	
		/* $('li.thumb-selected').animate({opacity:1}, 600); // animate: fade in previous selected */
		$('li.thumb-selected').removeClass('thumb-selected'); // remove previous class=thumb-selected
		$itemClicked.addClass('thumb-selected');  // add class=thumb-selected to selected 
		/* $('li.thumb-selected').animate({opacity:.3}, 600);	// animate: fade out selected	*/
			
	}); //end $('#carousel li').live

	$('#carousel li').live("hover" ,function(e){
		$(this).css('cursor','pointer');
	});

}// End: o6_gallery




