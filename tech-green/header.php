<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<header class="site-header">
  <div class="container header-inner">
    <a class="brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="<?php bloginfo('name'); ?>">
      <?php if (has_custom_logo()) : ?>
        <?php the_custom_logo(); ?>
      <?php else : ?>
        <span class="brand-mark">T</span>
        <span class="brand-name">Tech<span>Green</span></span>
      <?php endif; ?>
    </a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">☰ Menu</button>
    <nav class="site-nav" id="primary-navigation" aria-label="Menu chính">
      <?php
      if (has_nav_menu('primary')) {
          wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'items_wrap' => '%3$s', 'fallback_cb' => false));
      } else {
          echo '<a href="' . esc_url(home_url('/')) . '">Trang chủ</a>';
          echo '<a href="' . esc_url(home_url('/#san-pham')) . '">Sản phẩm</a>';
          echo '<a href="' . esc_url(home_url('/#ve-chung-toi')) . '">Về chúng tôi</a>';
          echo '<a href="' . esc_url(home_url('/#lien-he')) . '">Liên hệ</a>';
      }
      ?>
    </nav>
    <a class="nav-cta" href="<?php echo esc_url(home_url('/#lien-he')); ?>">Nhận tư vấn <span aria-hidden="true">↗</span></a>
  </div>
</header>
