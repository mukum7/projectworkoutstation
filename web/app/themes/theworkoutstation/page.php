<?php get_header(); ?>
<section>

	<div class="servicetitle">
		
		<h1><?php the_title(); ?></h1>
		<hr>

 	</div>

 	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="100%" alt="" />
 	<hr>
	
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
		<?php the_content(); ?>
		<?php endwhile; //end of the loop ?>
	</div>
</section>
<?php get_footer(); ?>