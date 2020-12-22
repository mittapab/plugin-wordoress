<?php

// Create menu Link
function ffl_options_menu_link(){
	add_options_page(
		'Facebook Footer Link Options', //title page
		'Facebook Footer Link', // title menu
		'manage_options',
		'ffl-options',
		'ffl_options_content' // function in menu
	);
}

// Create Options Page Content
function ffl_options_content(){
	
	global $ffl_options;

	ob_start(); ?>
		<div class="wrap">
			<h2><?php _e('Facebook Footer Link Settings', 'ffl_domain'); ?></h2>
			<p><?php _e('Settings for the Facebook Footer Link plugin', 'ffl_domain'); ?></p>
			<form method="post" action="options.php">
				<?php settings_fields('ffl_settings_group'); //ฟังก์ชั่นที่ลงทะเบียนกรุ๊ปไว้    ?>

				<div class='form-group'>
				<label for="ffl_settings[enable]"><?php  _e('Enable' , 'ffl_domain');  ?></label> &nbsp;
				<input type="checkbox" name='ffl_settings[enable]' id='ffl_settings[enable]' class='form-control' value='1' <?php checked('1', $ffl_options['enable']);   ?>>
				</div>
                 <br>
				<div class='form-group'>
				<label for="ffl_settings[facebook_url]"><?php  _e('Facebook profile link' , 'ffl_domain');  ?></label><br><br>
				<input type="text" name='ffl_settings[facebook_url]' id='ffl_settings[facebook_url]' class='form-control' value='<?php echo $ffl_options['facebook_url']     ?>'>
				</div>

				<br>
				<div class='form-group'>
				<label for="ffl_settings[link_color]"><?php  _e('Facebook profile link Color' , 'ffl_domain');  ?></label><br><br>
				<input type="color" name='ffl_settings[link_color]' id='ffl_settings[link_color]' class='form-control' value='<?php echo $ffl_options['link_color']     ?>'>
				</div>
                  <br>
				<div class='form-group'>
				<label for="ffl_settings[show_feed]"><?php  _e('Show in feed' , 'ffl_domain');  ?></label> &nbsp;
				<input type="checkbox" name='ffl_settings[show_feed]' id='ffl_settings[show_feed]' class='form-control' value='1' <?php checked('1', $ffl_options['show_feed']);   ?>>
				</div>
                 <br>

               <button type='submit' class='button button-primary'>Save data</button>
			</form>
		</div>
	<?php
	echo ob_get_clean();
}

add_action('admin_menu', 'ffl_options_menu_link');

// Register Settings
function ffl_register_settings(){
	register_setting('ffl_settings_group', 'ffl_settings'); //ffl_settings ตัวแปร array ที่ไว้รับค่าฟิลด์ในฟอร์ม
}

add_action('admin_init', 'ffl_register_settings');