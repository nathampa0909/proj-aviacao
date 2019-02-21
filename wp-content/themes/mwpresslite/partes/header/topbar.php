<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */


// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php 

if($mwpress_opt['top_sch'] == true and $mwpress_opt['config_hab_scheme'] == true ) {$bg = $mwpress_opt['config_colorP'];} else {$bg = "";}
if ($mwpress_opt['top_full'] == 0){$tpfull = "container";} else {$tpfull = "";}
		
	if($mwpress_opt['top_hab_this']) {if($mwpress_opt['top_hab_this'] != 2) {$tophab = $mwpress_opt['top_hab_this'];} } if($mwpress_opt['top_hab_this'] == 2){$tophab = $mwpress_opt['top_hab'];}

		
		if(isset($tophab) and $tophab == 1){echo'
		<div id="TOPBAR-EXT" class="topobarM" style="background:'.$bg.';text-align:'.$mwpress_opt['top_align'].';font-size:'.$mwpress_opt['top_font_size']['height'].'; color:'.$mwpress_opt['top_font_color'].'; height:'.$mwpress_opt['top_size']['height'].';">
		<div id="TOPBAR-INT" class=" topobarP '.$tpfull.'" style="background:'.$bg.';min-height:'.$mwpress_opt['top_size']['height'].';" > ';
		
		
		if($mwpress_opt['top_menu_select'] != '') {require_once('menu-top-bar.php');}
		if ($mwpress_opt['top_email'] != '') {echo '<span class="mobtop"><i class="fa fa-envelope" aria-hidden="true" style="margin-right:7px"></i>'.$mwpress_opt['top_email'].'<span style="margin-right:10px"></span></span>';}
		if ($mwpress_opt['top_tel'] != '') {echo '<span class="mobtop"><i class="fa fa-phone" aria-hidden="true" style="margin-right:7px"></i>'.$mwpress_opt['top_tel'].'</span>';}
		echo''.$mwpress_opt['top_content'].''; ?>
		
		
		<?php if($mwpress_opt['top_hab_social'] == true) : ?>
		
	<span id="topsocial_tt" style="float:right;">
		<?php 
		$typesocial = "white";
		if(isset($mwpress_opt['social_face']) and $mwpress_opt['social_face'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_face'].'" target="_blank"><img alt="facebook" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_facebook.png"></a>' ;}
		if(isset($mwpress_opt['social_twitter'])  and $mwpress_opt['social_twitter'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_twitter'].'" target="_blank"><img alt="twitter" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_twitter.png"></a>' ;}
		if(isset($mwpress_opt['social_wapp']) and $mwpress_opt['social_wapp'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_wapp'].'" target="_blank"><img alt="whatsapp" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_whatsapp.png"></a>' ;}
		if(isset($mwpress_opt['social_skype']) and $mwpress_opt['social_skype'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_skype'].'" target="_blank"><img alt="skype" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_skype.png"></a>' ;}
		if(isset($mwpress_opt['social_insta']) and $mwpress_opt['social_insta'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_insta'].'" target="_blank"><img alt="instagram" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_insta.png"></a>' ;}
		if(isset($mwpress_opt['social_gmais']) and $mwpress_opt['social_gmais'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_gmais'].'" target="_blank"><img alt="google+" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_gmais.png"></a>' ;}
		if(isset($mwpress_opt['social_vimeo']) and $mwpress_opt['social_vimeo'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_vimeo'].'" target="_blank"><img alt="vimeo" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_vimeo.png"></a>' ;}
		if(isset($mwpress_opt['social_youtube']) and $mwpress_opt['social_youtube'] != "") { echo'<a class="topsocial" href="'.$mwpress_opt['social_youtube'].'" target="_blank"><img alt="youtube" class="vaM" src="'.get_template_directory_uri().'/assets/img/social_icons/'.$typesocial.'/icon_youtube.png"></a>' ;}
	    ?>
		
	</span>
	 <?php endif; ?>  
	
	 <?php if ( class_exists( 'WooCommerce' ) and $mwpress_opt['woo_cart_hab'] == true or $mwpress_opt['woo_cart_hab_this'] == 1) {
	$urlcart = WC_Cart::get_cart_url(); 
	
	
	
	echo '<a href="'.$urlcart.'"><i class="carrinho_icon fa fa-shopping-cart fa-lg" aria-hidden="true" style="margin-right:30px; "></i></a>';
}?>
	
		
<?php  echo'</div></div>';   } ?>