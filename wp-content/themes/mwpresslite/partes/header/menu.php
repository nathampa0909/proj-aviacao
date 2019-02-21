<?php
/**
 * Theme: MWPRESS
 * Template for mwpress
 * @package Multiwordpress
 */
?>
<?php

 if($mwpress_opt['menu_shadow'] == 1) {$shadow  = "shadow2";} else {$shadow  ="";} 
  echo '<div class="menuext  '.$shadow.'" style="z-index:9999999 ; height:auto; position:relative; ">				
					<div class="menuint '.$mwpress_opt['menu_full'].' " style="display:table;z-index:9999; max-height:'.$mwpress_opt['menu_size']['height'].';" >'; ?>
<div id="site-header-menu">
	<?php 
	

	$menu_obj = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$menuPx = $menu_obj->term_id;
	

	
	if ($mwpress_opt['menuP-select'] != ''){
	$menuid = $mwpress_opt['menuP-select'];
	$getmenuid = wp_get_nav_menu_object($menuid);
	$menuPx = $getmenuid->term_id;}
	
	if($mwpress_opt['menu_align_this']) {if($mwpress_opt['menu_align_this'] != 'default') {$menualign = $mwpress_opt['menu_align_this'];} } if($mwpress_opt['menu_align_this'] == 'default'){$menualign = $mwpress_opt['menu_align'];}
	
	if ( has_nav_menu( 'menu-principal' ) ) : ?>
		<nav id="cssmenu" class="<?php if($menualign == "ul-center") {echo"nav-c cssmenu-c";} ?><?php if($menualign == "ul-right") {echo"nav-r cssmenu-r";} ?><?php if($menualign == "ul-left") {echo"nav-l cssmenu-l";} ?>" style="display: table-row; z-index:999999; <?php echo'max-height:'.$mwpress_opt['menu_size']['height'].'';?>">
		<div id="head-mobile">
		
		
		</div>
			<div class="button2"></div>
			<?php
			
			if ($mwpress_opt['menuP-select'] != ''){
			
				wp_nav_menu( array(
					'menu' => $menuPx,
					'menu_class'     => false,
					'container' => false,
					'walker' => new IBenic_Walker()
			) ); }
			
			else {
			
							wp_nav_menu( array(
					'theme_location' => 'menu-principal',
					'menu_class'     => false,
					'container' => false,
					'walker' => new IBenic_Walker()
			) ); }
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
    	$iclass = $item->classes;
    	if($iclass) $classx = 'implode(" ", $iclass )';
    	if(!$iclass) $classx =  '';
		
		// Menu arredondado
		global $mwpress_opt;
		$rd = $mwpress_opt['menu_rounded'];
		$rd2 ="";

		
		if ( $this->has_children ) {
    
}
		 if($mwpress_opt['menu_shadow_text'] == 1) {$tshadow  = "tshadow";} else {$tshadow  ="";} 
      $output .= "<li class='limarG ".$tshadow." ".$classx. " '>";
        
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

?>


</div></div></div>