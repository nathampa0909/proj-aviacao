<?php
/**
 * Theme: MWPRESS
 * Template for Header
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>




<!DOCTYPE html>
<html itemscope itemtype="http://schema.org/WebPage" <?php language_attributes(); ?> >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<meta name="viewport" content="width=device-width, user-scalable=yes">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<?php 
global $mwpress_opt;
while ( have_posts() ) : the_post();

if ($mwpress_opt['seo_meta_this'] != '') {$metadesc = $mwpress_opt['seo_meta_this'];} else { 
	$excerptmeta = get_the_content();
	$excerptmeta = preg_replace(" (\[.*?\])",'',$excerptmeta);
	$excerptmeta = strip_shortcodes($excerptmeta);
	$excerptmeta = strip_tags($excerptmeta);
	$excerptmeta = substr($excerptmeta, 0, 135);
	$excerptmeta = substr($excerptmeta, 0, strripos($excerptmeta, " "));
	$excerptmeta = trim(preg_replace( '/\s+/', ' ', $excerptmeta));
	$metadesc = $excerptmeta;}
 
 endwhile; ?>


<?php

$yoast_meta = get_post_meta($post->ID, '_yoast_wpseo_metadesc', true);
if (!$yoast_meta) : ?>
<meta content="<?php echo $metadesc;?>" name="description">	
<?php endif; ?>		
<?php 
$site_url = network_site_url( '/' );
$namesite = get_bloginfo( 'name' );
$descsite = get_bloginfo( 'description' );

?>
<?php 

if(is_home() || is_front_page() ) {$metatitle = $namesite.' - '.$descsite;}


else {
	if (!$yoast_meta) {$metatitle = wp_title('-', false, 'right'). $namesite;}
	if ($yoast_meta) {$metatitle = wp_title('-', false, 'right');}
}
 ?>
<title><?php echo $metatitle;?></title>



<?php if( false === get_option( 'site_icon', false ) ) :
    // Show favicon
?>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<?php endif; ?>

<?php

 wp_head(); global $mwpress_opt;	?>
 <link rel="stylesheet" href="<?php echo get_template_directory_uri()."/inc/font/css/font-awesome.css"; ?>">


<?php include('style_dinamico.php'); ?>

<script>
rounded = "";
var rounded = "<?php echo $mwpress_opt['menu_rounded'] ?>";
jQuery(document).ready(function() {
 if(rounded == "roundeD") {
jQuery('ul#cssmenu li').addClass( 'roundeD'); 
jQuery('ul.sub-menu > li > a').removeClass( 'roundeD'); 
jQuery('#cssmenu > ul > li > a').css('margin-right', '10px');

}});
</script>
<script>
// ===== Scroll to Top ==== 
jQuery(document).ready(function() {
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
});
</script>

</head>

<body id="<?php if(isset($mwpress_opt['page_bg_this']['background-color']) or isset($mwpress_opt['page_bg_this']['background-image'])){echo 'ALL-SITE-THIS';} else {echo 'ALL-SITE';} ?>" <?php body_class(); ?>>

<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
<div id="HEADER-BOX-BG"> 
<div id="HEADER-BOX" class="<?php 

	if($mwpress_opt['header_box_geral_this']) {if($mwpress_opt['header_box_geral_this'] != 2) {$boxhab = $mwpress_opt['header_box_geral_this'];} } if($mwpress_opt['header_box_geral_this'] == 2){$boxhab = $mwpress_opt['header_box_geral'];}

if($boxhab == 1) {echo 'container';} ?>">
	<div id="HEADER-EXT"  class="<?php if($mwpress_opt['header_ext_this']){if($mwpress_opt['header_ext_this']['background-color'] != 'transparent' and $mwpress_opt['header_ext_this']['background-color'] != '' or $mwpress_opt['header_ext_this']['background-image'] != ''){echo 'headerext_this';} else {echo 'headerext';}} else {echo 'headerext';}  ?> <?php if($mwpress_opt['header_shadow'] == 1) {echo 'shadow2';} ?>" style="z-index:999999; text-align: <?php echo $mwpress_opt['logo_align_v'];?>; margin: 0 auto; position:relative; ">
		
			<?php require_once('partes/header/topbar.php'); ?>

			<?php
				if($mwpress_opt['menu_position_this'] != 'default') {$menuPosition = 'menu_position_this';} else {$menuPosition = 'menu_position';}
				
				
				if($mwpress_opt[$menuPosition] == "menu-tp") {require_once('partes/header/menu.php');}

			 ?>
					
					
			<div id="menuLocator"></div>

				
					
					<?php 
					global $layoutpostG;
						if($mwpress_opt['header_hab_this']) {if($mwpress_opt['header_hab_this'] != 2 ) {$headerhab = $mwpress_opt['header_hab_this'];} } if($mwpress_opt['header_hab_this'] == 2){$headerhab = $mwpress_opt['header_hab'];}

					if(isset($headerhab) and $headerhab == 1 and $mwpress_opt['layout_pronto_this'] != 4 and $layoutpostG != 4) {require_once('partes/header/header-topo.php');} ?>
				
			
	</div>
	
	<div id="mobmenu" class="<?php if($mwpress_opt['header_ext_this']){if($mwpress_opt['header_ext_this']['background-color'] != '' or $mwpress_opt['header_ext_this']['background-image'] != ''){echo 'headerext_this';}} else {echo 'headerext';} ?>">
	
		<div id="mmob">
	<?php require_once('partes/header/menumob/menumob.php'); ?>
 </div>


	
					
					<?php  if($mwpress_opt['logo_this']) {if($mwpress_opt['logo_this']['url'] != '') $logo = $mwpress_opt['logo_this']['url']; if($mwpress_opt['logo_this']['url'] == '') $logo = $mwpress_opt['logo']['url'];} else {$logo = $mwpress_opt['logo']['url'];}?>
					
						<p style="text-align:center; margin-top:0px;"><a href="<?php echo $site_url; ?>"><img   alt="logo" width="<?php echo $mwpress_opt['logo_size_w'];?>" height="<?php echo $mwpress_opt['logo_size_h'];?>" src="<?php echo $logo;?>" style="min-height:<?php echo $mwpress_opt['logo_size_h'];?>px;"> </a>
						</p>
	
	</div>

	<?php
if($mwpress_opt['menu_position_this'] != 'default') {$menuPosition = 'menu_position_this';} else {$menuPosition = 'menu_position';}
	if($mwpress_opt[$menuPosition] == "menu-bt")	 {require_once('partes/header/menu.php');} ?>
		
<?php 
if(!is_search()){
$my_slider        = get_post_meta($post->ID, 'slider_select', true); 
  if ( ( function_exists("putRevSlider") ) && ( !empty($my_slider) ) ) { 
    putRevSlider  ( $my_slider ); 
    // or you can user standard do_shortcode('[rev_slider ' . $my_slider. ']');
}};?>
	<?php 
	
	
	global $layoutpostG;
	
	if ($mwpress_opt['banner_hab'] == 1) {$reqb = true;} 
	if (is_single() and $mwpress_opt['post_banner_hab'] == 0) {$reqb= false;} 
	if (is_single() and $mwpress_opt['post_banner_hab'] == 1) {$reqb= true;} 
	if (is_page() and $mwpress_opt['page_banner_hab'] == 0) {$reqb=false;} 
	if (is_page() and $mwpress_opt['page_banner_hab'] == 1) {$reqb=true;} 
	if (is_home() and $mwpress_opt['front_banner_hab'] == 0) {$reqb=false;} 
	if ($mwpress_opt['banner_hab_this'] == 1) {$reqb = true;}
	if ($mwpress_opt['banner_hab_this'] == 0) {$reqb = false;}
	
	
	if ($mwpress_opt['layout_pronto_this'] == 1) {$reqb = true;}
	if ($mwpress_opt['layout_pronto_this'] == 2) {$reqb = true;}
	if ($mwpress_opt['layout_pronto_this'] == 3) {$reqb = false;}
	if ($mwpress_opt['layout_pronto_this'] == 4) {$reqb = true;}
	
	
	if ($mwpress_opt['woo_banner_hab'] == false) {$reqb = false;}
	
	if($layoutpostG == 1 and $mwpress_opt['layout_pronto_this'] == 'default') {$reqb = true;}
	if($layoutpostG == 2 and $mwpress_opt['layout_pronto_this'] == 'default') {$reqb = true;}
	if($layoutpostG == 3 and $mwpress_opt['layout_pronto_this'] == 'default') {$reqb = false;}
	if($layoutpostG == 4 and $mwpress_opt['layout_pronto_this'] == 'default') {$reqb = true;}
	
   	if ( class_exists( 'WooCommerce' ) ) {if(is_product() || is_product_category()){$reqb = false;}}
   
   
    if($reqb == true) {$reqb = 'partes/header/banner.php';}
    if($reqb == false) {$reqb = 'partes/header/none.php';}
    
	require_once($reqb);

	?>
	
</div>	
</div>	
<!-- /header -->
