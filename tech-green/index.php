<?php get_header(); ?>
<main class="content-area">
  <div class="container">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('entry-content'); ?>>
          <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
          <?php if (has_post_thumbnail()) : ?><p><?php the_post_thumbnail('large'); ?></p><?php endif; ?>
          <?php the_excerpt(); ?>
          <a class="text-link" href="<?php the_permalink(); ?>">Đọc tiếp →</a>
        </article>
        <hr>
      <?php endwhile; ?>
      <div class="pagination"><?php the_posts_pagination(); ?></div>
    <?php else : ?>
      <h1 class="entry-title">Chưa có bài viết</h1><p>Hãy thêm bài viết trong trang quản trị WordPress.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
