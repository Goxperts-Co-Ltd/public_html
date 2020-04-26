<?php

	// Utilities

	include( 'configure/utilities.php' );

	// CONFIG

	include( 'configure/configure.php' );

	// JAVASCRIPT & CSS

	include( 'configure/js-css.php' );

	// SHORTCODES

	include( 'configure/shortcodes.php' );

	// ACF

	include( 'configure/acf.php' );

	// HOOKS ADMIN
//main menu
function wp_get_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
 
    foreach ($array_menu as $key => $m) {
		if($key === 7){
		break;
		}  
        if (empty($m->menu_item_parent)) {
			if($m->title == 'Want a Job'){

				echo '<li class="nav-item cta cta-colored"><a href="';
				 echo $m->url;
				 echo '" class="nav-link">';
				//echo '<h2>';
				echo  $m->title;
				// echo '</h2>';
				echo '</a></li>';
	
				}elseif($m->title == 'Post a Job'){
				echo '<li class="nav-item cta mr-md-1"><a href="';
				 echo $m->url;
				 echo '" class="nav-link">';
				//echo '<h2>';
				echo  $m->title;
				// echo '</h2>';
				echo '</a></li>';
				}else{

				echo '<li class="nav-item active"><a href="';
				echo $m->url;
				echo '" class="nav-link">';
				//echo '<h2>';
				echo  $m->title;
				// echo '</h2>';
				 echo '</a></li>';					
			   }        
        }
    }
   
    return $menu;
}

//Employers footer menu
function wp_get_employers_footer_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
 
    foreach ($array_menu as $m) {  
		if (empty($m->menu_item_parent)) {     
			echo '<li><a href="';
 			echo $m->url;
 			echo '" class="pb-1 d-block">';
			//echo '<h2>';
			echo  $m->title;
			// echo '</h2>';
			echo '</a></li>';  
        }
    }
   
    return $menu;
}

//Candidate footer menu
function wp_get_candidate_footer_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
 
    foreach ($array_menu as $m) {  
		if (empty($m->menu_item_parent)) {     
			echo '<li><a href="';
 			echo $m->url;
 			echo '" class="pb-1 d-block">';
			//echo '<h2>';
			echo  $m->title;
			// echo '</h2>';
			echo '</a></li>';  
        }
    }
   
    return $menu;
}

//Social Media footer menu
function wp_get_social_media_footer_menu_array($current_menu) {

    $array_menu = wp_get_nav_menu_items($current_menu);
 
    foreach ($array_menu as $key => $m) {
		if (empty($m->menu_item_parent)) {     
			if($m->title == 'Twitter'){
				echo '<li class="ftco-animate"><a href="';
				echo $m->url;
			    echo '"><span class="icon-twitter"></span></a></li>';
			}elseif($m->title == 'Facebook'){
				echo '<li class="ftco-animate"><a href="';
				echo $m->url;
				echo '"><span class="icon-facebook"></span></a></li>';
			}elseif($m->title == 'Instagram'){
				echo '<li class="ftco-animate"><a href="';
				echo $m->url;
				echo '"><span class="icon-instagram"></span></a></li>';
			}else{
				//do nothing
			}
        }
    }
   
    return $menu;
}




function get_primary_category( $post = 0 ) {
if ( !$post ) {
$post = get_the_ID();
}
// SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
$category = get_the_category( $post );

// If post has a category assigned.
if ($category){
$category_display = '';
$category_slug = '';
$category_link = '';
$category_id = '';

if ( class_exists('WPSEO_Primary_Term') )
{
  // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
  $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id( $post ) );
  $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
  $term = get_term( $wpseo_primary_term );
  if (is_wp_error($term)) {
    // Default to first category (not Yoast) if an error is returned
    $category_display = $category[0]->name;
    $category_slug = $category[0]->slug;
    $category_link = get_category_link( $category[0]->term_id );
    $category_id = $category[0]->term_id;


  } else {
    // Yoast Primary category
    $category_display = $term->name;
    $category_slug = $term->slug;
    $category_link = get_category_link( $term->term_id );
    $category_id = $term->term_id;
 
    
    
  }
}
else {
  // Default, display the first category in WP's list of assigned categories
  $category_display = $category[0]->name;
  $category_slug = $category[0]->slug;
  $category_link = get_category_link( $category[0]->term_id );
  $category_id = $term->term_id;

  
}


 echo $category_display;


}
return $primary_category;
}

//get the primary url of category
function get_primary_url( $post = 0 ) {
	if ( !$post ) {
	$post = get_the_ID();
	}
	// SHOW YOAST PRIMARY CATEGORY, OR FIRST CATEGORY
	$category = get_the_category( $post );
	
	// If post has a category assigned.
	if ($category){
	$category_display = '';
	$category_slug = '';
	$category_link = '';
	$category_id = '';
	
	if ( class_exists('WPSEO_Primary_Term') )
	{
	  // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
	  $wpseo_primary_term = new WPSEO_Primary_Term( 'category', get_the_id( $post ) );
	  $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
	  $term = get_term( $wpseo_primary_term );
	  if (is_wp_error($term)) {
		// Default to first category (not Yoast) if an error is returned
		$category_display = $category[0]->name;
		$category_slug = $category[0]->slug;
		$category_link = get_category_link( $category[0]->term_id );
		$category_id = $category[0]->term_id;
	
	
	  } else {
		// Yoast Primary category
		$category_display = $term->name;
		$category_slug = $term->slug;
		$category_link = get_category_link( $term->term_id );
		$category_id = $term->term_id;
	 
		
		
	  }
	}
	else {
	  // Default, display the first category in WP's list of assigned categories
	  $category_display = $category[0]->name;
	  $category_slug = $category[0]->slug;
	  $category_link = get_category_link( $category[0]->term_id );
	  $category_id = $term->term_id;
	
	  
	}
	
	
	 echo $category_link;
	
	
	}
	return $primary_category;
	}

//remove job listing to writers user role
function  remove_admin_job_style_backend(){
	$user = wp_get_current_user();
    if(in_array('writer', $user->roles)){  
         echo '<style type="text/css">
            li#menu-posts-awsm_job_openings{
            display: none!important;
            }
              </style>';  
    }
}
add_filter('admin_head','remove_admin_job_style_backend');

//set view per specific user roles
function  customize_admin_user_view_backend(){
	$user = wp_get_current_user();	
    if(!in_array('administrator', $user->roles)){  
		 echo '
		 <style type="text/css">

		 div#wpfooter,
		 div#screen-meta-links,
		 div.update-nag,
		 li#wp-admin-bar-Protection,
		 li#wp-admin-bar-wp-logo,
		 a[href^="admin.php?page=pm_projects#/premium"],
		 a[href^="tools.php"],
		 li#menu-tools,
		 tr.user-rich-editing-wrap,
		 tr.user-admin-color-wrap,
		 tr.user-comment-shortcuts-wrap,
		 tr.show-admin-bar.user-admin-bar-front-wrap,
		 tr.user-wikipedia-wrap,
		 a[href="https://en.gravatar.com/"],
		 li#menu-media,
		 li#wp-admin-bar-updates,
		 span.erp-help,
		 a.router-link-exact-active.router-link-active{
		   display: none!important;
		 }

        </style>';  
    }
}
add_filter('admin_head','customize_admin_user_view_backend');

//customize admin bar title site name
add_filter('admin_title', 'my_admin_title', 10, 2);
function my_admin_title($admin_title, $title)
{
        return get_bloginfo('name').' &bull; '.$title;
}
//login title
function custom_login_title( $login_title ) {
	return str_replace(array( ' &lsaquo;', ' &#8212; WordPress'), array( ' &bull;', ''),$login_title );
}
add_filter( 'login_title', 'custom_login_title' );


// //custom breadcrumps

// function get_hansel_and_gretel_breadcrumbs()
// {
//     // Set variables for later use
//   //  $here_text        = __( 'You are currently here!' );
//     $home_link        = home_url('/');
//     $home_text        = __( 'Home' );
//     $link_before      = '<span typeof="v:Breadcrumb">';
//     $link_after       = '</span>';
//     $link_attr        = ' rel="v:url" property="v:title" class="blue"';
//     $link             = $link_before . '<a' . $link_attr . ' href="%1$s">%2$s</a>' . $link_after;
//     $delimiter        = ' &raquo; ';              // Delimiter between crumbs
//     $before           = '<span class="current">'; // Tag before the current crumb
//     $after            = '</span>';                // Tag after the current crumb
//     $page_addon       = '';                       // Adds the page number if the query is paged
//     $breadcrumb_trail = '';
//     $category_links   = '';

//     /** 
//      * Set our own $wp_the_query variable. Do not use the global variable version due to 
//      * reliability
//      */
//     $wp_the_query   = $GLOBALS['wp_the_query'];
//     $queried_object = $wp_the_query->get_queried_object();

//     // Handle single post requests which includes single pages, posts and attatchments
//     if ( is_singular() ) 
//     {
//         /** 
//          * Set our own $post variable. Do not use the global variable version due to 
//          * reliability. We will set $post_object variable to $GLOBALS['wp_the_query']
//          */
//         $post_object = sanitize_post( $queried_object );

//         // Set variables 
//         $title          = apply_filters( 'the_title', $post_object->post_title );
//         $parent         = $post_object->post_parent;
//         $post_type      = $post_object->post_type;
//         $post_id        = $post_object->ID;
//         $post_link      = $before . $title . $after;
//         $parent_string  = '';
//         $post_type_link = '';

//         if ( 'post' === $post_type ) 
//         {
//             // Get the post categories
//             $categories = get_the_category( $post_id );
//             if ( $categories ) {
//                 // Lets grab the first category
//                 $category  = $categories[0];

//                 $category_links = get_category_parents( $category, true, $delimiter );
//                 $category_links = str_replace( '<a',   $link_before . '<a' . $link_attr, $category_links );
//                 $category_links = str_replace( '</a>', '</a>' . $link_after,             $category_links );
//             }
//         }

//         if ( !in_array( $post_type, ['post', 'page', 'attachment'] ) )
//         {
//             $post_type_object = get_post_type_object( $post_type );
//             $archive_link     = esc_url( get_post_type_archive_link( $post_type ) );

//             $post_type_link   = sprintf( $link, $archive_link, $post_type_object->labels->singular_name );
//         }

//         // Get post parents if $parent !== 0
//         if ( 0 !== $parent ) 
//         {
//             $parent_links = [];
//             while ( $parent ) {
//                 $post_parent = get_post( $parent );

//                 $parent_links[] = sprintf( $link, esc_url( get_permalink( $post_parent->ID ) ), get_the_title( $post_parent->ID ) );

//                 $parent = $post_parent->post_parent;
//             }

//             $parent_links = array_reverse( $parent_links );

//             $parent_string = implode( $delimiter, $parent_links );
//         }

//         // Lets build the breadcrumb trail
//         if ( $parent_string ) {
//             $breadcrumb_trail = $parent_string . $delimiter . $post_link;
//         } else {
//             $breadcrumb_trail = $post_link;
//         }

//         if ( $post_type_link )
//             $breadcrumb_trail = $post_type_link . $delimiter . $breadcrumb_trail;

//         if ( $category_links )
//             $breadcrumb_trail = $category_links . $breadcrumb_trail;
//     }

//     // Handle archives which includes category-, tag-, taxonomy-, date-, custom post type archives and author archives
//     if( is_archive() )
//     {
//         if (    is_category()
//              || is_tag()
//              || is_tax()
//         ) {
//             // Set the variables for this section
//             $term_object        = get_term( $queried_object );
//             $taxonomy           = $term_object->taxonomy;
//             $term_id            = $term_object->term_id;
//             $term_name          = $term_object->name;
//             $term_parent        = $term_object->parent;
//             $taxonomy_object    = get_taxonomy( $taxonomy );
//             $current_term_link  = $before . $taxonomy_object->labels->singular_name . ': ' . $term_name . $after;
//             $parent_term_string = '';

//             if ( 0 !== $term_parent )
//             {
//                 // Get all the current term ancestors
//                 $parent_term_links = [];
//                 while ( $term_parent ) {
//                     $term = get_term( $term_parent, $taxonomy );

//                     $parent_term_links[] = sprintf( $link, esc_url( get_term_link( $term ) ), $term->name );

//                     $term_parent = $term->parent;
//                 }

//                 $parent_term_links  = array_reverse( $parent_term_links );
//                 $parent_term_string = implode( $delimiter, $parent_term_links );
//             }

//             if ( $parent_term_string ) {
//                 $breadcrumb_trail = $parent_term_string . $delimiter . $current_term_link;
//             } else {
//                 $breadcrumb_trail = $current_term_link;
//             }

//         } elseif ( is_author() ) {

//             $breadcrumb_trail = __( 'Author archive for ') .  $before . $queried_object->data->display_name . $after;

//         } elseif ( is_date() ) {
//             // Set default variables
//             $year     = $wp_the_query->query_vars['year'];
//             $monthnum = $wp_the_query->query_vars['monthnum'];
//             $day      = $wp_the_query->query_vars['day'];

//             // Get the month name if $monthnum has a value
//             if ( $monthnum ) {
//                 $date_time  = DateTime::createFromFormat( '!m', $monthnum );
//                 $month_name = $date_time->format( 'F' );
//             }

//             if ( is_year() ) {

//                 $breadcrumb_trail = $before . $year . $after;

//             } elseif( is_month() ) {

//                 $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ), $year );

//                 $breadcrumb_trail = $year_link . $delimiter . $before . $month_name . $after;

//             } elseif( is_day() ) {

//                 $year_link        = sprintf( $link, esc_url( get_year_link( $year ) ),             $year       );
//                 $month_link       = sprintf( $link, esc_url( get_month_link( $year, $monthnum ) ), $month_name );

//                 $breadcrumb_trail = $year_link . $delimiter . $month_link . $delimiter . $before . $day . $after;
//             }

//         } elseif ( is_post_type_archive() ) {

//             $post_type        = $wp_the_query->query_vars['post_type'];
//             $post_type_object = get_post_type_object( $post_type );

//             $breadcrumb_trail = $before . $post_type_object->labels->singular_name . $after;

//         }
//     }   

//     // Handle the search page
//     if ( is_search() ) {
//         $breadcrumb_trail = __( 'Search query for: ' ) . $before . get_search_query() . $after;
//     }

//     // Handle 404's
//     if ( is_404() ) {
//         $breadcrumb_trail = $before . __( 'Error 404' ) . $after;
//     }

//     // Handle paged pages
//     if ( is_paged() ) {
//         $current_page = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' );
//         $page_addon   = $before . sprintf( __( ' ( Page %s )' ), number_format_i18n( $current_page ) ) . $after;
//     }

//     $breadcrumb_output_link  = '';
//     $breadcrumb_output_link .= '<div>';
//     if (is_home() || is_front_page()) {
//         // Do not show breadcrumbs on page one of home and frontpage
//       //   $breadcrumb_output_link .= '<a href="' . $home_link . '" class="crumping-text">' . $home_text . '</a>';
//       //   $breadcrumb_output_link .= $page_addon;
//         if ( is_paged()) {
//          //   $breadcrumb_output_link .= $here_text . $delimiter;
//             $breadcrumb_output_link .= '<a href="' . $home_link . '" class="blue">' . $home_text . '</a>';
//             $breadcrumb_output_link .= $page_addon;
//         }
//     } else {
//       //  $breadcrumb_output_link .= $here_text . $delimiter;
//         $breadcrumb_output_link .= '<a href="' . $home_link . '" rel="v:url" property="v:title" class="blue">' . $home_text . '</a>';
//         $breadcrumb_output_link .= $delimiter;
//         $breadcrumb_output_link .= $breadcrumb_trail;
//         $breadcrumb_output_link .= $page_addon;
//     }
//     $breadcrumb_output_link .= '</div><!-- .breadcrumbs -->';

//     return $breadcrumb_output_link;
// }


// //customize Leave  A  comment in to article page and post page
// // comment form fields:
add_filter( 'comment_form_default_fields', 'mo_comment_fields_custom_html' );
function mo_comment_fields_custom_html( $fields ) {
    // first unset the existing fields:
    unset( $fields['comment'] );
    unset( $fields['author'] );
    unset( $fields['email'] );
    unset( $fields['url'] );
    //  re-define them as needed:
    $fields = [

            'author' => '  <div class="comment-form-wrap pt-5"><div class="form-group">' . ' <label for="name">' . __( '', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label>' ,
        
            '<input class="form-control" id="name" name="author" placeholder="Name *" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30" maxlength="245"' . $aria_req . $html_req . ' required /></div>',
        'email'  => '<div class="form-group"><label for="email">' . __( '', 'textdomain'  ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
            '<input  class="form-control" id="email" placeholder="Email *" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" maxlength="100" aria-describedby="email-notes"' . $aria_req . $html_req  . ' required /></div>',
            'comment_field' => '<div class="form-group"><label for="message">' . _x( '', 'noun', 'textdomain' ) . '</label> ' ,
            '<textarea class="form-control" id="comment" placeholder="Message *" name="comment" cols="45" rows="5" maxlength="65525" aria-required="true" required="required"></textarea></div><div class="form-group">
			<input type="submit" value="Post Comment" class="btn py-3 px-4 btn-primary">
		  </div></div>',
        
    ];
    
    return $fields;
}
// remove default comment form 
add_filter( 'comment_form_defaults', 'mo_remove_default_comment_field', 10, 1 ); 
function mo_remove_default_comment_field( $defaults ) { if ( isset( $defaults[ 'comment_field' ] ) ) { $defaults[ 'comment_field' ] = ''; } return $defaults; }


// //woocomerce theme support
// function mytheme_add_woocommerce_support() {
//     add_theme_support( 'woocommerce' );
// }
// add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

// // Remove default link around product entries
// remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
add_action('template_redirect', 'my_check_login');
function my_check_login(){
    if( is_page('login') && isset($_POST['login_Sbumit']) ){
    // check input and
    // do my login stuff here 
    $creds                  = array();
	$creds['user_login']    = stripslashes( trim( $_POST['userName'] ) );
	$creds['user_password'] = stripslashes( trim( $_POST['passWord'] ) );
	$creds['remember']      = isset( $_POST['rememberMe'] ) ? sanitize_text_field( $_POST['rememberMe'] ) : '';
	$redirect_to            = esc_url_raw( $_POST['redirect_to'] );
	$secure_cookie          = null;
		
	if($redirect_to == '')
		$redirect_to= get_site_url(). '/dashboard/' ; 
		
		if ( ! force_ssl_admin() ) {
			$user = is_email( $creds['user_login'] ) ? get_user_by( 'email', $creds['user_login'] ) : get_user_by( 'login', sanitize_user( $creds['user_login'] ) );

		if ( $user && get_user_option( 'use_ssl', $user->ID ) ) {
			$secure_cookie = true;
			force_ssl_admin( true );
		}
	}

	if ( force_ssl_admin() ) {
		$secure_cookie = true;
	}

	if ( is_null( $secure_cookie ) && force_ssl_login() ) {
		$secure_cookie = false;
	}

	$user = wp_signon( $creds, $secure_cookie );

	if ( $secure_cookie && strstr( $redirect_to, 'wp-admin' ) ) {
		$redirect_to = str_replace( 'http:', 'https:', $redirect_to );
	}

	if ( ! is_wp_error( $user ) ) {
		wp_safe_redirect( $redirect_to );			
	} else {			
		if ( $user->errors ) {
			$errors['invalid_user'] = __('<strong>ERROR</strong>: Invalid user or password.'); 
		} else {
			$errors['invalid_user_credentials'] = __( 'Please enter your username and password to login.', 'kvcodes' );
		}
	}		   
	}
	return $errors;
}

//restrict login user to login page
function redirect_login_page() {

    if( is_page( 'login' ) && is_user_logged_in() ) {
        wp_redirect( home_url() );
        exit;
    }

}
add_action( 'template_redirect', 'redirect_login_page' );

//meta description
function term_taxonomy_meta($post, $term_type){
	//yoast seo meta values
	$term = $post->to_array();
	$seperator = '|';
	$sitename = get_bloginfo('name');
	$meta = get_option( 'wpseo_taxonomy_meta');
	$primary_category = get_cat_name($term['category_parent']);
	$term_value = $meta['category'][$term['term_id']][$term_type];
	$term_value = $meta['category'][$term['term_id']][$term_type];
	$term_value = str_replace("%%sep%%", $seperator, $term_value);
	$term_value = str_replace("%%sitename%%",  $sitename, $term_value);
	$term_value = str_replace("%%term_title%%",  $term['name'], $term_value);
	$term_value = str_replace("%%primary_category%%",   $primary_category, $term_value);

return $term_value;
}

//set candidate registration
add_action('template_redirect', 'my_candidate_register');
function my_candidate_register(){
	if( is_page('register') && isset($_POST['Candidate_Register']) ){
  //if(isset($_POST)){
		$response = [];
		$creds                      = array();
		$creds['firstName']         = stripslashes( trim( $_POST['firstName'] ) );
		$creds['lastName']          = stripslashes( trim( $_POST['lastName'] ) );
		$creds['candidateEmail']    = stripslashes( trim( $_POST['candidateEmail'] ) );
		$creds['candidateType']     = stripslashes( trim( $_POST['candidateType'] ) );
		$creds['candidateLocation'] = stripslashes( trim( $_POST['candidateLocation'] ) );
		$creds['personalDesc']      = stripslashes( trim( $_POST['personalDesc'] ) );
		$creds['candidateGender']   = stripslashes( trim( $_POST['candidateGender'] ) );
		$creds['candidateMobile']   = stripslashes( trim( $_POST['candidateMobile'] ) );
		$creds['candidateSource']   = stripslashes( trim( $_POST['candidateSource'] ) );
		$creds['candidateWebsite']  = stripslashes( trim( $_POST['candidateWebsite'] ) );
		$creds['candidatePayType']  = stripslashes( trim( $_POST['candidatePayType'] ) );
		$creds['candidatePayRate']  = stripslashes( trim( $_POST['candidatePayRate'] ) );
		//null muna sa ngayon
		$secure_cookie              = null;

		/**
		 * Candidate data
		 *
		 * @var array
		 */
		$args = array(
			'user_id'    => '',
			'user_email' => $creds['candidateEmail'],
			'work'       => array(
            'employee_id'      => '',
            'designation'      => 0,
            'department'       => 0,
            'location'         => $creds['candidateLocation'],
            'hiring_source'    => $creds['candidateSource'],
            'hiring_date'      => current_time( 'mysql' ),
            'termination_date' => '',
            'date_of_birth'    => '',
            'reporting_to'     => 0,
            'pay_rate'         => $creds['candidatePayRate'],
            'pay_type'         => $creds['candidatePayType'],
            'type'             => $creds['candidateType'],
            'status'           => 'inactive',//set muna natin as inactive para saka na gawin active pag na approve na ang application
             ),
			'personal'   => array(
				'photo_id'        => 0,
				'first_name'      => $creds['firstName'],
				'middle_name'     => '',
				'last_name'       => $creds['lastName'],
				'other_email'     => '',
				'phone'           => '',
				'work_phone'      => '',
				'blood_group'     => '',
				'spouse_name'     => '',
				'father_name'     => '',
				'mother_name'     => '',
				'mobile'          => $creds['candidateMobile'],
				'address'         => '',
				'gender'          => $creds['candidateGender'],
				'marital_status'  => '',
				'nationality'     => '',
				'driving_license' => '',
				'hobbies'         => '',
				'user_url'        => $creds['candidateWebsite'],
				'description'     => $creds['personalDesc'],
				'street_1'        => '',
				'street_2'        => '',
				'city'            => '',
				'country'         => $creds['candidateLocation'],
				'state'           => '',
				'postal_code'     => '',
			),
		);
		 //saved candidate details
		if( erp_hr_employee_create($args)){
	   		 $response['success'] = 'Successfully submitted application. Please wait 2-3 days verification and identification process, your email address will be your register login username and your password will be sent via email once approved.';				
		}
	}
 return $response;
}

function email_check(){
	//real tme validation for email with jquery
	if (isset($_POST)) {
		$email = $_POST['email'];                   
			if (email_exists($email)) {
				$result =  "taken";	
			}else{
			    $result =  "not_taken";
			}
        echo  $result;
	}
	die();
}
add_action( 'wp_ajax_nopriv_email_check', 'email_check' );
add_action( 'wp_ajax_email_check', 'email_check' );

//restrict login user to login page
function redirect_register_page() {

    if( is_page( 'register' ) && is_user_logged_in() ) {
        wp_redirect( home_url() );
        exit;
    }

}
add_action( 'template_redirect', 'redirect_register_page' );

//company registration
//set candidate registration
//add_action('template_redirect', 'my_company_register');
function my_company_register(){
	if($_POST){
		$response = [];
		$creds                      = array();
		$creds['companyName']         = stripslashes( trim( $_POST['companyName'] ) );
		$creds['companyEmail']          = stripslashes( trim( $_POST['companyEmail'] ) );
		$creds['companyPhone']    = stripslashes( trim( $_POST['companyPhone'] ) );
		$creds['webSite']     = stripslashes( trim( $_POST['webSite'] ) );
		$creds['companyLocation'] = stripslashes( trim( $_POST['companyLocation'] ) );
		$creds['companySource']      = stripslashes( trim( $_POST['companySource'] ) );
		$creds['companyNotes']   = stripslashes( trim( $_POST['companyNotes'] ) );
		//null muna sa ngayon
		$secure_cookie              = null;

	}

	echo $creds;
	die();
}
add_action( 'wp_ajax_nopriv_my_company_register', 'my_company_register' );
add_action( 'wp_ajax_my_company_register', 'my_company_register' );

function company_email_check(){
	//real tme validation for email with jquery
	if (isset($_POST)) {
		$email = $_POST['company_email'];                   
			if (email_exists($email)) {
				$result =  "taken";	
			}else{
			    $result =  "not_taken";
			}
        echo  $result;
	}
	die();
}
add_action( 'wp_ajax_nopriv_company_email_check', 'company_email_check' );
add_action( 'wp_ajax_company_email_check', 'company_email_check' );

