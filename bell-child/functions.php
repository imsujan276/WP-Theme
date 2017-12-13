<?php


add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}


// function bell_customize_about($wp_customize) 
// {
// 	$wp_customize->add_setting("about", array(
// 		"default" => "",
// 		"transport" => "postMessage",
// 	));

// 	$wp_customize->add_control(new WP_Customize_Control(
// 		$wp_customize,
// 		"about",
// 		array(
// 			"label" => __("Enter Small About", "customizer_about_label"),
// 			"section" => "about",
// 			"settings" => "about",
// 			"type" => "text",
// 		)
// 	));
// }

// add_action("customize_register","bell_customize_about");
?>