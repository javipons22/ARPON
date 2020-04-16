<?php
/* 
	Template Name: PROYECTOS
*/
?>
<?php
get_header(); 
?>
<?php

	$args = array(
	'post_type' => 'proyectos',
		'posts_per_page' => 25//poner el tipo de post
	);
	$query = new WP_Query($args);

?>
<div class="div-content"></div>
<div class="container pag-proyecto justify-content-between">

	
		<?php if($query->have_posts() ) : while($query ->have_posts()) : $query->the_post(); ?>
		<a href="<?php the_permalink(''); ?>">
			<div class="col-lg-3 contender conten">
				<?php the_post_thumbnail(''); ?>
			<div class="overlay">
				
			</div>
			<div class="textoo"><?php echo strtoupper(get_the_title()); ?></div>
			</div>
			</a>
		<?php endwhile; endif; wp_reset_postdata(); ?>

</div>
<div class="div-content"></div>


<?php get_footer(); ?>