<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hulq_Blog
 */

?>

</div><!-- #content -->

<footer id="colophon" role="contentinfo">
    <div class="container-inner">
        <div class="newsletter-signup newsletter-footer">
            <?php echo do_shortcode('[contact-form-7 id="26" title="Signup"]'); ?>
        </div>
    </div>
    <div class="site-footer">
        <div class="container-inner">
            <div class="footer-copy">
                &copy; Hulq 2017
            </div>
            <div class="footer-social">
                <span>Stay connected</span>
                <a href="https://www.facebook.com/hulqlease/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="Facebook"></a>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleplus.svg" alt="Google+"></a>
                <a href="https://twitter.com/Hulqlease"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="Twitter"></a>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
