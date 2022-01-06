<?php
$estiloPagina = "search.css";
require_once("header.php");
?>

<section class="banner banner-blog">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="font-weight-bold">Busca do Abas</h2>
      </div>
    </div>
  </div>
</section>

<?php get_template_part( 'template_parts/search-form' ); ?>

<section class="busca">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-9">        

        <?php
        //   Script do mecanismo de busca
        $term = filter_input(INPUT_GET, 's', FILTER_SANITIZE_STRING);

        $expTerm = explode(" ", $term);

        $search = "(";
        foreach ($expTerm as $ek => $ev) {
            if ($ek == 0) {
                $search .= "post_title LIKE '%" . $ev . "%' ";
            } else {
                $search .= "OR post_title LIKE '%" . $ev . "%' OR post_content LIKE '%" . $ev . "%' ";
            }
        }
        $search .= ")";

        $query = $wpdb->get_results(" SELECT * FROM " . $wpdb->prefix . "posts WHERE post_status='publish' AND post_type='post' AND " . $search);

        if (sizeof($query) > 0) {

            if (sizeof($query) == 1) {
                // mensagem caso encontre apenas um resultado
                echo '<span class="busca__resultado">Exibindo um resultado para "'.$term.'"</span>';
                echo '<hr>';
            }else{
                // Mensagem caso encontre mais de um resultado
                echo '<span class="busca__resultado">Exibindo '.sizeof($query).' resultados para "'.$term.'"</span>';
                echo '<hr>';
            }

            foreach ($query as $qk => $qv) {
                $link = get_permalink($qv->ID);
            ?>
                <h3 class="pt-3 busca__titulo"><a class="busca__link" href="<?php print $link; ?>"><?php print $qv->post_title; ?></a></h3>
                <p><?php print wp_trim_words($qv->post_content, 40, '... <a class="busca__link" href="' . $link . '">Ler mais</a>'); ?></p>
            <?php
            }
            
        } else {
            // Caso não encontre nenhum resultado
            ?>
            <span class="principal__resultado">Nenhum resultado encontrado para "<?php echo $term; ?>"</span>
            <?php
        }
        ?>
      </div>

      <aside class="col-12 col-md-3">
        <?php dynamic_sidebar('Barra lateral'); ?>
      </aside>
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