<footer class="m-footer">
  <?php $footer = get_post('36') ?>
  <div class="m-footer-container">
    <div class="m-footer-icons-direitos">
      <div class="m-footer-icons-utils">
        <a class="links-utils" href="<?php the_field('link_contato_1', $footer); ?>">
          <?php the_field('texto_contato_1', $footer); ?>
        </a>
        <a class="links-utils" href="<?php the_field('link_contato_2', $footer); ?>">
          <?php the_field('texto_contato_2', $footer); ?>
        </a>
        <a class="links-utils" href="<?php the_field('link_contato_3', $footer); ?>">
          <?php the_field('texto_contato_3', $footer); ?>
        </a>
      </div>
      <div class="m-footer-icons">
        <a href="<?php the_field('link_primeiro_icone', $footer) ?>" class="icone-rede link-rede" target="_blank">
          <img src="<?php the_field('primeiro_icone', $footer) ?>" alt="Icone rede social" />
        </a>
        <a href="<?php the_field('link_segundo_icone', $footer) ?>" class="icone-rede link-rede" target="_blank">
          <img src="<?php the_field('segundo_icone', $footer) ?>" alt="Icone rede social" />
        </a>
        <a href="<?php the_field('link_terceiro_icone', $footer) ?>" class="icone-rede link-rede" target="_blank">
          <img src="<?php the_field('terceiro_icone', $footer) ?>" alt="Icone rede social" />
        </a>
        <a href="<?php the_field('link_quarto_icone', $footer) ?>" class="icone-rede link-rede" target="_blank">
          <img src="<?php the_field('quarto_icone', $footer) ?>" alt="Icone rede social" />
        </a>
        <a href="<?php the_field('link_quinto_icone', $footer) ?>" class="icone-rede link-rede" target="_blank">
          <img src="<?php the_field('quinto_icone', $footer) ?>" alt="Icone rede social" />
        </a>
      </div>
      <p class="m-footer-direitos">© <?php echo date("Y") ?> <?php bloginfo('title') ?>. All Rights Reserved</p>
    </div>
    <div class="m-footer-newsletter">
      <p class="m-footer-newsletter-title">
        Sign up for our Newsletter
      </p>
      <p class="m-footer-newsletter-text">
        Sign up for our newsletter & get exclusives discounts!
      </p>
      <div class="m-footer-newsletter--subs">
        <input type="text" class="input-newsletter" id="campoNewsletter" placeholder="Enter your email" />
        <button class="botao-newsletter">Submit</button>
      </div>
    </div>
  </div>
</footer>
</body>
<!-- Inicio footer Wordpress -->
<?php wp_footer(); ?>
<!-- Fim footer Wordpress -->

</html>