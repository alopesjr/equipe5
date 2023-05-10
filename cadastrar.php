<?php

// Configurações do banco de dados
$host = "lopes.inf.br";
$user = "equipe7";
$pass = "6xh6$4B8d";
$db = "cad_clientes";

// Conecta ao banco de dados
$conn = mysqli_connect($host, $user, $pass, $db);

// Verifica se a conexão foi bem sucedida
if (!$conn) {
    die("Não foi possível conectar ao banco de dados: " . mysqli_connect_error());
}

// Recebe os dados do formulário
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];

// Insere os dados na tabela "clientes"
$sql = "INSERT INTO clientes (nome, email, senha, telefone, idade) VALUES ('$nome', '$email', '$senha', '$telefone', '$idade')";

// Executa a consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "Cadastro realizado com sucesso!";
    header("refresh:5;url=listar.php");
    
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>
