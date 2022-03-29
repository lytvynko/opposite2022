<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opposite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="flex">
		<div class="post-img">	
			<?php opposite_post_thumbnail(); ?>
		</div>

		<div class="entry-summary">
			<?php add_filter('the_content','htm_image_content_filter',11);
			the_content(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( '<p>Читать далее...</p><span class="screen-reader-text"> "%s"</span>', 'opposite' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					wp_kses_post( get_the_title() )
				)
			); ?>
		</div><!-- .entry-summary -->
	</div>	

	
</article><!-- #post-<?php the_ID(); ?> -->

