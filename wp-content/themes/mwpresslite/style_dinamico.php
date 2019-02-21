<?php
/**
 * Theme: MWPRESS
 * Style dinamic
 * @package Multiwordpress
 */
?>
<?php
global $mwpress_opt;
global $layoutpostG;
?>
<?php

global $type_layout;

if (is_single()) {$type_layout = 'layout_pronto';}
if (is_page() and !is_category() and !is_archive() and !is_home() and !is_home() and !is_search()) {$type_layout = 'layout_pronto_page';}
$prod2 = false;
if ( class_exists( 'WooCommerce' ) ) {$prod = true;}
if ($prod == true) {if (is_product()){$prod2 = true;}}
if (!is_category() and !is_archive() and !is_home() and !is_search() and $prod2 != true)
{
if( $mwpress_opt[$type_layout] == 1 and $mwpress_opt['layout_pronto_this'] == 'default') {$layoutpostG = 1;}
if( $mwpress_opt[$type_layout] == 2 and $mwpress_opt['layout_pronto_this'] == 'default') {$layoutpostG = 2;}
if( $mwpress_opt[$type_layout] == 3 and $mwpress_opt['layout_pronto_this'] == 'default') {$layoutpostG = 3;}
if( $mwpress_opt[$type_layout] == 4 and $mwpress_opt['layout_pronto_this'] == 'default') {$layoutpostG = 4;}
if( $mwpress_opt[$type_layout] == 'custom' and $mwpress_opt['layout_pronto_this'] == 'default') {$layoutpostG = 'custom';}
}


//Dinamyc colors scheme
if($mwpress_opt['esquema_pronto'] == 1) { $mwpress_opt['config_colorP'] = '#143956'; $mwpress_opt['config_colorS'] = '#1B4C72'; $mwpress_opt['config_colorT'] = '#1B628F'; $mwpress_opt['config_colorD'] = '#4885B1';  }
if($mwpress_opt['esquema_pronto'] == 2) { $mwpress_opt['config_colorP'] = '#2E333C'; $mwpress_opt['config_colorS'] = '#404854'; $mwpress_opt['config_colorT'] = '#4C647A'; $mwpress_opt['config_colorD'] = '#6E7F8D';  }
if($mwpress_opt['esquema_pronto'] == 3) { $mwpress_opt['config_colorP'] = '#2F3B46'; $mwpress_opt['config_colorS'] = '#4E6374'; $mwpress_opt['config_colorT'] = '#6A8AA1'; $mwpress_opt['config_colorD'] = '#7EA1BD';  }
if($mwpress_opt['esquema_pronto'] == 4) { $mwpress_opt['config_colorP'] = '#394F55'; $mwpress_opt['config_colorS'] = '#4C6A72'; $mwpress_opt['config_colorT'] = '#5C8E9A'; $mwpress_opt['config_colorD'] = '#89BDCB';  }
if($mwpress_opt['esquema_pronto'] == 5) { $mwpress_opt['config_colorP'] = '#68343A'; $mwpress_opt['config_colorS'] = '#864C56'; $mwpress_opt['config_colorT'] = '#C0606B'; $mwpress_opt['config_colorD'] = '#CF7C83';  }
if($mwpress_opt['esquema_pronto'] == 6) { $mwpress_opt['config_colorP'] = '#4B5843'; $mwpress_opt['config_colorS'] = '#6E8062'; $mwpress_opt['config_colorT'] = '#94AB6D'; $mwpress_opt['config_colorD'] = '#A1BC90';  }
if($mwpress_opt['esquema_pronto'] == 7) { $mwpress_opt['config_colorP'] = '#84764C'; $mwpress_opt['config_colorS'] = '#A5935F'; $mwpress_opt['config_colorT'] = '#D1BA63'; $mwpress_opt['config_colorD'] = '#E7CE84';  }
if($mwpress_opt['esquema_pronto'] == 8) { $mwpress_opt['config_colorP'] = '#4E3E4B'; $mwpress_opt['config_colorS'] = '#7D657A'; $mwpress_opt['config_colorT'] = '#9E6F92'; $mwpress_opt['config_colorD'] = '#B28FAC';  }
if($mwpress_opt['esquema_pronto'] == 9) { $mwpress_opt['config_colorP'] = '#71553D'; $mwpress_opt['config_colorS'] = '#987252'; $mwpress_opt['config_colorT'] = '#AD8248'; $mwpress_opt['config_colorD'] = '#E1AA79';  }
if($mwpress_opt['esquema_pronto'] == 10) { $mwpress_opt['config_colorP'] = '#454646'; $mwpress_opt['config_colorS'] = '#6A6B6C'; $mwpress_opt['config_colorT'] = '#ABACAE'; $mwpress_opt['config_colorD'] = '#E7E9EC'; }

if($mwpress_opt['config_hab_scheme_this'] == 'hab') {
if($mwpress_opt['esquema_pronto_this'] == 1) { $mwpress_opt['config_colorP'] = '#143956'; $mwpress_opt['config_colorS'] = '#1B4C72'; $mwpress_opt['config_colorT'] = '#1B628F'; $mwpress_opt['config_colorD'] = '#4885B1';  }
if($mwpress_opt['esquema_pronto_this'] == 2) { $mwpress_opt['config_colorP'] = '#2E333C'; $mwpress_opt['config_colorS'] = '#404854'; $mwpress_opt['config_colorT'] = '#4C647A'; $mwpress_opt['config_colorD'] = '#6E7F8D';  }
if($mwpress_opt['esquema_pronto_this'] == 3) { $mwpress_opt['config_colorP'] = '#2F3B46'; $mwpress_opt['config_colorS'] = '#4E6374'; $mwpress_opt['config_colorT'] = '#6A8AA1'; $mwpress_opt['config_colorD'] = '#7EA1BD';  }
if($mwpress_opt['esquema_pronto_this'] == 4) { $mwpress_opt['config_colorP'] = '#394F55'; $mwpress_opt['config_colorS'] = '#4C6A72'; $mwpress_opt['config_colorT'] = '#5C8E9A'; $mwpress_opt['config_colorD'] = '#89BDCB';  }
if($mwpress_opt['esquema_pronto_this'] == 5) { $mwpress_opt['config_colorP'] = '#68343A'; $mwpress_opt['config_colorS'] = '#864C56'; $mwpress_opt['config_colorT'] = '#C0606B'; $mwpress_opt['config_colorD'] = '#CF7C83';  }
if($mwpress_opt['esquema_pronto_this'] == 6) { $mwpress_opt['config_colorP'] = '#4B5843'; $mwpress_opt['config_colorS'] = '#6E8062'; $mwpress_opt['config_colorT'] = '#94AB6D'; $mwpress_opt['config_colorD'] = '#A1BC90';  }
if($mwpress_opt['esquema_pronto_this'] == 7) { $mwpress_opt['config_colorP'] = '#84764C'; $mwpress_opt['config_colorS'] = '#A5935F'; $mwpress_opt['config_colorT'] = '#D1BA63'; $mwpress_opt['config_colorD'] = '#E7CE84';  }
if($mwpress_opt['esquema_pronto_this'] == 8) { $mwpress_opt['config_colorP'] = '#4E3E4B'; $mwpress_opt['config_colorS'] = '#7D657A'; $mwpress_opt['config_colorT'] = '#9E6F92'; $mwpress_opt['config_colorD'] = '#B28FAC';  }
if($mwpress_opt['esquema_pronto_this'] == 9) { $mwpress_opt['config_colorP'] = '#71553D'; $mwpress_opt['config_colorS'] = '#987252'; $mwpress_opt['config_colorT'] = '#AD8248'; $mwpress_opt['config_colorD'] = '#E1AA79';  }
if($mwpress_opt['esquema_pronto_this'] == 10) { $mwpress_opt['config_colorP'] = '#454646'; $mwpress_opt['config_colorS'] = '#6A6B6C'; $mwpress_opt['config_colorT'] = '#ABACAE'; $mwpress_opt['config_colorD'] = '#E7E9EC';  }
if($mwpress_opt['esquema_pronto_this'] == 'custom') { $mwpress_opt['config_colorP'] = $mwpress_opt['config_colorP_this']; $mwpress_opt['config_colorS'] = $mwpress_opt['config_colorS_this']; $mwpress_opt['config_colorT'] = $mwpress_opt['config_colorT_this']; $mwpress_opt['config_colorD'] = $mwpress_opt['config_colorD_this']; 

}}


?>

<style>
.corPri {background:<?php echo $mwpress_opt['config_colorP']; ?>;}
.corSec {background:<?php echo $mwpress_opt['config_colorS']; ?>;}
.corDes {background:<?php echo $mwpress_opt['config_colorD']; ?>;}
.corPriC {color:<?php echo $mwpress_opt['config_colorP']; ?>;}
.corPriBdWid {border-left:7px solid <?php echo $mwpress_opt['config_colorP']; ?>; border-right: 2px solid <?php echo $mwpress_opt['config_colorP']; ?>; letter-spacing: 2px;}
@media screen and (max-width:1000px){
.button2{background:<?php echo $mwpress_opt['menuP_botH_color']; ?>;}
.button2:after{border-color:<?php echo $mwpress_opt['config_colorP']; ?>;}
.button2:before, .button2.menu-opened:after, .button2.menu-opened:before {background:<?php echo $mwpress_opt['config_colorP']; ?>;}


}
/* Paginação */

.custom-pagination span,
.custom-pagination a {
  display: inline-block;
  padding: 2px 10px;
}
.custom-pagination a {
  background-color: #ebebeb;
  color: <?php echo $mwpress_opt['config_colorP']; ?>;
}
.custom-pagination a:hover {
  background-color: <?php echo $mwpress_opt['config_colorP']; ?>;
  color: #fff;
}
.custom-pagination span.page-num {
  margin-right: 10px;
  padding: 0;
}
.custom-pagination span.dots {
  padding: 0;
  color: gainsboro;
}
.custom-pagination span.current {
  background-color: <?php echo $mwpress_opt['config_colorP']; ?>;
  color: #fff;
}
</style>
<style>
.plisth {color:<?php echo $mwpress_opt['config_colorS']; ?>}
#return-to-top {background:<?php echo $mwpress_opt['config_colorT']; ?>}
#return-to-top:hover {background:<?php echo $mwpress_opt['config_colorD']; ?>}
</style>
<?php


echo "<style> .buttonSub {color:white;background:".$mwpress_opt['config_colorS']."} 
				.buttonSub:hover {color:white;background:".$mwpress_opt['config_colorT']."}
</style>";
global $post_id;
if ($mwpress_opt['postpage_banner_img_this'] != 'naoexibe' and has_post_thumbnail() ){
if($mwpress_opt['post_banner_img'] == true or $mwpress_opt['postpage_banner_img_this'] == 1  and is_single()) {
$postbanner = get_the_post_thumbnail_url( $post_id, 'full' );
echo'<style>
 #BANNER-EXT{ background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center;background-image: url("'.$postbanner.'"); background-size:cover;}
</style>';
}}

echo "<style>#BANNER-BG {background:".$mwpress_opt['config_colorP']."}</style>";

if($mwpress_opt['postpage_banner_img_this'] != 'naoexibe' and has_post_thumbnail()) {
if($mwpress_opt['page_banner_img'] == true or $mwpress_opt['postpage_banner_img_this'] == 1 and is_page()) {
$postbanner = get_the_post_thumbnail_url( $post_id, 'full' );
echo'<style>
 #BANNER-EXT{ background-repeat: no-repeat;
    background-attachment: scroll;
    background-position: center;background-image: url("'.$postbanner.'"); background-size:cover;}
</style>';
}
}


if ( class_exists( 'WooCommerce' ) ) {
if (!is_shop() and !is_product_category()) {
if(is_category() or is_archive() or is_search() ) {



echo'<style>
 #BANNER-EXT{ background:#e6e6e6; color:#b5b9bb;height:80px !important}
 #BANNER-BG{ background:#e6e6e6; color:#b5b9bb; max-height:80px !important}
 #BANNER-INT{max-height:80px !important; color:#b5b9bb !important; }
</style>';
}}}

if ( !class_exists( 'WooCommerce' ) ) {
	
	if(is_category() or is_archive() or is_search() ) {



echo'<style>
 #BANNER-EXT{ background:#e6e6e6; color:#b5b9bb;height:80px !important}
 #BANNER-BG{ background:#e6e6e6; color:#b5b9bb; max-height:80px !important}
 #BANNER-INT{max-height:80px !important; color:#b5b9bb !important; }
</style>';

	
}
}


if ( class_exists( 'WooCommerce' ) ) {
if (is_shop() and $mwpress_opt['woo_banner_hab'] == false) { 

echo'<style>#BANNER-EXT {display:none;}</style>';
	
}
$isshop = "";
$isproduct = "";
if (is_shop()) { $isshop = true;}
if (is_product()) { $isproduct = true;}
}
echo"<style>
#CONTENT-P > div > ul > li > div.boxeD > a > div > div.star-rating {display:none}
.woocommerce .widget_layered_nav_filters ul li a::before, .woocommerce .widget_rating_filter ul li.chosen a::before{color:".$mwpress_opt['config_colorP']." !important;}
.woocommerce .widget_price_filter .price_slider_wrapper .ui-widget-content {background-color:".$mwpress_opt['config_colorP']." !important;}
.widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle {background-color:".$mwpress_opt['config_colorS']." !important;}</style>";
?>

<?php if ( class_exists( 'WooCommerce' ) ): ?>
<script>
woob = "";
woobshop = "";
woobproduct = "";
var woob = "<?php echo $mwpress_opt['woo_banner_hab'] ?>";
var woobshop = "<?php echo $isshop;?>";
var woobproduct = "<?php echo $isproduct;?>";
jQuery(document).ready(function() {
 if(woob == true && woobshop == true) {
jQuery("#BANNER-EXT").prop('id', 'BANNER-WOO');
}});

jQuery(document).ready(function() {
 if(woob == true && woobproduct == true) {
jQuery("#BANNER-EXT").prop('id', 'BANNER-WOO');
}});
</script>

<?php endif; ?>
<script>

//jQuery(document).ready(function() {
 
//jQuery("#billing_first_name").prop('class', 'text');
//});

</script>

<?php
if ( class_exists( 'WooCommerce' ) ) {
if (isset($mwpress_opt['woo_cat_img_hab'])){if ($mwpress_opt['woo_cat_img_hab'] == true) {
if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<style> #BANNER-EXT{background: url("'.$image.'")} </style>';
		}
	}
}}

if (isset($mwpress_opt['woo_cat_banner_font'])){
if ($mwpress_opt['woo_cat_banner_font'] == true) {
if ( is_product_category() ){
	    global $wp_query;
	    $cat = $wp_query->get_queried_object();
	    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
	    $image = wp_get_attachment_url( $thumbnail_id );
	    if ( $image ) {
		    echo '<style>#BANNER-INT > h1 {color:#fff}
.tshadowB {    text-shadow: 4px 2px 2px #000;}</style>';
		}
	}
}
}}

?>
<?php
if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['config_texy_sch'] == true)
	{echo "<style> 


		a {color:".$mwpress_opt['config_colorT']."}
		body {color:".$mwpress_opt['config_colorTxt']."}
		a:hover {color:".$mwpress_opt['config_colorS']."}
.h1tt {color:".$mwpress_opt['config_colorP']."} .h1 {color:".$mwpress_opt['config_colorP']."} .widget-title {color:".$mwpress_opt['config_colorP']."}
</style>";} ?>

<?php if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['wid_search'] == true)
	{echo "<style> 

#searchform > div > div > a {background:".$mwpress_opt['config_colorS']."}
#searchform > div > div > a:hover {background:".$mwpress_opt['config_colorD']."}
</style>
";} 


 if($mwpress_opt['config_hab_scheme'] == true) {
 echo '<style> .postlistwidT {color:'.$mwpress_opt['config_colorD'].'}
  .corS {color:'.$mwpress_opt['config_colorD'].'}
 </style>'; }
?>

<?php
/*global $update_mwpress;
if($update_mwpress){
$styleact = get_option('mwp_style_act');
	if($styleact != ''){ }
else { wp_die( __('Este website não está licenciado.<br>Os administradores podem ativar a licença <a href="'. get_bloginfo('url') .'/wp-admin/admin.php?page">clicando aqui</a>.') );
} }
 */
?>

<?php if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['post_sch'] == true)

{$mwpress_opt["post_cor_tags"] = $mwpress_opt['config_colorS'];

echo "<style> 

.metapost {color:".$mwpress_opt['config_colorS']."}
</style>";
}
?>
<?php
if($mwpress_opt['header_margin_top_this'] != '') {
	
echo'<style> #HEADER-BOX-BG {padding-top:'.$mwpress_opt["header_margin_top_this"]["height"].'}</style>';	
}

?>
<?php if(is_single() or is_page()){if($mwpress_opt['post_banner_img_t_color'] == true){
	echo "<style> 

#BANNER-INT > h1 {color:#fff}
.tshadowB {    text-shadow: 4px 2px 2px #000; opacity: 1 !important;}
</style>";
}
}


if($mwpress_opt['layout_pronto'] == 'custom' and is_single()){	echo "<style> #CONTEUDO {margin-top:".$mwpress_opt['post_page_margin_c']['margin-top']."} </style>";}
if($mwpress_opt['layout_pronto'] == 'custom' and is_single()){	echo "<style> #CONTEUDO {margin-bottom:".$mwpress_opt['post_page_margin_c']['margin-bottom']."} </style>";}
if($mwpress_opt['layout_pronto'] == 'custom' and is_single()){	echo "<style> #CONTEUDO {margin-left:".$mwpress_opt['post_page_margin_c']['margin-left']."} </style>";}
if($mwpress_opt['layout_pronto'] == 'custom' and is_single()){	echo "<style> #CONTEUDO {margin-right:".$mwpress_opt['post_page_margin_c']['margin-right']."} </style>";}


if($mwpress_opt['page_margin_c_this']['margin-top'] != ''){	echo "<style> #CONTEUDO {margin-top:".$mwpress_opt['page_margin_c_this']['margin-top']."} </style>";}
if($mwpress_opt['page_margin_c_this']['margin-bottom'] != ''){	echo "<style> #CONTEUDO {margin-bottom:".$mwpress_opt['page_margin_c_this']['margin-bottom']."} </style>";}
if($mwpress_opt['page_margin_c_this']['margin-left'] != ''){	echo "<style> #CONTEUDO {margin-left:".$mwpress_opt['page_margin_c_this']['margin-left']."} </style>";}
if($mwpress_opt['page_margin_c_this']['margin-right'] != ''){	echo "<style> #CONTEUDO {margin-right:".$mwpress_opt['page_margin_c_this']['margin-right']."} </style>";}
$prod3 = false;
if ( class_exists( 'WooCommerce' ) ) {$prod4 = true;}
if ($prod4 == true) {if (is_product()){$prod3 = true;}}
if (!is_category() and !is_archive() and !is_home() and !is_search() and $prod3 != true)
{
if( $mwpress_opt[$type_layout] == 1 and $mwpress_opt['layout_pronto_this'] == 'default') {	echo "<style> #CONTEUDO {margin-top:20px;} </style>";}
if( $mwpress_opt[$type_layout] == 2 and $mwpress_opt['layout_pronto_this'] == 'default'){	echo "<style> #CONTEUDO {margin-top:-70px;} </style>";}
if( $mwpress_opt[$type_layout] == 3 and $mwpress_opt['layout_pronto_this'] == 'default') {	echo "<style> #CONTEUDO {margin-top:20px;} </style>";}
if( $mwpress_opt[$type_layout] == 4 and $mwpress_opt['layout_pronto_this'] == 'default') {	echo "<style> #CONTEUDO {margin-top:-70px;} </style>";}

if($mwpress_opt['layout_pronto_this'] == 1){	echo "<style> #CONTEUDO {margin-top:20px;} </style>";}
if($mwpress_opt['layout_pronto_this'] == 2){	echo "<style> #CONTEUDO {margin-top:-70px;} </style>";}
if($mwpress_opt['layout_pronto_this'] == 3){	echo "<style> #CONTEUDO {margin-top:20px;} </style>";}
if($mwpress_opt['layout_pronto_this'] == 4){	echo "<style> #CONTEUDO {margin-top:-70px;} </style>";}
}


 ?>


<?php if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['banner_sch'] == true) { 
echo"<style>
#BANNER-INT {color:".$mwpress_opt['config_colorP']."}
</style> ";} ?>

<?php if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['menu_sch_geral'] == true) { 
echo"<style>
#cssmenu ul ul li a{color:".$mwpress_opt['config_colorP']."}
#cssmenu > ul > li > a {color:".$mwpress_opt['config_colorP']."}
#cssmenu > ul > li > a:hover {color:".$mwpress_opt['config_colorS']."}  
#cssmenu ul ul li a:hover {color:".$mwpress_opt['config_colorS']."} 
#cssmenu ul ul li:last-child > a,#cssmenu ul ul li.last-item > a {border-color:".$mwpress_opt['config_colorS']."}
@media screen and (max-width:1000px){
#cssmenu .submenu-button.submenu-opened:after{background:".$mwpress_opt['config_colorD'].";}
#cssmenu > ul > li{background:".$mwpress_opt['menuP_ext_color'].";}
#cssmenu ul ul li a{background:".$mwpress_opt['menuP_ext_color'].";}
#cssmenu ul ul ul li a{background:".$mwpress_opt['menuP_ext_color'].";}
#cssmenu ul ul li a{background:".$mwpress_opt['menuP_ext_color'].";}
}
</style> 

";} ?>


<?php

if ($mwpress_opt['menu_sch_geral'] != true) { 
 echo"<style>
.dl-menuwrapper button:after {
	content: '';
	position: absolute;
	width: 68%;
	height: 3px;
	background: ".$mwpress_opt['menu_mobile_fonte'].";
	top: 10px;
	left: 16%;
	box-shadow: 
		0 8px 0 ".$mwpress_opt['menu_mobile_fonte'].", 
		0 16px 0 ".$mwpress_opt['menu_mobile_fonte'].";
} 

.dl-menuwrapper button, .dl-menuwrapper button:hover,.dl-menuwrapper button.dl-active,.dl-menuwrapper ul {background-color: ".$mwpress_opt['menu_mobile_fundo']."}
</style>"; } 

if ($mwpress_opt['menu_sch_geral'] == true) { 
 echo"<style>
.dl-menuwrapper button:after {
	content: '';
	position: absolute;
	width: 68%;
	height: 3px;
	background: #fff;
	top: 10px;
	left: 16%;
	box-shadow: 
		0 8px 0 #fff, 
		0 16px 0 #fff;
} 

.dl-menuwrapper button, .dl-menuwrapper button:hover,.dl-menuwrapper button.dl-active,.dl-menuwrapper ul {background-color: ".$mwpress_opt['config_colorP']."}
</style>"; } 



?>


<?php if($mwpress_opt['config_hab_scheme'] == true and $mwpress_opt['footer_sch'] == true) { 
echo"<style>
#FOOTER-CONTENT {background:".$mwpress_opt['config_colorP']."}
#FOOTER-BAR {background:".$mwpress_opt['config_colorS']."}
</style> ";} ?>




<?php

// woocomerce estilo

echo "<style>

.product-categories a {color:".$mwpress_opt['config_colorS']."; font-family: Roboto, sans-serif, arial; font-size:22px}
.product-categories a:hover {color:".$mwpress_opt['config_colorT']."; font-family: Roboto, sans-serif, arial; font-size:22px}
span.woocommerce-Price-amount.amount {color:".$mwpress_opt['config_colorP']."; font-family: Roboto, sans-serif, arial; font-size:15px}
h1.page-title  {display:none}
.woocommerce-result-count {color:".$mwpress_opt['config_colorP']."; font-family: Roboto, sans-serif, arial; font-size:14px}
ul.product-categories > li > span {color:".$mwpress_opt['config_colorD']."; font-family: Roboto, sans-serif, arial; font-size:18px}
ul.product_list_widget del {display:none}
a.checkout-button {padding-top:10px !important;}
a.button.alt, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart, div.summary.entry-summary > form > button, div.wc-proceed-to-checkout a, #place_order {background:".$mwpress_opt['config_colorS']." !important; color: white;}
a.button.alt:hover, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart:hover, div.summary.entry-summary > form > button:hover, div.wc-proceed-to-checkout a:hover, #place_order:hover {background:".$mwpress_opt['config_colorD']." !important; color: white;}
a.added_to_cart.wc-forward {-webkit-border-radius:  3px  !important; ;-moz-border-radius:  3px !important; ;border-radius: 3px; 
	background:".$mwpress_opt['config_colorS']."; margin-top:14px; color:white;font-weight: 700; padding: 3px 10px}

#CONTENT-P > article > div > div > table > tbody > tr.order > td:nth-child(3) {color:#36ad71}
	.woocommerce-MyAccount-navigation {padding-left:20px;border-left:2px solid ".$mwpress_opt['config_colorT'].";}
div.woo_produtotit{	-webkit-border-radius:  6px 6px 0 0; ;-moz-border-radius:  6px 6px 0 0; ;border-radius: 6px 6px 0 0;
	color:white;background:".$mwpress_opt['config_colorT']."; text-align:center; font-weight: 700;}
	.woocommerce-form-login {width:300px}

	span.price,  div.summary.entry-summary > p > span {text-align:center !important; font-size:22px !important; color:".$mwpress_opt['config_colorP']." !important;}
	div.summary.entry-summary > p > ins > span {margin-left:50px; font-size:22px !important; color:".$mwpress_opt['config_colorP']." !important;}
	del > span.woocommerce-Price-amount {float:left !important; font-size:16px !important;  color:".$mwpress_opt['config_colorS']." !important;; text-decoration:line-through !important;}
	span.onsale {background:".$mwpress_opt['config_colorD']." !important; margin:220px 0 0 0 !important; padding: 0 20px !important;
	-webkit-border-radius:  0 !important; ;-moz-border-radius:  0 !important; ;border-radius: 0 !important;
	}
	div.summary.entry-summary > form {margin-top:30px;}
	
    div > div.star-rating {color:".$mwpress_opt['config_colorD']."}
	
	#CONTENT-P > article > div > form > table > tbody > tr > td.product-remove > a {color:".$mwpress_opt['config_colorD']." !important;}
	#CONTENT-P > article > div > form > table > tbody > tr > td.product-remove > a:hover {color:white !important;background:".$mwpress_opt['config_colorD'].";}
	#CONTENT-P > article > div > div.woocommerce-message {color:".$mwpress_opt['config_colorP'].";border-top-color:".$mwpress_opt['config_colorD'].";}
	#CONTENT-P > article > div > form > table > thead {background:".$mwpress_opt['config_colorD'].";}
	#CONTENT-P > article > div > form > table > thead > tr > th{color:white;}
	#CONTENT-P > article > div > form > table {box-shadow: 0px 2px 6px rgba(100,100,100,0.3);}
	
	div.summary.entry-summary > div.woocommerce-product-rating > div > span {color:".$mwpress_opt['config_colorT'].";}
	div.summary.entry-summary > h1 {color:".$mwpress_opt['config_colorS']."; margin-top:30px !important; margin-bottom:20px;}
	.woocommerce ul.products li {margin:1% !important;}
	</style>";

	if (is_home()){ echo '<style> div.sharedaddy, #content div.sharedaddy, #main div.sharedaddy {display:none} </style>';}
 ?>
 
 <style>
blockquote{

  color: <?php echo $mwpress_opt['config_colorS']; ?>;
  border-left: 17px solid <?php echo $mwpress_opt['config_colorD']; ?>;
  border-right: 3px solid <?php echo $mwpress_opt['config_colorD']; ?>;
}

blockquote::before{

  color: <?php echo $mwpress_opt['config_colorD']; ?>;
}

#cont-post-wp h2  span, #cont-post-wp h1  span, #cont-post-wp h3  span, #cont-post-wp h4  span, #cont-post-wp h5  span, #cont-post-wp h6  span,  #cont-post-wp h6, #cont-post-wp h5,  #cont-post-wp h4,  #cont-post-wp h3,  #cont-post-wp h2,  #cont-post-wp h1 { }
.woocommerce-loop-product__title {color:white;}
 .postlistwidT {font-family:Oswald, verdana;}

 #spider_popup_wrap {z-index:99999999999999 !important;}
.spider_popup_overlay {z-index:9999999999999 !important;}
.alignleft {
    float: left;
    margin: 0 30px 10px 0;
}
.alignright {
    float: right;
    margin: 0 30px 10px 0;
}
#dl-menu {z-index:9999999999}
 </style>
 

<?php 
if ($mwpress_opt['wid_overlay_color'] != 'transparent') { echo '<style>.corDinamicwid {background:'.$mwpress_opt['wid_overlay_color'].' !important;}</style>';}
if ($mwpress_opt['config_color_tit_post'] != 'transparent') { echo '<style>.h1ttpd {color:'.$mwpress_opt['config_color_tit_post'].'}</style>';}
if ($mwpress_opt['config_color_tit_plist'] != 'transparent') { echo '<style>.plisth {color:'.$mwpress_opt['config_color_tit_plist'].';}
     .postlistwidT {color:'.$mwpress_opt['config_color_tit_plist'].';}
}</style>';} ?>