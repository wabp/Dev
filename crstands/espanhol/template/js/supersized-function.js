jQuery(function($){
				$.supersized({
					// Functionality
					slide_interval          :   5000,		// Length between transitions
					transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
					transition_speed		:	500,		// Speed of transition									   
					// Components							
					slide_links				:	'blank',	// Individual links for each slide (Options: false, 'number', 'name', 'blank')
					slides 					:  	[			// Slideshow Images
														{image : 'template/img/banner/1-t.jpg', title : '', thumb : '', url : ''},
													
												]
				});
});    
