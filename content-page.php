<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Open Trials
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="entry-sub-title"><?php the_field('sub-title'); ?></p>
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
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'open-trials' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'open-trials' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
