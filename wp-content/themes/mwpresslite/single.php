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
	

					if ($layoutpostG != 'custom' or ($layoutpostG == 'custom' and $mwpress_opt['post_hab_tit'] == 1) or $mwpress_opt['layout_pronto_this'] == 'custom' and $mwpress_opt['postpage_hab_tit_this'] == 1){
				if($mwpress_opt['post_hab_tit'] == true and $mwpress_opt['postpage_hab_tit_this'] != 0 or $mwpress_opt['post_hab_tit'] == false and $mwpress_opt['postpage_hab_tit_this'] == 1 and $mwpress_opt['layout_pronto_this'] != 1 or $mwpress_opt['layout_pronto_this'] == 2 or $mwpress_opt['layout_pronto_this'] == 3 or $mwpress_opt['layout_pronto_this'] == 4 or $mwpress_opt['layout_pronto_this'] == 'default' and(($layoutpostG != 1 or $layoutpostG == 2 or $layoutpostG == 3 or $layoutpostG == 4))) {
					$heading_title = wp_title( $custom_title, $front_title );

					echo '<div class="headertit"><span class="h1span corS"><h1 class="h1t h1tt h1ttpd">' . $heading_title . '</h1></span></div>';
				}}?>
					
		
					<?php $time = get_the_time("j/m/y g:i A"); $autor = get_the_author();?>
					
					<?php if($mwpress_opt['post_hab_date'] == true and $mwpress_opt['post_hab_date_this'] != 0 or $mwpress_opt['post_hab_date'] == false and $mwpress_opt['post_hab_date_this'] == 1) {echo'<span class="metapost2"> <i class="fa fa-clock-o"></i> '.__('publicado em:', 'mwpress').''.$time.' </span><span class="metaSep"></span>' ; } ?>  
					<?php if($mwpress_opt['post_hab_autor'] == true and $mwpress_opt['post_hab_autor_this'] != 0 or $mwpress_opt['post_hab_autor'] == false and $mwpress_opt['post_hab_autor_this'] == 1) {echo'<span class="metapost2">'.__('por:', 'mwpress').' <i class="fa fa-user" class="mr20"></i> '.$autor.'   </span>';} ?>
					
					<?php // categorias

			   if($mwpress_opt['post_hab_cat'] == true and $mwpress_opt['post_hab_cat_this'] != 0 or $mwpress_opt['post_hab_cat'] == false and $mwpress_opt['post_hab_cat_this'] == 1) {
				
				if($cats = get_the_category( $post->ID ) ) {
				echo '<span class="metaSep"></span>';
				foreach( $cats as $cat ) {
					$colorcat = get_term_meta($cat->cat_ID, 'color', true);
						if($mwpress_opt['post_hab_cat_color'] == true and $colorcat != "") {
							$cortags = get_term_meta($cat->cat_ID, 'color', true);
						} 
						else {$cortags = $mwpress_opt['post_cor_tags'];}
						echo '<span class="mwtag" style="margin:5px 10px 5px 0px ; background:'.$cortags.';"><a style="color:white; " href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></span>';
			   }
			  
			   }}?> </span>
					
					<?php if($mwpress_opt['post_hab_date'] == true or $mwpress_opt['post_hab_autor'] == true or $mwpress_opt['post_hab_cat'] == true) {echo'
					<br>
					'; } ?>

					<?php if ( ! empty( $subtitle ) ) {
						echo '<div class="banner-description" ' . $sub_title_style . '>' . $subtitle . '</div>';
					} 
?>
		<div id="cont-post-wp" style="padding:20px 40px 20px 20px;"> <?php
			 the_content(); 	
				?>
				
				<?php if($mwpress_opt['review_hab_this'] == true){ require_once('partes/content/single-review.php'); }?>
				</div>
				<br>
				
				<br>
				<?php
				
				if($mwpress_opt['post_hab_mod'] == true and $mwpress_opt['post_hab_mod_this'] != 0 or $mwpress_opt['post_hab_mod'] == false and $mwpress_opt['post_hab_mod_this'] == 1) {
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
<?php // Tags

if($mwpress_opt['post_hab_tags'] == true and $mwpress_opt['post_hab_tags_this'] != 0 or $mwpress_opt['post_hab_tags'] == false and $mwpress_opt['post_hab_tags_this'] == 1) {
                if( $tags = get_the_tags() ) {
		echo '<div class="tags has-addons" style="float:left; margin-right:20px;">
  <span class="tag">Post</span>
  <span class="tag" style="background:'.$mwpress_opt['post_cor_tags'].'; color:whitesmoke">Tags</span>
</div> <div class="tags" style="float:left">';
			foreach( $tags as $tag ) {
       
        echo '<span class="tag" style="background:'.$mwpress_opt['post_cor_tags'].';"><a style="color:white" href="' . get_term_link( $tag, $tag->taxonomy ) . '">#' . $tag->name . '</a></span>';
    
	
			}
			echo'</div>';
}}?>


 <div style="clear:both"></div>
 <?php
 if ($mwpress_opt['post_hab_social'] == true and $mwpress_opt['post_hab_social_this'] !=0 or ($mwpress_opt['post_hab_social'] == false and $mwpress_opt['post_hab_social_this'] == 1)) : ?>

<?php // Get current page URL 
	$postUrl = urlencode(get_permalink());
 
	// Get current page title
	$postImage = get_the_post_thumbnail_url();
	$postTitle = str_replace( ' ', '%20', get_the_title());
	$twitterURL = 'https://twitter.com/intent/tweet?text='.$postTitle.'&amp;url='.$postUrl.'&amp;via=Crunchify';
	$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$postUrl;
	$googleURL = 'https://plus.google.com/share?url='.$postUrl;
//$bufferURL = 'https://bufferapp.com/add?url='.$postUrl.'&amp;text='.$postTitle;
	$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$postUrl.'&amp;title='.$postTitle;
	$whatsappURL = 'whatsapp://send?text='.$postTitle . ' ' . $postUrl;
	$pintURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$postUrl.'&title='.$postTitle.'&source='.$postImage.'';
 ?> 
 
 <style>
#share{width:100%;padding-top:20px;margin-bottom:30px;margin-top:20px auto;text-align:center}#share a{width:35px;height:35px;display:inline-block;margin:4px;border-radius:50%;font-size:18px;color:#fff;opacity:.75;transition:opacity .15s linear}#share a:hover{opacity:1}#share i{position:relative;top:40%;transform:translateY(-50%)}.facebook{background:#3b5998}.twitter{background:#55acee}.googleplus{background:#dd4b39}.linkedin{background:#0077b5}.pinterest{background:#cb2027}
 </style>
 <div id="share">
  <a class="facebook" href="<?php echo $facebookURL; ?>" target="blank"><i class="fa fa-facebook"></i></a>
  <a class="twitter" href="<?php echo $twitterURL; ?>" target="blank"><i class="fa fa-twitter"></i></a>
  <a class="googleplus" href="<?php echo $googleURL; ?>" target="blank"><i class="fa fa-google-plus"></i></a>
  <a class="linkedin" href="<?php echo $linkedInURL; ?>" target="blank"><i class="fa fa-linkedin"></i></a>
  <a class="pinterest" href="<?php echo $pintURL; ?>" target="blank"><i class="fa fa-pinterest-p"></i></a>
</div>

<?php endif; ?>
				
			
			<?php
			// End the loop.
				endwhile; 
	
	
	?>
<style>#imgath img {border-radius: 50%;}</style>
	<?php if($mwpress_opt['post_hab_autbio'] == true and $mwpress_opt['post_hab_autbio_this'] != 0 or $mwpress_opt['post_hab_autbio'] == false and $mwpress_opt['post_hab_autbio_this'] == 1) { ?>

	<div style=" margin:0 auto; border:1px solid #eaeaea; display:table; width:90%;">

<div id="imgath" style="padding:20px;float:left; background:#eaeaea; width:20%">
			<?php echo get_avatar( get_the_author_meta('user_email'), '120', '' ); ?>
			
			</div>


<div  id="autbox" style="float:left;padding:20px;  width:80%;">

<h3 class="corPriC " style="margin-bottom:15px; font-family:oswald; font-size:17px"><?php  the_author_posts_link(); ?></h3><span id="descaut" style="font-size:14px; line-height:15px;">
			<?php the_author_meta('description'); ?></span>
                        </div>

</div><br>	<?php } ?>
<div style="clear:both"></div>
	 <?php 
	 if($mwpress_opt['post_hab_coment'] == true and $mwpress_opt['post_hab_coment_this'] != 0 or $mwpress_opt['post_hab_coment'] == false and $mwpress_opt['post_hab_coment_this'] == 1) {
	 comments_template(); }?>
</article>
	   
<?php require_once('partes/page-parte2.php'); ?>
