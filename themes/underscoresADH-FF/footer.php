<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package geekpack
 */

?>

			</div><!-- #content -->
	    </div><!-- .main-content -->
	<div class="footer-section full">
		<div class="wrap">
        <section id="front-page-1" class="widget-area">
				<?php dynamic_sidebar( 'front-page-1' ); ?>
			</section><!-- #front-page-1 -->
            <footer id="colophon" class="site-footer inner">
                <!--<div class="site-info">
                    <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'geekpack' ) ); ?>">
                        <?php
                        /* translators: %s: CMS name, i.e. WordPress. */
                        printf( esc_html__( 'Proudly powered by %s', 'geekpack' ), 'WordPress' );
                        ?>
                    </a>
                    <span class="sep"> | </span>
                        <?php
                        /* translators: 1: Theme name, 2: Theme author. */
                        printf( esc_html__( 'Theme: %1$s by %2$s.', 'geekpack' ), 'geekpack', '<a href="https://www.geekpack.co">WP Rockstar</a>' );
                        ?>
                </div>.site-info -->
            </footer><!-- #colophon -->
		</div><!-- .wrap -->
	</div><!-- .footer-section -->

<?php wp_footer(); ?>

</body>
</html>
