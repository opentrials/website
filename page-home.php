<?php
/*
Template Name: Home
*/

get_header(); ?>

<div class="banner">
    <div>
        <?php get_template_part('site_header'); ?>
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
    <?php
    $args = array(
        'post_type'      => 'page',
        'posts_per_page' => -1,
        'post_parent'    => $post->ID,
        'order'          => 'ASC',
        'orderby'        => 'menu_order'
     );

    $parent = new WP_Query( $args );

    if ( $parent->have_posts() ) {
        while ( $parent->have_posts() ) : $parent->the_post(); ?>
        <div>
            <?php echo get_the_content(); ?>
        </div>
    <?php endwhile;
    }
    wp_reset_query(); ?>

<?php
    // check for twitter plugin
    include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
    if ( is_plugin_active( 'oauth-twitter-feed-for-developers/twitter-feed-for-developers.php' ) ) {

  $number_of_tweets = 3;
  $twitter_screenname_to_load = 'opentrials';

  $tweets = getTweets($number_of_tweets, $twitter_screenname_to_load);

  foreach($tweets as $tweet){ ?>
      <div class="tweet">
          <?php //var_dump($tweet);
          $tweet_text = $tweet["text"];
          $tweet_text = preg_replace('/http:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<span><a href="http://$1" target="_blank">http://$1</a></span>', $tweet_text); //replace http
          $tweet_text = preg_replace('/https:\/\/([a-z0-9_\.\-\+\&\!\#\~\/\,]+)/i', '<span><a href="https://$1" target="_blank">https://$1</a></span>', $tweet_text); //replace https
          $tweet_text = preg_replace('/@([a-z0-9_]+)/i', '<strong><a href="https://twitter.com/$1" target="_blank">@$1</a></strong>', $tweet_text); //replace users
          $tweet_text = preg_replace('/#([a-z0-9_]+)/i', '<strong><a href="https://twitter.com/hashtag/$1" target="_blank">#$1</a></strong>', $tweet_text); //replace hashtags
          echo $tweet_text;
          ?>
      </div>
  <?php
    }
  }
?>
</div>
<?php //var_dump($tweets); ?>

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
