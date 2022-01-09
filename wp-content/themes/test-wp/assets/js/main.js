document.addEventListener('DOMContentLoaded', function(){
    // single element
    // if((e = document.querySelector("#mobile-menu-main")) !== null)
        // e.classList.remove('active'); // Аналог выборки и присвоения класса
        // e.onclick( function () {

        // });
    // many elements
    Array.prototype.forEach.call(document.querySelectorAll("#form_error_message_frontend + div > div:last-child label"), function(e){
        e.classList.add('last');
    });

    let mobile_menu_close_toggler = document.querySelector("#mobile_menu_close_toggler");
    let mobile_menu_main = document.querySelector("#mobile-menu-main");

    mobile_menu_close_toggler.addEventListener( 'click', function () {
        mobile_menu_main.classList.remove('active');
    });

});


