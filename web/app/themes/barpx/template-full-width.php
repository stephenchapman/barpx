<?php
/*
Template Name: Full Width
*/
?>

<?php while (have_posts()) : the_post(); ?>
	<!--<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>-->
  	<?php get_template_part('templates/page', 'header'); ?>
  	<?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
