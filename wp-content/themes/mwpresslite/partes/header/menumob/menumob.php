
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/partes/header/menumob/css/default.css';?>" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri().'/partes/header/menumob/css/component.css';?>" />
		<script src="<?php echo get_template_directory_uri().'/partes/header/menumob/js/modernizr.custom.js';?>"></script>

	<?php 



				
				if ( has_nav_menu( 'menu-principal' ) ) : ?>
				
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
					

					<?php
class IBenic_WalkerM extends Walker_Nav_Menu {
    
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		
		
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		
		
		$indent = str_repeat( $t, $depth );

	
		$classes = array( 'dl-submenu' );


		$class_names = join( ' ', apply_filters( 'nav_menu_submenu_css_class', $classes, $args, $depth ) );
		$class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

		$output .= "{$n}{$indent}<ul $class_names>{$n}";
	}
	// Displays start of an element. E.g '<li> Item Name'
    // @see Walker::start_el()
    function start_el(&$output, $item, $depth=0, $args=array(), $id = 0) {
    	$object = $item->object;
    	$type = $item->type;
    	$title = $item->title;
    	$description = $item->description;
    	$permalink = $item->url;
    	$iclass = $item->classes;
    	if($iclass) $classx = 'implode(" ", $iclass )';
    	if(!$iclass) $classx =  '';
		
		// Menu arredondado
		global $mwpress_opt;
		$rd = $mwpress_opt['menu_rounded'];
		$rd2 ="";

		
		if ( $this->has_children ) {
    
}

      $output .= "<li>";
        
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
      	$output .= '<a href="' . $permalink . '" class="'.$rd2.'">';
      } else {
      	$output .= '<span>';
      }
       
      $output .= $title;
      if( $description != '' && $depth == 0 ) {
      	$output .= '';
      }
      if( $permalink && $permalink != '#' ) {
      	$output .= '</a>';
      } else {
      	$output .= '</span>';
      }
    }

} 

?><?php
			
		
			

			
							wp_nav_menu( array(
					'theme_location' => 'menu-principal',
					'menu_class'     => 'dl-menu',
					'container' => false,
					'walker' => new IBenic_WalkerM()
			) ); 
			
			?>
					</div><!-- /dl-menuwrapper -->

	<!--	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script src="<?php echo get_template_directory_uri().'/partes/header/menumob/js/jquery.dlmenu.js';?>"></script>
		<script>
			jQuery(function() {
				jQuery( '#dl-menu' ).dlmenu();
			});
		</script>

		<?php endif; ?>