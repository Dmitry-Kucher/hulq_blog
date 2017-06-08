<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Hulq_Blog
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php while (have_posts()) : the_post(); ?>

                <div class="container">
                    <div class="post-image extend">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="container-inner">
                        <div class="post-content">
                            <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            <span class="post-time"><?php echo get_post_time('l j F Y'); ?></span>
                            <?php the_content(); ?>
                            <?php the_tags('', ''); ?>
                        </div>

                        <div class="newsletter-signup">
                            <?php echo do_shortcode('[contact-form-7 id="26" title="Signup"]'); ?>
                        </div>

                        <?php
                        //for use in the loop, list 5 post titles related to first tag on current post
                        $tags = wp_get_post_tags($post->ID);
                        if ($tags) { ?>
                            <div class="related-posts">
                                <?php $first_tag = $tags[0]->term_id;
                                $args = array(
                                    'tag__in' => array($first_tag),
                                    'post__not_in' => array($post->ID),
                                    'posts_per_page' => 3,
                                    'caller_get_posts' => 1
                                );
                                $my_query = new WP_Query($args);
                                if ($my_query->have_posts()) {
                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>
                                        <div class="post-single post-single--tiled">
                                            <div class="post-image">
                                                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                            </div>
                                            <div class="post-info">
                                                <?php $category = get_the_category(); ?>
                                                <span class="post-category"><?php echo $category[0]->cat_name; ?></span>
                                                <a href="<?php the_permalink(); ?>"><?php the_title('<h1 class="entry-title">', '</h1>'); ?></a>
                                                <p><?php the_excerpt(); ?></p>
                                                <a href="<?php the_permalink(); ?>" class="read-further">Read further &xrarr;</a>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                } ?>

                            </div>
                            <?php wp_reset_query();
                        }
                        ?>
                    </div>

                    <?php
                    $next_post = get_next_post();
                    if (!empty($next_post)): ?>
                        <div class="up-next">
                            <a href="<?php echo get_permalink($next_post->ID); ?>">
                                <div class="container-inner">
                                    <span class="up-next__title">Up Next:</span>
                                    <h2><?php echo $next_post->post_title; ?></h2>
                                </div>
                                <div class="up-next__overlay"></div>
                                <?php echo get_the_post_thumbnail($next_post->ID, 'full'); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>

            <?php endwhile; // end of the loop. ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
