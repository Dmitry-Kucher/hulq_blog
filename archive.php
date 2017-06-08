<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Hulq_Blog
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            if (have_posts()) : ?>

                <header class="page-header">
                    <div class="container-inner">
                        <?php $tags = get_the_tag_list('', ', '); ?>
                        <h1>Posts Tagged: <span><?php echo $tags; ?></span></h1>
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

            else :

                get_template_part('template-parts/content', 'none'); ?>


                </div>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
