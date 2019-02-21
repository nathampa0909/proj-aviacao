<?php
/**
 * Theme: MWPRESS
 * Template Name: Blank Full
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php
/**
 * Theme: MWPRESS
 * Template for Header
 * @package Multiwordpress
 */

// Não acessa o arquivo diretamente.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>




<!DOCTYPE html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<?php wp_head(); global $mwpress_opt;	?>

<?php include(''.get_template_directory().'/style_dinamico.php'); ?>

<script>
rounded = "";
var rounded = "<?php echo $mwpress_opt['menu_rounded'] ?>";
jQuery(document).ready(function() {
 if(rounded == "roundeD") {
jQuery('ul#cssmenu li').addClass( 'roundeD'); 
jQuery('ul.sub-menu > li > a').removeClass( 'roundeD'); 
jQuery('#cssmenu > ul > li > a').css('margin-right', '10px');

}});
</script>
<script>
// ===== Scroll to Top ==== 
jQuery(document).ready(function() {
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
        jQuery('#return-to-top').fadeIn(200);    // Fade in the arrow
    } else {
        jQuery('#return-to-top').fadeOut(200);   // Else fade out the arrow
    }
});
jQuery('#return-to-top').click(function() {      // When arrow is clicked
    jQuery('body,html').animate({
        scrollTop : 0                       // Scroll to top of body
    }, 500);
});
});
</script>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
</head>
<body id="ALL-SITE" <?php body_class(); ?>>
<a href="javascript:" id="return-to-top"><i class="icon-chevron-up"></i></a>

<!-- /header -->


	
<?php 
$type = "";
$bg = "ALL-BODY";
$cont = "CONTENT-P";
$sidebarl = "SIDEBAR-LEFT";
$sidebarr = "SIDEBAR-RIGHT";
if ($mwpress_opt['post_page_hab'] == 1) {
if(is_single()) {
	
	$type = "post_";
	$bg = "ALL-BODY-POST";
	$cont = "CONTENT-P-POST";
	$sidebarl = "SIDEBAR-LEFT-POST";
	$sidebarr = "SIDEBAR-RIGHT-POST";
}}

if ($mwpress_opt['page_page_hab'] == 1) {
if(is_page()) {
	
	$type = "page_";
	$bg = "ALL-BODY-PAGE";
	$cont = "CONTENT-P-PAGE";
	$sidebarl = "SIDEBAR-LEFT-PAGE";
	$sidebarr = "SIDEBAR-RIGHT-PAGE";
}}

$sidebarcust = $mwpress_opt['sidebar'];
$sidebarcust2 = $mwpress_opt['sidebar2'];
  ?>
 
<div id="<?php echo $bg; ?>" >
<div class="">
		
	<?php  
	while ( have_posts() ) : the_post();
	
	the_content(); 
	
	endwhile;
	?>
</div>
</div>
	
</body>
</html>


