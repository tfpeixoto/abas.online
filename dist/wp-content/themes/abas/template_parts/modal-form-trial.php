<section class="trial" data-modal="outside">
  <div class="trial-modal">
    <span class="close-btn" title="Fechar modal" data-modal="close-btn">
      <i class="fas fa-times" data-modal="close-btn"></i>
    </span>
    <div class="thumb">
      <img src="<?php echo get_template_directory_uri() . '/images/form-trial-thumb.webp'; ?>" alt="Mulher mexendo trabalhando atráves do celular" class="thumb-img">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
    </div>
    <div class="form-container">
      <h2 class="title">Faça seu cadastro e teste grátis por <strong>10 dias</strong></h2>
      <span class="dash"></span>

      <form action="<?php echo site_url().'/redirecionamento'; ?>" class="form" id="trialForm" name="trial-form-popup">
        <div class="form-field">
          <label for="name">Nome*</label>
          <input type="text" name="nome" id="nameTrial">
        </div>
        <div class="form-field">
          <label for="email">E-Mail*</label>
          <input type="email" name="email" id="emailTrial">
        </div>
        <div class="form-field">
          <label for="phone">Telefone*</label>
          <input type="text" name="contato" id="phoneTrial">
        </div>
        <div class="form-field">
          <label for="empresa">Empresa</label>
          <input type="text" name="empresa" id="empresaTrial">
        </div>

        <button type="submit" class="colored-button">Testar Grátis</button>
      </form>
    </div>
  </div>
</section>