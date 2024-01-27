<?php /** The sidebar containing the main widget area. */ ?>
<aside class="sidebar widget-area moving-line" role="complementary">
    <?php
      $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
      if (strpos($url,'zvacseniep') !== false) {
        dynamic_sidebar( 'sidebar-1' );
      } else {
        get_template_part('emailcol');
        dynamic_sidebar( 'sidebar-1' );
        get_sidebar('thulinks');
      }
    ?>
</aside>