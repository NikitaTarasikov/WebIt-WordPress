function testWebP(callback) {

	var webP = new Image();
	webP.onload = webP.onerror = function () {
		callback(webP.height == 2);
	};
	webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {

	if (support == true) {
		document.querySelector('body').classList.add('webp');
	} else {
		document.querySelector('body').classList.add('no-webp');
	}
});
$(document).ready(function () {

	$('.button[filter]').click(function () {
		//	$(this).addClass('portfolio__btn-item--active');
		if ($(this).attr('filter') == 'all') {
			if ($(this).attr('val') == 'off') {
				$('.button[filter]').attr('val', 'off');
				$(this).addClass('focused');
				$('.filter > div').show(300);
			}
		} else {
			if ($(this).attr('val') == 'off') {
				$('.button[filter]').attr('val', 'off');
				$(this).attr('val', 'on');
				$('.button[filter]').removeClass('focused');
				$('.filter > div').hide(300);
				var filter = $(this).attr('filter');
				$('.filter > div[filter=' + filter + ']').show(300);
			}
		}
		if ($('.work__buttons-item').hasClass('focused')) {
			//	$('.portfolio__btn-item').removeClass('portfolio__btn-item--active');
			$(this).addClass('work__buttons-item--active');
		} else {
			$('.work__buttons-item').removeClass('work__buttons-item--active');
		}

		if ($('.work__buttons-item').attr('val', 'off')) {
			$('.work__buttons-item').removeClass('work__buttons-item--active');
			$(this).addClass('work__buttons-item--active');
		} else {
			$('.work__buttons-item').removeClass('work__buttons-item--active');
		}
	});
});


$('.multiple-items').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3,
	arrows: false,
	dots: true,
	dotsClass: 'dots-style',
	responsive: [
		{
			breakpoint: 1210,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
		{
			breakpoint: 993,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		}
	]
});

$('.header__burger').click(function (event) {
	$('.header__burger,.header__menu').toggleClass('active');
	$('body').toggleClass('lock');
});
$('.header__item').on('click', function () {
	$('.header__burger,.header__menu').removeClass('active');
	$('body').removeClass('lock');
});

function slowScroll(id) {
	var offset = 0;
	$('html, body').animate({
		scrollTop: $(id).offset().top - offset
	}, 900);
	return false;
}