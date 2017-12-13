<?php

/*
Display menu option in Appearance
*/
function bell_register_theme_menu() {
    register_nav_menus( array(
      'main-menu' => __('Main Navigation Menu' ),
      'social-menu' => __( 'Social Links Menu' )
    ));
}
add_action( 'init', 'bell_register_theme_menu' );

/*
Main Logo uploader
*/
function bell_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'bell_logo_section' , array(
	    'title'       => __( 'Main Logo', 'bell' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo ',
	) );

	$wp_customize->add_setting( 'bell_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bell_logo', array(
		    'label'    => __( 'Logo', 'bell' ),
		    'section'  => 'bell_logo_section',
		    'settings' => 'bell_logo',
		) ) );

}
add_action( 'customize_register', 'bell_theme_customizer' );


/*
Navbar Logo uploader
*/

function bell_nav_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'bell_nav_logo_section' , array(
	    'title'       => __( 'Navbar Logo', 'bell_nav' ),
	    'priority'    => 30,
	    'description' => 'Upload a logo for the Navbar ',
	) );

	$wp_customize->add_setting( 'bell_nav_logo' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bell_nav_logo', array(
		    'label'    => __( 'Logo', 'bell_nav' ),
		    'section'  => 'bell_nav_logo_section',
		    'settings' => 'bell_nav_logo',
		) ) );

}
add_action( 'customize_register', 'bell_nav_theme_customizer' );


/*
Background Image
*/
function bell_theme_background_customizer( $wp_customize ) {
    $wp_customize->add_section( 'bell_background_section' , array(
	    'title'       => __( 'Background Image', 'background_image' ),
	    'priority'    => 30,
	    'description' => 'Upload a background image of resolution 1920x1279 ',
	) );

	$wp_customize->add_setting( 'bell_background_image' );

	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'bell_background_image', array(
		    'label'    => __( 'Background Image', 'background_image' ),
		    'section'  => 'bell_background_section',
		    'settings' => 'bell_background_image',
		) ) );

}
add_action( 'customize_register', 'bell_theme_background_customizer' );


/* 
	creating custom input fields for About You in customize section
*/

// function bell_customize_about($wp_customize) 
// {

// 	$wp_customize->add_section("about", array(
// 		"title" => __("About You", "customizer_abouts_sections"),
// 		"priority" => 20,
// 	));
// 	/*
// 		First about 
// 	*/

// 	$wp_customize->add_setting("about1", array(
// 		"default" => "",
// 		"transport" => "refresh", 
// 		/*
// 			transport = refresh,  refresh the page to display changes
// 			transport = postMessage, live preview but needs theme-customizer.js to enable the priview
// 		*/
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"about1",
// 		array(
// 			"label" => __("About Customers", "customizer_about1_label"),
// 			"section" => "about",
// 			"settings" => "about1",
// 			"type" => "text",
// 		)
// 	));
// 	$wp_customize->add_setting("num1", array(
// 		"default" => "0",
// 		"transport" => "refresh",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"num1",
// 		array(
// 			"label" => __("Numbers", "customizer_num1_label"),
// 			"section" => "about",
// 			"settings" => "num1",
// 			"type" => "number",
// 		)
// 	));

// 	/*
// 		Second about 
// 	*/
// 	$wp_customize->add_setting("about2", array(
// 		"default" => "",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"about2",
// 		array(
// 			"label" => __("About Projects done", "customizer_about2_label"),
// 			"section" => "about",
// 			"settings" => "about2",
// 			"type" => "text",
// 		)
// 	));
// 	$wp_customize->add_setting("num2", array(
// 		"default" => "0",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"num2",
// 		array(
// 			"label" => __("Numbers", "customizer_num2_label"),
// 			"section" => "about",
// 			"settings" => "num2",
// 			"type" => "number",
// 		)
// 	));

// 	/*
// 		Third about 
// 	*/
// 	$wp_customize->add_setting("about3", array(
// 		"default" => "",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"about3",
// 		array(
// 			"label" => __("About Hours of Support", "customizer_about3_label"),
// 			"section" => "about",
// 			"settings" => "about3",
// 			"type" => "text",
// 		)
// 	));
// 	$wp_customize->add_setting("num3", array(
// 		"default" => "0",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"num3",
// 		array(
// 			"label" => __("Hours", "customizer_num3_label"),
// 			"section" => "about",
// 			"settings" => "num3",
// 			"type" => "number",
// 		)
// 	));

// 	/*
// 		Fourth about 
// 	*/

// 	$wp_customize->add_setting("about4", array(
// 		"default" => "",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"about4",
// 		array(
// 			"label" => __("About Number of Workers", "customizer_about4_label"),
// 			"section" => "about",
// 			"settings" => "about4",
// 			"type" => "text",
// 		)
// 	));
// 	$wp_customize->add_setting("num4", array(
// 		"default" => "0",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"num4",
// 		array(
// 			"label" => __("Numbers", "customizer_num4_label"),
// 			"section" => "about",
// 			"settings" => "num4",
// 			"type" => "number",
// 		)
// 	));
// }

// add_action("customize_register","bell_customize_about");

/*
	About section live preview
*/
	function about_customizer_live_preview()
	{
		wp_enqueue_script("bell-themecustomizer", get_template_directory_uri() . "/theme-customizer.js", array("jquery", "customize-preview"), '',  true);
	}

	add_action("customize_preview_init", "about_customizer_live_preview");

/*
	Custom post type for About section
*/
	function custom_about() {
	    $labels = array(
		    'name'               => _x( 'About Us', 'post type general name' ),
		    'singular_name'      => _x( 'About Us', 'post type singular name' ),
		    'add_new'            => _x( 'Add New', 'about' ),
		    'add_new_item'       => __( 'Add About' ),
		    'edit_item'          => __( 'Edit About' ),
		    'new_item'           => __( 'New About' ),
		    'all_items'          => __( 'All About Us' ),
		    'view_item'          => __( 'View About' ),
		    'search_items'       => __( 'Search About' ),
		    'not_found'          => __( 'No detail found' ),
		    'not_found_in_trash' => __( 'No details found in the Trash' ), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'About Us'
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Some Details About Your Company',
		    'public'        => true,
		    'menu_position' => 40,
		    'menu_icon'		=> 'dashicons-groups',
		    //'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' ),
		    'supports'      => array( 'title', 'editor'),
		    'has_archive'   => false,
		  );
	  register_post_type( 'about', $args ); 
	}
	add_action( 'init', 'custom_about' );

	function my_updated_about_messages( $messages ) {
	  global $post, $post_ID;
	  $messages['about'] = array(
	    0 => '', 
	    1 => sprintf( __('About updated.')),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('About updated.'),
	    5 => isset($_GET['revision']) ? sprintf( __('About restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('About published.')),
	    7 => __('About saved.'),
	    8 => sprintf( __('About submitted. ')),
	    9 => sprintf( __('About scheduled for: <strong>%1$s</strong>. '), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	    10 => sprintf( __('About draft updated.')),
	  );
	  return $messages;
	}
	add_filter( 'post_updated_messages', 'my_updated_about_messages' );


/*
	Custom post type for Features section
*/
	function custom_features() {
	    $labels = array(
		    'name'               => _x( 'Features', 'post type general name' ),
		    'singular_name'      => _x( 'Feature', 'post type singular name' ),
		    'add_new'            => _x( 'Add Feature', 'feature' ),
		    'add_new_item'       => __( 'Add Feature' ),
		    'edit_item'          => __( 'Edit Feature' ),
		    'new_item'           => __( 'New Feature' ),
		    'all_items'          => __( 'All Features' ),
		    'view_item'          => __( 'View Feature' ),
		    'search_items'       => __( 'Search Features' ),
		    'not_found'          => __( 'No Features found' ),
		    'not_found_in_trash' => __( 'No Features found in the Trash' ), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Features',
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Some Features of Your Company',
		    'public'        => true,
		    'menu_position' => 45,
		    'menu_icon'		=> 'dashicons-megaphone',
		    //'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
		    'supports'      => array( 'title','editor','custom-fields'),
		    'has_archive'   => false,
		  );
	  register_post_type( 'feature', $args ); 
	}
	add_action( 'init', 'custom_features' );

	function my_updated_feature_messages( $messages ) {
	  global $post, $post_ID;
	  $messages['feature'] = array(
	    0 => '', 
	    1 => sprintf( __('Feature updated.')),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('Feature updated.'),
	    5 => isset($_GET['revision']) ? sprintf( __('Feature restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('Feature published.')),
	    7 => __('Feature saved.'),
	    8 => sprintf( __('Feature submitted. ')),
	    9 => sprintf( __('Feature scheduled for: <strong>%1$s</strong>. '), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	    10 => sprintf( __('Feature draft updated.')),
	  );
	  return $messages;
	}
	add_filter( 'post_updated_messages', 'my_updated_feature_messages' );



/*
	Custom post type for Portfolio section
*/
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 300, 150, true ); // default Post Thumbnail dimensions (cropped)
		add_post_type_support( 'portfolio', 'thumbnail' ); 
	}
	

	function custom_portfolio() {
	    $labels = array(
		    'name'               => _x( 'Portfolio', 'post type general name' ),
		    'singular_name'      => _x( 'Portfolio', 'post type singular name' ),
		    'add_new'            => _x( 'Add Portfolio', 'portfolio' ),
		    'add_new_item'       => __( 'Add Portfolio' ),
		    'edit_item'          => __( 'Edit Portfolio' ),
		    'new_item'           => __( 'New Portfolio' ),
		    'all_items'          => __( 'All Portfolio' ),
		    'view_item'          => __( 'View Portfolio' ),
		    'search_items'       => __( 'Search Portfolio' ),
		    'not_found'          => __( 'No Portfolio found' ),
		    'not_found_in_trash' => __( 'No Portfolio found in the Trash' ), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Portfolio',
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Some Portfolio of Your Company',
		    'public'        => true,
		    'menu_position' => 45,
		    'menu_icon'		=> 'dashicons-admin-customizer',
		    //'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
		    'supports'      => array( 'title','editor','thumbnail'),
		    'has_archive'   => false,
		  );
	  register_post_type( 'portfolio', $args ); 
	}
	add_action( 'init', 'custom_portfolio' );

	function my_updated_portfolio_messages( $messages ) {
	  global $post, $post_ID;
	  $messages['portfolio'] = array(
	    0 => '', 
	    1 => sprintf( __('Portfolio updated.')),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('Portfolio updated.'),
	    5 => isset($_GET['revision']) ? sprintf( __('Portfolio restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('Portfolio published.')),
	    7 => __('Portfolio saved.'),
	    8 => sprintf( __('Portfolio submitted. ')),
	    9 => sprintf( __('Portfolio scheduled for: <strong>%1$s</strong>. '), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	    10 => sprintf( __('Portfolio draft updated.')),
	  );
	  return $messages;
	}
	add_filter( 'post_updated_messages', 'my_updated_portfolio_messages' );


/*
	Custom post type for Teams section
*/
	function custom_team() {
	    $labels = array(
		    'name'               => _x( 'Teams', 'post type general name' ),
		    'singular_name'      => _x( 'Team', 'post type singular name' ),
		    'add_new'            => _x( 'Add Team', 'team' ),
		    'add_new_item'       => __( 'Add Team' ),
		    'edit_item'          => __( 'Edit Team' ),
		    'new_item'           => __( 'New Team' ),
		    'all_items'          => __( 'All Teams' ),
		    'view_item'          => __( 'View Team' ),
		    'search_items'       => __( 'Search Team' ),
		    'not_found'          => __( 'No Team found' ),
		    'not_found_in_trash' => __( 'No Team found in the Trash' ), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Team',
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Team of Your Company',
		    'public'        => true,
		    'menu_position' => 45,
		    'menu_icon'		=> 'dashicons-groups',
		    //'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
		    'supports'      => array( 'title','editor','thumbnail','custom-fields'),
		    'has_archive'   => false,
		  );
	  register_post_type( 'team', $args ); 
	}
	add_action( 'init', 'custom_team' );

	function my_updated_team_messages( $messages ) {
	  global $post, $post_ID;
	  $messages['team'] = array(
	    0 => '', 
	    1 => sprintf( __('Team updated.')),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('Team updated.'),
	    5 => isset($_GET['revision']) ? sprintf( __('Team restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('Team published.')),
	    7 => __('Team saved.'),
	    8 => sprintf( __('Team submitted. ')),
	    9 => sprintf( __('Team scheduled for: <strong>%1$s</strong>. '), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	    10 => sprintf( __('Team draft updated.')),
	  );
	  return $messages;
	}
	add_filter( 'post_updated_messages', 'my_updated_team_messages' );



/*
	Custom post type for Teams section
*/
	function custom_contact() {
	    $labels = array(
		    'name'               => _x( 'Contacts', 'post type general name' ),
		    'singular_name'      => _x( 'Contact', 'post type singular name' ),
		    'add_new'            => _x( 'Add Contact', 'contact' ),
		    'add_new_item'       => __( 'Add Contact' ),
		    'edit_item'          => __( 'Edit Contact' ),
		    'new_item'           => __( 'New Contact' ),
		    'all_items'          => __( 'All Contact' ),
		    'view_item'          => __( 'View Contact' ),
		    'search_items'       => __( 'Search Contact' ),
		    'not_found'          => __( 'No Team Contact' ),
		    'not_found_in_trash' => __( 'No Team Contact in the Trash' ), 
		    'parent_item_colon'  => '',
		    'menu_name'          => 'Contact Details',
		  );
		  $args = array(
		    'labels'        => $labels,
		    'description'   => 'Contact Details of Your Company',
		    'public'        => true,
		    'menu_position' => 45,
		    'menu_icon'		=> 'dashicons-location',
		    //'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments','custom-fields' ),
		    'supports'      => array( 'title','custom-fields'),
		    'has_archive'   => false,
		  );
	  register_post_type( 'contact', $args ); 
	}
	add_action( 'init', 'custom_contact' );

	function my_updated_contact_messages( $messages ) {
	  global $post, $post_ID;
	  $messages['contact'] = array(
	    0 => '', 
	    1 => sprintf( __('Contact updated.')),
	    2 => __('Custom field updated.'),
	    3 => __('Custom field deleted.'),
	    4 => __('Contact updated.'),
	    5 => isset($_GET['revision']) ? sprintf( __('Contact restored to revision from %s'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
	    6 => sprintf( __('Contact published.')),
	    7 => __('Contact saved.'),
	    8 => sprintf( __('Contact submitted. ')),
	    9 => sprintf( __('Contact scheduled for: <strong>%1$s</strong>. '), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) )),
	    10 => sprintf( __('Contact draft updated.')),
	  );
	  return $messages;
	}
	add_filter( 'post_updated_messages', 'my_updated_contact_messages' );

?>

