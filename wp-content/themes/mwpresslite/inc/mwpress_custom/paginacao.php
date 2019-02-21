<?php



$qtdwoo = '';

// código para definir o número de posts por tipo de página  
add_action( 'pre_get_posts',  'set_posts_per_page'  );
function set_posts_per_page( $query ) {
	
	global $mwpress_opt;


if($mwpress_opt) {$qtdfront= $mwpress_opt['front_qtd_post'];} else {$qtdfront=2;}
if($mwpress_opt) {$qtdwoo = $mwpress_opt['woo_qtd_product'];} else {$qtdwoo=1;}

  global $wp_the_query;

  if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_shop() ) ) {
    $query->set( 'posts_per_page', $qtdwoo );
  }
  
    if ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ( $query->is_home() || $query->is_frontpage() ) ) {
    $query->set( 'posts_per_page',$qtdfront );
  }

    elseif ( ( ! is_admin() ) && ( $query === $wp_the_query ) && ($query->is_category() || $query->is_tag() || $query->is_search()  || $query->is_page()  )) {
    $query->set( 'posts_per_page', $qtdfront );
  }

  return $query;
}

function custom_pagination($numpages = '', $pagerange = '', $paged='') {
	
	

	
	
	

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'      => @add_query_arg( 'paged', '%#%' ),
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

} 

add_filter( 'loop_shop_per_page', function ( $cols ) {
		global $mwpress_opt;


if($mwpress_opt) {$qtdwoo2 = $mwpress_opt['woo_qtd_product'];} else {$qtdwoo2=1;}
return $qtdwoo2;
}, 20 );
// Number or products per row ex 4
add_filter('loop_shop_columns', 'loop_columns');
if (!function_exists('loop_columns')) {
function loop_columns() {
return 3; }} // 5 products per row

 ?>