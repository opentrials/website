<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="banner">
    <div>
        <header>
            <img class="logo" src="<?php echo get_template_directory_uri() ?>/img/opentrials.png" alt="<?php bloginfo( 'name' ); ?>, <?php bloginfo( 'description' ); ?>">

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
                <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
            </nav>
        </header>
        <section>
            <div>
                <?php while ( have_posts() ) : the_post(); ?>
                <article>
                    <?php the_content(); ?>
                    <a class="cta">Intro video</a>
                </article>
                <?php
                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];
                if (!empty($thumb_url)): ?>
                <div class="image">
                    <span>
                        <img src="<?php echo get_template_directory_uri() ?>/img/screen-top.png" alt="">
                        <img src="<?php echo $thumb_url ?>" alt="">
                    </span>
                </div>
                <?php endif ?>
                <?php endwhile; // end of the loop. ?>
            </div>
        </section>
    </div>
</div>

<div class="news">
    <a href="#contribute">We are looking for: <strong>data partners</strong>, <strong>funding partners</strong>, <strong>community partners</strong>, <strong>individual partners</strong> &amp; <strong>users</strong>.</a>
    <a href="#board">We are delighted to present the <strong>Open Trials advisory board</strong>.</a>
</div>

<div class="video">
    <div class="videoWrapper">
    </div>
</div>

<section id="register">
    <div>
        <article>
            <a href="https://twitter.com/opentrials" rel="external" class="twitter">
                <h3>Follow</h3>
                <span>@opentrials</span>
            </a>

            <a href="https://discuss.okfn.org/c/projects/open-trials" rel="external" class="discuss">
                <h3>Discuss</h3>
                <span>in our forum</span>
            </a>

            <a class="subscribe" href="#signup-form" id="signup-button">
                <h3>Subscribe</h3>
                <span>to our mailing list</span>
            </a>
        </article>
    </div>
</section>
<!-- Begin MailChimp Signup Form -->
<form action="http://okfn.us10.list-manage1.com/subscribe/post" method="POST" id="signup-form" target="_blank">
    <input type="hidden" name="u" value="e39c0e42eb3478fb22b423e4e">
    <input type="hidden" name="id" value="34516c152f">

    <div class="field-group">
      <label for="MERGE1">First Name</label>
      <input type="text" name="MERGE1" id="MERGE1" size="25" value="">
    </div>

    <div class="field-group">
      <label for="MERGE2">Last Name</label>
      <input type="text" name="MERGE2" id="MERGE2" size="25" value="">
    </div>

    <div class="field-group">
      <label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
      <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
    </div>

    <div class="field-group">
      <label for="MERGE3">Organisation</label>
      <input type="text" name="MERGE3" id="MERGE3" size="25" value="">
    </div>

    <!--
    <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-4">
    <label for="MERGE4">Twitter Username</label>
    <div class="field-group">
        <input type="text" name="MERGE4" id="MERGE4" size="25" value="">
    </div>
    </div>
    -->

    <!-- real people should not fill this in and expect good things -->
    <div class="hidden"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_34516c152f" tabindex="-1" value=""></div>
    <div class="submit_container clear">
    <input type="submit" class="button" name="submit" value="Register">
    </div>
</form>
<!--End mc_embed_signup-->

<?php get_footer(); ?>
