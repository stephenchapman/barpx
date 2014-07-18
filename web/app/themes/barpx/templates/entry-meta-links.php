<time class="published" datetime="<?php echo get_the_time('c'); ?>"><?php echo get_the_date(); ?></time>
<p><?php echo get_post_meta(get_the_ID(), 'media_source', true); ?></p>
<a class="article-link" href="<?php echo get_post_meta(get_the_ID(), 'media_url', true); ?>">Read article <span class="glyphicon glyphicon-arrow-right"></span></a>
