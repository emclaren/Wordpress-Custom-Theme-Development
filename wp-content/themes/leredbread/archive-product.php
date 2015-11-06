<?php
/**
 * @package RED_Starter_Theme
*/
get_header(); ?> 
<p>this is product page</p>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		​
		<?php if ( have_posts() ) : ?>
		​
		<header class="page-header">
			<?php
			the_archive_title( '<h1 class="page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			<p class= "about-sub-heading"><?php echo esc_html( CFS()->get('sub-heading')); ?></p>
		</header><!-- .page-header -->
		​


<div class="container">
<div class="flex-products">

		<?php /* Start the Loop */ ?>
		<div class="grid-item">
		<?php while ( have_posts() ) : the_post(); ?>
		
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' ); ?>
			<h1><?php the_title(); ?></h1>
			<?php endif; ?>
			<p class="price">Price: <?php echo esc_html( CFS()->get('price')); ?></p>
		</div>
<?php endwhile; ?>



​
<?php the_posts_navigation(); ?>
​
<?php else : ?>
	​
	<?php get_template_part( 'template-parts/content', 'none' ); ?>
	​
<?php endif; ?>
</div>
​</div>
</main><!-- #main -->
</div><!-- #primary -->
​
<?php get_sidebar(); ?>
<?php get_footer(); ?>