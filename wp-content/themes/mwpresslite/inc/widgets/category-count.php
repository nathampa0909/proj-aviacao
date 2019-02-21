<?php

class Mwpress_Categories_Widget extends WP_Widget{
    function __construct() {
        parent::__construct(
            'Mwpress_Categories_Widget', // Base ID
            __('MWPRESS - CATEGORIAS', 'mwpress'), // Name
            array('description' => __( 'Exibi contagem de categorias', 'mwpress'))
           );
    }
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        //$instance['post_type'] = strip_tags($new_instance['post_type']);
        //$instance['numberOfListings'] = strip_tags($new_instance['numberOfListings']);
        return $instance;
    }
    function form($instance) {
        if( $instance) {
            $title = esc_attr($instance['title']);
        } else {
            $title = '';
        }
        ?>
            <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'sim_most_viewed'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
            </p>

        <?php
    }
    function widget($args, $instance) {
        extract( $args );
        $title = apply_filters('widget_title', $instance['title']);

        echo $before_widget;
        if ( $title ) {
            echo $before_title . $title . $after_title;
        }
        $this->getMostViewedListings();
        echo $after_widget;
    }
    function getMostViewedListings() { //html
        $args = array(
        'type' => 'post'
        );
        $categories = get_categories($args);
        //echo "<pre>";var_dump($categories);echo "</pre>";
        if($categories){
            echo "<div id='widcatcount'><ul>";
            foreach($categories as $cat){
				$colorcat = get_term_meta($cat->cat_ID, 'color', true);
                echo "
				
				<li  class='corPriBdWid'><a href='".site_url().'/category/'.$cat->slug."'  class='corPriC cat-item cat-item-".$cat->term_id."'>".$cat->name." <span class='mwtag2 corSec' style='color:white;float:right; margin-right:20px; background:".$colorcat.";'>".$cat->count."</span></a></li>";
            }   
            echo "</ul></div>";
        }
    }


} //end class

register_widget('Mwpress_Categories_Widget');
 
?>