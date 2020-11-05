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

<style>
  .depoimentos{
    background: url(<?php the_post_thumbnail_url(); ?>) no-repeat;
    background-size: cover;
    background-position: top center;
  }
</style>

<section class="depoimentos">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        <?php the_content(); ?>

        <div class="row mt-5">
          <div class="col-6">
            <h4><span class="depoimento__nome"><?php the_title(); ?></span><br />
              <span class="depoimento__cargo"><?php echo "Group Software" // the_field('cargo'); ?></span></h4>
          </div>

          <div class="col-6">
            <img src="<?php bloginfo('template_url'); ?>/images/marca-group-software.svg" alt="Group Software" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php }
    } ?>
  </div>