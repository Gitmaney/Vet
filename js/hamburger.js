(function () {
    function toggleMenu() {
        $('.mlx-bar').toggleClass('mlx-animate');
        $('.mlx-navbar-hamburger-menu').toggleClass('mlx-navbar-hamburger-menu-active');
        $('mlx-body').toggleClass('mlx-overflowHidden');
    }

    $('.mlx-hamburger-menu').on('click', function () {
        toggleMenu();
    });
    $('.mlx-hamburger-link').on('click', function () {
        toggleMenu();
    });
})();


