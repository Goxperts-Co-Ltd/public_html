<?php

if ( ! function_exists( 'get_partial' ) ) :

	/**
	 * Load given template with arguments as array.
	 * arguments.
	 * @see     get_template_part().
	 * @see     http://wordpress.stackexchange.com/a/103257
	 * @author  Julien Vasseur julien@poigneedemainvirile.com
	 */
	function get_partial( $slug = null, $name = null, array $params = array(), $prefix = null ) {
		global $posts, $post, $wp_did_header, $wp_query, $wp_rewrite, $wpdb, $wp_version, $wp, $id, $comment, $user_ID;

		/**
		 * Fires before the specified template part file is loaded.
		 *
		 * The dynamic portion of the hook name, `$slug`, refers to the slug name
		 * for the generic template part.
		 *
		 * @param string $slug The slug name for the generic template.
		 * @param string $name The name of the specialized template.
		 */
		do_action( "get_partial_{$slug}", $slug, $name );
		do_action( "get_template_part_{$slug}", $slug, $name );

		$templates = array();
		$name = (string) $name;
		if ( '' !== $name ) {
			$templates[] = "{$slug}-{$name}.php";
		}

		$templates[] = "{$slug}.php";

		$_template_file = locate_template( $templates, false, false );

		if ( is_array( $wp_query->query_vars ) ) {
			extract( $wp_query->query_vars, EXTR_SKIP );
		}

		if ( isset( $s ) ) {
			$s = esc_attr( $s );
		}

		if ( ! is_null( $prefix ) ) {
			$flags = EXTR_PREFIX_ALL;
			// ensure prefix doesn't end with an underscore, it is automatically added by extract()
			if ( '_' === $prefix[ strlen( $prefix ) - 1 ] ) {
				$prefix = substr( $prefix, 0, -1 );
			}
		} else {
			$flags = EXTR_PREFIX_SAME;
			$prefix = '';
		}

		extract( $params, $flags, $prefix );

		require( $_template_file );
	}

endif;

/**
* Change search page slug.
*/

function wp_change_search_url() {
    if ( is_search() && ! empty( $_GET['s'] ) ) {
        wp_redirect( home_url( "/search/" ) . urlencode( get_query_var( 's' ) ) );
        exit();
    }  
}
add_action( 'template_redirect', 'wp_change_search_url' );

// Redefine user notification function
if ( !function_exists('wp_new_user_notification') ) {
    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
        $user = new WP_User($user_id);

        $user_login = stripslashes($user->user_login);
        $user_email = stripslashes($user->user_email);

        $message  = sprintf(__('New user registration for  %s:'), get_option('blogname')) . "\r\n\r\n";
        $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
        $message .= sprintf(__('E-mail: %s'), $user_email) . "\r\n";

        @wp_mail(get_option('admin_email'), sprintf(__('[%s] New User Registration'), get_option('blogname')), $message);

        if ( empty($plaintext_pass) )
            return;

        $message  = __('Hi there,') . "\r\n\r\n";
        $message .= sprintf(__("Welcome to %s! Here's how to log in:"), get_option('blogname')) . "\r\n\r\n";
        $message .= wp_login_url() . "\r\n";
        $message .= sprintf(__('Username: %s'), $user_login) . "\r\n";
        $message .= sprintf(__('Password: %s'), $plaintext_pass) . "\r\n\r\n";
        $message .= sprintf(__('If you have any problems, please contact me at %s.'), get_option('admin_email')) . "\r\n\r\n";
        $message .= __('Virtual Ninjas Management!');

        wp_mail($user_email, sprintf(__('[%s] Your username and password'), get_option('blogname')), $message);

    }
}
