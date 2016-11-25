$(document).ready(function(){
	$('#myslides').after('<div id="nav">').cycle({
		fx: 'fade',
		speed:    1000, 
		timeout:  6000,
		delay:  -2000,
		cleartype: true, 
		cleartypeNoBg: true,
		pause:  1,
		pager:  '#nav',
		pagerAnchorBuilder: function(idx, slide) { 
	        return '<a href="#"></a>'; 
	    }
		
	});
});