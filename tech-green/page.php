<?php get_header(); ?>
<main class="content-area">
  <div class="container">
    <?php while (have_posts()) : the_post(); ?>
      <article <?php post_class('entry-content'); ?>>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <?php if (has_post_thumbnail()) : ?><p><?php the_post_thumbnail('large'); ?></p><?php endif; ?>
        <?php the_content(); ?>
      </article>
    <?php endwhile; ?>
  </div>
</main>
<?php get_footer(); ?>
