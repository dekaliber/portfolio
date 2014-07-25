$(document).ready(function() {

	$('.sslink:last-child').css({margin: "0"});
	$('.imglink:last-child').css({margin: "0"});

	$('.morelink').eq(0).click(function(event) {
		event.preventDefault();
		$('.moreinfo').fadeOut(200,'swing');
		$(this).fadeOut(200,'swing', function() {
			$('.morelink').eq(1).fadeIn(200,'swing');
			$(this).parentsUntil('article').children('.moreinfo').fadeToggle(400, 'swing');
		});
	});

	$('.morelink').eq(1).click(function(event) {
		event.preventDefault();
		var currpos = $(document).scrollTop();
		if ($('.moreinfo').eq(0).is(':visible')) {
			var height = $('.moreinfo').eq(0).height()-40;
			// alert(height);
			// alert($('.morelink').eq(0).height());
			currpos = currpos-height;
		}
		$('.moreinfo').fadeOut(200,'swing');
		$(this).fadeOut(200,'swing', function() {
			$('.morelink').eq(0).fadeIn(200,'swing');
			$(document).scrollTop(currpos);
			$(this).parentsUntil('article').children('.moreinfo').fadeToggle(400, 'swing');
		});
	});
});