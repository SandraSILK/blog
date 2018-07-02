(function($){
    $('.js-remove').on('click', function(){
        $(this).siblings('.js-alert').show();
    })

    $('.js-no').on('click', function(){
        $('.js-alert').hide();
    })
})(jQuery)