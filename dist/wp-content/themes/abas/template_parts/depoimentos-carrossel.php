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
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="depoimentos__titulo mb-4">O que dizem nossos clientes</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="depoimentos__carrossel owl-carousel">
            <?php
            while ($depoimentos->have_posts()) : $depoimentos->the_post();
            ?>
              <div class="depoimento">
                <div class="depoimento__conteudo">
                  <?php the_content(); ?>
                  <p class="depoimento__conteudo-nome"><?php the_title(); ?></p>
                  <p class="depoimento__conteudo-empresa"><?php the_field('cargo'); ?></p>
                </div>

                <div class="depoimento__imagem">
                  <div class="depoimento__imagem-molde">
                    <?php
                    if (has_post_thumbnail()) {
                      the_post_thumbnail();
                    } else {
                    ?>
                      <img src="<?php echo get_template_directory_uri() . '/images/avatar-depoimento.jpg'; ?>" alt="Foto depoimento" />
                    <?php
                    }
                    ?>
                  </div>
                </div>
              </div>
            <?php
            endwhile;
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  wp_reset_postdata();
endif;
