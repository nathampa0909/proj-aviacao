<?php
/**
 * Theme: MWPRESS
 * Template for Single
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php get_header(); ?>

<?php require_once('partes/page-parte1.php'); ?>

	 
	  
	 <article>
	 	<?php
	 	global $custom_title;
	 	global $front_title;
		global $layoutpostG;
		global $type_layout;
	while ( have_posts() ) : the_post();
				if ($layoutpostG != 'custom' or ($layoutpostG == 'custom' and $mwpress_opt['page_hab_tit'] == 1) or $mwpress_opt['layout_pronto_this'] == 'custom' and $mwpress_opt['postpage_hab_tit_this'] == 1){
				if($mwpress_opt['page_hab_tit'] == true and $mwpress_opt['postpage_hab_tit_this'] != 0 or $mwpress_opt['page_hab_tit'] == false and $mwpress_opt['postpage_hab_tit_this'] == 1 and $mwpress_opt['layout_pronto_this'] != 1 or $mwpress_opt['layout_pronto_this'] == 2 or $mwpress_opt['layout_pronto_this'] == 3 or $mwpress_opt['layout_pronto_this'] == 4 or $mwpress_opt['layout_pronto_this'] == 'default' and(($layoutpostG != 1 or $layoutpostG == 2 or $layoutpostG == 3 or $layoutpostG == 4))) {
					$heading_title = wp_title( $custom_title, $front_title );

					echo '<div class="headertit"><span class="h1span corS"><h1 class="h1t h1tt h1ttpd">' . $heading_title . '</h1></span></div>';
				}} else {echo '<h1 style="visibility:hidden; position:absolute">' .  get_the_title() . '</h1>';} ?>
					
		
					<?php $time = get_the_time("j/m/y g:i A"); $autor = get_the_author();?>
					
					<?php if($mwpress_opt['page_hab_date'] == true and $mwpress_opt['post_hab_date_this'] != 0 or $mwpress_opt['page_hab_date'] == false and $mwpress_opt['post_hab_date_this'] == 1) {echo'<span class="metapost2"> <i class="fa fa-clock-o"></i> '.__('publicado em:', 'mwpress').''.$time.' </span><span class="metaSep"></span>' ; } ?>  
					<?php if($mwpress_opt['page_hab_autor'] == true and $mwpress_opt['post_hab_autor_this'] != 0 or $mwpress_opt['page_hab_autor'] == false and $mwpress_opt['post_hab_autor_this'] == 1) {echo'<span class="metapost2">'.__('por:', 'mwpress').' <i class="fa fa-user" class="mr20"></i> '.$autor.'   </span>';} ?>
					
					
		<div id="cont-page-wp" > <?php
			 the_content(); 	
				?>
				</div>
				<br>
				




 <div style="clear:both"></div>
 <?php
 
	// Get current page URL 
	$postUrl = urlencode(get_permalink());
 
	// Get current page title
	$postTitle = str_replace( ' ', '%20', get_the_title());
	$twitterURL = 'https://twitter.com/intent/tweet?text='.$postTitle.'&amp;url='.$postUrl.'&amp;via=Crunchify';
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$postUrl;
	$googleURL = 'https://plus.google.com/share?url='.$postUrl;
//$bufferURL = 'https://bufferapp.com/add?url='.$postUrl.'&amp;text='.$postTitle;
	$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$postUrl.'&amp;title='.$postTitle;
	$whatsappURL = 'whatsapp://send?text='.$postTitle . ' ' . $postUrl;
 
 ?> 

				
				<?php
				
				if($mwpress_opt['page_hab_mod'] == true and $mwpress_opt['post_hab_mod_this'] != 0 or $mwpress_opt['page_hab_mod'] == false and $mwpress_opt['post_hab_mod_this'] == 1) {
				$u_time = get_the_time('U'); 
					$u_modified_time = get_the_modified_time('U'); 
					if ($u_modified_time >= $u_time + 86400) { 
				echo "<p><span class='metapost2' ><i class='fa fa-clock-o' style='margin-right:5px'></i>".__('A última modificação foi feita em:', 'mwpress')."";  
					the_modified_time('F jS, Y'); 
					echo " as "; 
					the_modified_time(); 
					echo "</span></p> <br>"; 
					} }
			
			?>
				
			
			<?php
			// End the loop.
				endwhile; 
	
	
	?>

<div style="clear:both"></div>
	
 </article>	  
	  
	   
<?php require_once('partes/page-parte2.php'); ?>

