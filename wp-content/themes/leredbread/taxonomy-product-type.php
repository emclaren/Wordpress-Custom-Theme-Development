<?php
/**
 * @package RED_Starter_Theme
*/
get_header(); ?> 
<p> TESTING THE Taxonomy PAGE </p>
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
			</header><!-- .page-header -->
​
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

​
				<div class="entry-content">
					<h1><?php the_title(); ?></h1>
						<?php if ( has_post_thumbnail() ) : ?>
						<?php the_post_thumbnail( 'large' ); ?>
					<?php endif; ?>
<h2 class='price'>Price: <?php echo esc_html( CFS()->get('price') ); ?></h2>
	<p class="price">Price: <?php echo esc_html( CFS()->get('price')); ?></p>
		<?php the_content(); ?>
		
	</div><!-- .entry-content -->
				
​
			<?php endwhile; ?>
​
			<?php the_posts_navigation(); ?>
​
		<?php else : ?>
​
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
​
		<?php endif; ?>
​
		</main><!-- #main -->
	</div><!-- #primary -->
​
<?php get_sidebar(); ?>
<?php get_footer(); ?>