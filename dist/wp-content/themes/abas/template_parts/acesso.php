<!-- Modal -->
<div class="modal fade" id="modalAcesso" tabindex="-1" role="dialog" aria-labelledby="Acesso" aria-hidden="true">
  <div class="modal-dialog modal-md modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Acesse o Abas com seu <span class="text-nowrap">e-mail</span> e senha</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="formAcesso" onsubmit="cadastrarLead(event, this);">
          <div class="form-group text-center">
            <div id="msgSucesso" class="alert alert-success text-center" role="alert" style="display: none">
              Tudo certo! Em breve um consultor entrará em contato.
            </div>
            <div id="msgErro" class="alert alert-danger text-center" role="alert" style="display: none">
              Ops! Algo deu errado, por favor tente novamente.
            </div>
          </div>

          <div class="form-group">
            <label for="email-acesso">E-mail</label>
            <input type="email" name="email" class="form-control" id="email-acesso" placeholder="nome@email.com">
          </div>
          <div class="form-group">
            <label for="senha">Telefone/Whatsapp</label>
            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-roxo">Receber contato</button>
          </div>
          <p class="small text-center"><a href="#">Esqueceu a sua senha?</a></p>
        </form>
      </div>
    </div>
  </div>
</div>