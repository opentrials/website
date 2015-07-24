<?php
/*
Template Name: Contribute
*/

get_header(); ?>  
  
  <header>
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/opentrials.png" alt="Open Trials"></a>
    <nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span></span></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
  </header>


      <?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
      <!-- Begin MailChimp Signup Form -->
        <form action="//okfn.us10.list-manage.com/subscribe/post?u=e39c0e42eb3478fb22b423e4e&amp;id=35965ded3a" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate contribute" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
          
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
          
          <div class="input-group clear">
            I'm interested in becoming a
            <ul><li><input type="checkbox" value="1" name="group[7201][1]" id="mce-group[7201]-7201-0"><label for="mce-group[7201]-7201-0"><strong>Data partner</strong> - Do you have data to contribute to Open Trials?  Sign up to make your data discoverable and we will be in touch with you shortly.</label>
            </li>
            <li><input type="checkbox" value="2" name="group[7201][2]" id="mce-group[7201]-7201-1"><label for="mce-group[7201]-7201-1"><strong>Funding partner</strong> - Are you able to contribute financially, have a suggestion for a funding opportunity or are able to donate in-kind resources? Sign up and we will get in touch with you.</label></li>
            <li><input type="checkbox" value="4" name="group[7201][4]" id="mce-group[7201]-7201-2"><label for="mce-group[7201]-7201-2"><strong>Community partner</strong> - Are you able to promote this project to your network and/or contribute to the project?  Sign up for updates.</label></li>
            <li><input type="checkbox" value="8" name="group[7201][8]" id="mce-group[7201]-7201-3"><label for="mce-group[7201]-7201-3"><strong>User</strong> - Are you a user of Open Trials? Perhaps you are a researcher, a medical professional, a trialist or a patient, or just curious.  Sign up, and we will send you updates as the project progresses.</label></li>
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
     

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
