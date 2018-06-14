<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penblade
 */

?>
<div class="container-fluid">
  <nav class="bottom navbar navbar-expand-md navbar-light bg-faded">
   <?php
   wp_nav_menu([
     'menu'            => 'bottom',
     'theme_location'  => 'bottom',
     'container'       => 'div',
     'container_id'    => '',
     'container_class' => 'nav-left',
     'menu_id'         => false,
     'menu_class'      => 'navbar-nav',
     'depth'           => 2,
     'fallback_cb'     => 'bs4navwalker::fallback',
     'walker'          => new bs4navwalker()
   ]);
   ?>
      <div class="copyright-container">PenBlade © 2018</div>
   </nav>
</div>

<?php wp_footer(); ?>
<?php
  if( have_rows('main_modules') ): while ( have_rows('main_modules') ) : the_row(); if (get_row_layout() == 'hero' ): ?>
    <script src="<?php bloginfo('template_directory'); ?>/js/slider.min.js"></script>
  <?php endif; endwhile; endif; ?>
</body>
</html>
