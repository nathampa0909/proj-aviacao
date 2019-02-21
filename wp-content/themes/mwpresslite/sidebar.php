<?php
/**
 * Theme: MWPRESS
 * Template for Sidebar
 * @package Multiwordpress
 */
 ?>

<?php if ( is_sidebar_active('sidebar-1') ) : ?>
  <div id="" class="widget-area">
   <ul class="">
    <?php dynamic_sidebar('sidebar-1'); ?>
   </ul>
  </div>
<?php endif; ?>  
