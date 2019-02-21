<?php
/**
 * Theme: MWPRESS
 * Template for Index
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<?php require_once('partes/page-parte1.php'); ?>

	<?php if ( is_home() ) : ?>	  

		<?php require_once('partes/content/list-post-front.php'); ?>

	<?php endif; ?>
	
<?php require_once('partes/page-parte2.php'); ?>

