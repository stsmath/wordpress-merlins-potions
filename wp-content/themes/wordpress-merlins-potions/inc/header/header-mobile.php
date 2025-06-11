<div class="mobile">
  <section class="m-header-container">
    <ul class="m-header-menu-hamburguer">
      <li></li>
      <li></li>
      <li></li>
    </ul>
    <div class="m-header-container--marca">
      <a href="/" class="remove-style-link">
        <h1 class="logo-titulo"><strong>Merlin's</strong> Potions</h1>
        <p class="logo-subtitulo">- <?php bloginfo('description') ?> -</p>
      </a>
    </div>
    <div class="m-header-container--minicart">
      <p class="mini-bag">
        <span class="texto-bag">bag:</span><span class="conta-item">1</span>
      </p>
    </div>
  </section>

  <section class="m-header-menu mobile-menu closed">
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