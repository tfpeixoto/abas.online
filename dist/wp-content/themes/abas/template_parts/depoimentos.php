<?php
$args = array(
  "post_type" => "depoimentos",
  "orderby" => "rand",
  "posts_per_page" => 1,
);
$depoimentos = new WP_Query($args);
if ($depoimentos->have_posts()) {
  while ($depoimentos->have_posts()) {
    $depoimentos->the_post();
?>

    <section class="depoimentos d-flex align-items-center">
      <div class="container">
        <div class="row d-flex align-items-center justify-content-around">
          <div class="col-12 col-md-6 depoimento__conteudo">
            <h3 class="mb-4">O que dizem nossos clientes</h3>
            <?php the_content(); ?>

            <div class="row mt-5">
              <div class="col-12">
                <h4><span class="depoimento__nome"><?php the_title(); ?></span><br />
                  <span class="depoimento__cargo"><?php the_field('cargo'); ?></span></h4>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-4 depoimento__foto">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail();
            } else {
              echo "<img src='" . get_template_directory_uri() . "/images/avatar-depoimento.jpg' alt='Foto depoimento' />";
            } ?>
          </div>
        </div>
      </div>
    </section>

<?php }
} ?>