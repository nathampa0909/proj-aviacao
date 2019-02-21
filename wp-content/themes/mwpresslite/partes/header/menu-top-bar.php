<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */
?>



	<?php 
	
	$menu_obj = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$menuPx = $menu_obj->term_id;
	

	

	$menuid = $mwpress_opt['top_menu_select'];
	$getmenuid = wp_get_nav_menu_object($menuid);
	$menuPx = $getmenuid->term_id;
	
	
	
	?>
		<nav id="cssmenu2">

			<?php
				wp_nav_menu( array(
					'menu' => $menuPx,
					'menu_class'     => false,
					'container' => false,
					'walker' => new IBenic_Walker_topbar()
				 ) );
			?>
		</nav><!-- .main-navigation -->
	
	
	
	<?php
class IBenic_Walker_topbar extends Walker_Nav_Menu {
    
	
		public function start_lvl( &$output, $depth = 0, $args = array() ) {
		
		
		if ( isset( $args->item_spacing ) && 'discard' === $args->item_spacing ) {
			$t = '';
			$n = '';
		} else {
			$t = "\t";
			$n = "\n";
		}
		
		
		$indent = str_repeat( $t, $depth );

	
		$classes = array( 'sub-menu' );


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
		 
      $output .= "<li class='limarG  ".$classx. " ' style='max-height:".$mwpress_opt['top_size']['height']." !important;'> ";?> 

	  
	  <?php
        
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
      	$output .= '<a href="' . $permalink . '" style="color:white; max-height:'.$mwpress_opt['top_size']['height'].' !important;">';
      } else {
      	$output .= '<span>';
      }
       
      $output .= $title;
      if( $description != '' && $depth == 0 ) {
      	$output .= '<small class="description">' . $description . '</small>';
      }
      if( $permalink && $permalink != '#' ) {
      	$output .= '</a>';
      } else {
      	$output .= '</span>';
      }
    }

} 

?>


