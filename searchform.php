<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="input-wrapper"><input type="search" class="search-field"
                                           placeholder="<?php echo esc_attr_x( 'Search something', 'placeholder' ) ?>"
                                           value="<?php echo get_search_query() ?>" name="s"
                                           title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /></span>
        <span class="search-toggle"><span>Search</span> <i></i></span>
        <span class="search-close">&times;</span>
    </label>
    <input type="hidden" name="post_type" value="locations" />
    <input type="submit" class="search-submit" value="" />
</form>
