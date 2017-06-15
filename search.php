<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Hulq_Blog
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            if (have_posts()) : ?>

            <header class="page-header">
                <div class="container-inner">
                    <h1 class="page-title"><?php printf(esc_html__('Search Results: %s', 'hulq_blog'), '<span>' . get_search_query() . '</span>'); ?></h1>
                </div>
            </header><!-- .page-header -->

            <div class="container-inner post-tiles-container post-tiles-container--archive">

                <?php
                /* Start the Loop */
                while (have_posts()) : the_post(); ?>

                    <div class="post-single post-single--tiled">
                        <div class="post-image">
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        </div>
                        <div class="post-info">
                            <?php $category = get_the_category(); ?>
                            <a href="<?php echo get_category_link(get_cat_ID($category[0]->cat_name)); ?>">
                                <span class="post-category"><?php echo $category[0]->cat_name; ?></span>
                            </a>
                            <a href="<?php the_permalink(); ?>"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></a>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-further">Read further &xrarr;</a>
                        </div>
                    </div>

                <?php endwhile;

                else : ?>

                    <header class="page-header">
                        <div class="container-inner">
                            <h1 class="page-title">Nothing Found</h1>
                        </div>
                    </header><!-- .page-header -->

                <?php endif; ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
