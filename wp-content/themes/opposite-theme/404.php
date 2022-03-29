<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package opposite
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container container-color">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Страница не найдена', 'opposite' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'Такой страницы не существует. Воспользуйтесь поиском:', 'opposite' ); ?></p>

						<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
						?>

						

						

				</div><!-- .page-content -->
			</section><!-- .error-404 -->
			<div class="sidebar">
				<?php get_template_part( 'template-parts/sidebar-main', get_post_type() ); ?>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
