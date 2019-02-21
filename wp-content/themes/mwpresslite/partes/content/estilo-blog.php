<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */
?>
<?php  global $mwpress_opt;
$corS = $mwpress_opt['config_colorS'];
$corP = $mwpress_opt['config_colorP'];
 ?>
<div id="post-<?php the_ID(); ?>"  style="padding:10px; margin-bottom:10px; margin-left:1%;box-sizing: border-box; width:100%; float:left;" class="cont-post-v mobplist">
 <article>

	<div style=" width:100%; " class="img-center-v-blog"> <div class="img-center-zoom-v-blog container-blog" style="background:<?php echo $corP; ?>" id="post-<?php the_ID(); ?>">
		
		<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail( 'blog-modern','class=image-hover '.$blogtype.'' ); ?> </a>
		
				<div class="middle-blog"><div class="text-blog"> <a class="h1tlink" style="text-align:center" href="<?php the_permalink(); ?>"><h2 class="h1blog"><?php echo size_title(90); ?></h2></a></div></div>

		</div></div>
	
	<div style=" padding:0px 5px;vertical-align:top; "> 
		<div style="display:table-cell; vertical-align:top; padding-bottom:10px;">
		</div>
		<div>
		
		<?php // Data / Autor
		$time = get_the_time("j/m/y g:i A"); $autor = get_the_author();?>
				 <div style="margin:10px 0 10px 0;" class="plisttxt">  <?php echo my_excerpt(200); ?></div>
			 <div> <span class="metapostcont "><?php echo __('por:', 'mwpress'); ?> <?php echo $autor; ?></span>    <span class="metapostcont"><?php echo __('em:', 'mwpress'); ?> <?php echo $time; ?>
			  <a href="<?php the_permalink(); ?>" style="float:right"><i class="fa fa-link" style="margin-right:5px"></i> <?php echo __('Leia mais', 'mwpress'); ?></a>
									
			  </span> </div><br>

		
		<?php // categorias

			   
				
				if($cats = get_the_category( $post->ID ) ) {
				foreach( $cats as $cat ) {
					$colorcat = get_term_meta($cat->cat_ID, 'color', true);
						if($mwpress_opt['post_hab_cat_color'] == true and $colorcat != "") {
							$cortags = get_term_meta($cat->cat_ID, 'color', true);
						} 
						else {$cortags = $mwpress_opt['post_cor_tags'];}
						echo '<span class="mwtag" style="margin:5px 10px 5px 0px ; background:'.$cortags.';"><a style="color:white; " href="' . get_category_link( $cat->cat_ID ) . '">' . $cat->name . '</a></span>';
			}}?>
		</div>
		</div>
		</article>
</div>