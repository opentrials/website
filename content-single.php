<?php
/**
 * @package Open Trials
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <p class="entry-sub-title"><?php the_field('sub-title'); ?></p>
		<div class="entry-header-bar">
            <div class="entry-meta">
                <?php open_trials_posted_on(); ?>
            </div>
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
		<?php open_trials_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
