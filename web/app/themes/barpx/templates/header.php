<header class="banner" role="banner">
  <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>/"><?php bloginfo('name'); ?></a>
      </div>

      <div class="collapse navbar-collapse" id="navbar-1">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
          endif;
        ?>
        <button class="btn btn-primary navbar-btn navbar-right" type="button">Make A Reservation</button>
      </div>
    </div>
  </nav>
</header>
