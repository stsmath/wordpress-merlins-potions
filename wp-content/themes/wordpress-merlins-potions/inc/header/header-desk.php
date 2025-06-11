<div class="desktop">
  <section class="m-header-container">
    <div class="m-header-container--marca">
      <a href="/" class="remove-style-link">
        <h1 class="logo-titulo"><strong>Merlin's</strong> Potions</h1>
        <p class="logo-subtitulo">- <?php bloginfo('description') ?> -</p>
      </a>
    </div>
    <div class="m-header-container--busca">
      <?php include(TEMPLATEPATH . '/inc/lupa-busca.php') ?>
      <input type="text" id="campoBusca" placeholder="<?php the_field('texto_barra_pesquisa', $header); ?>" />
    </div>
    <div class="m-header-container--minicart">
      <p class="free-shipping">
        <span class="info-1">Free shipping</span>
        <span class="info-2">on orders over <?php the_field('preco_frete_gratis', $header); ?>
        </span>
      </p>
      <p class="mini-bag">
        <span class="texto-bag">bag:</span><span class="conta-item">1</span>
      </p>
    </div>
  </section>
  <section class="m-header-menu">
    <div class="m-header-menu-container">
      <?php
      $args = array(
        'menu' => 'principal',
        'theme_location' => 'menu-principal',
        'container' => false,
      );
      wp_nav_menu($args);
      ?>
      <div class="login-area">
        <p class="login-area-texto">
          <a href="" class="remove-style-link">Sign In</a>
          <span>or</span>
          <a href="" class="remove-style-link">Sign Up</a>
        </p>
      </div>
    </div>
  </section>
</div>