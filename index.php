<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Open Trials
 */

get_header(); ?>

	<div class="banner">
	    <div>
	        <?php get_template_part('site_header'); ?>
			<div class="entry-header">
			    <h1 class="entry-title">Blog</h1>
			    <!--<p class="entry-sub-title"></p>-->
			    <div class="entry-header-bar">
			        <ul class="breadcrumb">
			            <li>
			                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
			            </li>
			            <li>
			                Blog
			            </li>
			        </ul>
			    </div>
			</div><!-- .entry-header -->
	    </div>
	</div>

	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

	<?php else : ?>

		<?php get_template_part( 'content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
