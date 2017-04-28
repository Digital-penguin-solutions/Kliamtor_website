//Java script klimator
$(document).ready(function() {
	"use strict";
	
	
	jQuery.fx.interval = 45; /* Ju lägre denna är desto högre kvalitet blir det på animationer men ju lägre den är desto mer tar den på CPU. - JF */
	
	init_page();
	
	var body_width = $("body").width();
	
	/* Desktop only*/
	if(body_width > 992){
		// jQuery to collapse the navbar on scroll
		$(window).scroll(function() {
			if ($(".navbar").offset().top > 50) {
				if(!$(".navbar-fixed-top").hasClass("top-nav-collapse")) {
					
					$(".navbar-fixed-top").addClass("top-nav-collapse");
					$(".nav-text").css("color", "black");
					/* Byter färg på loggan */
					$("#logo-dark").css("visibility", "visible");
					$("#logo-white").css("visibility", "hidden");
				}
			}
			else 
			{
				if($(".navbar-fixed-top").hasClass("top-nav-collapse")) 
				{		
					$(".navbar-fixed-top").removeClass("top-nav-collapse");
					$(".nav-text").css("color", "white");
					/* Byter färg på loggan */
					$("#logo-dark").css("visibility", "hidden");
					$("#logo-white").css("visibility", "visible");		
				}
			}
		});
	}
	
	
	prepare_for_fade(".chat-bubble-fade");
	
	// Gör så att när man håller på klockan så studsar den samt gör så att chat rutan kommer upp J-F
	$(".proposal-btn").mouseenter(function(){
		
		$(".proposal-btn-img").stop();
		/* Gör så klockan studsar*/
		$(".proposal-btn-img").animate({ top: -50 }, {duration: 200});	
		$(".proposal-btn-img").animate({ top: 0 }, {duration: 1000, easing: 'easeOutBounce'});
		
		fade_in_object(".chat-bubble-fade");
	});
	
	$(".proposal-btn").mouseleave(function()
	{
		fade_out_object(".chat-bubble-fade",0);
	});
	
	// Förbereder ett element så att det kan användas i funktionen fade_in_object
	function prepare_for_fade(element){
		$(element).animate({ opacity: 0 }, {duration: 0});	
		$(element).css("position","relative");
		$(element).animate({ top: 50 }, {duration: 0});	
	}
	
	/* Gör så att elementet fadas in, för att denna ska funka måste elementet först köras i prepare_for_fade() JF*/
	function fade_in_object(element, delay){		
		setTimeout(function()
		{
			$(element).stop();
			$(element).animate({ top: 0 }, {duration: 500, queue:false});	
			$(element).animate({ opacity: 1 }, {duration: 1000, queue:false});	
		}
		, delay);
		
	}
	/* Fadar ut ett  element */
	function fade_out_object(element,delay){
		setTimeout(function()
		{
			$(element).stop();
			$(element).animate({ top: 50 }, {duration: 1000, queue:false});	
			$(element).animate({ opacity: 0 }, {duration: 1000, queue:false});	
			
		}
		, delay);
	}
	
	$(".half-margin-left").each(function(index) {
		var margin = $(this).css("margin-left");
		margin = parseInt(margin.replace("px", "")); // tar bort px
		margin = margin / 2;
		$(this).css("margin-left", margin);
	});
	
	$(".half-margin-right").each(function(index) {
		var margin = $(this).css("margin-right");
		margin = parseInt(margin.replace("px", "")); // tar bort px
		margin = margin / 2;
		$(this).css("margin-right", margin);
	});
	
	function init_center_vertical(){
		/* centererar alla objekt med denna klassen verikalt j-F */
		$( ".center-vertical" ).each(function(index) 
		{
			var parent_height = $(this).parent().height();
			var element_height = $(this).height();
			var pos = parent_height / 2 - (element_height/2);
			$(this).css("margin-top", pos);
			
		});
	}
	
	function init_center_hori(){
		/* centererar alla objekt med denna klassen horizitellt j-F */
		$( ".center-hori" ).each(function(index) 
		{
			var parent_width = $(this).parent().width();
			var element_width = $(this).width();
			var pos = parent_width / 2 - (element_width/2);
			$(this).css("margin-left", pos);
			
		});
	}
	
	// jQuery for page scrolling feature - requires jQuery Easing plugin
	function bind_scroll_effect()
	{
		$(function() {
			$('a.page-scroll').bind('click', function(event) {
				var $anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
					//	}, 800, 'easeInOutExpo');				
				}, 1000, 'easeOutCubic');				
				event.preventDefault();
			});
		});
	}
	
	// Closes the Responsive Menu on Menu Item Click
	$('.navbar-collapse ul li a').click(function() {
		$('.navbar-togg le:visible').click();
	});
	
	// körs varje gång rutans storlek förändras
	$(window).resize(function(){
		init_grid();
		init_center_vertical();
		init_center_hori();
	});
	/* När man scollar på sidan */
	$(document).scroll(function() {		
		fade_out_object(".chat-bubble-fade", 0);
		//var scroll_offset = $(window).scrollTop();
	});
	
	/* initialiserar allt som behövs på sidan, detta ska köras en gång när man går in på sidan för att ladda in allt som behöver J-F */
	function init_page(){
		bind_scroll_effect();
		init_grid();
		init_center_vertical();
		load_components();
		init_center_hori();
	}
	/*
		function isScrolledIntoView(elem)
		{
		var $elem = $(elem);
		var $window = $(window);
		
		var docViewTop = $window.scrollTop();
		var docViewBottom = docViewTop + $window.height();
		
		var elemTop = $elem.offset().top;
		var elemBottom = elemTop + $elem.height();
		
		return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
	}*/
	
	function load_components(){
		//$("nav").load("nav.html");
	}
	
	
	
	/*  Initialiserar grid J-F*/
	function init_grid(){
		var body_height = $("body").height();
		var body_width = $("body").width();
		
		var width = $(window).width(); 
		
		var device = "";
		/* if mobile J-F*/
		if ((width <= 767)) {
			device = "mobile-";
		}
		// tablet J-F
		else if (width > 767 && width < 992) {
			device = "tablet-";
		}
		
		for(var i = 5; i <= 100; i = i + 5) {
			var width = body_width * (i/100);
			var height = body_height * (i/100);
			
			$("." + device + "height-" + i).css("height", height);
			$("." + device + "height-push-" + i).css("margin-top", height);
			$("." + device + "width-" + i).css("width", width);
			$("." + device + "width-push-" + i).css("margin-left", width);
			$(".all-height-" + i).css("height", height);
			$(".all-height-push-" + i).css("margin-top", height);
			$(".all-width-" + i).css("width", width);
			$(".all-width-push-" + i).css("margin-left", width);
		}
	}
	var map_cover_visible = true;
	
	//Google maps script
	function initialize() {
		var mapCanvas = document.getElementById('map');
		var mapOptions = {
			center: new google.maps.LatLng(57.69065,11.97156),
			zoom: 14,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		}
		var map = new google.maps.Map(mapCanvas, mapOptions);
		var styles =[
		{
			"featureType": "poi",
			"stylers": [
            {
                "visibility": "on"
			}
			]
		},
		{
			"stylers": [
            {
                "saturation": -70
			},
            {
                "lightness": 37
			},
            {
                "gamma": 1.15
			}
			]
		},
		{
			"elementType": "labels",
			"stylers": [
			{
				"gamma": 0.26
			},
			{
				"visibility": "on"
			}
			]
		},
		{
			"featureType": "road",
			"stylers": [
			{
				"hue": "#7b1830"
			}
			
			]
		},
		{
			"featureType": "road",
			"elementType": "labels.text.stroke",
			"stylers": [
			{
				"visibility": "on"
			}
			]
		},
		{
			"featureType": "road.local",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#7b1830"
			},
			{
				"lightness": 40
			},
			{
				"saturation": -90
			},
			{
				"visibility": "on"
			}
			]
		},
		{
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [
			{
				"color": "#7b1830"
			},
			{
				"lightness": 40
			},
			{
				"saturation": -70
			}
			]
		},
		{
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
			{
				"hue": "#7B1830"
			},
			{
				"saturation": 20
			},
			{
				"lightness": -60
			},
			{
				"gamma": 0
			}
			
			]
		},
		{
			"featureType": "administrative.province",
			"stylers": [
			{
				"visibility": "on"
			},
			{
				"lightness": -50
			}
			]
		},
		{
			"featureType": "administrative.province",
			"elementType": "labels.text.stroke",
			"stylers": [
			{
				"visibility": "on"
			}
			]
		},
		{
			"featureType": "administrative.province",
			"elementType": "labels.text",
			"stylers": [
			{
				"lightness": 20
			}
			]
		}
		];
		
		map.setOptions({styles: styles});
		
		// Creating a marker and positioning it on the map  
		var marker = new google.maps.Marker({  
			position: new google.maps.LatLng(57.69065, 11.97156),  
			map: map  
		});
		var marker = new google.maps.Marker({  
			position: new google.maps.LatLng(57.688520, 11.966624),  
			map: map  
		});
		
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	
	
	$('html').click(function(e) {                    
		
		if(map_cover_visible)
		{
			if($(e.target).is('#map-cover') || $(e.target).is('#map-cover h1')|| $(e.target).is('#map-cover h1 i'))
			{
				$("#map-cover").fadeOut();	
				map_cover_visible = false;	
			}
		}
		else 
		{
			
			if(!$(e.target).is('#map div') && !$(e.target).is("#map-cover")){
				$("#map-cover").fadeIn();	
				map_cover_visible = true;	
			}
			
			
		}
		
		
		//	console.log(e);
	}); 
	
	$('#map-cover').click(function(e) {                    
		
		
		
	}); 
	/*------------------------------------------ START FOR SHOWING AND HIDING TABLET NAV ------------------------------------------*/
	$('.open-overlay').click(function() {
		$('.open-overlay').css('pointer-events', 'none');
		var overlay_navigation = $('.overlay-navigation'),
		top_bar = $('.bar-top'),
		middle_bar = $('.bar-middle'),
		bottom_bar = $('.bar-bottom');
		
		overlay_navigation.toggleClass('overlay-active');
		if (overlay_navigation.hasClass('overlay-active')) {
			
			top_bar.removeClass('animate-out-top-bar').addClass('animate-top-bar');
			middle_bar.removeClass('animate-out-middle-bar').addClass('animate-middle-bar');
			bottom_bar.removeClass('animate-out-bottom-bar').addClass('animate-bottom-bar');
			overlay_navigation.removeClass('overlay-slide-up').addClass('overlay-slide-down')
			overlay_navigation.velocity('transition.slideLeftIn', {
				duration: 500,
				delay: 0,
				begin: function() {
					$('nav ul li').velocity('transition.perspectiveLeftIn', {
						stagger: 0,
						delay: 0,
						complete: function() {
							$('nav ul li a').velocity({
								opacity: [1, 0],
								}, {
								delay: 0,
								duration: 140
							});
							$('.open-overlay').css('pointer-events', 'auto');
						}
						})
				}
			})
			
			} else {
			$('.open-overlay').css('pointer-events', 'none');
			top_bar.removeClass('animate-top-bar').addClass('animate-out-top-bar');
			middle_bar.removeClass('animate-middle-bar').addClass('animate-out-middle-bar');
			bottom_bar.removeClass('animate-bottom-bar').addClass('animate-out-bottom-bar');
			overlay_navigation.removeClass('overlay-slide-down').addClass('overlay-slide-up')
			$('nav ul li').velocity('transition.perspectiveRightOut', {
				stagger: 0,
				delay: 0,
				complete: function() {
					overlay_navigation.velocity('transition.fadeOut', {
						delay: 0,
						duration: 300,
						complete: function() {
							$('nav ul li a').velocity({
								opacity: [0, 1],
								}, {
								delay: 0,
								duration: 50
							});
							$('.open-overlay').css('pointer-events', 'auto');
						}
					});
				}
			})
		}
	})
	/*------------------------------------------------ END OF NAV TABLET CODE ----------------------------------------------------------*/
	
});	
