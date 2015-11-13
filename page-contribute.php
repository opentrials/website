<?php
/*
Template Name: Contribute
*/

get_header(); ?>

<div class="banner">
    <div>
        <?php get_template_part('site_header'); ?>
        <?php get_template_part('entry_header'); ?>
    </div>
</div>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div>
        <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; // end of the loop. ?>

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
        <ul class="inline">
            <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
            <li><a href="#<?php echo $post->post_name ?>"><?php the_title(); ?></a></li>
            <?php endwhile; ?>
        </ul>
        <?php endif; wp_reset_query(); ?>
    </div>
    <?php  if ( $parent->have_posts() ) : ?>
    <?php while ( $parent->have_posts() ) : $parent->the_post();
    $subtitle = get_field( "sub-title" ); ?>
    <section>
        <h3 id="<?php echo $post->post_name ?>"><?php the_title(); ?>: <?php if( $subtitle ) :?><small><?php the_field('sub-title'); ?></small><?php endif ?></h3>
        <?php the_content(); ?>
        <a href="#contribute-form">Get in touch</a>
    </section>
    <?php endwhile; ?>

    <?php endif; wp_reset_query(); ?>

    <!-- Begin MailChimp Signup Form -->
    <form novalidate="" target="_blank" class="validate" name="mc-embedded-subscribe-form" id="mc-embedded-subscribe-form" method="post" action="//okfn.us10.list-manage.com/subscribe/post?u=e39c0e42eb3478fb22b423e4e&amp;id=35965ded3a">
        <div id="mc_embed_signup_scroll">
        <h3 id="contribute-form">Contribute to OpenTrials</h3>

        <div class="field-group">
        <label for="mce-FNAME">First Name </label>
        <input type="text" id="mce-FNAME" class="" name="FNAME" value="">
        </div>
        <div class="field-group">
        <label for="mce-LNAME">Last Name </label>
        <input type="text" id="mce-LNAME" class="" name="LNAME" value="">
        </div>
        <div class="field-group">
        <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
        </label>
        <input type="email" id="mce-EMAIL" class="required email" name="EMAIL" value="">
        </div>
        <div class="field-group">
        <label for="mce-MMERGE3">Organisation </label>
        <input type="text" id="mce-MMERGE3" class="" name="MMERGE3" value="">
        </div>

        <label for="mce-MMERGE4">Additional Information </label>
        <input type="text" id="mce-MMERGE4" class="" name="MMERGE4" value="">

        <div class="mc-field-group input-group clearfix">
        I'm interested in becoming
        <ul><li><input type="checkbox" value="1" name="group[7201][1]" id="mce-group[7201]-7201-0"><label for="mce-group[7201]-7201-0">a data partner</label></li>
        <li><input type="checkbox" value="2" name="group[7201][2]" id="mce-group[7201]-7201-1"><label for="mce-group[7201]-7201-1">a funding partner</label></li>
        <li><input type="checkbox" value="4" name="group[7201][4]" id="mce-group[7201]-7201-2"><label for="mce-group[7201]-7201-2">a community partner</label></li>
        <li><input type="checkbox" value="16" name="group[7201][16]" id="mce-group[7201]-7201-3"><label for="mce-group[7201]-7201-3">an individual partner</label></li>
        <li><input type="checkbox" value="8" name="group[7201][8]" id="mce-group[7201]-7201-4"><label for="mce-group[7201]-7201-4">a user</label></li>
        </ul>
        </div>

        <div class="clear" id="mce-responses">
        <div style="display:none" id="mce-error-response" class="response"></div>
        <div style="display:none" id="mce-success-response" class="response"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;"><input type="text" value="" tabindex="-1" name="b_e39c0e42eb3478fb22b423e4e_35965ded3a"></div>
        <div class="clear"><input type="submit" class="button" id="mc-embedded-subscribe" name="subscribe" value="Send"></div>
        </div>

    </form>
    <!--End mc_embed_signup-->

</article>

<?php get_footer(); ?>
