<?php

if (!class_exists('Kirki')) {
	return;
}

$domain_name = "bluephoenix";

/* PANELS */


new \Kirki\Panel(
	'theme_options_panel',
	[
		'priority'    => 30,
		'title'       => esc_html__('Blue Phoenix Theme Options', $domain_name),
		'description' => esc_html__('Use this to customize the this theme.', $domain_name),
	]
);

/* END Panels Section */

/* General Section */
new \Kirki\Section(
	'general',
	[
		'title'       => esc_html__('General Settings', $domain_name),
		'panel'       => 'theme_options_panel',
		'priority'    => 40,
	]
);

new \Kirki\Field\Upload(
	[
		'settings' => 'upload_nav_image',
		'label' => esc_html__('Upload Navbar Image', $domain_name),
		'description' => esc_html__('Upload your image here.', $domain_name),
		'section' => 'general',
		'default' => get_template_directory_uri() . '//assets//images//BPLogo-06.png',
		'priority' => 10,
		'partial_refresh' => [
			'upload_nav_image' => [
				'selector' => '.title-image-container',
				'render_callback' => function () {
					// return get_theme_mod('upload_nav_image');
					return "<img src='" . get_theme_mod('upload_nav_image') . "'/>";
				}
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'home_main_message',
		'label'       => esc_html__('Homepage Main Text', $domain_name),
		'section'     => 'general',
		'default'     => 'Go Blue Phoenix Now!',
		'placeholder' => esc_html__('Add your text here.', $domain_name),
		'priority'    => 10,
		'partial_refresh' => [
			'home_main_message' => [
				'selector'  => '#top-main-text',
				'render_callback' => function () {
					return get_theme_mod('home_main_message');
				}
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'home_sub_message',
		'label'       => esc_html__('Homepage Sub-Text', $domain_name),
		'section'     => 'general',
		'default'     => 'Try our one-of-a-kind services!',
		'placeholder' => esc_html__('Add your text here.', $domain_name),
		'priority'    => 10,
		'partial_refresh' => [
			'home_sub_message' => [
				'selector'  => '#top-sub-text',
				'render_callback' => function () {
					return get_theme_mod('home_sub_message');
				}
			],
		]
	]
);

new \Kirki\Field\Upload(
	[
		'settings' => 'upload_top_image',
		'label' => esc_html__('Upload Main Top Image', $domain_name),
		'description' => esc_html__('Upload your image here.', $domain_name),
		'section' => 'general',
		'default' => get_template_directory_uri() . '//assets//images//theme_image.png',
		'priority' => 10,
		'partial_refresh' => [
			'upload_top_image' => [
				'selector' => '#top-img-container',
				'render_callback' => function () {
					// return get_theme_mod('upload_nav_image');
					return "<img class='img-circle-lg' src='" . get_theme_mod('upload_top_image') . "'/>";
				}
			],
		]
	]
);

new \Kirki\Field\Code(
	[
		'settings'    => 'top_action',
		'label'       => esc_html__('Top Action Area HTML', $domain_name),
		'description' => esc_html__('Please enter HTML code here for your opt-in form.', $domain_name),
		'section'     => 'general',
		'default'     => '<div class="col-6 d-flex justify-content-start">
                        <a class="btn btn-1" href="/services">Our Services</a>
                    </div>
                    <div class="col-6 d-flex justify-content-end">
                        <a class="btn btn-0" href="/about">About Us</a>
                    </div>',
		'choices'     => [
			'language' => 'html',
		],
		'priority' => 10,
		'partial_refresh' => [
			'top_action' => [
				'selector' => '#top-action-area',
				'render_callback' => function () {
					// return get_theme_mod('upload_nav_image');
					return get_theme_mod('top_action');
				}
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'sub_menu_title_1',
		'label'       => esc_html__('Footer Sub-menu 1 Title', $domain_name),
		'section'     => 'general',
		'default'     => 'Sub-Menu #1',
		'placeholder' => esc_html__('Add your text here.', $domain_name),
		'priority'    => 10,
		'partial_refresh' => [
			'sub_menu_title_1' => [
				'selector'  => '#footer-sub-menu-1',
				'render_callback' => function () {
					return get_theme_mod('sub_menu_title_1');
				}
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'sub_menu_title_2',
		'label'       => esc_html__('Footer Sub-menu 2 Title', $domain_name),
		'section'     => 'general',
		'default'     => 'Sub-Menu #2',
		'placeholder' => esc_html__('Add your text here.', $domain_name),
		'priority'    => 10,
		'partial_refresh' => [
			'sub_menu_title_2' => [
				'selector'  => '#footer-sub-menu-2',
				'render_callback' => function () {
					return get_theme_mod('sub_menu_title_2');
				}
			],
		]
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'copyright',
		'label'       => esc_html__('Copyright Text', $domain_name),
		'section'     => 'general',
		'default'     => '© 2023 Tyrese Lake, All rights reserved.',
		'placeholder' => esc_html__('Add your text here.', $domain_name),
		'priority'    => 10,
		'partial_refresh' => [
			'copyright' => [
				'selector'  => '#copyright-area p',
				'render_callback' => function () {
					return get_theme_mod('copyright');
				}
			],
		]
	]
);

/* */
