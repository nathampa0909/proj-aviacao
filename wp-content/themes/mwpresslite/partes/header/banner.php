<?php
/**
 * Theme: MWPRESS
 * Template for Archive
 * @package Multiwordpress
 */
?>

<?php 




$corP = $mwpress_opt['config_colorP'];

if (is_category() or is_archive() or is_search()) {$bannerid = "BANNER-EXT-CAT"; $textshadow = 'tshadowW';} else {$bannerid = "BANNER-EXT"; $textshadow = 'tshadowB';}
if (is_home() and $mwpress_opt['front_banner_hab'] == true) {$bannerid = "BANNER-EXT-FRONT";} else {$bannerid = "BANNER-EXT";}
if (is_category() or is_archive() or is_search()) {$bannersize = "cat_banner_size";} else {$bannersize = "banner_size";}
if (is_category() or is_archive() or is_search() ) {$borderbottom = "border-bottom:3px solid ".$corP."";}
if (is_single() and $mwpress_opt['post_banner_size']['height'] != "") {$bannersize = 'post_banner_size';}
if($mwpress_opt['banner_size_this']['height'] != "" and $mwpress_opt['banner_size_this']['height'] != "px") {$bannersize = 'banner_size_this';}
if (!isset($borderbottom)){$borderbottom='';}
/*
if ( class_exists( 'WooCommerce' ) ) {
if (is_product_category() or is_shop() or is_cart()) { if($mwpress_opt['woo_cat_banner_font'] == true) {$textshadow = 'tshadowB2'; $tcolor = 'white';} else {$textshadow = 'tshadowW'; $tcolor = '';} $bannersize ='woo_cat_banner_size'; $borderbottom = ''; }
} else {$tcolor ='';}
*/
if ( class_exists( 'WooCommerce' ) ) {if (is_product_category() or is_shop() or is_cart()){$borderbottom = ''; $bannersize = 'woo_banner_size'; $bannerid = 'BANNER-EXT';}}

if(is_single() and $mwpress_opt['post_banner_img_t_color'] == true) {$textshadow = 'tshadowB2';}

?>

<?php
if(isset($mwpress_opt['banner_custom_this']) and isset($mwpress_opt['banner_custom_hab']) and $mwpress_opt['banner_custom_hab'] != 0) {$bannerid = 'BANNER-EXT-CUST';} 

if (is_single() or is_page()){
$bannertransp = $mwpress_opt['banner_transp'];
if($mwpress_opt['banner_transp_this'] != 0.00) {$bannertransp = $mwpress_opt['banner_transp_this'];} 
}

$bannerovercolor = $mwpress_opt['post_banner_overlay'];
if($mwpress_opt['banner_overlay'] != "transparent" ) {$bannerovercolor = $mwpress_opt['banner_overlay'];}
?>

<style>
#bnn2 {  position: relative;
  z-index: 5;}

#BANNER-WOO{position: absolute;
  z-index: -1;
    opacity: <?php echo $bannertransp; ?>;
 width: 100%;
    height: 100%;}

#<?php echo $bannerid; ?>{position: absolute;
  z-index: -1;
    opacity: <?php echo $bannertransp; ?>;
 width: 100%;
    height: 100%;
}


</style>

<?php
global $layoutpostG;
global $type_layout;
if (is_category() or is_archive() or is_search()){$tcolor ='#b5b9bb';}


if ($mwpress_opt['layout_pronto_this'] == 1 or ($layoutpostG == 1 and $mwpress_opt['layout_pronto_this'] == 'default') and ($mwpress_opt['banner_size_this']['height'] == "" or $mwpress_opt['banner_size_this']['height'] == "px")) {
$bannersize = 'layout_bannerh_pronto'; $mwpress_opt["layout_bannerh_pronto"]["height"] ='250px';}
if ($mwpress_opt['layout_pronto_this'] == 1 or ($layoutpostG == 1 and $mwpress_opt['layout_pronto_this'] == 'default'))
{	$mwpress_opt["post_banner_hab_tit"] = 'ok';
	$mwpress_opt["page_banner_hab_tit"] = 'ok';
	$mwpress_opt["postpage_banner_hab_tit_this"] = 'ok';
}


if ($mwpress_opt['layout_pronto_this'] == 2 or ($layoutpostG == 2 and $mwpress_opt['layout_pronto_this'] == 'default') and ($mwpress_opt['banner_size_this']['height'] == "" or $mwpress_opt['banner_size_this']['height'] == "px")) {
$bannersize = 'layout_bannerh_pronto'; $mwpress_opt["layout_bannerh_pronto"]["height"] ='450px'; }
if ($mwpress_opt['layout_pronto_this'] == 2 or ($layoutpostG == 2 and $mwpress_opt['layout_pronto_this'] == 'default'))
{
	$mwpress_opt["post_banner_hab_tit"] = false;
	$mwpress_opt["page_banner_hab_tit"] = false;
	$mwpress_opt["postpage_banner_hab_tit_this"] = false;
}

if ($mwpress_opt['layout_pronto_this'] == 4 or ($layoutpostG == 4 and $mwpress_opt['layout_pronto_this'] == 'default') and ($mwpress_opt['banner_size_this']['height'] == "" or $mwpress_opt['banner_size_this']['height'] == "px")) {
$bannersize = 'layout_bannerh_pronto'; $mwpress_opt["layout_bannerh_pronto"]["height"] ='450px';
}
if ($mwpress_opt['layout_pronto_this'] == 4 or ($layoutpostG == 4 and $mwpress_opt['layout_pronto_this'] == 'default'))	
{$mwpress_opt["post_banner_hab_tit"] = false;
	$mwpress_opt["page_banner_hab_tit"] = false;
	$mwpress_opt["postpage_banner_hab_tit_this"] = false;
}


if($mwpress_opt['banner_overlay'] != "transparent" or $mwpress_opt['post_banner_overlay'] != "transparent" ) {echo '<style>#BANNER-BG{background:'.$bannerovercolor.'}</style>';}
if($mwpress_opt['banner_full']) {echo'
	<div id="BANNER-BG" >
	
	<div id="bnn2" class="boxeD" style="'.$borderbottom.';min-height:'.$mwpress_opt["".$bannersize.""]["height"].';">
		<div id="'.$bannerid.'"></div>
		<div id="BANNER-INT" class=" '.$mwpress_opt["banner_full"].'" style=" padding-top:30px; padding-left:40px; min-height:'.$mwpress_opt["".$bannersize.""]["height"].'; color:'.$tcolor.' !important; ">
		'; 
$isshop = false;
				if ( class_exists( 'WooCommerce' ) ) { if(is_shop()) {$isshop = true;} }
					
					if (is_single() and $mwpress_opt["post_banner_hab_tit"] == false or is_page() and $mwpress_opt["page_banner_hab_tit"] == false or $mwpress_opt["postpage_banner_hab_tit_this"] == 'naoexibe' or $isshop == true) {
						
					}
					
					else {
						
					global $custom_title;
                                        global $front_title;
										$heading_title = wp_title( $custom_title, $front_title );
					if (is_single()) {$heading_title = get_the_title();}
					if (is_home()){$heading_title = __('Principal', 'mwpress');}
					echo '<h1 class="'.$textshadow.'" style="z-index:2; position: relative; " >' . $heading_title . '</h1>';

					if ( ! empty( $subtitle ) ) {
						echo '<div class="banner-description" ' . $sub_title_style . '>' . $subtitle . '</div>';
					}
					
					}
					
					
		
		
	echo '
		</div></div>
	</div>';

     } ?>