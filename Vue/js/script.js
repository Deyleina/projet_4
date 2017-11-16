$(document).ready(function() {
	$('.btn-navigation').click(function(){
		$(this).find('.barre').toggleClass('blanc');
		$('.navigation').toggleClass('isOpen');
	})
});