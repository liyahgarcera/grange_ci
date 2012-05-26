// JavaScript Document
// this hooks up the nivi slider to the website
// vissit "http://nivo.dev7studios.com/" for mor information

$(window).load(function() {
		var total = $('#slider img').length;
		var rand = Math.floor(Math.random()*total);
    $('#slider').nivoSlider({
			borderRadius: 8, //round corner for the slideshow
			startSlide:rand //random initial image
		});
});