//Portfolio Hover
$(document).ready(function(){
	//Set opacity on each span to 0%
    $(".hoverimage").css({'opacity':'0'});
	$('.fade a').hover(
		function() {
			$(this).find('.hoverimage').stop().fadeTo(400, 0.6);
		},
		function() {
			$(this).find('.hoverimage').stop().fadeTo(300, 0);
		}
	)
});
$(document).ready(function(){
	//Set opacity on each span to 0%
    $(".hovervideo").css({'opacity':'0'});
	$('.fade a').hover(
		function() {
			$(this).find('.hovervideo').stop().fadeTo(400, 0.6);
		},
		function() {
			$(this).find('.hovervideo').stop().fadeTo(300, 0);
		}
	)
});
$(document).ready(function(){
	//Set opacity on each span to 0%
    $(".hoverimagebig").css({'opacity':'0'});
	$('.fade a').hover(
		function() {
			$(this).find('.hoverimagebig').stop().fadeTo(400, 0.6);
		},
		function() {
			$(this).find('.hoverimagebig').stop().fadeTo(300, 0);
		}
	)
});
$(document).ready(function(){
	//Set opacity on each span to 0%
    $(".hovervideobig").css({'opacity':'0'});
	$('.fade a').hover(
		function() {
			$(this).find('.hovervideobig').stop().fadeTo(400, 0.6);
		},
		function() {
			$(this).find('.hovervideobig').stop().fadeTo(300, 0);
		}
	)
});



//CUFON
Cufon.replace('a.entry-title', { hover: true });
Cufon('a.entry-title', { color: '#494b4b', hover: {	color: '#000' }	});

Cufon.replace('.product-description h2, span.subtitle', { fontFamily: 'Aller' });
Cufon.replace('h2, h3, #sidebar h4, .contact-nav', { fontFamily: 'Aller' });

//FADE
$(function() {
$(".fadeimg").css("opacity","0.8");
$(".fadeimg").hover(function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
},

function () {
$(this).stop().animate({
opacity: 0.8
}, "slow");
});
});

//FADE Blog 1
$(function() {
$(".post-image img").css("opacity","1.0");
$(".post-image img").hover(function () {
$(this).stop().animate({
opacity: 0.9
}, "slow");
},

function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

//FADE Blog 2
$(function() {
$(".post-thumb-image img").css("opacity","1.0");
$(".post-thumb-image img").hover(function () {
$(this).stop().animate({
opacity: 0.8
}, "slow");
},

function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

//FADE Services 3
$(function() {
$(".serviceimg img").css("opacity","1.0");
$(".serviceimg img").hover(function () {
$(this).stop().animate({
opacity: 0.9
}, "slow");
},

function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

//FADE recent works home
$(function() {
$("img.fadethis").css("opacity","1.0");
$("img.fadethis").hover(function () {
$(this).stop().animate({
opacity: 0.7
}, "slow");
},

function () {
$(this).stop().animate({
opacity: 1.0
}, "slow");
});
});

