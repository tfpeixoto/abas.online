<?php
$estiloPagina = "page.css";
require_once("header.php");
?>

<style>
  <?php if (get_the_post_thumbnail_url()) : ?>.banner {
    background: url(<?php the_post_thumbnail_url(); ?>) no-repeat;
    background-position: center center;
    background-size: cover;
  }

  <?php else :
  endif; ?>
</style>

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1><?php the_field('slogan'); ?></h1>
        <a type="button" href="#" class="btn btn-amarelo" data-toggle="modal" data-target="#modalConversao">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="conteudo">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>

<?php require_once("template_parts/depoimentos.php"); ?>

<section class="cta">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <h2 class="text-amarelo">Quer automatizar todos os processos da sua empresa?</h2>
        <p>Personalizamos todo nosso sistema à sua maneira, para impulsionar os resultados da sua gestão.</p>
        <a type="button" href="#modalConversao" class="btn btn-roxo">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("template_parts/acesso.php");
require_once("template_parts/modal.php");
require_once("footer.php");
?>