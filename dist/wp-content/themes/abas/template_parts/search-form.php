<!-- Início do campo de busca -->
<div class="buscador">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="buscador__titulo">Busque por um post</h2>
                <form action="<?php echo site_url(); ?>" class="buscador__form" method="GET">
                    <i class="fas fa-search buscador__form-icon"></i>
                    <input type="text" class="buscador__form-input" name="s" placeholder="Buscar post" 
                        value="<?php if (isset($_GET['s'])) { echo $_GET['s']; }; ?>">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Final do campo de busca -->