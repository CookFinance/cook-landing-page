<?php
/**
 * The template for displaying Category pages
 *
 * Used to display archive-type pages for posts in a category.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Revolution
 * @since Revolution 1.0
 */

get_header(); ?>

<?php 
	/*======================================================
	 *       PAGE HEADER OR BANNER SECTION 
	 *====================================================== */		
	get_template_part( 'page-templates/page/single', 'header' ); 			
	?>
	
	<div class="container">
		<section id="primary" class="site-content">
			<div id="content" role="main">

			<?php if ( have_posts() ) : ?>
				<header class="archive-header">
					<h1 class="archive-title"><?php printf( __( 'Category Archives: %s', 'cookfinance' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>

				<?php if ( category_description() ) : // Show an optional category description ?>
					<div class="archive-meta"><?php echo category_description(); ?></div>
				<?php endif; ?>
				</header><!-- .archive-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/* Include the post format-specific template for the content. If you want to
					 * this in a child theme then include a file called called content-___.php
					 * (where ___ is the post format) and that will be used instead.
					 */
					get_template_part( 'page-templates/page/content/content', get_post_format() );

				endwhile;

				revolution_content_nav( 'nav-below' );
				?>

			<?php else : ?>
				<?php get_template_part( 'page-templates/page/content/content', 'none' ); ?>
			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

		<?php get_sidebar(); ?>
	</div><!-- .container -->	
<?php get_footer(); ?>
