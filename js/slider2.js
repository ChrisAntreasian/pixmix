$(document).ready(function() {
	$(" ul#slides").css({visibility: "hidden"}); // Opera Fix
	var interval;
	$('ul#slides')
		.roundabout({
			reflect: true,
			tilt: 2.5,
			duration: 1000,
			minOpacity: 0.9,
			maxOpacity: 1.0,
			minScale: 0.2,
			maxScale: 1.0,
			minZ: 1,
			maxZ: 1000,
			easing: 'easeOutBack'
		})
		//This is a pause on hover if you dont want the pause delete this code
		.hover(
			function() {
				clearInterval(interval);
			},
			function() {
				interval = startAutoPlay();
			}
		);
		//End of Pause on hover
	interval = startAutoPlay();
});

function startAutoPlay() {
	$(" ul#slides").css({visibility: "visible"});
	return setInterval(function() {
		$('ul#slides').roundabout_animateToNextChild();
	}, 6000);
}