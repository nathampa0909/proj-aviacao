<?php
/**
 * Theme: MWPRESS
 * Template for Archive
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

	<?php require_once('partes/page-parte1.php'); ?>
	 
	
	
	<?php if (is_tag()) : ?>
			 <?php require_once('partes/content/list-post-tags.php'); ?>
	<?php endif; ?>
	
	<?php if (!is_tag()) : ?>
			 <?php require_once('partes/content/list-post-arc.php'); ?>
	<?php endif; ?>

	<?php require_once('partes/page-parte2.php'); ?>

