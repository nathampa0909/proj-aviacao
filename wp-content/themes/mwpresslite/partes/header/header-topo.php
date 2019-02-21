<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */

?>

<?php 
$site_url = network_site_url( '/' );
if($mwpress_opt['logo_align_v_this'] == 'default' ){$logoalignv = $mwpress_opt['logo_align_v']; } else {$logoalignv = $mwpress_opt['logo_align_v_this'];} ?>
<?php if($mwpress_opt['logo_align_h_this'] == 'default' ){$logoalignh = $mwpress_opt['logo_align_h']; } else {$logoalignh = $mwpress_opt['logo_align_h_this'];} ?>

<div   id="HEADER-INT"  class=" headerint <?php echo $mwpress_opt['header_full']; ?>" style=" <?php if($mwpress_opt['header_full'] == "container is-fluid") echo'float:'.$logoalignv.''; ?> ;display: table;  text-align: <?php echo $logoalignv;?>; <?php if($mwpress_opt['header_size_this']['height'] != "") {echo 'height:'.$mwpress_opt['header_size_this']['height'].''; } else {echo 'height:'.$mwpress_opt['header_size']['height'].''; }?>; margin: <?php echo $mwpress_opt['header_margin_top']['height'];?> auto;">
				
				
					<div id="logo"  style="width:30%; display:table-cell; vertical-align:<?php echo $logoalignh;?>">
					
					<?php  if($mwpress_opt['logo_this']) {if($mwpress_opt['logo_this']['url'] != '') $logo = $mwpress_opt['logo_this']['url']; if($mwpress_opt['logo_this']['url'] == '') $logo = $mwpress_opt['logo']['url'];} else {$logo = $mwpress_opt['logo']['url'];}?>
					
						<a href="<?php echo $site_url; ?>"><img   alt="logo" width="<?php echo $mwpress_opt['logo_size_w'];?>" height="<?php echo $mwpress_opt['logo_size_h'];?>" src="<?php echo $logo;?>" style="min-height:<?php echo $mwpress_opt['logo_size_h'];?>px;"> </a>
						</div>
					
									
					
					<?php if($mwpress_opt['menu_position_this']) {if($mwpress_opt['menu_position_this'] != 'default') {$menuPosition = 'menu_position_this';} }  if($mwpress_opt['menu_position_this'] == 'default') {$menuPosition = 'menu_position';} 
					
					if($mwpress_opt[$menuPosition] == "menu-header") {require_once('menu-header-logo.php');} ?>
				
	
		</div>