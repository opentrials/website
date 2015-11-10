<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Open Trials
 */

get_header(); ?>

<div class="banner">
    <div>
        <?php get_template_part('site_header'); ?>

        <div class="entry-header">
    		<?php
            the_title( '<h1 class="entry-title">', '</h1>' );
            $subtitle = get_field( "sub-title" );
            if( $subtitle ) :?>
            <p class="entry-sub-title"><?php the_field('sub-title'); ?></p>
            <?php endif ?>
    		<div class="entry-header-bar">
                <ul class="breadcrumb">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                    </li>
                    <li>
                        <?php the_title(); ?>
                    </li>
                </ul>
            </div>
    	</div><!-- .entry-header -->
    </div>
</div>



      <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>


<?php //get_sidebar(); ?>
<?php get_footer(); ?>
