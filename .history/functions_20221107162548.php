<?php

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');

add_action('customize_register', 'customizer_settings');

function customizer_settings( $wp_customize ){
    $wp_customize->add_section( 'colors', array(
        'title' => 'Colors',
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'primary_color' , array(

        'default'   => '#FDA843',
        'transport' => 'refresh',
        
    ));

    $wp_customize->add_setting( 'secondary_color' , array(

        'default'   => '#fff5d2',
        'transport' => 'refresh',
        
    ));

    $wp_customize->add_setting( 'hover_color' , array(

        'default'   => '#e08107',
        'transport' => 'refresh',
        
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(

        'label'      => 'Primary Color',
        'section'    => 'colors',
        'settings'   => 'primary_color',
        
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'secondary_color', array(

        'label'      => 'Secondary Color',
        'section'    => 'colors',
        'settings'   => 'secondary_color',
        
    )));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'hover_color', array(

        'label'      => 'Hover Color',
        'section'    => 'colors',
        'settings'   => 'hover_color',
        
    )));

    $wp_customize->add_section( 'fonts', array(
        'title' => 'Fonts',
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'font_size' , array(

        'default'   => '18px',
        'transport' => 'refresh',
        
    ));
    $wp_customize->add_control( 'font_size', array(
        'label'        => 'Default Font Size',
        'section'    => 'fonts',
        'settings'   => 'font_size',
    ));

    $wp_customize->add_setting( 'font_family' , array(

        'default'   => 'Barlow',
        'transport' => 'refresh',
        
    ));
    $wp_customize->add_control( 'font_family', array(
        'label'        => 'Default Font',
        'section'    => 'fonts',
        'settings'   => 'font_family',
    ));

    $wp_customize->add_section( 'border_shadow', array(
        'title' => 'Borders and Shadows',
        'priority' => 30,
    ));

    $wp_customize->add_setting( 'border_radius' , array(

        'default'   => '10px',
        'transport' => 'refresh',
        
    ));

    $wp_customize->add_control( 'border_radius', array(
        'label'        => 'Default border radius',
        'section'    => 'border_shadow',
        'settings'   => 'border_radius',
    ));

    $wp_customize->add_setting( 'border_color' , array(

        'default'   => '#000000',
        'transport' => 'refresh',
        
    ));

    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'border_color', array(

        'label'      => 'Default Border Color',
        'section'    => 'border_shadow',
        'settings'   => 'border_color',
        
    )));
    $wp_customize->add_setting( 'border_width' , array(

        'default'   => '1px',
        'transport' => 'refresh',
        
    ));
    $wp_customize->add_control( 'border_width', array(
        'label'        => 'Default border width',
        'section'    => 'border_shadow',
        'settings'   => 'border_width',
    ));

}
add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
             body { 
                --primary: <?php echo get_theme_mod('primary_color', '#FDA843'); ?>;
                --secondary: <?php echo get_theme_mod('--secondary_color', '#fff5d2'); ?>;
                --hover: <?php echo get_theme_mod('hover_color', '#e08107'); ?>;
                --default-font-size: <?php echo get_theme_mod('font_size', '20px'); ?>;
                --default-font-family: <?php echo get_theme_mod('font_family', 'Barlow'); ?>; 
                --default-h1-size: <?php echo get_theme_mod('default_h1_size', '40px'); ?>; 
                --default-h2-size: <?php echo get_theme_mod('default_h2_size', '40px'); ?>;
                --border-radius: <?php echo get_theme_mod('border_radius', '2px'); ?>;
                --border-width: <?php echo get_theme_mod('border_width', '1px'); ?>; 
                --border-color: <?php echo get_theme_mod('border_color', '#f2f2f2'); ?>;
                --box-shadow: <?php echo get_theme_mod('h_offset', '0px') . ' ' . get_theme_mod('v_offset', '8px') . ' ' . get_theme_mod('blur', '16px') . ' ' . get_theme_mod('spread', '0px') . ' ' . get_theme_mod('shadow_color', 'rgb(0 0 0 / 8%)') ; ?>;}
         </style>
         <?php
}

function cptui_register_my_cpts_testimonial() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => __( "Testimonials"),
		"singular_name" => __( "Testimonial"),
	];

	$args = [
		"label" => __( "Testimonials"),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => true,
		"rewrite" => [ "slug" => "testimonials", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonial' );

function my_acf_add_local_field_groups() {
	
	acf_add_local_field_group(array(
		'key' => 'group_1',
		'title' => 'Sales Pages',
		'fields' => array (
			array (
				'key' => 'field_1_1',
				'label' => 'Heading',
				'name' => 'heading',
				'type' => 'text',
            ),
			array (
				'key' => 'field_1_2',
				'label' => 'Subheading',
				'name' => 'subheading',
				'type' => 'text',
            ),
			array (
				'key' => 'field_1_3',
				'label' => 'Expert main photo',
				'name' => 'expert_main_photo',
				'type' => 'image',
			),
            array (
				'key' => 'field_1_4',
				'label' => 'Expert name',
				'name' => 'expert_name',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_5',
				'label' => 'Expert job',
				'name' => 'expert_job',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_6',
				'label' => 'Expert profile photo',
				'name' => 'expert_profile_photo',
				'type' => 'image',

			),
            array (
				'key' => 'field_1_7',
				'label' => 'Product title',
				'name' => 'product_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_8',
				'label' => 'Product includes',
				'name' => 'product_includes',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_1_9',
				'label' => 'Selected product',
				'name' => 'selected_product',
				'type' => 'post_object',
                'post_type' => 'product',
                'return_format' => 'object',
			),
            array (
				'key' => 'field_1_10',
				'label' => 'Satisfied customers number',
				'name' => 'satisfied_customers_number',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_11',
				'label' => 'Best selling author badge',
				'name' => 'author_badge',
				'type' => 'image',
			),
            array (
				'key' => 'field_1_12',
				'label' => 'Form shortcode',
				'name' => 'form_shortcode',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_1_13',
				'label' => 'First content',
				'name' => 'first_content',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_1_14',
				'label' => 'Title yellow box',
				'name' => 'title_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_15',
				'label' => 'Toggle title yellow box',
				'name' => 'toggle_title_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
		        'ui' => 1,
		        'ui_on_text' => 'Display',
		        'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_1_16',
				'label' => 'Subtitle yellow box',
				'name' => 'subtitle_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_17',
				'label' => 'Toggle subtitle yellow box',
				'name' => 'toggle_subtitle_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_1_18',
				'label' => 'Image yellow box',
				'name' => 'image_yellow_box',
				'type' => 'image',
			),
            array (
				'key' => 'field_1_19',
				'label' => 'Text yellow box',
				'name' => 'text_yellow_box',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_1_20',
				'label' => 'Guarantee under button',
				'name' => 'guarantee_button',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_21',
				'label' => 'Testimonial content',
				'name' => 'testimonial_content',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_1_22',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'type' => 'post_object',
                'multiple' => True,
                'post_type' => 'testimonials',
            ),
			array (
				'key' => 'field_1_23',
				'label' => 'Toggle testimonial',
				'name' => 'toggle_testimonial',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_1_24',
				'label' => 'Who is for',
				'name' => 'who_is_for',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_1_25',
				'label' => 'Toggle who is for',
				'name' => 'toggle_who_is_for',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_1_26',
				'label' => 'Money back',
				'name' => 'money_back',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_1_26_1',
				'label' => 'Money back image',
				'name' => 'money_back_image',
				'type' => 'image',
			),

            
            array (
				'key' => 'field_1_27',
				'label' => 'Toggle Money back',
				'name' => 'toggle_money_back',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
			array (
				'key' => 'field_1_28',
				'label' => 'Limited offer',
				'name' => 'limited_offer',
				'type' => 'wysiwyg',
			),
            
            array (
				'key' => 'field_1_27_1',
				'label' => 'Toggle Limited offer',
				'name' => 'toggle_limited_offer',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
			
            array (
				'key' => 'field_1_29',
				'label' => 'What you get title',
				'name' => 'what_you_get_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_30',
				'label' => 'What you get subtitle',
				'name' => 'what_you_get_subtitle',
				'type' => 'text',
			),
            array (
				'key' => 'field_1_31',
				'label' => 'Toggle what you get subtitle',
				'name' => 'toggle_what_you_get_subtitle',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_1_32',
				'label' => 'What you get image',
				'name' => 'what_you_get_image',
				'type' => 'image',
			),
            array (
				'key' => 'field_1_33',
				'label' => 'What you get text',
				'name' => 'what_you_get_text',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_1_34',
				'label' => 'FAQ',
				'name' => 'product_faq',
				'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_1_34_1',
                        'label' => 'Product FAQ Question',
				        'name' => 'product_faq_question',
				        'type' => 'text',
                    ),
                    array (
                        'key' => 'field_1_34_2',
                        'label' => 'Product FAQ Anwser',
				        'name' => 'product_faq_anwser',
				        'type' => 'text',
                    ),
				),
			),
            array (
				'key' => 'field_1_1_1',
				'label' => 'Timer',
				'name' => 'timer',
				'type' => 'text',
			),
            array (
				'key' => 'field_33',
				'label' => 'Site description',
				'name' => 'site_description',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_35',
				'label' => 'Top bar text',
				'name' => 'top_bar_text',
				'type' => 'text',
			),
	),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'wffn_landing',
				),
			),
		),
	));
	
}

add_action('acf/init', 'my_acf_add_local_field_groups');

function my_acf_add_local_field_groups2() {
	
	acf_add_local_field_group(array(
		'key' => 'group_2',
		'title' => 'Options page',
		'fields' => array (
            array (
				'key' => 'field_2_1',
				'label' => 'phone',
				'name' => 'phone',
				'type' => 'text',
            ),
            array (
				'key' => 'field_2_2',
				'label' => 'email',
				'name' => 'email',
				'type' => 'text',
            ),
            array (
				'key' => 'field_2_3',
				'label' => 'site logo color',
				'name' => 'site_logo_color',
				'type' => 'image',
            ),
            array (
				'key' => 'field_2_4',
				'label' => 'site logo white',
				'name' => 'site_logo_white',
				'type' => 'image',
            ),
			
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'options',
				),
			),
		),
	),
);
	
}

add_action('acf/init', 'my_acf_add_local_field_groups2');

function my_acf_add_local_field_groups3() {
	
	acf_add_local_field_group(array(
		'key' => 'group_3',
		'title' => 'Checkout page',
		'fields' => array (
            array (
				'key' => 'field_3_1',
				'label' => 'Product name',
				'name' => 'product_name_checkout',
				'type' => 'text',
            ),
            array (
				'key' => 'field_3_2',
				'label' => 'Product image',
				'name' => 'product_image_checkout',
				'type' => 'image',
            ),
            array (
				'key' => 'field_3_3',
				'label' => 'What you get',
				'name' => 'what_you_get_checkout',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_3_4_1',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'type' => 'post_object',
                'multiple' => True,
                'post_type' => 'testimonials',
            ),
			/*array (
				'key' => 'field_3_4',
				'label' => 'Testimonial checkout',
				'name' => 'testimonial_checkout',
				'type' => 'repeater',
                'sub_fields' => array (
                    array (
						'key' => 'field_3_4_1',
						'label' => 'Testimonial name checkout',
						'name' => 'testimonial_name_checkout',
						'type' => 'text',
					),
					array (
						'key' => 'field_3_4_2',
						'label' => 'Testimonial headline checkout',
						'name' => 'testimonial_headline_checkout',
						'type' => 'text',
					),
					array (
						'key' => 'field_3_4_3',
						'label' => 'Testimonial text checkout',
						'name' => 'testimonial_text_checkout',
						'type' => 'text',
					),
					array (
						'key' => 'field_3_4_4',
						'label' => 'Testimonial image checkout',
						'name' => 'testimonial_image_checkout',
						'type' => 'image',
					),
				),
			),*/
			array (
				'key' => 'field_3_5',
				'label' => 'FAQ',
				'name' => 'product_faq',
				'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_3_5_1',
                        'label' => 'Product FAQ Question',
				        'name' => 'product_faq_question',
				        'type' => 'text',
                    ),
                    array (
                        'key' => 'field_3_5_2',
                        'label' => 'Product FAQ Anwser',
				        'name' => 'product_faq_anwser',
				        'type' => 'text',
                    ),
				),
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'wfacp_checkout',
				),
			),
		),
	),
);
	
}

add_action('acf/init', 'my_acf_add_local_field_groups3');


function my_acf_add_local_field_groups4() {
	
	acf_add_local_field_group(array(
		'key' => 'group_4',
		'title' => 'Upsell page',
		'fields' => array (
            array (
				'key' => 'field_4_1',
				'label' => 'Product',
				'name' => 'selected_product',
				'type' => 'post_object',
                'post_type' => 'product',
                'return_format' => 'object',
            ),
            array (
				'key' => 'field_4_2',
				'label' => 'Upsell name',
				'name' => 'upsell_name',
				'type' => 'text',
            ),
            array (
				'key' => 'field_4_3',
				'label' => 'First headline',
				'name' => 'first_headline',
				'type' => 'text',
			),
			array (
				'key' => 'field_4_4',
				'label' => 'Toggle bar 1',
				'name' => 'toggle_bar_1',
				'type' => 'true_false',
                'default_value' => 1,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
			array (
				'key' => 'field_4_5',
				'label' => 'Toggle bar 2',
				'name' => 'toggle_bar_2',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
			array (
				'key' => 'field_4_6',
				'label' => 'Toggle bar 3',
				'name' => 'toggle_bar_3',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
			array (
				'key' => 'field_4_7',
				'label' => 'First content',
				'name' => 'first_content_upsell',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_4_8',
				'label' => 'Title yellow box',
				'name' => 'title_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_4_9',
				'label' => 'Toggle title yellow box',
				'name' => 'toggle_title_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
		        'ui' => 1,
		        'ui_on_text' => 'Display',
		        'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_4_10',
				'label' => 'Subtitle yellow box',
				'name' => 'subtitle_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_4_11',
				'label' => 'Toggle subtitle yellow box',
				'name' => 'toggle_subtitle_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_4_12',
				'label' => 'Image yellow box',
				'name' => 'image_yellow_box',
				'type' => 'image',
			),
            array (
				'key' => 'field_4_13',
				'label' => 'Text yellow box',
				'name' => 'text_yellow_box',
				'type' => 'wysiwyg',
			),
			array (
				'key' => 'field_4_13_1',
				'label' => 'Testimonials',
				'name' => 'testimonials',
				'type' => 'post_object',
                'multiple' => True,
                'post_type' => 'testimonials',
            ),
			array (
				'key' => 'field_4_14',
				'label' => 'Green box title',
				'name' => 'green_box_title',
				'type' => 'text',
			),
			array (
				'key' => 'field_4_15',
				'label' => 'Green box no thanks',
				'name' => 'green_box_no_thanks',
				'type' => 'text',
			),
			array (
				'key' => 'field_4_17',
				'label' => 'Price increase in',
				'name' => 'price_increase',
				'type' => 'text',
				'instructions' => 'Number of minutes',
			),
			
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'wfocu_offer',
				),
			),
		),
	),
);
	
}

add_action('acf/init', 'my_acf_add_local_field_groups4');

function my_acf_add_local_field_groups5() {
	
	acf_add_local_field_group(array(
		'key' => 'group_5',
		'title' => 'Testimonials',
		'fields' => array (
				array (
					'key' => 'field_5_1',
					'label' => 'Testimonial name',
					'name' => 'testimonial_name',
					'type' => 'text',
				),
				array (
					'key' => 'field_5_2',
					'label' => 'Testimonial headline',
					'name' => 'testimonial_headline',
					'type' => 'text',
				),
				array (
					'key' => 'field_5_3',
					'label' => 'Testimonial text',
					'name' => 'testimonial_text',
					'type' => 'text',
				),
				array (
					'key' => 'field_5_4',
					'label' => 'Testimonial image',
					'name' => 'testimonial_image',
					'type' => 'image',
				),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'testimonials',
				),
			),
		),
	),
);
	
}

add_action('acf/init', 'my_acf_add_local_field_groups5');

function my_acf_add_local_field_groups6() {
	
	acf_add_local_field_group(array(
		'key' => 'group_6',
		'title' => 'Thank you page',
		'fields' => array (
            array (
				'key' => 'field_6_1',
				'label' => 'First headline',
				'name' => 'first_headline_thank_you',
				'type' => 'text',
            ),
            array (
				'key' => 'field_6_2',
				'label' => 'Fist content',
				'name' => 'first_content_thank_you',
				'type' => 'wysiwyg',
			),

			array (
				'key' => 'field_6_3',
				'label' => 'Button text',
				'name' => 'button_text_thank_you',
				'type' => 'text',
			),
			array (
				'key' => 'field_6_4',
				'label' => 'Button link',
				'name' => 'button_link_thank_you',
				'type' => 'link',
			),
			array (
				'key' => 'field_6_5',
				'label' => 'Second content',
				'name' => 'second_content_thank_you',
				'type' => 'text',
			),
			
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'wffn_ty',
				),
			),
		),
	),
);
	
}

add_action('acf/init', 'my_acf_add_local_field_groups6');



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
function myplugin_settings() {  
    // Add tag metabox to page
   	// register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  


}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );



/* FUNNELKIT CHECKOUT EDITOR - SCRIPT AND CSS */
add_action( 'wp_footer', function () {
	?>

    <script>
       (function ($) {

            $(document).ready(function () {
			$('input[name="terms"]').css("display","none");	
			$(".wfacp_woocommerce_form_coupon.wfacp_template_9_coupon:not(:first)").remove();
			$(".div-prihranek").insertAfter('#wfacp_mini_cart_items_wfacp_form_summary_shortcode');
			$(".woocommerce-form__label.woocommerce-form__label-for-checkbox.checkbox").insertAfter('#place_order');
			$("#div_block-75-34177").insertAfter('.wfacp-section.wfacp_payment > div > h2 ').css("display","inline-flex");
			$(".wfacp_internal_form_wrap.wfacp-comm-title.none.margin-top h2").text("Povzetek Naročila");
			$(".wfacp_divider_field.wfacp_divider_billing.wfacp-form-control-label").show();
			$('.wfacp-order-summary-label').text('Order summary');
			//$("#headline-114-52320").insertAfter('.wc_payment_methods.payment_methods.methods').css("display","inline-flex");
				function add_active_class() {
                    var paymentLi = '#payment ul.wc_payment_methods li';
                    $(paymentLi).each(function () {
                        $this = $(this);

                        if ($this.hasClass('payment_li_active')) {
                            $this.removeClass("payment_li_active");
                        }
                        if ($(this).children("input[type=radio]").is(':checked')) {
                            $this.addClass("payment_li_active");
                        }

                    });

                }

                $(document.body).on('updated_checkout', function () {
                    add_active_class();
					$(".woocommerce-form__label.woocommerce-form__label-for-checkbox.checkbox").insertAfter('#place_order');
					$(".wfacp_internal_form_wrap.wfacp-comm-title.none.margin-top h2").text("Order summary");
					$('#wc-stripe-payment-request-button-separator').text('- ALI -');
					$('.ApplePayButton').text('Kupi z Apple Pay');
                });

                $(document.body).on('change', '#payment ul.wc_payment_methods li > input[type="radio"]', function () {
                    add_active_class();
                });

            });

        })(jQuery);
 
    </script>
	<?php

} );

add_action( 'wp_head', function () {
	?>
	<style>
		#shipping_same_as_billing_field{
			display: none!important;
		}
		.wfacp_woocommerce_form_coupon{
			display: none;
		}
		.cart-subtotal{
			display: none;
		}
		body.wfacpef_page #wfacp-e-form .wfacp_main_form.woocommerce .wfacp-section.wfacp_order_coupon_box{
			display:none;
		}
	/*mini cart*/	

	.wfacp_mini_cart_start_h .wfacp_mini_cart_elementor .cart_item .product-quantity{
		display:none;
	}
	.wfacp_mini_cart_start_h .wfacp_order_sum .product-image{
		display:none;
	}
	.wfacp_mini_cart_start_h .wfacp_delete_active td.product-total span.wfacp_cart_product_name_h{
		display:none;
	}
	.wfacp_mini_cart_start_h .wfacp_order_summary_container tr.cart_item .product-name.wfacp_summary_img_true{
		padding-left:0px;
	}
	#wfacp-e-form span.amount{
		font-weight:600!important;
	}
	.wfob_price_container span.woocommerce-Price-amount.amount{
		font-size:18px!important;
	}

	.wfacp_mini_cart_start_h table.shop_table tr td{
		padding:8px 0px!important;
	}
	ins{
		text-decoration:none!important;
	}
	.woocommerce-Price-amount.amount{
		font-weight:600!important;
	}

	.wfacp_mini_cart_start_h table.shop_table tr.order-total th{
		padding-top:0px!important;
	}
	.wfacp_mini_cart_start_h .wfacp-coupon-section .wfacp-coupon-page{
		padding:0px!important;
	}



	/*order bump*/
	body #wfob_wrap .wfob_wrapper[data-wfob-id='78173'] .wfob_bump .wfob_contentBox .wfob_pro_txt_wrap .wfob_text_inner p{
			font-size:14px!important;
		}
		body #wfacp-e-form .wfacp_main_form #wfob_wrap .wfob_pro_txt_wrap p{
			font-size:14px!important;
		}
		#wfacp-e-form strong{
			font-size:14px!important;
		}
		body #wfob_wrap .wfob_wrapper .wfob_bump{
			background:#fff9e7!important;
		}
	.wfob_bump.wfob_clear{
		padding:12px!important;;
		/*background-color:#ffe9ab)!important;*/
	}
	.wfob_bgBox_table.no_table{
	/*	background:rgba(0, 171, 48, 0.2)!important;*/
	}
	body .wfob_text_inner{
		font-size:16px!important;
	}
	.wfob_bump.wfob_clear{
		border: 2px dashed #009020!important;
		border-radius:2px!important;
	}

	#wfacp-e-form .wfacp_main_form input[type=checkbox]{
		height:22px!important;
		min-width:22px!important;
		border: 1px solid #131313!important;
	}
	#wfacp-e-form .wfacp_main_form input[type=checkbox]:checked{
		border: 1px solid #00AB30!important;
	}
	.wfob_title.wfob_bgBox_cell{			
		font-size:16px!important;
		font-weight:700!important;
	}
	body #wfob_wrap .wfob_bgBox_table .wfob_bgBox_cell span{
		font-size:14px!important;

	}
	body #wfob_wrap .wfob_wrapper[data-wfob-id='34223'] .wfob_bump .wfob_price_container span.woocommerce-Price-amount.amount *{
		font-size:20px!important;
	}
	@media only screen and (max-width: 600px) {
	body #wfob_wrap .wfob_wrapper[data-wfob-id='34223'] .wfob_bump .wfob_price_container span.woocommerce-Price-amount.amount *{
		font-size:14px!important;
	}	
	.wfob_title.wfob_bgBox_cell{			
		font-size:14px!important;
	}
	}
	</style>
		<?php

} );

/* CUSTOM FORMATING FOR WYSIWYG EDITOR*/

function add_style_select_buttons( $buttons ) {
    array_unshift( $buttons, 'styleselect' );
    return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'add_style_select_buttons' );

//add custom styles to the WordPress editor
function my_custom_styles( $init_array ) {  

    $style_formats = array(  
        // These are the custom styles
        array(  
            'title' => 'Headline h2 - sales page',  
            'block' => 'span',  
            'classes' => 'headline-h2-sales-page',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Headline h2 - sales page - no margin top',  
            'block' => 'span',  
            'classes' => 'headline-h2-sales-page-no-margin-top',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Headline h3 - sales page - subheadline',  
            'block' => 'span',  
            'classes' => 'headline-h3-sales-page-subheadline',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Headline h3 - sales page - align left',  
            'block' => 'span',  
            'classes' => 'headline-h3-sales-page-align-left',
            'wrapper' => true,
        ),array(  
            'title' => 'Headline h2 - sales page - no margin top',  
            'block' => 'span',  
            'classes' => 'headline-h2-sales-page-no-margin-top',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Headline h3 - sales page',  
            'block' => 'span',  
            'classes' => 'headline-h3-sales-page',
            'wrapper' => true,
        ),  
        array(  
            'title' => 'Paragraph - sales page ',  
            'block' => 'span',  
            'classes' => 'paragraph-sales-page',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Bullets - sales page ',  
            'block' => 'span',  
            'classes' => 'bullets-sales-page',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Check - sales page ',  
            'block' => 'span',  
            'classes' => 'check-sales-page',
            'wrapper' => true,
        ),
		array(  
            'title' => 'Highlight text ',  
            'block' => 'span',  
            'classes' => 'highlight-text',
            'wrapper' => true,
        ),
    );  
    // Insert the array, JSON ENCODED, into 'style_formats'
    $init_array['style_formats'] = json_encode( $style_formats );  
    
    return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_custom_styles' );



//MINI CART PRICE ON CHECKOUT

function show_sale_price_at_checkout( $subtotal, $cart_item, $cart_item_key ) {
    
    
    $product = $cart_item['data'];
    $quantity = $cart_item['quantity'];
    if ( ! $product ) {
        return $subtotal;
    }
    $regular_price ='';
	$sale_price ='';
    $suffix = '';
    if ( $product->is_taxable() ) {
        if ( 'excl' === WC()->cart->tax_display_cart ) {
            $regular_price = wc_get_price_excluding_tax( $product, array( 'price' => $product->get_regular_price(), 'qty' => $quantity ) );
            $sale_price    = wc_get_price_excluding_tax( $product, array( 'price' => $product->get_sale_price(), 'qty' => $quantity ) );
            if ( WC()->cart->prices_include_tax && WC()->cart->tax_total > 0 ) {
                $suffix .= ' ' . WC()->countries->ex_tax_or_vat() . '';
            }
        } else {
            $regular_price = wc_get_price_including_tax( $product, array( 'price' => $product->get_regular_price(), 'qty' => $quantity ) );
            $sale_price = wc_get_price_including_tax( $product, array( 'price' => $product->get_sale_price(), 'qty' => $quantity ) );
            if ( ! WC()->cart->prices_include_tax && WC()->cart->tax_total > 0 ) {
                $suffix .= ' ' . WC()->countries->inc_tax_or_vat() . '';
            }
        }
    } else {        
       $pr_pr   = $product->get_price();
		$sale_pr = $product->get_sale_price();
		if ( $sale_pr > 0 ) {
			$sale_price = $sale_pr * $quantity;
		}
		if ( $pr_pr > 0 ) {
			$regular_price = $pr_pr * $quantity;
		}
    }   
    
    $rg_price=$product->get_regular_price();
	if ( $product->is_on_sale() && ! empty( $sale_price ) && ( round( $rg_price, 2 ) !== round( $sale_price, 2 ) ) ) {	    
		$price = wc_format_sale_price( wc_get_price_to_display( $product, array(
				'price' => $product->get_regular_price(),
				'qty'   => $quantity
			) ), wc_get_price_to_display( $product, array( 'qty' => $quantity ) ) ) . $product->get_price_suffix();
	} else {
		$price = wc_price( $regular_price ) . $product->get_price_suffix();
	}
   
    $price = $price . $suffix;
    return $price;
}
add_filter( 'woocommerce_cart_item_subtotal', 'show_sale_price_at_checkout', 10, 3 );

//DISPLAY YOU SAVE PRICE IN MINI CART
class WFACP_TempDisplay_Discount {

	public $discount_price = 0;

	public function __construct() {
		add_filter( 'wfacp_woocommerce_cart_item_subtotal_except_subscription', '__return_false' );
		add_action( 'wfacp_woocommerce_cart_item_subtotal_except_subscription_placeholder', [ $this, 'display_cut_price' ], 10, 3 );

		add_action( 'woocommerce_review_order_before_order_total', [ $this, 'add_discount_row' ] );
		add_filter( 'woocommerce_cart_subtotal', [ $this, 'cart_content_subtotal' ], 10, 3 );
	}

	public function display_cut_price( $_product, $cart_item, $cart_item_key ) {

		$quantity              = $cart_item['quantity'];
		$product_id            = $_product->get_id();
		$product               = wc_get_product( $product_id );
		$product_regular_price = $product->get_regular_price();
		$product_regular_price *= $quantity;
		$subtotal              = WFACP_Common::get_product_subtotal( $_product, $cart_item, true );


		if ( $subtotal > 0 && $product_regular_price > 0 && ( round( $subtotal, 2 ) !== round( $product_regular_price, 2 ) ) ) {
			if ( $subtotal > $product_regular_price ) {
				echo wc_price( $subtotal );
			} else {
				echo wc_format_sale_price( $product_regular_price, $subtotal );
			}
		}
	}

	public function add_discount_row() {
		$cart_contents = WC()->cart->get_cart_contents();
		$regular_price = 0;

		foreach ( $cart_contents as $content ) {
			$product = $content['data'];

			if ( $product instanceof WC_Product ) {

				//	$product=wc_get_product($product->get_id());
				//This line show discount base on the regular price of the price
			    $quantity = $content['quantity'];
				if ( wp_doing_ajax() && isset( $content['_wfacp_options'] ) ) {
					$org_qty  = $content['_wfacp_options']['org_quantity'];
					$quantity = $quantity / $org_qty;

				}

				$regular_price = $regular_price + ( $quantity * $product->get_regular_price() );

				// if you want discount base on subtotal and coupon then comment above line of code and uncomment below line of code
				//$regular_price = $regular_price + ( $content['line_subtotal']  );
			}
		}
		
		$tax = WC()->cart->get_subtotal_tax();
		$total = WC()->cart->get_cart_contents_total();
		if ( $regular_price > $total ) {
			?>
            <tr class="order-total">
                <th class="green-price"><?php _e( '<span style=font-size:17px;font-weight:600;color:#00AB30;>You Save:</span>', 'woocommerce' ); ?></th>
                <td class="green-discount"><?php echo wc_price( - ( $regular_price - $total - ($tax) )  ); ?></td>
            </tr>
			<?php
		}
	}

	function cart_content_subtotal( $cart_subtotal, $compound, $cart ) {
		$regular_price = 0;

		$aelia = WFACP_Plugin_Compatibilities::get_compatibility_class( 'aelia_cs' );
		foreach ( $cart->cart_contents as $content ) {
			$product = $content['data'];

			if ( $product instanceof WC_Product ) {

				//This line show discount base on the regular price of the price
				$quantity = $content['quantity'];

				if ( wp_doing_ajax() && isset( $content['_wfacp_options'] ) ) {
					$org_qty  = $content['_wfacp_options']['org_quantity'];
					$quantity = $quantity / $org_qty;
				}

				$regular_price = $regular_price + ( $quantity* $product->get_regular_price() );
				//$regular_price = $regular_price + ( $quantity * $product->get_price() );
			}
		}

		//$regular_price=$aelia->get_price_in_currency($regular_price);

		/**
		 * If the cart has compound tax, we want to show the subtotal as cart + shipping + non-compound taxes (after discount).
		 */
		if ( $compound ) {
			$cart_subtotal = wc_price( $regular_price + $cart->get_shipping_total() + $cart->get_taxes_total( false, false ) );

		} elseif ( $cart->display_prices_including_tax() ) {
			$cart_subtotal = wc_price( $regular_price + $cart->get_subtotal_tax() );

			if ( $cart->get_subtotal_tax() > 0 && ! wc_prices_include_tax() ) {
				$cart_subtotal .= ' <small class="tax_label">' . WC()->countries->inc_tax_or_vat() . '</small>';
			}
		} else {
			$cart_subtotal = wc_price( $regular_price );

			if ( $cart->get_subtotal_tax() > 0 && wc_prices_include_tax() ) {
				$cart_subtotal .= ' <small class="tax_label">' . WC()->countries->ex_tax_or_vat() . '</small>';
			}

		}

		return $cart_subtotal;
	}


}

new WFACP_TempDisplay_Discount();


/*change_text_on_order_summary*/
function title_html() {
	?>
    <div class="wfacp_internal_form_wrap wfacp-comm-title none margin-top">
        <h2 class="wfacp_section_heading wfacp_section_title wfacp-normal wfacp-text-left">
			<?php echo __( 'SUMMARY OF YOUR ORDER', 'woofunnels-aero-checkout' ) ?></h2>
    </div>
	<?php
}
?>
<?php
add_action( 'wfacp_checkout_page_found', 'order_summary_position' );
add_action( 'wfacp_before_process_checkout_template_loader', 'order_summary_position' );

function order_summary_position() {
	/* Add data in variables */
	add_action( 'process_wfacp_html', 'layout_order_summary_1', 10, 4 );

	/* display order summary below payment gateway  */
	add_action( 'woocommerce_before_template_part', 'below_payment_sec', 99999, 2 );

	add_action( 'wfacp_internal_css', 'internal_css_order_summary' );
}

add_filter( 'wfacp_html_fields_order_summary', function ( $val ) {
	WFACP_Common::remove_actions( 'process_wfacp_html', 'WFACP_Common', 'order_summary_html' );

	return false;
}, 5 );

add_filter( 'wfacp_html_fields_order_coupon', function ( $val ) {
	WFACP_Common::remove_actions( 'process_wfacp_html', 'WFACP_Common', 'order_summary_html' );

	return false;
}, 10 );

function layout_order_summary_1( $field, $key, $args, $value ) {

	if ( 'order_summary' === $key ) {
		WC()->session->set( 'wfacp_order_summary_' . WFACP_Common::get_id(), $args );

	} elseif ( 'order_coupon' === $key ) {

		WC()->session->set( 'wfacp_order_coupon_' . WFACP_Common::get_id(), $args );
	}


}

function internal_css_order_summary() {
	echo ' <style>';
	printf( ' body .wfacp_order_summary{padding: 0;}' );
	printf( ' body #order_coupon_field{padding: 0;}' );
	printf( ' body #order_coupon_field .wfacp_custom_row_wrap{text-align: left;}' );
	printf( ' body #wfacp_order_summary_in_payment {clear:both;}' );
	printf( ' body .margin-top { margin-top: 20px;}' );
	echo ' </style>';
}

function below_payment_sec( $template_name, $template_path ) {
	if ( 'checkout/terms.php' === $template_name ) {
		title_html();
		$args1 = WC()->session->get( 'wfacp_order_summary_' . WFACP_Common::get_id() );

		$instance = WFACP_Core()->template_loader->get_template_ins();

        echo "<div id=wfacp_order_summary_in_payment>";
		include WFACP_TEMPLATE_COMMON . '/order-coupon.php';
		WFACP_Common::order_summary_html('');
        echo "</div>";

	}
}

//TERMS AND CONDITIONS CHECKED BY DEFAULT
function patricks_wc_terms( $terms_is_checked ) { return true; } add_filter( 'woocommerce_terms_is_checked_default', '__return_true' );

