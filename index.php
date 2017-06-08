<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hulq_Blog
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container">
                <?php
                $the_query = new WP_Query(array(
                    'posts_per_page' => 4
                ));
                ?>

                <?php if ($the_query->have_posts()) :

                    /* Start the Loop */
                    while ($the_query->have_posts()) : $the_query->the_post(); ?>

                        <div class="post-single post-single--large">
                            <div class="container-inner">
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
                        </div>

                    <?php endwhile;
                    wp_reset_postdata();
                endif; ?>


                <?php
                $the_query = new WP_Query(array(
                    'posts_per_page' => 12,
                    'offset' => 4
                ));
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <div class="container-inner post-tiles-container">

                        <h3 class="mobile-title">
                            Most Read
                        </h3>

                        <div class="posts-section">

                            <?php
                            /* Start the Loop */
                            while ($the_query->have_posts()) : $the_query->the_post(); ?>

                                <div class="post-single post-single--tiled">
                                    <div class="post-image">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                    <div class="post-info">
                                        <?php $category = get_the_category(); ?>
                                        <span class="post-category"><?php echo $category[0]->cat_name; ?></span>
                                        <a href="<?php the_permalink(); ?>"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></a>
                                        <p><?php the_excerpt(); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="read-further">Read further
                                            &xrarr;</a>
                                    </div>
                                </div>
                            <?php endwhile;
                            wp_reset_postdata(); ?>

                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
