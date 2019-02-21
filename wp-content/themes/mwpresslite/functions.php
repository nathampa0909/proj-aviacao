<?php
/**
 * Theme: MWPRESS
 * Functions settings
 * @package Multiwordpress
 */


//add visual_composer

function vc_mwpress() {
    vc_mwpress();
}

function script_jquery() {
    wp_enqueue_script( 'jquery' );
}
add_action( 'wp_enqueue_scripts', 'script_jquery' );


// Adicionando o Estilo Bulma
function add_stylesheet_to_head() {
    echo "<link href='".get_template_directory_uri()."/assets/bulma-0.6.0/css/bulma.css' rel='stylesheet' type='text/css'>";
}
 add_action( 'wp_head', 'add_stylesheet_to_head' );
 
 // Adicionando o Estilo 
 function add_stylesheet_to_head7() {
    echo "<link href='".get_template_directory_uri()."/style.css' rel='stylesheet' type='text/css'>";
}
 add_action( 'wp_head', 'add_stylesheet_to_head7' );


 function menujs() {
    echo '<script type="text/javascript" src="'.get_template_directory_uri().'/assets/js/menu.js"></script>';
}
add_action('wp_head', 'menujs');
 
// Adicionando custom Menu ao tema
function add_menu_principal() {
 register_nav_menus(
    array(
        'menu-principal'   => 'Main Menu',

    )
);

//now see if the main navigation menu is there - if not, create it.
if (!wp_get_nav_menu_object( 'Main Menu'))
{
    $menu_id = wp_create_nav_menu('Main Menu'); //create the menu
    $locations = get_theme_mod('nav_menu_locations'); //get the menu locations
    $locations['menu-principal'] = $menu_id; //set our new menu to be the main nav
    set_theme_mod('nav_menu_locations', $locations); //update 
}
}
add_action( 'init', 'add_menu_principal' );

// add thumb

add_action( 'after_setup_theme', 'mwpress_resize_thumb' );
function mwpress_resize_thumb() {
add_theme_support( 'post-thumbnails' );
add_theme_support( 'page-thumbnails' );
add_image_size( 'thumb-mwpress', 80, 60 );
add_image_size( 'post2v', 390, 200, true);
add_image_size( 'post3v', 250, 200, true);
add_image_size( 'post1h', 250, 210, true);
add_image_size( 'post2h', 150, 155, true);
add_image_size( 'blog-banner', 805, 200, true);
add_image_size( 'blog-modern', 805, 500, true);
add_image_size( 'slider-mwpress', 815, 350, true);
add_image_size( 'animate-mwp', 1000, 750, true);
}

function disable_srcset( $sources ) {
return false;
}
add_filter( 'wp_calculate_image_sizes', 'disable_srcset' );

// add post format

add_theme_support( 'post-formats', array( 'aside', 'gallery', 'video', 'link', 'bannerimg' ) );

// Adicionando sidebar
function mwpres_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar Primária', 'mwpress' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
 
    register_sidebar( array(
        'name'          => __( 'Sidebar Secundária', 'mwpress' ),
        'id'            => 'sidebar-2',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	
	
	register_sidebar( array(
        'name'          => __( 'Sidebar Página Principal', 'mwpress' ),
        'id'            => 'sidebar-front',
     'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	
	
	register_sidebar( array(
        'name'          => __( 'Rodapé 1', 'mwpress' ),
        'id'            => 'footer-1',
        'before_widget' => '<aside id="%1$s" class="widget-foot %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	
	register_sidebar( array(
        'name'          => __( 'Rodapé 2', 'mwpress' ),
        'id'            => 'footer-2',
        'before_widget' => '<aside id="%1$s" class="widget-foot %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Rodapé 3', 'mwpress' ),
        'id'            => 'footer-3',
        'before_widget' => '<aside id="%1$s" class="widget-foot %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	register_sidebar( array(
        'name'          => __( 'Rodapé 4', 'mwpress' ),
        'id'            => 'footer-4',
        'before_widget' => '<aside id="%1$s" class="widget-foot %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	
		register_sidebar( array(
        'name'          => __( 'Woocommerce', 'mwpress' ),
        'id'            => 'woocommerce',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
	
}
add_action( 'widgets_init', 'mwpres_widgets_init' ); 

// Verificar widgets nas áreas de widgets
function is_sidebar_active( $index ){
  global $wp_registered_sidebars;
 
  $widgetcolums = wp_get_sidebars_widgets();
 
  if ($widgetcolums[$index]) return true;
 
 return false;
}


//add suport woo
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );}
?>
<?php add_filter( 'woocommerce_price_html', 'cs_custom_simple_product_price_html' );?>
<?php
add_filter( 'loop_shop_per_page', function ( $cols ) {
return 1;
}, 20 );
// Number or products per row ex 4
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
return 3; }} // 5 products per row
$update_mwpress = false;
require_once('inc/redux/redux-framework.php');
require_once('inc/mwpress-theme-options.php'); 
require_once('inc/mwpress-metabox-options.php');

require_once('inc/mwpress_custom/limitecaracteres.php'); 
require_once('inc/plugins/wp-term-colors/wp-term-colors.php'); 

require_once('inc/mwpress_custom/comentarios.php'); 
require_once('inc/mwpress_custom/paginacao.php'); 


require_once('inc/widgets/lastpost-exclude-cat.php'); 
require_once('inc/widgets/lastpost-include-cat.php'); 
require_once('inc/widgets/lastpost-large.php'); 
require_once('inc/widgets/comments.php'); 
require_once('inc/widgets/category-count.php'); 

function jptweak_remove_share() {

    remove_filter( 'the_excerpt', 'sharing_display', 19 );
    if ( class_exists( 'Jetpack_Likes' ) ) {
        remove_filter( 'the_content', array( Jetpack_Likes::init(), 'post_likes' ), 30, 1 );
    }
}
 
add_action( 'loop_start', 'jptweak_remove_share' );

// limitar tamanhos
// Limit except length to 125 characters.
// tn limited excerpt length by number of characters

function size_title( $count ) {
global $post;
$title  = html_entity_decode( get_the_title(), ENT_XML1, 'UTF-8' );
$count_tit = strlen( $title );
$titlecount = mb_strimwidth($title, 0, $count);
//$titlecount = substr(strip_tags($title), 0, $count);
if ($count_tit > $count) { $titlecount = $titlecount."...";} else
{$titlecount = $titlecount;}
return $titlecount;
}
if(!function_exists('remove_vc_from_excerpt'))  {
  function remove_vc_from_excerpt( $excerpt ) {
    $patterns = "/\[[\/]?vc_[^\]]*\]/";
    $replacements = "";
    return preg_replace($patterns, $replacements, $excerpt);
  }
}
function my_excerpt($count){
	$excerpt = get_the_content();
	$excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, $count);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = $excerpt." [...]";
	return $excerpt;
}



/**
 * WooCommerce Extra Feature
 * --------------------------
 *
 * Change number of related products on product page
 * Set your own value for 'posts_per_page'
 *
 */ 
function woo_related_products_limit() {
  global $product;
	
	$args['posts_per_page'] = 6;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}
?>