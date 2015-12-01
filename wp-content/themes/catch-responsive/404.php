<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package Catch Themes
 * @subpackage Catch Responsive
 * @since Catch Responsive 1.0 
 */

get_header(); ?>

	<main id="main" class="site-main" role="main">

		<article class="error-404 not-found hentry">

			<div class="entry-container">
				
				<header class="entry-header">
					<h1 class="page-title"><?php _e( 'La página que usted busca no existe.', 'catch-responsive' ); ?></h1>
				</header>

				<div class="entry-content">
				
					<p><?php _e( 'Puede utilizar el buscador para encontrar lo que necesita', 'catch-responsive' ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .entry-content -->

			</div><!-- .entry-container -->

		</article><!-- .error-404 -->

	</main><!-- #main -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>