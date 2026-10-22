<?php
/**
 * Tech Green theme functions.
 */
if (!defined('ABSPATH')) {
    exit;
}

function tech_green_setup() {
    load_theme_textdomain('tech-green', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height' => 80,
        'width' => 260,
        'flex-height' => true,
        'flex-width' => true,
    ));
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script'));
    register_nav_menus(array(
        'primary' => __('Menu chính', 'tech-green'),
        'footer' => __('Menu chân trang', 'tech-green'),
    ));
}
add_action('after_setup_theme', 'tech_green_setup');

function tech_green_assets() {
    wp_enqueue_style('tech-green-style', get_stylesheet_uri(), array(), '1.0.0');
    wp_enqueue_script('tech-green-script', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'tech_green_assets');

function tech_green_customize_register($wp_customize) {
    $wp_customize->add_section('tech_green_contact', array(
        'title' => __('Thông tin liên hệ Tech Green', 'tech-green'),
        'priority' => 35,
    ));
    $fields = array(
        'phone' => array('label' => __('Số điện thoại', 'tech-green'), 'default' => '0900 123 456'),
        'email' => array('label' => __('Email', 'tech-green'), 'default' => 'hello@example.com'),
        'address' => array('label' => __('Địa chỉ', 'tech-green'), 'default' => 'Việt Nam'),
    );
    foreach ($fields as $key => $field) {
        $setting = 'tech_green_' . $key;
        $wp_customize->add_setting($setting, array(
            'default' => $field['default'],
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'refresh',
        ));
        $wp_customize->add_control($setting, array(
            'label' => $field['label'],
            'section' => 'tech_green_contact',
            'type' => 'text',
        ));
    }
}
add_action('customize_register', 'tech_green_customize_register');

function tech_green_product_cards() {
    $products = array(
        array('badge' => 'Bán chạy', 'icon' => '⌚', 'category' => 'Thiết bị đeo', 'title' => 'Đồng hồ thông minh', 'desc' => 'Theo dõi vận động, nhận thông báo và đồng hành cùng nhịp sống năng động.', 'price' => 'Liên hệ'),
        array('badge' => 'Nổi bật', 'icon' => '🎧', 'category' => 'Âm thanh', 'title' => 'Tai nghe không dây', 'desc' => 'Thiết kế gọn nhẹ, âm thanh sống động, phù hợp làm việc và giải trí.', 'price' => 'Liên hệ'),
        array('badge' => 'Đề xuất', 'icon' => '⌨️', 'category' => 'Phụ kiện máy tính', 'title' => 'Bàn phím cơ', 'desc' => 'Trải nghiệm gõ thoải mái, phong cách hiện đại cho góc làm việc của bạn.', 'price' => 'Liên hệ'),
    );
    foreach ($products as $product) {
        echo '<article class="product-card">';
        echo '<div class="product-visual"><span class="product-badge">' . esc_html($product['badge']) . '</span><span class="product-symbol" aria-hidden="true">' . esc_html($product['icon']) . '</span></div>';
        echo '<div class="product-body"><div class="product-category">' . esc_html($product['category']) . '</div>';
        echo '<h3>' . esc_html($product['title']) . '</h3><p>' . esc_html($product['desc']) . '</p>';
        echo '<div class="product-bottom"><span class="product-price">' . esc_html($product['price']) . '</span><a class="small-link" href="' . esc_url(home_url('/lien-he/')) . '">Tư vấn →</a></div></div></article>';
    }
}
