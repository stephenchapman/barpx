<article <?php post_class(); ?>>
	<!--<?php $thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'medium');
	echo '<img class="media-object" src="' . $thumbnail_image_url[0] . '" alt="">' ?>-->
	<header>
    	<h2 class="entry-title"><?php the_title(); ?></h2>
    	<?php get_template_part('templates/entry-meta-links'); ?>
  	</header>
</article>
