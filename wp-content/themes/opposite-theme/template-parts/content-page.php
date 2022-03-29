<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opposite
 */

?>

<div class="header-bottom">
	
	<div class="container">
		<div class="header-text">
			
			
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				
				<?php
			
			$opposite_description = get_bloginfo( 'description', 'display' );
			if ( $opposite_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $opposite_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
			
		</div>	
	</div>	
	
</div>
<div class="container container-color">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</header><!-- .entry-header -->

		<?php opposite_post_thumbnail(); ?>

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'opposite' ),
					'after'  => '</div>',
				)
			);
			?>
		</div><!-- .entry-content -->

		<?php if ( get_edit_post_link() ) : ?>
			<footer class="entry-footer">
				<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'opposite' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						wp_kses_post( get_the_title() )
					),
					'<span class="edit-link">',
					'</span>'
				);
				?>
			</footer><!-- .entry-footer -->
		<?php endif; ?>
	</article>

	<div class="sidebar">
		<?php get_template_part( 'template-parts/sidebar-main', get_post_type() ); ?>
	</div>
</div>