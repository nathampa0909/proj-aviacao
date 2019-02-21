<?php
/**
 * Theme: MWPRESS
 * Template for woocommerce
 * @package Multiwordpress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>


<li <?php post_class(); ?> style="margin-left:1%; margin-bottom:20px;box-sizing: border-box; width:30%; float:left;"  class="woo-pro mobplist">


	<div class="woo_produtotit">
	<?php do_action( 'woocommerce_shop_loop_item_title' ); ?>
	</div>
	<div class="boxeD">
	<div class="woo_produto" >
	<?php
 ?>
	
	<?php do_action( 'woocommerce_before_shop_loop_item' ); ?>
 <div style="  width:100%; heigth:auto; " class="woo-img-center-v"> <div class="woo-img-center-zoom-v">
 <?php do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
 </div></div>
	<?php 
	
?>
	</div>
<div  style="background:#f3f3f3; padding:20px">
	<?php 
	do_action( 'woocommerce_after_shop_loop_item_title' );

	
	?>
	</div>
	<div style="text-align:center; padding-bottom:10px;" >
	<?php do_action( 'woocommerce_after_shop_loop_item' );?></div>
	</div>
</li>

