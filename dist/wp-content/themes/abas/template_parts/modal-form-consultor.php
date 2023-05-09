<section class="consultor" data-modal="outside">
  <div class="consultor-modal">
    <span class="close-btn" title="Fechar modal" data-modal="close-btn">
      <i class="fas fa-times" data-modal="close-btn"></i>
    </span>
    <div class="form-container">
      <h2 class="title">Fale com um de nossos <strong>consultores</strong></h2>
      <span class="dash"></span>

      <form action="" class="form" id="formLead" name="solicitar-demonstracao">
        <div class="form-field">
          <label for="nome">Nome*</label>
          <input type="text" name="nome" id="nome">
        </div>
        <div class="form-field">
          <label for="email">E-Mail*</label>
          <input type="email" name="email" id="email">
        </div>
        <div class="form-field">
          <label for="telefone">Telefone/WhatsApp*</label>
          <input type="text" name="contato" id="telefone">
        </div>
        <div class="form-field">
          <label for="empresa">Empresa</label>
          <input type="text" name="empresa" id="empresa">
        </div>

        <button type="submit" class="colored-button">Receber Contato</button>
        <span class="request-error">Ops... algo deu errado. Tente novamente.</span>
        <span class="aviso">Entraremos em contato em até 1 dia útil.</span>
      </form>
    </div>

    <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
    <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">

    <div class="modal-succeeded">
      <div class="circle">
        <i class="fas fa-check"></i>
      </div>
      <p class="title">Entraremos em <strong>contato!</strong></p>
      <span class="dash"></span>
      <p class="lead">
        Nossa equipe entrará em contato em até 1 dia útil para esclarecer todas as suas dúvidas.
      </p>
    </div>
  </div>
</section>