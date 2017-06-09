(function mainModule($) {
    function toggleCategories(e) {
        e.preventDefault();
        $('.tags-container').toggleClass('toggled');
    }

    function searchToggle() {
        var rightHeader = $('.site-header__right');

        if (!rightHeader.hasClass('search-toggled') && $(document).width() < 680) {
            $('.mobile-menu__toggle').hide();
        }

        rightHeader.toggleClass('search-toggled');
    }

    function searchClose() {
        if ($(document).width() < 680) {
            $('.mobile-menu__toggle').show();
        }

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

    function toggleMobileMenu() {
        $('body').toggleClass('menu-open');
    }

    function showMobileTags(e) {
        e.preventDefault();

        $('body').addClass('mobile-tags-show');
    }

    function hideMobileTags() {
        $('body').removeClass('mobile-tags-show');
    }

    $('#primary-menu').children('li').first().children('a').on('click', toggleCategories);

    $('.search-toggle').on('click', searchToggle);

    $('.search-close').on('click', searchClose);

    $('.wpcf7-form').find('.wpcf7-submit').add('.newsletter-text-to-hide').on('click', newsletterOnSubmit);

    $('.mobile-menu__toggle').on('click', toggleMobileMenu);

    $('.mobile-navigation').find('li:nth-child(2)').children('a').on('click', showMobileTags);

    $('.tags-mobile-close').add('.tags-mobile-back').on('click', hideMobileTags);
})(jQuery);
