<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página do Admistrador</title>
</head>

<body>

<?php

session_start();

if($_SESSION['nome']){
	echo " Bem vindo Admistrador " . $_SESSION['nome'];
	}else{
	
		header('Location:index.php');
		echo " Úsuario ou Senha está correto " ;
	}

//vem o ADM

?>
</body>
</html>