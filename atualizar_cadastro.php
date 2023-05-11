<?php
// Verifica se foi enviado o formulário de atualização
if (isset($_POST['submit'])) {

	// Conexão com o banco de dados
	$host = "lopes.inf.br";
	$user = "equipe7";
	$pass = "6xh6$4B8d";
	$db = "cad_clientes";
	$conn = mysqli_connect($host, $user, $pass, $db);
	if (!$conn) {
		die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
	}

	// Obtém os dados do formulário
	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$email = $_POST['email'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];
	$endereco = $_POST['endereco'];
	$cidade = $_POST['cidade'];
	$estado = $_POST['estado'];
	$pais = $_POST['pais'];

	// Atualiza o registro no banco de dados
	$sql = "UPDATE clientes SET nome='$nome', sobrenome='$sobrenome', email='$email', sexo='$sexo', telefone='$telefone', endereco='$endereco', cidade='$cidade', estado='$estado', pais='$pais' WHERE id=$id";
	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Registro atualizado com sucesso!'); window.location.href='listar_cadastro.php';</script>";

		header("refresh:2;url=listar_cadastro.php");
	} else {
		echo "Erro ao atualizar registro: " . mysqli_error($conn);
	}

	// Fecha a conexão com o banco de dados
	mysqli_close($conn);

} else {
	// Se o formulário não foi enviado, redireciona para a página principal
	header("Location: index.php");
	exit();
}
?>
