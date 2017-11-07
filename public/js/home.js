$(document).ready(function () {

    //header
    $(window).on('popstate', function(event) {
        if (window.location.hash.substr(1) == 'cart')
        {
            $('#modal-cart').css('display', 'block');
        }else
        {
            $('#modal-cart').css('display', 'none');
        }
    });

    if (window.location.hash.substr(1) == 'cart')
    {
        $('#modal-cart').css('display', 'block');
    }else
    {
        $('#modal-cart').css('display', 'none');''
    }

    $('#nav-cart').on('click', function () {
        history.pushState('', '', '#cart');
        $('#modal-cart').css('display', 'block');
    });

    $('.button-close').on('click', function () {
        history.pushState("", document.title, window.location.pathname);
        $('#modal-cart').css('display', 'none');
    });

    $('.overlay').on('click', function () {
        history.pushState("", document.title, window.location.pathname);
        $('#modal-cart').css('display', 'none');
    });
});