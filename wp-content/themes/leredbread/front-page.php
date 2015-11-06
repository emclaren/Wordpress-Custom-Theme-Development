<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>


<main id="main" class="site-main" role="main">

<section class="bread-background"> 
	<p><span>BAKED TO PERFECTION.</span></p>
</section>

<div class="product-container">
 <?php
        $terms = get_terms("product-type");
        if ($terms) {?>
            <ul class="product-type">
            <?php foreach($terms as $term) { ?>
                <li class="product">
                    <img src="<?php echo get_template_directory_uri() ?>/images/<?php echo $term->slug ?>.png"
                         alt="<?php echo $term->slug ?>">
                    <h3><?php echo $term->name ?></h3>
                    <p><?php echo $term->description;?>
                        <a href="<?php echo get_term_link( $term ); ?>">See More...</a>
                    </p>
                </li>
                <?php
            }
        } ?>
 </div>
<div class="call-to-action container">
All our products are made fresh daily from locally-sourced ingredients. Our menu is updated frequently. <a href="products" class="button"> See our Products</a> 
</div>

<div class="blog-container">

<div class="container">
	<p> OUR LATEST NEWS</p>

<div class="blog-container1 ">

<?php
		$args = array( 'posts_per_page' => 4);
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
		<ul>
			<li>
				<div class="blog-image"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail ('medium'); ?></a></div>
				<div class="blog-text"><p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p><p>...</p></div>
				<p> <?php the_time ('d M Y');?> / <?php comments_number('0 Comments'); ?></p>
			</li>
		</ul>
	<?php endforeach; ?>

</div>
</div>
</div>



<?php get_footer(); ?>