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
        <?php the_content(); ?>

        <div class="row mt-5">
          <div class="col-12">
            <h4><span class="depoimento__nome"><?php the_title(); ?></span><br />
              <span class="depoimento__cargo"><?php the_field('cargo'); ?></span></h4>
          </div>

          <?php /*
          <div class="col-6">
            <img src="<?php bloginfo('template_url'); ?>/images/marca-group-software.svg" alt="Group Software" />
          </div>
          */ ?>
        </div>
      </div>

      <div class="col-12 col-md-4 depoimento__foto">
        <?php the_post_thumbnail(); ?>
      </div>
    </div>
  </div>
</section>

<?php }
    } ?>