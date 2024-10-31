<?php

/********************
* Piw plugin Options*
********************/


/********************
creates function*****
********************/

function piw_options_page() {

     global $piw_options;
     ob_start(); ?>
	 
	  <div class="wrap">
	 <h2>Post widget plugin options</h2>
	 <p> Here You can change your settings for Post widget plugin </p>
	
	 
	
	 <form method="post" action="options.php">
	 
	 <?php settings_fields('piw_settings_group');
 if ($piw_options['piw_status_options'] == 1 ) { $publish_checked_status ='checked';} elseif ($piw_options['piw_status_options'] == 2) {$pending_checked_status='checked';} elseif ($piw_options['piw_status_options'] == 3) {$draft_checked_status='checked';} elseif($piw_options['piw_status_options'] == 4) {$private_checked_status='checked';} 
	 
	 
	 ?>
	 
	 
		<center><td><b><?php _e('Select default post status after sumbiting post','piw_status_options') ?></b></td> </center>
		<br />  <center>  
<label class="checkbox" for="piw_settings[piw_status_options]" > </label>
 <b>publish</b><input type="radio" id="piw_settings[piw_status_options]" value="1" name="piw_settings[piw_status_options]" <?php echo $publish_checked_status?> /><br/> 
 <b>pending review</b><input type="radio" id="piw_settings[piw_status_options]" value="2" name="piw_settings[piw_status_options]" <?php echo $pending_checked_status?> /><br/>
  <b>draft</b><input type="radio" id="piw_settings[piw_status_options]" value ="3" name="piw_settings[piw_status_options]" <?php echo $draft_checked_status?> /> <br />
  <b>private</b><input type="radio" id="piw_settings[piw_status_options]" value ="4" name="piw_settings[piw_status_options]" <?php echo $private_checked_status?>   />
 
 
             <br />
			  <br />
			   <br />
			<b> Your Default text before Post title input </b> <input type="text" name="piw_settings[default_post_title]" id="piw_settings[default_post_title]" size="100" value="<?php echo $piw_options['default_post_title'] ?> " /> <br /> <br /><br />
			<b> Your Default text before Post content input </b> <input type="text" name="piw_settings[default_post_content]" id="piw_settings[default_post_content]" size="100" value="<?php echo $piw_options['default_post_content'] ?>" /> <br />
	
		 <br/>
 <b> looking for guest Posting Plugin  ? </b></br />
 <b> check our <a href="http://phppoet.com/wp-guest-posting-plugin-for-wordpress/">wordpress guest posting plugin</a> </b> </br />
						
	 <br /><center><input type="submit" value="Update options" class="primary-button" /></center> 
     </form>
	
	 <p class="submit">
	
	 </p>
	 
	
	 <center><p> add    <b>[post-widget]</b> shortcode on the page or post where you want to use it.</p></center> <br />

	 </div>
	 
	 
	 <br />

	 <?php
	 
	 echo ob_get_clean();
}  
     function piw_add_options_link() {
	 
	 add_options_page('post it widget plugin options','Post it widget','manage_options','piw-options','piw_options_page');
	 }
	 add_action('admin_menu','piw_add_options_link');
	 
	 
	 
	 function piw_register_settings() {
	   register_setting('piw_settings_group','piw_settings');
	 }
	 
	 add_action ('admin_init','piw_register_settings');
	 
	 // Add settings link on plugin page
function piw_plugin_action_links( $links, $file ) {
	if ( $file == plugin_basename( dirname(__FILE__).'/post-it-widget.php' ) ) {
		$links[] = '<a href="admin.php?page=piw-options">'.__('Settings').'</a>';
	}

	return $links;
}

add_filter( 'plugin_action_links', 'piw_plugin_action_links', 10, 2 );
	 
	 
?>