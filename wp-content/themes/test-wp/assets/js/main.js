document.addEventListener('DOMContentLoaded', function(){

    let mobile_menu_close_toggler = document.querySelector('#mobile_menu_close_toggler');
    let mobile_menu_main = document.querySelector('#mobile-menu-main');
    let mobile_menu_parent_items = document.querySelectorAll('#mobile-menu-main .menu-item-has-children > a');

    mobile_menu_close_toggler.addEventListener( 'click', function () {
        mobile_menu_main.classList.remove('active');
    });

    mobile_menu_parent_items.forEach(function (element) {
        element.addEventListener ( 'click', function(e) {
            if (element.parentElement.classList.contains('active')) {
                element.parentElement.classList.remove('active');
            } else {
                e.preventDefault();
                e.stopPropagation();
                element.parentElement.classList.add('active');
            }
        });
    });

});


