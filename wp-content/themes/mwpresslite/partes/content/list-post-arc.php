<article>



<?php 

// por enquanto a quantidade de posts está vindo da configuração de painel de controle do wp-admin -> configurações -> leitura

if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>

 <?php include ('estilo-vertical.php'); ?>

<?php endwhile; ?>	


		<div class="clr"></div><br><br>
		
		  <?php 
		  //if (function_exists(custom_pagination)) {
			custom_pagination($custom_query->max_num_pages,"",$paged);
			//}?>

	 <?php endif; ?>
	  

	 
</article>