<?php get_header(); ?>
<main>
  <section class="hero">
    <div class="container hero-grid">
      <div>
        <span class="eyebrow"><span aria-hidden="true">✦</span> Công nghệ cho cuộc sống hiện đại</span>
        <h1>Nâng tầm trải nghiệm với <span>công nghệ thông minh.</span></h1>
        <p class="hero-copy">Khám phá thiết bị điện tử và phụ kiện công nghệ được tuyển chọn để hỗ trợ công việc hiệu quả, giải trí trọn vẹn và kết nối mỗi ngày.</p>
        <div class="hero-actions">
          <a class="button" href="#san-pham">Khám phá sản phẩm <span aria-hidden="true">→</span></a>
          <a class="button secondary" href="#ve-chung-toi">Tìm hiểu thêm</a>
        </div>
        <div class="hero-note"><span>Sản phẩm đa dạng</span><span>Tư vấn tận tâm</span><span>Hỗ trợ nhanh chóng</span></div>
      </div>
      <div class="hero-art" aria-label="Minh họa thiết bị công nghệ">
        <div class="device-orbit"></div>
        <div class="device-card">
          <div class="device-top"><span>TechGreen Select</span><span>01 / 03</span></div>
          <div class="device-screen" aria-hidden="true">⌁</div>
          <div class="device-caption">Smart technology</div>
          <div class="device-sub">Thiết kế tinh gọn · Trải nghiệm tiện ích</div>
        </div>
        <div class="floating-chip chip-one">✦ Lựa chọn thông minh</div>
        <div class="floating-chip chip-two">● Công nghệ mỗi ngày</div>
      </div>
    </div>
  </section>

  <section class="trust-strip" aria-label="Lợi ích">
    <div class="container trust-inner">
      <div class="trust-item"><span class="trust-icon">✓</span><span>Thông tin rõ ràng</span></div>
      <div class="trust-item"><span class="trust-icon">⌘</span><span>Thiết bị hữu ích</span></div>
      <div class="trust-item"><span class="trust-icon">♡</span><span>Tư vấn tận tâm</span></div>
      <div class="trust-item"><span class="trust-icon">↗</span><span>Kết nối dễ dàng</span></div>
    </div>
  </section>

  <section class="section" id="san-pham">
    <div class="container">
      <div class="section-heading">
        <div><div class="section-kicker">Danh mục nổi bật</div><h2>Công nghệ phù hợp với bạn</h2><p class="section-intro">Tham khảo các sản phẩm gợi ý dưới đây. Hãy liên hệ để nhận thông tin chi tiết và tư vấn theo nhu cầu.</p></div>
        <a class="text-link" href="#lien-he">Xem tất cả / Tư vấn →</a>
      </div>
      <div class="product-grid"><?php tech_green_product_cards(); ?></div>
    </div>
  </section>

  <section class="section soft" id="ve-chung-toi">
    <div class="container feature-grid">
      <div class="feature-visual"><span aria-hidden="true">⌘</span></div>
      <div>
        <div class="section-kicker">Về TechGreen</div>
        <h2>Chọn đúng công nghệ, tối ưu trải nghiệm mỗi ngày.</h2>
        <p class="section-intro">Chúng tôi hướng đến việc giúp khách hàng dễ dàng khám phá thiết bị công nghệ, so sánh nhu cầu và tìm được lựa chọn phù hợp với mục đích sử dụng.</p>
        <div class="feature-list">
          <div class="feature-item"><span class="feature-check">✓</span><div><h3>Thông tin dễ hiểu</h3><p>Mô tả rõ công dụng và nhóm người dùng phù hợp để bạn tham khảo.</p></div></div>
          <div class="feature-item"><span class="feature-check">✓</span><div><h3>Gợi ý theo nhu cầu</h3><p>Tham khảo lựa chọn cho học tập, công việc, giải trí và sử dụng hằng ngày.</p></div></div>
          <div class="feature-item"><span class="feature-check">✓</span><div><h3>Kết nối nhanh chóng</h3><p>Liên hệ để trao đổi thêm về thông số, giá bán và tình trạng sản phẩm.</p></div></div>
        </div>
      </div>
    </div>
  </section>

  <section class="promo">
    <div class="container">
      <div class="promo-box">
        <div><h2>Bạn đang tìm thiết bị công nghệ phù hợp?</h2><p>Gửi yêu cầu để được tư vấn thêm về sản phẩm và thông tin cần thiết.</p></div>
        <a class="button" href="mailto:<?php echo esc_attr(get_theme_mod('tech_green_email', 'hello@example.com')); ?>">Liên hệ tư vấn <span aria-hidden="true">↗</span></a>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
