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

    function newsletterOnSubmit(e) {
        e.preventDefault();

        var form = $(this).closest('.wpcf7-form');

        if (!form.hasClass('active')) {
            form.addClass('active')
        } else {
            form.submit();
        }
    }

    $('#primary-menu').children('li').first().children('a').on('click', toggleCategories);

    $('.search-toggle').on('click', searchToggle);

    $('.search-close').on('click', searchClose);

    $('.wpcf7-form').find('.wpcf7-submit').add('.newsletter-text-to-hide').on('click', newsletterOnSubmit);
})(jQuery);
