<?php while (have_posts()) : the_post(); ?>

  <?php $thumbnail_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'thumbnail');
   echo '<img class="media-object" src="' . $thumbnail_image_url[0] . '" alt="">' ?> 
  
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta-links'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
    <footer>
      <?php wp_link_pages(array('before' => '<nav class="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
    </footer>
    <?php comments_template('/templates/comments.php'); ?>
  </article>

<?php endwhile; ?>