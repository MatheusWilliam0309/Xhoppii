<section class="bg:background-light dark:bg-background-dark w-full min-h-[80vh] flex flex-col items-center text-primary-light dark:text-primary-dark">

    <div class="w-full h-[25vh] flex items-center justify-center border-b border-dark-light-border dark:border-light-dark-border">
        <p class="opacity-50">Carrossel aqui</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 p-8 w-full max-w-[1200px]">
        <?php
            // Instancia o controlador se ainda não existir
            if(!isset($controlador)) {
                require_once("./controller/Controlador.php");
                $controlador = new Controlador();
            }
            
            // Chama a função que criamos acima
            echo $controlador->visualizarProdutosNoGrid();
        ?>
    </div>

</section>