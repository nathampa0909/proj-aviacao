<?php
class WP_Widget_Recent_Posts_Include extends WP_Widget {
 
        function __construct() {
                $widget_ops_x_inc = array('classname' => 'widget_recent_entries_x_inc', 'description' => __( 'Exibir posts recentes', 'mwpress') );
                parent::__construct('recent-posts_x_inc', __('MWPRESS - POSTS (Incluir-CAT)', 'mwpress'), $widget_ops_x_inc);
                $this->alt_option_name = 'widget_recent_entries_x_inc';
 
                add_action( 'save_post', array(&$this, 'flush_widget_cache') );
                add_action( 'deleted_post', array(&$this, 'flush_widget_cache') );
                add_action( 'switch_theme', array(&$this, 'flush_widget_cache') );
        }
 
        function widget($args, $instance) {
                $cache = wp_cache_get('widget_recent_posts_x_inc', 'widget');
 
                if ( !is_array($cache) )
                        $cache = array();
 
                if ( ! isset( $args['widget_id'] ) )
                        $args['widget_id'] = $this->id;
 
                if ( isset( $cache[ $args['widget_id'] ] ) ) {
                        echo $cache[ $args['widget_id'] ];
                        return;
                }
 
                ob_start();
                extract($args);
 
                $title = apply_filters('widget_title', empty($instance['title']) ? __('Posts Recentes', 'mwpress') : $instance['title'], $instance, $this->id_base);
                if ( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
                        $number = 10;
                $exclude = empty( $instance['exclude'] ) ? '' : $instance['exclude'];
 
                $r = new WP_Query(array('posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true, 'category__in' => explode(',', $exclude) ));
                if ($r->have_posts()) :
?><?php // Data / Autor
		?>
                <?php //echo print_r(explode(',', $exclude)); ?>
                <?php echo $before_widget; ?>
                <?php if ( $title ) echo $before_title . $title . $after_title; ?>
                <ul style="padding-top:10px;">
                 <?php  while ($r->have_posts()) : $r->the_post(); ?>
                <li style="padding-bottom:10px;">
				<?php
				
				$time = get_the_time("j/m/y g:i A"); $autor = get_the_author();
				$reviewhab = redux_post_meta( "mwpress_opt", get_the_ID(), "review_hab_this" ); 
				if ($reviewhab == true) {include (''.get_template_directory().'/partes/content/include-review.php');}
				
				
				?>

				<table><tr><td style="width:90px; position:relative"><a href="<?php the_permalink(); ?>"><span class="revM corSec"><?php if ($reviewhab == true) {echo $mediaG;} ?></span>	<?php the_post_thumbnail( 'thumb-mwpress','style=width:80px;position:relative' ); ?> </a></td>
				<td style="padding-left:10px;"><a href="<?php the_permalink() ?>" title="<?php echo esc_attr(get_the_title() ? get_the_title() : get_the_ID()); ?>"><h2 class="postlistwidT"><?php echo size_title(45); ?></h2></a>
				<span class="metapostcont"> <?php echo $time; ?></span>
				</td></tr></table>
				</li>
				
			   <?php endwhile; ?>
                </ul>
                <?php echo $after_widget; ?>
<?php
                // Reset the global $the_post as this query will have stomped on it
                wp_reset_postdata();
 
                endif;
 
                $cache[$args['widget_id']] = ob_get_flush();
                wp_cache_set('widget_recent_posts', $cache, 'widget');
        }
 
        function update( $new_instance, $old_instance ) {
                $instance = $old_instance;
                $instance['title'] = strip_tags($new_instance['title']);
                $instance['number'] = (int) $new_instance['number'];
                $instance['exclude'] = strip_tags( $new_instance['exclude'] );
                $this->flush_widget_cache();
 
                $alloptions = wp_cache_get( 'alloptions', 'options' );
                if ( isset($alloptions['widget_recent_entries']) )
                        delete_option('widget_recent_entries');
 
                return $instance;
        }
 
        function flush_widget_cache() {
                wp_cache_delete('widget_recent_posts', 'widget');
        }
 
        function form( $instance ) {
                $title = isset($instance['title']) ? esc_attr($instance['title']) : '';
                $number = isset($instance['number']) ? absint($instance['number']) : 5;
                $exclude = isset($instance['exclude']) ? esc_attr($instance['exclude']) : '';
?>
                <p><label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Título', 'mwpress'); ?></label>
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" /></p>
 
                <p><label for="<?php echo $this->get_field_id('number'); ?>"><?php _e('Número de posts para exibir', 'mwpress'); ?></label>
                <input id="<?php echo $this->get_field_id('number'); ?>" name="<?php echo $this->get_field_name('number'); ?>" type="text" value="<?php echo $number; ?>" size="3" /></p>
               
                <p>
                        <label for="<?php echo $this->get_field_id('exclude'); ?>"><?php _e( 'ID das Categorias a serem exibidas', 'mwpress' ); ?></label> <input type="text" value="<?php echo $exclude; ?>" name="<?php echo $this->get_field_name('exclude'); ?>" id="<?php echo $this->get_field_id('exclude'); ?>" class="widefat" />
                        <br />
                        <small><?php _e( 'Coloque os IDs das categorias separados por vírgula', 'mwpress' ); ?></small>
                </p>
<?php
        }
}
 
function WP_Widget_Recent_Posts_Include_init() {
    unregister_widget('WP_Widget_Recent_Posts');
    register_widget('WP_Widget_Recent_Posts_Include');
}
 
add_action('widgets_init', 'WP_Widget_Recent_Posts_Include_init');
 
?>