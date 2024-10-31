<?php

if ( is_user_logged_in() ) {
include ('load-post.php');
} else { echo "you must be loged in to post content"; }

 ?>
	           <?php
						if (!empty($error)) {
							echo '<p class="error"><strong>Your message was NOT sent<br/> The following error(s) returned:</strong><br/>' . $error . '</p>';
						} elseif (!empty($success)) {
							echo '<p class="success">' . $success . '</p>';
						}
					?>
			<?php global $piw_options; ?>
			
	

		
			
			
			
			<style type="text/css">
			
			
			
			input, textarea{
	padding: 9px;
	border: solid 1px #E5E5E5;
	outline: 0;
	font: normal 13px/100% Verdana, Tahoma, sans-serif;
	width: 200px;
	background: #FFFFFF;
	-moz-border-radius:10px;
    -webkit-border-radius:10px;
	}

input:hover, textarea:hover,
input:focus, textarea:focus {
	border-color: #C9C9C9;
	}
.form label {
	margin-left: 10px;
	color: #999999;
	}
.submit input {
	width: auto;
	padding: 7px 08px;
	background: grey;
	border: 0;
	font-size: 12px;
	color: #FFFFFF;
	-moz-border-radius:10px;
    -webkit-border-radius:10px;
	


			</style>
		<form class="form" id="new_post" name="new_post" method="post" action="" class="piw-form" enctype="multipart/form-data">
			<center>
			<p class="esptitle">
				
				<?php if ($piw_options['default_post_title']) { ?><b><?php echo $piw_options['default_post_title']; ?></b> <?php    } else { echo "<b>Enter Your Post Title:</b>";}?><br />
				
								<input class="title"type="text" id="title" value="" tabindex="5" name="title"  />
			</p></center>
                <p class="espcontent">  
			<center>	<label for="description">
				<?php if ($piw_options['default_post_content']) { ?><b><?php echo $piw_options['default_post_content'];?> </b> <?php  } else { echo "<b>Content of your post:</b>";}?> <br />
				
				</p>
				<textarea id="description" tabindex="15" name="description"  rows="10"></textarea>
			</center>
			
			<center> 
				<label for="cat">Choose Your category:</label>
				<?php wp_dropdown_categories( 'tab_index=10&taxonomy=category&hide_empty=0' ); ?>
			</p>
</center>    <center>
			<p class="submit">
				<input type="submit"  value="Submit Your Post" tabindex="40" id="submit" name="submit" />
			</p> </center>

			<input type="hidden" name="action" value="new_post" />
			<?php wp_nonce_field( 'new-post' ); ?>
		
			
		</form>
		
	