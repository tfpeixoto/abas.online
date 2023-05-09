<?php
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

<section class="blog__post">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

          <article class="col-12 col-md-8">
            <div class="text-center mb-5 blog__title">
              <div class="text-muted">
                <?php the_date('j \d\e F \d\e Y'); ?> | <?php the_category(' '); ?>
              </div>
              <h1><?php the_title(); ?></h1>
            </div>

            <div class="text-center mb-5 blog__image">
              <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" class="img-fluid" alt="#" /></a>
            </div>

            <div class="blog__content">
              <p><?php the_content(); ?></p>
            </div>
          </article>

      <?php endwhile;
      endif ?>
    </div>
  </div>
</section>

<?php get_template_part('template_parts/posts-sugeridos'); ?>
<?php //get_template_part( 'template_parts/blog-form' ); ?>

<?php require_once("template_parts/depoimentos.php"); ?>

<section class="cta">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <h2 class="text-amarelo">Quer automatizar todos os processos da sua empresa?</h2>
        <p>Personalizamos todo nosso sistema à sua maneira, para impulsionar os resultados da sua gestão.</p>
        <a type="button" href="#modalConversao" class="btn btn-roxo contactBtn">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("template_parts/modal-form-consultor.php");
require_once("template_parts/modal-form-trial.php");
require_once("template_parts/acesso.php");
// require_once("template_parts/modal.php");
require_once("footer.php");
?>