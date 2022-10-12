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
                --default-font-size: <?php echo get_theme_mod('font_size', '18px'); ?>;
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

function my_acf_add_local_field_groups() {
	
	acf_add_local_field_group(array(
		'key' => 'group_1',
		'title' => 'Sales Pages',
		'fields' => array (
			array (
				'key' => 'field_1',
				'label' => 'Main title',
				'name' => 'main_title',
				'type' => 'text',
            ),
            array (
				'key' => 'field_2',
				'label' => 'Selected product',
				'name' => 'selected_product',
				'type' => 'post_object',
                'post_type' => 'product',
                'return_format' => 'object',
			),
            array (
				'key' => 'field_3',
				'label' => 'Checkout link',
				'name' => 'checkout_link',
				'type' => 'link',
                'post_type' => 'product',
                'return_format' => 'object',
			),
            array (
				'key' => 'field_4',
				'label' => 'First title',
				'name' => 'first_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_5',
				'label' => 'Form shortcode',
				'name' => 'form_shortcode',
				'type' => 'text',
			),
            array (
				'key' => 'field_6',
				'label' => 'First content',
				'name' => 'first_content',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_9',
				'label' => 'Title yellow box',
				'name' => 'title_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_10',
				'label' => 'Toggle title yellow box',
				'name' => 'toggle_title_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
		        'ui' => 1,
		        'ui_on_text' => 'Display',
		        'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_11',
				'label' => 'Subtitle yellow box',
				'name' => 'subtitle_yellow_box',
				'type' => 'text',
			),
            array (
				'key' => 'field_12',
				'label' => 'Toggle subtitle yellow box',
				'name' => 'toggle_subtitle_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_13',
				'label' => 'Text yellow box',
				'name' => 'text_yellow_box',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_14',
				'label' => 'Toggle text yellow box',
				'name' => 'toggle_text_yellow_box',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_15',
				'label' => 'Second content',
				'name' => 'second_content',
				'type' => 'wysiwyg',
			),
            array (
				'key' => 'field_16',
				'label' => 'Toggle about me',
				'name' => 'toggle_about_me',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_17',
				'label' => 'Toggle basic testimonials',
				'name' => 'toggle_basic_testimonials',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_18',
				'label' => 'Toggle money back',
				'name' => 'toggle_money_back',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_19',
				'label' => 'Toggle unlimited access',
				'name' => 'toggle_unlimited_access',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_20',
				'label' => 'Toggle facebook',
				'name' => 'toggle_facebook',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_21',
				'label' => 'Toggle facebook',
				'name' => 'toggle_facebook',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_22',
				'label' => 'Product testimonials',
				'name' => 'product_testimonials',
				'type' => 'post_object',
                'post_type' => 'testimonial',
                'return_format' => 'object',
			),
            array (
				'key' => 'field_23',
				'label' => 'Toggle testimonials',
				'name' => 'toggle_testimonials',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_24',
				'label' => 'Product faq',
				'name' => 'product_faq',
				'type' => 'post_object',
                'post_type' => 'faq',
                'return_format' => 'object',
			),
            array (
				'key' => 'field_25',
				'label' => 'What you get title',
				'name' => 'what_you_get_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_26',
				'label' => 'What you get subtitle',
				'name' => 'what_you_get_subtitle',
				'type' => 'text',
			),
            array (
				'key' => 'field_27',
				'label' => 'Toggle what you get subtitle',
				'name' => 'toggle_what_you_get_subtitle',
				'type' => 'true_false',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Display',
                'ui_off_text' => 'Hide',
			),
            array (
				'key' => 'field_28',
				'label' => 'What you get image',
				'name' => 'what_you_get_image',
				'type' => 'image',
			),
            array (
				'key' => 'field_29',
				'label' => 'What you get text',
				'name' => 'what_you_get_text',
				'type' => 'text',
			),
            array (
				'key' => 'field_30',
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
				'key' => 'field_34',
				'label' => 'Phone number',
				'name' => 'phone_number',
				'type' => 'text',
			),
            array (
				'key' => 'field_35',
				'label' => 'Top bar text',
				'name' => 'top_bar_text',
				'type' => 'text',
			),
            array (
				'key' => 'field_36',
				'label' => 'Second title',
				'name' => 'second_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_37',
				'label' => 'Third title',
				'name' => 'third_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_38',
				'label' => 'Expert main photo',
				'name' => 'expert_main_photo',
				'type' => 'image',
			),
            array (
				'key' => 'field_39',
				'label' => 'Expert name',
				'name' => 'expert_name',
				'type' => 'text',
			),
            array (
				'key' => 'field_40',
				'label' => 'Expert job',
				'name' => 'expert_job',
				'type' => 'text',
			),
            array (
				'key' => 'field_41',
				'label' => 'Expert profile photo',
				'name' => 'expert_profile_photo',
				'type' => 'image',
			),
            array (
				'key' => 'field_42',
				'label' => 'Product title',
				'name' => 'product_title',
				'type' => 'text',
			),
            array (
				'key' => 'field_43',
				'label' => 'Product includes',
				'name' => 'product_includes',
				'type' => 'repeater',
                'sub_fields' => array (
                    array (
                        'key' => 'field_43_1',
                        'label' => 'Product includes content',
				        'name' => 'product_includes_content',
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
					'value' => 'page',
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

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'options',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}