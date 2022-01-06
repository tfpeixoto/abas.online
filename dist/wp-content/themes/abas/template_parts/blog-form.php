<!-- INÍCIO BLOG FORM -->
<section class="blog-form">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="blog-form__titulo text-center">Quer saber mais como Abas Online, pode te ajudar nos seus desafios?!</h2>
        <p class="blog-form__subtitulo text-center">Receba um contato da nossa equipe para saber mais detalhes.</p>

        <div class="text-center mt-5">
          <span id="msg-sucesso">Obrigado! Em breve entraremos em contato.</span>
        </div>

        <iframe title="Formulário de contato" src="<?php echo get_template_directory_uri().'/actions/contato.php'; ?>" name="b-form" frameborder="0" class="d-none"></iframe>
        <form action="<?php echo get_template_directory_uri().'/actions/contato.php'; ?>" method="post" class="form" target="b-form" id="blog-form">

          <div class="form__campos">
            <!-- NOME -->
            <div class="form__campos-input">
              <label for="blog-nome" class="label">Nome: </label>
              <input type="text" name="blog-nome" id="blog-nome" class="input" placeholder="Seu nome">
            </div>
  
            <!-- EMAIL -->
            <div class="form__campos-input">
              <label for="blog-email" class="label">E-mail: </label>
              <input type="text" name="blog-email" id="blog-email" class="input" placeholder="Seu E-mail">
              <span class="msg-erro"></span>
            </div>
  
            <!-- TELEFONE -->
            <div class="form__campos-input">
              <label for="blog-telefone" class="label">Telefone: </label>
              <input type="text" name="blog-telefone" id="blog-telefone" class="input" placeholder="Seu telefone">
            </div>
          </div>
          <input type="hidden" name="blog-url" value="<?php echo get_permalink(); ?>">
          <input type="submit" value="Receber contato" class="form__submit btn btn-amarelo">
        </form>
      </div>
    </div>
  </div>
</section>
<!-- FINAL DO BLOG FORM -->