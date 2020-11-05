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
        <img src="<?php bloginfo('template_url'); ?>/images/canivete-suico.png" alt="Abas Online - Canivete Suíço" />
      </div>

      <div class="col-12 col-md-6">
        <h2 class="text-roxo">O que é o Abas Online?</h2>
        <p class="lead text-roxo font-weight-bold">Somos o único e mais completo Software de Gestão de Processos capaz de criar e automatizar fluxos de trabalho para atender diversas áreas em uma única empresa.</p>
        <p>Nosso <strong>gerenciador de tarefas</strong> contribui diretamente para o aumento da produtividade e redução do custo operacional, através da otimização de processos de vários setores:</p>
        <p>Departamento Pessoal, Comercial, Marketing, Recursos Humanos, Financeiro, Tecnologia da Informação e muito mais. </p>
      </div>
    </div>
  </div>
</section>

<section class="segmentos">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Departamento Pessoal</h3>
          <p>Personalize alertas e faça cálculo automático de férias por período de aquisição e substituição de funcionários. Calcule os benefícios: VT, VA e VR.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Recursos Humanos</h3>
          <p>Facilite a seleção de candidatos: abertura e acompanhamento de vagas e envio automático de e-mails com o status da oportunidade.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Compras e Estoque</h3>
          <p>Gerencie o processo de compras e estoque - desde o envio de e-mails ao fornecedor solicitando cotações até a baixa no estoque.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Manutenção</h3>
          <p>Controle as manutenções que possuem periodicidade, receba alertas dos vencimentos e facilite a vistoria de acordo com as normas da ABNT.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Jurídico</h3>
          <p>Rastreie dados pessoais e sensíveis, facilitando a elaboração do DPIA. Monitore os incidentes de segurança e a gestão de solicitação dos titulares.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Tecnologia da Informação</h3>
          <p>Crie tarefas e faça a gestão de demandas do time de desenvolvimento. Aloque horas, acompanhe o andamento e envie status das atividades.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Marketing</h3>
          <p>Crie fluxos e campanhas de e-mails automáticos. “Converse” com sua base a fim de nutrí-los com conteúdos úteis e compartilháveis.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Comercial</h3>
          <p>Gerencie as vendas e obtenha relatórios com os principais indicadores do seu negócio. Com a gestão a vista identifique gaps e melhore seus resultados.</p>
        </a>
      </div>

      <div class="col-12 col-md-4 segmentos__card">
        <a href="#" title="#">
          <img src="<?php bloginfo('template_url'); ?>/images/imagem-segmento.png" class="img-fluid" alt="#" />
          <h3>Comercial e Financeiro</h3>
          <p>Automatize e controle todo o processo financeiro: alçadas de aprovações, contas a pagar, a receber, reembolso de despesas e muito mais!</p>
        </a>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <a type="button" href="#" class="btn btn-amarelo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="fluxos">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center mb-5">
        <h2 class="text-roxo">Organize fluxos de trabalho em Abas</h2>
      </div>
    </div>

    <div class="row d-flex justify-content-center flex-row-reverse fluxos__container">
      <div class="col-5 fluxos__btns">
        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link active" id="v-pills-ideias-tab" data-toggle="pill" href="#v-pills-ideias" role="tab" aria-controls="v-pills-ideias" aria-selected="true">Gestão de ideias e inovações</a>
          <a class="nav-link" id="v-pills-lgpd-tab" data-toggle="pill" href="#v-pills-lgpd" role="tab" aria-controls="v-pills-lgpd" aria-selected="false">Gestão de LGPD</a>
          <a class="nav-link" id="v-pills-compras-tab" data-toggle="pill" href="#v-pills-compras" role="tab" aria-controls="v-pills-compras" aria-selected="false">Gestão de Compras</a>
          <a class="nav-link" id="v-pills-tarefas-tab" data-toggle="pill" href="#v-pills-tarefas" role="tab" aria-controls="v-pills-tarefas" aria-selected="false">Gestão de tarefas e prazos</a>
          <a class="nav-link" id="v-pills-pessoas-tab" data-toggle="pill" href="#v-pills-pessoas" role="tab" aria-controls="v-pills-pessoas" aria-selected="false">Gestão de pessoas: onboarding</a>
          <a class="nav-link" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm" role="tab" aria-controls="v-pills-crm" aria-selected="false">CRM</a>
        </div>
      </div>

      <div class="col-7">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-ideias" role="tabpanel" aria-labelledby="v-pills-ideias-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" class="img-fluid" alt="#" />
            <h3>Gestão de tarefas e prazos</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="gestao-tarefas" title="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
          </div>

          <div class="tab-pane fade" id="v-pills-lgpd" role="tabpanel" aria-labelledby="v-pills-lgpd-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" alt="#" />
            <h3>Gestão de tarefas e prazos 2</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="#" title="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
          </div>

          <div class="tab-pane fade" id="v-pills-compras" role="tabpanel" aria-labelledby="v-pills-compras-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" alt="#" />
            <h3>Gestão de tarefas e prazos 3</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="#" title="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
          </div>

          <div class="tab-pane fade" id="v-pills-tarefas" role="tabpanel" aria-labelledby="v-pills-tarefas-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" alt="#" />
            <h3>Gestão de tarefas e prazos 4</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="#" title="#" class="btn btn-white">Veja mais</a>
          </div>

          <div class="tab-pane fade" id="v-pills-pessoas" role="tabpanel" aria-labelledby="v-pills-pessoas-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" alt="#" />
            <h3>Gestão de tarefas e prazos 5</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="#" title="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
          </div>

          <div class="tab-pane fade" id="v-pills-crm" role="tabpanel" aria-labelledby="v-pills-crm-tab">
            <img src="<?php bloginfo('template_url'); ?>/images/imagem-tab.png" alt="#" />
            <h3>Gestão de tarefas e prazos 6</h3>
            <p>Monitore tarefas do início ao fim. Crie lembretes de prazos a vencer, check list de rotinas e formulários customizados para solicitação de demandas. Estabeleça vencimentos para garantir que projetos sejam realizados no tempo correto.</p>
            <a type="button" href="#" title="#" class="btn btn-white">Veja mais <i class="fas fa-chevron-right"></i></a>
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
          <img src="<?php bloginfo('template_url'); ?>/images/eliminamos-planilhas.png" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Eliminamos planilhas e centralizamos tarefas</h3>
          <p>Somos o sistema de gestão de processos mais completo do país. Por isso, transformamos controles manuais de qualquer setor do seu negócio em processos automáticos: gerenciamento de vendas, alertas automáticos, gestão de contas a pagar e a receber, compras, estoque e muito mais. Além disso, com o nosso sistema as suas atividades ficam centralizadas em um único gerenciador, facilitando a rotina e fortalecendo a segurança das informações.</p>
          <a type="button" href="#" class="btn btn-outline-roxo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="dobras__item">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center flex-row-reverse">
        <div class="col-12 col-md-5">
          <img src="<?php bloginfo('template_url'); ?>/images/eliminamos-planilhas.png" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Não limitamos funcionalidades por assinatura</h3>
          <p>Isso mesmo, você não precisa fazer upgrade de plano para usar mais recursos do sistema! Somos o único software para gestão de processos que não limita funcionalidades. Assim que você se torna um de nossos clientes, todas as opções de fluxos de trabalho estarão disponíveis para o uso do seu negócio. Quanto mais processos você cria, mais fácil se torna seu trabalho.</p>
          <a type="button" href="#" class="btn btn-outline-roxo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="dobras__item">
    <div class="container">
      <div class="row d-flex justify-content-between align-items-center">
        <div class="col-12 col-md-5">
          <img src="<?php bloginfo('template_url'); ?>/images/eliminamos-planilhas.png" alt="#" />
        </div>

        <div class="col-12 col-md-6">
          <h3 class="h2">Customizamos o sistema de acordo com as necessidades da sua empresa</h3>
          <p>Nossa estrutura é totalmente flexível e nossa implantação é totalmente personalizada. Modelamos o sistema para atender cada especificidade do seu negócio. Todo novo cliente recebe treinamento técnico e aprofundado para dominar a operação do processo de criação e gestão dos fluxos de trabalho.</p>
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
require_once("template_parts/modal.php");
require_once("footer.php");
?>