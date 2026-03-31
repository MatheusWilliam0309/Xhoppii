<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "xhoppii";

    // Cria a conexão
    $conexao = mysqli_connect($host, $user, $password, $db);

    // Verifica se houve erro na conexão
    if (!$conexao) {
        die("Falha na conexão: " . mysqli_connect_error());
    }

    function inserirCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha) {
        global $conexao;

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $sql = "INSERT INTO Cliente (cpf, nome, sobrenome, dataNasc, telefone, email, senha) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            // "sssssss" indica que todos os 7 parâmetros são strings
            mysqli_stmt_bind_param($stmt, "sssssss", $cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senhaHash);
            $resultado = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $resultado;
        }
        return false;
    }

    function inserirFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario) {
        global $conexao;

        $sql = "INSERT INTO Funcionario (cpf, nome, sobrenome, dataNasc, telefone, email, salario) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            // "ssssssd" -> 6 strings e 1 double (salário)
            mysqli_stmt_bind_param($stmt, "ssssssd", $cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);
            $resultado = mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            return $resultado;
        }
        return false;
    }

?>