<section class="relative h-[80vh] w-screen flex items-center justify-center 
    bg-gradient-to-br from-[#073b4c] via-[#0b4d63] to-[#062f3a]
    text-primary-light dark:text-primary-dark overflow-hidden">

    <!-- efeito de luz suave -->
    <div class="absolute w-[500px] h-[500px] bg-cyan-400 opacity-10 rounded-full blur-3xl top-[-100px] left-[-100px]">
    </div>
    <div
        class="absolute w-[400px] h-[400px] bg-blue-500 opacity-10 rounded-full blur-3xl bottom-[-100px] right-[-100px]">
    </div>

    <section class="relative flex flex-col items-center justify-center gap-4">

        <form method="POST" action="./?processamento"
            class="grid grid-cols-2 gap-4 text-lg font-bold bg-surface-light dark:bg-surface-dark rounded-lg p-8 shadow-xl max-w-[500px] w-full">

            <!-- título ocupa 2 colunas -->
            <label class="col-span-2 text-center text-xl">Cadastrar Cliente</label>

            <!-- Nome -->
            <label class="flex flex-col gap-2 col-span-1">
                Nome
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="text" placeholder="Nome"
                    name="inputNome">
            </label>

            <!-- Sobrenome -->
            <label class="flex flex-col gap-2 col-span-1">
                Sobrenome
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="text"
                    placeholder="Sobrenome" name="inputSobrenome">
            </label>

            <!-- CPF -->
            <label class="flex flex-col gap-2 col-span-1">
                CPF
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="text" placeholder="CPF"
                    name="inputCPF">
            </label>

            <!-- Data -->
            <label class="flex flex-col gap-2 col-span-1">
                Data de Nascimento
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="date" name="inputDataNasc">
            </label>

            <!-- Telefone -->
            <label class="flex flex-col gap-2 col-span-1">
                Telefone
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="text"
                    placeholder="Telefone" name="inputTelefone">
            </label>

            <!-- Email ocupa linha inteira -->
            <label class="flex flex-col gap-2 col-span-2">
                Email
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="text" placeholder="Email"
                    name="inputEmail">
            </label>

            <!-- Senha ocupa linha inteira -->
            <label class="flex flex-col gap-2 col-span-2">
                Senha
                <input class="bg:input-light dark:bg-input-dark rounded-lg p-3 w-full" type="password"
                    placeholder="Senha" name="inputSenha">
            </label>

            <!-- Botão -->
            <input id="botao"
                class="col-span-2 bg:button-base-light dark:bg-button-base-dark rounded-lg p-4 cursor-pointer hover:scale-[1.02] transition"
                type="submit" value="CADASTRAR">

            </form>

    </section>
</section>