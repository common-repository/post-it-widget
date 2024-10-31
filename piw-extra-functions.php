<?php

function piw_widget_shortcode_function() {



  include('piw-widget.php');
}


function register_shortcodes(){
   add_shortcode('post-widget', 'piw_widget_shortcode_function');
}

add_action( 'init', 'register_shortcodes');
?>