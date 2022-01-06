<?php
$args = array(
  'post_type' => 'post',
  'posts_per_page' => 3,
  'post_status' => 'publish'
);
$query = new WP_Query($args);

if($query->have_posts()):
?>

<section class="sugeridos">
  <div class="container">
    <div class="row">
      <div class="col-12">

        <h2 class="sugeridos__titulo mb-5">Posts recentes</h2>

        <div class="sugeridos__cards">
        <?php
        while($query->have_posts()):$query->the_post();
        ?>
          <div class="card">
            <picture class="card-img">
              <?php
              the_post_thumbnail('thumbnail', ['class' => 'img']);
              ?>
            </picture>
            <div class="card-conteudo">
              <h3 class="titulo"><a href="<?php the_permalink(); ?>" class="link"><?php the_title(); ?></a></h3>
              <p class="resumo"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
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
endif;
?>