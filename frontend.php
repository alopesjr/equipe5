<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>CADASTRO PESSOAL</title>
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
  <body>
    <div class="container">
      <h1>CADASTRO PESSOAL EQUIPE 07</h1>
      <form action="cadastrar.php" method="post">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>
        
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        
        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        
        <label for="idade">Idade:</label>
        <select id="idade" name="idade" required>
          <option value="">Selecione...</option>
          <option value="18-25">18-25</option>
          <option value="26-35">26-35</option>
          <option value="36-45">36-45</option>
          <option value="46+">46+</option>
        </select>
        
        <input type="submit" value="Cadastrar">
        <button class="btn" onclick="location.href='listar.php'">Listar clientes cadastrador</button>
        
      </form>
      

 
    </div>
  </body>
</html>
