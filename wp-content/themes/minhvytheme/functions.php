<?php
/**
 * define variables
 */
define('ASSET', get_template_directory_uri() . '/assets');

/**
 * config php
 */
show_admin_bar(false);
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

function get_logo()
{
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
    if (has_custom_logo()) {
        echo '<img style="width:75px" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
    } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
    }
}

function setting($key = '')
{
    $homeId = get_option('page_on_front');
    return get_field($key, $homeId);
}

function custom_theme_setup()
{
    add_theme_support('menus');

    register_nav_menus(array(
        'main-menu' => 'Main Menu',
        'footer-menu' => 'Footer Menu',
    ));
}

add_action('after_setup_theme', 'custom_theme_setup');
