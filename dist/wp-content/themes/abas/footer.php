<footer>
  <div class="footer__content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <img src="<?php bloginfo('template_url'); ?>/images/marca.png" alt="Abas Online" class="footer__marca" />

          <p><strong>Receba nossos conteúdos por e-mail</strong></p>
          <p>Cadastre seu e-mail e receba dicas periódicas sobre como aumentar a produtividade de sua equipe.</p>

          <form class="newsletter">
            <div class="form-group">
              <label for="email" class="sr-only">E-mail</label>
              <input type="text" class="form-control" id="email" placeholder="Digite seu e-mail">
              <button type="submit">Enviar</button>
            </div>
          </form>
        </div>

        <div class="col-12 col-md-3 footer__contato">
          <ul>
            <li><a href="#" title="#"><i class="fab fa-whatsapp"></i> +55 31 98481-8247</a></li>
            <li><a href="#" title="#"><i class="fas fa-envelope"></i> contato@abas.online</a></li>
          </ul>
        </div>

        <div class="col-12 col-md-3 footer__menu">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'menu-footer-01',
            'depth'           => 2,
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </div>

        <div class="col-12 col-md-3 footer__menu">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'menu-footer-02',
            'depth'           => 2,
            'container'       => '',
            'container_class' => '',
            'container_id'    => '',
            'menu_class'      => '',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>
        </div>
      </div>
    </div>
  </div>

  <div class="footer__copy">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p>© Copyright 2020. Abas Online. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>