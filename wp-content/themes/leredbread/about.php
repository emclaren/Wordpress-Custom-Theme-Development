
<?php

/**
 *
 *Template Name:about page
 * @package RED_Starter_Theme
 */
get_header(); ?>
<div class="white-background">

<div class="center">
<h1> Learn about our team and culture </h1>
<p class= "about-sub-heading"><?php echo esc_html( CFS()->get('sub-heading')); ?></p>


<hr class="decorative"></hr>
</div>



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
<div class="container about-story">
<h2 class="heading-center ">Our Story</h2>
<p><?php echo CFS()->get('story'); ?></p>
</div>


<div class="call-to-action container">
<span>Feel free to contact us with any questions coments or suggestions. We even take custom orders!.</span> 
<span> <a href="contact" class="button">Contact Us</a> </span>
</div>

</div>
<?php get_footer(); ?>

;