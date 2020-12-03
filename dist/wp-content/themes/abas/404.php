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

<section class="banner" style="height: 50vh">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1>Ops! Página não encontrada.</h1>
        <p class="lead">Desculpe, não encontramos o que você procurava.</p>
        <a type="button" href="#" class="btn btn-amarelo" data-toggle="modal" data-target="<?php $url = site_url();
                                                                                            echo $url ?>">Voltar para a home <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("template_parts/acesso.php");
require_once("template_parts/modal.php");
require_once("footer.php");
?>