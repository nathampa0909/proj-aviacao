<?php
/**
 * Theme: MWPRESS
 * Template for searchform
 * @package Multiwordpress
 */
 ?>
<form role="search" method="get" id="searchform"  action="<?php echo esc_url( home_url( '/' ) ); ?>">
    
	<?php global $mwpress_opt; ?>
	
	<div class="field has-addons">
  <div class="control">
    <input class="input" value="<?php echo get_search_query(); ?>" name="s" id="s" type="text" placeholder="<?php echo __('Procurar no site', 'mwpress'); ?>">
  </div>
  <div class="control">
    <a class="button" style="color:white" onclick="document.getElementById('searchform').submit();">
      <?php echo __('Procurar', 'mwpress'); ?>
    </a>

</div>
	

</form>