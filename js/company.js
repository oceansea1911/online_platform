$(document).ready(function(){
	$('#collect-c').click(function(){
		if ($(this).hasClass('glyphicon-heart-empty')) {
			$(this).removeClass('glyphicon-heart-empty').addClass('glyphicon-heart');
		}
		else{
			$(this).removeClass('glyphicon-heart').addClass('glyphicon-heart-empty');
		}
	});
	$('.job-name').click(function(e){
		$(this).siblings().toggleClass('hidden');
	});
});
