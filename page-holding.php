<?php
/*
Template Name: Holding Page
*/

get_header(); ?>  
  
  <a class="opentrials logo"></a>
  <nav id="site-navigation" class="main-navigation" role="navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
  </nav>
  <div id="holdingpage">
    <div class="intro section">
      <h1><?php bloginfo( 'name' ); ?></h1>
      <span class="tagline"><?php bloginfo( 'description' ); ?></span>
      <?php while ( have_posts() ) : the_post(); ?>
				<?php //get_template_part( 'content', 'page' ); ?>
        <?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
      <a class="register" href="#register">Register for Updates</a> <a class="follow" href="https://twitter.com/opentrials">Follow on Twitter</a>
      
      <div class="news">
        <h4>Want to contribute to OpenTrials?</h4> We are looking for:
        <ul>
         <li><a href="#contribute">data partners</a></li>
         <li><a href="#contribute">funding partners</a></li>
         <li><a href="#contribute">community partners</a></li>
         <li><a href="#contribute">users</a></li>
        </ul>
        <a href="#contribute">Get in touch</a>
      </div>
      
    </div>
    <div class="register section">
      <!-- Begin MailChimp Signup Form -->
      <form action="http://okfn.us10.list-manage1.com/subscribe/post" method="POST">
        <h2>Register for Updates</h2>
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
        <div class="hidden-from-view"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_34516c152f" tabindex="-1" value=""></div>
        <div class="submit_container clear">
        <input type="submit" class="button" name="submit" value="Register">
        </div>
        </form>
        <!--End mc_embed_signup-->
      </div>
      <div class="contribute section">
        <!-- Begin MailChimp Signup Form -->
        <form action="//okfn.us10.list-manage.com/subscribe/post?u=e39c0e42eb3478fb22b423e4e&amp;id=35965ded3a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          <h2>Contribute to OpenTrials</h2>
          
          <div class="field-group">
            <label for="mce-FNAME">First Name </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
          </div>
          <div class="field-group">
            <label for="mce-LNAME">Last Name </label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
          </div>
          <div class="field-group">
            <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
            </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
          </div>
          <div class="field-group">
            <label for="mce-MMERGE3">Organisation </label>
            <input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
          </div>
          
          <label for="mce-MMERGE4">Additional Information </label>
	<input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
          
          <div class="input-group clear">
            I'm interested in becoming a
            <ul><li><input type="checkbox" value="1" name="group[7201][1]" id="mce-group[7201]-7201-0"><label for="mce-group[7201]-7201-0"><strong>Data partner</strong> Do you have data to contribute to Open Trials? <span>Sign up to make your data discoverable and we will be in touch with you shortly.</span></label>
            </li>
            
            <li><input type="checkbox" value="4" name="group[7201][4]" id="mce-group[7201]-7201-2"><label for="mce-group[7201]-7201-2"><strong>Community partner</strong> Are you able to promote this project to your network and/or contribute to the project?  <span>Sign up for updates.</span></label></li><li><input type="checkbox" value="2" name="group[7201][2]" id="mce-group[7201]-7201-1"><label for="mce-group[7201]-7201-1"><strong>Funding partner</strong> Are you able to contribute financially, have a suggestion for a funding opportunity or are able to donate in-kind resources? <span>Sign up and we will get in touch with you.</span></label></li>
            <li><input type="checkbox" value="8" name="group[7201][8]" id="mce-group[7201]-7201-3"><label for="mce-group[7201]-7201-3"><strong>User</strong> Are you a user of Open Trials? Perhaps you are a researcher, a medical professional, a trialist or a patient, or just curious. <span>Sign up, and we will send you updates as the project progresses.</span></label></li>
            </ul>
          </div>
          
        
          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;"><input type="text" name="b_e39c0e42eb3478fb22b423e4e_35965ded3a" tabindex="-1" value=""></div>
          <div class="clear"><input type="submit" value="Register" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
          </div>
            
            
        </form>
        <!--End mc_embed_signup-->
      </div>
    </div>
  </div>
  <div class="logos">
    <a class="ok logo"></a> <a class="cos logo"></a> <a class="ljaf logo"></a>
  </div>
  

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
