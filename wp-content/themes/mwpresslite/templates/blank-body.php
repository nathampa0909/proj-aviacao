<?php
/**
 * Theme: MWPRESS
 * Template Name: Blank Body
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>



	
<?php 
$type = "";
$bg = "ALL-BODY";
$cont = "CONTENT-P";
$sidebarl = "SIDEBAR-LEFT";
$sidebarr = "SIDEBAR-RIGHT";
if ($mwpress_opt['post_page_hab'] == 1) {
if(is_single()) {
	
	$type = "post_";
	$bg = "ALL-BODY-POST";
	$cont = "CONTENT-P-POST";
	$sidebarl = "SIDEBAR-LEFT-POST";
	$sidebarr = "SIDEBAR-RIGHT-POST";
}}

if ($mwpress_opt['page_page_hab'] == 1) {
if(is_page()) {
	
	$type = "page_";
	$bg = "ALL-BODY-PAGE";
	$cont = "CONTENT-P-PAGE";
	$sidebarl = "SIDEBAR-LEFT-PAGE";
	$sidebarr = "SIDEBAR-RIGHT-PAGE";
}}

$sidebarcust = $mwpress_opt['sidebar'];
$sidebarcust2 = $mwpress_opt['sidebar2'];
  ?>
 
<div id="<?php echo $bg; ?>" >
<style>
#CONTEUDO {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
}
</style>
<div id="CONTEUDO"  class="">
		
	<?php  
	while ( have_posts() ) : the_post();
	
	the_content(); 
	
	endwhile;
	?>
</div>
</div>
	
<?php get_footer(); ?>

