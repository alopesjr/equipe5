<!DOCTYPE html>
<html>
<head>
	<title>Editar Cliente</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<header>
			
<h1>Sistema de Cadastro</h1>
  <h2>Tela de Edição</h2>
  <h3>Por equipe5</h3>
			</header>
	<p></p>
<?php
		// Verifica se foi enviado o ID do cliente
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		} else {
			header("Location: index.php");
			exit();
		}

		// Conexão com o banco de dados
		$host = "lopes.inf.br";
		$user = "equipe7";
		$pass = "6xh6$4B8d";
		$db = "cad_clientes";
		$conn = mysqli_connect($host, $user, $pass, $db);
		if (!$conn) {
			die("Falha na conexão com o banco de dados: " . mysqli_connect_error());
		}

		// Consulta ao banco de dados
		$sql = "SELECT * FROM clientes WHERE id=$id";
		$result = mysqli_query($conn, $sql);

		// Verifica se o cliente existe
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_assoc($result);
            $nome = $row['nome'];
			$sobrenome = $row['sobrenome'];
			$email = $row['email'];
			$sexo = $row['sexo'];
			$telefone = $row['telefone'];
			$endereco = $row['endereco'];
			$cidade = $row['cidade'];
			$estado = $row['estado'];
			$pais = $row['pais'];
		} else {
			header("Location: index.php");
			exit();
		}

		// Fecha a conexão com o banco de dados
		mysqli_close($conn);
	?>

	<div class="form-wrapper">
		<h2>Editar Cliente</h2>
		<form action="atualizar_cadastro.php" method="post">

			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" value="<?php echo $nome ?>" required>
 
                  <label for="sobrenome">Sobrenome:</label>
			<input type="text" name="sobrenome" id="sobrenome" value="<?php echo $sobrenome ?>" required>
                  
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" value="<?php echo $email ?>" required>
                  
                  <label for="sexo">Sexo:</label>
		      <select id="sexo" name="sexo" required>
			<option value="">Selecione...</option>
			<option value="masculino" <?php if ($sexo == 'masculino') { echo 'selected'; } ?>>Masculino</option>
			<option value="feminino" <?php if ($sexo == 'feminino') { echo 'selected'; } ?>>Feminino</option>
			<option value="outro" <?php if ($sexo == 'outro') { echo 'selected'; } ?>>Outro</option>
		      </select>

                  <label for="telefone">Telefone:</label>
			<input type="text" name="telefone" id="telefone" value="<?php echo $telefone ?>" required>

			<label for="endereco">Endereço:</label>
			<input type="text" name="endereco" id="endereco" value="<?php echo $endereco ?>" required>

			<label for="cidade">Cidade:</label>
                  <input type="text" name="cidade" id="cidade" value="<?php echo $cidade ?>" required>

                  <label for="estado">Estado:</label>
                  <input type="text" name="estado" id="estado" value="<?php echo $estado ?>" required>
                                
			<label for="pais">País:</label>
			<input type="text" name="pais" id="pais" value="<?php echo $pais ?>" required>

			<input type="hidden" name="id" value="<?php echo $id ?>">

			<div class="botao-container">
			<button type="submit" name="submit">Atualizar</button>
			<button class="btn" onclick="location.href='index.php'">Cancelar</button>
</div>
		</form>
	</div>
</body>
</html>
