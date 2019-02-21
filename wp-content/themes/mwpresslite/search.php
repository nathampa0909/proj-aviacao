<?php
/**
 * Theme: MWPRESS
 * Template for Search
 * @package Multiwordpress
 */
// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

	<?php require_once('partes/page-parte1.php'); ?>


	<?php require_once('partes/content/list-post-search.php'); ?>
	<?php require_once('partes/page-parte2.php'); ?>

