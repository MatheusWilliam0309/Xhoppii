<?php
require_once("./controller/Controlador.php");
$controlador = new Controlador();

// LOGIN
if(isset($_POST['inputEmailLog'])){
    if($controlador->login($_POST['inputEmailLog'], $_POST['inputSenhaLog'])){
        header('Location:./index.php');
    } else {
        header('Location:../index.php?erro=1');
    }
    exit;
}

// CADASTRO CLIENTE
if(isset($_POST['inputNome']) && !isset($_POST['inputSalarioFunc'])){
    $controlador->cadastrarUsuario($_POST['inputCPF'], $_POST['inputNome'], $_POST['inputSobrenome'], $_POST['inputEmail'], $_POST['inputSenha'], 'customer');
    header('Location:./?page=verCliente');
    exit;
}

// CADASTRO FUNCIONÁRIO (Tratado como 'Admin' ou 'seller')
if(isset($_POST['inputNomeFunc'])){
    // Como no seu form não tem senha de funcionário, definiremos uma padrão ou você pode adicionar o campo lá
    $controlador->cadastrarUsuario($_POST['inputCPFFunc'], $_POST['inputNomeFunc'], $_POST['inputSobrenomeFunc'], $_POST['inputEmailFunc'], '123456', 'Admin');
    header('Location:../view/verFuncionario.php');
    exit;
}

// CADASTRO PRODUTO
if(!empty($_POST['inputNomeProd'])){
    $controlador->cadastrarProduto($_POST['inputNomeProd'], $_POST['inputFabricanteProd'], $_POST['inputDescricaoProd'], $_POST['inputValorProd']);
    header('Location:../view/verProduto.php');
    exit;
}
?>