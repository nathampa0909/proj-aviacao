<?php 

// Register and load the widget
function wpb_load_widget() {
    register_widget( 'mwpress_comment_widget' );
	 unregister_widget('WP_Widget_Recent_Comments');
}
add_action( 'widgets_init', 'wpb_load_widget' );
 
// Creating the widget 
class mwpress_comment_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'mwpress_comment_widget', 
 
// Widget name will appear in UI
__('MWPRESS - ÚLTIMOS COMENTÁRIOS', 'mwpress'), 
 
// Widget description
array( 'description' => __( 'Exibe os últimos comentários', 'mwpress' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
$title = apply_filters( 'widget_title', $instance['title'] );
$number = apply_filters( 'widget_number', $instance['number'] );
 
// before and after widget arguments are defined by themes
echo $args['before_widget'];
if ( ! empty( $title ) )
echo $args['before_title'] . $title . $args['after_title'];
 
// This is where you run the code and display the output
global $mwpress_opt;
$comments = get_comments('status=approve&number='.$number.''); ?>
<h3 class="widget-title" ></h3>
<style>
.commentwid a{ color:#999; font-size:13px;font-style: italic;}
.commentwid a:hover{ color:<?php echo $mwpress_opt['config_colorT']; ?>; font-size:13px;font-style: italic;}
</style>
<ul class="mwp_comment" >
<?php foreach ($comments as $comment) { ?>
    <li class="recomm-wrapper"><?php
        $title = get_the_title($comment->comment_post_ID); ?>
       
<table style="margin-top:10px;"> <tr><td width="20%">
	  <?php echo get_avatar( $comment, '53' ); ?>
	  </td>
	  <td style="padding-left:10px;" class="commentwid">
       <a href="<?php echo get_permalink($comment->comment_post_ID); ?>"><?php echo '' . wp_html_excerpt( $comment->comment_content, 40 ) . '';
        ?>... </a></td> </tr></table>
    </li>
<?php }  ?> </ul></aside>
<?php 

 wp_reset_postdata();

     
 
 }  


         
// Widget Backend 
public function form( $instance ) {
if ( isset( $instance[ 'title' ] ) ) {
$title = $instance[ 'title' ];
}

else {
$title = __( 'Comentários Recentes', 'mwpress' );
}

if ( isset( $instance[ 'number' ] ) ) {
$number = $instance[ 'number' ];
}

else {
$number = 4;
}
// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php echo __( 'Título:', 'mwpress' ); ?></label> 

<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
<br>
<br>
<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php echo __( 'Nº de comentários:', 'mwpress' ); ?></label> 
<input id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="text" value="<?php echo esc_attr( $number ); ?>" />
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = array();
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['number'] = ( ! empty( $new_instance['number'] ) ) ? strip_tags( $new_instance['number'] ) : '';
return $instance;
}
} // Class mwpress_comment_widget ends here
?>