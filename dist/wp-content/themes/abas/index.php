<?php
/*
 * Template name: Blog
*/
$estiloPagina = "blog.css";
require_once("header.php");
?>

<section class="banner banner-blog">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="font-weight-bold">Blog do Abas</h2>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template_parts/search-form' ); ?>

<section class="blog__list">
  <div class="container">
    <div class="row lista-posts">
      <div class="col-12 col-md-9">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article class="row d-flex justify-content-start py-3 my-5">
              <div class="col-12 col-md-4 blog__image">
                <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="#" /></a>
              </div>

              <div class="col-12 col-md-8 blog__content">
                <h3>
                  <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                    <?php the_title(); ?>
                  </a>
                </h3>

                <div class="text-muted">
                  <?php $date = get_the_date('j \d\e F \d\e Y');
                  echo $date; ?> | <?php the_category(' '); ?>
                </div>

                <p><?php the_excerpt(); ?></p>

                <a type="button" href="<?php the_permalink(); ?>" class="btn btn-roxo">Ler mais</a>
              </div>
            </article>

        <?php endwhile;
        endif ?>
      </div>

      <aside class="col-12 col-md-3">
        <?php dynamic_sidebar('Barra lateral'); ?>
      </aside>
    </div>

    <div class="row">
      <div class="col-12 paginador">
        <?php next_posts_link('Mais antigos'); ?>
        <?php previous_posts_link('Mais novos'); ?>
      </div>
    </div>
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