<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Clientes</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header>
			
<h1>Sistema de Cadastro</h1>
  <h2>Tela de inclusão</h2>
  <h3>Por equipe5</h3>
			</header>
	<p></p>
	<div class="form-wrapper">
		
		<form action="incluir_cadastro.php" method="post">

			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" required>
 
                  <label for="sobrenome">Sobrenome:</label>
			<input type="text" name="sobrenome" id="sobrenome" required>
                  
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" required>
                  
                  <label for="sexo">Sexo:</label>
		      <select id="sexo" name="sexo" required>
			<option value="">Selecione...</option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
			<option value="outro">Outro</option>
		      </select>

                  <label for="telefone">Telefone:</label>
			<input type="text" name="telefone" id="telefone" required>

			<label for="endereco">Endereço:</label>
			<input type="text" name="endereco" id="endereco" required>

			<label for="cidade">Cidade:</label>
                  <input type="text" name="cidade" id="cidade" required>

                  <label for="estado">Estado:</label>
                  <input type="text" name="estado" id="estado" required>
                                
			<label for="pais">País:</label>
			<input type="text" name="pais" id="pais" required>
<div class="botao-container">
			<button type="submit" name="submit">Enviar</button>
			<button class="btn" onclick="location.href='index.php'">Cancelar</button>
</div>
		</form>
	</div>
</body>
</html>
