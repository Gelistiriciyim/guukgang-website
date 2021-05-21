    $(function () {
        // mobile menu
        $('.mobile_nav').click(function (e) {
            e.preventDefault();
            $(this).toggleClass('mobile_nav-active');
            $('.nav_menu').toggleClass('nav_menu-active');
        });
    });

    