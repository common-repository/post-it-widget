<?php


if( 'POST' == $_SERVER['REQUEST_METHOD'] && !empty( $_POST['action'] ) &&  $_POST['action'] == "new_post") {

	
	if (isset($_POST['submit'])) {
    		$error = "";


    	if (!empty($_POST['title'])) {
    		$title = $_POST['title'];
   	 } else {
   	 	$error .= "Please add a title<br />";
   	}

    	if (!empty($_POST['description'])) {
    		$description = $_POST['description'];
   	 } else {
   		$error .= "Please add a description<br />";
   	}

	 $PostitWidget = $_POST['PostitWidget'];
	 
	 global $piw_options;
	 if ($piw_options['piw_status_options'] == 1 ) {
$xxx_post_status = 'publish';
} elseif ($piw_options['piw_status_options'] == 2 ) {
$xxx_post_status = 'pending';
} elseif ($piw_options['piw_status_options'] == 3 ) {
$xxx_post_status = 'draft'; }
elseif ($piw_options['piw_status_options'] == 4 ) {
$xxx_post_status = 'private'; }
	 
	 
	 if (empty($error)) {
			$new_post = array(
			'post_title'	=>	$title,
			'post_content'	=>	$description,
			'post_category'	=>	array($_POST['cat']),  
			'post_status'	=>	$xxx_post_status,      
			'post_type'	=>	'post',  
			'PostitWidget'	=>	$PostitWidget
		);

		//insert post
		
		
		
        $pid = wp_insert_post($new_post);
		$link = get_permalink( $pid );
       if ( $piw_options['piw_status_options'] == 1 ) { 
echo '<p>Your Post Has been published. You can view it at <b></p><a href="' . $link . '">' .$link. ' </a></b> <br /><br />';
		}
        
		if( $piw_options['piw_status_options'] == 2 )
{echo '<p>Your Post Has been submitted for review. You can view it at <b></p><a href="' . $link . '">' .$link. ' </a></b> after approval <br /> <br />';} 
 
        if ( $piw_options['piw_status_options'] == 3 ) {
echo ' <p>Your Post Has been submitted for review. You can view it at 
 </p><b><a href="' . $link . '">' .$link. ' </a></b> after approval <br /> <br />';
 } 
        if ( $piw_options['piw_status_options'] == 4 )  {
 
 echo '<p>Your Post Has been submitted for review. You can view it at 
 </p><b><a href="' . $link . '">' .$link. ' </a> </b> after approval <br /><br />';
 }
		
		

		//ADD OUR CUSTOM FIELDS 
		add_post_meta($pid, 'rating', $PostitWidget, true); 
} 
	} 
} 


do_action('wp_insert_post', 'wp_insert_post');
?>