<?php  global $mwpress_opt;
$corS = $mwpress_opt['config_colorS'];
$corP = $mwpress_opt['config_colorP'];
 ?>
	<div class="cont-post moblist tbcell-b" style="width:100%;display:table; padding:10px;">
	<div style="display:table-cell;" class="img-center"> <div class="img-center-zoom container-img" style="background:<?php echo $corP; ?>"><a href="<?php the_permalink(); ?>">	<?php the_post_thumbnail( 'post1v','class=image-hover' ); ?> </a> </div></div>
		<div id="mobclear"></div>
		<div style="display:table-cell; padding:0px 10px;vertical-align:top; "> 
		  
		  <div style="display:table; overflow: hidden; position: relative; width: 100%; min-height:100%;">
				<div id="metapst-<?php the_ID(); ?>" style="display:table-row; vertical-align:top; padding-bottom:10px;">
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
			<div style="position:relative;display:table-row;vertical-align:middle;">
				<div style="padding:15px 0; min-height:150px;"><a class="h1tlink" href="<?php the_permalink(); ?>"><h2 class="plisth"><?php echo size_title(170); ?></h2></a>
					<?php $time = get_the_time("j/m/y g:i A"); $autor = get_the_author();?>
				<div class="plisttxt"  style="padding:15px 0 0 0;">	<?php echo the_excerpt(400); ?> </div>
				</div>
			</div>
			<div style="display:table-row;vertical-align:bottom;"><span class="metapostcont "><?php echo __('por:', 'mwpress'); ?>  <?php echo $autor; ?></span>    <span class="metapostcont">em: <?php echo $time; ?>
			<a href="<?php the_permalink(); ?>" style="float:right"><i class="fa fa-link" style="margin-right:5px"></i> <?php echo __('Leia mais', 'mwpress'); ?></a></span> 

			
			</div>
			</div>
		</div>
	</div><br>
	
