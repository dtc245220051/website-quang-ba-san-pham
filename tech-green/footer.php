<footer class="site-footer" id="lien-he">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><span class="brand-mark">T</span><span class="brand-name">Tech<span>Green</span></span></a>
        <p>Khám phá các thiết bị điện tử và phụ kiện công nghệ hữu ích cho công việc, học tập và giải trí. Liên hệ với chúng tôi để được tư vấn lựa chọn phù hợp.</p>
      </div>
      <div>
        <h3>Liên kết nhanh</h3>
        <div class="footer-links">
          <a href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a>
          <a href="<?php echo esc_url(home_url('/#san-pham')); ?>">Sản phẩm</a>
          <a href="<?php echo esc_url(home_url('/#ve-chung-toi')); ?>">Về chúng tôi</a>
        </div>
      </div>
      <div>
        <h3>Thông tin liên hệ</h3>
        <div class="footer-links">
          <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('tech_green_phone', '0900 123 456'))); ?>">Điện thoại: <?php echo esc_html(get_theme_mod('tech_green_phone', '0900 123 456')); ?></a>
          <a href="mailto:<?php echo esc_attr(get_theme_mod('tech_green_email', 'hello@example.com')); ?>">Email: <?php echo esc_html(get_theme_mod('tech_green_email', 'hello@example.com')); ?></a>
          <span><?php echo esc_html(get_theme_mod('tech_green_address', 'Việt Nam')); ?></span>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <span>© <?php echo esc_html(wp_date('Y')); ?> TechGreen. Website quảng bá sản phẩm công nghệ.</span>
      <span>Thiết kế responsive · Xanh lá và trắng</span>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
