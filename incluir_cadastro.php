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
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$sexo = $_POST['sexo'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];

// Insere os dados na tabela "clientes"
$sql = "INSERT INTO clientes (nome, sobrenome, email, sexo, telefone, endereco, cidade, estado, pais) VALUES ('$nome', '$sobrenome', '$email', '$sexo', '$telefone', '$endereco', '$cidade', '$estado', '$pais')";

// Executa a consulta SQL
if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registro incluído com sucesso!'); window.location.href='listar_cadastro.php';</script>";
    header("refresh:3;url=listar_cadastro.php");
    
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conn);
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>
