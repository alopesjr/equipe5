<?php
$servername = "localhost";
$username = "seu_usuario_mysql";
$password = "sua_senha_mysql";
$dbname = "seu_banco_de_dados_mysql";

// Cria uma conexão com o banco de dados MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepara uma instrução SQL para inserir os dados na tabela "cadastro"
$stmt = $conn->prepare("INSERT INTO cadastro (nome, email, senha, telefone, idade) VALUES (?, ?, ?, ?, ?)");

// Vincula os parâmetros da instrução SQL com as variáveis do formulário
$stmt->bind_param("sssss", $nome, $email, $senha, $telefone, $idade);

// Obtém os valores do formulário e atribui às variáveis correspondentes
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];
$idade = $_POST['idade'];

// Executa a instrução SQL para inserir os dados na tabela "cadastro"
if ($stmt->execute()) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao realizar o cadastro: " . $stmt->error;
}

// Fecha a conexão com o banco de dados MySQL
$conn->close();
?>
