(function mainModule($) {
    function toggleCategories(e) {
        e.preventDefault();
        $('.tags-container').toggleClass('toggled');
    }

    function searchToggle() {
        $('.site-header__right').toggleClass('search-toggled');
    }

    function searchClose() {
        $('.site-header__right').removeClass('search-toggled');
        $('.search-field').val('');
    }

    $('#primary-menu').children('li').first().children('a').on('click', toggleCategories);

    $('.search-toggle').on('click', searchToggle);

    $('.search-close').on('click', searchClose);
})(jQuery);
