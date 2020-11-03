<?php
$estiloPagina = "home.css";
require_once("header.php");
?>

<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <?php the_title('<h1>', '</h1>'); ?>
        <p class="lead">Com workflow simples e flexível, nós facilitamos a comunicação entre setores, possibilitamos a criação de ideias e inovações, gerenciamos prazos, demandas operacionais, de TI e muito mais!</p>
        <a type="button" href="#" class="btn btn-amarelo">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<section class="conteudo">
  <div class="container">
    <?php the_content(); ?>
  </div>
</section>

<section class="depoimentos">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-7">
        <p>O Abas Online é uma plataforma moderna, intuitiva e flexível que atende as necessidades diárias do setor jurídico e acaba por proporcionar maior eficiência e produtividade aos procedimentos internos. Importante destacar que o atendimento e suporte técnico ao cliente são excelentes.</p>

        <h4><span class="depoimento__nome">Letícia Azevedo</span><br />
          <span class="depoimento__cargo">Advogada da Group Software</span></h4>

        <img src="#" alt="#" />
      </div>
    </div>
  </div>
</section>

<section class="cta">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-md-6 text-center">
        <h2 class="text-amarelo">Quer automatizar todos os processos da sua empresa?</h2>
        <p>Personalizamos todo nosso sistema à sua maneira, para impulsionar os resultados da sua gestão.</p>
        <a type="button" href="#" class="btn btn-roxo">Fale com um consultor <i class="fas fa-chevron-right"></i></a>
      </div>
    </div>
  </div>
</section>

<?php
require_once("footer.php");
?>