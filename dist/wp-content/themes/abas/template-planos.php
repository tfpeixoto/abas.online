<?php

/**
 * Template Name: Template Planos
 */
$estiloPagina = "planos.css";
require_once("header.php");
?>
<section class="main">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>CONHEÇA NOSSOS PLANOS:</h2>
      </div>
      <div class="col-12">
        <div class="planos owl-carousel">
          <div class="item">
            <h3 class="planos__lettering">PLANO ONE</h3>

            <div class="planos__card">
              <div class="header">
                <h3>PLANO ONE</h3>
              </div>
              <div class="body">
                <div class="price">
                  <p>R$ <strong>69</strong></p>
                  <span>Por mês</span>
                </div>

                <ul class="descriptions">
                  <li>
                    <p>Até 1 usuário.</p>
                  </li>
                  <li>
                    <p>Todos os templates disponíveis + 1 workspace com até 10 abas.</p>
                  </li>
                  <li>
                    <p>1 evento por aba.</p>
                  </li>
                  <li>
                    <p>Visão de Formulários, Calendário e Planilha.</p>
                  </li>
                  <li>
                    <p>Customização de cores e marca.</p>
                  </li>
                  <li>
                    <p>Atendimento via ticket.</p>
                  </li>
                </ul>

                <a href="#contato">Quero esse!</a>

                <span class="aviso">Converse com um dos nossos atendentes.</span>
              </div>
            </div>
          </div>
          <div class="item">
            <h3 class="planos__lettering">PLANO STARTER</h3>

            <div class="planos__card">
              <div class="header">
                <h3>PLANO STARTER</h3>
              </div>
              <div class="body">
                <div class="price">
                  <p>R$ <strong>157</strong></p>
                  <span>Por mês</span>
                </div>

                <ul class="descriptions">
                  <li>
                    <p>Até 3 usuários.</p>
                  </li>
                  <li>
                    <p>Todos os templates disponíveis + 3 workspaces com até 10 abas.</p>
                  </li>
                  <li>
                    <p>2 eventos por aba.</p>
                  </li>
                  <li>
                    <p>Visão de Formulários, Calendário e Planilha.</p>
                  </li>
                  <li>
                    <p>Customização de cores e marca.</p>
                  </li>
                  <li>
                    <p>Atendimento via ticket.</p>
                  </li>
                </ul>

                <a href="#contato">Quero esse!</a>

                <span class="aviso">Converse com um dos nossos atendentes.</span>
              </div>
            </div>
          </div>
          <div class="item">
            <h3 class="planos__lettering">PLANO BUSINESS</h3>

            <div class="planos__card">
              <div class="header">
                <h3>PLANO BUSINESS</h3>
              </div>
              <div class="body">
                <div class="price">
                  <p>R$ <strong>225</strong></p>
                  <span>Por mês</span>
                </div>

                <ul class="descriptions">
                  <li>
                    <p>Pelo menos 5 usuários.</p>
                  </li>
                  <li>
                    <p>Todos os templates disponíveis + 3 workspaces com até 10 abas.</p>
                  </li>
                  <li>
                    <p>5 eventos por aba.</p>
                  </li>
                  <li>
                    <p>Visão de Formulários, Calendário e Planilha + Dashboard, Matriz Gantt, Galeria e Kanbam.</p>
                  </li>
                  <li>
                    <p>Permissão multinível: App IOS e Android.</p>
                  </li>
                  <li>
                    <p>Atendimento via ticket e vídeo conferência.</p>
                  </li>
                </ul>

                <a href="#contato">Quero esse!</a>

                <span class="aviso">Converse com um dos nossos atendentes.</span>
              </div>
            </div>
          </div>
          <div class="item">
            <h3 class="planos__lettering">PLANO ENTERPRISE</h3>

            <div class="planos__card">
              <div class="header">
                <h3>PLANO ENTERPRISE</h3>
              </div>
              <div class="body">
                <div class="price">
                  <p class="texto">Sob Consulta</p>
                </div>

                <ul class="descriptions">
                  <li>
                    <p>Pelo menos 10 usuários.</p>
                  </li>
                  <li>
                    <p>Workspaces e abas ilimitadas.</p>
                  </li>
                  <li>
                    <p>
                      Visão de Formulários, Calendário e Planilha + Dashboard, Matriz Gantt, Galeria e Kanbam
                      + Integração com site e Condomínio21, em nuvem
                    </p>
                  </li>
                  <li>
                    <p>Permissão multinível: App IOS e Android.</p>
                  </li>
                  <li>
                    <p>Atendimento via ticket e vídeo conferência.</p>
                  </li>
                </ul>

                <a href="#contato">Quero esse!</a>

                <span class="aviso">Converse com um dos nossos atendentes.</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="contato" id="contato">
  <div class="container">
    <div class="row">
      <div class="col">
        <h2>Receba o contato da nossa equipe:</h2>

        <form class="contato__form" name="planos" method="POST">
          <label for="name">
            Nome
            <input type="text" name="name" id="name" placeholder="Nome">
          </label>

          <label for="company">
            Empresa
            <input type="text" name="company" id="company" placeholder="Empresa">
          </label>

          <label for="email">
            Email
            <input type="email" name="email" id="email" placeholder="Email">
          </label>

          <label for="phone">
            Telefone
            <input type="text" name="phone" id="phone" placeholder="Telefone">
          </label>

          <input type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>">
          <input type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>">
          <input type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>">

          <button type="submit" id="submitButton">Enviar</button>
          <span class="success-message">Formulário enviado com sucesso! Em breve entraremos em contato.</span>
        </form>
      </div>
    </div>
  </div>
</section>
<?php
require_once("footer.php");
?>