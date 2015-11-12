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
