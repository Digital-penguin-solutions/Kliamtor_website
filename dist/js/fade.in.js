$(document).ready(function(){"use strict";jQuery.fx.interval=100;$("body").width()>992&&($(".fade-in").appear(),$(".fade-in").addClass("has-not-faded"),$(".fade-in").css("opacity","0"),$(".fade-in").css("position","relative"),$(".fade-in").css("top","20px"),$("body").on("appear",".fade-in",function(a,e){var s=$(this);if($(this).hasClass("has-not-faded")){var t=0;$(this).hasClass("fade-delay-05")?t=250:$(this).hasClass("fade-delay-1")?t=500:$(this).hasClass("fade-delay-2")?t=1e3:$(this).hasClass("fade-delay-3")?t=1500:$(this).hasClass("fade-delay-4")&&(t=2e3),setTimeout(function(){s.removeClass("has-not-faded"),s.animate({opacity:"1"},{duration:1e3,queue:!1}),s.animate({top:"0px"},{duration:500,queue:!1})},t)}}),$.force_appear(),setTimeout(function(){$.force_appear()},100))});