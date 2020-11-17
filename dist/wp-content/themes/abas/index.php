<?php
/*
 * Template name: Blog
*/
$estiloPagina = "page.css";
require_once("header.php");
?>

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Blog do Abas</h1>
      </div>
    </div>
  </div>
</section>

<section class="blog">
  <div class="container">
    <div class="row">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="col-12 col-md-8 my-5">
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="#" /></a>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <div class="text-muted">12 de Nov</div>
            <p><?php the_excerpt(); ?></p>
            <a type="button" class="btn btn-primary">Ler mais</a>
          </article>

      <?php endwhile;
      endif ?>

      <aside class="col-12 col-md-4">

      </aside>
    </div>
  </div>
</section>

<section class="conteudo">
  <div class="container-fluid">
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
require_once("template_parts/modal.php");
require_once("footer.php");
?>