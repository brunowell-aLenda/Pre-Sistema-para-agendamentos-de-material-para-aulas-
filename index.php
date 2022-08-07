<!DOCTYPE html>
<html>
<head>
<metacharset=utf-8" />
<title>Login</title>
</head>

<body>
<body>

<h1>Login</h1>

<form name="cadastro"  action="index.php" method="POST">
<label>Usuário:</label><br>
<input type="text" name="usuario" id="usuario" placeholder="Digite o CPF"><br>
<label>Senha:</label><br>
<input type="password" name="senha" id="senha"><br>

<input type="submit" value="Enviar">
</form> 


------------------------------


<h1>Cadastro</h1>
<form name="cadastrousuario" action="index.php" method="POST">

<label>Nome:</label><br>
<input type="text" name="nome" id="nome"><br>
<label>Senha:</label><br>
<input type="text" name="senha" id="senha"><br>
<label>CPF:</label><br>
<input type="text" name="cpf" id="cpf"><br>

<input type="submit" value="Enviar">
</form>


<?php

include_once "conexao.php";
//isset verifica se algum campo esta em branco
// ! --> e para dentro do if  
if(isset($_POST['usuario']) && isset($_POST['senha'])){
	
	$usuario = $_POST['usuario'];
	$senha =   $_POST['senha'];
	
	
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$usuario' AND SENHA = '$senha' ";
	$result = mysqli_query($con, $sql);
	 
	 if (mysqli_num_rows($result) > 0) {
		  
		  $dados = mysqli_fetch_assoc($result);
		  $nome =  $dados['NOME'];
		  $tipo =  $dados['TIPO'];
		  
		  //inicia a sessao 
		  session_start();
		  $_SESSION["nome"] = $nome;
		
		 
		  if($tipo== 1){
			  
   //header leva para outra pagina que do adm; ADM.PHP E O NOME DA OUTRA PAGINA  
   //se n for ADM leva para a pagina do usuario   
			  header('Location:adm.php');
			  
			  }
		else{
			
			header('Location:usuario.php');
			
			}
		  
		 
	}
	
}


?>







</body>

</body>
</html>