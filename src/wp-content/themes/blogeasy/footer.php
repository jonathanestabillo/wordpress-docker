<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blogeasy
 */

?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer row">
			<div class="site-info text-center col-md-12">
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'blogeasy' ) ); ?>">
					<?php
					/* translators: %s: CMS name, i.e. WordPress. */
					printf( esc_html__( 'Proudly powered by %s', 'blogeasy' ), 'WordPress' );
					?>
				</a>
				<span class="sep"> | </span>
					<?php
					/* translators: 1: Theme name, 2: Theme author. */
					printf( esc_html__( 'Theme: %1$s by %2$s.', 'blogeasy' ), 'blogeasy', '<a href="https://wp-themespoint.com/">ThemesPoint</a>' );
					?>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #box-container -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
