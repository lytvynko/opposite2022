<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opposite
 */

?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) :
				?>
				
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="flex">
			<div class="post-img">	
				<?php opposite_post_thumbnail(); ?>
			</div>	
			<div class="entry-content">
				<?php
				add_filter('the_content','htm_image_content_filter',11);
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
				);

				
				?>
			</div>	
		</div><!-- .entry-content -->

		
	</article><!-- #post-<?php the_ID(); ?> -->
	
	
