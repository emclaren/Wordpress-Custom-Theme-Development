<?php
/**
 * @package RED_Starter_Theme
*/
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

		<header class="page-header center">
			<?php the_archive_title( '<h1 class="product-page-title">', '</h1>' );
			the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
			<p class= "about-sub-heading"><?php echo esc_html( CFS()->get('sub-heading')); ?></p>
			
			<hr class="decorative"></hr>
		</header>

		<div class="container">

			<div class="product-container">
				<?php
				$terms = get_terms("product-type");
				if ($terms) {?>
				<ul class="product-type">
					<?php foreach($terms as $term) { ?>
					<li class="product">
						<img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
						alt="<?php echo $term->slug ?>">
						<h3><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name ?> </a></h3>
						
						
					</p>
				</li>
				<?php
			}
		} ?>
	</div>

	<div class="flex-products">

		<?php /* Start the Loop */ ?>
		
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="product-grid-item">
			<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'small' ); ?>
			<div class="product-grid-text ">
				<span class="product-span-dots"><?php the_title(); ?></span>
				
				<span class="price"><?php echo esc_html( CFS()->get('price')); ?></span>
			<?php endif; ?>
		</div>
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

<?php get_footer(); ?>