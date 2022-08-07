<!DOCTYPE html>
<html>
<head>
<title>SIGE E.P</title>
<meta charset="utf-8">

<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/adapt.css">
	
<script type="text/javascript" src="Js/jquery.12.04.js"></script>
<script type="text/javascript" src="Js/index.js"></script>
<script type="text/javascript" src="Js/login.js"></script>

<script src="JAVA S/jquery.js"></script>
<script src="JAVA S/jquery-ui/jquery-ui.min.js"></script>
<link rel="stylesheet" href="JAVA S/jquery-ui/jquery-ui.min.css" >




<script language="javascript">
<!--  
function aumenta(obj){
    obj.height=obj.height*2;
	obj.width=obj.width*2;
}
 
function diminui(obj){
	obj.height=obj.height/2;
	obj.width=obj.width/2;
}
//--FAZ A IMAGEM CRESCER E DIMINUIR>
</script>


<script>

$.fx.speeds._default = 1000;

$(function(){
	$("#dialog").dialog({
		
		width:300,
		height:200,
		modal:true,
		autoOpen: false,
		show: "scale",
		hide: "explode",
		title:"Acessar sua conta:",
		
		
	    
	/*	
	Efeitos:	
	blind,bounce,clip,drop,explode,fade,fold,highlight,puff,pulsate,scale,shake,size,slide,transfer
	/*/	
	});
		
	$("#opener").click(function(){

		$("#dialog").dialog("open");

		return false;
	});
});
</script>



</head>
<body>
    <div class="carregamento">
	<div class="estado"><img src="img/carregando.gif"></div>
</div>
<main>
 <header>
       <div class="top-barra">
	       <h1>SIGE E.P</h1>
	
    
  <div class="eeep"></div>
    <div class="data">
      <img src="img/data.gif"><p id="d"></p>
      </div>
 </header>
 
 <img src="ALUNO_ONLINE.png" button id="opener" width="180" height='98'  onMouseOver="aumenta(this)" onMouseOut="diminui(this)"> 
 
 <a href="index.php?id=1"> 
 
 <div id="dialog" > 
 

 </a>

 



<form name="cadastro"  action="index.php" method="POST">
<label>Matrícula:</label><br>
<input type="text" name="usuario" id="usuario" placeholder="Digite o CPF"><br>
<label>Senha:</label><br>
<input type="password" name="senha" id="senha"></br>

<input type="submit" value="Entrar" >
 
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




</div>



	
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>