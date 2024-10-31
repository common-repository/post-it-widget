<?php
class PostitWidget extends WP_Widget {
 
    function PostitWidget() {
        parent::WP_Widget( false, $name = 'Post it widget' );
    }
 
    function widget( $args, $instance ) {
        extract( $args );
        $title = apply_filters( 'widget_title', $instance['title'] );
        echo $before_widget;
        if ($title) {
            echo $before_title . $title . $after_title;
        }
 
        // Display RSS info
        PostitDisplay();
        echo $after_widget;
    }
 
    
 
    
}
 
function PostitDisplay() {
     
	include('piw-widget.php');
	 
	 
} 
add_action( 'widgets_init', 'PostitWidgetInit' );
 
function PostitWidgetInit() {
    register_widget( 'PostitWidget' );
}
 
?>