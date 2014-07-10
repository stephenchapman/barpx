<?php while (have_posts()) : the_post(); ?>
	<?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
	<ul class="media-list">

		<?php $args = array( 'posts_per_page' => 5, 'category' => 3 );
		$myposts = get_posts( $args );
		foreach ( $myposts as $post ) : setup_postdata( $post ); 

		$thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail'); 
		?>	
		<li class="media">
		    <a class="pull-left" href="#">
		      <?php echo '<img class="media-object" src="' . $thumbnail_image_url[0] . '" alt="">' ?>
		    </a>
		    <div class="media-body">
		      <h4 class="media-heading"><?php the_title() ?></h4>
		      <p><?php the_content() ?></p>
		    </div>
	  	</li>
		<?php endforeach; 
		wp_reset_postdata();?>

	</ul>
<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>