<?php
/**
 * Theme: MWPRESS
 * Template for footer
 * @package Multiwordpress
 */
?>	
	<?php wp_footer(); global $mwpress_opt;?>

	<footer  >
	
<?php if($mwpress_opt['footer_hab'] == true) : ?>
	<div id="FOOTER-CONTENT">
  <div  class=" <?php if($mwpress_opt['footer_full'] == 0) {echo "container";}?>" >
    <div class="columns">
  

  
<?php if($mwpress_opt['footer_disp'] == "footer4" or $mwpress_opt['footer_disp'] == "footer3" or $mwpress_opt['footer_disp'] == "footer2" or $mwpress_opt['footer_disp'] == "footer1" ) : ?>
	  <div class="column ">
			<?php if ( is_sidebar_active('footer-1') ) : ?>
				<div id="" class="widget-area-footer">
				<ul class="">
				<?php dynamic_sidebar('footer-1'); ?>
				</ul>
				</div>
			<?php endif; ?> 
	  </div>
 <?php endif; ?> 

<?php if($mwpress_opt['footer_disp'] == "footer4" or $mwpress_opt['footer_disp'] == "footer3" or $mwpress_opt['footer_disp'] == "footer2" ) : ?>

		 <div class="column ">
			<?php if ( is_sidebar_active('footer-2') ) : ?>
					<div id="" class="widget-area-footer">
					<ul class="">
					<?php dynamic_sidebar('footer-2'); ?>
					</ul>
					</div>
				<?php endif; ?> 
		  </div>
		  
  <?php endif; ?> 
  
 <?php if($mwpress_opt['footer_disp'] == "footer4" or $mwpress_opt['footer_disp'] == "footer3") : ?> 
	  <div class="column ">
		<?php if ( is_sidebar_active('footer-3') ) : ?>
				<div id="" class="widget-area-footer">
				<ul class="">
				<?php dynamic_sidebar('footer-3'); ?>
				</ul>
				</div>
			<?php endif; ?> 
	  </div>
 <?php endif; ?>   

 <?php if($mwpress_opt['footer_disp'] == "footer4" ): ?> 
	  <div class="column ">
		<?php if ( is_sidebar_active('footer-4') ) : ?>
				<div id="" class="widget-area-footer">
				<ul class="">
				<?php dynamic_sidebar('footer-4'); ?>
				</ul>
				</div>
			<?php endif; ?> 
				</div>
	 <?php endif; ?> 
</div>
</div>
</div>
 <?php endif; ?> 	
	
	<div id="FOOTER-BAR" class="content has-text-centered">
<?php  echo $mwpress_opt['footer_text']?>
    </div>

</footer>
	</body>
</html>
