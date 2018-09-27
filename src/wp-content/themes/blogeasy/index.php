<?php
/**
 * The main template file
 */

get_header();
?>

<?php if ( is_home() && ! is_front_page() ) : ?>
	<div class="row larger-gutter align-items-center be-single-header">
		<div class="col-md-8">
			<header>
				<h1 class="page-title h4"><?php single_post_title(); ?></h1>
			</header>
		</div>
		<div class="col-md-4 text-right">
			<div class="entry-meta">
				<?php blogeasy_breadcrumb_trail(); ?>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php if ( is_home() ) : ?>
	<?php
		$featured_post_1_id = get_theme_mod( 'featured_post_1' );
		$featured_post_2_id = get_theme_mod( 'featured_post_2' );
		$featured_post_3_id = get_theme_mod( 'featured_post_3' );

		$featured_post_1 = get_post( $featured_post_1_id );
		$featured_post_2 = get_post( $featured_post_2_id );
		$featured_post_3 = get_post( $featured_post_3_id );
	?>
	<?php
		if ( ( $featured_post_1_id && $featured_post_1 && $featured_post_1->post_status === 'publish' ) ||
			( $featured_post_2_id && $featured_post_2 && $featured_post_2->post_status === 'publish' ) ||
			( $featured_post_3_id && $featured_post_3 && $featured_post_3->post_status === 'publish' ) ) : ?>
			<div class="row larger-gutter">
				<div class="col-md-9 be-content-width">
					<div class="be-main-featured-post">
						<?php if ( $featured_post_1_id && $featured_post_1 && $featured_post_1->post_status === 'publish' ) : ?>
							<?php echo get_the_post_thumbnail( $featured_post_1, 'medium', array( 'class' => 'be-feat-card-img' ) ); ?>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-3 be-sidebar-width">
					<div class="bg-secondary-featured-post-1">
						<?php if ( $featured_post_2_id && $featured_post_2 && $featured_post_2->post_status === 'publish' ) : ?>
						<?php endif; ?>
					</div>

					<div class="bg-secondary-featured-post-2">
						<?php if ( $featured_post_3_id && $featured_post_3 && $featured_post_3->post_status === 'publish' ) : ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
	<?php
		endif;
	?>
<?php endif; ?>

<div class="row larger-gutter">

	<div id="primary" class="col-md-9 content-area be-content-width">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div class="col-md-3 be-sidebar-width">
		<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();
