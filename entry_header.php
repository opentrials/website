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
            <?php if ( is_single() && get_option( 'show_on_front' ) == 'page' ) : ?>
            <li>
                <a href="<?php echo get_permalink( get_option('page_for_posts' ) ); ?>"><?php echo get_the_title( get_option('page_for_posts' ) ); ?></a>
            </li>
            <?php endif ?>
            <li>
                <?php the_title(); ?>
            </li>
        </ul>
    </div>
</div><!-- .entry-header -->
