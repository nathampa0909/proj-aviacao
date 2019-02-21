<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */
?> 
 </div>
  </div>


	
  <div id="<?php echo $sidebarr; ?>" class="column <?php if($mwpress_opt[''.$type.'page_display'] == "1-full"){echo "noneD";}  if($mwpress_opt[''.$type.'page_display'] == "2-left"){echo "noneD";}?>">
    <aside class="">
	
	<div style="padding:20px 15px">
     
		<?php 	if(!$mwpress_opt['sidebar']){
	dynamic_sidebar('sidebar-1');}
    else {dynamic_sidebar($sidebarcust);}
	?>
	 
  </div></aside>
  </div>

</div>
</div>
</div>
</section>
</div>	

	
<?php get_footer(); ?>