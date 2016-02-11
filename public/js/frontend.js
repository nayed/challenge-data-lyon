$(document).ready(function(){

    $('.days__item').on('click', function(){
        if($(this).attr('data-checked') == 'true'){
            $(this).attr('data-checked', 'false');
        } else {
            $(this).attr('data-checked', 'true');
        }
    });


    // focus input

    $('.search__input').on('focusin', function(){
        $('.search__button').fadeIn();
    });

    $('.search__input').on('focusout', function(){
        $('.search__button').fadeOut();
    });


    // close button in search input

    $('.search__button').on('click', function(){
        $('.search__input').val('');
    })

    // on enter key

    $('.search__input').keypress(function(e){
        if(e.which == 13){
            $(this).blur();
        }
    });

    // ajax request for autocompletion
    $.ajax({
        url : '/autocomplete/town',
        type : 'GET',
        cache: false,
        dataType : 'json',
        success: function(data) {
            console.log(data);
            var availableTags = data;
            $('.search__input').autocomplete({
                minLength : 0,
                source : availableTags
            });
        },
        error: function(data) {
            console.log("error");
        },
    });

    // popup

    $('.popup__close').on('click', function(){
        $('.popup').css('display', 'none');
    })


});