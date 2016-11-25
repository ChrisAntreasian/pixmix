$(document).ready(function(){

	$('#thumbs ul li a').hover(
		function() {
			var currentBigImage = $('#bigpic img').attr('src');
			var newBigImage = $(this).attr('href');
			var currentThumbSrc = $(this).attr('rel');
			switchImage(newBigImage, currentBigImage, currentThumbSrc);
		},
		function() {}
	);
	
	function switchImage(imageHref, currentBigImage, currentThumbSrc) {
		 
		var theBigImage = $('#bigpic img');
		
		if (imageHref != currentBigImage) {
		
			theBigImage.fadeOut(250, function(){
				theBigImage.attr('src', imageHref).fadeIn(250);
				
				var newImageDesc = $("#thumbs ul li a img[src='"+currentThumbSrc+"']").attr('alt');
				$('p#desc').empty().html(newImageDesc);
			});		
		}	
	}
	
	$('#thumbs2 ul li a').hover(
		function() {
			var currentBigImage = $('#bigpic2 img').attr('src');
			var newBigImage = $(this).attr('href');
			var currentThumbSrc = $(this).attr('rel');
			switchImage(newBigImage, currentBigImage, currentThumbSrc);
		},
		function() {}
	);
	
	function switchImage(imageHref, currentBigImage, currentThumbSrc) {
		 
		var theBigImage = $('#bigpic2 img');
		
		if (imageHref != currentBigImage) {
		
			theBigImage.fadeOut(250, function(){
				theBigImage.attr('src', imageHref).fadeIn(250);
				
				var newImageDesc = $("#thumbs2 ul li a img[src='"+currentThumbSrc+"']").attr('alt');
				$('p#desc').empty().html(newImageDesc);
			});		
		}	
	}
	
});
