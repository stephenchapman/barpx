<div id="frame">
	<header class="decoration">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco-right-cnr-white.svg" alt="" class="cnr-right">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/deco-right-cnr-white.svg" alt="" class="cnr-left">
	</header>

	<!--<div class="jumbotron">
	  <div class="container">
	  	<div class="text-center">
	    	
	    </div>
	  </div>
	</div>-->

	<section class="intro" id="intro">
		<h1 class="px-logo" style="font-size: 15rem; font-weight: bold;">PX</h1>
		<article>
			<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/content', 'page'); ?>
			<?php endwhile; ?>
		</article>
	</section>

	<ul class="menu" id="menu">
		<li class="menu-1">
			<a href="/about"><button type="button" class="btn btn-default btn-lg">About</button></a>
		</li>
		<li class="menu-2">
			<a href="/reservations"><button type="button" class="btn btn-default btn-lg">Reservations</button></a>
		</li>
		<li class="menu-3">
			<a href="/soirees"><button type="button" class="btn btn-default btn-lg">Soirées</button></a>
		</li>
	</ul>

	<section class="posts" id="posts">

	</section>
</div>

	<!--<section class="wrapper" id="home-1">
		<?php
		if ( has_post_thumbnail()) {
			$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
	   		echo '<div class="content-main" id="home-main" style="background-image: url(' . $full_image_url[0] . ')">';
		}
		?>
		
			<div class="content-holder">
				<?php while (have_posts()) : the_post(); ?>
					<?php get_template_part('templates/page', 'header'); ?>
					<?php get_template_part('templates/content', 'page'); ?>
				<?php endwhile; ?>
			</div>
		</div>

		
			<?php

			$args = array( 'posts_per_page' => 9);

			$myposts = get_posts( $args );

			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
			<?php
			if ( has_post_thumbnail()) {
				$full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
	   			echo '<div class="content-secondary" id="home-secondary" style="background-image: url(' . $full_image_url[0] . ')">';
			}
			?>
				<div class="content-holder">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</div>
			</div>
			<?php endforeach; 
			wp_reset_postdata();?>
		
	</section>-->
