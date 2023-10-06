<?php
/**
 * define variables
 */
define('ASSET', get_template_directory_uri() . '/assets');
/**
 * Translations static string
 */

add_action('init', function () {
    pll_register_string('address', 'Địa chỉ');
    pll_register_string('phone', 'Điện thoại');
    pll_register_string('search', 'Tìm kiếm');
    pll_register_string('news', 'Bài viết mới');
    pll_register_string('read_more', 'Xem thêm');
    pll_register_string('next_post', 'Bài sau');
    pll_register_string('prev_post', 'Bài trước');
    pll_register_string('different', 'Khác');
    pll_register_string('category', 'Danh mục');
    pll_register_string('share', 'Chia sẻ');
    pll_register_string('search_results', 'Có %s kết quả phù hợp');
    pll_register_string('name_home', 'Trang chủ');
    pll_register_string('contact', 'Liên hệ');
    pll_register_string('partner', 'Đối tác');
});
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
    $lang = pll_current_language();
    $homeId = get_option('page_on_front');
    $key = $lang === 'en' ? $key . '_' . $lang : $key;
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


function get_nav_menu_items_by_location($location, $args = [])
{

    // Get all locations
    $locations = get_nav_menu_locations();

    // Get object id by location
    $object = wp_get_nav_menu_object($locations[$location]);
    if (!$object) {
        return [];
    }
    // Get menu items by menu name
    $menu_items = wp_get_nav_menu_items($object->name, $args);

    // Return menu post objects
    return $menu_items;
}

function wp_get_menu_array($current_menu = 'Main Menu')
{

    $menu_array = get_nav_menu_items_by_location($current_menu);

    $menu = array();

    function populate_children($menu_array, $menu_item)
    {
        $children = array();
        if (!empty($menu_array)) {
            foreach ($menu_array as $k => $m) {
                if ($m->menu_item_parent == $menu_item->ID) {
                    $children[$m->ID] = array();
                    $children[$m->ID]['ID'] = $m->ID;
                    $children[$m->ID]['title'] = $m->title;
                    $children[$m->ID]['url'] = $m->url;
                    unset($menu_array[$k]);
                    $children[$m->ID]['children'] = populate_children($menu_array, $m);
                }
            }
        };
        return $children;
    }

    foreach ($menu_array as $m) {
        if (empty($m->menu_item_parent)) {
            $menu[$m->ID] = array();
            $menu[$m->ID]['ID'] = $m->ID;
            $menu[$m->ID]['title'] = $m->title;
            $menu[$m->ID]['url'] = $m->url;
            $menu[$m->ID]['children'] = populate_children($menu_array, $m);
        }
    }

    return $menu;

}

