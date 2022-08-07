<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Página do Úsuario</title>


</head>

<body>
<?php

	
	if(isset($_GET['id']) == 1){
session_start();
session_destroy();
header('location:index.php');

}


?>

<?php





session_start();

if($_SESSION['nome']){
	echo " Bem vindo usuario " . $_SESSION['nome'];
	}else{
	
		header('Location:index.php');
		echo " Úsuario ou Senha está correto " ;
		
	}
	




?>

	<a href="usuario.php?id=1"><img src="../php1/alterar.png"></a>
</body>
</html>