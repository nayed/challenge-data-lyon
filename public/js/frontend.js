$(document).ready(function(){
    $('.search__input').on("focusin", function(){
        $('.search__button--close').fadeIn();
        $('.search__list').css('display', 'block');
    });
    $('.search__input').on("focusout", function(){
        $('.search__button--close').fadeOut();
        $('.search__list').css('display', 'none');
    });
    $('.days__item').on('click', function(){
        if($(this).attr('data-checked') == 'true'){
            $(this).attr('data-checked', 'false');
        } else {
            $(this).attr('data-checked', 'true');
        }
    })
});