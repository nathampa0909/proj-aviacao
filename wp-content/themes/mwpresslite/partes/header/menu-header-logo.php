<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */
?>
<?php  echo '<div class="table_cell" style=" vertical-align:'.$mwpress_opt['logo_align_h'].'" ><div>'; ?>
							
						
<div id="site-header-menu">
	<?php if ( has_nav_menu( 'menu-principal' ) ) : ?>
		<nav  id="cssmenu" class="<?php if($mwpress_opt['menu_align'] == "ul-center") {echo"nav-c cssmenu-c";} ?><?php if($mwpress_opt['menu_align'] == "ul-right") {echo"nav-r cssmenu-r";} ?><?php if($mwpress_opt['menu_align'] == "ul-left") {echo"nav-l cssmenu-l";} ?>" style="z-index:9999;max-height:<?php echo $mwpress_opt['menu_size']['height']; ?>">
			
			<div id="head-mobile"></div>
			<div class="button2"></div>
			<?php
			
				if($mwpress_opt['menuP-select'] == '') { $menuPx = 'menu-principal';}
	else { $menuP = $mwpress_opt['menuP-select']; $menuPx= $menuP->slug;}
	
				wp_nav_menu( array(
					'theme_location' => $menuPx,
					'menu_class'     => false,
					'container' => false,
					'walker' => new IBenic_Walker()
				 ) );
			?>
		</nav><!-- .main-navigation -->
	<?php endif; ?>


	<?php
class IBenic_Walker extends Walker_Nav_Menu {
    
	
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
		
		// Menu arredondado
		global $mwpress_opt;
		$rd = $mwpress_opt['menu_rounded'];
		$rd2 = "aa";
		
		if ( $this->has_children ) {
    
}
		
      $output .= "<li class='limarG ".  implode(" ", $item->classes) . " '>";
        
      //Add SPAN if no Permalink
      if( $permalink && $permalink != '#' ) {
      	$output .= '<a href="' . $permalink . '" class="'.$rd.'">';
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

} ?>


<?php	   echo '</div></div></div></div></div>'; ?>