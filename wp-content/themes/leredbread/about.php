
<?php

/**
 *
 *Template Name:about page
 * @package RED_Starter_Theme
 */
get_header(); ?>
<h2> Learn about our team and culture </h2>
<p class= "about-sub-heading"><?php echo esc_html( CFS()->get('sub-heading')); ?></p>

<div class="about-container container">
	<div class="about-block">
		<img src="<?php echo get_template_directory_uri() ?>/images/team.jpg">

		

		<h2>Le Red Bread Team</h2>
		<p class= "about-tagline"><?php echo esc_html( CFS()->get('tagline_1')); ?></p>
		<p class= "about-blurb1"><?php echo esc_html( CFS()->get('blurb_1')); ?></p>
	</div>
	<div class="about-block">
		<img src="<?php echo get_template_directory_uri() ?>/images/bakery.jpg">


		<h2>Le Red Bread Bakery</h2>
		<p class= "about-tagline"><?php echo esc_html( CFS()->get('tagline_2')); ?></p>
		<p class= "about-blurb2"><?php echo esc_html( CFS()->get('blurb_2')); ?></p>
	</div>
</div>
<h2>Our Story</h2>
<p class= "about-story"><?php echo CFS()->get('story'); ?></p>


<?php get_footer(); ?>

;