<?php  global $mwpress_opt;
$corS = $mwpress_opt['config_colorS'];
$corP = $mwpress_opt['config_colorP'];
 ?>
<div id="post-<?php the_ID(); ?>"  style="padding:10px; margin-bottom:10px; margin-left:1%;box-sizing: border-box; width:49%; float:left;" class="cont-post-v mobplist">
 <article>
	<div style="display:table-cell;  width:100%; " class="img-center-v"> <div class="img-center-zoom-v container-img" style="background:<?php echo $corP; ?>">
		
		<a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail( 'post2v','class=image-hover' ); ?> </a> </div></div>
	
	<div style=" padding:0px 5px;vertical-align:top; "> 
		<div style="display:table-cell; vertical-align:top; padding-bottom:10px;">
		</div>
		<div>
		<div><a class="h1tlink" href="<?php the_permalink(); ?>"><h2 class="plisth"><?php echo size_title(33);  ?></h2></a></div>
		
		<?php // Data / Autor
		$time = get_the_time("j/m/y g:i A"); $autor = get_the_author();?>
				 <div style="margin:10px 0 10px 0;" class="plisttxt excerptV2">  <?php   echo my_excerpt(170); ?></div>
			 <div> <span class="metapostcont "><?php echo __('por:', 'mwpress'); ?>  <?php echo $autor; ?></span>    <span class="metapostcont">em: <?php echo $time; ?>
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