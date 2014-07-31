<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'roots'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif; ?>

<section class="link-boxes">
  <ul class="media-links">
    
    <?php $count = 0;
    while (have_posts()) : the_post(); 
    if($count%3==0) {
      echo "</ul></section><section class='link-boxes'><ul class='media-links'>";
    }
    ?>

    <li>
        <?php get_template_part('templates/content-links'); ?>
    </li>

    <?php
    $count++;
    
    endwhile; ?>
  </ul>
</section>

<?php if ($wp_query->max_num_pages > 1) : ?>
  <nav class="post-nav">
    <ul class="pager">
      <li class="previous"><?php next_posts_link(__('&larr; Older posts', 'roots')); ?></li>
      <li class="next"><?php previous_posts_link(__('Newer posts &rarr;', 'roots')); ?></li>
    </ul>
  </nav>
<?php endif; ?>