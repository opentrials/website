<?php
/*
Template Name: Board
*/

get_header(); ?>

<div class="banner">
    <div>
        <?php get_template_part('site_header'); ?>
        <?php get_template_part('entry_header'); ?>
    </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php

$args = array(
    'post_type'      => 'page',
    'posts_per_page' => -1,
    'post_parent'    => $post->ID,
    'order'          => 'ASC',
    'orderby'        => 'menu_order'
 );


$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>

        <figure id="parent-<?php the_ID(); ?>">
            <?php
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            if (!empty($thumb_url)): ?>
            <img src="<?php echo $thumb_url ?>" alt="">
            <?php endif ?>
            <figcaption>
                <h4><?php the_title(); ?></h4>
                <?php the_content(); ?>
            </figcaption>
        </figure>

    <?php endwhile; ?>

<?php endif; wp_reset_query(); ?>
</article>

<?php get_footer(); ?>
