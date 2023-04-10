<footer>
  <div class="footer__content">
    <div class="container">
      <div class="row">
        <div class="col-12 col-md-3">
          <img src="<?php bloginfo('template_url'); ?>/images/marca.png" alt="Abas Online" class="footer__marca" />

          <?php /*
          <p><strong>Receba nossos conteúdos por e-mail</strong></p>
          <p>Cadastre seu e-mail e receba dicas periódicas sobre como aumentar a produtividade de sua equipe.</p>

          <form class="newsletter">
            <div class="form-group">
              <label for="email-news" class="sr-only">E-mail</label>
              <input type="text" class="form-control" id="email-news" placeholder="Digite seu e-mail">
              <button type="submit">Enviar</button>
            </div>
          </form>
          */ ?>
        </div>

        <div class="col-12 col-md-3 footer__contato">
          <ul>
            <li><a href="https://wa.me/+5531984042168" target="_blank" title="Whatsapp"><i class="fab fa-whatsapp"></i> +55 31 98404-2168</a></li>
            <li><a href="mailto:contato@abas.online" title="Email"><i class="fas fa-envelope"></i> contato@abas.online</a></li>
            <li><a href="https://instagram.com/abas_online" target="_blank" title="Instagram">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg> @abas_online</a>
            </li>
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
          <p>© Copyright 2023. Abas Online. Todos os direitos reservados.</p>
        </div>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>