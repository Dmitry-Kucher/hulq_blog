<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hulq_Blog
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">
        <div class="container">
            <div class="site-branding">
                <h1 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                        Hulq
                        <span class="site-title__feed">Feed</span>
                    </a>
                </h1>
            </div><!-- .site-branding -->

            <div class="site-header__right">
                <span class="mobile-menu__toggle"></span>

                <nav id="site-navigation" class="main-navigation" role="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'primary-menu')); ?>
                </nav><!-- #site-navigation -->

                <div class="header-search">
                    <?php get_search_form(); ?>
                </div><!-- .header-search -->
            </div>
        </div>
        <div class="tags-container">
            <div class="container-inner">
                <ul>
                    <?php $tags = get_tags();
                    foreach ($tags as $tag) {
                        $tag_link = get_tag_link($tag->term_id); ?>
                        <li><a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </header><!-- #masthead -->

    <div class="mobile-menu-screen">
        <nav id="mobile-navigation" class="mobile-navigation" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'menu-1', 'menu_id' => 'mobile-menu')); ?>
        </nav><!-- #site-navigation -->
        <div class="tags-container-mobile">
            <span class="tags-mobile-close">&times;</span>
            <span class="tags-mobile-back"></span>
            <h3>Categories</h3>
            <ul>
                <?php $tags = get_tags();
                foreach ($tags as $tag) {
                    $tag_link = get_tag_link($tag->term_id); ?>
                    <li><a href="<?php echo $tag_link; ?>"><?php echo $tag->name; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <div id="content" class="site-content">
