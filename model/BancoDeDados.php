<?php
class BancoDeDados {
    private $host;
    private $login;
    private $senha;
    private $dataBase;
    private $conexao;

    public function __construct($Host, $Login, $Senha, $DataBase) {
        $this->host = $Host;
        $this->login = $Login;
        $this->senha = $Senha;
        $this->dataBase = $DataBase;
        $this->conectarBD();
    }

    private function conectarBD() {
        $this->conexao = mysqli_connect($this->host, $this->login, $this->senha, $this->dataBase);
        if (!$this->conexao) {
            die("Erro de conexão: " . mysqli_connect_error());
        }
    }

    public function getConexao(){
        return $this->conexao;
    }

    // Gerencia todos os tipos: customer, seller, Admin
    public function inserirUsuario($cpf_cnpj, $nome, $email, $senha, $tipo) {
        $stmt = mysqli_prepare($this->conexao,
            "INSERT INTO usuarios (CPF_CNPJ, name, email, password, type, Status) VALUES (?, ?, ?, ?, ?, 'Ativo')"
        );
        mysqli_stmt_bind_param($stmt, "sssss", $cpf_cnpj, $nome, $email, $senha, $tipo);
        return mysqli_stmt_execute($stmt);
    }

    public function buscarUsuarioPorEmail($email){
        $stmt = mysqli_prepare($this->conexao, "SELECT * FROM usuarios WHERE email = ?");
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        return mysqli_fetch_assoc(mysqli_stmt_get_result($stmt));
    }

    public function retornarUsuariosPorTipo($tipo) {
        $stmt = mysqli_prepare($this->conexao, "SELECT * FROM usuarios WHERE type = ?");
        mysqli_stmt_bind_param($stmt, "s", $tipo);
        mysqli_stmt_execute($stmt);
        return mysqli_stmt_get_result($stmt);
    }

    public function inserirProduto($produto) {
        $nome = $produto->get_Nome();
        $fab = $produto->get_Fabricante();
        $desc = $produto->get_Descricao();
        $val = $produto->get_Valor();

        $stmt = mysqli_prepare($this->conexao, "INSERT INTO produto (nome, fabricante, descricao, valor) VALUES (?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt, "sssd", $nome, $fab, $desc, $val);
        return mysqli_stmt_execute($stmt);
    }

    public function retornarProdutos() {
        return mysqli_query($this->conexao, "SELECT * FROM produto");
    }
}
?>