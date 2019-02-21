<article>
	
	
<?php	 
 $qobj = get_queried_object();
$s=get_search_query();
		$qtdpost = $mwpress_opt['front_qtd_post'];
	  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
	  $custom_args = array(
		  'post_type' => 'post',
		  'posts_per_page' => $qtdpost,
		  'paged' => $paged,
		   's' => $s,
		   
        );
  ?>

	<?php   $custom_query = new WP_Query( $custom_args ); ?>
	<?php if ( $custom_query->have_posts() ) : ?>
		
		 <!-- Loop Posts -->
<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>

	<?php include ('estilo-vertical.php'); ?>

<?php endwhile; ?>	


		<div class="clr"></div><br><br>
		
		  <?php 
		 // if (function_exists(custom_pagination)) {
			custom_pagination($custom_query->max_num_pages,"",$paged);
			//}?>

	  <?php else:  ?>
	   <p><?php _e( 'Desculpe, mas não existem dados para este critério.', 'mwpress' ); ?></p>
	  
	 
	  <?php endif; ?>
	 
</article>