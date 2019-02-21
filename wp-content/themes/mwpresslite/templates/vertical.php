<?php
/**
 * Theme: MWPRESS
 * Template Name: Posts Vertical
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<?php require_once(get_template_directory().'/partes/page-parte1.php'); ?>

	

		<?php require_once(get_template_directory().'/partes/content/list-post-front-v.php'); ?>


	
<?php require_once(get_template_directory().'/partes/page-parte2.php'); ?>

