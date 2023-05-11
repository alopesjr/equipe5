<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Clientes</title>
  <link rel="stylesheet" type="text/css" href="style.css">
	


</head>
<body>
<header>
			
			<h1>Sistema de Cadastro</h1>
			  <h2>Listagem de Cadastro</h2>
			  <h3>Por equipe5</h3>
						</header>
  <div  class="container">
	
	<table>
		<tr>
    
			<th>Nome</th>
			<th>E-mail</th>
			<th>Telefone</th>
      <th>Enderaço</th>
      <th>Cidade</th>
      <th>Estado</th>
      <th>Pais</th>
      <th>Editar</th>
	  <th>Excluir</th>
		</tr>
       
		<?php 
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
			$sql = "SELECT * FROM clientes";
			$result = mysqli_query($conn, $sql);

			// Loop para imprimir cada registro na tabela
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
       
        echo "<td>" . $row['nome'] . " " . $row['sobrenome'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telefone'] . "</td>";
        echo "<td>" . $row['endereco'] . "</td>";
        echo "<td>" . $row['cidade'] . "</td>";
        echo "<td>" . $row['estado'] . "</td>";
        echo "<td>" . $row['pais'] . "</td>";
        echo '<td><button class="btn-editar" onclick="location.href=\'editar_cadastro.php?id=' . $row['id'] . '\'">Editar</button></td>';
		echo '<td><button class="btn-editar" onclick="location.href=\'excluir_cadastro.php?id=' . $row['id'] . '\'">Excluir</button></td>';
        echo "</tr>";



			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conn);
			
		?>
	</table>
<p></p>
	<button class="btn" onclick="location.href='index.php'">Voltar ao Menu</button>
		</div>
</body>
</html>
