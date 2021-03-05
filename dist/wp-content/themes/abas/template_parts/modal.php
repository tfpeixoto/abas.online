<!-- Modal -->
<div class="modal fade" id="modalConversao" tabindex="-1" role="dialog" aria-labelledby="Conversao" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Informe seus dados de contato para receber uma ligação dos nossos consultores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formLead" onsubmit="cadastrarLead(event, this);">
          <div class="form-group">
            <div id="retornoEnvio" class="text-center">
            </div>
          </div>

          <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" id="nome" placeholder="Seu nome">
          </div>
          <div class="form-group">
            <label for="empresa">Empresa</label>
            <input type="text" name="empresa" class="form-control" id="empresa" placeholder="Empresa">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="nome@email.com">
          </div>
          <div class="form-group">
            <label for="telefone">Telefone/Whatsapp</label>
            <input type="text" name="contato" class="form-control" id="telefone" placeholder="(00) 00000-0000">
          </div>
          <div class="form-group text-center">
            <button type="submit" class="btn btn-roxo">Receber contato</button>
            <p><small>Entraremos em contato em até 1 dia útil.</small></p>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>