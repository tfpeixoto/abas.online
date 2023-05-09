<?php

/**
 * Template name: Home 2023
 */
$estiloPagina = "home-2023.css";
require_once("header.php");
?>

<!-- INÍCIO MAIN -->
<main class="main">
  <div class="main__container container">
    <div class="content">
      <h1 class="title">Ferramenta de Gestão de <strong>Projetos e Tarefas</strong></h1>
      <span class="dash"></span>
      <p class="lead">
        Reúna processo de trabalho, automatize seu fluxo de tarefas e integre suas equipes,
        garantindo uma fonte de informação para toda a organização.
      </p>
      <div class="ctas">
        <a href="#" class="borderless-button contactBtn">Consultar <i class="fa fa-chevron-right"></i></a>
        <a href="#" class="colored-button trialBtn">Testar Grátis</a>
      </div>
    </div>
    <div class="imagens">
      <img src="<?php echo get_template_directory_uri() . '/images/dashboard-banner.svg'; ?>" alt="Dashboard do sistema Abas Online" class="dashboard">
      <img src="<?php echo get_template_directory_uri() . '/images/persona-banner.svg'; ?>" alt="Persona" class="persona">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
    </div>
  </div>
</main>
<!-- FINAL MAIN -->

<!-- INÍCIO CLIENTES -->
<section class="clientes">
  <div class="clientes__container container">
    <div class="content">
      <h3 class="title">Junte-se com quem confia no <strong>Abas</strong></h3>
    </div>
    <ul class="marcas">
      <li><img src="<?php echo get_template_directory_uri() . '/images/90TI.svg'; ?>" alt="90TI" width="98" height="41"></li>
      <li><img src="<?php echo get_template_directory_uri() . '/images/atac-fire.svg'; ?>" alt="AtacFire" width="107" height="71"></li>
      <li><img src="<?php echo get_template_directory_uri() . '/images/gallo.svg'; ?>" alt="Gallo" width="81" height="81"></li>
      <li><img src="<?php echo get_template_directory_uri() . '/images/patteo-olinda.svg'; ?>" alt="Patteo Olinda Shopping" width="166" height="72"></li>
    </ul>
  </div>
</section>
<!-- FINAL CLIENTES -->

<!-- INÍCIO FLUXOS -->
<section class="fluxos">
  <div class="fluxos__container container">
    <h2 class="title">
      Fluxos de trabalho para aumentar a <strong>produtividade da sua equipe</strong>
    </h2>
    <span class="dash"></span>

    <ul class="fluxos__cards">
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/doc-icon.svg'; ?>" alt="Departamento Pessoal">
          <img src="<?php echo get_template_directory_uri() . '/images/doc-icon-active.svg'; ?>" class="active" alt="Departamento Pessoal">
        </div>
        <h3 class="title">Departamento Pessoal</h3>
        <p class="lead">Reduza os custos da sua empresa com uma gestão de benefícios e férias otimizada.</p>
        <a href="<?php echo site_url().'/segmento/departamento-pessoal'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/tool-icon.svg'; ?>" alt="Manutenção">
          <img src="<?php echo get_template_directory_uri() . '/images/tool-icon-active.svg'; ?>" class="active" alt="Manutenção">
        </div>
        <h3 class="title">Manutenção</h3>
        <p class="lead">Faça a gestão das manutenções e minimize a depreciação de imóveis e equipamentos.</p>
        <a href="<?php echo site_url().'/segmento/manutencao'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/money-icon.svg'; ?>" alt="Compras e Estoque">
          <img src="<?php echo get_template_directory_uri() . '/images/money-icon-active.svg'; ?>" class="active" alt="Compras e Estoque">
        </div>
        <h3 class="title">Compras e Estoque</h3>
        <p class="lead">Organize todo o fluxo de compras da sua empresa, do registro até a baixa.</p>
        <a href="<?php echo site_url().'/fluxo-de-trabalho/gestao-de-compras'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/handshake-icon.svg'; ?>" alt="Comercial">
          <img src="<?php echo get_template_directory_uri() . '/images/handshake-icon-active.svg'; ?>" class="active" alt="Comercial">
        </div>
        <h3 class="title">Comercial</h3>
        <p class="lead">Crie uma base de dados mais rica e conheça o comportamento dos seus clientes.</p>
        <a href="<?php echo site_url().'/segmento/marketing-e-comercial'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/law-icon.svg'; ?>" alt="Jurídico">
          <img src="<?php echo get_template_directory_uri() . '/images/law-icon-active.svg'; ?>" class="active" alt="Jurídico">
        </div>
        <h3 class="title">Jurídico</h3>
        <p class="lead">Tenha o controle dos contratos e acompanhe contestações com mais segurança e facilidade.</p>
        <a href="<?php echo site_url().'/segmento/juridico'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
      <li class="cartao">
        <div class="icon-wrapper">
          <img src="<?php echo get_template_directory_uri() . '/images/mic-icon.svg'; ?>" alt="Marketing">
          <img src="<?php echo get_template_directory_uri() . '/images/mic-icon-active.svg'; ?>" class="active" alt="Marketing">
        </div>
        <h3 class="title">Marketing</h3>
        <p class="lead">Crie e acompanhe um follow-up mais eficiente e gere mais impacto com suas campanhas</p>
        <a href="<?php echo site_url().'/segmento/marketing-e-comercial'; ?>" class="borderless-button">Saiba Mais <i class="fa fa-chevron-right"></i></a>
      </li>
    </ul>
  </div>
</section>
<!-- FINAL FLUXOS -->

<!-- INÍCIO EFFICIENCY -->
<section class="efficiency">
  <div class="efficiency__container container">
    <h2 class="title">Organize seu trabalho em abas e tenha <strong>mais eficiência</strong></h2>
    <span class="dash"> </span>

    <div class="topic topic-gestao">
      <div class="content">
        <h3 class="topic-title">Melhore sua gestão de <strong>tarefas e prazos</strong></h3>
        <span class="dash"></span>
        <p class="lead">
          Crie lembretes de prazos a vencer, checklist de rotinas e formulários personalizados para solicitação de demandas.
        </p>
        <a href="#" class="colored-button contactBtn">Saiba Mais</a>
      </div>
      <picture class="picture">
        <img src="<?php echo get_template_directory_uri() . '/images/dashboard-tarefas.svg'; ?>" alt="Telas" class="dashboard">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
      </picture>
    </div>

    <div class="topic topic-processos">
      <picture class="picture">
        <img src="<?php echo get_template_directory_uri() . '/images/dashboard-processos.svg'; ?>" alt="Telas" class="dashboard">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
      </picture>
      <div class="content">
        <h3 class="topic-title">Centralize todos os processos <strong>da sua empresa</strong></h3>
        <span class="dash"></span>
        <p class="lead">
          Automatize os processos da sua empresa e não desperdice tempo da sua equipe com tarefas repetitivas.
        </p>
        <a href="#" class="colored-button contactBtn">Saiba Mais</a>
      </div>
    </div>

    <div class="topic topic-visoes">
      <div class="content">
        <h3 class="topic-title">Organize seus processos em <strong>diversas visões</strong></h3>
        <span class="dash"></span>
        <p class="lead">
          O Abas Online oferece diversas opções para visualizar suas tarefas, desde formulários até visão de Kanban, Gantt, planilhas e calendário.
        </p>
        <a href="#" class="colored-button contactBtn">Saiba Mais</a>
      </div>
      <picture class="picture">
        <img src="<?php echo get_template_directory_uri() . '/images/dashboard-visoes.svg'; ?>" alt="Telas" class="dashboard">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
        <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
      </picture>
    </div>
  </div>
</section>
<!-- FINAL EFFICIENCY -->

<!-- INÍCIO DEPOIMENTOS -->
<?php
$args = array(
  "post_type" => "depoimentos",
  "orderby" => "rand",
  "posts_per_page" => 10,
);
$depoimentos = new WP_Query($args);

if ($depoimentos->have_posts()) :
?>
  <section class="depoimentos">
    <div class="depoimentos__container container">
      <h2 class="title">O que dizem nossos <strong>clientes</strong></h2>
      <span class="dash"></span>

      <div class="depoimentos__carrossel owl-carousel">
        <?php while ($depoimentos->have_posts()) : $depoimentos->the_post(); ?>
          <div class="depoimento">
            <div class="content">
              <?php the_content(); ?>
              <strong class="name"><?php the_title(); ?></strong>
              <p class="company"><?php the_field('cargo'); ?></p>
            </div>
            <div class="image">
              <div class="image-wrap">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri() . '/images/avatar-depoimento.jpg'; ?>" alt="Foto de depoimento" class="avatar">
                <?php endif; ?>
              </div>
              <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
              <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
  <!-- FINAL DEPOIMENTOS -->
<?php
  wp_reset_postdata();
endif;
?>
<!-- INÍCIO PLANOS -->
<section class="planos" id="planos">
  <div class="planos__container">
    <h2 class="title">Conheça os nossos <strong>planos</strong></h2>
    <span class="dash"></span>

    <div class="planos-cards">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-one.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-one" width="96" height="104">
      <img src="<?php echo get_template_directory_uri() . '/images/bubbles-two.svg'; ?>" alt="Elemento bolhas" class="bubbles bubbles-two" width="93" height="72">
      
      <div class="planos-cards__carrossel owl-carousel">
        <!-- Starter -->
        <div class="plano">
          <div class="plano-header">
            <strong class="category">Starter</strong>
            <span class="price">
              R$
              <span class="reais">35</span>
              <span class="cents">,00</span>
            </span>
            <span class="description">por usuário</span>
          </div>
          <ul class="plano-body">
            <li><span>Mínimo de 3 usuários.</span></li>
            <li><span>Todos os templates disponíveis.</span></li>
            <li><span>2 eventos por aba.</span></li>
            <li><span>Visão de Formulários, Calendário e Planilha.</span></li>
            <li><span>Customização de cores e marca.</span></li>
            <li><span>Atendimento via ticket.</span></li>
          </ul>
          <div class="plano-footer">
            <a href="" class="colored-button contactBtn">Quero esse!</a>
            <span class="call">Fale com um consultor</span>
          </div>
        </div>

        <!-- Business -->
        <div class="plano">
          <div class="plano-header">
            <span class="destaque">Mais escolhido</span>
            <strong class="category">Business</strong>
            <span class="price">
              R$
              <span class="reais">45</span>
              <span class="cents">,00</span>
            </span>
            <span class="description">por usuário</span>
          </div>
          <ul class="plano-body">
            <li><span>Mínimo de 5 usuários.</span></li>
            <li><span>Todos os templates disponíveis.</span></li>
            <li><span>5 eventos por aba.</span></li>
            <li><span>Visão de Formulários, Calendário e Planilha + Dashboard, Matriz Gantt, Galeria e Kanban.</span></li>
            <li><span>Permissão multinível: App IOS e Android.</span></li>
            <li><span>Atendimento via ticket e vídeo conferência.</span></li>
          </ul>
          <div class="plano-footer">
            <a href="" class="colored-button contactBtn">Quero esse!</a>
            <span class="call">Fale com um consultor</span>
          </div>
        </div>

        <!-- Enterprise -->
        <div class="plano">
          <div class="plano-header">
            <strong class="category">Enterprise</strong>
            <strong class="advise">Sob Consulta</strong>
          </div>
          <ul class="plano-body">
            <li><span>Mínimo de 10 usuários.</span></li>
            <li><span>Workspaces e abas ilimitadas.</span></li>
            <li><span>Visão de Formulários, Calendário e Planilha + Dashboard, Matriz Gantt, Galeria e Kanbam + Integração com site e Condomínio21, em nuvem.</span></li>
            <li><span>Permissão multinível: App IOS e Android.</span></li>
            <li><span>Atendimento via ticket e vídeo conferência.</span></li>
          </ul>
          <div class="plano-footer">
            <a href="" class="colored-button contactBtn">Quero esse!</a>
            <span class="call">Fale com um consultor</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="aprenda__container">
    <h2 class="title">Aprenda como é fácil <strong>usar o Abas</strong></h2>
    <span class="dash"></span>

    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/kaVh0SS9Rww" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>

    <p class="lead">
      A ferramenta de gerenciamento de tarefas única e personalizável. Visão fácil de toda a sua gestão de projetos e processos.
    </p>
    <div class="ctas">
      <a href="#" class="borderless-button contactBtn">Consultar <i class="fa fa-chevron-right"></i></a>
      <a href="#" class="colored-button trialBtn">Testar Grátis</a>
    </div>

  </div>
</section>
<!-- FINAL PLANOS -->
<?php
require_once("template_parts/modal-form-consultor.php");
require_once("template_parts/modal-form-trial.php");
require_once("footer.php");
?>