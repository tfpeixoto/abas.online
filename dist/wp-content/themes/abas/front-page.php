<?php
/*
 * Template name: Home
*/
$estiloPagina = "home.css";
require_once("header.php");
?>

<section class="banner banner-home">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Sistema de automação de processos totalmente personalizável</h1>
        <p class="lead">Com workflow simples e flexível, nós facilitamos a comunicação entre setores, possibilitamos a criação de ideias e inovações, gerenciamos prazos, demandas operacionais, de TI e muito mais!</p>
        <a type="button" href="#" class="btn btn-amarelo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="intro bg-cinza-claro">
  <div class="container">
    <div class="row d-flex justify-content-between align-items-center">
      <div class="col-12 col-md-5">
        <img src="<?php bloginfo('template_url'); ?>/images/canivete-suico.png" class="img-fluid" alt="Abas Online - Canivete Suíço" />
      </div>

      <div class="col-12 col-md-6">
        <h2 class="text-roxo">O que é o Abas Online?</h2>
        <p class="lead text-roxo font-weight-bold">Somos o único e mais completo Software de Gestão de Processos capaz de criar e automatizar fluxos de trabalho para atender diversas áreas em uma única empresa.</p>
        <p>Nosso <strong>gerenciador de tarefas</strong> contribui diretamente para o <strong>aumento da produtividade e redução do custo</strong> operacional, através da otimização de processos de vários setores:</p>
        <p>Departamento Pessoal, Comercial, Marketing, Recursos Humanos, Financeiro, Tecnologia da Informação e muito mais. </p>
      </div>
    </div>
  </div>
</section>

<section class="segmentos">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>Conheça nossas soluções para vários segmentos</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/departamento-pessoal" title="Gestão de departamento pessoal">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/departamento-pessoal.jpg" class="img-fluid" alt="Gestão de departamento pessoal" />
          <h3>Departamento Pessoal</h3>
          <p>Personalize alertas e faça cálculo automático de férias por período de aquisição e substituição de funcionários. Calcule os benefícios: VT, VA e VR.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/recursos-humanos" title="Gestão de recursos humanos">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/recursos-humanos.jpg" class="img-fluid" alt="Gestão de recursos humanos" />
          <h3>Recursos Humanos</h3>
          <p>Facilite a seleção de candidatos: abertura e acompanhamento de vagas e envio automático de e-mails com o status da oportunidade.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="fluxo-de-trabalho/gestao-de-compras" title="Gestão de compras e estoque">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/compras-estoque.jpg" class="img-fluid" alt="Gestão de compras e estoque" />
          <h3>Compras e Estoque</h3>
          <p>Gerencie o processo de compras e estoque - desde o envio de e-mails ao fornecedor solicitando cotações até a baixa no estoque.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/manutencao" title="Gestão de manutenções">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/manutencao.jpg" class="img-fluid" alt="Gestão de manutenções" />
          <h3>Manutenção</h3>
          <p>Controle as manutenções que possuem periodicidade, receba alertas dos vencimentos e facilite a vistoria de acordo com as normas da ABNT.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/juridico" title="Gestão de setor jurídico">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/juridico.jpg" class="img-fluid" alt="Gestão de setor jurídico" />
          <h3>Jurídico</h3>
          <!-- <p>Rastreie dados pessoais e sensíveis, facilitando a elaboração do DPIA. Monitore os incidentes de segurança e a gestão de solicitação dos titulares.</p> -->
          <p>Gerencie as apólices e contratos, faça anotações sobre o andamento de processos judiciais e emita alertas de vencimentos de forma automática.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/tecnologia-da-informacao" title="Gestão de demandas de TI">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/tecnologia-informacao.jpg" class="img-fluid" alt="Gestão de demandas de TI" />
          <h3>Tecnologia da Informação</h3>
          <p>Crie tarefas e faça a gestão de demandas do time de desenvolvimento. Aloque horas, acompanhe o andamento e envie status das atividades.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/marketing-e-comercial" title="Gestão de Marketing">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/marketing.jpg" class="img-fluid" alt="Gestão de Marketing" />
          <h3>Marketing</h3>
          <p>Crie fluxos e campanhas de e-mails automáticos. “Converse” com sua base a fim de nutri-los com conteúdos úteis e compartilháveis.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/marketing-e-comercial" title="Gestão de departamento comercial">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/comercial.jpg" class="img-fluid" alt="Gestão de departamento comercial" />
          <h3>Comercial</h3>
          <p>Gerencie as vendas e obtenha relatórios com os principais indicadores do seu negócio. Com a gestão a vista identifique gaps e melhore seus resultados.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="segmento/financeiro" title="Gestão de departamento financeiro">
          <img src="<?php bloginfo('template_url'); ?>/images/thumbs/financeiro.jpg" class="img-fluid" alt="Gestão de departamento financeiro" />
          <h3>Financeiro</h3>
          <p>Automatize e controle todo o processo financeiro: alçadas de aprovações, contas a pagar, a receber, reembolso de despesas e muito mais!</p>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <!-- <a type="button" href="#" class="btn btn-amarelo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a> -->
        <a type="button" href="https://conteudo.abas.online/gerenciamento-de-tarefas" class="btn btn-amarelo" target="_blank" rel="noopener noreferrer">Testar Grátis <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="fluxos">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="text-roxo">Organize fluxos de trabalho em abas</h2>
      </div>
    </div>

    <div class="row d-flex justify-content-center align-items-center flex-row-reverse fluxos__container">
      <div class="col-12 col-md-5 fluxos__btns">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <!-- <a class="nav-link" id="v-pills-ideias-tab" data-toggle="pill" href="#v-pills-ideias" role="tab" aria-controls="v-pills-ideias" aria-selected="true">Gestão de ideias e inovações</a> -->
          <a class="nav-link active" id="v-pills-tarefas-tab" data-toggle="pill" href="#v-pills-tarefas" role="tab" aria-controls="v-pills-tarefas" aria-selected="false">Gestão de tarefas e prazos</a>
          <!-- <a class="nav-link" id="v-pills-lgpd-tab" data-toggle="pill" href="#v-pills-lgpd" role="tab" aria-controls="v-pills-lgpd" aria-selected="false">Gestão de LGPD</a> -->
          <a class="nav-link" id="v-pills-compras-tab" data-toggle="pill" href="#v-pills-compras" role="tab" aria-controls="v-pills-compras" aria-selected="false">Gestão de Compras</a>
          <a class="nav-link" id="v-pills-pessoas-tab" data-toggle="pill" href="#v-pills-pessoas" role="tab" aria-controls="v-pills-pessoas" aria-selected="false">Gestão de pessoas: onboarding</a>
          <a class="nav-link" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm" role="tab" aria-controls="v-pills-crm" aria-selected="false">CRM</a>
          <a class="nav-link" id="v-pills-manutencoes-tab" data-toggle="pill" href="#v-pills-manutencoes" role="tab" aria-controls="v-pills-manutencoes" aria-selected="false">Manutenções</a>
        </div>
      </div>

      <div class="col-12 col-md-7">
        <div class="tab-content" id="v-pills-tabContent">
          <?php /*
          <div class="tab-pane fade" id="v-pills-ideias" role="tabpanel" aria-labelledby="v-pills-ideias-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/ideias-inovacoes.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Gestão de ideias e inovações</h3>
              <p>Transforme as ideias dos colaboradores em resultados financeiros reais. Personalize campanhas para incentivar pessoas a enviarem sugestões inovadoras para problemas ou oportunidades reais do seu negócio. Controle as aprovações e status dos projetos de forma fácil e flexível.
              </p>
              <a type="button" href="gestao-de-ideias-e-inovacoes" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          */ ?>
          
          <div class="tab-pane fade show active" id="v-pills-tarefas" role="tabpanel" aria-labelledby="v-pills-tarefas-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/tarefas-prazos.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Gestão de tarefas e prazos</h3>
              <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
              <a type="button" href="gestao-tarefas" class="btn btn-white">Veja mais</a>
            </div>
          </div>

          <?php /*
          <div class="tab-pane fade" id="v-pills-lgpd" role="tabpanel" aria-labelledby="v-pills-lgpd-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/lgpd.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Gestão de LGPD</h3>
              <p>ALTERAR Donec leo nisl, malesuada sit amet velit gravida, elementum ornare libero. Proin eget velit quam. Sed ornare porta libero, id placerat lectus laoreet eu. Nunc posuere tellus odio, vitae commodo massa aliquet in.</p>
              <a type="button" href="gestao-de-lgpd" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          */ ?>

          <div class="tab-pane fade" id="v-pills-compras" role="tabpanel" aria-labelledby="v-pills-compras-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/compras.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Gestão de compras</h3>
              <p>Automatize e organize todo o fluxo de compras da sua empresa, desde o registro do pedido até a baixa no estoque. Tenha dashboards dinâmicos com visão completa das cotações, pedidos de orçamentos automáticos e muito mais.</p>
              <a type="button" href="gestao-de-compras" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>


          <div class="tab-pane fade" id="v-pills-pessoas" role="tabpanel" aria-labelledby="v-pills-pessoas-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/gestao-pessoas.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Gestão de Pessoas: onboarding remoto</h3>
              <p>Faça a integração dos seus novos colaboradores de forma totalmente remota. Defina um processo de aprendizado para novos funcionários e estipule prazos para cada etapa. Receba atualizações de status em tempo real, verifique o progresso do aprendizado e compartilhe facilmente arquivos com os novos membros da equipe.</p>
              <a type="button" href="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>

          <div class="tab-pane fade" id="v-pills-crm" role="tabpanel" aria-labelledby="v-pills-crm-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/crm.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>CRM</h3>
              <p>Organize e automatize todo o seu processo de vendas com painéis personalizados e com os indicadores mais importantes para seu negócio, registre o histórico de vendas gerando mais aprendizado para equipe por meio de uma base de dados confiável e muito mais.</p>
              <a type="button" href="crm" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>

          <div class="tab-pane fade" id="v-pills-manutencoes" role="tabpanel" aria-labelledby="v-pills-manutencoes-tab" style="background: url(<?php bloginfo('template_url'); ?>/images/tabs/manutencoes.jpg) no-repeat">
            <div class="tab-pane__content">
              <h3>Manutenções</h3>
              <p>Torne a gestão de manutenção da sua empresa em um processo inteligente e prático. Crie rotinas automatizadas para solicitação de orçamentos e armazene todas as informações em uma única ferramenta.</p>
              <a type="button" href="gestao-de-manutencao" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<section class="dobras">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-10 text-center mb-5">
        <h2 class="text-roxo">Por que o Abas é o melhor gerenciador de tarefas para a sua empresa?</h2>
      </div>
    </div>
  </div>

  <div class="dobras__item">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-12 col-md-5">
          <img src="<?php bloginfo('template_url'); ?>/images/eliminamos-planilhas.png" class="img-fluid" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Eliminamos planilhas e centralizamos tarefas</h3>
          <p>Somos o sistema de gestão de processos mais completo do país. Por isso, <strong>transformamos controles manuais de qualquer setor do seu negócio em processos automáticos</strong>: gerenciamento de vendas, alertas automáticos, gestão de contas a pagar e a receber, compras, estoque e muito mais. Além disso, com o nosso sistema as suas atividades ficam centralizadas em um único gerenciador, facilitando a rotina e fortalecendo a segurança das informações.</p>
          <!-- <a type="button" href="#" class="btn btn-outline-roxo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a> -->
          <a type="button" href="https://conteudo.abas.online/gerenciamento-de-tarefas" class="btn btn-outline-roxo" target="_blank" rel="noopener noreferrer">Solicite demonstração <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="dobras__item">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center flex-row-reverse">
        <div class="col-12 col-md-5">
          <img src="<?php bloginfo('template_url'); ?>/images/sem-limite-funcionalidades.png" class="img-fluid" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Não limitamos funcionalidades por assinatura</h3>
          <p>Isso mesmo, você não precisa fazer upgrade de plano para usar mais recursos do sistema! Somos o único software para gestão de processos que não limita funcionalidades. Assim que você se torna um de nossos clientes, <strong>todas as opções de fluxos de trabalho estarão disponíveis</strong> para o uso do seu negócio. Quanto mais processos você cria, mais fácil se torna seu trabalho.</p>
          <a type="button" href="#" class="btn btn-outline-roxo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="dobras__item">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-12 col-md-5">
          <img src="<?php bloginfo('template_url'); ?>/images/sistema-customizado.png" class="img-fluid" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Customizamos o sistema de acordo com as necessidades da sua empresa</h3>
          <p>Nossa estrutura é totalmente flexível e nossa implantação é totalmente personalizada. <strong>Modelamos o sistema para atender cada especificidade do seu negócio</strong>. Todo novo cliente recebe treinamento técnico e aprofundado para dominar a operação do processo de criação e gestão dos fluxos de trabalho.</p>
          <a type="button" href="#" class="btn btn-outline-roxo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php
require_once("template_parts/depoimentos.php");
require_once("template_parts/cta.php");
require_once("template_parts/acesso.php");
require_once("template_parts/modal.php");
require_once("footer.php");
?>