<?php get_header() ?>

<?php if (have_posts()):
  while (have_posts()):
    the_post(); ?>

  <?php endwhile; else: ?>

<?php endif; ?>
  <section class="">
    <h1>Página não encontrada.</h1>
  </section>
<?php get_footer() ?>