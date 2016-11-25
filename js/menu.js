//MENU SCRIPT
function centermenu(){
	jQuery("#navigation ul li").mouseover(function() {
		var the_width = jQuery(this).find("a").width();
		var child_width = jQuery(this).find("ul").width();
		var width = parseInt((child_width - the_width)/2);
		jQuery(this).find("ul").css('left', -width);
	
	});
}
$(document).ready(function(){
	centermenu();
});



function mainmenu(){
$(" #navigation ul ul ").css({display: "none"}); // Opera Fix
$(" #navigation li").hover(function(){
	jQuery('ul li:first-child', this).before(
		'<li class="arrow">arrow</li>'
	);
	jQuery('ul li.arrow', this).css('border-bottom', '0');
		$(this).find('ul:first').css({visibility: "visible",display: "none"}).stop('true', 'true').slideDown(200);
		},function(){
		$(this).find('ul:first').slideUp("fast");
		});
}

 $(document).ready(function(){
	mainmenu();
});