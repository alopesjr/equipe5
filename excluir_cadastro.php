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

// Recebe o ID do cliente a ser excluído
$id_cliente = $_GET['id'];

// Verifica se o ID foi enviado
if (!$id_cliente) {
    echo "ID do cliente não informado.";
    exit;
}

// Verifica se o cliente existe na tabela "clientes"
$sql = "SELECT * FROM clientes WHERE id = $id_cliente";
$resultado = mysqli_query($conn, $sql);

if (mysqli_num_rows($resultado) == 0) {
    echo "Cliente não encontrado.";
    exit;
}

$sql = "DELETE FROM clientes WHERE id = '$id_cliente'";


if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Registro excluído com sucesso!'); window.location.href='listar_cadastro.php';</script>";
} else {
    echo "Erro ao excluir registro: " . mysqli_error($conn);
}

    

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>
