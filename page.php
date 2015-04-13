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
  
  <a class="opentrials logo"></a>
  <div id="holdingpage">
    <div class="intro section">
      <h1><?php bloginfo( 'name' ); ?></h1>
      <span class="tagline"><?php bloginfo( 'description' ); ?></span>
      <?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
        <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
      <a class="register" href="#register">Register for Updates</a> <a class="follow" href="https://twitter.com/opentrials">Follow on Twitter</a>
    </div>
    <div class="register section">
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
      <form action="//okfn.us10.list-manage.com/subscribe/post?u=e39c0e42eb3478fb22b423e4e&amp;id=34516c152f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
        <h2>Register for updates</h2>
      <div class="mc-field-group">
        <label for="mce-EMAIL">Email Address </label>
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
      </div>
      <div class="mc-field-group">
        <label for="mce-FNAME">First Name </label>
        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
      </div>
      <div class="mc-field-group">
        <label for="mce-LNAME">Last Name </label>
        <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
      </div>
        <div id="mce-responses" class="clear">
          <div class="response" id="mce-error-response" style="display:none"></div>
          <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_34516c152f" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Register" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
      </form>
      </div>
      <!--End mc_embed_signup-->
    </div>
  </div>
  <div class="logos">
    <a class="ok logo"></a> <a class="cos logo"></a> <a class="ljaf logo"></a>
  </div>
  

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
