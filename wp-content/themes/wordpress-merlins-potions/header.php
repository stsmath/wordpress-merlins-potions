<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name'); ?> - <?php bloginfo('description') ?> </title>
  <meta name="description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description') ?> ">

  <meta property="og:type" content="website" />
  <meta property="og:title"
    content="<?php bloginfo('name'); ?> - <?php wp_title('-') ?><?php bloginfo('description') ?> " />
  <meta property="og:description" content="<?php bloginfo('name'); ?> - <?php bloginfo('description') ?> " />
  <meta property="og:url" content="<?php bloginfo('url') ?>" />
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/og-image.png" />

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Inicio header Wordpress -->
  <?php wp_head(); ?>
  <!-- Fim header Wordpress -->
</head>

<body <?php body_class(); ?>>

  <header class="m-header">
    <section class="m-header-container">
      <div class="m-header-container--marca">
        <a href="/" class="remove-style-link">
          <h1 class="logo-titulo"><strong>Merlin's</strong> Potions</h1>
          <p class="logo-subtitulo">- <?php bloginfo('description') ?> -</p>
        </a>
      </div>
      <div class="m-header-container--busca">
        <?php include(TEMPLATEPATH . '/inc/lupa-busca.php') ?>
        <input type="text" id="campoBusca" placeholder="Search our stock" />
      </div>
      <div class="m-header-container--minicart">
        <p class="free-shipping">
          <span class="info-1">Free shipping</span><span class="info-2">on orders over
            $<?php the_field('valor_frete_gratis') ?></span>
        </p>
        <p class="mini-bag">
          <span class="texto-bag">bag:</span><span class="conta-item">1</span>
        </p>
      </div>
    </section>
    <section class="m-header-menu">
      <?php
      $args = array(
        'menu' => 'principal',
        'theme_location' => 'menu-principal',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
      <p class="botao-unico-menu">Clearance!</p>
    </section>
  </header>