(function($) {
	$(document).ready(function() {

		const gallery = $('.js-gallery');
		const img = $('.js-img');

		img.on('click', function() {
			$(this).addClass('js-active');
			$('.js-body-gallery').addClass('js-active-body');
			$(document.body).css('overflow-y', 'hidden');
		});

		$('#js-close').on('click', function() {
			img.removeClass('js-active');
			$('.js-body-gallery').removeClass('js-active-body');
			$(document.body).css('overflow-y', 'auto');
		});

		$('#js-next').on('click', function() {
			if (gallery.find('.js-active').is(':last-child')) {
				gallery.find(':last-child').removeClass('js-active');
				gallery.find(':first-child').addClass('js-active');
			} else {
				const that = gallery.find('.js-active');
				that.next().addClass('js-active');
				that.removeClass('js-active');
			};
		})

		$('#js-prev').on('click', function() {
			if (gallery.find('.js-active').is(':first-child')) {
				gallery.find(':first-child').removeClass('js-active');
				gallery.find(':last-child').addClass('js-active');
			} else {
				const that = gallery.find('.js-active');
				that.prev().addClass('js-active');
				that.removeClass('js-active');
			};
		})
	});
})(jQuery)