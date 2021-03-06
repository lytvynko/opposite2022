<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package opposite
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container container-color">
			<section>
				<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/contentimg', get_post_type() );

					the_post_navigation(
						array(
							'prev_text' => '<span class="nav-title">%title</span>',
							'next_text' => '</span> <span class="nav-title">%title</span>',
						)
					);

					// If comments are open or we have at least one comment, load up the comment template.
					// if ( comments_open() || get_comments_number() ) :
					// 	comments_template();
					// endif;

				endwhile; // End of the loop.
				?>
			</section>
			<div class="sidebar">
				<?php get_template_part( 'template-parts/sidebar-main', get_post_type() ); ?>
			</div>
		</div>		

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
