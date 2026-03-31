<?php
require_once(__DIR__ . "/../processamento/funcoesBD.php");
require_once(__DIR__ . "/../model/Produto.php");
require_once(__DIR__ . "/../model/Cliente.php");
require_once(__DIR__ . "/../model/BancoDeDados.php");

class Controlador
{
    private $bancoDeDados;

    function __construct()
    {
        $this->bancoDeDados = new BancoDeDados("localhost", "root", "", "xhoppii");
    }

    public function login($email, $senha)
    {
        $usuario = $this->bancoDeDados->buscarUsuarioPorEmail($email);
        if ($usuario && password_verify($senha, $usuario["password"])) {
            $_SESSION['Login'] = $usuario['name'];
            $_SESSION['UserType'] = $usuario['type'];
            $_SESSION['userId'] = $usuario['userId'];
            return true;
        }
        return false;
    }

    public function cadastrarUsuario($cpf, $nome, $sobrenome, $email, $senha, $tipo)
    {
        $nomeCompleto = $nome . " " . $sobrenome;
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        return $this->bancoDeDados->inserirUsuario($cpf, $nomeCompleto, $email, $senhaHash, $tipo);
    }

    public function cadastrarProduto($nome, $fabricante, $descricao, $valor)
    {
        $produto = new Produto($nome, $fabricante, $descricao, $valor);
        $this->bancoDeDados->inserirProduto($produto);
    }

    // No arquivo controller/Controlador.php

    public function visualizarProdutosNoGrid()
    {
        $listaProdutos = $this->bancoDeDados->retornarProdutos(); //
        $html = "";

        while ($p = mysqli_fetch_assoc($listaProdutos)) {
            $valorFormatado = number_format($p["valor"], 2, ',', '.');

            $html .= "
        <div class='bg-surface-light dark:bg-surface-dark rounded-lg p-6 shadow-lg flex flex-col items-center justify-between hover:scale-[1.02] transition'>
            <div class='w-full h-32 bg-orientations-light/20 rounded mb-4 flex items-center justify-center'>
                <span class='material-symbols-outlined'>
                    shopping_bag
                </span>
            </div>
            <div class='text-center'>
                <h3 class='font-bold text-xl mb-1'>{$p["nome"]}</h3>
                <p class='text-sm opacity-70 mb-2'>{$p["fabricante"]}</p>
                <p class='text-xs line-clamp-2 mb-4'>{$p["descricao"]}</p>
            </div>
            <div class='w-full flex flex-col items-center gap-3'>
                <span class='text-2xl font-black text-orientations-light dark:text-primary-dark'>R$ {$valorFormatado}</span>
                <button class='w-full py-2 bg-button-base-light dark:bg-button-base-dark rounded-full font-bold hover:opacity-90 transition'>
                    Ver Detalhes
                </button>
            </div>
        </div>";
        }

        return $html;
    }

    public function listarClientes()
    {
        return $this->bancoDeDados->retornarUsuariosPorTipo('customer');
    }
}
?>