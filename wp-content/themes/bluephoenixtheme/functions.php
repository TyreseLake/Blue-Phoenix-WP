<?php

/*
    Enqueue scripts and styles
*/

if (!function_exists('theme_setup')) {

    function theme_setup()
    {

        load_theme_textdomain('bluephoenix', get_template_directory() . '/languages');
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
        add_theme_support(
            'html5',
            array(
                'search-form',
                'comment-form',
                'comment-list',
                'gallery',
                'caption'
            )
        );
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support('responsive-embeds');

        register_nav_menus(
            array(
                'primary'   =>  esc_html__('Primary Menu', 'bluephoenix'),
                'sub-menu-1'   =>  esc_html__('Sub Menu 1', 'bluephoenix'),
                'sub-menu-2'   =>  esc_html__('Sub Menu 2', 'bluephoenix')
            )
        );
    }
}

add_action('after_setup_theme', 'theme_setup');
function load_assets()
{

    // Enqueue CSS Files
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&family=Monda:wght@400;700&family=Raleway:ital,wght@0,400;0,700;1,400;1,700&display=swap', array(), '1.0', 'all');

    wp_enqueue_style('bootstrap', get_theme_file_uri('assets/css/bootstrap.min.css'), array(), 'v5.0.2', 'all');

    // Main CSS File
    wp_enqueue_style('bluephoenix', get_stylesheet_uri(), array('bootstrap'), '1.0', 'all');

    // Enqueue JS Files
    // Don't enqueue jQuery files it'll be loaded from WordPress when required.

    wp_enqueue_script('bootstrap', get_theme_file_uri('assets/js/bootstrap.min.js'), array(), 'v5.0.2', true);

    wp_enqueue_script('bluephoenix-js', get_theme_file_uri('assets/js/main-script.js'), array('jquery', 'jquery-ui-core', 'jquery-ui-selectmenu'), 'v1.0', true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'load_assets');

/* Custom readmore text */

function excerpt_readmore($more)
{
    return '...';
}

add_filter('excerpt_more', 'excerpt_readmore');

/* pagination */

function my_pagination()
{

    global $wp_query;
    $links = paginate_links(
        array(
            'current'   => max(1, get_query_var('paged')),
            'total'     => $wp_query->max_num_pages,
            'type'      => 'list',
            'prev_text' => '<',
            'next_text' =>  '>'
        )
    );
    $links = '<nav class="pagination">' . $links;
    $links .= '</nav>';
    echo wp_kses_post($links);
}

/* Add Customizer Functionality */
require get_template_directory() . '/includes/customizer.php';
