<?php
/**
 * Theme: MWPRESS
 * Template for woocommerce
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<?php require_once('partes/woo-page-parte1.php'); ?>

	 
	<div class="woocommerce">  

	
<?php woocommerce_content(); ?>
	 </div>
	   
	   
<?php require_once('partes/woo-page-parte2.php'); ?>

