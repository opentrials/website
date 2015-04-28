<?php
/*
Template Name: Holding Page
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
      <form action="http://okfn.us10.list-manage1.com/subscribe/post" method="POST">
        <input type="hidden" name="u" value="e39c0e42eb3478fb22b423e4e">
        <input type="hidden" name="id" value="34516c152f">
        <div id="mergeTable" class="mergeTable">
        <div class="mergeRow dojoDndItem mergeRow-email" id="mergeRow-0">
        <label for="MERGE0">Email Address <span class="req asterisk">*</span></label>
        <div class="field-group">
            <input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" value="">
        </div>
        </div>
        <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-1">
        <label for="MERGE1">First Name</label>
        <div class="field-group">
            <input type="text" name="MERGE1" id="MERGE1" size="25" value="">
        </div>
        </div>
        <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-2">
        <label for="MERGE2">Last Name</label>
        <div class="field-group">
            <input type="text" name="MERGE2" id="MERGE2" size="25" value="">
        </div>
        </div>
        <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-3">
        <label for="MERGE3">Organisation</label>
        <div class="field-group">
            <input type="text" name="MERGE3" id="MERGE3" size="25" value="">
        </div>
        </div>
        <!--
        <div class="mergeRow dojoDndItem mergeRow-text" id="mergeRow-4">
        <label for="MERGE4">Twitter Username</label>
        <div class="field-group">
            <input type="text" name="MERGE4" id="MERGE4" size="25" value="">
        </div>
        </div>
        -->
        </div>
        <!-- real people should not fill this in and expect good things -->
        <div class="hidden-from-view"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_34516c152f" tabindex="-1" value=""></div>
        <div class="submit_container clear">
        <input type="submit" class="button" name="submit" value="Register">
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
