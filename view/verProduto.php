<?php
    
    require "./controller/Controlador.php";

?>

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Produtos</h1>
            <?php
                #CORRETO COM USO DO CONTROLADOR
                $controlador = new Controlador();
                echo $controlador->visualizarProdutosNoGrid();
            ?>
        </section>
    </section>