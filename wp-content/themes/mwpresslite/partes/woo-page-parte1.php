<?php
/**
 * Theme: MWPRESS
 * Template for Archive
 * @package Multiwordpress
 */
?>
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


  ?>
 
<div id="<?php echo $bg; ?>" style="padding:1px 0;">
<div id="CONTEUDO"  class="">
    <div class="<?php echo $mwpress_opt[''.$type.'page_full']; ?> is-widescreen boxeD" style="background:#fff;">
	
	


<div class="columns is-gapless" >

<?php if($mwpress_opt[''.$type.'page_display'] == "3-left-right") : ?>
<div id='<?php echo $sidebarl; ?>' class='column'>
<div style='padding:30px'>

<?php if ( is_sidebar_active('woocommerce') ) : ?>
  <div id="" class="widget-area">
   <ul class="">
    <?php dynamic_sidebar('woocommerce'); ?>
   </ul>
  </div>
<?php endif; ?> 
</div></div>
<?php endif; ?> 


<?php if($mwpress_opt[''.$type.'page_display'] == "2-left") : ?>
<div id='<?php echo $sidebarl; ?>' class='column'><div style='padding:30px'>

<?php if ( is_sidebar_active('woocommerce') ) : ?>
  <div id="" class="widget-area">
   <ul class="">
    <?php dynamic_sidebar('woocommerce'); ?>
   </ul>
  </div>
<?php endif; ?> 
</div></div>
<?php endif; ?> 



<div  class="column  <?php if($mwpress_opt[''.$type.'page_display'] == "3-left-right"){echo "is-half";}  if($mwpress_opt[''.$type.'page_display'] == "2-right"){echo "is-three-quarters";} if($mwpress_opt[''.$type.'page_display'] == "2-left"){echo "is-three-quarters";}?>" style="background:#fff;">
   
	<div id="<?php echo $cont; ?>" class="cont-p-int" style="display:block; min-height:100%;">