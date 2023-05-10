<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Lista de Clientes</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}
		th, td {
			text-align: left;
			padding: 8px;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #f5f5f5;
		}


		<style>
      /* Estilos para o formulário */
      form {
        width: 400px;
        margin: 0 auto;
      }
      
      label {
        display: block;
        margin-bottom: 5px;
      }
      
      input[type="text"], input[type="email"], input[type="password"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: none;
        border-radius: 3px;
        background-color: #f2f2f2;
      }
      
      input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
      }
      
      input[type="submit"]:hover {
        background-color: #3e8e41;
      }
      
      /* Estilos para a página */
      body {
        font-family: Arial, sans-serif;
        background-color: #f5f5f5;
      }
      
      h1 {
        text-align: center;
        margin-top: 50px;
      }
      
      .container {
        width: 80%;
        margin: 0 auto;
        padding-top: 50px;
        padding-bottom: 50px;
        background-color: white;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
      }

      .btn {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
}

.btn:hover {
  background-color: #45a049;
}
	</style>
</head>
<body><div  class="container">
	<h1>Lista de Clientes</h1>
	<table>
		<tr>
			<th>Nome</th>
			<th>E-mail</th>
			<th>Telefone</th>
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
				echo "<td>" . $row['nome'] . "</td>";
				echo "<td>" . $row['email'] . "</td>";
				echo "<td>" . $row['telefone'] . "</td>";
				echo "</tr>";
			}

			// Fechar a conexão com o banco de dados
			mysqli_close($conn);
		?>
	</table>
	<button class="btn" onclick="location.href='frontend.php'">Voltar para cadastro de clientes</button>
		</div>
</body>
</html>
