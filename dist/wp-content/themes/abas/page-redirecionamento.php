<?php
/**
 * Template name: Redirecionamento
 */
$estiloPagina = "redirecionamento.css";
require_once("template_parts/header-redirecionamento.php");
?>
<main class="main">
  <div class="container">
    <div class="row">
      <div class="col main-container">
        <img src="<?php echo get_template_directory_uri().'/images/logo-abas-redirecionamento.webp'; ?>" width="250" height="74" alt="Logo Abas">
        <h2 class="titulo">
          Olá! Aguarde só um pouco, já estamos redirecionando você para a página de cadastro!
        </h2>

        <div class="contador">
          <span id="time" class="tempo">
            05
          </span>
          <p id="description">segundos</p>
        </div>
      </div>
    </div>
  </div>
</main>
<?php
require_once("template_parts/footer-redirecionamento.php");
?>