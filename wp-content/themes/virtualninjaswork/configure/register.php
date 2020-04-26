<?php

function _add_javascript_register()
	{
		
		  wp_enqueue_script('ajax-script', get_template_directory_uri() . '/register/register.js', array(), null, true );
		  wp_localize_script( 'ajax-script', 'ajax_object', array( 'ajaxurl' =>   admin_url( 'admin-ajax.php' ) ) );
		
	}
	add_action('wp_enqueue_scripts', '_add_javascript_register', 100);