<section
    class="bg:background-light dark:bg-background-dark h-[80vh] w-screen flex flex-col itens-center justify-center text-primary-light dark:text-primary-dark">
    <section class="flex flex-col items-center justify-center gap-4">
        <form id="form-log" method="POST" action="./?processamento"
            class="flex flex-col gap-4 text-lg font-bold bg-surface-light dark:bg-surface-dark rounded-lg p-8   ">
            <label for="input-email" class="flex flex-col gap-2">
                Entre
                <input id="input-email" class=" bg:input-light dark:bg-input-dark rounded-lg p-4" type="text" placeholder="Email" name="inputEmailLog">
            </label>
            <label for="input-senha" class="flex flex-col gap-2">
                Senha
                <input id="input-senha" class=" bg:input-light dark:bg-input-dark rounded-lg p-4" type="password" placeholder="Senha" name="inputSenhaLog">
            </label>
            <input id="botao-log" class=" bg:button-base-light dark:bg-button-base-dark rounded-lg p-4" type="submit" value="ENTRE">
        </form>
        <p>Novo na Xhopii? <a href="./?page=cadastro" class="hover:cursor-pointer font-bold">Cadastrar</a></p>
    </section>
</section>