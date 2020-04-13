<?php
/*
Plugin Name: Virtual Ninjas using default email
Description: Changes the default user emails
Version: 1.0
Author: Ferdinand Lazarte
Author URI: https://web.facebook.com/ferdinand.p.lazarte
*/

/**
 * redefine new user notification function
 *
 * emails new users their login info
 *
 * @author  Ferdinand Lazarte <ferdinandlazarte2017@gmail.com>
 * @param   integer $user_id user id
 * @param   string $plaintext_pass optional password
 */
if ( !function_exists( 'wp_new_user_notification' ) ) {
    function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {

        // set content type to html
        add_filter( 'wp_mail_content_type', 'wpmail_content_type' );

        // user
        $user = new WP_User( $user_id );
        $user_login = stripslashes($user->user_login);
        $userEmail = stripslashes( $user->user_email );
        $siteUrl = get_site_url();
        $logoUrl = plugin_dir_url( __FILE__ ).'/logo.PNG';   
        $subject = 'Welcome to Virtual Ninjas';
        $headers = 'From: Virtual Ninjas <noreply@virtualninjas.work>';

        // admin email
        $message  = sprintf(__('New user registration for  %s:'), get_option('blogname')) . "\r\n\r\n";
        $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
        $message .= sprintf(__('E-mail: %s'), $user_email) . "\r\n";
        // $message  = "A new user has been created"."\r\n\r\n";
        // $message .= 'Email: '.$userEmail."\r\n";
        @wp_mail( get_option( 'admin_email' ), 'New User Created', $message, $headers );

        if ( empty($plaintext_pass) )
            return;
         $message1  = __('Hi there,') . "\r\n\r\n";
         $message1 .= sprintf(__("Welcome to %s! Here's how to log in:"), get_option('blogname')) . "\r\n\r\n";
         $message1 .= wp_login_url() . "\r\n";
         $message1 .= sprintf(__('Username: %s'), $user_login) . "\r\n";
         $message1 .= sprintf(__('Password: %s'), $plaintext_pass) . "\r\n\r\n";
         $message1 .= sprintf(__('If you have any problems, please contact me at %s.'), get_option('admin_email')) . "\r\n\r\n";
         $message1 .= __('Virtual Ninjas Management!');

        ob_start();
        include plugin_dir_path( __FILE__ ).'/email_welcome.php';
        $message = ob_get_contents();
        ob_end_clean();

        @wp_mail( $userEmail, $subject, $message, $headers );

        // remove html content type
        remove_filter ( 'wp_mail_content_type', 'wpmail_content_type' );
    }
}

// // Redefine user notification function
// //template number 2
// if ( !function_exists('wp_new_user_notification') ) {
//     function wp_new_user_notification( $user_id, $plaintext_pass = '' ) {
//         $user = new WP_User($user_id);

//         $user_login = stripslashes($user->user_login);
//         $user_email = stripslashes($user->user_email);

//         $message  = sprintf(__('New user registration for  %s:'), get_option('blogname')) . "\r\n\r\n";
//         $message .= sprintf(__('Username: %s'), $user_login) . "\r\n\r\n";
//         $message .= sprintf(__('E-mail: %s'), $user_email) . "\r\n";

//         @wp_mail(get_option('admin_email'), sprintf(__('[%s] New User Registration'), get_option('blogname')), $message);

//         if ( empty($plaintext_pass) )
//             return;

//         $message  = __('Hi there,') . "\r\n\r\n";
//         $message .= sprintf(__("Welcome to %s! Here's how to log in:"), get_option('blogname')) . "\r\n\r\n";
//         $message .= wp_login_url() . "\r\n";
//         $message .= sprintf(__('Username: %s'), $user_login) . "\r\n";
//         $message .= sprintf(__('Password: %s'), $plaintext_pass) . "\r\n\r\n";
//         $message .= sprintf(__('If you have any problems, please contact me at %s.'), get_option('admin_email')) . "\r\n\r\n";
//         $message .= __('Virtual Ninjas Management!');

//         wp_mail($user_email, sprintf(__('[%s] Your username and password'), get_option('blogname')), $message);

//     }
// }

/**
 * wpmail_content_type
 * allow html emails
 *
 * @author Ferdinand Lazarte <ferdinandlazarte2017@gmail.com>
 * @return string
 */
function wpmail_content_type() {

    return 'text/html';
}