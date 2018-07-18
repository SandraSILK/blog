(function($) {
    $(document).ready(function() {
        const gallery = $('.js-gallery');
        const img = $('.js-img');

        img.on('click', function() {
            $(this).addClass('js-active');
            $('.js-body-gallery').addClass('js-active-body');
            $('.js-body-gallery').removeClass('d-none');
            $(document.body).css('overflow-y', 'hidden');
        });

        $('#js-close').on('click', function() {
            img.removeClass('js-active');
            $('.js-body-gallery').removeClass('js-active-body');
            $('.js-body-gallery').addClass('d-none');
            $(document.body).css('overflow-y', 'auto');
        });

        $('#js-next').on('click', function() {
            if (gallery.find('.js-active').is(':last-child')) {
                $('.js-active').removeClass('js-active');
                $('.js-gallery').find('.js-img').first().addClass('js-active');
            } else {
                const active =  $('.js-gallery').find('.js-active');
                const next = active.nextAll('.js-img').first();
               
                active.removeClass('js-active');
                next.addClass('js-active');
            };
        })

        $('#js-prev').on('click', function() {
            if (gallery.find('.js-active').is(':nth-child(2)')) {
                $('.js-active').removeClass('js-active');
                $('.js-gallery').find('.js-img').last().addClass('js-active');
            } else {
                const active =  $('.js-gallery').find('.js-active');
                const prev = active.prevAll('.js-img').first();

                active.removeClass('js-active');
                prev.addClass('js-active');
            };
        })
    });
})(jQuery)
