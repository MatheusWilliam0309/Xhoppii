<header class="w-full h-[5vh] bg:orientations-light dark:bg-orientations-dark flex items-center justify-between px-4  text-primary-light dark:text-primary-dark">
    <section id="cabecalho-login-logo" class="h-[5vh] w-[30%] flex items-center gap-4">
        <img src="./img/logo.png" class="max-h-[5vh] max-w-[5vh]">
        <h1 class=" hover:bg-selected-light dark:hover:bg-selected-dark h-full flex items-center justify-end px-4">Xhopii</h1>
        <?php
            if (isset($_SESSION['Login']) && $_SESSION['Login'] != '' && $_SESSION['Login'] != null) {
                echo "<p class=' hover:bg-selected-light dark:hover:bg-selected-dark h-full flex items-center justify-end px-4'>Olá, {$_SESSION['Login']}!</p>";
            } else {
                echo "<a href='./?page=login' class=' hover:bg-selected-light dark:hover:bg-selected-dark h-full flex items-center justify-end px-4'>Faça Login</a>";
            }
        ?>
    </section>
    <section class="relative h-full flex items-center justify-end px-4">

    <!-- botão -->
    <div class="group relative">
        <p
            class="cursor-pointer hover:bg-selected-light dark:hover:bg-selected-dark px-4 py-2 rounded-lg transition">
            Menu
        </p>

        <!-- dropdown -->
        <div
            class="absolute right-0 mt-2 w-64 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 
            bg-surface-light dark:bg-surface-dark border border-dark-light-border dark:border-light-dark-border 
            rounded-lg shadow-lg flex flex-col overflow-hidden z-50">

            <a href="./?page=home" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">Home</a>

            <a href="./?page=cadastroCliente" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Cadastro Cliente
            </a>

            <a href="./?page=cadastroFuncionario" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Cadastro Funcionário
            </a>

            <a href="./?page=cadastroProduto" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Cadastro Produto
            </a>

            <a href="./?page=verCliente" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Ver Clientes
            </a>

            <a href="./?page=verFuncionario" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Ver Funcionários
            </a>

            <a href="./?page=verProdutoG" class="p-3 hover:bg-selected-light dark:hover:bg-selected-dark">
                Ver Produtos
            </a>

        </div>
    </div>

</section>
</header>

<!-- header pré definido -->