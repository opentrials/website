<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Open Trials
 */

get_header(); ?>

<div class="banner">
    <div>
        <?php get_template_part('site_header'); ?>
    </div>

		<div class="venn">
			<h1>404<span class="verbose">Page Not Found</span></h1>
			<ul>
				<li>We broke something<span class="verbose">, or</span></li>
				<li>You typed something wrong</li>
			</ul>
		</div>
</div>

<?php get_footer(); ?>
