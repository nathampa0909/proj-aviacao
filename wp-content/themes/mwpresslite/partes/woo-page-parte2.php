<?php
/**
 * Theme: MWPRESS
 * Template for Archive
 * @package Multiwordpress
 */
?>
  </div>
  </div>


	
  <div id="<?php echo $sidebarr; ?>" class="column <?php if($mwpress_opt[''.$type.'page_display'] == "1-full"){echo "noneD";}  if($mwpress_opt[''.$type.'page_display'] == "2-left"){echo "noneD";}?>">
  
	 <aside class="woocommerce widget_price_filter">
	<div style="padding:20px">
     
		<?php dynamic_sidebar('woocommerce');  ?>
	 
  </div></aside>
  </div>

</div>
</div>
</div>
</section>
</div>	

	
<?php get_footer(); ?>