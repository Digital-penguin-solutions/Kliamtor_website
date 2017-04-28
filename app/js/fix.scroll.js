
$(document).ready(function() 
{
	update_fixed_elements();
	
	// each time the page is resized, the height of the fixed elements will be updated
	$( window ).resize(function() {
		update_fixed_elements();
	});
	
	
	$(document).on("scroll",function() 
	{
		
		var body_width = $("#pagea1").width();
		
		// checks if user uses a desktop JF
		if(body_width > 992){
			//	console.log("kör");
			//	console.log($(document).scrollTop());
			
			jQuery.each($(".fix-to-parent"), function( i, val ) 
			{
				var element  = $(this);
				var element_height = element.height();
				var element_width = element.width();
				var element_x_offset = element.offset().left;
				
				var parent = element.parent();
				parent_height = parent.height();
				var y_offset = parent.offset().top;
				
				var dist_scrolled = $(document).scrollTop();
				
				
				
				
				if(dist_scrolled > y_offset && dist_scrolled < (y_offset + parent_height)){
					
					element.css("position", "fixed");	
					
					
					if(dist_scrolled > (y_offset+ parent_height -element_height)) {
						var top = (parent_height + y_offset) - dist_scrolled;
						//element.css("top", top + "px");
					}
					
				}
				else
				{
					element.css("position", "static");
				}
			});
		}
	});
});


function update_fixed_elements(){
	
	/*	var body_width = $("body").width();*/
	var body_width = $("#pagea1").width();
	
	// checks if user uses a desktop JF
	if(body_width > 992) {
		jQuery.each($(".fix-to-parent"), function( i, val ) 
		{
			var window_height = $(window).height();
			$(this).css("height", window_height + "px");
			
			
			var element  = $(this);
			var element_height = element.height();
			var element_width = element.width();
			var element_x_offset = element.offset().left;
			var parent = element.parent();
			
			var scroll_element = parent.find(".keep-scroll");
			var scroll_element_x_offset =  scroll_element.offset().left;
			
			//element.css("height", element_height +"px");
			element.css("top", 0);
			//element.css("left", element_x_offset + "px");
			
			
		});
		
		// Fixes all the elements with this class to 50% of the section, this is nesseasry for the texts that are to the right of the images cause when the image gets position fixed, the texts would stick to the left of the screen instead of staying on their original position
		jQuery.each($(".fix-half-width"), function( i, val ) 
		{
			var element  = $(this);	
			
			var parent = element.parent();
			var parent_width = parent.width();
			
			var half_width = parent_width / 2;
			
			element.css("position", "absolute");
			element.css("left", half_width + "px");
			
		});
	}
}
