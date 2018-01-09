$(document).ready(function() {
	$('.btn-navigation').click(function(){
		$(this).find('.barre').toggleClass('blanc');
		$('.navbar-inverse').toggleClass('isOpen');
	});

	$('.imageAffiche').click(function() {
		$('.imageCache').show('slow');
		$('.imageAffiche').hide('slow');
	});

	$('.imageCache').click(function() {
		$('.imageAffiche').show('slow');
		$('.imageCache').hide('slow');
	});

	/* Partie slider */

	var $slider = $('.bloc-slider'), // ciblage du bloc slider
		$imagesSlider = $('.bloc-slider img'), // ciblage des images contenues dans le slider
		index = $imagesSlider.length - 1, // index du premier élément
		i = 0, // initialisation du compteur
		$imageCourante = $imagesSlider.eq(i); // ciblage image courante, qui possède l'index i

	function slider() {
		setTimeout(function() {
			if (i < index) {
				i++;
			} else {
				i = 0;
			}

			$imagesSlider.fadeOut(2000, 'swing');
			$imageCourante = $imagesSlider.eq(i);
			$imageCourante.fadeIn(1000, 'linear');
			slider();
		}, 5000);
	}

	slider();

	$('.deconnexion').on('click', function() {
		messageDeco();
	});

	function messageDeco() {
		setTimeout(function() {
			alert('Vous vous êtes déconnecté. A bientôt !');
		}, 3000);
	};
});