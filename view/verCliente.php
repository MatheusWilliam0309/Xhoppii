<?php
require "./processamento/funcoesBD.php";
?>

    <section class="conteudo-visualizar">
        <section class="conteudo-visualizar-box">
            <h1>Clientes</h1>
            <?php
            $controlador = new Controlador();
            $listaClientes = $controlador->listarClientes();
            while ($cliente = mysqli_fetch_assoc($listaClientes)) {
                echo "<section class=\"conteudo-bloco\">";
                echo "<h2>" . $cliente["name"] . "</h2>";
                echo "<p>CPF: " . $cliente["CPF_CNPJ"] . "</p>";
                echo "<p>E-mail: " . $cliente["email"] . "</p>";
                echo "</section>";
            }
            ?>
        </section>
    </section>
